<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    /**
     * Show Login Page
     */
    public function showLogin()
    {
        $session = session();

        // Get any error messages or previously entered data from flashdata
        // Flashdata is temporary data that survives one page redirect
        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        return view('auth/login', ['errors' => $errors, 'old' => $old]);
    }

    /**
     * Login User
     */
    public function login()
    {
        $request = service('request');
        $session = session();
        $validation = \Config\Services::validation();

        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();
        $email = trim($post['email']);

        /** @var \App\Entities\User|null $user */
        $user = $userModel->where('email', $email)->first();

        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'Invalid email or password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // verify password
        if (! password_verify($post['password'], $user->password_hash)) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        // SESSION (object properties)
        $session->set('user', [
            'id'           => $user->user_id,
            'email'        => $user->email,
            'first_name'   => $user->first_name,
            'last_name'    => $user->last_name,
            'type'         => strtolower($user->type),
            //'display_name' => $this->createDisplayName($user),
        ]);

        $type = strtolower($user->type ?? 'client');

        if ($type === 'admin') {
            // Managers go to admin dashboard
            return redirect()->to('/admin/dashboard');
        }

        if ($type === 'client') {
            // Regular clients go to home page
            return redirect()->to('/');
        }
    }

    /**
     * Logout User
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    /**
     * Show Signup Page
     */
    public function showSignup()
    {
        $session = session();

        if ($session->has('user')) {
            return redirect()->to('/');
        }

        // Get any previous errors or form data from flashdata
        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        // Show the signup form
        return view('auth/signup', ['errors' => $errors, 'old' => $old]);
    }

    // Signup User
    public function signup()
    {
        $request = service('request');
        $session = session();
        $validation = \Config\Services::validation();

        $validation->setRule('first_name', 'First name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('middle_name', 'Middle name', 'permit_empty');
        $validation->setRule('last_name', 'Last name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required|min_length[6]');
        $validation->setRule('password_confirm', 'Confirm Password', 'required|matches[password]');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();

        // Check for duplicate emails

        if ($userModel->where('email', $post['email'])->first()) {
            $session->setFlashdata('errors', ['email' => 'Email is already registered']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Insert user data

        $data = [
            'first_name'     => $post['first_name'],
            'middle_name'    => $post['middle_name'],
            'last_name'      => $post['last_name'],
            'email'          => $post['email'],
            'password_hash'  => password_hash($post['password'], PASSWORD_DEFAULT),
            'gender' => $post['gender'],
            'phone_number' => $post['phone_number'],
            'address_line' => $post['address_line'],
            'city' => $post['city'],
            'province' => $post['province'],
            'postal_code' => $post['postal_code'],
            'type'           => 'client',
            'account_status' => 1,
            'email_activated' => 1,
            'newsletter' => 1,
        ];

        $inserted = $userModel->insert($data);

        if ($inserted === false) {
            $session->setFlashdata('errors', ['general' => 'Could not create account']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $newUser = $userModel->find($inserted);

        // SESSION (entity properties)
        $session->set('user', [
            'id' => $newUser->id ?? null,
            'email' => $newUser->email ?? null,
            'first_name' => $newUser->first_name ?? null,
            'last_name' => $newUser->last_name ?? null,
            'type' => $newUser->type ?? 'client',
            // Create display name: "J D Smith" format
            'display_name' => trim(($newUser->first_name[0] ?? '') . ' ' . ($newUser->middle_name[0] ?? '') . ' ' . ($newUser->last_name ?? '')),
        ]);

        // Set success message and redirect to home page
        $session->setFlashdata('success', 'Account created successfully!');
        return redirect()->to('/');
    }
}

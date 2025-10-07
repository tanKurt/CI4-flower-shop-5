<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing');
    }
    public function login()
    {
        return view('user/loginPage');
    }
    public function signup()
    {
        return view('user/signupPage');
    }
    public function moodboard()
    {
        return view('user/moodboard');
    }
    public function roadmap()
    {
        return view('user/roadmap');
    }
}

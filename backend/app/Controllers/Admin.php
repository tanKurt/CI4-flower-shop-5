<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function showDashboardPage()
    {
        return view('admin/dashboard');
    }
}

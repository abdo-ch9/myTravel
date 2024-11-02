<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminContoller extends Controller
{
    public function adminindex()
    {
        return view("adminDashboard.index");
    }

    public function adminuser()
    {
        return view("adminDashboard.adminUsers");
    }
    public function tripsAdmin()
    {
        return view("adminDashboard.admintrips");
    }
    public function accountAdmin()
    {
        return view("adminDashboard.accountadmin");
    }
}

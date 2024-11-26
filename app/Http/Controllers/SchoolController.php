<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function home() {
        return view("school.home");
    }

    public function account_settings() {
        return view("school.account_settings");
    }
}

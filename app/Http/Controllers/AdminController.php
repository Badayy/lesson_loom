<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home() {
        return view('admin.home');
    }

    public function newschool() {
        return view('admin.newschool');
    }

    public function newteacher() {
        return view('admin.newteacher');
    }

    public function rejectschool() {
        return view('admin.rejectschool');
    }

    public function rejectteacher() {
        return view('admin.rejectteacher');
    }

    public function viewschool() {
        return view('admin.viewschool');
    }

    public function viewteacher() {
        return view('admin.viewteacher');
    }
}

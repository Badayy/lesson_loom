<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function home() {
        return view("teacher.home");
    }

    public function account_settings() {
        return view('teacher.account_settings');
    }

    public function class_archive() {
        return view('teacher.class_archive');
    }

    public function class() {
        return view('teacher.class');
    }
    
    public function lessonplan() {
        return view('teacher.lessonplan');
    }

    public function join_class() {
        return view('teacher.join_class');
    }

    public function profile() {
        return view('teacher.profile');
    }

    public function school_archive() {
        return view('teacher.school_archive');
    }
}

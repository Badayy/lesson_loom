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

    public function add_template() {
        return view("school.add_template");
    }

    public function class_archive() {
        return view("school.class_archive");
    }

    public function lessonplan() {
        return view('school.lessonplan');
    }

    public function newteacher() {
        return view('school.newteacher');
    }

    public function profile() {
        return view('school.profile');
    }

    public function rejoin_teacher() {
        return view('school.rejoin_teacher');
    }

    public function teacher_archive() {
        return view('school.teacher_archive');
    }

    public function view_teacher() {
        return view('school.view_teacher');
    }

    public function view_template() {
        return view('school.view_template');
    }

}
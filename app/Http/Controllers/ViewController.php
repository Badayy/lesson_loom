<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index() {
        return view('index');
    }

    public function forgotpass() {
        return view('forgotpass');
    }

    public function signup() {
        return view('signup');
    }

    // SCHOOL
    public function school_home() {
        return view('school.home');
    }

    public function school_account_settings() {
        return view('school.account_settings');
    }

    public function school_add_template() {
        return view('school.add_template');
    }

    public function school_class_archive() {
        return view('school.class_archive');
    }

    public function school_lessonplan() {
        return view('school.lessonplan');
    }

    public function school_newteacher() {
        return view('school.newteacher');
    }

    public function school_profile() {
        return view('school.profile');
    }

    public function school_rejoin_teacher() {
        return view('school.rejoin_teacher');
    }

    public function school_teacher_archive() {
        return view('school.teacher_archive');
    }

    public function school_view_teacher() {
        return view('school.view_teacher');
    }

    public function school_view_template() {
        return view('school.view_template');
    }

    // TEACHER
    public function teacher_home() {
        return view('teacher.home');
    }

    public function teacher_account_settings() {
        return view('teacher.account_settings');
    }

    public function teacher_class_archive() {
        return view('teacher.class_archive');
    }

    public function teacher_lessonplan() {
        return view('teacher.lessonplan');
    }

    public function teacher_join_class() {
        return view('teacher.join_class');
    }

    public function teacher_profile() {
        return view('teacher.profile');
    }

    public function teacher_school_archive() {
        return view('teacher.school_archive');
    }


}

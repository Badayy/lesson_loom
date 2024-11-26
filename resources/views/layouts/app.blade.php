<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lesson Loom</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <div class="sidebar">
        <h3 class="text-center">
            <a href="/admin/home" class="{{ request()->is('admin/home') ? 'active' : '' }}">Dashboard</a>
        </h3>
        <h6 class="text-center small"><a href=""><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></h6>
        <hr style="border: none; border-top: 1px solid #818181; width: 100%; margin: 16px 0;">
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#school-collapse" aria-expanded="false">
                    <i class="fa-solid fa-school"></i> School
                </button>
                <div class="collapse {{ request()->is('admin/newschool', 'admin/viewschool', 'admin/rejectschool') ? 'show' : '' }}" id="school-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/admin/newschool" class="{{ request()->is('admin/newschool') ? 'active' : '' }}"><i class="fa-solid fa-eye"></i> Newcomer</a></li>
                        <li><a href="/admin/viewschool" class="{{ request()->is('admin/viewschool') ? 'active' : '' }}"><i class="fa-solid fa-calendar-check"></i> Accepted</a></li>
                        <li><a href="/admin/rejectschool" class="{{ request()->is('admin/rejectschool') ? 'active' : '' }}"><i class="fa-solid fa-calendar-xmark"></i> Reject</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#teacher-collapse" aria-expanded="false">
                    <i class="fa-solid fa-chalkboard-user"></i> Teacher
                </button>
                <div class="collapse {{ request()->is('admin/newteacher', 'admin/viewteacher', 'admin/rejectteacher') ? 'show' : '' }}" id="teacher-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/admin/newteacher" class="{{ request()->is('admin/newteacher') ? 'active' : '' }}"><i class="fa-solid fa-eye"></i> Newcomer</a></li>
                        <li><a href="/admin/viewteacher" class="{{ request()->is('admin/viewteacher') ? 'active' : '' }}"><i class="fa-solid fa-calendar-check"></i> Accepted</a></li>
                        <li><a href="/admin/rejectteacher" class="{{ request()->is('admin/rejectteacher') ? 'active' : '' }}"><i class="fa-solid fa-calendar-xmark"></i> Reject</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="content p-5">
        @yield('main-content')
    </div>

    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

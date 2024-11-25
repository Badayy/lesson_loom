<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Loom</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button id="toggleSidebar" class="btn"><i class="fa-solid fa-bars"></i></button>
            <a class="navbar-brand" href="/teacher_home">
                <img src="{{ asset('images/logo1.png') }}" alt="Logo">
                LessonLoom
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-center text-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="teacher_profile">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket" style="font-size: 1em;"></i> Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#school-collapse" aria-expanded="false"><i class="fa-solid fa-book"></i>
                 School
                </button>
                <div class="collapse" id="school-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/teacher_join_class">School 1</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#class-collapse" aria-expanded="false"><i class="fa-solid fa-book"></i>
                 Class
                </button>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#setting-collapse" aria-expanded="false"><i class="fa-solid fa-gear"></i>
                 Setting
                </button>
                <div class="collapse show" id="setting-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li class="active"><a href="/teacher_profile">Profile</a></li>
                        <li><a href="/teacher_account_settings">Account Settings</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#archive-collapse" aria-expanded="false"><i class="fa-solid fa-folder-open"></i>
                 Archive
                </button>
                <div class="collapse" id="archive-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/teacher_school_archive">School</a></li>
                        <li><a href="/teacher_class_archive">Class</a></li>
                        <li><a href="/teacher_lessonplan">Lesson Plan</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

     <!-- Content -->
     <div class="content p-5">
        <div class="container py-2">
            <div class="container profile-container">
                <div class="profile-card">
                    <div class="profile-card-header">
                        <div class="profile-pic-container">
                            <img src="https://i.pinimg.com/236x/a4/06/90/a40690ca5695bbb1b98bd92df6027cba.jpg" alt="Profile Picture">
                        </div>
                        <h3>Teachers' Name</h3>
                    </div>

                    <div class="profile-card-body p-5 text-center">
                        <div class="row g-5">
                            <div class="col-6">
                                <div class="profile-info">
                                    <h5>First Name:</h5>
                                    <p class="text-muted">John</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="profile-info">
                                    <h5>Last Name:</h5>
                                    <p class="text-muted">Doe</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="profile-info">
                                    <h5>Gender:</h5>
                                    <p class="text-muted">Male</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="profile-info">
                                    <h5>Birthday:</h5>
                                    <p class="text-muted">11/11/2023</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="profile-info">
                                    <h5>Age:</h5>
                                    <p class="text-muted">29</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="profile-info">
                                    <h5>Address:</h5>
                                    <p class="text-muted">Cams</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="profile-info">
                                    <h5>Phone:</h5>
                                    <p class="text-muted">092378647</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="profile-info">
                                    <h5>Email:</h5>
                                    <p class="text-muted">teacher@email.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const body = document.body;

            if (sidebar.style.display === 'none') {
                sidebar.style.display = 'block';
                body.classList.remove('sidebar-hidden'); 
            } else {
                sidebar.style.display = 'none';
                body.classList.add('sidebar-hidden'); 
            }
        });
    </script>
</body>
</html>
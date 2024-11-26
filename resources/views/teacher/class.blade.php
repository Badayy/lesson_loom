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
            <a class="navbar-brand" href="/teacher/home">
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
                <div class="collapse show" id="school-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/teacher/join_class">School 1</a></li>
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
                <div class="collapse" id="setting-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/teacher/profile">Profile</a></li>
                        <li><a href="/teacher/account_settings">Account Settings</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#archive-collapse" aria-expanded="false"><i class="fa-solid fa-folder-open"></i>
                 Archive
                </button>
                <div class="collapse" id="archive-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/teacher/school_archive">School</a></li>
                        <li><a href="/teacher/class_archive">Class</a></li>
                        <li><a href="/teacher/lessonplan">Lesson Plan</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

     <!-- Content -->
     <div class="content p-5">
        <div class="container-fluid">
            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="calendar-tab" data-bs-toggle="tab" href="#calendar" role="tab" aria-controls="calendar" aria-selected="true">Calendar</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="classwork-tab" data-bs-toggle="tab" href="#classwork" role="tab" aria-controls="classwork" aria-selected="false">Classwork</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="teacher-tab" data-bs-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
                </li>
            </ul>
        </div>
            
        <!-- Tab Content -->
        <div class="container-fluid">
            <div class="tab-content" id="myTabsContent">
                <!-- Calendar Tab -->
                <div class="tab-pane fade show active p-5 text-center" id="calendar" role="tabpanel" aria-labelledby="calendar-tab">
                    <h3>Calendar</h3>
                </div>
        
                <!-- Classwork Tab -->
                <div class="tab-pane fade p-5" id="classwork" role="tabpanel" aria-labelledby="classwork-tab">
                    <div class="row g-3">
                        <div class="col-9">
                            <div class="search-container float-start">
                                <input type="text" class="form-control" id="searchInput" placeholder="Search..."> 
                                <button class="btn search-button">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-4 mt-5">
                            <a href="" style="text-decoration: none;">
                                <div class="box text-center">
                                    <div class="box-title text-dark mt-3">
                                        <h2>Title</h2>
                                    </div>
                                    <div class="box-description text-dark mt-3">
                                        <h5>Description</h5>
                                    </div>
                                    <div class="box-duedate text-muted">
                                        <p>2024 - 2025</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        


                    </div>
                </div>
        
                <!-- Teacher Tab -->
                <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
                    <table class="table table-bordered table-striped text-center my-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Teacher</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>0</th>
                                <th>Full Name</th>
                            </tr>
                        </tbody>
                    </table>
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
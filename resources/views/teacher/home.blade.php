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
                    <li class="nav-item">
                        <button class="btn-plus" data-bs-toggle="modal" data-bs-target="#joinSchoolModal">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </li>
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
                <div class="collapse" id="setting-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/teacher_profile">Profile</a></li>
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
        <div class="container my-5">
            <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="box text-center" style="height: 250px;">
                            <div class="box-header dropend text-end">
                                <button class="btn" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Leave</a></li>
                                </ul>
                            </div>
                            <a href="/teacher_join_class" style="text-decoration: none;">
                            <div class="box-logo mt-3">
                                <div class="profile-pic-container">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxo_EgOHHVrVITw2o-lsPjg8ekV2weKU8OFg&s" alt="Profile Picture">
                                </div>
                            </div>
                            <div class="box-schoolname text-dark mt-3">
                                <h5>School Name</h5>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Join School Modal -->
    <div class="modal fade" id="joinSchoolModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body mt-2">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Enter School Code:</label>
                            <input type="text" class="form-control form-code" placeholder="CODE" maxlength="6" required style="height: 100px; font-size: 5em; text-align: center;"> 
                        </div>
                        <button type="submit" class="btn custom-btn mt-5 mb-3">Join</button> 
                    </form>
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
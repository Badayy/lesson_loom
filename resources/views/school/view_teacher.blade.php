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
            <a class="navbar-brand" href="/school/home">
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
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#codeModal">CODE</a></li>
                            <li><a class="dropdown-item" href="/school/profile">PROFILE</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket" style="font-size: 1em;"></i> SIGN OUT</a></li>
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
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#class-collapse" aria-expanded="false"><i class="fa-solid fa-book"></i>
                 Class
                </button>
                <div class="collapse" id="class-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="">Subject1</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#teacher-collapse" aria-expanded="false"><i class="fa-solid fa-chalkboard-user"></i>
                 Teacher
                </button>
                <div class="collapse show" id="teacher-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/newteacher">New</a></li>
                        <li class="active"><a href="/school/view_teacher">View</a></li>
                        <li><a href="/school/rejoin_teacher">Rejoin</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#template-collapse" aria-expanded="false"><i class="fa-solid fa-clipboard"></i>
                 Template
                </button>
                <div class="collapse" id="template-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/add_template">Add</a></li>
                        <li><a href="/school/view_template">View</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#setting-collapse" aria-expanded="false"><i class="fa-solid fa-gear"></i>
                 Setting
                </button>
                <div class="collapse" id="setting-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/profile">Profile</a></li>
                        <li><a href="/school/account_settings">Account Settings</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#archive-collapse" aria-expanded="false"><i class="fa-solid fa-folder-open"></i>
                 history
                </button>
                <div class="collapse" id="archive-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/class_archive">Class</a></li>
                        <li><a href="/school/teacher_archive">Teacher</a></li>
                        <li><a href="/school/lessonplan">Lesson Plan</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content p-5">
        <div class="search-container my-5">
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            <button class="btn search-button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Teacher</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0</th>
                    <th>Full Name</th>
                    <th>
                        <i class="fa-solid fa-eye text-primary h4" data-bs-toggle="modal" data-bs-target="#viewTeacher" style="cursor: pointer;"></i>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Code Modal -->
    <div class="modal fade" id="codeModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="mb-3 mt-3 text-center">
                            <h1>CODE</h1>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Teacher Modal -->
    <div class="modal fade" id="viewTeacher" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col-5 mb-3 mt-5">
                            <div class="profile-pic-container">
                                <img src="https://i.pinimg.com/236x/a4/06/90/a40690ca5695bbb1b98bd92df6027cba.jpg" alt="Profile Picture">
                            </div>
                        </div>
                        <div class="col-7 mb-3">
                            <div class="additional-info mt-5 p-2">
                                <div class="row info-row">
                                    <div class="col-5 info-label">Email:</div>
                                    <div class="col-7 info-field">teacher@example.com</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">Gender:</div>
                                    <div class="col-7 info-field">Female</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">Birthday:</div>
                                    <div class="col-7 info-field">January 15, 1995</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">Age:</div>
                                    <div class="col-7 info-field">29</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">Address:</div>
                                    <div class="col-7 info-field">Cams</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">Contact:</div>
                                    <div class="col-7 info-field">09234762</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="profile-details">
                                <h5 class="card-title">Teachers' Name</h5>
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
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
            <a class="navbar-brand" href="/school_home">
                <img src="{{ asset('images/logo1.png') }}" alt="Logo">
                LessonLoom
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn-plus" data-bs-toggle="modal" data-bs-target="#addClassModal">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-center text-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#codeModal">CODE</a></li>
                            <li><a class="dropdown-item" href="/school_profile">PROFILE</a></li>
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
                <div class="collapse" id="teacher-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school_newteacher">New</a></li>
                        <li><a href="/school_view_teacher">View</a></li>
                        <li><a href="/school_rejoin_teacher">Rejoin</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#template-collapse" aria-expanded="false"><i class="fa-solid fa-clipboard"></i>
                 Template
                </button>
                <div class="collapse" id="template-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school_add_template">Add</a></li>
                        <li><a href="/school_view_template">View</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#setting-collapse" aria-expanded="false"><i class="fa-solid fa-gear"></i>
                 Setting
                </button>
                <div class="collapse" id="setting-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school_profile">Profile</a></li>
                        <li><a href="/school_account_settings">Account Settings</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#archive-collapse" aria-expanded="false"><i class="fa-solid fa-folder-open"></i>
                 History
                </button>
                <div class="collapse" id="archive-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school_class_archive">Class</a></li>
                        <li><a href="/school_teacher_archive">Teacher</a></li>
                        <li><a href="/school_lessonplan">Lesson Plan</a></li>
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
                        <div class="box text-center">
                            <div class="box-header dropend text-end">
                                <button class="btn" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#updateModal" style="cursor: pointer;">Update</a></li>
                                    <li><a class="dropdown-item" href="#">Archive</a></li>
                                </ul>
                            </div>
                            <a href="" data-bs-toggle="modal" data-bs-target="#passwordModal" style="text-decoration: none;">
                            <div class="box-subject text-dark mt-3">
                                <h2>SUBJECT</h2>
                            </div>
                            <div class="box-grdlvl text-dark mt-3">
                                <h5>Grade Level</h5>
                            </div>
                            <div class="box-year text-muted">
                                <p>2024 - 2025</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Create Class Modal -->
    <div class="modal fade" id="addClassModal" tabindex="-1" aria-labelledby="addClassModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1 class="text-center mt-3">Create Class</h1>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3 mt-3">
                                <label for="AcademicStart">Academic Year Start:</label>
                                <input type="month" class="form-control" id="academicstart" name="academicstart" required>
                            </div>
                            <div class="col-md-6 mb-3 mt-3">
                                <label for="AcademicEnd">Academic Year End:</label>
                                <input type="month" class="form-control" id="academicend" name="academicend" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="GradeLevel">Grade Level</label>
                                <input type="text" class="form-control" id="grdlvl" placeholder="Grade Level" name="grdlvl" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn custom-btn mt-5 mb-3">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Class Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1 class="text-center mt-3">Update Class</h1>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3 mt-3">
                                <label for="AcademicStart">Academic Year Start:</label>
                                <input type="month" class="form-control" id="academicstart" name="academicstart" required>
                            </div>
                            <div class="col-md-6 mb-3 mt-3">
                                <label for="AcademicEnd">Academic Year End:</label>
                                <input type="month" class="form-control" id="academicend" name="academicend" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="GradeLevel">Grade Level</label>
                                <input type="text" class="form-control" id="grdlvl" placeholder="Grade Level" name="grdlvl" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <button type="submit" class="btn custom-btn mt-5 mb-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Modal -->
    <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <form>
                        <div class="col-md-12 mb-3">
                            <label for="Password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

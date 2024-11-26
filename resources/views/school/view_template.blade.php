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
                <div class="collapse" id="teacher-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/newteacher">New</a></li>
                        <li><a href="/school/view_teacher">View</a></li>
                        <li><a href="/school/rejoin_teacher">Rejoin</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#template-collapse" aria-expanded="false"><i class="fa-solid fa-clipboard"></i>
                 Template
                </button>
                <div class="collapse show" id="template-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/add_template">Add</a></li>
                        <li class="active"><a href="/school/view_template">View</a></li>
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
        <h1>Content</h1>
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
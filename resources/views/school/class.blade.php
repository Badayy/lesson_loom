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
                <div class="collapse show" id="class-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/class">Subject1</a></li>
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
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#history-collapse" aria-expanded="false"><i class="fa-solid fa-folder-open"></i>
                 History
                </button>
                <div class="collapse" id="history-collapse">
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
                        <div class="col-3">
                            <button type="button" class="btn tab-btn float-end" data-bs-toggle="modal" data-bs-target="#classworkModal" style="width: 70%;">
                                <i class="fa-solid fa-plus"></i> Add Classwork
                            </button>
                        </div>

                        <div class="col-4 mt-5">
                            <div class="box text-center">
                                <div class="box-header dropend text-end">
                                    <button class="btn" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#updateModal" style="cursor: pointer;">Update</a></li>
                                    </ul>
                                </div>
                                <a href="" style="text-decoration: none;">
                                <div class="box-title text-dark mt-3">
                                    <h2>Title</h2>
                                </div>
                                <div class="box-description text-dark mt-3">
                                    <h5>Description</h5>
                                </div>
                                <div class="box-duedate text-muted">
                                    <p>2024 - 2025</p>
                                </div>
                                </a>
                            </div>
                        </div>
                        


                    </div>
                </div>
        
                    <!-- Classwork Modal -->
                    <div class="modal fade" id="classworkModal" tabindex="-1" aria-labelledby="classworkModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h5 class="modal-title" id="classworkModalLabel">Create Classwork</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12 mb-3 mt-3">
                                                <label for="title">Title:</label>
                                                <input type="text" class="form-control" id="title" name="title" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label for="AcademicEnd">Description:</label>
                                                <input type="text" class="form-control" id="description" name="description" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="duedate">Due Date:</label>
                                                <input type="date" class="form-control" id="duedate" placeholder="duedate" name="duedate" required>
                                            </div>
                                            <div class="col-md-8 mb-3 mt-4">
                                                <button type="submit" class="btn custom-btn float-end mb-3" style="margin-right: 20px">Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="updateModalLabel">Update Classwork</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12 mb-3 mt-3">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="AcademicEnd">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="duedate">Due Date:</label>
                                <input type="date" class="form-control" id="duedate" placeholder="duedate" name="duedate" required>
                            </div>
                            <div class="col-md-8 mb-3 mt-4">
                                <button type="submit" class="btn custom-btn float-end mb-3" style="margin-right: 20px">Update</button>
                            </div>
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

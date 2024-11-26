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
                            <li><a class="dropdown-item" href="/schoolprofile">PROFILE</a></li>
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
                <div class="collapse show" id="setting-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/profile">Profile</a></li>
                        <li><a href="/school/account_settings">Account Settings</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#archive-collapse" aria-expanded="false"><i class="fa-solid fa-folder-open"></i>
                 Archive
                </button>
                <div class="collapse" id="archive-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/school/class_archive">Class</a></li>
                        <li><a href="/school/teacher_archive">Teacher</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content p-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Account Settings</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-5">
                                <div>  
                                    <h6>Change your profile.</h6>
                                </div>
                                <div>
                                    <i><span style="color: grey;">Update your profile picture.</span></i> 
                                    <a data-bs-toggle="modal" data-bs-target="#changeProfileModal" style="color: grey; cursor: pointer;" class="h6">Manage</a>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div>
                                    <h6>Change your password.</h6>
                                </div>
                                <div>
                                    <i>Secure your account by updating your password.</span></i>
                                 <a data-bs-toggle="modal" data-bs-target="#changePasswordModal" style="color: grey; cursor: pointer;">Manage</a>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <h6>Change your info. <a data-bs-toggle="modal" data-bs-target="#schoolInfoModal" style="color: grey; cursor: pointer;">Manage</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Profile Modal -->
    <div class="modal fade" id="changeProfileModal" tabindex="-1" aria-labelledby="changeProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog text-center">
            <div class="modal-content">
                <form>
                    <h5 class="modal-title text-center my-4" id="profileModalLabel" style="font-size: 1.5rem; font-weight: bold;">Change Profile Picture</h5>
                    <div class="modal-body">
                        <div class="profile-pic-container">
                            <img id="profilePic" src="https://images.pexels.com/photos/36029/aroni-arsa-children-little.jpg?cs=srgb&dl=pexels-pixabay-36029.jpg&fm=jpg" alt="Profile Picture">
                            <label for="profilePicInput" class="change-photo-btn">
                                <i class="fas fa-camera text-light"></i>
                            </label>
                            <input type="file" id="profilePicInput" onchange="previewImage(event)" style="display: none;">
                        </div>
                        <button type="submit" class="btn custom-btn">Update Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-body">
                    <h5 class="modal-title text-center my-4" style="font-size: 1.5rem; font-weight: bold;">Change Password</h5>
                    <form>
                        <div class="mb-3">
                            <label for="oldPassword" class="form-label">Old Password</label>
                            <input type="password" class="form-control" id="oldPassword" required placeholder="Enter old password">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newPassword" required placeholder="Enter new password">
                        </div>
                        <div class="mb-5">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" required placeholder="Confirm new password">
                        </div>
                        <button type="submit" class="btn custom-btn">Update Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- School Info Modal -->
    <div class="modal fade" id="schoolInfoModal" tabindex="-1" aria-labelledby="schoolInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title text-center my-4" style="font-size: 1.5rem; font-weight: bold;">Change Information</h5>
                    <form>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="schoolName" class="form-label">School Name</label>
                                <input type="text" class="form-control" id="schoolName" required>
                            </div>
                            <div class=" col-6 mb-3">
                                <label for="schoolID" class="form-label">School ID</label>
                                <input type="text" class="form-control" id="schoolID" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="schoolAcronym" class="form-label">School Acronym</label>
                                <input type="text" class="form-control" id="schoolAcronym" required>
                            </div>
                            <div class=" col-12 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" required>
                            </div>
                        </div>
                            <button type="button" class="btn custom-btn mt-5 mb-3">Update</button>
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

        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function () {
                const imgElement = document.getElementById("profilePic");
                imgElement.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
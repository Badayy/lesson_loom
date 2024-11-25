<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Loom</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h3 class="text-center">
            <a href="/admin_home">Dashboard</a>
        </h3>
        <h6 class="text-center small"><a href=""><i class="fa-solid fa-right-from-bracket"></i> Sign Out</a></h6>
        <hr style="border: none; border-top: 1px solid #818181; width: 100%; margin: 16px 0;">
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#school-collapse" aria-expanded="false"><i class="fa-solid fa-school"></i>
                School
                </button>
                <div class="collapse" id="school-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/admin_newschool"><i class="fa-solid fa-eye"></i> Newcomer </a></li>
                        <li><a href="/admin_viewschool"><i class="fa-solid fa-calendar-check"></i> Accepted </a></li>
                        <li><a href="/admin_rejectschool"><i class="fa-solid fa-calendar-xmark"></i> Reject </a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#teacher-collapse" aria-expanded="false"><i class="fa-solid fa-chalkboard-user"></i>
                Teacher
                </button>
                <div class="collapse show" id="teacher-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/admin_newteacher"><i class="fa-solid fa-eye"></i> Newcomer </a></li>
                        <li><a href="/admin_viewteacher"><i class="fa-solid fa-calendar-check"></i> Accepted </a></li>
                        <li class="active"><a href="/admin_rejectteacher"><i class="fa-solid fa-calendar-xmark"></i> Reject </a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <!-- The Content -->
    <div class="content p-5">
        <div class="search-container">
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            <button class="btn search-button" id="searchButton">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Teachers' Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <tr>
                    <th>0</th>
                    <th>Full Name</th>
                    <th>
                        <i class="fa-solid fa-eye text-primary h4" data-bs-toggle="modal" data-bs-target="#viewTeacher"></i>
                        
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
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
                            <div class="profile-details">
                                <h5 class="card-title">Teachers' Name</h5>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
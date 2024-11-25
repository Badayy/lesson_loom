@extends('layouts.app')

@section('main-content')
    <!-- The Content -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-12">
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
        </div>
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
@endsection
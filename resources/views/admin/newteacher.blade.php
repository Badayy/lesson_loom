@extends('layouts.app')

@section('main-content')
    <div class="container-fluid py-5">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <div class="profile-pic-container">
                            <img src="https://i.pinimg.com/236x/a4/06/90/a40690ca5695bbb1b98bd92df6027cba.jpg" alt="Profile Picture">
                        </div>
                        <div class="profile-details">
                            <h5 class="card-title">Teachers' Name</h5>
                        </div>
                        <div class="collapse collapsible-info mt-3" id="collapseTeacher">
                            <div class="additional-info">
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
                            <div class="profile-pic-container mt-5">
                                <img src="{{ asset('images/img1.png') }}" alt="Image 1">
                            </div>
                            <div class="profile-pic-container mt-2">
                                <img src="{{ asset('images/img2.png') }}" alt="Image 2">
                            </div>
                        </div>
                        <button class="btn btn-transparent button-collapse mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTeacher" aria-expanded="false" aria-controls="collapseTeacher">
                            Show Details
                        </button>
                    </div>
                    <div class="card-footer text-center">
                        <i class="fa-regular fa-circle-check h1 text-success"></i>
                        <i class="fa-regular fa-circle-xmark h1 text-danger"></i>
                    </div>
                </div>
            </div>     
        </div>
    </div>
@endsection

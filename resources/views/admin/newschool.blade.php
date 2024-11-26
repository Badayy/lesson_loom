@extends('layouts.admin')

@section('main-content')
    <div class="container py-5">
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <div class="profile-pic-container">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxo_EgOHHVrVITw2o-lsPjg8ekV2weKU8OFg&s" alt="Profile Picture">
                        </div>
                        <div class="profile-details">
                            <h5 class="card-title">School Name</h5>
                        </div>
                        <div class="collapse collapsible-info mt-3" id="collapseSchool">
                            <div class="additional-info">
                                <div class="row info-row">
                                    <div class="col-5 info-label">School ID:</div>
                                    <div class="col-7 info-field">2024</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">School Acronym:</div>
                                    <div class="col-7 info-field">CPC</div>
                                </div>
                                <div class="row info-row">
                                    <div class="col-5 info-label">Email:</div>
                                    <div class="col-7 info-field">school@example.com</div>
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
                                <img src="{{ asset('images/img4.png') }}" alt="Certificate">
                            </div>
                        </div>
                        <button class="btn btn-transparent button-collapse mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSchool" aria-expanded="false" aria-controls="collapseSchool">
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
   
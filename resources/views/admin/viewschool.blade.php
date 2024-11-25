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
                            <th>School Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr>
                            <th>0</th>
                            <th>Bradix University School</th>
                            <th>
                                <i class="fa-solid fa-eye text-primary h4" data-bs-toggle="modal" data-bs-target="#viewSchool"></i>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewSchool" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
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
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxo_EgOHHVrVITw2o-lsPjg8ekV2weKU8OFg&s" alt="Profile Picture">
                            </div>
                            <div class="profile-details">
                                <h5 class="card-title">School Name</h5>
                            </div>
                        </div>
                        <div class="col-7 mb-3">
                            <div class="additional-info mt-5 p-2">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
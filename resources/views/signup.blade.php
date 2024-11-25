<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Loom</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
</head>
<body>
    <div class="container p-5 mt-5">
        <div class="registration-box shadow animated">
            <div class="left-side">
                <h2 class="text-center mb-3">Registration Form</h2>
                <form>
                    <div class="mb-3">
                        <label for="roleSelect" class="form-label">Select Role : </label>
                        <select class="form-select" id="roleSelect" name="role">
                            <option disabled selected>Choose a role</option>
                            <option value="school">School</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>

                    <!-- School Registration Form -->
                    <div class="form-container" id="schoolForm" style="display: none;">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="schoolName">School Name</label>
                                    <input type="text" class="form-control" id="schoolName" name="schoolName" placeholder="Enter School Name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="schoolID">School ID</label>
                                    <input type="text" class="form-control" id="schoolID" name="schoolID" placeholder="Enter School ID" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="schoolAcronym">School Acronym</label>
                                    <input type="text" class="form-control" id="schoolAcronym" name="schoolAcronym" placeholder="Enter School Acronym" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="logoimages">Logo: </label>
                                    <input type="file" class="form-control" id="logoimages" name="logoimages" accept="image/*" multiple required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="docsimages">Certificate of School: </label>
                                    <input type="file" class="form-control" id="docsimages" name="docsimages" accept="image/*" multiple required>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="form-group mt-3 text-center">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Teacher Registration Form -->
                    <div class="form-container" id="teacherForm" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="profilepic">Selfie Picture: </label>
                                    <input type="file" class="form-control" id="picimages" name="picimages" accept="image/*" multiple required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="bdate">Birthday</label>
                                    <input type="date" class="form-control" id="bdate" name="bdate" required>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="form-group mt-3">
                                    <br>
                                    <input type="radio" name="gender" value="male" id="male" class="big-radio" required>
                                    <label for="male" style="margin-right: 25px;">Male</label>
                                    <input type="radio" name="gender" value="female" id="female" class="big-radio" required>
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="col-12 mt-5">
                                <label>ID Picture Examples:</label>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3 text-center">
                                    <img src="{{ asset('images/img1.png') }}" height="255">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3 text-center">
                                    <img src="{{ asset('images/img2.png') }}" height="255">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="frontimages">Front: </label>
                                    <input type="file" class="form-control" id="frontimages" name="frontimages" accept="image/*" multiple required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mt-3">
                                    <label for="backimages">Back: </label>
                                    <input type="file" class="form-control" id="backimages" name="backimages" accept="image/*" multiple required>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="form-group mt-3 text-center">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="right-side">
                <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid"></a>
            </div>
        </div>
    </div>



    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const roleSelect = document.getElementById('roleSelect');
        const schoolForm = document.getElementById('schoolForm');
        const teacherForm = document.getElementById('teacherForm');
        const registrationBox = document.querySelector('.registration-box'); // Reference to the registration box

        roleSelect.addEventListener('change', function() {
            schoolForm.style.display = 'none';
            teacherForm.style.display = 'none';

            // Reset the registration box height for both forms
            registrationBox.style.minHeight = '80vh'; // Default height

            if (this.value === 'school') {
                schoolForm.style.display = 'block';
            } else if (this.value === 'teacher') {
                teacherForm.style.display = 'block';
                // Adjust the registration box height for teacher form
                registrationBox.style.minHeight = '100vh'; // Increased height for Teacher form
            }
        });

    </script>
</body>
</html>

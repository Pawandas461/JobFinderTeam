<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <!-- <div class="dropdown"> -->
        <!-- Profile Dropdown Option -->
        <hr class="dropdown-divider">
        <a 
            class="dropdown-item d-flex align-items-center gap-2 py-2" data-bs-toggle="modal" data-bs-target="#profileModal">
            <i class="material-icons-outlined">person</i>Profile
        </a>
    <!-- </div> -->

    <!-- Modal Structure -->
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="profileModalLabel">Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-4 text-center">
                            <!-- User Profile Image -->
                            <img 
                                src="https://via.placeholder.com/150" 
                                alt="Profile Picture" 
                                class="rounded-circle img-thumbnail" 
                                style="width: 150px; height: 150px;"
                            >
                        </div>
                        <div class="col-md-8">
                            <h4>Pawan Das</h4>
                            <p>Email: {{ session('email') }}</p>
                            <p>Joined on: January 1, 2023</p>
                        </div>
                    </div>
                    <hr>
                    <h5>Resume</h5>
                    <p>No bio available.</p>
                </div>
                <div class="modal-footer">
                    <a href="edit-profile.html" class="btn btn-primary">Edit Profile</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

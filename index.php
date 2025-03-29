<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">BrandName</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex mx-auto" style="width: 40%;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

           
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <!-- Form Section -->
    <div class="card p-4 mx-auto shadow" style="max-width: 400px;">
        <h3 class="text-center mb-3">User Form</h3>
        <form id="userForm" method="post">
            <!-- Hidden Field for Editing -->
            <input type="hidden" id="editIndex">

            <!-- Full Name -->
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text"  name="name" class="form-control" id="fullName" placeholder="Enter full name" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" name="number" class="form-control" id="phone" placeholder="Enter phone number" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                
            }
        ?>
    </div>

    <!-- Table Section -->
    <div class="mt-5">
        <h3 class="text-center">User Details</h3>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="userTableBody">
                <tr>
                    <td>1</td>
                    <td>Rahul Sharma</td>
                    <td>9876543210</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editRow(this)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Amit Verma</td>
                    <td>9123456789</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editRow(this)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Priya Singh</td>
                    <td>8765432109</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editRow(this)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Neha Gupta</td>
                    <td>9988776655</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editRow(this)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

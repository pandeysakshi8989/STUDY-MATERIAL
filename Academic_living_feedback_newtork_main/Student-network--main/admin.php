<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .admin-header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#developers">Developers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#serviceProviders">Service Providers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reports">Reports</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <!-- Admin Information -->
        <div class="admin-header">
            <h2>Admin Name</h2>
            <img src="img/admin-photo.jpg" alt="Admin Photo" class="rounded-circle" width="100">
            <p>Contact: admin@example.com</p>
        </div>

        <!-- Developers Section -->
        <div id="developers" class="card">
            <h3>Developers</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Developer 1</td>
                        <td>dev1@example.com</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteMember('Developer 1')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Developer 2</td>
                        <td>dev2@example.com</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteMember('Developer 2')">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDeveloperModal">Add Developer</button>
        </div>

        <!-- Service Providers Section -->
        <div id="serviceProviders" class="card">
            <h3>Service Providers</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Service Provider 1</td>
                        <td>provider1@example.com</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteProvider('Service Provider 1')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Service Provider 2</td>
                        <td>provider2@example.com</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteProvider('Service Provider 2')">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProviderModal">Add Service Provider</button>
        </div>

        <!-- Reports Section -->
        <div id="reports" class="card">
            <h3>Reports of Misuse</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Report ID</th>
                        <th>Details</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Report 1</td>
                        <td>Details about misuse.</td>
                        <td>Under Review</td>
                    </tr>
                    <tr>
                        <td>Report 2</td>
                        <td>Details about misuse.</td>
                        <td>Resolved</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Add Developer Modal -->
    <div class="modal fade" id="addDeveloperModal" tabindex="-1" aria-labelledby="addDeveloperModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
               

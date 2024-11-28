<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .dashboard-header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .activity-card {
            margin-bottom: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
        }
        .slider {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .upload-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">User Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#activity">Activity</a></li>
                    <li class="nav-item"><a class="nav-link" href="#transactions">Transactions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#suggestions">Suggestions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#history">History</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <!-- User Information -->
        <div class="dashboard-header">
            <h2>Welcome, User Name</h2>
            <p>Email: user@example.com</p>
        </div>

        <!-- Activity Section -->
        <div id="activity" class="activity-card">
            <h3>Your Activities</h3>
            <p>Recent activity logs will be displayed here.</p>
            <!-- Example Activity List -->
            <ul>
                <li>Activity 1 - Date</li>
                <li>Activity 2 - Date</li>
                <li>Activity 3 - Date</li>
            </ul>
        </div>

        <!-- Transactions Section -->
        <div id="transactions" class="activity-card">
            <h3>Your Transactions</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Service</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-10-01</td>
                        <td>Service Name</td>
                        <td>$100</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>2024-09-15</td>
                        <td>Service Name</td>
                        <td>$50</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Services Section -->
        <div id="services" class="activity-card">
            <h3>Available Services</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/service1.jpg" class="slider" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Service 1</h5>
                            <p class="card-text">Description of service 1.</p>
                            <a href="#" class="btn btn-primary">Get Service</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/service2.jpg" class="slider" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Service 2</h5>
                            <p class="card-text">Description of service 2.</p>
                            <a href="#" class="btn btn-primary">Get Service</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/service3.jpg" class="slider" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Service 3</h5>
                            <p class="card-text">Description of service 3.</p>
                            <a href="#" class="btn btn-primary">Get Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Suggestions Section -->
        <div id="suggestions" class="activity-card">
            <h3>Suggestions & Reviews</h3>
            <form>
                <div class="mb-3">
                    <label for="suggestionText" class="form-label">Your Suggestion</label>
                    <textarea class="form-control" id="suggestionText" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="fileUpload" class="form-label">Upload File</label>
                    <input class="form-control" type="file" id="fileUpload" accept=".pdf,.jpg,.jpeg,.png">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Activity Analysis Section -->
        <div id="analysis" class="activity-card">
            <h3>Monthly Activity Analysis</h3>
            <p>Graphical representation of monthly activities will be displayed here.</p>
            <!-- You can integrate a chart library here for visualization -->
        </div>

        <!-- History Section -->
        <div id="history" class="activity-card">
            <h3>Record History</h3>
            <p>Details of past records and activities will be shown here.</p>
            <!-- Example History List -->
            <ul>
                <li>Record 1 - Date</li>
                <li>Record 2 - Date</li>
                <li>Record 3 - Date</li>
            </ul>
        </div>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 User Dashboard. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

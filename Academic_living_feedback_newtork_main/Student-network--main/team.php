<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Our Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .team-member {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .team-member:hover {
            transform: scale(1.05);
        }
        .team-photo {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Our Team</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h2 class="text-center">Meet Our Team</h2>

        <div class="row">
            <!-- Admin Team -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/admin1.jpg" alt="Admin Name" class="team-photo">
                    <h4>Admin Name 1</h4>
                    <p>Admin</p>
                    <p>Contact: <a href="mailto:admin1@example.com">admin1@example.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/admin2.jpg" alt="Admin Name" class="team-photo">
                    <h4>Admin Name 2</h4>
                    <p>Admin</p>
                    <p>Contact: <a href="mailto:admin2@example.com">admin2@example.com</a></p>
                </div>
            </div>

            <!-- Developer Team -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/dev1.jpg" alt="Developer Name" class="team-photo">
                    <h4>Developer Name 1</h4>
                    <p>Developer</p>
                    <p>Contact: <a href="mailto:dev1@example.com">dev1@example.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/dev2.jpg" alt="Developer Name" class="team-photo">
                    <h4>Developer Name 2</h4>
                    <p>Developer</p>
                    <p>Contact: <a href="mailto:dev2@example.com">dev2@example.com</a></p>
                </div>
            </div>

            <!-- Service Provider Team -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/service1.jpg" alt="Service Provider Name" class="team-photo">
                    <h4>Service Provider Name 1</h4>
                    <p>Service Provider</p>
                    <p>Contact: <a href="mailto:service1@example.com">service1@example.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-member">
                    <img src="img/service2.jpg" alt="Service Provider Name" class="team-photo">
                    <h4>Service Provider Name 2</h4>
                    <p>Service Provider</p>
                    <p>Contact: <a href="mailto:service2@example.com">service2@example.com</a></p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Our Team. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

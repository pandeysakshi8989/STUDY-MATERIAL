<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Counseling Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Counseling Help</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#counselors">Counselors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#student-records">Student Records</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <!-- Counselors Section -->
        <section id="counselors">
            <h2>Counselor Details</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Specialization</th>
                        <th>Description</th>
                        <th>Students Attended</th>
                        <th>Days Available</th>
                        <th>Time Available</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dr. Jane Smith</td>
                        <td><img src="img/counselor1.jpg" alt="Dr. Jane Smith" style="width: 100px; height: auto;"></td>
                        <td>Academic Counseling</td>
                        <td>Experienced in guiding students through academic challenges.</td>
                        <td>120</td>
                        <td>Mon, Wed, Fri</td>
                        <td>10 AM - 5 PM</td>
                    </tr>
                    <tr>
                        <td>Mr. John Doe</td>
                        <td><img src="img/counselor2.jpg" alt="Mr. John Doe" style="width: 100px; height: auto;"></td>
                        <td>Career Counseling</td>
                        <td>Specializes in career development and job placement.</td>
                        <td>80</td>
                        <td>Tue, Thu</td>
                        <td>1 PM - 6 PM</td>
                    </tr>
                    <!-- Add more counselors as needed -->
                </tbody>
            </table>
        </section>

        <!-- Student Records Section -->
        <section id="student-records" class="mt-5">
            <h2>Student Counseling Records</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Contact</th>
                        <th>Counseling Date</th>
                        <th>Successful</th>
                        <th>Subject of Matter</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alice Johnson</td>
                        <td>(123) 456-7890</td>
                        <td>2024-01-15</td>
                        <td>Yes</td>
                        <td>Time Management</td>
                    </tr>
                    <tr>
                        <td>Bob Brown</td>
                        <td>(987) 654-3210</td>
                        <td>2024-02-10</td>
                        <td>No</td>
                        <td>Career Choice</td>
                    </tr>
                    <!-- Add more student records as needed -->
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Counseling Help. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

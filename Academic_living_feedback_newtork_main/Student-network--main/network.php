<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Network Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Network Help</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#alumni">Alumni Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="#senior-students">Senior Students</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <!-- Alumni Students Section -->
        <section id="alumni">
            <h2>Alumni Students</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Course</th>
                        <th>CV</th>
                        <th>Place of Work</th>
                        <th>LinkedIn</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Emily Watson</td>
                        <td>(123) 456-7890</td>
                        <td>Computer Science</td>
                        <td><a href="cv_emily.pdf" target="_blank" class="btn btn-primary btn-sm">Download CV</a></td>
                        <td>Tech Solutions Inc.</td>
                        <td><a href="https://www.linkedin.com/in/emilywatson" target="_blank">LinkedIn Profile</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>(987) 654-3210</td>
                        <td>Business Administration</td>
                        <td><a href="cv_michael.pdf" target="_blank" class="btn btn-primary btn-sm">Download CV</a></td>
                        <td>Finance Corp.</td>
                        <td><a href="https://www.linkedin.com/in/michaeljohnson" target="_blank">LinkedIn Profile</a></td>
                    </tr>
                    <!-- Add more alumni students as needed -->
                </tbody>
            </table>
        </section>

        <!-- Senior Students Section -->
        <section id="senior-students" class="mt-5">
            <h2>Senior Students</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Group Name</th>
                        <th>Link of Connection</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Engineering Group</td>
                        <td><a href="https://groups.google.com/g/engineering-group" target="_blank">Join Group</a></td>
                        <td>Engineering</td>
                    </tr>
                    <tr>
                        <td>Business Club</td>
                        <td><a href="https://discord.gg/businessclub" target="_blank">Join Group</a></td>
                        <td>Business</td>
                    </tr>
                    <!-- Add more senior student groups as needed -->
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Network Help. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

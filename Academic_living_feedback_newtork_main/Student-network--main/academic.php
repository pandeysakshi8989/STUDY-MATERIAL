<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Academic Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Academic Help</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#books">Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#links">Useful Links</a></li>
                    <li class="nav-item"><a class="nav-link" href="#libraries">Libraries</a></li>
                    <li class="nav-item"><a class="nav-link" href="#papers">Previous Year Papers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#exams">Exam Resources</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <!-- Books Section -->
        <section id="books">
            <h2>Recommended Books</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Edition</th>
                        <th>Publication</th>
                        <th>Download</th>
                        <th>Read Only</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Book Title 1</td>
                        <td>Author Name 1</td>
                        <td>1st Edition</td>
                        <td>Publisher 1</td>
                        <td><a href="download/book1.pdf" class="btn btn-success btn-sm">Download</a></td>
                        <td><a href="read/book1.html" class="btn btn-info btn-sm">Read</a></td>
                    </tr>
                    <tr>
                        <td>Book Title 2</td>
                        <td>Author Name 2</td>
                        <td>2nd Edition</td>
                        <td>Publisher 2</td>
                        <td><a href="download/book2.pdf" class="btn btn-success btn-sm">Download</a></td>
                        <td><a href="read/book2.html" class="btn btn-info btn-sm">Read</a></td>
                    </tr>
                    <!-- Add more books as needed -->
                </tbody>
            </table>
        </section>

        <!-- Links Section -->
        <section id="links" class="mt-5">
            <h2>Useful Links</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Website Name</th>
                        <th>Subject</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Website 1</td>
                        <td>Subject 1</td>
                        <td><a href="http://example.com" target="_blank">Visit</a></td>
                    </tr>
                    <tr>
                        <td>Website 2</td>
                        <td>Subject 2</td>
                        <td><a href="http://example.com" target="_blank">Visit</a></td>
                    </tr>
                    <!-- Add more links as needed -->
                </tbody>
            </table>
        </section>

        <!-- Libraries Section -->
        <section id="libraries" class="mt-5">
            <h2>Libraries</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>More Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Library 1</td>
                        <td>Location 1</td>
                        <td>Offline</td>
                        <td><a href="http://library1.com" target="_blank">More Info</a></td>
                    </tr>
                    <tr>
                        <td>Library 2</td>
                        <td>Location 2</td>
                        <td>Online</td>
                        <td><a href="http://library2.com" target="_blank">More Info</a></td>
                    </tr>
                    <!-- Add more libraries as needed -->
                </tbody>
            </table>
        </section>

        <!-- Previous Year Papers Section -->
        <section id="papers" class="mt-5">
            <h2>Previous Year Papers</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Course</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Subject 1</td>
                        <td>Course 1</td>
                        <td>2023</td>
                    </tr>
                    <tr>
                        <td>Subject 2</td>
                        <td>Course 2</td>
                        <td>2022</td>
                    </tr>
                    <!-- Add more papers as needed -->
                </tbody>
            </table>
        </section>

        <!-- Specific Exams Resource Materials Section -->
        <section id="exams" class="mt-5">
            <h2>Specific Exam Resources</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Exam Name</th>
                        <th>Year</th>
                        <th>Links</th>
                        <th>Suggestions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Exam 1</td>
                        <td>2023</td>
                        <td><a href="http://exam1resources.com" target="_blank">Resources</a></td>
                        <td>Focus on previous year questions.</td>
                    </tr>
                    <tr>
                        <td>Exam 2</td>
                        <td>2022</td>
                        <td><a href="http://exam2resources.com" target="_blank">Resources</a></td>
                        <td>Check official guidelines.</td>
                    </tr>
                    <!-- Add more exams as needed -->
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Academic Help. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

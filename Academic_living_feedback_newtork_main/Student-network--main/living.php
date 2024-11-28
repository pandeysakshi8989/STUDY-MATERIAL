<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Living Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Living Help</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#room-rents">Room Rents</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hostels">Hostels</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <!-- Room Rents Section -->
        <section id="room-rents">
            <h2>Room Rentals</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Owner</th>
                        <th>Place</th>
                        <th>Price</th>
                        <th>Facilities</th>
                        <th>Room Size</th>
                        <th>Photos</th>
                        <th>Available</th>
                        <th>More Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Owner Name 1</td>
                        <td>Location 1</td>
                        <td>$500/month</td>
                        <td>Wi-Fi, AC, Kitchen</td>
                        <td>200 sqft</td>
                        <td><img src="img/room1.jpg" alt="Room 1" style="width: 100px; height: auto;"></td>
                        <td>Yes</td>
                        <td><a href="http://room1details.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <tr>
                        <td>Owner Name 2</td>
                        <td>Location 2</td>
                        <td>$450/month</td>
                        <td>Wi-Fi, Laundry</td>
                        <td>180 sqft</td>
                        <td><img src="img/room2.jpg" alt="Room 2" style="width: 100px; height: auto;"></td>
                        <td>No</td>
                        <td><a href="http://room2details.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <!-- Add more room rentals as needed -->
                </tbody>
            </table>
        </section>

        <!-- Hostels Section -->
        <section id="hostels" class="mt-5">
            <h2>Hostels</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Facilities</th>
                        <th>Available</th>
                        <th>More Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hostel 1</td>
                        <td>Location A</td>
                        <td>$300/month</td>
                        <td>Wi-Fi, Meals, Gym</td>
                        <td>Yes</td>
                        <td><a href="http://hostel1.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <tr>
                        <td>Hostel 2</td>
                        <td>Location B</td>
                        <td>$250/month</td>
                        <td>Wi-Fi, Laundry</td>
                        <td>No</td>
                        <td><a href="http://hostel2.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <!-- Add more hostels as needed -->
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Living Help. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Food Help</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Food Help</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#tiffin-centers">Tiffin Centers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#restaurants">Restaurants</a></li>
                    <li class="nav-item"><a class="nav-link" href="#shops">Small Shops</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">
        <!-- Tiffin Centers Section -->
        <section id="tiffin-centers">
            <h2>Tiffin Centers</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Place</th>
                        <th>Owner</th>
                        <th>Registered</th>
                        <th>Food Quality</th>
                        <th>Pricing Plan</th>
                        <th>Today's Menu</th>
                        <th>Open/Close</th>
                        <th>More Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiffin Center 1</td>
                        <td>Location 1</td>
                        <td>Owner Name 1</td>
                        <td>Yes</td>
                        <td>Good</td>
                        <td>$150/month</td>
                        <td>Dal, Rice, Roti</td>
                        <td>Open</td>
                        <td><a href="http://tiffin1.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <tr>
                        <td>Tiffin Center 2</td>
                        <td>Location 2</td>
                        <td>Owner Name 2</td>
                        <td>No</td>
                        <td>Average</td>
                        <td>$120/month</td>
                        <td>Vegetable Curry, Rice</td>
                        <td>Closed</td>
                        <td><a href="http://tiffin2.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <!-- Add more tiffin centers as needed -->
                </tbody>
            </table>
        </section>

        <!-- Restaurants Section -->
        <section id="restaurants" class="mt-5">
            <h2>Restaurants</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Cuisine</th>
                        <th>Location</th>
                        <th>Open Hours</th>
                        <th>Contact</th>
                        <th>More Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Restaurant 1</td>
                        <td>Indian</td>
                        <td>Location A</td>
                        <td>10 AM - 10 PM</td>
                        <td>(123) 456-7890</td>
                        <td><a href="http://restaurant1.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <tr>
                        <td>Restaurant 2</td>
                        <td>Chinese</td>
                        <td>Location B</td>
                        <td>11 AM - 11 PM</td>
                        <td>(987) 654-3210</td>
                        <td><a href="http://restaurant2.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <!-- Add more restaurants as needed -->
                </tbody>
            </table>
        </section>

        <!-- Small Shops Section -->
        <section id="shops" class="mt-5">
            <h2>Small Shops</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Open Hours</th>
                        <th>More Info</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Shop 1</td>
                        <td>Location X</td>
                        <td>Grocery</td>
                        <td>8 AM - 8 PM</td>
                        <td><a href="http://shop1.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <tr>
                        <td>Shop 2</td>
                        <td>Location Y</td>
                        <td>Convenience Store</td>
                        <td>24 Hours</td>
                        <td><a href="http://shop2.com" target="_blank" class="btn btn-info btn-sm">More Info</a></td>
                    </tr>
                    <!-- Add more shops as needed -->
                </tbody>
            </table>
        </section>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Food Help. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

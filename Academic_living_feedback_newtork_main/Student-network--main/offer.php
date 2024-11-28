<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Special Offers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .offer-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .offer-card:hover {
            transform: scale(1.05);
        }
        .offer-title {
            font-weight: bold;
        }
        .offer-description {
            margin: 10px 0;
        }
        .offer-terms {
            font-size: 0.9em;
            color: gray;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Special Offers</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h2 class="text-center">Exclusive Offers for You</h2>

        <div class="row">
            <!-- Festival Offers -->
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Diwali Discount</h5>
                    <p class="offer-description">Get 20% off on all academic services during Diwali.</p>
                    <p class="offer-terms">*Valid from October 15 to November 5.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Christmas Special</h5>
                    <p class="offer-description">Enjoy 15% off on living assistance services.</p>
                    <p class="offer-terms">*Valid from December 20 to December 31.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">New Year Offer</h5>
                    <p class="offer-description">Get a free consultation on all services booked in January.</p>
                    <p class="offer-terms">*Applicable for first-time users only.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Service Provider Offers -->
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Tiffin Service Discount</h5>
                    <p class="offer-description">10% off on your first month with our registered tiffin services.</p>
                    <p class="offer-terms">*Contact us for more details.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Counseling Session Discount</h5>
                    <p class="offer-description">Book a session and get the second session at half price.</p>
                    <p class="offer-terms">*Limited time offer.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Room Rent Discount</h5>
                    <p class="offer-description">5% off on room rent for the first three months.</p>
                    <p class="offer-terms">*Valid for new tenants only.</p>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Credit Card Offers -->
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Bank XYZ Credit Card Offer</h5>
                    <p class="offer-description">Receive 10% cash back on all transactions using Bank XYZ credit card.</p>
                    <p class="offer-terms">*Terms and conditions apply.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="offer-card">
                    <h5 class="offer-title">Bank ABC Festival Offer</h5>
                    <p class="offer-description">15% off on all services when using Bank ABC credit card.</p>
                    <p class="offer-terms">*Valid during festival periods.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Special Offers Page. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pricing Plan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .pricing-table {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .pricing-plan {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        .pricing-plan:hover {
            transform: scale(1.05);
        }
        .pricing-header {
            background: #007bff;
            color: white;
            padding: 15px;
            border-radius: 10px 10px 0 0;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Pricing Plans</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h2 class="text-center">Choose Your Plan</h2>
        <div class="pricing-table">

            <!-- Free Plan -->
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>Free Plan</h3>
                    <p>Price: $0</p>
                </div>
                <ul class="list-unstyled">
                    <li>Basic Support</li>
                    <li>Access to Resources</li>
                    <li>Community Forums</li>
                    <li>Limited Features</li>
                </ul>
                <button class="btn btn-primary">Select Plan</button>
            </div>

            <!-- 3 Months Plan -->
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>3 Months Plan</h3>
                    <p>Price: $29</p>
                </div>
                <ul class="list-unstyled">
                    <li>All Free Plan Benefits</li>
                    <li>Email Support</li>
                    <li>Access to Premium Resources</li>
                    <li>Monthly Webinars</li>
                </ul>
                <button class="btn btn-primary">Select Plan</button>
            </div>

            <!-- 6 Months Plan -->
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>6 Months Plan</h3>
                    <p>Price: $49</p>
                </div>
                <ul class="list-unstyled">
                    <li>All 3 Months Plan Benefits</li>
                    <li>Priority Support</li>
                    <li>Exclusive Content</li>
                    <li>Quarterly Workshops</li>
                </ul>
                <button class="btn btn-primary">Select Plan</button>
            </div>

            <!-- 1 Year Plan -->
            <div class="pricing-plan">
                <div class="pricing-header">
                    <h3>1 Year Plan</h3>
                    <p>Price: $89</p>
                </div>
                <ul class="list-unstyled">
                    <li>All 6 Months Plan Benefits</li>
                    <li>One-on-One Counseling</li>
                    <li>Access to All Resources</li>
                    <li>Annual Networking Events</li>
                </ul>
                <button class="btn btn-primary">Select Plan</button>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Pricing Plans. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

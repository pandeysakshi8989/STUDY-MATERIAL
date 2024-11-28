<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Testimonials</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .testimonial-item {
            text-align: center;
            padding: 20px;
        }
        .testimonial-photo {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .faq-item {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <header>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Testimonials</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h2 class="text-center">What Our Students Say</h2>

        <!-- Testimonials Carousel -->
        <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-item">
                        <img src="img/student1.jpg" alt="Student Name" class="testimonial-photo">
                        <h4>Student Name 1</h4>
                        <p>"This service helped me excel in my studies. I couldn't have done it without their support!"</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-item">
                        <img src="img/student2.jpg" alt="Student Name" class="testimonial-photo">
                        <h4>Student Name 2</h4>
                        <p>"The resources and guidance I received were invaluable. Highly recommend!"</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-item">
                        <img src="img/student3.jpg" alt="Student Name" class="testimonial-photo">
                        <h4>Student Name 3</h4>
                        <p>"Fantastic experience! The help I received made all the difference in my academic journey."</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h2 class="text-center mt-5">Frequently Asked Questions</h2>
        <div class="faq-section mt-4">
            <div class="faq-item">
                <h5>Question 1: How can I access the resources?</h5>
                <p>Answer: You can access the resources by logging into your account and navigating to the resources section.</p>
            </div>
            <div class="faq-item">
                <h5>Question 2: What kind of support do you offer?</h5>
                <p>Answer: We offer academic help, counseling, and living assistance through our various services.</p>
            </div>
            <div class="faq-item">
                <h5>Question 3: Is there a fee for your services?</h5>
                <p>Answer: We offer both free and subscription-based services. Please check our pricing plan for more details.</p>
            </div>
            <div class="faq-item">
                <h5>Question 4: How can I contact support?</h5>
                <p>Answer: You can reach out to our support team via email at support@example.com or through our contact page.</p>
            </div>
        </div>
    </main>

    <footer class="bg-light text-center mt-5 p-4">
        <p>&copy; 2024 Testimonials Page. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

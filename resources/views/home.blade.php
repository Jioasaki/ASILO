<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Joshua Asilo - Portfolio</title>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <a href="#home" class="logo">Joshua Asilo</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#About">About</a>
            <a href="#Service">Services</a>
            <a href="#Feedback">Feedback</a>
            <a href="#Contact">Contact</a>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-img">
            <img src="{{ asset('assets/Me.jpg') }}" alt="Profile Image">
        </div>
        <div class="home-content">
            <h3>Hello, Myself</h3>
            <h1>Joshua Asilo</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Hard work is worthless for those that don't believe in themselves</p>

            <div class="social-media">
                <a href="#"><i class='bx bxl-linkedin'></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
            </div>

            <a href="#" class="btn">Download CV</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="About">
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>I'm a <span>Frontend Developer</span></h3>
            <p>Hard work is worthless for those that don't believe in themselves</p>
            <a href="#" class="btn">Read More</a>
        </div>
        <div class="about-img">
            <img src="{{ asset('assets/Me.jpg') }}" alt="About Image">
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="Service">
        <h2 class="heading">My <span>Services</span></h2>
        <div class="services-container">
            <div class="services-box">
                <i class="bx bx-code"></i>
                <h3>Web Development</h3>
                <p>Hard work is worthless for those that don't believe in themselves</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class="bx bx-palette"></i>
                <h3>UI/UX Designer</h3>
                <p>Hard work is worthless for those that don't believe in themselves</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class="bx bxl-android"></i>
                <h3>App Development</h3>
                <p>Hard work is worthless for those that don't believe in themselves</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <section class="Feedback" id="Feedback">
        <div class="Feedback-box">
            <h2 class="heading">Feedback</h2>
            <div class="wrapper">
                <div class="Feedback-item">
                    <img src="{{ asset('assets/Ranya.jpg') }}" alt="">
                    <h2>Ranya</h2>
                    <div class="rating">
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                    </div>
                    <p>Hard work is worthless for those that don't believe in themselves</p>
                </div>
                <div class="Feedback-item">
                    <img src="{{ asset('assets/Ranya.jpg') }}" alt="">
                    <h2>Yoon</h2>
                    <div class="rating">
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                    </div>
                    <p>Hard work is worthless for those that don't believe in themselves</p>
                </div>
                <div class="Feedback-item">
                    <img src="{{ asset('assets/Ranya.jpg') }}" alt="">
                    <h2>Chi</h2>
                    <div class="rating">
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                        <i class="bx bxs-star" id="star"></i>
                    </div>
                    <p>Hard work is worthless for those that don't believe in themselves</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="Contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full name">
                <input type="email" name="Email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Phone number">
                <input type="text" placeholder="Email Subject">
            </div>
            <textarea name="messages" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-linkedin'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
        <p class="copyright">
            &copy; Joshua Asilo - All Rights Reserved
        </p>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>

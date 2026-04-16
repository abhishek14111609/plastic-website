<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plastic Manufacturers Association')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-info">
                <span><i class="fas fa-phone-alt"></i> +91 123 456 7890</span>
                <span><i class="fas fa-envelope"></i> info@plasticassociation.org</span>
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="PMA Logo" style="height: 60px;">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/membership">Membership</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/publications">Publications</a></li>
                    <li><a href="/administrative-activity">Administrative Activity</a></li>
                    <li><a href="#" style="color: var(--secondary-color); font-weight: 700;">PLEXPO 2026</a></li>
                    <li><a href="/contact-us">Contact</a></li>
                </ul>
            </nav>
            <div class="header-btns">
                <a href="#" class="btn btn-primary">Join Now</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>About Us</h4>
                    <p>The leading association for plastic manufacturers, dedicated to innovation, sustainability, and industry growth since 1970.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Member Directory</a></li>
                        <li><a href="#">Upcoming Events</a></li>
                        <li><a href="#">Industry News</a></li>
                        <li><a href="/administrative-activity">Administrative Activity</a></li>
                        <li><a href="#">Photo Gallery</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Plastic Sandesh</a></li>
                        <li><a href="#">Govt. Notifications</a></li>
                        <li><a href="#">Technical Papers</a></li>
                        <li><a href="#">Membership Benefits</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 101, Industry House, Plastic City, Gujarat, India.</p>
                    <p><i class="fas fa-phone"></i> +91 98765 43210</p>
                    <p><i class="fas fa-envelope"></i> contact@plasticassoc.org</p>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} Plastic Manufacturers Association. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>

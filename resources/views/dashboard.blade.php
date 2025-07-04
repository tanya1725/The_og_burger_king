<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger King</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body bgcolor="black">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src='/image/burgerkinglogo.jpg' alt="Burger King Logo">
        </div>
        <ul class="navbar-links">
            <li><a href="dashboard">Home</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#nearby-restaurants">Nearby Restaurants</a></li>
            <li><a href="login">Get started</a></li>

        </ul>
    </nav>

    <!-- Content -->
    <div class="content">
        <div class="restaurant-info">
            <h2 style="padding-left:20px;padding-top:10px;">BURGER KING</h2>
            <hr>
            <p style="padding-left:20px">
                <i class="fas fa-map-marker-alt"></i> 01/B, 952/966/972, 3rd Flr, P&M Mall,<br>
                Jamshedpur Urban, Purbi Singhbhum,<br>
                Jamshedpur - 831001
            </p>
            <p style="padding-left:20px"><i class="fas fa-phone"></i> +91 9330714821</p>
            <p style="padding-left:20px"><i class="fas fa-clock"></i> Open until 11:00 PM <span class="open-now">OPEN NOW</span></p>
        </div>
        <div class="promo">
            <img src='/image/burgerkingwallpaper.jpg' alt="Promo Image">
        </div>
    </div>

    <!-- Menu Section -->
    <div class="menu-section">
        <h2>Our Menu</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src='/image/cococola.jpg' alt="Coca Cola">
                <p>Sides & Beverages</p>
            </div>
            <div class="menu-item">
                <img src='/image/coffee.jpg' alt="BK Café">
                <p>BK Café</p>
            </div>
            <div class="menu-item">
                <img src='/image/burger.jpg' alt="Burger">
                <p>Burgers & Wraps</p>
            </div>
            <div class="menu-item">
                <img src='/image/chickenwings.jpg' alt="Chicken Wings">
                <p>Chicken Wings</p>
            </div>
            <div class="menu-item">
                <img src='/image/desert.jpg' alt="Dessert">
                <p>Desserts</p>
            </div>
            <div class="menu-item">
                <img src='/image/kingpremium.jpg' alt="King Premium Burger">
                <p>King Premium Burger</p>
            </div>
            <div class="menu-item">
                <img src='/image/whopper.jpg' alt="Whopper">
                <p>Whopper</p>
            </div>
        </div>
    </div>
    <div>
        <h2 style="padding-left:270px;padding-top:40px">About us</h2>
        <div class="about-part">
        Burger King India Limited is the master franchisee for BURGER KING® in India, operating BURGER KING® restaurants nationwide. Burger King India opened its first restaurant in India in 2014 and it operates more than 290+ restaurants across India. The brand recently launched its own ordering Burger King India APP with great offers, exclusive deals and loyalty rewards to users. The company operates with multiple restaurants in Delhi NCR, Punjab, Rajasthan, Mumbai, Nashik, Pune, Bengaluru, Chennai, Hyderabad, Kerala, Gujarat, Dehradun, UP, Bhopal, Gwalior, and Bhubaneswar etc.
        The address of this restaurant is 01/B, 952/966/972, 3rd Flr, P&M Mall, Jamshedpur Urban, Purbi Singhbhum, Jamshedpur, Jharkhand. 
        </div>
    </div>

    <div class="nearby-restaurants">
        <h2>Nearby Restaurants of Burger King</h2>
        <div class="restaurant-cards">
            <div class="restaurant-card">
                <h3>BURGER KING</h3>
                <p>Ratu Road</p>
                <p>Ranchi - 834001</p>
                <p>★★★★☆</p>
            </div>
            <div class="restaurant-card">
                <h3>BURGER KING</h3>
                <p>Sampla</p>
                <p>Jhajjar - 124501</p>
                <p>★★★★☆</p>
            </div>
            <div class="restaurant-card">
                <h3>BURGER KING</h3>
                <p>Sector 16B</p>
                <p>Noida - 201306</p>
                <p>★★★★☆</p>
            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer class="footer">
        <div class="footer-content">
            <p>RESTAURANT BRANDS ASIA LIMITED</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
<style>
    /* Reset some default browser styles */
    body,
    h1,
    h2,
    p,
    ul {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #fbf5f3;
    }

    /* Navbar styles */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fff;
        padding: 10px 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-logo img {
        height: 50px;
    }

    .navbar-links {
        list-style: none;
        display: flex;
    }

    .navbar-links li {
        margin-left: 20px;
    }

    .navbar-links a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .navbar-links a:hover {
        color: #e74c3c;
    }

    /* Content styles */
    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: #fbf5f3;
        text-align: center;
        gap: 20px;
    }

    .restaurant-info {
        max-width: 25%;
        flex: 2;
        text-align: left;
        background-color: #ffffff;
        height: 350px;

    }

    .restaurant-info h2 {
        color: #333;
        margin-bottom: 10px;
    }

    .restaurant-info p {
        margin-bottom: 10px;
        font-size: 14px;
        line-height: 1.6;
    }

    .restaurant-info .open-now {
        color: green;
        font-weight: bold;
    }

    .promo {
        flex: 1;
    }

    .promo img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    /* Menu section styles */
    .menu-section {
        padding: 20px;
        background-color: #f5e3d4;
        text-align: center;
    }

    .menu-section h2 {
        text-align: center;
        color: #e74c3c;
        margin-bottom: 20px;
    }

    .menu-items {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .menu-item {
        flex: 1;
        max-width: 200px;
        text-align: center;
        margin: 10px;
    }

    .menu-item img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .menu-item p {
        margin-top: 10px;
        font-weight: bold;
        color: #333;
    }
    .about-part
    {
        margin-left:250px;
        margin-right:250px ;
       background-color: #fff; 
       padding-left: 10px;
       padding-top: 30px;
       padding-right: 20px;
       padding-bottom: 20px;
       text-align: justify;
       box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
       margin-bottom: 40px;
    }

    h2 {
        color: #ffcccb;
    }

    .nearby-restaurants {
        padding: 20px;
        background-color: "fbf5f3";
        text-align: center;
    }

    .restaurant-cards {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    .restaurant-card {
        background-color: #fff;
        color: black;
        margin: 10px;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 200px;
    }

    .restaurant-card h3 {
        margin-bottom: 10px;
    }
    .footer {
        background-color: black;
        padding: 20px 0;
        text-align: center;
        color: white;
    }

    .footer-content {
        max-width: 800px;
        margin: 0 auto;
    }
    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        color: white;
        margin: 0 10px;
        text-decoration: none;
    }

    .social-icons a:hover {
        color: #ffcccb;
    }

    .social-icons i {
        font-size: 20px;
    }
</style>

</html>
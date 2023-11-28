<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap">
<link rel="stylesheet" href="styles.css">
 
<header>
    <div class="logo">
        <img src="logotravelwise.png">
    </div>
    <nav>
        <a href="#">Smart Search</a>
        <a href="#">Destinations</a>
        <a href="#">Currency Rates</a>
        <a href="#">Budgeting Hacks</a>
    </nav>
</header>

<h1>Smart Search</h1>
<p>Unlock budget-friendly destinations with Travel Wise's Smart Search—your gateway to affordable exploration, curated for unforgettable experiences within your means</p>
</head>
<body>
   <?php
     echo '<form name="smartSearchForm" action="yourDest.php" method="post" >';
    ?>
    <br>
    <!-- create order form -->
    <div class = "smart-search-form">
    <h1>Order Form</h1>
        <input type="number" id="travelBudget" name = "travelBudget" placeholder="Total Travel Budget" min="1" required><br><br>
        <input type="number" id="numDays" name = "numDays" placeholder="Number of days" min="1" required><br><br>
        <input type="number" id="numTravelers" name="numTravelers" placeholder="Number of travelers" min="1" required><br><br>
        <input type="submit" id="submitButton" value="Search">
    </form>
    </div>
    <br>
    <br>
    
    <footer>
        <div class="subscribe-container">
            <div class="subscribe-text">
                <h2>The TravelWise Newsletter</h2>
                <p>Get inspired! Receive travel discounts, tips, and behind-the-scenes stories.</p>
            </div>
            <div class="form-container">
                <input type="email" class="email-input" placeholder="Your email">
                <button type="submit" class="subscribe-button">Subscribe</button>
            </div>
        </div>
        <img src="logotravelwise.png" alt="Travel Wise Logo" class="logo-small">
        <div class="page-links">
            <a href="#">Smart Search</a>
            <a href="#">Destinations</a>
            <a href="#">Currency Rates</a>
            <a href="#">Budgeting Hacks</a>
        </div>
        <div class="copyright">
            &copy; 2023 TravelWise. All rights reserved.
        </div>
    </footer>

    </body>


</html>

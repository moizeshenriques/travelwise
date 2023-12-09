<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Volkhov&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap">
<link href='https://fonts.googleapis.com/css?family=Poppins'>
<link rel="stylesheet" href="styles.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

header {
    color: #fff;
    padding: 15px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    width: 25%;
    height: 25%;
    margin-right: 10px;
    margin-left: 50px;
}

nav {
    display: flex;
    align-items: center;
}

nav a {
    color: #112211;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 500;
    white-space: nowrap;
    font-family: 'Poppins', sans-serif;
}

footer {
    background-color: #FEEDE1;
    padding: 30px 0;
    color: #112211;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}

.subscribe-container {
    max-width: 40%;
    margin-left: 50px;
}

.subscribe-text {
    margin-bottom: 20px;
    font-size: small;
}

.form-container {
    display: flex;
    align-items: center;
}

.email-input {
    width: 80%;
    padding: 8px;
    border: 1px solid #5842A3;
    border-radius: 4px;
    margin-right: 5px; 
    font-family: 'Poppins', sans-serif;
}

.subscribe-button {
    background-color: #5842A3;
    color: #fff;
    padding: 8px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
}

.page-links {
    max-width: 40%;
    display: flex;
    flex-direction: column;
    align-items: flex-end; 
    margin-right: 50px; 
    margin-bottom: 15px;
    margin-top: 50px;
    margin-left: 100px;
}

.page-links a {
    text-decoration: none;
    margin-bottom: 5px;
    color: #112211;
    font-family: 'Poppins', sans-serif;
}

.logo-small {
    width: 15%; /* Adjust size as needed */
    height: 15%;
    margin-left: 300px;
    margin-top: 50px;
    margin-right: 50px;
}

.copyright {
    font-size: smaller;
    margin-left: 50px;
    margin-top: 5px;
    max-width: 80%;
}

/* smart search styling */
#smart-search-title h1, #your-dest-title h1 {
    color: #5842A3;
    font-style: normal;
    font-weight: 700;
    margin-left: 50px;
    font-size: 32px;
}

#smart-search-title p {
    font-size: 18px;
    margin-left: 50px;
    margin-right: 50px;
}

.smart-form-container {
    margin-left: 50px;
}

#travelBudget, #numDays, #numTravelers {
    width: 300px;
    height: 50px;
    border: 2px solid rgba(0, 0, 0, 0.40);
    flex-shrink: 0;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    color: #1E1D4C;
    font-family: Poppins;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 10px;
    border-radius: 20px;
    padding: 8px;
}

.smart-form {
    display: flex;
}

#submitButton {
    width: 300px;
    height: 50px;
    border: 2px solid rgba(0, 0, 0, 0.40);
    flex-shrink: 0;
    background: #F76A09;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    color: #FFF;
    font-family: Poppins;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    margin-left: 10px;
    border-radius: 20px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

.luggage-pic {
    margin-left: 20%;
    margin-right: 50px;
}

@media screen and (max-width: 600px) {
    .logo {
        justify-content: center;
        margin-bottom: 2rem;
    }

    .logo img {
        width: 50%;
    }

    .logo h1 {
        font-size: 0;
    }

    #smart-search-title {
        text-align: center;
    }

    #smart-search-title h1 {
        margin-left: 0;
    }

    .smart-form-container {
        margin-left: 0;
    }

    .smart-form {
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #travelBudget, #numDays, #numTravelers, #submitButton {
        margin-left: 0;
    }

    .luggage-pic {
        margin: 1rem;
        border-radius: 10px;
        width: 100%;
    }

    footer {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .subscribe-container {
        margin-left: 0;
    }

    .form-container {
        flex-direction: column;
        gap: 15px;
    }

    .email-input {
        text-align: center;
    }

    .logo-small {
        width: 30%;
        margin: 0;
        margin-top: 30px;
    }

    .page-links {
        margin: 0;
        align-items: center;
        margin-top: 30px
    }

    .copyright {
        margin-left: 0;
        margin-top: 10px;
    }
    .filter-container {
        display: block;
        margin-left: 5%;
        float: left;
    }
    
    .filter-form-drop {
        width: 250px;
        height: 50px;
        border: 2px solid rgba(0, 0, 0, 0.40);
        flex-shrink: 0;
        background: #FFF;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        color: #1E1D4C;
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        border-radius: 20px;
        text-align: center;
    }
}

</style>
<header>
    <div class="logo">
        <img src="logotravelwise.png">
    </div>

    <button id="menu-button">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </button>

    <nav class="nav-list" id="myNav-list">
        <a class="nav-item" href="#">Smart Search</a>
        <a class="nav-item" href="#">Destinations</a>
        <a class="nav-item" href="#">Our Packages</a>
        <a class="nav-item" href="#">Currency Rates</a>
        <a class="nav-item" href="#">Budgeting Hacks</a>
    </nav>
</header>
<section id="smart-search-section">
    <div id="smart-search-title">
        <h1>Smart Search</h1>
        <p>Unlock budget-friendly destinations with Travel Wise's Smart Search—your gateway to affordable exploration, curated for unforgettable experiences within your means</p>
    </div>
</section>
</head>
<body>
   <?php
     echo '<form name="smartSearchForm" action="yourDest.php" method="post" >';
    ?>
    <br>
    <!-- create order form -->
    <div class="smart-form-container">
        <div class="smart-form">
        <div class="form">
        <input type="number" id="travelBudget" name = "travelBudget" placeholder="Total Travel Budget" min="1" required><br><br>
        <input type="number" id="numDays" name = "numDays" placeholder="Number of days" min="1" required><br><br>
        <input type="number" id="numTravelers" name="numTravelers" placeholder="Number of travelers" min="1" required><br><br>

        <h2>Filter By</h2>
        <select name="dropDown" class="filter-form-drop" id = "dropDown" name="dropDown" placeholder="Choose a filter" required>
            <option value="" disabled selected>Select a filter</option>
            <option value = "Default">No filter</option>
            <option value = "Alphabetical">Alphabetical</option>
            <option value = "Price">Price (ascending)</option>
            <option value = "Adventure">Adventure escapes</option>
            <option value = "City">City explorations</option>
            <option value = "Relaxation">Relaxation retreats</option>
            <option value = "Family">Family fun</option>
            <option value = "Culture">Cultural journey</option>
            <option value = "Rating">TravelWise rating</option><br>
        </select>
        <input type="submit" id="submitButton" value="Search">
    </form>
        </div>
        <img src="luggage.png" width="500" height="400" class="luggage-pic">
        </div>
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
            <a href="#">Home</a>
            <a href="#">Smart Search</a>
            <a href="#">Destinations</a>
            <a href="#">Our Packages</a>
            <a href="#">Currency Rates</a>
            <a href="#">Budgeting Hacks</a>
        </div>
        <div class="copyright">
            &copy; 2023 TravelWise. All rights reserved.
        </div>
    </footer>

    <script>
        const menuButton = document.getElementById('menu-button');
        
        menuButton.addEventListener('click', function () {
            this.classList.toggle('active');
        });
    </script>
    </body>


</html>

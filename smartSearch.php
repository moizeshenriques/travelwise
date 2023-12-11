<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
 <meta name="keywords" content="travel, international travel, travel budget calculator, currency rates, budgeting, cheap destinations, travel packages">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Volkhov&display=swap">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap">
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

nav a:hover {
    text-decoration: none;
    color:  #b390e6;
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
.subscribe-button:hover {
    background-color: #8250c9; 
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

#menu-button {
    display: none; 
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
    position: relative;
    z-index: 1000;
}

#menu-button .bar {
    width: 30px;
    height: 3px;
    background: #212121;
    margin: 6px 0;
    transition: 0.4s;
}

@media screen and (max-width: 1400px) {
    footer {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .subscribe-container {
        width: 40%;
    }

    .logo-small {
        margin: 0;
        margin-left: 2rem;
    }
}
/* smart search styling */

.content {
    display: flex;
    padding: 20px;
}

.smart-search-section {
    width: 60%;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

.smart-search-section h1 {
    color: #5842A3; 
    font-size: 60px;
    font-family: 'Volkhov', serif; 
    margin-left: 100px;
    white-space: nowrap;
}

.smart-search-section p {
    color: #6C6C6C; 
    font-size: 20px; 
    margin-left: 100px;
    font-family: 'Poppins', sans-serif; 
}

.smart-search-section img {
    float: right;
    margin-right: 2rem;
    width: 500px;
    height: 400px;
    position: absolute;
    right: 0;
}


.smart-form-container {
    margin-top: 60px;
    margin-left: 100px;
}

.smart-form {
    display: flex;
}

#travelBudget, #numDays, #numTravelers {
    width: 300px;
    height: 50px;
    border: 2px solid rgba(100, 100, 100, 0.4);
    flex-shrink: 0;
    background: #FFF;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: #1E1D4C;
    font-family: Poppins;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    border-radius: 20px;
    padding: 8px;
}

#dropDown {
    width: 318px;
    height: 60px;
    border: 2px solid rgba(100, 100, 100, 0.4);
    flex-shrink: 0;
    background: #FFF;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    color: #1E1D4C;
    font-family: Poppins;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    border-radius: 20px;
    padding: 8px;
}

.smart-form h2{
    color: #F76A09;
    font-family: 'Volkhov', serif;
    font-size: 30px;
    font-weight: 700;
}

#submitButton {
    background: #F76A09;
    color: #fff;
    padding: 16px 30px;
    border: none;
    font-size: 16px;
    margin-left: 8px;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'Poppins', sans-serif;
    margin-top: 20px;
}

#submitButton:hover {
    background-color: #f9ad77; 
}  

.smart-form-container-2 {
    display: none;
}

@media screen and (max-width: 900px) {
    header {
        flex-direction: column;
    }

    .logo {
        justify-content: center;
        margin-bottom: 2rem;
    }

    .logo img {
        width: 40%;
        margin: 0;
    }

    .logo h1 {
        font-size: 0;
    }

    #menu-button {
        display: block;
    }

    #myNav-list {
        display: none;
    }

    #menu-button.active + #myNav-list {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .content {
        justify-content: center;
        padding: 0;
    }

    .smart-search-section {
        padding: 0;
        align-items: center;
    }

    .search-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .smart-search-section h1 {
        margin-left: 0;
        white-space: normal;
        font-size: 42px;
    }

    .smart-search-section p {
        margin-left: 0;
        font-size: 20px;
    }

    .smart-search-section img {
        margin-right: 0;
        position: relative;
        width: 100%;
        height: 100%;
        margin-top: 2rem;
    }

    .smart-form-container {
        margin-left: 0;
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
        margin: 0 !important;
        margin-top: 30px !important;
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


}

</style>
<header>
        <a href="index.html" class="logo">
            <img src="logotravelwise.png">
        </a>

        <button id="menu-button">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </button>

        <nav class="nav-list" id="myNav-list">
            <a class="nav-item" href="smartSearch.php">Smart Search</a>
            <a class="nav-item" href="packages.html">Our Packages</a>
            <a class="nav-item" href="currency-rate.html">Currency Rates</a>
            <a class="nav-item" href="budget-hacks.html">Budgeting Hacks</a>
        </nav>
</header>
<div class = "content">
    <div class = "smart-search-section">
        <div class="search-container">
            <h1>Smart Search</h1>
            <p>Unlock budget-friendly destinations with Travel Wise's Smart Search—your gateway to affordable exploration, curated for unforgettable experiences within your means</p>
        <?php
            echo '<form name="smartSearchForm" action="yourDest.php" method="post" >';
        ?>
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
                <br><br>
                <input type="submit" id="submitButton" value="Search">
            </div>
        </div>
        </form>
    </div>
        </div>
        <img src="luggage.png" width="500" height="400" class="luggage-pic">
    </div>
</div>
</head>
<body>
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
            <a href="index.html">Home</a>
            <a href="smartSearch.php">Smart Search</a>
            <a href="packages.html">Our Packages</a>
            <a href="currency-rate.html">Currency Rates</a>
            <a href="budget-hacks.html">Budgeting Hacks</a>
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

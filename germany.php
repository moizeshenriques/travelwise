<!DOCTYPE html>
<html>
<meta charset="utf-8">
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Volkhov&display=swap">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet"> 
<head>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const subscribeButton = document.querySelector('.subscribe-button');
            const emailInput = document.querySelector('.email-input');
        
            subscribeButton.addEventListener('click', function () {
                if (emailInput.value.trim() === '') {
                    alert('Please enter your email address.');
                } else {
                    alert('Thank you for subscribing to our newsletter!');
                    emailInput.value = ''; // Clear the email input
                }
            });
        });
    </script>


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

/* germany style */
.country-main-area {
    margin-left: 10%;
    margin-right: 10%;

}

.germany-image {
    justify-content: center;
    text-align: center;
    align-items: center;
}

.dest-location h1 {
    color: #5842A3;
}

.dest-location p {
    font-size: 20px;
}

.explore-bali-section{
        padding: 50px 100px 25px 100px;
    }

    .explore-bali-section h1{
        color: #5842A3;
        font-family: Volkhov;
        font-size: 42px;
        font-weight: 700;
        letter-spacing: -2px;
    }

    .explore-bali-section p{
        margin-bottom: 50px;
        font-size: 18px;
        width: 80%;
    }

    .explore-bali-section img{
        width: 100%;
    }

    .bali-essentials-section{
        padding: 50px 100px 25px 100px;
    }

    .bali-essentials-section h2{
        color: #F76A09;
        font-family: Volkhov;
        font-size: 30px;
        font-weight: 700;
    }

    .what-to-do-section{
        display: flex;
    }

    .do-places-text{
        flex: 1; 
        max-width: 30%;
    }

    .do-places-img{
        flex: 2; 
        display: flex;
        margin-left: 50px;
        gap: 20px;
        justify-content: center;
    }

    .do-places-text h2{
        color: #F76A09;
        font-family: Volkhov;
        font-size: 30px;
        font-weight: 700;
    }

    .do-places-text h4{
        color: #F76A09;
        font-family: Volkhov;
        font-size: 22px;
    }
    
    .place {
        width: 90%;
        border-radius: 30px;
        background: var(--white, #FFF);
        box-shadow: 0px 2.463px 4.187px 0px rgba(0, 0, 0, 0.00),
                    0px 10.838px 8.67px 0px rgba(0, 0, 0, 0.01),
                    0px 26.602px 17.292px 0px rgba(0, 0, 0, 0.01),
                    0px 51.234px 33.893px 0px rgba(0, 0, 0, 0.01),
                    0px 86.212px 62.319px 0px rgba(0, 0, 0, 0.02),
                    0px 133.012px 106.41px 0px rgba(0, 0, 0, 0.02);
    }

    .place p{
            display: inline-block;
            color: #6C6C6C;
            padding: 0 15px;
        }

    .place img {
        max-width: 100%;
        height: 250px;
        border-radius: 30px 30px 0px 0px;
    }

    .what-to-eat-section{
        display: flex;
        margin-top: 100px;
    }

    .eat-places-text{
        flex: 1; 
        max-width: 30%;
    }

    .eat-places-img{
        flex: 2; 
        display: flex;
        margin-left: 50px;
        gap: 20px;
        justify-content: center;
    }

    .eat-places-text h2{
        color: #F76A09;
        font-family: Volkhov;
        font-size: 30px;
        font-weight: 700;
    }

    .eat-places-text h4{
        color: #F76A09;
        font-family: Volkhov;
        font-size: 22px;
    }
    
    .eat-place {
        width: 80%;
        border-radius: 30px;
        background: var(--white, #FFF);
        box-shadow: 0px 2.463px 4.187px 0px rgba(0, 0, 0, 0.00),
                    0px 10.838px 8.67px 0px rgba(0, 0, 0, 0.01),
                    0px 26.602px 17.292px 0px rgba(0, 0, 0, 0.01),
                    0px 51.234px 33.893px 0px rgba(0, 0, 0, 0.01),
                    0px 86.212px 62.319px 0px rgba(0, 0, 0, 0.02),
                    0px 133.012px 106.41px 0px rgba(0, 0, 0, 0.02);
    }

    .eat-place p{
            display: inline-block;
            color: #6C6C6C;
            padding: 0 15px;
        }

    .eat-place img {
        max-width: 100%;
        height: 250px;
        border-radius: 30px 30px 0px 0px;
    }

    .destinations-section{
        padding: 50px 100px 50px 100px;
        
    }

    .destinations-section h2{
        color: #F76A09;
        font-family: Volkhov;
        font-size: 30px;
        font-weight: 700;
    }

    .all-destinations{
        display: flex; 
        gap: 20px;
    }

    .destination{
        display: flex;
        position: relative;
        border-radius: 30px;
        width: 100%;
        height: 300px;
    }

    .destination-content{
        align-self: flex-end;
        margin-left: 30px;
        margin-bottom: 10px;
        font-size: 20px;
        color: white;
    }
    
    .destination:nth-child(1) {
    background: url('berlin.png') center/cover;
    }

    .destination:nth-child(2) {
    background: url('munich.png') center/cover;
    }

    .destination:nth-child(3) {
    background: url('cologne.png') center/cover;
    }

    .destination:nth-child(4) {
    background: url('valley.png') center/cover;
    }

    @media screen and (max-width: 600px) {
        .explore-bali-section {
            padding: 20px;
            text-align: center;
        }

        .explore-bali-section img {
            width: 100%;
            border-radius: 10px;
        }

        .bali-essentials-section {
            padding: 20px;
            text-align: center;
        }
    }
</style>
</head>
<body>
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


    <div class ="explore-bali-section">
    <?php

        $server = "localhost";
        $userid = "uuwqcmqvkoyqq";
        $pw = "`%c8@keh6)d;";
        $db= "dbaspgdvgofyok";
        		
        // Create connections
        $conn = new mysqli($server, $userid, $pw );

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
	
        //select the database
        $conn->select_db($db);

	    //run a query
        $query = "SELECT * from Countries WHERE Name = 'Germany'";
        $result = $conn->query($query);
       
        ?>
        <div class = "country-main-area">
        <?php

        $count = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
            $Name = $rows['Name'];
            $Price = $rows['Price'];
            $Description = $rows['Description'];
            $Image = $rows['Image'];
            $Rating = $rows['Rating'];
            $Type = $rows['Type'];

            echo '<div class="location-section">';
                echo '<div class="location-container">';
                    echo '<div class="dest-location">';
                        echo "<h1>" . "Explore: " . $Name . "</h1>";
                        echo "<br>";
                        echo "<p>". $Description . "</p>";
                        echo "<br>";
                        echo '<div class ="germany-image">';
                        echo '<img src="' . $Image . '" width=60% height=60%/><br>';
                        echo '</div>';
                        echo "<br>";
                    echo '</div>';
                echo '</div>';
            echo '</div>';

        }
        //close connection
        $conn->close();
    ?>
    </div>
    </div>

   
    <div class="bali-essentials-section">
        <h2>Germany Essentials</h2>
        <div class="what-to-do-section">
            <div class ="do-places-text">
                <h4>What to do</h4>
                <p>Germany offers a diverse range of activities, from exploring historic castles and vibrant cities to enjoying scenic landscapes, world-class museums, and traditional festivals.</p>
            </div>
            <div class ="do-places-img">
                <div class = "place">
                    <img src="neucastle.png" alt="Neuschwanstein">
                    <p>Neuschwanstein Castle</p>
                    <p>5 stars</p><br>
                    <p>Landmarks</p>
                </div>
                <div class = "place">
                    <img src="rothenburg.png" alt="Rothenburg">
                    <p>Rothenburg ob der Tauber</p>
                    <p>5 stars</p><br>
                    <p>Architecture, Historic Site</p>
                </div>
                <div class = "place">
                    <img src="stpeter.png" alt="St. Peters">
                    <p>St. Peter's Cathedral</p>
                    <p>4 stars</p><br>
                    <p>Religious Sites, Landmarks</p>
                </div>
            </div> 
        </div>

        <div class="what-to-eat-section">
            <div class ="eat-places-text">
                <h4>What to eat</h4>
                <p>Explore the classics, embrace local favorites, and uncover hidden gems</p>
            </div>
            <div class ="eat-places-img">
                <div class = "eat-place">
                    <img src="germanfood1.png" alt="Schwarzwaldstube">
                    <p>Schwarzwaldstube</p><br>
                    <p>5 stars</p><br>
                    <p>Fine Dining</p>
                </div>
                <div class = "eat-place">
                    <img src="germanfood2.png" alt="Hofbrauhaus">
                    <p>Hofbrauhaus</p><br>
                    <p>4 stars</p><br>
                    <p>Historic</p>
                </div>
                <div class = "eat-place">
                    <img src="germanfood3.png" alt="Atelier">
                    <p>Atelier</p><br>
                    <p>4 stars</p><br>
                    <p>Gormet Cusine</p>
                </div>
            </div> 
        </div>  
    </div>

    <div class="destinations-section">
        <h2>Destinations</h2>
        <div class="all-destinations">
            <div class="destination">
                <div class="destination-content">
                    <h4>Berlin</h4>
                </div>
            </div>
            <div class="destination">
                <div class="destination-content">
                    <h4>Munich</h4>
                </div>
            </div>
            <div class="destination">
                <div class ="destination-content">
                    <h4>Cologne</h4>
                </div>
            </div>
            <div class="destination">
                <div class ="destination-content">
                    <h4>Rhine Valley</h4>
                </div>
            </div>
        </div>
    </div>


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

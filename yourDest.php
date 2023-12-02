<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet"> 

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

//youDest style
#smart-form-sum {
    margin-left: 10px;
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
    border-radius: 20px;
    padding: 8px;
}

.form-summary-container {
    align-items: center;
    justify-content: center;
    display: flex;
}

.budget-sum, .days-sum, .travelers-sum {
    width: 35%;
    height: 30px;
    flex-shrink: 0;
    border-radius: 20px;
    border: 2px solid #000;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    margin-left: 20px;
    padding: 10px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.smart-form-sum {
    display: flex;
}

.smart-form-sum p {

}
</style>
<head>

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
<div id="your-dest-title">
    <h1>Your Destinations</h1>
</div>
</head>
<body>
    <?php
        $truth_array=array(0,0,0,0,0,0,0,0);
        $items_arr = array(8);
        $price_arr = array(8);

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
        $query = "SELECT * from Countries";
        $result = $conn->query($query);
       
        $userPrice = $_POST['travelBudget'];
        $userDays = $_POST["numDays"];
        $userTravelers = $_POST["numTravelers"];
        ?>
        <div class="form-summary-container">
        <?php
        //echo "<div class='smart-form-sum'>$userPrice</div><br>";

        ?>
        </div>
        <div class="form-summary-container">
            <div class="smart-form-sum">
                <?php
                    echo '<div class="budget-sum">';
                    echo '<img src="newmoney.png" width=7%>';
                    echo "<p><b>Total travel budget:</b> $" . $userPrice . "</p> <br>";
                    echo '</div>';
                    echo '<div class="days-sum">';
                    echo '<img src="calendar.png" width=10%>';
                    echo "<p><b> Number of days: </b>" . $userDays . "<br> </p>";
                    echo '</div>';
                    echo '<div class="travelers-sum">';
                    echo '<img src="person.png" width=6%>';
                    echo "<p><b> Number of travelers: </b>" . $userTravelers . "<br> </p>";
                    echo '</div>';
                ?>
            </div>
        </div>
        
        <?php

        $count = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
            $Price = $rows['Price'];
            $price_per_day = intdiv($userPrice, $userDays);
            $price_per_day_trav = intdiv($price_per_day, $userTravelers);
            if ($Price <= $price_per_day_trav) {
                $Name = $rows['Name'];
                $Image = $rows['Image'];
                $items_arr[$count] = $Name;
                $price_arr[$count] = $Price;
                $truth_array[$count] =1;
                echo $Name . "<br>";
                echo "$" . $Price . "/day per traveler <br>";
            }
            //increase count by 1
            $count++;
        }
       

        //close connection
        $conn->close();
    ?>

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
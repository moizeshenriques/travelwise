<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap">
<link rel="stylesheet" href="styles.css">
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
<h1>Your Destinations</h1>

</head>
<body>
    <?php
        $truth_array=array(0,0,0,0,0,0,0,0);
        $items_arr = array(8);
        $price_arr = array(8);

        $server = "localhost";
        $userid = "uuwqcmqvkoyqq";
        $pw = "`%c8@keh6)d;";
        $db= "dbicelpw4wwpmg";
        		
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
        $result = mysqli_query($conn, $query);


        $userPrice = $_POST["travelBudget"];
        $userDays = $_POST["numDays"];
        $userTravelers = $_POST["numTravelers"];
        $count = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
            $Price = $rows['Price'];
            if ($Price <= $userPrice/$userDays/$userTravelers) {
                $Name = $rows['Name'];
                $Image = $rows['Image'];
                $items_arr[$count] = $Name;
                $price_arr[$count] = $Price;
                $truth_array[$count] =1;
                echo $Name . "<br";

            }
          
            //increase count by 1
            $count++;
        }
        // print destinations that fit budget
        $count = 0;
        while ($rows = mysqli_fetch_assoc($result)) {
            if ($truth_array[$count] == 1) {
                echo $Name . "<br";
                echo "$" . $Price . "/day per traveler <br>";
            }
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

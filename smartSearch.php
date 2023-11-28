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
    $server = "localhost";
    $userid = "uuwqcmqvkoyqq";
    $pw = "`%c8@keh6)d;";
    $db= "dbicelpw4wwpmg";

     // Create connection
     $conn = new mysqli($server, $userid, $pw );

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     //echo "Connected successfully<br>";
 
     //select the database
     $conn->select_db($db);

     //run a query
     $query = "SELECT * from Countries";
     $result = mysqli_query($conn, $query);

     $count = 0;
     echo '<form name="smartSearchForm" action="yourDest.php" method="post" >';
     while ($rows = mysqli_fetch_assoc($result)) {
        //create variables for the items in the database
        $Name = $rows['Name'];
        $Price = $rows['Price'];
        $Description = $rows['Description'];
        $Image = $rows['Image'];

        $n = "q" . $count;
        // echo "<script>";
        echo '<select id="numItems" name =' . $n . ' placeholder="0" onchange="itemIsSelected()">';
        echo '<div id="dropdown-content">
        <option value="" disabled selected>Select a quantity</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        </div>
        </select>';
        $count++;
     }
     //close connection
     $conn->close();
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

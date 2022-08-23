<?php
    // Assets
    require_once('./Classes/oopHotels.php');
    session_start();

    // Getting the user data from the info page:

    if(isset($_POST["submit"]))
    {
        // Grabbing the data:
        $userDays=$_POST["userDays"];

        // Instantiating the user data
        $userStays = new hotelSelectoin();
        $userStays -> getTotalCost($userDays);
    }

    // Array displaying all hotels:
    
    $_SESSION['hotelList'] =[
        new hotelSelectoin(
            "Brookes Hill Suites",
            1370,
            "./"
        ),
        new hotelSelectoin(
            "Grande Kloof Boutique Hotel",
            493,
            $img
        ),
        new hotelSelectoin(
            "Krystal Beach Hotel",
            1042,
            $img
        ),
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php

            foreach($_SESSION['hotelList'] as $listHotel)
            {
                echo"
                    <div>
                        <li>Hotel Name :".$listHotel->gethotelName()."</li>
                        <li>Cost per night:".$listHotel->getcostperNight()."</li>
                        <li>".$listHotel->getimage()."</li>
                        <li>Total:".$listHotel->getTotalCost()."</li>
                        
                    </div>
                ";
            };

        ?>
    </ul>
</body>
</html>


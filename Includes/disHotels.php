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

    foreach($_SESSION['hotelList'] as $listHotel)
    {
        echo $listHotel->gethotelName();
        echo $listHotel->getcostperNight();
        echo $listHotel->getimage();
        echo $listHotel->getTotalCost();
    };

?>


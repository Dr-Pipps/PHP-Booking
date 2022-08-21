<?php
    require_once('./Classes/oopHotels.php');
    session_start();

    // Array displaying all hotels:

    $_SESSION['hotelList'] =[
        new hotelSelectoin(
            1,
            "Brookes Hill Suites",
            1370,
            $stayLength,
            $availRooms,
            false,
            "Lower Brookes Hill Street, Humewood, Gqeberha, 6001",
            $img
        ),
        new hotelSelectoin(
            2,
            "Grande Kloof Boutique Hotel",
            493,
            $stayLength,
            $availRooms,
            false,
            "69 Kloof Rd, Fresnaye, Cape Town, 8005",
            $img
        ),
        new hotelSelectoin(
            $id,
            "Krystal Beach Hotel",
            1042,
            $stayLength,
            $availRooms,
            true,
            "Breakwater Lane Harbour Island Gordons Bay, Central, Cape Town, 7140",
            $img
        ),
        
    ];

    if (isset($_POST['submit'])) {

        $name = $_POST['customerName'];
        $surName = $_POST['customerName'];
        $email = $_POST['customerEmail'];
        $dayNum= $_POST['DayNumber'];
        


        // saving user data to SESSION superglobal
        $_SESSION['customer'] = [
            
        ];

        var_dump($_SESSION['customer']);

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <h1 class="title">
        Hotel List:
    </h1>

    <ul class="hotelList">
        <?php
        foreach ($_SESSION['hotelList'] as $hotel) {
            echo "
                <div`>
                    <li> Hotel Id: ". $hotel->getId() ." </li>
                    <li> Name: ". $hotel->getName() ." </li>
                    <li> Cost per night: R". $hotel->getCostPerNight() ." </li>
                    <li>"; 
                        if( !$hotel->getFullyBooked() ) {
                            echo "<span class='has-text-success'> Rooms Available </span>";
                        } else {
                            echo "<span class='has-text-danger'> No rooms available </span>";
                        }
            echo "  </li>
                    <li> Total Cost of Trip: R". $hotel->calculateCostOfStay($userNumDays) .",00 </li>

                    <div class='is-flex'>
                        <form class='m-1' action='confirm-booking.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-danger' name='book'>Book</button>
                        </form>

                        <form class='m-1' action='hotel-details.php' method='get'>
                            <input type='text' name='hotelId' value=". $hotel->getId() ." hidden>
                            <button type='submit' class='button is-info' name='book'>Details</button>
                        </form>
                    </div>

                </div>
            ";
        }
        ?>
    </ul>

</body>

</html>
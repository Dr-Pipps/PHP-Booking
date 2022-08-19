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
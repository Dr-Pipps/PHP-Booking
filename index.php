<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="style">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <span class="material-icons" id="menu">menu_book</span>
            <div>
                <div class="title">PHP BOOKING APP</div>
                <div class="sub-title" >By Jesse October</div>
            </div>
        </div>
        <span class="material-symbols-outlined" id="burger">density_medium</span>
    </div>


    <!-- Background Images-->
    <div class="backGround">
        <img src="./Assets/ocean.jpg" alt="ocean-image">
        <img src="./Assets/hotel.jpg"  alt="hotel-image">
    </div>

    <!-- Display message -->
    <div class="bookingIndex">
        <div >
            <h3 class="welcome">WELCOME</h3>
            <div>
                <div class="description">
                    Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit, sed do 
                    eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. 
                    Lobortis scelerisque fermentum dui faucibus 
                    in ornare quam. 
                </div>
            </div>
            <div class="button">
                <button>BOOK NOW</button>
            </div>
                    
        </div>
    </div>

    <footer class="footer">
        <div class="home">
            <span class="material-symbols-outlined">home</span>                   
            <div>Home</div>
        </div>
        <span class="material-icons"> search</span>
        <span class="material-symbols-outlined">shopping_bag</span>
        <span class="material-symbols-outlined">person</span>
    </footer>

    <style>
        
    /* Assets */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap');
    :root
    {
        --primary-color: #9747FF;
    }

    body{
        font-family: 'Poppins';
    }
    .navbar{
        display: flex;
        align-items: center;
        place-content: space-between;
        padding: 30px;
    }
    .navbar span{
        font-size: 2.1em;

    }
    .logo{
        display: flex;
        align-items: center;
        
    }
    .logo div{
        padding:0px 10px;
    }
    .logo div.title{
        font-size: 20px;
        font-weight: 500;
    }
    .logo div.sub-title{
        position: relative;
        bottom: 5px;
        font-size: 7px;
        font-weight: 100;
        color: #AEB3C1;
        letter-spacing: 3px;
    }
    .logo span{
        font-size: 2.3em;
        color: #9747FF;
    }

    .backGround{
        text-align: center;
    }
    .backGround img {
        
        width: 430px;
        height: 353px;
        border-radius: 16px;
    } 

    .bookingIndex{
        display: flex;
        align-items: center;
        background: #FBF5F1;
        padding: 20px;
        padding-bottom: 35px;
        margin: 18px;
        border-radius: 8px; 
        position: absolute;
        bottom: 220px;
        box-shadow: -10px -10px 300px;
    }
    .description{
        font-size: 15px;
        padding: 10px;
        font-weight: 200;
        position: relative;
        bottom: 27px;
    }
    .button{
        display: flex;
        align-items: center;
    }
    button{

        margin:auto;
        border: none;
        background: var(--primary-color);
        color:white;
        padding:20px 30px;
        border-radius: 8px;
    }
    .welcome{
        text-align: center;
        padding: 25px;
        font-weight: 500;
    } 

    .footer{
        background: #FFFFFF;
        display: flex;
        align-items: center;
        place-content: space-between;
        padding:10px 30px;
        position: sticky;
        bottom: 0;
    }

    .home{
        display: flex;
        align-items: center;
        place-content: space-between;
        background: #ebe2f6;
        color:var(--primary-color);
        padding:5px 10px;
        border-radius: 12px;
        font-size: 12px;
    }

    @media(min-width:890px){
        .bookingIndex{
            
            
            
        }
        .footer{
            display: none;
        }
        .description{
            padding: 10px 90px;
            font-size: 17px;
        }
        #burger{
            display:none;
        }
        .backGround img {
        
            width: 850px;
            height: 350px;
            
        } 
        /* .bookingIndex{
            position: absolute;
            bottom: 100px;
        } */

    }
    </style>
   
</body>
</html>
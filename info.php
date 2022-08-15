<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>PHP Booking App</title>
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
     
    <div class="formbox">
        <div class="header">Booking Info</div>
        <form action="">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="text">
            <input type="date">
            <button>submit</button>
        </form>
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

        .formbox{
            display: block;
        }

        {
        background: #FFFFFF;
        display: flex;
        align-items: center;
        place-content: space-between;
        padding:10px 30px;
        position: sticky;
        bottom: 0;}

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
    </style>    
</body>

</html>
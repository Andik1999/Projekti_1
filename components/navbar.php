<?php
    // Start session at the beginning
    // session_start();

    if(isset($_SESSION['user']) || isset($_SESSION['adm'])){
        $log = "<li><a href='logout.php?logout'>Logout</a></li>";
    
    }else{
        $log = "<li><a href='login.php'>Log in</a></li>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        nav{
            background: white;
            height: 80px;
            width: 100%;
            border-bottom: 2px solid #EB5E28;
            position: sticky;
            top: 0;
            z-index: 100; 
        }


img{
    width: 80px;
    height: 80px;
    margin-left: 10px;
}
        nav ul{
            float: right;
            margin-right: 100px;
 
        }

        nav ul li{
            display: inline-block;
            line-height:80px;
            margin: 0px 10px;
        }

        nav ul li a {
            color: black;
            font-size: 17px;
        }

        a:hover{
            color: #CCC5B9;
            transition: 0s;
            cursor: pointer;
            border-bottom: 1px solid #EB5E28;
        }
        .checkBtn{
            font-size: 30px;
            color: #FFFCF2;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }
        #check{
            display: none;
        }
        @media (max-width: 992px){
            label.logo{
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a{
                font-size: 16px;
            }
           nav{
            position:sticky;
            top: 0;
            z-index: 10;
           }
        }
        @media (max-width: 992px){
            .checkBtn{
                display: block;
            }
            
            nav ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background-color: #dfe3f4;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
                z-index: 10;
                text-decoration: none;
                padding-left: 0;
            }
            nav ul li{
                display: block;
                margin: 50px 0;
                line-height: 30px;
                
            }
            nav ul li a{
                font-size: 20px;
                color: #252422;

            }
            .checkBtn{
                color: #CCC5B9;
            }
            a:hover{
                color: rgba(64, 61, 57, 0.7)
            }
            #check:checked ~ ul{
                left: 0%;
            }
            .fixed{
                position:fixed;
                top:0;
                z-index: 10;
            }
        }
        /*  */
    </style>
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkBtn">
            <i class="fa fa-bars"></i>
        </label>
        <img src="logo.png" alt="">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?= $log ?>
        </ul>
    </nav>
    <script>
       document.addEventListener('DOMContentLoaded', function(){
    var check = document.getElementById('check');
    var navbar = document.getElementsByTagName('nav')[0]; 

    check.addEventListener('click', function(){
        navbar.classList.add('fixed');
    });
});

        </script>
</body>
</html>

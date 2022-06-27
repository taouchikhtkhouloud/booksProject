<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nom'])) {
    
}else{
     header("Location: login.php");
     exit();
}
 ?>

<head>
    <title>my books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
        .brand{
            background: #cbb09c !important;
        }
        .brand-text{
            color: #cbb09c !important;

        }
        form{
            max-width: 760px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 30px;
            
            box-shadow: 10px black ;
            

        }
        .book{
            margin-left: 100px;
            margin-top:10px;
           
            
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">My books</a>
            <ul id=""nav-mobile class="right hide-on-small-and-down">
                <li class='grey-text'>Hello, <?php echo $_SESSION['nom']; ?> </li>
                <li><a href="add.php" class="btn brand z-depth-0">Add a book</a></li>
                <li><a href="logout.php" class="btn brand z-depth-0">log out</a></li>

            </ul>
        </div>
    </nav>
  
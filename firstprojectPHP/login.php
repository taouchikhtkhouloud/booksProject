
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <body class="brand">

    <section class="container grey-text ">
        <h4 class="center">Login</h4>
        <form action="loginitem.php" method="POST" class="white">
            <?php if(isset($_GET['error'])){ ?>
                <h5 class="red-text"><?php echo $_GET['error'];?></h5>
            <?php } ?>
            <label for="name">Your name:</label>
            <input type="text" name="name" >
            <label for="title">Your password</label>
            <input type="password" name="password">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include('template/footer.php');?>


</html>
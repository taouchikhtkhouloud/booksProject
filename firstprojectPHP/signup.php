
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
            background:white;
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
    <form action="signupitem.php" method="post">
     	<h2 class="center brand-text">SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="red-text"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="green-text"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit" class="btn brand z-depth-0">Sign Up</button>
        <br/>
        <br/>
          <a href="login.php" class="center brand-text">Already have an account?</a>
     </form>
    </section>
    <?php include('template/footer.php');?>


</html>
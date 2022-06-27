<?php 
include('config/connect.php');
    $errors = array('email'=>'','title'=>'','desc'=>'','price'=>'');
    $email=$title=$price=$desc='';
    if(isset($_POST['submit'])){
        
        if(empty($_POST['email'])){
            $errors['email'] ='An email is required <br/>';
        }
        else{
            $email=$_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address';
            }
        }
        if(empty($_POST['title'])){
            $errors['title'] ='An title is required <br/>';
        }
        else{
            $title=$_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                $errors['title'] = 'title must be a valid title address';
            }
        }
        if(empty($_POST['desc'])){
            $errors['desc'] ='An desc is required <br/>';
        }
        else{
            $desc=$_POST['desc'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$desc)){
                $errors['desc'] = 'desc must be a valid desc address';
            }
        }
        if(empty($_POST['price'])){
            $errors['price'] = 'An price is required <br/>';
        }
        else{
            $price=$_POST['price'];
            if(!preg_match('/^[0-9\.]+$/',$price)){
                $errors['price'] = 'price must be a valid price address';
            }
        }
        if(array_filter($errors)){
           
        }
        else{
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $desc = mysqli_real_escape_string($conn, $_POST['desc']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $price = mysqli_real_escape_string($conn, $_POST['price']);
            //create sql
            $sql ="INSERT INTO books(title,description,email,price) VALUES('$title','$desc','$email',$price)";
            //save to db and check
            if(mysqli_query($conn, $sql)){
                    //sucess
                    header('Location: index.php');
            }
            else{
                echo 'error ';
            }
           

        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/header.php');?>

    <section class="container grey-text">
        <h4 class="center">add a book</h4>
        <form action="add.php" method="POST" class="white">
            <label for="email">Your email:</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <div class="red-text"><?php echo $errors['email']; ?> </div>
            <label for="title">Book title:</label>
            <input type="text" name="title"  value="<?php echo $title; ?>">
            <div class="red-text"><?php echo $errors['title']; ?> </div>

            <label for="title">Book description:</label>
            <input type="text" name="desc"  value="<?php echo $desc; ?>">
            <div class="red-text"><?php echo $errors['desc']; ?> </div>

            <label for="title">Book price:</label>
            <input type="text" name="price"  value="<?php echo $price; ?>">
            <div class="red-text"><?php echo $errors['price']; ?> </div>

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include('template/footer.php');?>


</html>
<?php include('template/header.php');
     $name=$_SESSION['nom']
     ?>

<?php
 include('config/connect.php');
    /* if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql= "DELETE FROM books WHERE id = $id_to_delete";
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }{
            echo 'error' .mysqli_error($conn);
        }
    } */
//check get request id pqrqm
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn,$_GET['id']);
        $sql = "SELECT * FROM books WHERE id = $id";
        //get the query result
        $result = mysqli_query($conn, $sql);
        //fetch result in array format
        $book = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        //close connection
        mysqli_close($conn);
        
    } 
?>

<!DOCTYPE html>
<html lang="en">
<div class=" detail container center">
    <?php if($book): ?>
        <h4 ><?php echo htmlspecialchars($book['title']); ?></h4>
        <h5>Created by:</h5>
        <p > <?php echo htmlspecialchars($book['nom']); ?></p>
        <p ><?php echo date($book['created-at']); ?></p>
        <h5 >description:</h5>
        <p  class="des"><?php echo htmlspecialchars($book['description']); ?></p>
        <h5>price:</h5>
        <p > <?php echo htmlspecialchars($book['price']); ?>DH</p>

        
        
        <?php else: ?>
            <h5>no such book exist</h5>
    <?php endif; ?>
         <a href="acheter.php"><input type="submit" value="Acheter" name="" class="btn brand z-depth-0"></a> 

</div>
<?php include('template/footer.php');?>

</html>
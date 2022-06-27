<?php
include('config/connect.php');
    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql= "DELETE FROM books WHERE id = $id_to_delete";
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }{
            echo 'error' .mysqli_error($conn);
        }
    }
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
<?php include('template/header.php');?>
<div class="container center">
    <?php if($book): ?>
        <h4><?php echo htmlspecialchars($book['title']); ?></h4>
        <p>Created by: <?php echo htmlspecialchars($book['email']); ?></p>
        <p><?php echo date($book['created-at']); ?></p>
        <h5>description:</h5>
        <p><?php echo htmlspecialchars($book['description']); ?></p>
        <form action="detail.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $book['id'];?>">
            <input type="submit" value="Delete" name="delete" class="btn brand z-depth-0">
        </form>
        <?php else: ?>
            <h5>no such book exist</h5>
    <?php endif; ?>
</div>
<?php include('template/footer.php');?>

</html>
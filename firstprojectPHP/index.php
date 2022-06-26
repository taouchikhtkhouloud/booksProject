<?php
include('config/connect.php');
//write query for qll books
$sql = 'SELECT id, title, description, price FROM books';
//make query $ get result
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array
$books = mysqli_fetch_all($result, MYSQLI_ASSOC );
//free result from memory
mysqli_free_result($result);
//close connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/header.php');?>
    <h4 class="center grey-text">Books</h4>
    <div class="container">
        <div class="row">
            <?php foreach($books as $book):?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($book['title']); ?> </h6>
                            <p><?php echo htmlspecialchars($book['description']); ?>)</p>
                            <h6><?php echo htmlspecialchars($book['price']); ?>DH</h6>
                            <div class="card-action right-align">
                                <a href="#" class="brand-text">more info</a>
                            </div>
                        </div>
                    </div>
                </div>
               <?php endforeach;?>
        </div>
    </div>

    <?php include('template/footer.php');?>


</html>
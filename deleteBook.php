<?php include "menu.php" ?>

<?php include "connection.php"?>

<h1>Delete Book</h1>

<p>
Do you want to delete this book?<br>

    <form action="deleteSelected.php" class="" method="post">
        <input type="hidden" name="b_id" value="<?php echo $_GET['id']; ?>">
        <label for="">books_name</label> <br>
        <input type="text" name="b_name" value="<?php echo $_GET['name']; ?>" disabled> <br>
        <label for="">author</label> <br>
        <input type="text" name="b_author" value="<?php echo $_GET['author']; ?>"disabled> <br>
        <label for="">isbn</label> <br>
        <input type="text" name="b_isbn" value="<?php echo $_GET['isbn']; ?>"disabled> <br>
        <a href="books.php"><button>Cancel</button></a>
        <input type="submit" name="" value="Delete"> <br>
    </form>
</p>

<?php 
print_r($_GET);
?>

<?php include "footer.php" ?>
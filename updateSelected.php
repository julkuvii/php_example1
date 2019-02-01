<?php include "menu.php" ?>

<?php include "connection.php"; ?>
<h1>Update Book</h1>
<p>
    You have updated the book.
</p>
<?php 

$stmt=$db->prepare("UPDATE books SET books_name=:naBook,author=:auBook,isbn=:isBook
WHERE books_id=:idBook");

    $stmt->bindParam(':idBook', $b_id);
    $stmt->bindParam(':naBook', $b_name);
    $stmt->bindParam(':auBook', $b_author);
    $stmt->bindParam(':isBook', $b_isbn);

$b_id=$_POST['b_id'];
$b_name=$_POST['b_name'];
$b_author=$_POST['b_author'];
$b_isbn=$_POST['b_isbn'];

$stmt->execute();
?>

<?php include "footer.php" ?>
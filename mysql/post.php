<?php
require('config/db.php');
require('config/config.php');

$id = mysqli_real_escape_string($conn, $_REQUEST['id']);

if(isset($_POST['delete'])) {
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";
//    die($query);
    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR:' . mysqli_connect_errno();
    }
}

// Create query
$query = 'SELECT * FROM posts WHERE id ='. $id ;

// Get Results
$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);
//var_dump($post);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);
?>
<?php include('inc/header.php') ?>
<div class="container mt-4">
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-info">Back</a>
        <div class="card text-center m-4">
            <h5 class="card-header"><?php echo $post['title']; ?></h5>
            <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?> </small>
            <p class="card-text mt-2"><?php echo $post['body']; ?></p>
            <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a>
        </div>
    <hr>

    <form method="post" class="pull-right" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
    </form>

    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Edit</a>
</div>
<?php include('inc/footer.php') ?>

<?php
require('config/db.php');
require('config/config.php');

if(isset($_POST['submit'])) {


    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);

    $query = "UPDATE posts SET
                title='$title',
                author='$author',
                body='$body'
             WHERE id={$update_id}";
//    die($query);
    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR:' . mysqli_connect_errno();
    }
}
    $id = mysqli_real_escape_string($conn, $_GET['id']);
//    echo $id . 'Hlnhaihe';

    // Create query
    $query = 'SELECT * FROM posts WHERE id = '. $id;

    // Get Results
    $result = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($result);
//    var_dump($post);

    // Free result
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);


?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Post</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="" value="<?php echo $post['title']; ?>" class="form-control">

                <label for="author">Author</label>
                <input type="text" name="author" id="" class="form-control" value="<?php echo $post['title']; ?>">

                <label for="title"></label>
                <textarea  name="body" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
<?php include('inc/footer.php'); ?>
<?php
require('config/db.php');
require('config/config.php');

if(isset($_POST['submit'])){


    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "INSERT INTO posts(title, body, author) VALUES('$title', '$body', '$author')";

    if(mysqli_query($conn, $query)){
        header('Location: '. ROOT_URL. '');
    } else {
        echo 'ERROR:'. mysqli_connect_errno();
    }
}

?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Post</h1>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
           <div class="form-group">
               <label for="title">Title</label>
               <input type="text" name="title" id="" class="form-control">

               <label for="author">Author</label>
               <input type="text" name="author" id="" class="form-control">

               <label for="title"></label>
               <textarea  name="body" class="form-control"></textarea>
           </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
<?php include('inc/footer.php'); ?>
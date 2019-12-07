<?php 
require('config/db.php');
require('config/config.php');

// Create query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get Results
$result = mysqli_query($conn, $query);

// Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
    <div class="container">
    <h1>Posts</h1>
    <?php foreach($posts as $post): ?>
        <div class="card text-center m-4">
            <h5 class="card-header"><?php echo $post['title']; ?></h5>
            <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?> </small>
            <p class="card-text mt-2"><?php echo $post['body']; ?></p>
            <a class="btn btn-info" href="post.php?id=<?php echo $post['id']; ?>"> Read More</a>
        </div>
    <?php endforeach; ?>
    </div>
<?php include('inc/footer.php'); ?>
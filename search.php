<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php
            if (isset($_POST['submit'])) {
                // Check if source and destination are provided
                if (empty($_POST['source']) || empty($_POST['destination'])) {
                    echo "<h2>*Source And Destination Fields Are Mandatory To Fill</h2>";
                } else {
                    // Sanitize inputs to prevent SQL injection
                    $source = mysqli_real_escape_string($connection, $_POST['source']);
                    $destination = mysqli_real_escape_string($connection, $_POST['destination']);
                    $date = mysqli_real_escape_string($connection, $_POST['date']);

                    // Construct the SQL query
                    $query = "SELECT * FROM posts WHERE post_title LIKE '%$source%' AND post_title LIKE '%$destination%' AND post_date = '$date'";

                    // Execute the query
                    $search_query = mysqli_query($connection, $query);

                    // Check for query execution errors
                    if (!$search_query) {
                        die("Query Failed" . mysqli_error($connection));
                    }

                    // Check if any results were found
                    $count = mysqli_num_rows($search_query);
                    if ($count == 0) {
                        echo "<h1>NO RESULT</h1>";
                    } else {
                        // Display the results
                        while ($row = mysqli_fetch_assoc($search_query)) {
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];
                            $post_id = $row['post_id'];
            ?>

            <!-- First Blog Post -->
            <h2>
                <a href="bus_info.php?bus_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $post_author; ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Bus on <?php echo $post_date; ?></p>
            <hr>
            <a href="bus_info.php?bus_id=<?php echo $post_id; ?>"><img class="img-responsive"
                    src="images/<?php echo $post_image; ?>" alt=""></a>
            <!-- <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt=""> -->
            <hr>
            <p><?php echo $post_content ?></p>
            <a class="btn btn-primary" href="bus_info.php?bus_id=<?php echo $post_id; ?>">Read More <span
                    class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
            <?php }
                    }
                }
            } ?>



        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"; ?>

    </div>
    <!-- /.row -->

    <hr>
</div>
<?php include "includes/footer.php"; ?>
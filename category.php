<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

            <?php

            if (isset($_GET['category'])) {
                $cat_type = $_GET['category'];
            }

            $query = "SELECT *  FROM  posts WHERE post_category_id=$cat_type";
            $select_all_bus = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_all_bus)) {
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
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                <hr>
                <a href="bus_info.php?bus_id=<?php echo $post_id; ?>"><img class="img-responsive" src="images/<?php echo $post_image; ?>" alt=""></a>
                <hr>
                <p><?php echo $post_content ?></p>


                <hr>
            <?php } ?>

        </div>


    </div>
    <!-- /.row -->

    <hr>

</div>
<section class="col-lg-12 col-md-8">
    <div>
        <?php include "includes/footer.php"; ?>
    </div>
</section>
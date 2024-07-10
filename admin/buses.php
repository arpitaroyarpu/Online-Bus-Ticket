<!-- Include the admin header -->
<?php include "includes/admin_header.php"; ?>

<div id="wrapper">

    <!-- Include the admin navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome To Admin
                        <small>Author</small>
                    </h1>

                    <?php



                    // Check if 'source' is set in the URL
                    if (isset($_GET['source'])) {
                        $source = $_GET['source']; // Assign the value of 'source' from the URL to the variable $source
                    } else {
                        $source = ""; // Set $source to an empty string if 'source' is not set in the URL
                    }

                    // Use a switch statement to determine the action based on the value of $source
                    switch ($source) {
                        case 'add_bus':
                            // If $source is 'add_bus', include the file for adding a new bus
                            include "includes/add_bus.php";
                            break;

                        case 'update':
                            // If $source is 'update', include the file for updating a bus
                            include "includes/update.php";
                            break;

                        default:
                    ?>
                    <!-- If $source is not 'add_bus' or 'update', display a table of bus information -->
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Bus_Id</th>
                                <th>Admin_Name</th>
                                <th>Source and Destination</th>
                                <th>Intermediate Stations</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Time</th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php
                                    // Establish a database query to select all records from the 'posts' table
                                    $query = "SELECT * FROM posts";
                                    // Execute the query using the mysqli_query function with the specified database connection
                                    $select_posts = mysqli_query($connection, $query);
                                    // query er 2 ta perametar 2 ta connection and query

                                    // Loop through the result set using a while loop
                                    while ($row = mysqli_fetch_assoc($select_posts)) {
                                        // Retrieve and store values from the current row in variables
                                        $bus_id = $row['post_id'];
                                        $admin_name = $row['post_author'];
                                        $source = $row['post_source'];
                                        $destination = $row['post_destination'];
                                        $intermediate_station = $row['post_via'];
                                        $category = $row['post_category_id'];
                                        $image = $row['post_image'];
                                        $date = $row['post_date'];
                                        $time = $row['post_via_time'];
                                       


                                        // Check if the date is greater than the current date
                                        if ($date > date('Y-m-d')) {
                                    ?>


                            <tr>
                                <td>
                                    <?php echo $bus_id ?>
                                    <!-- Display the value of $bus_id in a table cell -->
                                </td>
                                <td>
                                    <?php echo $admin_name ?>
                                    <!-- Display the value of $admin_name in a table cell -->
                                </td>
                                <td>
                                    <?php echo $source . " To " . $destination ?>
                                    <!-- Display the concatenation of $source, " To ", and $destination in a table cell -->
                                </td>
                                <td>
                                    <?php echo $intermediate_station ?>
                                    <!-- Display the value of $intermediate_station in a table cell -->
                                </td>
                                <td>
                                    <?php echo $category ?>
                                    <!-- Display the value of $category in a table cell -->
                                </td>
                                <td><img width="100" src="../images/<?php echo $image ?>"></td>
                                <!-- Display an image with the source from "../images/" concatenated with the value of $image -->
                                <td>
                                    <?php echo $date ?>
                                    <!-- Display the value of $date in a table cell -->
                                </td>
                                <td>
                                    <?php echo $time ?>
                                    <!-- Display the value of $time in a table cell -->
                                </td>
                                <?php echo "<td><a href='buses.php?delete=$bus_id'>Delete</a></td>"; ?>
                                <!-- Display a delete link in a table cell with the delete URL containing $bus_id -->
                                <?php echo "<td><a href='buses.php?source=update&bus_id=$bus_id'>Update</a></td>"; ?>
                                <!-- Display an update link in a table cell with the update URL containing $bus_id -->
                                <?php echo "<td><a href='buses.php?clone_bus_id=$bus_id'>Clone</a></td>"; ?>
                                <!-- Display a clone link in a table cell with the clone URL containing $bus_id -->
                            </tr>
                            <?php
                                        }
                                        // End of PHP block within HTML
                                    } // End of the while loop
                                    ?>
                        </tbody>
                    </table>

                    <?php
                            break;
                    }

                    ?>

                    <?php
                    // Check if 'clone_bus_id' is set in the URL
                    if (isset($_GET['clone_bus_id'])) {
                        $bus_id = $_GET['clone_bus_id']; // Assign the value of 'clone_bus_id' from the URL to the variable $bus_id

                        // Query to select all columns from the 'posts' table where 'post_id' is equal to $bus_id
                        $query = "SELECT * FROM posts WHERE post_id=$bus_id";

                        // Execute the query using the mysqli_query function with the specified database connection
                        $select_posts = mysqli_query($connection, $query);

                        // Loop through the result set using a while loop
                        while ($row = mysqli_fetch_assoc($select_posts)) {
                            // Retrieve and store values from the current row in variables
                            $admin_name = $row['post_author'];
                            $title = $row['post_title'];
                            $bus_detail = $row['post_content'];
                            $source = $row['post_source'];
                            $destination = $row['post_destination'];
                            $intermediate = $row['post_via'];
                            $category = $row['post_category_id'];
                            $image = $row['post_image'];
                            $date = $row['post_date'];
                            $via_time = $row['post_via_time'];
                            $max_seats = $row['max_seats'];
                            $available_seats = $row['available_seats'];
                            $cost = $_POST['cost'];

                            // Construct an SQL INSERT query to add a new record to the 'posts' table
                            $query_new = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_source, post_destination, post_via, post_via_time, max_seats, available_seats,cost) VALUES({$category}, '{$title}', '{$admin_name}', '{$date}', '{$image}', '{$bus_detail}', '{$source}', '{$destination}', '{$intermediate}', '{$via_time}', $max_seats, $available_seats,$cost)";
                        }
                        // Execute the INSERT query using the mysqli_query function with the specified database connection
                        $clone_bus = mysqli_query($connection, $query_new);
                        // Redirect to 'buses.php' after cloning
                        header("Location:buses.php");
                    }
                    ?>

                    <?php
                    // Check if 'delete' is set in the URL
                    if (isset($_GET['delete'])) {
                        // Assign the value of 'delete' from the URL to the variable 
                        $bus_idd = $_GET['delete'];

                        // Construct an SQL DELETE query to remove the record from the 'posts' table where 'post_id' is equal to $bus_idd
                        $query = "DELETE FROM posts WHERE post_id = {$bus_idd}";

                        // Execute the DELETE query using the mysqli_query function with the specified database connection
                        $delete_bus = mysqli_query($connection, $query);

                        // Check if the DELETE query was unsuccessful
                        if (!$delete_bus) {
                            // Display an error message and terminate the script if the DELETE query fails
                            die("Query Failed: " . mysqli_error($connection));
                        }

                        // Redirect to 'buses.php' after successful deletion
                        header("Location: buses.php");
                    }
                    ?>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php"; ?>
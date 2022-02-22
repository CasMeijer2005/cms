<!-- header section -->
<?php require_once "includes/header.php" ?>

<!-- Navigation -->
<?php require_once "includes/nav.php" ?>

<!-- Page Content -->
<div class="container">

    <div class="row">



        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php
            $query = "SELECT * from posts";
            $data = mysqli_query($con, $query);

            while ($row = mysqli_fetch_assoc($data)) {
                $Post_title = $row['post_title'];
                $Post_author = $row['post_author'];
                $Post_date = $row['post_date'];
                $Post_img = $row['post_img'];
                $Post_content = $row['post_content'];
                $Post_tags = $row['post_tags'];
            ?>
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $Post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $Post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $Post_date ?></p>
                <hr>
                <img class="img-responsive" src="imgs/<?php echo $Post_img ?>" alt="">
                <hr>
                <p><?php echo $Post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
            <?php

            }

            ?>

        </div>

        <!-- side bar -->
        <?php require_once "includes/sidebar.php" ?>

        <hr>

        <!-- Footer -->
        <?php require_once "includes/footer.php" ?>
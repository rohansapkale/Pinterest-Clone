<?php
include 'db.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Pinterest</title>
    <link rel="stylesheet" href="./assets/feed.css">
</head>
<!-- A Simple non functional Pinterest inspired page layout created using only HTML and CSS.
       Created by M. Hassler - Hassified -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<body>

    <div class="header">
        <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/pinterest-round-color-icon.png" class="icon pinterest-icon">
        <ul class="navigation">
            <li>Home</li>
            <li>Explore</li>
            <li>Create</li>
        </ul>
        <div class="search-bar">
            <img src="https://www.brilliantlightingcenter.com/data/images/icons/search.svg" class="search-icon">
            <input type="text" placeholder="Search">
        </div>
        <div class="nav-icons">
            <img src="https://uxwing.com/wp-content/themes/uxwing/download/communication-chat-call/bell-icon.png" class="icon nav-icon">
            <img src="https://uxwing.com/wp-content/themes/uxwing/download/communication-chat-call/speech-bubble-black-icon.png" class="icon nav-icon">
            <img src="https://uxwing.com/wp-content/themes/uxwing/download/arrow-direction/angle-bottom-icon.png" class="icon nav-icon arrow-icon">
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <?php
        $select = "select * from posts";
        $result = mysqli_query($conn, $select);
        ?>
        <?php
        while ($img = mysqli_fetch_array($result)) {
        ?>
            <div class="box">
                <a href="https://oriontralelblog.com/wp-content/uploads/2019/08/IMG_6310.jpg">
                    <img src=<?php echo $img['post_link'];  ?> alt="image"></a>
                <div class="caption">Lorem ipsum </div>
            </div>
        <?php
        } //while ends here
        ?>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="app.js"></script>
    <script>
        function toggleMenu() {
            var navigation = document.querySelector('.navigation');
            navigation.style.display = (navigation.style.display === 'none' || navigation.style.display === '') ? 'flex' : 'none';
        }
    </script>

</body>
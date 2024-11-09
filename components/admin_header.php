<!-- header section starts -->

<header class="header">

    <section class="flex">

        <a href="dashboard.php" class="logo">ADMIN.</a>

        <form action="search_page.php" method="post" class="searchform">
            <input type="text" placeholder="search here......" required
                maxlength="100" name="search_box">
            <button type="submit" class="fas fas-search" name="search_btn"></button>
        </form>

        <div class="/icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search -btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>

        </div>

        <div class="profile">
            <?php
            $select_profile = $conn->prepare("SELWCT * FROM 'tutors' WHERE id
        = ?");
            $select_profile->execute([$user_id]);
            if ($select_profile->rowCount() > 0) {
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
            ?>
                <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
                <h3><?= $fetch_profile['name']; ?></h3>
                <span><?= $fetch_profile['profession']; ?></span>
                <a href="profile.php" class="btn">view profile</a>
                <div class="flex-btn">
                    <a href="login.php" class="option-btn">login</a>
                    <a href="register.php" class="option-btn">register</a>
                </div>
                <a href="../components/admin_logout.php" onclick="return comfirm
                ('logout from this website?');" class="delete-btn">logout</a>
            <?php
            } else {

            ?>
                <h3 style="text-align: center;"> please login first</h3>
                <a href="login.php" class="option-btn">login</a>
                <a href="register.php" class="option-btn">register</a>


            <?php

            }

            ?>
        </div>

    </section>

</header>

<!-- header section ends -->

<div class="side-bar">
    <div class="profile">
        <?php
        $select_profile = $conn->prepare("SELWCT * FROM 'tutors' WHERE id
        = ?");
        $select_profile->execute([$user_id]);
        if ($select_profile->rowCount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
            <h3><?= $fetch_profile['name']; ?></h3>
            <span><?= $fetch_profile['profession']; ?></span>
            <a href="profile.php" class="btn">view profile</a>
            <div class="flex-btn">
                <a href="login.php" class="option-btn">login</a>
                <a href="register.php" class="option-btn">register</a>
            </div>
            <a href="../components/admin_logout.php" onclick="return comfirm
                ('logout from this website?');" class="delete-btn">logout</a>
        <?php
        } else {

        ?>
            <h3 style="text-align: center;"> please login first</h3>
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
    </div>
<?php
        }
?>
</div>

<nav class="navbar">
    <a href="dashboard.php"><i class="fas fa home"></i><span>home </span></a>
    <a href="playlist.php"><i class="fas fa-bars-staggered"></i>
        <span>playlists</span></a>
    <a href="contents.php"><i class="fas fa-graduation-cap">
        </i><span>contents</span></a>
    <a href="comments.php"><i class="fas fa-comment"></i>
        <span>comments</span></a>
    <a href="../components/admin_logout.php" onclick="return comfirm
                ('logout from this website?');" class="delete-btn">
        <i class="fas fa-right-from-bracket"> </i><span>logout</span></a>
</nav>

</div>

<!-- sidebar section starts -->
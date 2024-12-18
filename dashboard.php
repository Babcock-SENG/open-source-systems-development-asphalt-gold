<?php
include '../components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="../css/admin_style.css">

    <!-- header section link -->
    <?php include '../components/admin_header.php'; ?>


</head>


<body>


    <!-- footer section link -->
    <?php include '../components/footer.php'; ?>

    <!--custom js file link -->
    <script src="../js/admin_script.js"></script>

</body>

</html>
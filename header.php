<?php 
// session_start();
include_once 'DB_Connection.php';

// echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
//         rel="stylesheet"
//         integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
//         crossorigin="anonymous"
//         />';

echo '<link rel="stylesheet" href="Header_Navbar.css"/>';

?>


<form action="header.php" method="POST">
    <div class="profile_page">
        <div class="titleimage">
            <img src="./image/logo-title.png" alt="kyau-title-image" />
    </div>


<!--********************** Navbar ************************-->
    
        <div class="navbar_new">
            <div class="nav_new_menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Notice</a></li>
                    <li><a href="admin_approve.php">Pending</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About</a></li>
                </ul>
            </div>
         
            <div class="nav_user_info">
                <ul>
                    <?php if(isset($_SESSION['user_name'])){ ?>
                    <li><a href="profile.php"><?php echo "Welcome " .$_SESSION['user_name']; ?></a></li>
                    <li><a href="Login.php">Logout</a></li>
                </ul>
                <?php }else{ ?>
                    <li><a>Login</a></li>
                <?php } ?>

            </div>
        </div>  
</form>

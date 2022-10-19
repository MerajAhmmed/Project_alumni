<?php 
// session_start();
include_once 'DB_Connection.php';
include 'header.php';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
crossorigin="anonymous"
/>';

echo '<link rel="stylesheet" href="profile.css"/>';
?>
    
        <!--******************* User profile section ************************-->
    <form action="" method="POST">
        <div class="user_profile">
            <!-- <div class="your_profile">
                <p>Your Profile</p>
            </div> -->
            <div class="user_img_text">
                <div class="user_img">
                    <img src="./image/beard.png" alt="">
                </div>
                <div class="user_text">
                    <span class="user_text_name"><?php echo $_SESSION['user_name']; ?></span>
                    <span class="user_text_desg"><?php echo $_SESSION['user_type']; ?></span>
                    <span class="user_text_email"><?php echo $_SESSION['user_email']; ?></span>
                </div> 


                <div class="user_edit_profile">
                    <button>Update Profile</button>
                </div>
            </div>

            
        </div>
    </form>
<?php include 'footer.php'; ?>

<?php 
// session_start();
include_once 'DB_Connection.php';
include "header.php";
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
crossorigin="anonymous"
/>';

echo '<link rel="stylesheet" href="profile.css"/>';

?>

<body>
        <!--******************* User profile section ************************-->
    
        <div class="user_profile">
            <!-- <div class="your_profile">
                <p>Your Profile</p>
            </div> -->
            <div class="user_img_text">
                <div class="user_img">
                    <img src="./image/beard.png" alt=""  style="width: 200px; height: 200px">
                    <input type="file"  id="formFileSm" name="profileUpload" accept="image/*" >
                </div>
                <div class="user_text">
                <input type="text1"  id="u-name" placeholder="Name">

                </div> 


                <div class="user_edit_profile">
                    <button>Update Profile</button>
                </div>
            </div>   
        </div>

        <!-- **************************** Footer Section ************************ -->
                    <?php include "footer.php"; ?>
</body>
</html>

<?php 

?>
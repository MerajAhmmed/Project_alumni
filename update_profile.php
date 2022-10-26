<?php 
// session_start();
include_once 'DB_Connection.php';
include "header.php";
echo '<link rel="stylesheet" href="update_profile.css"/>';

?>

<?php   
        $upload_errors = array(
                UPLOAD_ERR_NO_FILE => "no file",
                UPLOAD_ERR_OK => "no error"
        );
        if(isset($_POST['submit']))
        {
             $user_id = $_SESSION['user_id'];
             $tmp_file = $_FILES['u_file']['tmp_name'];
             $target_file = basename($_FILES['u_file']['name']);
             $file_name = $_FILES['u_file']['name'];
             $upload_dir = "upload";
             

             $sql = "UPDATE user_info SET user_image='$file_name' WHERE user_id = '$user_id' ";
             mysqli_query($con,$sql);
                

             if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)){
                $message = "File upload successful";
             }else{
                $error = $_FILES['u_file']['error'];
                $message = $upload_errors[$error];
             }
        }

        

?>

<?php if(!empty($message)) {echo "<p>{$message}</p>";} ?>
<form action="update_profile.php" enctype="multipart/form-data" method="POST" >
        <div>             
                <input type="file" name="u_file">
                <button class="" type="submit" name="submit">submit</button>
        </div> 
</form>
                        

<?php include 'footer.php'; ?>
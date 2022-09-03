<?php
  echo "<link rel='stylesheet' href='./registration.css'>";
  include_once 'DB_Connection.php';

  if(isset($_POST['r-submit'])){
    $user_name = $_POST['r-name'];
    $user_email = $_POST['r-email'];
    $user_mobile = $_POST['r-phone'];
    $user_password = $_POST['password'];
    $confirm_password= $_POST['confirm-pass'];
  

    if(!empty($user_name) &&!empty($user_email) && !empty($user_mobile) && !empty($user_password) && !empty($confirm_password) ){
      $hash_password = md5($user_password);
    $sql = "insert into user_info values ('','$user_name','$user_email','$user_mobile','$hash_password','','','')";

    mysqli_query($con, $sql);

    header("Location:./Login.php");
    // mysqli_close($con);

    }else{
      echo "please enter some valid information";
    }
  }


?>



    <section class="r-page">
      <form class="r-form" action="Registration.php"  method="POST">
        <h1>Registration</h1>
        <input type="text" name="r-name" id="r-name" placeholder="Name" />
        <input type="text" name="r-email" id="r-email" placeholder="Email" />
        <input type="text" name="r-phone" id="r-phone" placeholder="Phone" />
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Password"
        />
        <input
          type="password"
          name="confirm-pass"
          id="confirm-pass"
          placeholder="Confirm Password"
        />
        <button class="r-btn" name ="r-submit">Sign Up</button>
        <p>Already have an account? <a href="">Login</a></p>
      </form>
    </section>
  </form>
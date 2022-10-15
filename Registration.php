<?php
  echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
  crossorigin="anonymous"
  />';
  echo "<link rel='stylesheet' href='./registration.css'>";
  include_once 'DB_Connection.php';

  if(isset($_POST['r-submit'])){
    $user_name = $_POST['r-name'];
    $user_email = $_POST['r-email'];
    // $user_mobile = $_POST['r-phone'];
    $user_password = $_POST['password'];
    $confirm_password= $_POST['confirm-pass'];
    $user_type = $_POST['user_type'];
  

    if(!empty($user_name) && !empty($user_email) && !empty($user_type) && !empty($user_password) && !empty($confirm_password) ){
      $hash_password = md5($user_password);
    $sql = "insert into user_info values ('','$user_name','$user_email','','$hash_password','$user_type','0','')";

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
        <!-- <input type="text" name="r-phone" id="r-phone" placeholder="Phone" /> -->
        <label for="user_type">Choose User Type : </label> 
       <select name="user_type" id="user_type">
        
              <option value="current_student">Faculty_Member</option>
              <option value="current_student">current_student</option>
              <option value="current_student">Former_student</option>
       </select>
       
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
        <p>Already have an account? <a href="Login.php">Login</a></p>
      </form>
    </section>
  </form>
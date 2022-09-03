<?php 
  echo "<link rel='stylesheet' href='./Login.css'>";
  include_once 'DB_Connection.php';
  include 'l_function.php';

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $user_email = $_POST['l-email'];
    $user_password = $_POST['l-password'];
    $hash_login_password = md5($user_password);

      if(!empty($user_email) && !empty($user_password))
      {
          $query = "select * from user_info where user_email = '$user_email' and user_password = '$hash_login_password' limit 1";
          $result = mysqli_query($con, $query);
          if($result){

            if(mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                $_SESSION['user_id'] = $user_data['user_id'];
                $_SERVER['user_name'] = $user_data['user_name'];
                $_SESSION['user_type'] = $user_data['user_type'];
                header("Location: index.php");
                // mysqli_close($con);
            } else {
                echo "Wrong password!";
              }
          }
        }
        else
        {
          echo "please fillup user name and password";
        }
  }


  
?>




    <section class="l-page">
      <form class="l-form" action="Login.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="l-email" id="l-email" placeholder="Email" />
        <input
          type="password"
          name="l-password"
          id="l-email"
          placeholder="Password"
        />
        <button class="l-btn" name="l-btn">Login</button>
        <p>Don't have account? <a href="Registration.php">Sign Up</a></p>
      </form>
    </section>

<?php 
  echo "<link rel='stylesheet' href='./Login.css'>";
  include_once 'DB_Connection.php';
 
  // include 'l_function.php';
  if(isset($_POST['l-btn']))
  {
    $user_email = $_POST['l-email'];
    $user_password = $_POST['l-password'];
    $hash_login_password = md5($user_password);

      if(!empty($user_email) && !empty($user_password))
      {
              
          $query = "select * from user_info where user_email = '$user_email' and user_password = '$hash_login_password' and user_active = 1 limit 1";
          $result = mysqli_query($con, $query);
          if(mysqli_num_rows($result)>0)
          {
              $user_data=mysqli_fetch_assoc($result);
              $_SESSION['user_id'] = $user_data['user_id'];
              $_SESSION['user_name'] = $user_data['user_name'];
              $_SESSION['user_type'] = $user_data['user_type'];
              $_SESSION['user_email'] = $user_data['user_email'];
              header("Location: index.php");
          }else{
            echo '<script type="text/javascript">
                          alert("The username and password does not match.");
                  </script>';
          }
      }else{
        echo '<script type="text/javascript">
                          alert("Please Fill The Input Field");
              </script>';
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

<?php 
// session_start();
include_once 'DB_Connection.php';
include "header.php";
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
crossorigin="anonymous"
/>';

echo '<link rel="stylesheet" href="update_profile.css"/>';

?>


<section>
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Change Your Profile</h1>
		</div>
		<div style="padding-left: 30px; ">
            <form action="" method="post" >
                <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
                <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>

                <button class="btn btn-default" type="submit" name="submit" >Update</button>
            </form>
        </div>

	</div>
        
</section>
<?php include 'footer.php'; ?>
<?php
    require "include/Database.php";
    if(isset($_POST['register'])){
	    if(!isset($_POST['username'],$_POST['password'],$_POST['repeat-password'],$_POST['age'])){
		    echo "<script><div class=\"alert alert-danger\" role=\"alert\">
                    Empty field(s)
                </div></script>";
	    }
	    if(empty($_POST['username'])||empty($_POST['password'])||empty($_POST['repeat-password'])||empty($_POST['age'])){
		    exit('Values empty');
	    }
	    if($stms = $conn->prepare('select password from users where userName = :username')){
		    $stms->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
		    $stms->execute();
	        echo "<script>alert('You are Logged in into admin panel')</script>";
		    
		    if($row = $stms->fetch(PDO::FETCH_NUM)){
			    echo 'This usename is exists. Try again!';
		    }
		    else{
		        if($_POST['password']!=$_POST['repeat-password']){
			        echo "<script>alert('Your password not match. Try again')</script>";
                }
		        else{
                    if($stms = $conn->prepare('insert into users ( userName, password, age) values(?,?,?)')){
                        $pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $stms->bindParam(1, $_POST['username'], PDO::PARAM_STR);
                        $stms->bindParam(2, $pass, PDO::PARAM_STR);
                        $stms->bindParam(3, $_POST['age'], PDO::PARAM_STR);
                        $stms->execute();
	                    echo "<script>alert('Register success. Direct Login Page')</script>";
	                    echo "<script>window.open('Login.php?','_self')</script>";
                    }
                    else{
	                    echo "<script>alert('Register error')</script>";
                    }
                }
            }
		    $stms = null;
	    }
	    else{
		    echo "<script>alert('Error occurred)</script>";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
	      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
	      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
	      crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" href="css/Register.css">
	<title>Register</title>
</head>
<body>
	<section class="vh-100 bg-image"
	         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
		<div class="mask d-flex align-items-center h-100 gradient-custom-3">
			<div class="container h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-12 col-md-9 col-lg-7 col-xl-6">
						<div class="card" style="border-radius: 15px;">
							<div class="card-body p-5">
								<h2 class="text-uppercase text-center mb-5">Create an account</h2>
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
									<div class="form-outline mb-4">
										<input type="text" id="form3Examplecg" name="username" class="form-control form-control-lg" />
										<label class="form-label" for="form3Examplecg">User Name</label>
									</div>
									<div class="form-outline mb-4">
										<input type="password" id="form3Example5cg" name="password" class="form-control form-control-lg" />
										<label class="form-label" for="form3Example5cg">Password</label>
									</div>
									<div class="form-outline mb-4">
										<input type="password" id="form3Example4cdg" name="repeat-password" class="form-control form-control-lg" />
										<label class="form-label" for="form3Example4cdg">Repeat your password</label>
									</div>
									<div class="form-outline mb-4">
										<input type="text" id="form3Example1cg" name="age" class="form-control form-control-lg" />
										<label class="form-label" for="form3Example1cg">Your Age</label>
									</div>
									<div class="d-flex justify-content-center">
										<button type="submit" name="register"
										        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
									</div>
									<p class="text-center text-muted mt-5 mb-0">Have already an account?
										<a href="Login.php" class="fw-bold text-body">
											<u>Login here</u>
										</a>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</html>
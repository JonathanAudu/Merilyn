<?php
require_once "header.php";
?>

<section class="vh-100" >
<div class="container-fluid h-custom pt-5 py-2">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-6 col-xl-4 offset-xl">

<?php


if (isset($_GET["error"])) {
  switch ($_GET["error"]) {

    case "emptyInput":
      echo "<p class = 'text-danger text-center fw-bold mx-3 mb-0'>Fill in all fields!</p>";
      break;

    case "invalidusername":
      echo "<p class = 'text-danger text-center fw-bold mx-3 mb-0'>Choose a valid username!</p>";
      break;

    case "invalidemail":
      echo "<p class = 'text-danger text-center fw-bold mx-3 mb-0'>Choose a valid email!</p>";
      break;

    case "passworddontmatch":
      echo "<p class = 'text-danger text-center fw-bold mx-3 mb-0'>Passwords doesn't match!</p>";
      break;

    case "usernameoremailalreadyexist":
      echo "<p class = 'text-danger text-center fw-bold mx-3 mb-0'>Username or email already exist!</p>";
      break;

    case "none":
      echo "<p class = 'text-primary text-center fw-bold mx-3 mb-0'>You have successfully signed up</p>";
      break;
  }
}

?>
                <form action="../Includes/signup.inc.php" method="POST">
                  
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">SIGN UP</p>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" >Username</label>
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter your Username" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" >Email address</label>
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" >Password</label>
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter password" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" >Repeat password</label>
                  <input type="password" name="repeatpwd" class="form-control form-control-lg" placeholder="Repeat password" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; 
                    padding-right: 2.5rem;">SignUp</button>
                      <p class="small fw-bold mt-2 pt-1 mb-0">Have an account already? <a href="Login.php"
                class="link-primary">Login</a></p>
                </div>

                </form>

              </div>
              <div class="col-md-8 col-lg-6 col-xl-3 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/img/values-3.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once "footer.php";
?>
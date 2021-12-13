<?php


include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
  

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM users WHERE email='$email'"));

  if ($password !== $cpassword) {
    echo "<div class='alert alert-danger'>Mật khẩu nhập lại không trùng khớp.</div>";
  } elseif ($check_email > 0) {
    echo "<div class='alert alert-danger1'>Email này đã được sử dụng.</div>";
  } else {
    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
     $_POST["signup_full_name"] = "";
     $_POST["signup_email"] = "";
     $_POST["signup_password"] = "";
     $_POST["signup_cpassword"] = "";
     $to = $email;
      $subject = "Email verification - Pure Coding YouTube";

      $message = "
      <html>
      <head>
      <title>{$subject}</title>
      </head>
      <body>
      <p><strong>Dear {$full_name},</strong></p>
      <p>Thanks for registration! Verify your email to access our website. Click below link to verify your email.</p>
      <p><a href='{$base_url}verify-email.php?token={$token}'>Verify Email</a></p>
      </body>
      </html>
      ";

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= "From: ". $my_email;

      if (mail($to,$subject,$message,$headers)) {
        echo "<script>alert('We have sent a verification link to your email - {$email}.');</script>";
      } else {
        echo "<script>alert('Mail not sent. Please try again.');</script>";
      }
    } else {
      echo "<script>alert('User registration failed.');</script>";
    }
  }
}


if (isset($_POST["signin"])) {
  
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
  

  $check_email = mysqli_query($conn, "SELECT id FROM users WHERE email='$email' AND password='$password'");


  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row['id'];
    header("Location: welcome.php");
  } else {
    echo "<div class='alert alert-danger2'>Thông tin đăng nhập không chính xác. Hãy thử lại.</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv ="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Đăng nhập thành viên - InspireGlobal</title>
  <body>
    <div class="container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Đăng nhập</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" value="<?php echo $_POST['email']; ?>" required/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mật khẩu" name="password" value="<?php echo $_POST['password']; ?>" required/>
          </div>
          <input type="submit" value="login" name="signin" class="btn">
          <p class="social-text">Đăng nhập bằng tài khoản MXH</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
         
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Đăng ký</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Tài khoản" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Địa chỉ Email" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mật khẩu" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Xác nhận lại mật khẩu" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required>
          </div>
          <input type="submit" value="Sign up" name="signup" class="btn">
          <p class="social-text">Đăng nhập bằng tài khoản MXH</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
          
        </form>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Đã gia nhập</h3>
            <p>Nếu bạn đã gia nhập cộng đồng của chúng tôi hãy bấm nút đăng nhập dưới đây.</p>
            <button class="btn" id="sign-in-btn">Đăng nhập</button>
          </div>
          <img src="https://cdn.glitch.me/24815548-7497-4f42-94c8-85df5e5e759a%2Fundraw_creativity_re_8grt.svg?v=1639271004054" alt="" class="image">
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Chưa đăng ký</h3>
            <p>Nếu bạn chưa đăng ký, hãy ấn nút dưới đây.</p>
            <button class="btn" id="sign-up-btn">Đăng ký</button>
          </div>
          <img src="https://cdn.glitch.me/24815548-7497-4f42-94c8-85df5e5e759a%2Fundraw_art_lover_re_fn8g.svg?v=1639270992332" alt="" class="image">
        </div>
      </div>
    </div>
    <script src="app.js"></script>
  </body>
</html>
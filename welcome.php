<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <style >
  
    #status {
      /*width: 40px;
      height: 220px;*/
      position: fixed;
      left: 50%;
      z-index: 100;
      top: 50%;
      background-repeat: no-repeat;
      background-position: center;
      margin: -100px 0 0 -100px;
      z-index: 1001;
      background-color: #566666;
      border-radius: 30px;
      animation: aaa6 3s linear infinite;
      animation-delay: 0.1s;
      animation-direction: alternate-reverse;
  }
  @-webkit-keyframes aaa6{
      0% {opacity: 0%; width: 40px; height: 220px; top: 350px; left: 830px; transform: rotate(30deg); }
      50% {opacity: 50%; width: 40px;height: 220px; top: 350px; left: 830px; transform: rotate(360deg); }
      70% {opacity: 100%; width: 40px; height: 100px;top: 350px; left: 830px; transform: rotate(360deg); } 
      80% {opacity: 0%; width: 40px; height: 100px;top: 350px; left: 830px; transform: rotate(360deg);}
      100% {opacity: 0%;}
  }
   #status1 {
   /* width: 40px;
      height: 220px;*/
      position: fixed;
      left: 50%;
      z-index: 100;
      top: 50%;
      background-repeat: no-repeat;
      background-position: center;
      margin: -100px 0 0 -100px;
      z-index: 1001;
      background-color: #4a9dfc;
      border-radius: 30px;
      animation: aaa7 3.1s linear infinite;
      animation-delay: 0.3s;
      animation-direction: alternate-reverse;
   }
   @-webkit-keyframes aaa7{
      0% {opacity: 0%; width: 40px; height: 220px; top: 350px; left: 830px; transform: rotate(30deg);}
      50% {opacity: 50%; width: 40px;height: 220px; top: 350px; left: 830px; transform: rotate(360deg);}
      70% {opacity: 100%; width: 40px; height: 100px;top: 350px; left: 830px; transform: rotate(360deg);}
      80% {opacity: 0%; width: 40px; height: 100px;top: 350px; left: 830px; transform: rotate(360deg);}
      100% {opacity: 0%;}
  }
  #status2{
   /* width: 40px;
      height: 220px;*/
      position: fixed;
      left: 50%;
      z-index: 100;
      top: 50%;
      background-repeat: no-repeat;
      background-position: center;
      margin: -100px 0 0 -100px;
      z-index: 1001;
      background-color: #41ecab;
      border-radius: 30px;
      animation: aaa8 3.2s linear infinite;
      animation-delay: 0.5s;
      animation-direction: alternate-reverse;
  }
  @-webkit-keyframes aaa8{
      0% {opacity: 0%; width: 40px; height: 220px; top: 350px; left: 830px; transform: rotate(30deg);}
      50% {opacity: 50%; width: 40px;height: 220px; top: 350px; left: 830px; transform: rotate(360deg);}
      70% {opacity: 100%; width: 40px; height: 100px;top: 350px; left: 830px; transform: rotate(360deg);}
      80% {opacity: 0%; width: 40px; height: 100px;top: 350px; left: 830px; transform: rotate(360deg);}
      100% {opacity: 0%;}
  }
  
      #loader {
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          width: 100%;
          height: 100%;
          background-color: palegoldenrod;
          z-index: 1000
      }
  </style>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InspireGlobal - Điểm chạm đến thế giới của giấc mơ</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="decor.css" type="text/css">
    <link rel="stylesheet" href="Menu.css">
    <link rel="stylesheet" href="Object.css">
    <script type ="text/javascript" src="tailieu2.js"> </script>
    <script type ="text/javascript" src="script.js"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
    <div id="status2"></div>
    <div id="status1"></div>
    <div id='status'></div>
    <div id='loader'></div>
  </head>
  <body onload="Noff(),OpenWide(),OpenWide1(),OpenWide2()">
   
    <div class="animation-area">
      <ul class="box-area">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>


   

    <div class="sidebar close">
      <div class="logo-details">
        
        <span class="logo_name">Inspire Global</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Tìm kiếm</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Tìm kiếm kho truyện</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-collection' ></i>
              <span class="link_name">Tin tức</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Tin tức mới</a></li>
            <li><a href="#">Top 5 truyện hot nhất</a></li>
            <li><a href="#">Xu hướng đọc truyện</a></li>
            <li><a href="#">Tác giả nổi bật</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-book-alt' ></i>
              <span class="link_name">Posts</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Posts</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Login Form</a></li>
            <li><a href="#">Card Design</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="link_name">Analytics</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Analytics</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">Chart</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Chart</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class='bx bx-plug' ></i>
              <span class="link_name">Plugins</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Plugins</a></li>
            <li><a href="#">UI Face</a></li>
            <li><a href="#">Pigments</a></li>
            <li><a href="#">Box Icons</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-compass' ></i>
            <span class="link_name">Explore</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Explore</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-history'></i>
            <span class="link_name">History</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">History</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="link_name">Setting</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Setting</a></li>
          </ul>
        </li>
        <li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="./Your-Name-Cau-Chuyen-Ve-Phep-Mau-Va-Tinh-Yeu-Ten-Cau-La-Gi.jpg" >
        </div>
        
        
      </div>
    </li>
  </ul>
    </div>
    <section class="home-section">
      
    </section>
    <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
     let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
     arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
    </script>

    
    <div class="slider">
      <div class="slide active">
        <img src="./c3cb71cc686dd64179687dd35d4c28c6-1080x723.jpg" alt="">
        <div class="info">
          <h2>16 BỘ TRUYỆN HOT NHẤT <br> TOP 1 : Thanh xuân</h2>
          <p>Cùng với nhau ta đi mãi cả thanh xuân, và phiêu lưu qua từng bầu trời, nắm tay qua cả gian nan.</p>
        </div>
      </div>
      <div class="slide">
        <img src="./2.jpg" alt="">
        <div class="info">
          <h2>Diệt thần sư</h2>
          <p>Phiêu lưu cùng Aril đến với vùng đất hứa và cùng anh đối đầu với chúa tể hắc ám.</p>
        </div>
      </div>
      <div class="slide">
        <img src="./3.jpg" alt="">
        <div class="info">
          <h2>S.A.O</h2>
          <p>Lạc vào thế giới game cùng Kirito, trong công cuộc biến mình trở thành kẻ sống sót cuối cùng.</p>
        </div>
      </div>
      <div class="slide">
        <img src="./4.jpg" alt="">
        <div class="info">
          <h2>Kirin</h2>
          <p>Ngược về thời gian, nắm tay nhau băng qua mọi thế giới, phiêu lưu qua từng khung cảnh, là Kirin</p>
        </div>
      </div>
      <div class="slide">
        <img src="./5.jpg" alt="">
        <div class="info">
          <h2>Inuyasha</h2>
          <p>Truyền thuyết bạch lang của thời xa xưa Nhật Bản, cùng với những huyền thuyết bí ẩn.</p>
        </div>
      </div>
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div>
    </div>

    <script type="text/javascript">
      const slider = document.querySelector(".slider");
      const nextBtn = document.querySelector(".next-btn");
      const prevBtn = document.querySelector(".prev-btn");
      const slides = document.querySelectorAll(".slide");
      const slideIcons = document.querySelectorAll(".slide-icon");
      const numberOfSlides = slides.length;
      var slideNumber = 0;
  
      //image slider next button
      nextBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });
  
        slideNumber++;
  
        if(slideNumber > (numberOfSlides - 1)){
          slideNumber = 0;
        }
  
        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      });
  
      //image slider previous button
      prevBtn.addEventListener("click", () => {
        slides.forEach((slide) => {
          slide.classList.remove("active");
        });
        slideIcons.forEach((slideIcon) => {
          slideIcon.classList.remove("active");
        });
  
        slideNumber--;
  
        if(slideNumber < 0){
          slideNumber = numberOfSlides - 1;
        }
  
        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
      });
  
      //image slider autoplay
      var playSlider;
  
      var repeater = () => {
        playSlider = setInterval(function(){
          slides.forEach((slide) => {
            slide.classList.remove("active");
          });
          slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active");
          });
  
          slideNumber++;
  
          if(slideNumber > (numberOfSlides - 1)){
            slideNumber = 0;
          }
  
          slides[slideNumber].classList.add("active");
          slideIcons[slideNumber].classList.add("active");
        }, 4000);
      }
      repeater();
  
      //stop the image slider autoplay on mouseover
      slider.addEventListener("mouseover", () => {
        clearInterval(playSlider);
      });
  
      //start the image slider autoplay again on mouseout
      slider.addEventListener("mouseout", () => {
        repeater();
      });
      </script>
   
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script >
  //<![CDATA[
  $(window).bind("load", function() {
      jQuery("#status2").fadeOut(1000);
      jQuery("#status1").fadeOut(1000);
      jQuery("#status").fadeOut(1000);
      jQuery("#loader").fadeOut(1000);
     
  });
  //]]>
</script>

<div id="obj1"></div>
<div id="obj2"></div>
<div id="obj3"></div>
<div id="obj4"></div>
<div id="obj5"></div>

<div id="cup"></div>

<a href="#">
  <input type="submit" value="Top 5-8" id="Rank" >
  
  </a>
  <a href="#">
    <input type="submit" value="Top 9-12" id="Rank1" >
    
    </a>
  <a href="#">
    <input type="submit" value="Top 13-16" id="Rank2" >
      
    </a>

 <div id="logo00"></div>
 <a href="#">
 <div id="hash"></div>
 </a>
 <div id="hash1"></div>
 <div id="hash2"></div>
 <div id="hash3"></div>

 <div id="hash4"></div>
 <div id="hash5"></div>
 <div id="hash6"></div>
<div id="nof-board"></div>
 <div id="box">
   <div  id="notifications">
    <i class="fas fa-bell"></i>
    <span  id="num">4</span>
   </div>
 </div>

 <a href="logout.php">
     <input type="submit" value="Đăng xuất" id="D001" >
   </a>


  </body>
</html>
      
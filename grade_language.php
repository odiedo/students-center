<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- To be removed CSS File -->
    <!-- Custom styles for this template-->
    <link href="../../../../hostels/hostel/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../hostels/hostel/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <title>NG-CDF Teso North</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="../assets/jquery/jquery-3.3.1.min.js"></script>
  <style>
    input {
      background: transparent;
      border: 1px solid;
      height: 30px;
      border-radius: 10px;
      padding: 4px;
      width: 60%;
      color: white;
      box-shadow: inset 1px 1px 1px red, inset -1px -1px 1px blueviolet;
    }
    .links {
        text-shadow: 0px 0px 2px white, 0px 0px 4px blueviolet;
        box-shadow: 0px 1px 1px 0 gray;
        width: 100%;
        background: rgba(0, 0, 0, 0.2);
    }
    .links:hover {
      cursor: pointer;
      text-decoration: none;  
      text-shadow: 0px 0px 10px red;        
    }
    .card-body{
      background-color: rgba(0, 0, 0, 0.6); font-size: 12px;
    }
  .card-body a {
    cursor: pointer;
    color: white;
    text-decoration: none;
  }
  .sidenav {
    width: 30px;
    position: fixed;
    z-index: 1;
    top: 50%;
    left: 0px;
    border: 1px solid blueviolet;
    background: rgba(0, 0, 0, 0.8);
    overflow-x: hidden;
    padding: 1px 0;
  }

  .sidenav a {
    padding: 3px 0px 6px 1px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    text-shadow:  1px 1px 0px blueviolet;
    display: block;
  }

  .sidenav a:hover {
      color: blueviolet;
    text-shadow:  1px 1px 0px white;
  }

  .main {
    margin-left: 10px; 
    font-size: 28px;
    padding: 0px 10px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  </style>
</head>
<body style="background-color: #012;">
<div class="sidenav border-left-0">
  <a href="#" class="fa fa-reply" onclick="window.history.back();"></a>
  <a href="chatroom.php" class="fa fa-commenting-o"></a>
  <a href="past_papers.php" class="fa fa-cloud-download"></a>
  <a href="blogs.php" class="fa fa-file"></a>
  <a href="challenge.php" class="fa fa-superscript"></a>
  <a href="index.php" class="fa fa-home"></a>
</div>
    <div class="container"  style="margin: 18px auto;">
      <div class="row">
        <div class="col-md-4">
          <div class="card w-100 mb-2 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <center><span class="text-light links font-weight-bold"> 101: Introduction to Linguistics</span></center>
              <p class="text-left text-light">
                <img src="assets/img/21.jpg" load="lazy" class="p-1 border-dark" style="height: 40px; border: 1px solid; width: 40px; border-radius: 50%"><span class="font-weight-bold text-success"> Odiedo</span><i class="fa fa-archive text-danger pt-3 float-right"></i> <br>
                <span style="font-size: 11px; font-family: fantasy;" class=" text-light">
                <b>Recommendation(s):</b> Ok this is of course a trial, but for a moment, imagine how many students will be helped through this platform.</span>
              </p>
              <iframe width="100%" height="auto" load="lazy" src="https://www.youtube.com/embed/-xvqoVJNyms?controls=0&amp;clip=Ugkxd9Svl1EyUGsnxA1uTZlWjisexwe9YRba&amp;clipt=EIi_ARjBkgM" title="Languages" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="box-shadow: 0px 1px 3px 0px blueviolet; border: 1px solid red; border-radius: 18px;" allowfullscreen=""></iframe>
              <p class="text-center"><span id="likes">23</span><i class="fa fa-heart-o pr-2" id="like" onclick="document.getElementById('like').style.color='red'; document.getElementById('likes')."></i>
                21<i class="fa fa-commenting-o text-success pr-2"></i>
                14<i class="fa fa-share text-light pr-2"></i>
                15<i class="fa fa-envelope-o text-warning pr-2"></i>
                <i class="fa text-light" id="dt">23 Jan 2023</i>
              </p>
              <div class="col-auto p-2 container" style="background-color: rgba(0, 0, 0, .3); border-radius: 12px; width: 100%; height: 50px;">
                <button class="btn fa fa-eye text-light"></button>
                <input type="text" name="comment" placeholder="Comment Here..." class="p-1">
                <button class="btn fa fa-paper-plane text-light"></button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card w-100 mb-2 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <center><span class="links font-weight-bold text-uppercase"> 102: Introduction to Linguistics</span></center>
              <p class="text-left text-light">
                <img src="assets/img/22.jpg" load="lazy" class="p-1 border-dark" style="height: 40px; border: 1px solid; width: 40px; border-radius: 50%"><span class="font-weight-bold text-danger"> Mr. Robot</span><br>
                <span style="font-size: 11px;" class="">
                <b>Recommendation(s):</b> Ok this is of course a trial, but for a moment, imagine how many students will be helped through this platform.</span>
              </p>
              <iframe width="100%" height="auto" src="https://www.youtube.com/embed/-xvqoVJNyms?controls=0&amp;clip=Ugkxd9Svl1EyUGsnxA1uTZlWjisexwe9YRba&amp;clipt=EIi_ARjBkgM" load="lazy" title="Languages" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="box-shadow: 0px 1px 3px 0px blueviolet; border: 1px solid red; border-radius: 18px;" allowfullscreen=""></iframe>
              <p class="text-center"><i class="fa fa-heart-o text-danger pr-2">400</i>
                <i class="fa fa-commenting-o text-success pr-2">21</i>
                <i class="fa fa-share text-light pr-2">12</i>
                <i class="fa fa-envelope-o text-warning pr-2">15</i>
                <i class="fa text-light" id="dt">23 Jan 2023</i>
              </p>
              <div class="col-auto p-2 container" style="background-color: rgba(0, 0, 0, .3); border-radius: 12px; width: 100%; height: 50px;">
                <button class="btn fa fa-eye text-light"></button>
                <input type="text" name="comment" placeholder="Comment Here..." class="p-1">
                <button class="btn fa fa-paper-plane text-light"></button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card w-100 mb-2 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <center><span class="text-light links font-weight-bold"> 103: Feast Dark Moment</span></center>
              <p class="text-left text-light">
                <img src="assets/img/23.jpg" load="lazy" class="p-1 border-dark" style="height: 40px; border: 1px solid; width: 40px; border-radius: 50%"><span class="font-weight-bold text-warning"> Jane Doe</span><br>
                <span style="font-size: 11px;" class="">
                <b>Recommendation(s):</b> Ok this is of course a trial, but for a moment, imagine how many students will be helped through this platform.</span>
              </p>
              <iframe width="100%" height="auto" load="lazy" src="https://www.youtube.com/embed/-xvqoVJNyms?controls=0&amp;clip=Ugkxd9Svl1EyUGsnxA1uTZlWjisexwe9YRba&amp;clipt=EIi_ARjBkgM" title="Languages" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="box-shadow: 0px 1px 3px 0px blueviolet; border: 1px solid red; border-radius: 18px;" allowfullscreen=""></iframe>
              <p class="text-center"><i class="fa fa-heart-o text-danger pr-2">400</i>
                <i class="fa fa-commenting-o text-success pr-2">21</i>
                <i class="fa fa-share text-light pr-2">12</i>
                <i class="fa fa-envelope-o text-warning pr-2">15</i>
                <i class="fa text-light" id="dt">23 Jan 2023</i>
              </p>
              <div class="col-auto p-2 container" style="background-color: rgba(0, 0, 0, .3); border-radius: 12px; width: 100%; height: 50px;">
                <button class="btn fa fa-eye text-light"></button>
                <input type="text" name="comment" placeholder="Comment Here..." class="p-1">
                <button class="btn fa fa-paper-plane text-light"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="card w-100 mb-2 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <center><span class="text-light links font-weight-bold"> 104: Example of Application Letter</span></center>
              <p class="text-left text-light">
                <img src="assets/img/24.jpg" load="lazy" class="p-1 border-dark" style="height: 40px; border: 1px solid; width: 40px; border-radius: 50%"><span class="font-weight-bold text-warning"> Jane Doe</span><br>
                <p style="font-size: 11px;" class="text-right">
                  Odiedo Paul,<br>
                  P.O BOX 98, <br>
                  Kamuriai.<br><br>
                  <u>23 Jan 2023.</u>
                </p>
                <span>Dear Sir/Madam,</span>
                <p>
                  <center><span class="text-center font-weight-bold text-uppercase">RE:<u>Application for a job</u> </span></center><br>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. <br>Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </p>
              <p class="text-center"><i class="fa fa-heart-o text-danger pr-2">400</i>
                <i class="fa fa-commenting-o text-success pr-2">21</i>
                <i class="fa fa-share text-light pr-2">12</i>
                <i class="fa fa-envelope-o text-warning pr-2">15</i>
                <i class="fa text-light" id="dt">23 Jan 2023</i>
              </p>
              <div class="col-auto p-2 container" style="background-color: rgba(0, 0, 0, .3); border-radius: 12px; width: 100%; height: 50px;">
                <button class="btn fa fa-eye text-light"></button>
                <input type="text" name="comment" placeholder="Comment Here..." class="p-1">
                <button class="btn fa fa-paper-plane text-light"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

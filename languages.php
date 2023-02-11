<!DOCTYPE html>
<html>
<head>
  <title>Students Center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/jquery/jquery-3.3.1.min.js"></script>
  <style>
    fieldset {
      background: rgba(0, 0, 0, 0.5);
      border-radius: 21px;
      box-shadow: 0px 1px 3px 0px blueviolet; 
      border: 1px solid red;
    }
    legend {
      text-shadow: 0px 0px 3px white, 0px 0px 4px blueviolet;
      border-radius: 13px;
      border: 0.1px solid red; 
      box-shadow: 0px 1px 3px 0px blueviolet;
      background-color: rgba(0, 0, 0, 1.0);
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
      background-color: rgba(0, 0, 0, 0.6); font-size: 14px;
    }
  .card-body a {
    cursor: pointer;
    color: blue;
    text-decoration: none;
  }
  .card-body a:hover {
    cursor: pointer;
    color: orange;
    text-decoration: none;
    font-size: 16px;
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
<div class="container">
<div class="sidenav border-left-0">
  <a href="#" class="fa fa-reply" onclick="window.history.back();"></a>
  <a href="chatroom.php" class="fa fa-commenting-o"></a>
  <a href="past_papers.php" class="fa fa-cloud-download"></a>
  <a href="blogs.php" class="fa fa-file"></a>
  <a href="challenge.php" class="fa fa-superscript"></a>
  <a href="index.php" class="fa fa-home"></a>
</div>
    <div class="" style="margin: 30px auto;">
      <div class="row">
        <div class="col-md-12">
          <fieldset class="p-2 border-right-0 border-top-0 border-bottom-0">
            <legend class="p-3 text-center breadcrumbs h6 text-uppercase text-light">Resources</legend>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <i class="fa text-light font-weight-bold">Please Select your Class then the topic you want:</i>
                  <div class="card w-100 mb-2 bg-transparent" style="font-size: 12px;">
                    <div class="card-header links" id="quizHeader">
                      <span class="text-light font-weight-bold float-left">Grade 4</span>
                      <i class="fa fa-angle-down h3 font-weight-bold text-light float-right"></i>
                    </div>
                    <div class="card-body" id="quizDetails">
                      <a href="grade_language.php">Nouns</a><br>
                      <a href="grade_language.php">Verbs</a><br>
                      <a href="grade_language.php">Pronouns</a>
                    </div>
                  </div>
                  <div class="card bg-transparent w-100 mb-2" style="font-size: 12px;">
                    <div class="card-header links" id="quizHeader1">
                      <span class="text-light font-weight-bold float-left">Grade 5</span>
                      <i class="fa fa-angle-down h3 font-weight-bold text-light float-right"></i>
                    </div>
                    <div class="card-body text-light" id="quizDetails1">
                      <a href="grade_language.php">Nouns</a><br>
                      <a href="grade_language.php">Verbs</a><br>
                      <a href="grade_language.php">Pronouns</a>
                    </div>
                  </div>
                  <div class="card w-100 mb-2 bg-transparent" style="font-size: 12px;">
                    <div class="card-header links" id="quizHeader2">
                      <span class="text-light font-weight-bold float-left">Grade 6</span>
                      <i class="fa fa-angle-down h3 font-weight-bold text-light float-right"></i>
                    </div>
                    <div class="card-body text-light" id="quizDetails2">
                      <a href="grade_language.php">Nouns</a><br>
                      <a href="grade_language.php">Verbs</a><br>
                      <a href="grade_language.php">Pronouns</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                <hr class="bg-success">
                <div class="card py-2 mb-3" style="box-shadow: 0px 1px 2px 0px white; background: rgba(0, 0, 0, 0.3);">
                  <div class="col-auto">
                    <center><span class="text-uppercase text-success text-center fa fa-pagelines" style="font-size: 16px;"> Inspiration</span></center> <br>
                    <p class="font-weight-bold text-light text-uppercase" style="font-size: 12px; font-family:monospace;">
                      <iframe width="100%" height="auto" src="https://www.youtube.com/embed/-xvqoVJNyms?controls=0&amp;clip=Ugkxd9Svl1EyUGsnxA1uTZlWjisexwe9YRba&amp;clipt=EIi_ARjBkgM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="box-shadow: 0px 1px 3px 0px blueviolet; border: 1px solid red; border-radius: 18px;" allowfullscreen=""></iframe>
                    </p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
        </div>
      </div>
    </div>
  </div>


<script>
$(document).ready(function(){
  $("#quizDetails").hide();
  $("#quizHeader").click(function(){
    $("#quizDetails").toggle(10);
  });
  $("#quizDetails1").hide();
  $("#quizHeader1").click(function(){
    $("#quizDetails1").toggle(10);
  });
  $("#quizDetails2").hide();
  $("#quizHeader2").click(function(){
    $("#quizDetails2").toggle(10);
  });
});
</script>
</body>
</html>

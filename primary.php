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
    .links {
        text-shadow: 0px 0px 10px green, 0px 0px 14px yellow, 0px 0px 16px orange;
        align-items: center;
        box-shadow: 0px 0px 1px 0px white, 0px 0px 2px yellow, 0px 0px 3px orange;
        width: 150px;
        height: 100px;
        text-outlne: red;
        margin-bottom: 0px;
        background: rgba(0, 0, 0, 0.6);
    }
    .links:hover {
    	cursor: pointer;
    	text-decoration: none;	
    	text-shadow: 0px 0px 10px red;        
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
		<div class="navbar fixed-top" style="background-color: #000;">
			<div class="section-title pt-2">
				<h2 class="text-success"><i class="fa fa-book"></i> Primary Sch.</h2>
			</div>
		</div>

	<div class="sidenav border-left-0">
	  <a href="#" class="fa fa-reply" onclick="window.history.back();"></a>
	  <a href="chatroom.php" class="fa fa-commenting-o"></a>
	  <a href="past_papers.php" class="fa fa-cloud-download"></a>
	  <a href="blogs.php" class="fa fa-file"></a>
	  <a href="challenge.php" class="fa fa-superscript"></a>
	  <a href="index.php" class="fa fa-home"></a>
	</div>
		<div class="" style="margin: 60px auto;">
			<div class="row">
				<div class="col-md-9">
					<fieldset style="box-shadow: 0px 2px 3px 0px blueviolet, 0px 3px 5px 0px red; background: rgba(0, 0, 0, .5);" class="p-2 border-right-0 border-top-0 border-bottom-0">
						<legend class="p-2 text-center breadcrumbs h6 text-uppercase text-light" style="background-color: rgba(21, 0, 0, 0.5); border: 1px solid white; text-shadow: 0px 0px 10px yellow;, 0px 0px 14px orange, 0px 0px 16px red;">Available Subjects For Revision</legend>
						<div class="container">
							<div class="row">
								<div onclick="window.location.href='languages.php';" class="card col-3 links justify-content-center m-2" id="card" style="width: 100%;">
									<span class="text-center" style="font-size: 14px; font-weight: bolder; font-family: cursive; color: white;">Languages</span>
								</div>
									<div onclick="window.location.href='secondary.php';" class="card col-3 links justify-content-center m-2" id="card" style="width: 100%;">
									<span class="text-center" style="font-size: 14px; font-weight: bolder; font-family: cursive; color: white;"> Science & Technology</span>
								</div>
									<div onclick="window.location.href='primary.php';" class="card col-3 links justify-content-center m-2" id="card" style="width: 100%;">
									<span class=" text-center" style="font-size: 14px; font-weight: bolder; font-family: cursive; color: white;"> Maths</span>
								</div>
							</div>
							<div class="row">
								<div onclick="window.location.href='primary.php';" class="card col-3 links justify-content-center m-2" id="card" style="width: 100%;">
									<span class="text-center" style="font-size: 14px; font-weight: bolder; font-family: cursive; color: white;"> Religious Education</span>
								</div>
								<div onclick="window.location.href='primary.php';" class="card col-3 links justify-content-center m-2" id="card" style="width: 100%;">
									<span class="text-center" style="font-size: 14px; font-weight: bolder; font-family: cursive; color: white;"> Art & Design</span>
								</div>
								<div onclick="window.location.href='primary.php';" class="card col-3 links justify-content-center m-2" id="card" style="width: 100%;">
									<span class="text-center" style="font-size: 14px; font-weight: bolder; font-family: cursive; color: white;"> Social Science</span>
								</div>
							</div>
						</div>
					</fieldset>
					</div>
				<div class="col-md-3">
					<hr class="bg-danger">
					<div class="breadcrumbs pl-3 text-light">
						<h5 class="fa fa-bullhorn font-weight-bold text-uppercase"> Discussion Groups</h5>
					</div>
					<div class="card py-2 mb-2" style="box-shadow: 0px 1px 2px 0px white; background: rgba(0, 0, 0, 0.7);">
						<div class="col-auto">
							<center><span class="text-uppercase font-weight-bold text-success text-center">Grade 3 - 4:</span></center> <br>
							<p class="font-weight-bold text-light text-uppercase" style="font-size: 12px; font-family:monospace;">
									Questions: <i class="fa fa-envelope text-danger float-right"><sup style="font-size: 10px">24</sup></i><br>
									Discussions: <i class="fa fa-comments text-success float-right"><sup style="font-size: 10px">34</sup></i><br>
									Certified Answers: <i class="fa fa-certificate text-warning float-right"><sup style="font-size: 10px">10</sup></i><br>
							</p>
								<button onclick="window.location.href='grade34.php?grade3and4_discussions';" style="font-family: monospace; font-size: 12px" class="btn btn-success bg-transparent text-success float-right w-100"> <i class="fa fa-arrow-right"></i> GO</button>
						</div>
					</div>
					<div class="card py-2 mt-2" style="box-shadow: 0px 1px 2px 0px white; background: rgba(0, 0, 0, 0.6);">
						<div class="col-auto">
							<center><span class="text-uppercase font-weight-bold text-warning text-center">Grade 5 - 6:</span></center> <br>
							<p class="font-weight-bold text-light text-uppercase" style="font-size: 12px; font-family:monospace;">
									Questions: <i class="fa fa-envelope text-danger float-right"><sup style="font-size: 10px">44</sup></i><br>
									Discussions: <i class="fa fa-comments text-success float-right"><sup style="font-size: 10px">134</sup></i><br>
									Certified Answers: <i class="fa fa-certificate text-warning float-right"><sup style="font-size: 10px">102</sup></i><br>
							</p>
								<button onclick="window.location.href='grade34.php?grade3and4_discussions';" style="font-family: monospace; font-size: 12px" class="btn btn-warning bg-transparent text-warning float-right w-100"> <i class="fa fa-arrow-right"></i> GO</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="main.js"></script>
</body>
</html>
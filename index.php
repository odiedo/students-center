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
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red")
      .slideUp(2000)
      .slideDown(1000);
  });
});
</script>
<style>
    .links {
        text-shadow: 0px 0px 10px green, 0px 0px 14px yellow, 0px 0px 16px orange;
        align-items: center;
        border: 1px solid green;
        border-radius: 50%;
        width: 130px;
        height: 130px;
        margin-bottom: 0px;
        background: rgba(0, 0, 0, 0.6);
    }
    .links:hover {
    	text-decoration: none;	
    	text-shadow: 0px 0px 10px red;        
    }
    .student:hover {
    	cursor: pointer;
    }


#hero {
  width: 100%;
  height: 80vh;
  background: url("assets/img/hero.jpg") top center;
  background-size: cover;
  position: relative;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.4);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  padding-top: 72px;
}

@media (max-width: 992px) {
  #hero .container {
    padding-top: 62px;
  }
}

#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#hero h2 {
  color: #eee;
  margin: 10px 0 0 0;
  font-size: 24px;
}

#hero .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 35px;
  border-radius: 50px;
  transition: 0.5s;
  margin-top: 30px;
  border: 2px solid #fff;
  color: #fff;
}

#hero .btn-get-started:hover {
  background: #5fcf80;
  border: 2px solid #5fcf80;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero {
    height: 100vh;
  }

  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}
</style>
</head>
<body style="background-color: #012;">
		<!-- Banner  -->
		<section id="hero" class="d-flex justify-content-center align-items-center">
			<div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
		    	<h1>Teso County<br> Students Center</h1>
		      	<h2>Maendeleo Kwa Wote </h2>
		    	<a href="#index.php?get_started=bursary" class="btn-get-started">Get Started</a>
		    </div>
		</section>
		<!-- End Banner -->
	<div class="container">
		<div class="navbar fixed-top" style="background-color: #000;">
			<div class="section-title pt-2">
				<h2 class="text-success"><i class="fa fa-book"></i> Students Center</h2>
			</div>
		</div>
		<div class="" style="margin: 20px auto;">
			<div class="row">
				<div class="col-md-4">
					<div class="container m-2">
						<div class="row">
							<a href="primary.php" class="card col-5 links justify-content-center m-2">
								<span class="p-4 text-center" style="font-size: 20px; font-weight: bolder; font-family: cursive; color: white;"> Primary School</span>
							</a>
							<a href="#secondary.php" class="card col-5 links justify-content-center m-2">
								<span class="p-4 text-center" style="font-size: 20px; font-weight: bolder; font-family: cursive; color: white;"> High School</span>
							</a>
						</div>
						<div class="row">
							<a href="#college.php" class="card col-5 links justify-content-center m-2">
								<span class="p-4 text-center" style="font-size: 20px; font-weight: bolder; font-family: cursive; color: white;"> College</span>
							</a>
							<a href="#university.php" class="card col-5 links justify-content-center m-2">
								<span class="p-4 text-center" style="font-size: 20px; font-weight: bolder; font-family: cursive; color: white;"> University</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<hr class="bg-light">
					<div class="breadcrumbs pl-3 pr-3 text-light">
						<h5 class="fa fa-bullhorn text-warning font-weight-bold text-uppercase"> Notice Board</h5><i id="notification" onclick="document.getElementById('notification').style.color='red'" title="Alert me" class="fa fa-bell-o student float-right"></i>
					</div>
					<div class="card py-2" style="box-shadow: 0px 1px 2px 0px orange; background: rgba(0, 0, 0, 0.6);">
						<div class="col-auto">
							<p class="text-light" style="font-size: 12px; font-family:monospace;">By <span class="text-uppercase font-weight-bold text-success">Odiedo Paul</span>. <br> On <b>29-01-2023</b>, all students in Maseno to have a zoom meeeting using the link below. Kindly attend.<br>
								<a href="#"  style="font-family: monospace;"> <i class="fa fa-share"></i> https://www.students.com/xalsa?asjhx_aosa</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">

				</div>
			</div>
		</div>
	</div>	
</body>
</html>
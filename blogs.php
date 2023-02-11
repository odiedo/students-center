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


    input {
      background: transparent;
      border: 1px solid;
      height: 30px;
      border-radius: 10px;
      padding: 4px;
      color: white;
      box-shadow: inset 1px 1px 1px red, inset -1px -1px 1px blueviolet;
    }
    .links {
        text-shadow: 0px 0px 2px white, 0px 0px 4px blueviolet;
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
    .cardm:hover {
    box-shadow: 0px 1px 4px 0px red,  0px 1px 6px 0px blueviolet;
    border-radius: 21px;
  }
  .cardm img:hover {
    transform: scale(1.1);
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



.events .card {
  border: 0;
  background: transparent;
  padding: 0 30px;
  margin-bottom: 10px;
  position: relative;
}

.events .card-img {
  width: calc(100% + 60px);
  margin-left: -30px;
  overflow: hidden;
  z-index: 9;
  border-radius: 0;
}

.events .card-img img {
  max-width: 100%;
  width: 100%;
  height: 300px;
  transition: all 0.3s ease-in-out;
}

.events .card-body {
  z-index: 10;
  background: rgba(0, 0, 0, .6);
  border-top: 4px solid #fff;
  padding: 10px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  margin-top: -60px;
  transition: 0.3s;
}

.events .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 20px;
}

.events .card-title a {
  color: #fff;
  transition: 0.3s;
}

.events .card-text {
  color: sandybrown;
}

.events .read-more a {
  color: #777777;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.3s;
}

.events .read-more a:hover {
  color: #5fcf80;
}

.events .card:hover img {
  transform: scale(1.1);
}

.events .card:hover .card-body {
  border-color: #5fcf80;
}

.events .card:hover .card-body .card-title a {
  color: #5fcf80;
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
    <div class="navbar fixed-top" style="background-color: #000;">
      <div class="Search col-auto">
        <span class="text-light col-6"><i class="fa fa-smile-o text-light"></i> Blogs</span>
        <input id="myInput" type="text" name="search" placeholder="&#xf002; Search..." class="col-6 w-100 text-light bg-transparent border-top-0 border-left-0 border-right-0 border-light">
      </div>
    </div>

    <div class="container" id="myText" style="margin: 60px auto;">
      <div class="row">
          <div class="col-md-8 events">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/1.jpg" load="lazy" alt="blog_pic">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Blogs </a></h5>
                <p class="fst-italic text-center text-light">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text">Create, Edit, Publish your blog <a href="create_blog.php"> here!</a> Students with the best blog will be awarded big. Share your blogs with your friends and get more gifts.</p>
              </div>
            </div>
        </div>  
        <div class="col-md-4">
          <div class="card w-100 mb-3 bg-transparent border-0">
            <div class="card-body text-light" style="border-radius: 21px;box-shadow: 0px 1px 4px 0px red,  0px 1px 6px 0px blueviolet;">
              <p class="text-left text-light">
                <center><label class="text-light font-weight-bold"><i class="fa fa-windows"></i> Select Topic:</label>
                <select name="type" class="form-control" id="type">
                  <option value=" " selected>--- show all ---</option>
                  <option value="culture">Culture</option>
                  <option value="short stories">Short stories</option>
                  <option value="politics">Politics</option>
                  <option value="science">Science</option>
                  <option value="echnology">Technology</option>
                </select></center> 
                <br>
                <p>
                  <span>#TopBlogs:</span>
                  <p class="pl-3">
                    <i class="fa fa-tencent-weibo"></i> <a href="#single_blog" class="text-info">The Roots of Teso </a> <i class="fa fa-thumbs-up text-warning float-right"> 21</i><br>
                    <i class="fa fa-tencent-weibo"></i> <a href="#single_blog" class="text-info">Innovating To Zero </a><i class="fa fa-thumbs-up text-warning float-right"> 40</i><br>
                    <i class="fa fa-tencent-weibo"></i> <a href="#single_blog" class="text-info">The River and The Source </a><i class="fa fa-thumbs-up text-warning float-right"> 12</i> 
                  </p>
                </p>
              </p>
            </div>
          </div>          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card cardm w-100 mb-3 border-0 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">Taste of Power</span> <i>~ Mr. Robot</i></center> <br>
                <center><img src="assets/img/21.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>Management</center>  
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light">
                Leadership comes from God they say, so is power. How do people behave differently when they taste power over everybody. Abort the mission from the saudi <a href="single_blog.php?taste_of_power" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 1</i>
                <i class="fa fa-commenting-o text-success p-2"> 3</i>
              </p>
              <i class="fa text-light float-right">2 weeks ago</i>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <div class="card w-100 cardm mb-3 border-0 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">Tales of Two cities</span> <i>~ Wanani Clement</i></center> <br>
                <center><img src="assets/img/22.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>Politics</center>
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light">
                A city is said to be located at the center of a country. The government will channel all its resources to ensure that business within the city operates successfully<a href="single_blog.php?tales_of_two_cities" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 9</i>
                <i class="fa fa-commenting-o text-success p-2"> 12</i>
              </p>
              <i class="fa text-light float-right">1 year ago</i>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <div class="card w-100 mb-3 border-0 cardm bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px; box-shadow: ">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">The River and The Source</span> <i>~ Margaret Ogola</i></center> <br>
                <center><img src="assets/img/23.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>Set book </center>
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light justify-content-center">
                In the smoky hat of Aketch, the second wife to the Great Chief Odero Gogni, a  bay was born <a href="single_blog.php?the_river_and_the_source" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 9</i>
                <i class="fa fa-commenting-o text-success p-2"> 12</i>
              </p>
              <i class="fa text-light float-right">1 year ago</i>
            </div>
          </div>          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card cardm w-100 border-0 mb-3 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">Innovating To Zero</span> <i>~ James Odesa</i></center> <br>
                <center><img src="assets/img/24.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>Technology</center>
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light">
                In the past few decades, there has been a drastic climate change. Most may ask, how is that so and yet there are trees everywhere! Global warming <a href="single_blog.php?taste_of_power" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 1</i>
                <i class="fa fa-commenting-o text-success p-2"> 3</i>
              </p>
              <i class="fa text-light float-right">2 weeks ago</i>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <div class="card w-100 cardm border-0 mb-3 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px;">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">100 Eco-cities in the world</span> <i>~ Odiedo Paul</i></center> <br>
                <center><img src="assets/img/1.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>Science</center>
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light">
                Due to climate change experienced recently, US governemnt together with other countries all over the world decided to build a green city, a city that emits zero carbon <a href="single_blog.php?tales_of_two_cities" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 9</i>
                <i class="fa fa-commenting-o text-success p-2"> 12</i>
              </p>
              <i class="fa text-light float-right">1 year ago</i>
            </div>
          </div>          
        </div>
        <div class="col-md-4">
          <div class="card w-100 mb-3 cardm border-0 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px; box-shadow: ">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">The roots of Teso</span> <i>~ emuria</i></center> <br>
                <center><img src="assets/img/message.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>short stories </center>
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light justify-content-center">
                In the smoky hat of Aketch, the second wife to the Great Chief Odero Gogni, a  bay was born <a href="single_blog.php?the_river_and_the_source" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 9</i>
                <i class="fa fa-commenting-o text-success p-2"> 12</i>
              </p>
              <i class="fa text-light float-right">1 year ago</i>
            </div>
          </div>          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card w-100 mb-3 cardm border-0 bg-transparent">
            <div class="card-body text-light" style="border-radius: 21px; box-shadow: ">
              <p class="text-left text-light">
                <center><span class="text-light links font-weight-bold">The Origin of 'Emuria Koliae'</span> <i>~ emuria</i></center> <br>
                <center><img src="assets/img/1.jpg" load="lazy" style="width: 50%; height: 80px; box-shadow: 0px 1px 2px 0px blueviolet; border-radius: 12px;"><br>Culture</center>
                <span style="font-size: 16px; font-family: cursive;" class="font-weight-bold text-light justify-content-center">
                In the smoky hat of Aketch, the second wife to the Great Chief Odero Gogni, a  bay was born <a href="single_blog.php?the_river_and_the_source" class="text-info"> readmore...</a>
                </span>
              </p>
              <p class="text-center float-left">
                <i class="fa fa-thumbs-up text-danger"> 9</i>
                <i class="fa fa-commenting-o text-success p-2"> 12</i>
              </p>
              <i class="fa text-light float-right" on>1 year ago</i>
            </div>
          </div>          
        </div> 
      </div>
    </div>

  <script>
    $(document).ready(function(){
      $("#type").on("change", function() {
        var value = $(this).val().toLowerCase();
        $("#myText div").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>


  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myText div").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>

</body>
</html>

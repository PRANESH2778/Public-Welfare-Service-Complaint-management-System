<!DOCTYPE html>
<html>
<head>
	<title>about page</title>
    <style>
        #about {
   
  padding: 60px 0 40px 0;
  position: relative;
}

#about::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: lightgrey;
  z-index: 9;
}

#about .container {
  position: relative;
  z-index: 10;
}

#about .about-col {
  background: #fff;
  border-radius: 0 0 4px 4px;
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  margin-bottom: 20px;
}

#about .about-col .img {
  position: relative;
}

#about .about-col .img img {
  border-radius: 4px 4px 0 0;
}

#about .about-col .icon {
  width: 64px;
  height: 64px;
  padding-top: 8px;
  text-align: center;
  position: absolute;
  background-color: #3C5A99;
  border-radius: 50%;
  text-align: center;
  border: 4px solid #fff;
  left: calc( 50% - 32px);
  bottom: -30px;
  transition: 0.3s;
}

#about .about-col i {
  font-size: 36px;
  line-height: 1;
  color: #fff;
  transition: 0.3s;
}

#about .about-col:hover .icon {
  background-color: #fff;
}

#about .about-col:hover i {
  color: #3C5A99;
}

#about .about-col h2 {
  color: #000;
  text-align: center;
  font-weight: 700;
  font-size: 20px;
  padding: 0;
  margin: 40px 0 12px 0;
}

#about .about-col h2 a {
  color: #000;
}

#about .about-col h2 a:hover {
  color: #3C5A99;
}

#about .about-col p {
  font-size: 14px;
  line-height: 24px;
  color: #333;
  margin-bottom: 0;
  padding: 0 20px 20px 20px;
}


#call-to-action {
  background: linear-gradient(rgba(21, 86, 112, 0.1), rgba(0, 0, 0, 0.1)), url(../img/call-to-action\ image.webp) fixed center center;
  background-size: cover;
  padding: 60px 0;
}

#call-to-action h3 {
  color: yellow;
  font-size: 28px;
  font-weight: 700;
}

#call-to-action p {
  color: yellow;
}

#call-to-action .cta-btn {
  font-family: "Montserrat", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #000;
  color: #000;
}
#call-to-action .cta-btn:hover {
  background: #3C5A99;
  border: 2px solid #3C5A99;
}
    </style>
</head>
<body>
	<div id="invoice_no_list_div">
    <?php
    include("mainpage.php");
    ?>
  	</div>
    <section id="about">
      <div class="container">

        <header class="section-header text-center mb-5 pb-2">
          <h3>About Us</h3>
          <p>We are Pwscms! A team of designers and developers in velalar college of engineering and technology. Pwscms is the first product released by our team. As Mark Victor Hansen said "By recording your dreams and goals, you set in motion the process of becoming the person you most want to be..." 

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.webp" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p class="text-center">
                To utilize the power of technology in setting and reaching goals...
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.webp" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p class="text-center">
               We Plan to integrate Artificial Intelligence to hitting your set targets.
              </p>
            </div>
          </div>
          
          
 <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.webp" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p class="text-center">
                To see you achieve more success in reaching more of your goals with Iris Goal Tracker.               
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

</body>
</html>
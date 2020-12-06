
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Career Assistance Programme</title>
    <link rel="stylesheet" href="css/acap.css">
    <link rel="stylesheet" href="css/SAMP_mobile_style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- form submissiom -->
<script>
$(function () {

$('#form1').on('submit', function (e) {

  e.preventDefault();

  $.ajax({
    type: 'post',
    url: 'acap-rega.php',
    data: $('#form1').serialize(),
    success: function (response) {
    /* if(response== 0 )
     {
      swal({
        title: "WRONG CAPTCHA!",
        text: "Please re-enter the captcha!",
        icon: "error",
        buttons: true,
        dangerMode: true,
      }).then((value) => {
      });
    }*/
   
    if(response==0)
    {
      swal({
        title: "INCOMPLETE DETAILS!",
        text: "Please fill all the details!",
        icon: "error",
        buttons: true,
        dangerMode: true,
      }).then((value) => {

      });
    }
    else if(response== 2 )
    {
     swal({
      title: "REGISTRATED!",
      text: "Registration successful!",
      icon: "success",
      buttons: true,
      dangerMode: true,
    }).then((value) => {
      window.location="ACAP.php";

    });
//alert(response);
}
else
{
alert(response);
}
}
});

});

});
</script> 





<script type="text/javascript">
$(function () {

$('#form2').on('submit', function (e) {

  e.preventDefault();

  $.ajax({
    type: 'post',
    url: 'acapregtu.php',
    data: $('#form2').serialize(),
    success: function (response) {
    if(response== 0 )
    {
      swal({
        title: "INCOMPLETE DETAILS!",
        text: "Please fill all the details!",
        icon: "error",
        buttons: true,
        dangerMode: true,
      }).then((value) => {

      });
    }
    else if(response== 2 )
    {
     swal({
      title: "REGISTERED!",
      text: "Registration successful!",
      icon: "success",
      buttons: true,
      dangerMode: true,
    }).then((value) => {
      window.location="ACAP.php";

    });
//alert(response);
}
else
{
alert(response);
}
}
});

});

});
</script> 
<style>

    .btn-outline-primary:hover, .btn-outline-primary:active, .btn-outline-primary:visited {
        background-color: #00416d !important;
        border-color: #00416d !important;
        color:white !important;
    }
    .btn-outline-primary{
        color:  #00416d !important;
        border-color:  #00416d !important;
    }
    .btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
        background-color: #00416d !important;
        border-color: #00416d !important;
        color:white !important;
    }
    @media only screen and (max-width: 768px) {
    .panel img{
        padding-top: 30px;
        height: 250px !important;
        width: 300px !important;
    }
  }
  
</style>
</head>

<body>

    <?php include 'navbar.php' ?>

    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12  text-white">

                    
                    <h1 style="text-align: left;"></h1>

                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12 col-12">

                        <div class="panel text-left">
                            <h1 class="text-center">OVERVIEW</h1>
                            <div class="progress" style="height:0.7rem;">
                                <div id="one" class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="height:0.7rem;" ></div>
                            </div>
                            <p class="pt-4">
                                The most tedious, confusing and overwhelming time of your student life is the placement
                                season and we here at Students’ Alumni Cell strive to ease the process for you. Through
                                the Alumni Career Assistance Programme (ACAP) we connect you to alumni who have been
                                there, done that and succeeded in achieving the same. We aim to provide the students a
                                seamless placement procedure with the alumni community helping them cross any hurdle
                                that may arise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="panel text-left">
                            <h1 class="text-center">Register Here!</h1>
                            <div class="progress" style="height:0.7rem;">
                                <div id="two" class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="height:0.7rem;"></div>
                            </div>
                            <p class="pt-4">

                            <div class="row">
                                <div id="y" class="col-md-6">
                                    <strong>Student</strong> - Fill the form specifying your top 3 companies in
                                    preference
                                    order.<br>

                                    <strong>Alumnus</strong> - Fill the form mentioning the company you are currently
                                    working for and the
                                    company you got placed in via the CDC recruitment procedure.<br>

                                    Each registered alumnus shall be allotted at most 5 mentees - forming a cohort by
                                    1st
                                    week of October.<br>

                                    An ice breaker session shall be organised for each cohort for initiating
                                    communication.<br><br>
                                    <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal"
                                        data-target="#modal2">
                                        Student Registration
                                    </button><br>
                                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                                        data-target="#modal1">
                                        Alumni Registration
                                    </button>

                                </div>
                                <!-- Button trigger modal -->
                                <div class="col-md-6 text-center">
                                    <img src="img/acap/2.jpg" style="height: 315px; width:500px">
                                </div>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="modal1" class="modal fade" role="dialog" style="padding-left:5%;height:100vh;">
             <div class="modal-dialog modal-dialog-centered" style="min-width:400px;margin-top:0;margin-bottom:0;">
                  <div class="modal-content">
                    <div class="body" style="padding-left: 4%;padding-right:4%;">
                      <div class="modal-header"style="padding-top:0;">
                           <h4 class="modal-title" >Alumni Registration</h4>
                           <button  type="button" class="close" data-dismiss="modal">&times;</button>

                      </div>
                      <div class="modal-body" style="font-family: 'Montserrat', sans-serif;">
                        <form class="form-horizontal" class="col-sm-12" id="form1">
                           <input placeholder="Name" name="name" type="text" class="validate"style="width:100%;" >
                           <br />
                           <br>
                            <input placeholder="Phone Number" name="phoneno" type="text" class="validate"style="width:100%;" >
                           <br />
                           <br>
                         <input placeholder="Email" name="email" type="email" class="validate"style="width:100%;" >
                           <br />
                           <br>
                           <input placeholder="Company Name" name="company" type="text" class="validate" style="width:100%;" >
                           <br>
                           <br>
                              <input placeholder="Company Designation" name="designation" type="text" class="validate" style="width:100%;" >
                           <br />
                           <br>
                            <input placeholder="Current City" name="city" type="text" class="validate" style="width:100%;" >
                           <br />
                           <br>
                            <input placeholder="Areas Of Expertise" name="expertise" type="text" class="validate"style="width:100%;"  >
                          <br />
                          <br>
                           <input placeholder="Year of Graduation" name="gradyear" type="text" class="validate" style="width:100%;" >
                         <br />
                         <br>
                            <input placeholder="Company placed via CDC" name="cdc" type="text" class="validate"style="width:100%;"  >
                        <br />
                        <br>
                           <button  type="submit" name="submit" id="submit" class="btn btn-block btn-primary">submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
             </div>
        </div>
        <div id="modal2" class="modal fade" role="dialog" style="padding-left:5%;height:100vh;">
             <div class="modal-dialog " style="min-width:400px;margin-top:3%;margin-bottom:1%;;" align="center">
                  <div class="modal-content">
                    <div class="body" style="padding-left: 4%;padding-right:4%;font-size:0.9rem;">
                      <div class="modal-header"style="padding-top:0;">
                           <h4 class="modal-title" >Students Registration</h4>
                           <button  type="button" class="close" data-dismiss="modal">&times;</button>

                      </div>
                      <div class="modal-body" style="font-family: 'Montserrat', sans-serif;">
                           <form id="form2" >
                                    <input placeholder="Name" name="name" type="text" class="validate"style="width:100%;"  >
                           <br />
                           <br>
                                     <input placeholder="Roll Number" name="roll" type="text" class="validate" style="width:100%;" >
                           <br />
                           <br>
                         <input placeholder="Phone Number" name="phoneno" type="text" class="validate"style="width:100%;" >
                           <br />
                           <br>
                           <input placeholder="Email" name="email" type="email" class="validate"style="width:100%;" >
                           <p style="
                           margin-left: 12px;
                           color: palegoldenrod;
                           text-align: justify;
                           ">**Please fill in the companies for which you genuinely want to prepare for. This will greatly help us in allotting mentors to you.</p>
                                   <input placeholder="Company Name" name="PC1" type="text" class="validate" style="width:100%;" >
                           <br />
                           <br>
                               <input placeholder="Company Name" name="PC2" type="text" class="validate"style="width:100%;"  >
                           <br />
                           <br>
                             <input placeholder="Company Name" name="PC3" type="text" class="validate"style="width:100%;"  >
                          <br />
                          <br>
                             <input placeholder="Preferred placement field (Eg. Software, Consultancy)" name="PC4" type="text" class="validate"style="width:100%;" >
                         <br />
                         <br>
                        <button  type="submit" name="submit" id="submit" class="btn btn-block btn-primary">submit</button>
                   </form>
                      </div>
                    </div>
                  </div>
             </div>
        </div>


    </main>

    <!-- 		Footer start -->
    <?php include 'footer.php' ?>
    <!-- 	Footer end	 -->
	  <!-- <?php include 'preloader.php' ?> -->

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script>
		$( "#one,#two").each(function( ) {
   $(this).addClass("progress-bar-purple");
});
        gsap.from('header', { opacity: 0, duration: 1 })
        gsap.from('header h1', { opacity: 0, duration: 2, x: -200 })
        gsap.from('header h6', { opacity: 0, duration: 2, x: -500 })


        gsap.from('.nav-item', {
            scrollTrigger: {
                trigger: '.nav-item',
                toggleActions: "play none none none"
            },
            opacity: 0,
            duration: 1,
            x: -200
        });


        gsap.from('.section-1 h1', {
            scrollTrigger: {
                trigger: '.section-1 h1',
                toggleActions: "play none none none"
            },
            opacity: 0,
            duration: 1,
            x: -200
        });

        gsap.from('.section-1 p', {
            scrollTrigger: {
                trigger: '.section-1 p',
                toggleActions: "play none none none"
            },
            opacity: 0,
            duration: 2.0,
        });

        gsap.from('.section-1 img', {
            scrollTrigger: {
                trigger: '.section-1 img',
                toggleActions: "play none none none"
            },
            opacity: 0,
            duration: 1.5,
            x: 200
        });

        var arr = document.getElementsByClassName("x");
        for (var i = 0; i < arr.length; i++) {

            gsap.from(arr[i], {
                scrollTrigger: {
                    trigger: arr[i],
                    toggleActions: "play none none none"
                },
                opacity: 0,
                duration: 1.5,
                x: -200
            });

        }
        var img_arr = document.getElementsByClassName("image");
        for (var i = 0; i < img_arr.length; i++) {

            gsap.from(img_arr[i], {
                scrollTrigger: {
                    trigger: img_arr[i],
                    toggleActions: "play none none none",
                    start: "top center"
                },
                opacity: 0,
                duration: 1.5,
            });

        }

        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray('#panel').forEach((panel, i) => {
            ScrollTrigger.create({
                trigger: panel,
                start: "top top",
                pin: true,
                pinSpacing: false
            });
        });
    </script>
</body>

</html>


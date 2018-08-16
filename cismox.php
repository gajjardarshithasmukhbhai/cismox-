<html>
<head>
    <title></title>
    <meta id="meta" name="viewport"
          content="width=device-width; initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .header
        {
            box-shadow: 1px 1px 1px 1px rgba(0,0,0,.2);
        }
        .font{
            color: white;
            text-shadow: 2px 2px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            text-align: center;
        }
        .blk
        {
            background-color: blue;
        }
        .blk:hover
        {
            background-color: white;
            color: blue;
        }
        .pll
        {
            color: white;
            text-align: center;
            font-size: 20px
        }
        .pll:hover
        {
            color: blue;
        }
        .lp
        {
            background-color: blue;
        }
        .oop
        {
            color: blue;
            text-align: center;
            font-size: 20px;
        }

        .parentDiv
        {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        @media screen and (max-width: 1370px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: 800;
                height: 500;
                border-top: 0px solid transparent;
                border-left: 800px solid blue;
                border-bottom: 540px solid transparent;
            }
            #triangle-left {

                width: 300;
                height: 400;
                position: absolute;
                top: 78px;
                left: 860px;
                border-top: 320px solid blue;
                border-left: 489px solid transparent;
                border-bottom: 540px solid transparent;
            }
            .mvc1
            {
            border-radius: 10px;
            }
        #mvc
            {
            background-color: white;
            box-shadow: 8px 8px blue;
            border:1px solid black;
            color: red;
            width: 620px;
            height: 320px;
            border-radius: 12px;
            position: absolute;
            top: 265px;
            left: 380px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
        }
        @media screen and (max-width: 1100px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 700px solid yellow;
                border-bottom: 430px solid transparent;
            }
            #triangle-left {

                width: 100;
                height: 400;
                position: absolute;
                top: 78px;
                left: 772px;
                border-top: 200px solid yellow;
                border-left: 300px solid transparent;
                border-bottom: 240px solid transparent;
            }
            .mvc1
            {
            border-radius: 10px;
            }
        #mvc
            {
            background-color: white;
            box-shadow: 8px 8px blue;
            border:1px solid black;
            color: red;
            width: 520px;
            height: 320px;
            border-radius: 12px;
            position: absolute;
            top: 225px;
            left: 380px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
        }
        @media screen and (max-width: 850px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 500px solid blue;
                border-bottom: 380px solid transparent;
            }
            #triangle-left {

                width: 100;
                height: 400;
                position: absolute;
                top: 58px;
                left: 612px;
                border-top: 170px solid aquamarine;
                border-left: 240px solid transparent;
                border-bottom: 240px solid transparent;
            }
            .mvc1
            {
            border-radius: 10px;
            }
        #mvc
            {
            background-color: white;
            box-shadow: 8px 8px blue;
            border:1px solid black;
            color: red;
            width: 570px;
            height: 320px;
            border-radius: 12px;
            position: absolute;
            top: 225px;
            left: 210px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
        }
        @media screen and (max-width: 750px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 500px solid #CD7ED9;
                border-bottom: 340px solid transparent;
            }
            #triangle-left {

                width: auto;
                height: auto;
                position: absolute;
                top: 58px;
                left: 490px;
                border-top: 160px solid aquamarine;
                border-left: 200px solid transparent;
                border-bottom: 200px solid transparent;
            }
            .mvc1
            {
            border-radius: 10px;
            }
        #mvc
            {
            background-color: white;
            box-shadow: 8px 8px blue;
            border:1px solid black;
            color: red;
            width: 470px;
            height: 320px;
            border-radius: 12px;
            position: absolute;
            top: 225px;
            left: 180px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
        }
        @media screen and (max-width: 700px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 480px solid blue;
                border-bottom: 440px solid transparent;
            }
        }
        @media screen and (max-width: 650px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 450px solid blue;
                border-bottom: 420px solid transparent;
            }
        }
        @media screen and (max-width: 450px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 400px solid blue;
                border-bottom: 400px solid transparent;
            }
        }
        @media screen and (max-width: 400px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 350px solid blue;
                border-bottom: 380px solid transparent;
            }
        }
        @media screen and (max-width: 370px)
        {
            #triangle_right {
                position: absolute;
                top: 78px;
                width: auto;
                height: auto;
                border-top: 0px solid transparent;
                border-left: 240px solid blue;
                border-bottom: 280px solid transparent;
            }
            #triangle-left
             {
                position: absolute;
                top: 0px;
                left: -210px;
            }
            .mvc1
            {
            border-radius: 10px;
            }
        #mvc
            {
            background-color: white;
            box-shadow: 8px 8px blue;
            border:1px solid black;
            width: 171px;
            color: red;
            height: 420px;
            border-radius: 12px;
            position: absolute;
            top: 225px;
            left: 80px;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
        }
        .ipman
        {
            background-color: blue;
        }
        .font1
        {
            color: white;
            text-shadow: 2px 2px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            text-align: left;
        }
        .gt
         {
             width: 1222px;
         }
        .lk
        {
            text-align: center;
            color: white;
        }
        .button {
            background-color: blue; /* Green */
            border:3px solid blue;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .button:hover {
            background-color: white;
            border:3px solid blue;
            color: blue;
        }
        .div
        {
            background-color: white; /* Green */
            border:3px solid white;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .div
        {
            border-radius: 10px;
        }
        .mnb
        {
            text-align: center;
        }
        .button1 {border-radius: 14px;}
        .lm
        {
            color: blue;
        }
        .df
        {
            align-content: center;
        }
        .lkm
        {
            width:190px ;
            height:190px;
            border: 2px solid blue;
        }
        #badge-ribbon {
            position: relative;
            background: blue;
            height: 100px;
            width: 100px;
            -moz-border-radius:    50px;
            -webkit-border-radius: 50px;
            border-radius:         50px;
        }

        #badge-ribbon:before,
        #badge-ribbon:after {
            content: '';
            position: absolute;
            border-bottom: 70px solid blue;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            top: 70px;
            left: -10px;
            -webkit-transform: rotate(-140deg);
            -moz-transform:    rotate(-140deg);
            -ms-transform:     rotate(-140deg);
            -o-transform:      rotate(-140deg);
        }

        #badge-ribbon:after {
            left: auto;
            right: -10px;
            -webkit-transform: rotate(140deg);
            -moz-transform:    rotate(140deg);
            -ms-transform:     rotate(140deg);
            -o-transform:      rotate(140deg);
        }
        .kk
        {
            font-size: 30px;
            background-color: white;
        }
        .intro
        {
            font-size: 30px;
        }
        .h2
        {
            font-size: 40px;
            text-align: center;
            color: blue;
            font-weight: bolder;
            text-shadow: 2px 2px 2px greenyellow;
        }

        .lmn
        {
            background-color: #FFFFFF; /* Green */
            border:3px solid blue;
            color: #0819FE;
            width: 120px;
            height: 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 19px 65px 20px;
            cursor: pointer;
            align-items: left;
        }
        .lmn1
        {
            border-radius: 17px;
        }
        .lmn:hover
        {
            background-color: #1605F3; /* Green */
            border:3px solid blue;
            color: white;
        }
        .im
        {
            width: 113px;
            height: 113px;
            margin: 19px 25px 94px;
        }
        .ui
        {
            opacity: 9.5;
            width: 60px;
            height: 45px;
        }
        .srk
        {
            background-image: url("fgh.png");
            background-size: 56px;
        }

        .mvb
        {
            border: 3px solid blue;

        }
        .rk
        {
            background-image: url("mnb.png");
            background-size: 56px;
        }
        .bn
        {
            background-image: url("utility.png");
            background-size: cover;
        }
        .website
        {
            font-weight: 900;
            font-family:Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif; 
            color:#080009;
            font-size:18px;
        }
        .de
        {
            position: absolute;
            left: 80px;
            border-radius: 7px 25px;
            background-color:#F9F8F8;
            border:2px solid #070DF8;
            width: 90px;
            height: 70px;
        }
        .de:hover
        {
            background-color:#0623FF;   /*color picker for ctrl+shift+c */
            color: #FFFFFF;
        }
        .tree
        {
            color: #0303FF;
        }
        .container
        {

        }
        .ripple {
 position: relative;
 overflow: hidden;
 transform: translate3d(0, 0, 0);
}
.ripple:after {
 content: "";
 display: block;
 position: absolute;
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 pointer-events: none;
 background-image: radial-gradient(circle, #fff 10%, transparent 10.01%);
 background-repeat: no-repeat;
 background-position: 50%;
 transform: scale(10, 10);
 opacity: 0;
 transition: transform .5s, opacity 1s;
}
.ripple:active:after {
 transform: scale(0, 0);
 opacity: .3;
 transition: 0s;
}
.lop
        {
            text-align: center;
            color: white;
            font-size: 20px;
        }

.lop
{
    margin-left: -6px;
    margin-right: auto;
}
.dx
        {
            position: absolute;
            left: 690px;
            color: #060606;
            border-radius: 7px 25px;
            background-color:#F9F8F8;
            border:2px solid #070DF8;
            width: 90px;
            height: 70px;
        }
        .dx:hover
        {
            background-color:#0623FF;   /*color picker for ctrl+shift+c */
            color: #FFFFFF;
        }
        .office
        {
            color: #FFFFFF;
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 1px;
            margin-bottom: 80px;
            color:#ffffff;
        }
        .ret
        {
            color: #FFFFFF;
            font-weight: 500;
            font-size: 16px;
        }
        .project 
        {
            background-color: #FFFFFF; /* Green */
            border:3px solid white;
            color: #0819FE;
            width: 140px;
            height: 50px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 19px 65px 20px;
            cursor: pointer;
            align-items: left;
        }
        .smn1
        {
            border-radius: 37px;
        }
        .project:hover
        {
            background-color: #6B7070;
            color: white;
             border-radius: 37px #6B7070;
        }
        .zoom
        {
            transition: transform .4s;/*koi pan animation duration apva mate*/
        }
        .zoom:hover
        {
            -webkit-transform:scale(1.2);/*ketlu zoom karvu e batave ema scale ketlu zoom karvu e batave*/      
        }
        #zoomw
        {
            width: 100px;
             -webkit-transition-property: width;
    -webkit-transition-duration: 2s;
    -webkit-transition-timing-function: linear;
    -webkit-transition-delay: 1s;
    /* Standard syntax */
    transition-property: width;
    transition-duration: 2s;
    transition-timing-function: linear;
    transition-delay: 1s;
        }
        #zoomw:hover
        {
            width: 200px;
        }
        .jk
        {
            color: #FFFFFF;
            font-size: 30px;
        }
        #return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgb(0, 0, 0);
    background: blue;
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 0, 0, 0.9);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}

</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top kk" role="navigation lp">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
                <span class="icon-bar"></span>
                <span class="icon-bar "></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="font"><img src="jlk.png" class="ui">cismox</h1>
        </div>
        <div class="collapse navbar-collapse" id="navbar-container">
            <ul class="nav navbar-nav navbar-right">
                <li class="btn blk"><a href="kdkd.html"><p class="pll"><span class="glyphicon glyphicon-log-in"></span> Login</p></a></li>
                <li class="btn"><a href=""><p class="oop"><span class="glyphicon glyphicon-pencil"></span>Signup</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="triangle_right">
</div>
<div id="mvc">
    <h1 class="text-primary">cismox</h1>
    <br>
    <ul>
        <li><b><h4>cismox aim is given source code of templates</h4></b></li>
        <li><h4>cismox aim is given source code of Button</h4></li>
        <li><h4>give the free logo and take project</h4></li>
    </ul>
    <button type="button" class="lmn lmn1 ripple">Templates</button>
</div>
<div id="triangle-left">
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br>
<div class="row">
<div class="container">
    <div class="col-md-12">
            <div class="col-md-3">
                <img src="web.png" width="220px" height="220px" class="wow rollIn ripple">
                <p class="website">Our Company Making the Website Like Static and Dynamic both will be Making</p>
                <button type="button" class="btn btn-lg de ripple"><span class="glyphicon glyphicon-ok tree"></span><b>click</b></button>
            </div>
            <div class="col-md-3">
                <img src="android.png" width="220px" height="220px" class="wow rollIn">
                <p class="website">Our Company Making ANDROID App shortly show We take project very shoon</p>
                <button type="button" class="btn btn-lg de ripple"><span class="glyphicon glyphicon-ok tree"></span><b>click</b></button>
            </div>
        <div class="col-md-3">
            <img src="designing.png" width="220px" height="220px" class="wow rollIn">
            <p class="website">Our Company Making the Website Design for Client Requirement</p>
                <button type="button" class="btn btn-lg de ripple"><span class="glyphicon glyphicon-ok tree"></span><b>click</b></button>
        </div>
        <div class="col-md-3">
            <img src="KDLKLD.png" width="220px" height="220px" class="wow rollIn">                        <p class="website">Our Company staring new working domain it's IOT.we start new business coming soon</p>
                <button type="button" class="btn btn-lg de ripple"><span class="glyphicon glyphicon-ok tree"></span><b>click</b></button>
        </div>
    </div>
    </div>
    <br>
    <br>
    <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <img src="dll.png" width="220px" height="220px" class="wow rollIn">            
                <p class="website">Our Company solve the web Bug and penetration testing your website any firm interested contact our company </p>
                <button type="button" class="btn btn-lg de ripple"><span class="glyphicon glyphicon-ok tree"></span><b>click</b></button>
        </div>
        <div class="col-md-3">
            <img src="SEO.png" width="220px" height="220px" class="wow rollIn">            
                <p class="website">Our Company give SEO services.new client give free advice then after 1 year take charge</p>
                <button type="button" class="btn btn-lg de ripple"><span class="glyphicon glyphicon-ok tree"></span><b>click</b></button>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
    <br>
    <br>
    <div class="lop">
    <img src="technology.png" width="220px" height="220px" class="wow rollIn">            
        <p class="website">Our Company use the react js,<br>node js,oop php,bootstrap 3,css 3,<br>animation,MY-SQL,Java script,Express js<br>Enceypted alogirithem use for Encryption</p>
    </div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<footer class="page-footer ipman bn ripple">
    <br>
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-4">
                    <h3 class="office">Office</h3>
                        <div class="col-lg-12 col-sm-4 col-md-4">
                            <p class="text ret "><b>>></b>E-204 vinod Tower,shrinath recendency<br>pajarpol,kadi</p>
                            <p class="text ret"><b class="zoomw">>></b>phone number:7984552350</p>
                        </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <h3 class="office">Book your project</h3>
                    <p class="text ret"><b>>></b>booking your project you give the 10% advance d given<br>then after your project start</p>
                        <button type="button" class="project smn1 ripple"><b>Project</b></button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <p class="lop"><img src="github.png" width="38px" height="38px" class="zoom"><b>      Github</b></p>
            </div>
            <div class="col-md-2">
                <p class="lop"><img src="youtubeheb"  width="38px" height="38px" class="zoom"><b>  youtube</b></p>
            </div>
            <div class="col-md-2">
                <p class="lop"><img src="gmaiil.png" width="38px" height="38px" class="zoom"><b>  Email-id</b></p>
            </div>
            <div class="col-md-2">
                <p class="lop"><img src="link.png" width="38px" height="38px" class="zoom"><b>  LinkedIn</b></p>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <div class="col-lg-4">
                    <h3 class="office"> Support & feedback</h3>
                        <div class="col-lg-12 col-sm-4 col-md-4">
                            <p class="text ret "><b></b>you can send feedback and get support via email and otherwise contact our customer care</p>
                        </div>
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-sm-4">
                    <h3 class="office">E-mail</h3>
                    <div class="col-sm-12 col-lg-12 col-md-4">
                            <p class="text jk "><b></b>cismox.code@gmail.com</p>
                        </div>    
                </div>
        </div>
    </div>
        <div class="col-md-12">
                <h3 class="lk">copyright 2018|all right reserved</h3>
        </div>
    </div>
</footer>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

  
<!-- Test the scroll -->
<script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
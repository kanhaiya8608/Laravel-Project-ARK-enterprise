<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');



.heder li, .header a, .header button{
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #edf0f1;
  text-decoration: none;
}

header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 10%;
}

.logo{
  cursor: pointer;
  margin-right: auto;
  height: 50px;
  width: 50px;
}

.nav__links{
  list-style: none;
}

.nav__links li{
  display: inline-block;
  padding: 0px 20px;
}

.nav__links li a{
  transition: all 0.3s ease 0s;
}

.nav__links li a:hover{
  color: #0088a9;
}
.menu{
  display: none;
}

.heder button{
  margin-left: 20px;
  padding: 9px 25px;
  background-color: rgba(0,136,169, 1);
  border: none;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease 0s;
  margin-bottom: 20px;
}

.heder button:hover{
  background-color: rgba(0, 136, 169, 0.2);
}


.home .carousel-item{
	min-height: 75vh;
	background-position: center;
	background-size: cover;
	position: relative;
	z-index: 1;
}
.home .carousel-item:before{
	content: '';
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.6);
	z-index: -1;
}
.home .carousel-item .container{
	position: absolute;
	left: 50%;
	top:50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.home .carousel-item h3{
	font-size: 80px;
	color: #ffffff;
	margin:0 0 10px;
	opacity: 0;
}
.home .carousel-item.active h3{
	animation: fadeInLeft 0.5s ease forwards;
}
.home .carousel-item.active p{
	animation: fadeInRight 0.5s ease forwards;
}

@keyframes fadeInLeft{
	0%{
		opacity: 0;
		transform: translateX(-30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}
@keyframes fadeInRight{
	0%{
		opacity: 0;
		transform: translateX(30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}

.home .carousel-controls{
	position: absolute;
	left: 50%;
	bottom: 40px;
	z-index: 10;
	transform: translateX(-50%);
}

.home .carousel-indicators{
	position: relative;
	margin:0;
}

.home .carousel-indicators li{
	height: 70px;
	width: 70px;
	margin:0 5px;
	border-radius: 50%;
	background-position: center;
	background-size: cover;
	border:3px solid transparent;
	transition: all 0.3s ease;
}
.home .carousel-indicators li.active{
	border-color: #ffffff;
	transform: scale(1.2);
}

.home .carousel-control-next, 
.home .carousel-control-prev{
	height: 60px;
	width: 60px;
	opacity: 1;
	z-index: 3;
	top: 50%;
	transform: translateY(-50%);
	border-radius: 50%;
	transition: all 0.3s ease;
}
.home .carousel-control-next:hover, 
.home .carousel-control-prev:hover{
   box-shadow: 0 0 10px #ffffff;
}
.home .carousel-control-next img, 
.home .carousel-control-prev img{
   width: 30px;
}
.home .carousel-control-next{
	right: -90px;
}
.home .carousel-control-prev{
	left: -90px;
}

  
  /* Button Styles */
  
  .button {
	display: inline-flex;
	height: 40px;
	width: 150px;
	border: 2px solid #BFC0C0;
	margin: 20px 20px 20px 20px;
	color: #BFC0C0;
	text-transform: uppercase;
	text-decoration: none;
	font-size: 16px;
	letter-spacing: 1.5px;
	align-items: center;
	justify-content: center;
	overflow: hidden;
  }
  
  a {
	color: #BFC0C0;
	text-decoration: none;
	letter-spacing: 1px;
  }
  
  
  
  /* Sixth Button */
  
  #button-6 {
	position: relative;
	overflow: hidden;
	cursor: pointer;
  }
  
  #button-6 a {
	position: relative;
	transition: all .45s ease-Out;
  }
  
  #spin {
	width: 0;
	height: 0;
	opacity: 0;
	left: 70px;
	top: 20px;
	transform: rotate(0deg);
	background: none;
	position: absolute;
	transition: all .5s ease-Out;
  }
  
  #button-6:hover #spin {
	width: 200%;
	height: 500%;
	opacity: 1;
	left: -70px;
	top: -70px;
	background: #BFC0C0;
	transform: rotate(80deg);
  }
  
  #button-6:hover a {
	color: #2D3142;
  }
  
  
  @media screen and (min-width:1000px) {
	h1 {
	  font-size: 2.2em;
	}
	#container {
	  width: 50%;
	}
  }


@media only screen and (max-width:800px){
  .nav__links, .cta1{
    display: none;
    }
  .menu{
    display: inherit;
  }
}
/*Mobile view*/
.overlay{
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  left: 0;
  top:0;
  background-color: #24252a;
  overflow-x: hidden;
  transition: all 0.5s ease-in;
}

.overlay__content{
  display: flex;
  height: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.overlay a{
  padding: 15px;
  font-size: 28px;
  display: block;
  transition: all 0.3s ease-in;
}

.overlay a:hover, .overlay a:focus{
  color: #0088a9;
}

.overlay .close{
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px){
  .overlay a{
    font-size: 10px;
  }
  .overlay .close{
    font-size: 40px;
    top: 15px;
    right: 35px;
       
  }


/*responsive*/
@media(max-width: 767px){
  .home .carousel-control-next, 
  .home .carousel-control-prev{
  	display: none;
  }
  .home .carousel-indicators li{
  	height: 60px;
  	width: 60px;
  }
  .home .carousel-item h3{
  	font-size: 45px;
  }
  .home .carousel-item p{
  	font-size: 22px;
  }
}

}
    </style>
      <style>
    .home .carousel-item{
	min-height: 75vh;
	background-position: center;
	background-size: cover;
	position: relative;
	z-index: 1;
}
.home .carousel-item:before{
	content: '';
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background-color: rgba(0,0,0,0.6);
	z-index: -1;
}
.home .carousel-item .container{
	position: absolute;
	left: 50%;
	top:50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.home .carousel-item h3{
	font-size: 80px;
	color: #ffffff;
	margin:0 0 10px;
	opacity: 0;
}

.home .carousel-item.active h3{
	animation: fadeInLeft 0.5s ease forwards;
}
.home .carousel-item.active p{
	animation: fadeInRight 0.5s ease forwards;
}

@keyframes fadeInLeft{
	0%{
		opacity: 0;
		transform: translateX(-30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}
@keyframes fadeInRight{
	0%{
		opacity: 0;
		transform: translateX(30px);
	}
	100%{
		opacity: 1;
		transform: translateX(0px);
	}
}

.home .carousel-controls{
	position: absolute;
	left: 50%;
	bottom: 40px;
	z-index: 10;
	transform: translateX(-50%);
}

.home .carousel-indicators{
	position: relative;
	margin:0;
}

.home .carousel-indicators li{
	height: 70px;
	width: 70px;
	margin:0 5px;
	border-radius: 50%;
	background-position: center;
	background-size: cover;
	border:3px solid transparent;
	transition: all 0.3s ease;
}
.home .carousel-indicators li.active{
	border-color: #ffffff;
	transform: scale(1.2);
}

.home .carousel-control-next, 
.home .carousel-control-prev{
	height: 60px;
	width: 60px;
	opacity: 1;
	z-index: 3;
	top: 50%;
	transform: translateY(-50%);
	border-radius: 50%;
	transition: all 0.3s ease;
}
.home .carousel-control-next:hover, 
.home .carousel-control-prev:hover{
   box-shadow: 0 0 10px #ffffff;
}
.home .carousel-control-next img, 
.home .carousel-control-prev img{
   width: 30px;
}
.home .carousel-control-next{
	right: -90px;
}
.home .carousel-control-prev{
	left: -90px;
}

  
  /* Button Styles */
  
 .home .button {
	display: inline-flex;
	height: 40px;
	width: 150px;
	border: 2px solid #BFC0C0;
	margin: 20px 20px 20px 20px;
	color: #BFC0C0;
	text-transform: uppercase;
	text-decoration: none;
	font-size: .6em;
	letter-spacing: 1.5px;
	align-items: center;
	justify-content: center;
	overflow: hidden;
  }
  
  a {
	color: #BFC0C0;
	text-decoration: none;
	letter-spacing: 1px;
  }
  
  
  
  /* Sixth Button */
  
  #button-6 {
	position: relative;
	overflow: hidden;
	cursor: pointer;
  }
  
  #button-6 a {
	position: relative;
	transition: all .45s ease-Out;
  font-size: 12px;
  }
  
  #spin {
	width: 0;
	height: 0;
	opacity: 0;
	left: 70px;
	top: 20px;
	transform: rotate(0deg);
	background: none;
	position: absolute;
	transition: all .5s ease-Out;
  }
  
  #button-6:hover #spin {
	width: 200%;
	height: 500%;
	opacity: 1;
	left: -70px;
	top: -70px;
	background: #BFC0C0;
	transform: rotate(80deg);
  }
  
  #button-6:hover a {
	color: #2D3142;
  }
  
  
  @media screen and (min-width:1000px) {
	h1 {
	  font-size: 2.2em;
	}
	#container {
	  width: 50%;
	}
  }

/*responsive*/
@media(max-width: 767px){
  .home .carousel-control-next, 
  .home .carousel-control-prev{
  	display: none;
  }
  .home .carousel-indicators li{
  	height: 60px;
  	width: 60px;
  }
  .home .carousel-item h3{
  	font-size: 45px;
  }
  .home .carousel-item p{
  	font-size: 22px;
  }
}
  </style>
</head>
<body>
        <header style="background-color:#24252a;" class="heder">
            <img class="logo" alt="logo" src="https://cdn.logo.com/hotlink-ok/logo-social-sq.png"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="/">Student Accommodation</a></li>
                    <li><a href="/propertym">Property Management</a></li>
                    <li><a href="/lettings">Lettings</a></li>
                    @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                          <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                </ul>
            </nav>
            <a class="cta1" href="/email"><button>Contact</button></a>
            <a onclick="openNav()" class="menu" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="40px" height="40px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 15h14c.55 0 1-.45 1-1s-.45-1-1-1H5c-.55 0-1 .45-1 1s.45 1 1 1zm0 4h14c.55 0 1-.45 1-1s-.45-1-1-1H5c-.55 0-1 .45-1 1s.45 1 1 1zm0-8h14c.55 0 1-.45 1-1s-.45-1-1-1H5c-.55 0-1 .45-1 1s.45 1 1 1zM4 6c0 .55.45 1 1 1h14c.55 0 1-.45 1-1s-.45-1-1-1H5c-.55 0-1 .45-1 1z"/></svg></a>
        </header>
 <div class="home">
  <div id="carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-controls">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active" style="background-image:url('https://images.pexels.com/photos/4451937/pexels-photo-4451937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')"></li>
      <li data-target="#carousel" data-slide-to="1" style="background-image:url('https://images.pexels.com/photos/5961025/pexels-photo-5961025.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')"></li>
      <li data-target="#carousel" data-slide-to="2" style="background-image:url('https://images.pexels.com/photos/6140931/pexels-photo-6140931.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260')"></li>
      
    </ol>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
     <img src="/left-arrow.svg" alt="Prev"> 
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <img src="/right-arrow.svg" alt="Next">
  </a>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image:url('https://images.pexels.com/photos/4451937/pexels-photo-4451937.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
      <div class="container">
         <h3>PROPERTY MANAGEMENT EXPERTS</h3>
          <div class="button" id="button-6">
            <div id="spin"></div>
            <a href="/">Find Out More</a>
          </div>
        </div>
    </div>
    <div class="carousel-item" style="background-image:url('https://images.pexels.com/photos/5961025/pexels-photo-5961025.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
      <div class="container">
         <h3>EXPERTS IN CREATING HASSLE FREE LETTINGS</h3>
         <div class="button" id="button-6">
          <div id="spin"></div>
          <a href="/propertym">Get in Touch</a>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="background-image:url('https://images.pexels.com/photos/6140931/pexels-photo-6140931.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260')">
      <div class="container">
         <h3>YOUR STUDENT ACCOMMODATION COVERED</h3>
         <div class="button" id="button-6">
          <div id="spin"></div>
          <a href="/lettings">Book Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
 <div id="mobile__menu" class="overlay">
            <a class="close" onclick="closeNav()">&times;</a>
            <div class="overlay__content">
                <a href="/">Student Accommodation</a>
                <a href="/propertym">Property Management</a>
                <a href="/lettings">Lettings</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
  <script type="text/javascript">
function openNav(){
    document.getElementById("mobile__menu").style.width="100%";
}

function closeNav(){
    document.getElementById("mobile__menu").style.width="0";
}
    </script>

 
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

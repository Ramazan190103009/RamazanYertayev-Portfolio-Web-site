<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Portfolio</title>
</head>
<body>
    <style>
         footer, header, nav, section {
    display: block;
  }
html{
    scroll-behavior: smooth;
}
body{
    margin: 0;
    padding: 0;
    background-color: #000;
}
ul, li {
    list-style-type: none;
}
#nav {
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-weight: 700;
  }
  #nav .navbar-brand {
    color: #fff;
  }
  .nav-item{
      position: relative;
      right: 5rem;
      margin-right: 15px;
      color: #fff;
  }
  #nav .nav-item:hover {
      color: #e90800;
      border-bottom: 2px solid #e90800;
  }
  .navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-left: 80px;
  }
#icon{
    position: relative;
    left: 60px;
    width: 50px;
}
.social{
    position: absolute;
    top: 360px;
    left: 30px;
}
.fa {
    padding: 15px;
    font-size: 20px;
    width: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 5px;
    border-radius: 40px;
}
  .fa:hover {
      opacity: 0.7;
}
  .fa-facebook {
    background: #3B5998;
    color: white;
}
.fa-facebook:hover{
    color: #fff;
    text-decoration: none;
}
.fa-twitter {
    position: relative;
    left: -65px;
    top: 60px;
    background: #55ACEE;
    color: white;
}
.fa-twitter:hover{
   color: #fff;
   text-decoration: none;
}
.fa-instagram {
    position: relative;
    left: -129px;
    top: 120px;
    background-color: rgb(150, 18, 18);
    color: #fff;
}
.fa-instagram:hover{
    color: #fff;
    text-decoration: none;
}
  
section{
    width: 79.9rem;
    height: 500px;
}
p{
    color: #fff;
}
#h1{
    position: absolute;
    left: 37%;
    top: 160px;
    color: rgb(255, 255, 255);
    width: 40%;
    font-weight: 500;
    font-size: 6rem;
}
#whoiam{
    position: absolute;
    left: 39%;
    top: 280px;
    color: rgb(255, 255, 255);
    width: 35%;
    font-size: 25px;
}
#header-img{
    position: relative;
    left: 750px;
    margin-top: 9rem;
    width: 400px;
    height: 300px;
}
.div1{
    width: 100%;
    height: 550px;
    background-color: #000;
}
.div2{
    position: absolute;
    left: 780px;
    top: 110px;
    width: 350px;
    height: 395px;
    border-radius: 5px;
}
.btn1{
    position: absolute;
    left: 515px;
    top: 330px;
}
.p1 {
    position: absolute;
    left: 170px;
    top: 200px;
    font-size: 20px;
    color: #fff;
}
.p2 {
    position: absolute;
    left: 170px;
    top: 300px;
    font-size: 20px;
    color: #fff;
}
.hr {
    position: absolute;
    left: 70px;
    top: 250px;
    width: 350px;
    border-bottom: 3px solid #fff;
}
.aboutme{
    width: 79.9rem;
    background-color: #000;
}
.h1-about{
    position: relative;
    left: 50px;
    width: 50%;
    color: #fff;
    font-weight: bold;
}
.solid{
    position: relative;
    left: -565px;
    top: 0px;
    border-bottom: 5px solid #e90800;
    width: 5%;
}
.solid1{
    position: relative;
    left: -565px;
    border-bottom: 5px solid #e90800;
    width: 3%;
}
.p3 {
    position: relative;
    left: 35px;
    color: #fff;
    font-size: 25px;
}
b{
    color: rgb(36, 235, 36);
}
.des1{
        position: relative;
        left: 35px;
        color: #fff;
        font-size: 17px;
}
h5{
    color: #fff;
}
.first-prog{
    left: 3%;
}
.block1{
    width: 79.9rem;
    background-color: #000;
    height: 400px;
}
.progress{
    position: relative;
    left: 4%;
    width: 30%;
    height: 25px;
}
.list-group1{
    position: absolute;
    left: 45%;
    top: 830px;
    width: 20%;
}
.list-group2{
    position: absolute;
    left: 65%;
    top: 51.9rem;
    width: 20%;
}
.block2{
    width:79.9rem;
    background-color: #000;
    height: 600px;
}
h1{
    color: #fff;
}
.header-service {
    position: relative;
    left: 40px;
    width: 30%;
}
.solid2{
    position: relative;
    left: 45px;
    border-bottom: 5px solid #e90800;
    width: 5%;
}
.solid3{
    position: relative;
    left: 55px;
    top: 10px;
    border-bottom: 5px solid #e90800;
    width: 3%;
}
.column1{
    position: relative;
    left: 7rem;
    top: 4.5rem;
    width: 400px;
    text-align: center;
    line-height: 28px;
}
.p4{
    position: relative;
    left: 15px;
}
.vl{
    position: absolute;
    left: 620px;
    top: 1320px;
    border-left: 5px solid #e90800;
    height: 480px;
}
.column2{
    position: absolute;
    left: 750px;
    top: 1340px;
    text-align: center;
    width: 400px;
    line-height: 28px;
}
.solid4{
    position: absolute;
    left:50px;
    top: 1550px;
    border-bottom: 5px solid #e90800;
    width:90%;
}
.column3{
    position: absolute;
    left: 90px;
    top: 1600px;
    width: 400px;
    text-align: center;
    line-height: 28px;
}
.material-icons {
    width: 5%;
}
.column4{
    position: absolute;
    left: 750px;
    top: 1600px;
    width: 400px;
    text-align: center;
    line-height: 28px;
}
.footer{
    position: relative;
    top: 1289px;
    background-color: #000;
    height: 680px;
}
.solid5{
    position: relative;
    left: 35px;
    top: 60px;
    border-bottom: 5px solid #e90800;
    width: 5%;
}
.solid6{
    position: relative;
    left: 45px;
    top: 70px;
    border-bottom: 5px solid #e90800;
    width: 3%;
}
.contact-header{
    position: absolute;
    left: 30px;
    width: 30%;
    color: #fff;
    font-weight: bold;
}
.call{
    position: relative;
    left: 140px;
    top: 100px;
}
.number{
    position: relative;
    left: 100px;
    top: 100px;
    width: 30%;
    font-size: 20px;
    font-weight: bold;
}
.email{
    position: absolute;
    left: 580px;
    top: 130px;
}
.email-index{
    position: relative;
    left: 500px;
    top: 20px;
    font-weight: bold;
    font-size: 20px;
    width: 0%;
}
.place{
    position: absolute;
    left: 1000px;
    top: 130px;
}
.place-info{
    position: absolute;
    left: 910px;
    top: 180px;
    font-weight: bold;
    font-size: 20px;
}
#name {
    position: relative;
    left: 70px;
    top: 70px;
    background-color: #333;
    color: #fff;
    border: none;
    width: 42%;
    height: 50px;
    border-radius: 20px;
}
#email {
    position: absolute;
    left: 610px;
    top: 305px;
    background-color: #333;
    color: #fff;
    border: none;
    width: 42%;
    height: 50px;
    border-radius: 20px;
}
#subject {
    position: relative;
    left: 70px;
    top: 100px;
    background-color: #333;
    color: #fff;
    border: none;
    width: 85%;
    height: 50px;
    border-radius: 20px;
}
#textarea{
    position: relative;
    left: 70px;
    top: 130px;
    background-color: #333;
    color: #fff;
    border: none;
    width: 85%;
    border-radius: 20px;
}
.btn-dark{
    position: relative;
    left: 1025px;
    top: 150px;
    width: 120px;
}
@media screen and (max-width:500px){
    body {
        width: 500px;
    }
    .div2{
       display: none;
   }
  #h1 {
      left: 30%;
      top: 8rem;
      width: 15rem;
  }
  #whoiam{
      left: 35%;
      top: 15rem;
      width: 10rem;
  }
  #btn1 {
      left: 38%;
      top: 18rem;
  }
  #header-img{
      display: none;
  }
  .group{
      display: none;
  }
  #icon {
      display: none;
  }
  #nav {
      position: absolute;
      width: 540px;
  }
  .navbar-brand {
      margin-left: 0px;
  }
  .navbar-toggler .navbar-toggler-icon{
    position: absolute;  
    left: 25rem;
    top: 7px;
  }
   #nav .nav-item {
       left: 0.5rem;
   }
   .row {
      width: 515px;
   }
   #about {
       left: 2rem;
   }
   .solid {
       position: absolute;
       left: 1rem;
       top: 37rem;
       width: 3rem;
   }
   .solid1 {
    position: absolute;
    left: 1.7rem;
    top: 38rem;
    width: 1.5rem;
   }
   .p3 {
       left: 1rem;
       top: 4rem;
       width: 10rem;
   }
   .des1 {
       left: 1rem;
       top: 4rem;
   }
  
   .block1 {
       display:block;
       height: 50rem;
   }
   .first-prog{
       top: 4rem;
   }
   .progress {
       left: 2rem;
       top: 4rem;
       width: 23rem;
   }
   .list-group1{
       left: 1rem;
       top: 78rem;
       width: 12rem;
   }
   .list-group2{
       left: 13rem;
       top: 78rem;
       width: 12rem;
   }
   .block2{
       position: relative;
       height: 56rem; 
   } 
   #services {
       left: 2rem;
   }
   .solid2 {
       left: 2rem;
       width: 3rem;
   }
   .solid3{
      left: 2.5rem;
      width: 1.5rem;
   }
   .vl {
       display: none;
   }
   .solid4 {
       display: none;
   }
   #services {
       width: 20rem;
   }
   .column1 {
       left: 3rem;
       top: 1rem;
       width: 88%;
   }
   .material-icons{
       left: 10rem;
   }
   .column2 {
    left: 2rem;
    top: 18rem;
    width: 88%;
   }
   .column3 {
    left: 2rem;
    top: 30.5rem;
    width: 88%;  
   }
   .column4 {
    left: 2rem;
    top: 43rem;
    width: 88%;
   }
   .footer {
    width: 500;
    top: 127.5rem;
    height:715px;
   }
   #contactme{
       left: 1rem;
       width: 20rem;
   }
   .solid5{
       left: 1rem;
       width: 3rem;
   }
   .solid6{
       left: 1.7rem;
       width: 1.5rem;
   }
   .material-icons.call {
       left: 5rem;
       top: 5rem;
   }
   .number {
       left: 3rem;
       top: 5rem;
       font-size: 1rem;
       width: 100px;
   }
   .material-icons.email {
       left: 17rem;
       top: 7rem;
}
   .email-index {
      left: 13rem;
      top: 1rem;
      font-size: 1rem;
      width: 150px;
}
    .material-icons.place {
      left: 11rem;
      top: 15rem;
}
    .place-info {
       left: 5rem;
       top: 18rem;
}
    #name{
      left: 1.5rem;
      top: 10rem;
}
    #email{
        left: 15.5rem;
        top: 23.3rem;
    }
    #subject{
        left: 1.5rem;
        top: 11rem;
        width: 27rem;
    }
    #textarea {
        left: 1.5rem;
        top: 12rem;
        width: 27rem;
    }
    #submit{
        left: 21rem;
        top: 13rem;
    }
}
    </style>
        <nav class="navbar navbar-expand-sm text-uppercase fixed-top  bg-dark" id="nav">
     <img src="{{asset('images/icon.png')}}" alt="icon" id="icon">  
     <a href="#" class="navbar-brand">Portfolio</a>      
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
       <span class="navbar-toggler-icon"><img src="{{asset('images/b-menu.png')}}" alt="burger-menu"></span>
     </button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link" href="#" id="home">Home </a>
              <a class="nav-item nav-link" href="#about">About Me</a>
              <a class="nav-item nav-link" href="#services">Services</a>
              <a class="nav-item nav-link" href="#contact">Contact</a>
            </div>
          </div>
        </nav>
    <section class="row">
    <div class="div2"></div>
        <div class="div1">
        <img class="rounded" src="{{asset('images/photo.jpg')}}" class="h-img" id="header-img">
        </div>
        <h1 id="h1">Hello</h1>
       <p id="whoiam">I am Ramazan</p>
       <button class="btn btn-danger btn-lg btn1" id="btn1" onclick="Alert()">Hire Me!</button>
       <div class="group">  
       <p class="p1">Front-end developer</p>
        <hr class="hr">
        <p class="p2">Graphical Designer</p>
       </div>
     <div class="social"><a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a></div>
    <!--About me-->
     <div class="aboutme">
         <h1 class="h1-about" id="about">About Me</h1>
         <hr class="solid">
         <hr class="solid1">
         <p class="col-sm-7 p3">I'm Ramazan and <b>Web Developer</b></p>
         <p class="col-sm-11 des1">Hi! My name is Yertayev Ramazan. I am a Web Developer, and I'm very passionate and dedicated to my work. With 0 years experience as a professional<br>
           Web developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process,<br> from discussion and collaboration.</p> 
          </div>
      <div class="block1">
         <div class="progress-header">
          <br> 
          <!--HTML, CSS-->
           <h5 class="col-sm-2 first-prog">HTML, CSS</h5>
         <div class="progress ">
           <div class="progress-bar bg-danger" style="width: 90%;">90%</div>
         </div><br>
           <!---JavaScript-->
         <h5 class="col-sm-2 first-prog">JavaScript</h5>
           <div class="progress">
             <div class="progress-bar bg-danger" style="width: 30%;">
              30%</div>
           </div><br>
           <!---Java-->
          <h5 class="col-sm-2 first-prog">Java</h5>
           <div class="progress">
            <div class="progress-bar bg-danger" style="width: 60%;">60%</div>
          </div><br>
            <!---PHP-->
          <h5 class="col-sm-2 first-prog">PHP</h5>
          <div class="progress">
            <div class="progress-bar bg-danger" style="width: 15%;">15%</div>
          </div></div>
         <ul class="list-group list-group1">
           <li class="list-group-item list-group-item-dark ">
             <h4>Name:</h4>
             Yertayev Ramazan
           </li>
           <li class="list-group-item list-group-item-dark">
            <h4>Birthday:</h4>
            03 December 2002
          </li>
          <li class="list-group-item list-group-item-dark">
            <h4>Website:</h4>
            www.domain.com
          </li>
          <li class="list-group-item list-group-item-dark">
            <h4>City:</h4>
            Nur-Sultan
          </li>
         </ul>
         <!---list-group-2-->
         <ul class="list-group list-group2">
          <li class="list-group-item list-group-item-dark ">
            <h4>Tel:</h4>
             +7 777 777 77 77
          </li>
          <li class="list-group-item list-group-item-dark">
           <h4>Email:</h4>
            190103009@gmail.com
         </li>
         <li class="list-group-item list-group-item-dark">
           <h4>Age:</h4>
           18
         </li>
         <li class="list-group-item list-group-item-dark">
           <h4>University:</h4>
           SDU
         </li>
        </ul>
      </div>
    <div class="block2">
          <h1 class="header-service" id="services">Services</h1>
         <div class="solid2"></div> 
         <div class="solid3"></div>
         <!--Web-design-->
         <div class="row">
          <div class="column column1">
            <div class="card">
              <i class="material-icons" style="position: relative;left: 180px;font-size: 40px; color: red;">computer</i>
              <h3>Web Design</h3>
              <p class="p4" style="color: black;">Lorem Ipsum is simply dummy <br>text of the printing and typesetting industry Lorem Ipsum.</p>
            </div>
          </div>
         </div>
          <div class="vl"></div>
        <!--Photography-->          
        <div class="row">
          <div class="column column2">
            <div class="card">
              <i class="material-icons" style="position: relative;left: 180px; font-size: 40px; color: red;">photographer</i>
              <h3>Photography</h3>
              <p class="p4" style="color: black;">Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry Lorem<br> Ipsum.</p>
            </div>
          </div>
          </div>
          <hr class="solid4">
        <!--Web-Developer-->
        <div class="row">
          <div class="column column3">
            <div class="card">
              <i class='material-icons' style='position: relative;left: 180px;font-size:40px;color:red'>border_colors</i>
              <h3>Logo design</h3>
              <p class="p4" style="color: black;">Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry Lorem<br> Ipsum.</p>
            </div>
          </div>
          </div>
        <!--Web-Developer-->
          <div class="row">
            <div class="column column4">
              <div class="card">
                <i class='material-icons' style='position: relative;left: 180px;font-size:40px;color:red'>videocam</i>
                <h3>Video Editor</h3>
                <p class="p4" style="color: black;">Lorem Ipsum is simply dummy<br>text of the printing and typesetting industry Lorem<br> Ipsum.</p>
              </div>
            </div>  
          </div>
      </div>
    </section>
    <footer>
      <div class="footer" id="contact">
       <h1 class="contact-header" id="contactme">Contact Me</h1>
       <div class="solid5"></div> 
       <div class="solid6"></div>
       <br>
       <i class="material-icons call" style="font-size: 45px; color: red;">call</i>
       <p class="number">&nbsp;&nbsp;Call me on <br>+7 777 77 77</p>

       <i class="material-icons email" style="font-size: 45px; color: red;">email</i>
       <p class="email-index">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:<br>190103009@stu.sdu.edu.kz</p>

       
       <i class="material-icons place" style="font-size: 45px; color: red;">place</i>
       <p class="place-info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Almaty, BlaBlaBla</p></p>

       <form method="GET" id="form">
         <input class="form-control" type="text" name="fname" id="name" placeholder="Name*" required>
         <input class="form-control email" type="text" name="email" id="email" placeholder="Email*" required>
         <input class="form-control" type="text" name="subject" placeholder="Subject*" id="subject" required>
         <textarea class="form-control " name="textarea" id="textarea"  rows="5" placeholder="Message*"></textarea>
        <input class="btn btn-dark btn-lg" type="submit" value="Send" id="submit">
      </form>
    </div>
      </footer>
      <script>
      function Alert() {
    window.alert("Hired!");
    var person = window.prompt("Please enter your name: ");
    if (person != null) {
        window.alert("Hello " + person + "." + " How are you?");
    }else{
        window.alert("User cancelled!");
    }
}</script>
</body>
</html>
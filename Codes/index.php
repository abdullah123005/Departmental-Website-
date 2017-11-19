<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" type="text.css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text.css" href="css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" type="text.css" href="css/css.index.css"/> 
<link rel="stylesheet" type="text.css" href="css/bootstrap.css"/>
</head> 

<body>

<div class="header">
<img src="pic/cse.jpg" alt=""/>
</div>

<div class="container">
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CSE_RUET</a>	  
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li>
                                <a href="http://localhost/new.php">Sign In</a>
                            </li>
                            <li>
                                <a href="">Admission</a>
                            </li>
                            <li>
                                <a href="">Recent Results</a>
                            </li>                           
                        </ul>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
						
						<ul class="dropdown-menu">
                            <li> <a href="upload.html">Books</a>
                            </li>
                           
                            <li>
                                <a href="upload.html">Syllabus</a>
                            </li>
                             </li>                      
                        </ul>
						
						
						
						
						<li><a href="">Facilities</a></li>
						<li><a href="faculty.php">Faculty Members</a></li>						
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="http://localhost/new1.php">Administration</a></li>
												
                    </li>		
								
		 
		
      </ul>
	  
	  <form class="navbar-form" role="search"  action="index.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search_location">
        </div>
        <button type="submit" class="btn btn-success" name="search">Search</button>
      </form>	  	  	  
    </div>
  </div>
</nav>
<div class="row">
<div class="col-sm-3">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="nav-side-menu">
    <div class="brand">About</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> About CSE Dept. <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="msg.php">MSG From Head</a></li>
                    <li><a href="#">Why CSE @RUET?</a></li>
                    
                </ul>

                <li data-toggle="collapse" data-target="#Students" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Students <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="Students">
                  <li class="active"><a href="result.php">Current Batches</a></li>
                  <li>Syllabus</li>
                  <li>Class Routine</li>
				   
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="upload.html"><i class="fa fa-car fa-lg"></i> Notice Board <span class="arrow"></span></a>
                </li>
				
				 <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Online Course <span class="arrow"></span></a>
                </li>
				
				 <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="staff.php"><i class="fa fa-car fa-lg"></i> Officers and Staffs <span class="arrow"></span></a>
                </li>
                 
				
				
				
            </ul>
     </div>
	 			 
</div>

</div>
<div class="col-sm-9 pull-right">
<div class="carousel slide" id="my-carousel" data-ride="carousel">

<ol class="carousel-indicators">
<li data-target="#my-carousel" data-slide-to="0"></li>
<li data-target="#my-carousel" data-slide-to="1"></li>
<li data-target="#my-carousel" data-slide-to="2"></li>
<li data-target="#my-carousel" data-slide-to="3"></li>
<li data-target="#my-carousel" data-slide-to="4"></li>
<li data-target="#my-carousel" data-slide-to="5"></li>
</ol>

<div class="carousel-inner">
<div class="item active">
<img src="pic/1.jpg"/ alt="Demo">
<div class="carousel-caption">
<h4>CSE DEPT</h4>
</div>
</div>
<div class="item">
<img src="pic/2.jpg" alt="Demo"/>
<div class="carousel-caption">
<h4>LAB</h4>
</div>
</div>
<div class="item">
<img src="pic/3.jpg" alt="Demo"/>
<div class="carousel-caption">
<h4>CLASS ROOM</h4>
</div>
</div>
<div class="item active">
<img src="pic/4.jpg"/ alt="Demo">
<div class="carousel-caption">
<h4>STUDENTS</h4>
</div>
</div>
<div class="item active">
<img src="pic/99.jpg"/ alt="Demo">
<div class="carousel-caption">
<h4>CSE DEPT</h4>
</div>
</div>
<div class="item active">
<img src="pic/6.jpg"/ alt="Demo">
<div class="carousel-caption">
<h4>CSE DEPT</h4>
</div>
</div>
</div>
<a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span
    <span class="sr-only"></span>
  </a>
</div>
</div>
</div>
<br> 
<br>


<div class="row">
<div class="col-sm-12">
<div class="content">

<h1>Dept. of Computer Science & Engineering</h1>
<p>
Computer engineering is a discipline that integrates several fields of electrical engineering and computer science required to develop computer hardware and software. Computer engineers are involved in many hardware and software aspects of computing, from the design of individual microprocessors, personal computers, and supercomputers, to circuit design.

</p>
<p>
Computer engineering is a relatively new field of engineering and is one of the fastest growing fields today. Computer engineering is one of today’s most technologically based jobs.


The field of computer engineering combines the knowledge of electrical engineering and computer science to create advanced computer systems. Computer engineering involves the process of designing and manufacturing computer central processors, memory systems, central processing units, and of peripheral devices.

Computer engineers work with CAD(computer aided design) programs and different computer languages so they can create and program computer systems.
</p>
<p>
Computer engineers use today’s best technology to create tomorrow’s. Computer engineers require a high level of training and intelligence to be skilled at their job. A bachelors degree from a college or university with a good computer engineering program computer science program is necessary.
</p>
</div>
</div>
</div>


<hr>
<hr>
<div class="row">
<p><strong><center>Follow Us On:</center></strong></p>
<ul class="list-inline text-center">
<li><a href="">Twitter</a></li>
<li><a href="">Facebook</a></li>
<li><a href="">LinkedIn</a><li>
</ul>
</div>

<div class="row">
<ul class="list-inline text-center">
<!-- <li><a href="">About Us</a></li> -->
<li><a href="">Terms & Policy</a></li>
<!-- <li><a href="">Contact Us</a><li> -->
</ul>
<p class="text-center muted">&copy;Copyright 2015,Sirajul Islam Abdullah</p>
</div>

<hr>
<hr>

</div>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>

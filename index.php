
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Philip I. Thomas Curriculum Vitae</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum Vitae for Philip I. Thomas">
    <meta name="author" content="Philip I. Thomas">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body data-spy="scroll" data-target=".navbar">

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            </a>
          <a class="brand" href="#">Curriculum Vitae</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#about">About</a></li>
              <li><a href="#education">Education</a></li>
              <li><a href="#experience">Experience</a></li>
              <li><a href="#technical">Technical</a></li>
              <li><a href="#honors">Honors</a></li>
              
            </ul>
            <div class="nav-collapse collapse pull-right">
            <ul class="nav">
              <li><a href="http://philipithomas.com" target="_blank>">Homepage</a></li>
              <li class="dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Links <i class="caret"></i>
                            </a>

                   <ul class="dropdown-menu ">
                                <li><a href="http://linkedin.com/in/philiptihomas" target="_blank">LinkedIn</a></li>
                <li><a href="http://github.com/philipithomas" target="_blank">Github</a></li>
                <li><a href="http://twitter.com/philipithomas" target="_blank"><i class="icon-off"></i> Sign Out</a></li>
            </ul>
               </li>
              <li><a href="/resume.pdf">Download PDF</a></li>          
            </ul>
            </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    <!-- Photo here soon -->
    <div class="row">
      <h1 style="text-align: center">Philip I. Thomas Curriculum Vitae</h1>
      <p></p>
    </div> <!-- end row -->
      
     <section id="about">
      <div class="row">

      <div class="page-header">
      <h2>About</h2>
      </div>
          </div> <!-- end row -->
          <div class="row">
      
      <div class="span12">Philip I. Thomas is a student and entrepreneur in St. Louis. He is currently in is senior year at Washington University in St. Louis, completing majors in Systems Engineering and Physics. After graduation in May 2013, he plans to pursuit a career in data analysis at a startup technology company.</div>
    </div> <!-- end row -->

      </section>

      <section id="education">
            <div class="row">

      <div class="page-header">
      <h2>Education</h2>
      </div>
    </div> <!-- end row -->
<?php
position("Washington University in Saint Louis","Saint Louis, MO","Bachelor of Science in Systems Engineering and Physics","Expected 5/13",'
<ul>
<li><span style="font-weight: bold">Honors:</span> J. Alan and Marcia K. Ritter Scholar.</li>
<li><span style="font-weight: bold">Relevant Coursework:</span> Operations Research, Stochastic Models, Signals Analysis.</li>
<li><span style="font-weight: bold">Senior Project:</span> Analysis of Aisle411 Usage Data <span style="font-style:italic">(In Progress)</span></li>
</ul>');
position("Case Western Reserve University","Cleveland, OH","Organic chemistry lecture and laboratory","6/10-8/10","");

?>

      </section>
      
      
      
      <section id="experience">
            <div class="row">

      <div class="page-header">
      <h2>Professional and Leadership Experience </h2>
      </div>
    </div> <!-- end row -->
    <?php
   
           ?>
    
    
      </section>
      
      <section id="technical">
            <div class="row">

      <div class="page-header">
      <h2>Technical</h2>
      </div>
    </div> <!-- end row -->
      
      
      </section>
      
      
      <section id="honors">
            <div class="row">

      <div class="page-header">
      <h2>Honors</h2>
      </div>
    </div> <!-- end row -->


      </section>
      
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  </body>
</html>

<?php

/* 

These are some functions to make uniform sections

*/

function position($company,$city,$job,$dates,$blob) {
	/*
	This function is for use in the experience section. It unififes formatting for the various positions. 
	*/
	
	echo '
		<div class="row" style="padding: 35px 0 4px 0;">
			<div class="span6"><h4 style="margin: 0">'.$company.'</h4></div>	
			<div class="span6"><h4 class="pull-right" style="margin: 0">'.$city.'</h4></div>
		</div> <!-- end row-->
			
		<div class="row">
			<div class="span6"><span style="font-style:italic; font-size: 15px;">'.$job.'</span></div>	
			<div class="span6"><span style="font-style:italic; font-size: 15px;" class="pull-right">'.$dates.'</span></div>
		</div> <!-- end row-->
		';
		if (!empty($blob)) {
			echo '
			<div class="row" style="padding-top: 8px;"><div class="span12">'.$blob.'</div></div>';
			}	
			
}
?>
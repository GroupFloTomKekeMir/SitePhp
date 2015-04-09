<?php  include('header.php'); ?>

 <?php var_dump($_SESSION['id']) ?>
 <style type="text/css">
            /* bootstrap 3 helpers */

.navbar-form input, .form-inline input {
	width:auto;
}

/* end */

/* custom theme */

header {
	min-height:230px;
  	margin-bottom:5px;
}

@media (min-width: 979px) {
  #sidebar.affix-top {
      position: static;
  }
  
  #sidebar.affix {
      position: fixed;
      top: 0;
      width:21.2%;
  }
}

.affix,.affix-top {
   position:static;
}

/* theme */

body {
  color:#828282;
  background-color:#eee;
}

a,a:hover {
	color:#ff3333;
  	text-decoration:none;
}

.highlight-bk {
	background-color:#ff3333;
    padding:1px;
    width:100%;
}

.highlight {
	color:#ff3333;
}
  
h3.highlight  {
	padding-top:13px;
    padding-bottom:14px;
  	border-bottom:2px solid #ff3333;
}

.navbar {
	background-color:#ff3333;
  	color:#ffffff;
    border:0;
  	border-radius:0;
}
.navbar-nav > li > a {
  	color:#fff;
  	padding-left:20px;
  	padding-right:20px;
  	border-left:1px solid #ee3333;
}
.navbar-nav > li > a:hover, .navbar-nav > li > a:focus {
    color:#666666; 
}
.navbar-nav > li:last-child > a {
  	border-right:1px solid #ee3333;
}
.navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
    color: #ffffff;
	background-color:transparent;
}
.navbar-nav > .open > a, .navbar-nav > .open > a:hover, .navbar-nav > .open > a:focus {
	color: #f0f0f0;
	background-color:transparent;
  	opacity:.9;
    border-color:#ff3333;
}

.nav .open > a {
    border-color:#777777;
    border-width:0;
}

.accordion-group {
	border-width:0;
}

.dropdown-menu {
	min-width: 250px;
}

.accordion-heading .accordion-toggle, .accordion-inner, .nav-stacked li > a {
	padding-left:1px;
}

.caret {
	color:#fff;
}

.navbar-toggle {
	color:#fff;
    border-width:0;
}
  
.navbar-toggle:hover {
	background-color:#fff;
}

.panel {
	padding-left:27px;
    padding-right:27px;
}

/* end theme */
        </style>

        <header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col col-sm-6">
        <h1><a href="#" title="scroll down for your viewing pleasure">MegaCasting</a>
          <p class="lead">Le leader dans le recrutement d'artistes</p></h1>
      </div>
      <div class="col col-sm-6">
        <div class="well pull-right">
          <img src="//placehold.it/280x100/E7E7E7">        
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col col-sm-12">
        
        <div class="panel">
        <div class="panel-body">
         MegaCasting vous permet de découvrir de nombreuses offres et de vous forger un vrai parcours profesionnel.
        </div>
        </div>
        
      </div>
  	</div>
  </div>
</header>

<!-- Begin Body -->
<div class="container">
	<div class="row">
  			<div class="col col-sm-3">
              	<div id="sidebar">
      			<ul class="nav nav-stacked">
                    <li><h3 class="highlight">A propos <i class="glyphicon glyphicon-dashboard pull-right"></i></h3></li>
                  	<li><a href="#">Twitter</a></li>
          			<li><a href="#">Facebook</a></li>
				</ul>
               </div>
      		</div>  
      		<div class="col col-sm-9">
              <div class="panel">
              <h1>Bienvenue</h1>
              
              <div class="row">
              	<div class="col col-sm-8">
                    <img src="./rideau2.jpg" class="img-responsive">
                </div> 
        		<div class="col col-sm-4">
                  <img src="//placehold.it/400x180/FF3333/FFF" class="img-responsive">
                  <h4>Aside</h4>
                  <hr>
                  <img src="//placehold.it/400x180/FF3333/FFF" class="img-responsive">
                  <h4>Aside 2</h4>
              	</div>   
              </div>
        
              	<h2>Titre 1 </h2>
                Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
             	</div>
      	</div> 
  	</div>
</div>
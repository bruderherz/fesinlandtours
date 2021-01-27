

<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from premiumlayers.com/demos/arkitekt/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 11 Jul 2015 17:36:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Arkitekt</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/revslider.css" media="screen">
  
  
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />


        <script type="text/javascript">
            $(document).ready(function() {

                $('#wrapper').dialog({
                    autoOpen: false,
                    title: 'Envoie-nous un message'
                });
                $('#opener').click(function() {
                    $('#wrapper').dialog('open');
//                  return false;
                });
				
				 $('#opener1').click(function() {
                    $('#wrapper').dialog('open');
//                  return false;
                });
				
				
				 $('#opener2').click(function() {
                    $('#wrapper').dialog('open');
//                  return false;
                });
				
				
				
				 $('#wface').dialog({
                    autoOpen: false,
                    title: 'Contactez-Nous sur:'
                });
                $('#oface').click(function() {
                    $('#wface').dialog('open');
//                  return false;
                });
				
				      $('#oface1').click(function() {
                    $('#wface').dialog('open');
//                  return false;
                });
				
				
				 $('#oface2').click(function() {
                    $('#wface').dialog('open');
//                  return false;
                });
            });
        </script>


 
  <link rel="stylesheet" href="css/dr-framework.css" type="text/css" media="screen">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,400italic,300italic,100italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  

<script type="text/javascript">
   var i=0;
    var e=0;
	var j=0;
	var z=0;
	
function increase()
{
i++;
document.getElementById('boldstuff').innerHTML= +i;
 
}

function increase1()
{
e++;
 
document.getElementById('boldstuff1').innerHTML= +e;
 
}

function increase2()
{
j++;
 
document.getElementById('boldstuff2').innerHTML= +j;
 
}
function increase3()
{
z++;
 
 
document.getElementById('boldstuff3').innerHTML= +z;
}
</script>

    


</head>
<body>


<div id="container">
  <header>
      <div class="sub-header clearfix">
		<div class="wrapper">
			<ul>
				<!--<li>
				<i class="fa fa-caret-square-o-right"></i><a href="#">terms & conditions</a>
				</li>-->
			<!--	<li>
				<i class="fa fa-caret-square-o-right"></i><a href="about.html">about us</a>
				</li>-->
				<li>
				<i class="fa fa-caret-square-o-right"></i><a href="#">S'identifier</a>
				</li>
			 <li>
				<i class="fa fa-caret-square-o-right"></i><a href="contact.php">Suivez-nous sur</a>
				</li>
                
                
                
			</ul>
			<div class="socials">
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
			</div>
		</div>
	</div>

   <?php include('include/menu.php');?>
  </header>
  <!--end header-->
  

  <div class="head-banner clearfix mb30">
    <div class="wrapper">
      <h4>Boutique</h4>
      <div class="site_map">
        <a href="index.php">Accueil</a><a href="contact.php">Contact</a>  
      </div>
      <div class="clear"></div>
    </div>
  </div>

  <div class="main-content wrapper dark">

      <div class="shop-content column9">
          <div class="toolbar">
            <!--<div class="sort-select">
              <label>Sort by</label>
              <select class="selectBox">
                <option>Position</option>
              </select>
            </div>-->
            <div class="sort-select">
              <label>Montrer</label>
              <select class="selectBox">
                <option>5 par page</option>
                <option>7 par page</option>
                <option>9 par page</option>
              </select>
            </div>
            <div class="lg-panel htabs">
              <a id="list" class="list-btn active" href="boutique.php" ><i class="fa fa-th-list"></i></a>  </div>
          </div>

          <div class="product-grid dark">
              <div class="grid-item-list">
                  <div class="view view-first left-img" style="width:265px; height:240px;">
                      <img src="images/s/shop1.jpeg" alt="shop1"  style="width:259px; height:240px;"/>
                  </div>
                  <div class="grid-item-text">
                    <h4>Product Name</h4>
                    <p>rum blanditiis odit voluptatem mollitia consectetur explicabo um blanditiis odit voluptatem mollitia consectetur explicabo  vel aliquid animi nostrum perspiciatis quo </p>
                    
                    
                    
                  
                    <div class="end-product">
                      <div class="price">25.00</div>
                      <a onclick="increase();" ><i class="fa fa-heart"></i><b id="boldstuff"></b></a>
                      <a><i id="opener1" >interéssé(e)</i></a>
                      <a ><i id="oface1" class="fa fa-random"></i></a>
                      
 

                    </div>
                  </div>
                 
                  <div class="clear"></div>
              </div>
              <!-- End Grid List View -->
              <div class="grid-item-list" >
                  <div class="view view-first left-img" style="width:265px; height:240px;">
                      <img src="images/s/shop2.jpeg" alt="shop1"  style="width:259px; height:240px;"/>
                  </div>
                  <div class="grid-item-text">
                    <h4>Product Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quidem vel atque nemo quo repellat consectetur non modi aperiam. Est, beatae, pr?</p>
                     <div class="end-product">
                      <div class="price">25.00</div>
                     <a  onclick="increase1();" ><i class="fa fa-heart"></i><b id="boldstuff1"></b></a>
                     
                      
                      
                   
                      
                      <a><i id="opener">interéssé(e)</i></a>
<div id="wrapper">
 <div class="send-message">
						<form id="contact-form" >
							
							<div class="text-fields" >
								<div class="float-input" style="padding-left: 0px;">
									<input name="name" id="name" type="text" placeholder="Nom">
								</div>
								<div class="float-input"  style="padding-left: 0px;">
									<input name="mail" id="mail" type="text" placeholder="Email">
								</div>
							</div>
							<div class="submit-area">
								<textarea name="comment" id="comment" placeholder="Message"></textarea>
								
								<div id="msg" class="message">
								</div>
							</div>
                            <div style="margin-top:48px;">
                            <input type="submit" id="submit_contact" class="main-button" value="Envoyer">
                            
                            </div>
						</form>
					</div>
</div>

<div id="wface">
 <div class="send-message">
						<form id="contact-form" >
							
							<div class="text-fields" >
								 
								<div class="float-input"  style="padding-left: 0px;">
									<div style="margin-left:20px; ">
                     <table height="66" ><tr>
                     <td><a href="#"><img src="images/maroc/t1.jpg" width="40" height="40" title="Maroc : +212 012 34 562"></a></td>
                     <td><a href="#"><img src="images/maroc/skyp.jpg" width="40" height="40" title="Levillagetudiant"></a></td>
                    
                     <td><a href="#"><img src="images/maroc/facebook.gif" width="40" height="40" title="Visitez notre page Facebook Villagetudiant"></a></td> 
                    
                     <td><a href="#"><img src="images/maroc/g1.gif" width="40" height="40" title="levillagetudiant@gmail.com"></a></td>
                      <td><a href="#"><img src="images/maroc/youtube.jpg" width="40" height="40" title="Recevez les dernières nouvelles"></a></td>
                         
                      
                      
                            
                         
                         
                     </tr></table>
                     </div>
                                    
								</div>
							</div>
							 
                            <div style="margin-top:48px;">
                             
                            
                            </div>
						</form>
					</div>
</div>
                     <a ><i id="oface" class="fa fa-random"></i></a>
                      
                    
                     
                    </div>
                  </div>
                  
                   
                  <div class="clear"></div>
              </div>
              
               <div class="grid-item-list" >
                  <div class="view view-first left-img" style="width:265px; height:240px;">
                      <img src="images/s/shop2.jpeg" alt="shop1"  style="width:259px; height:240px;"/>
                  </div>
                  <div class="grid-item-text">
                    <h4>Product Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quidem vel atque nemo quo repellat consectetur non modi aperiam. Est, beatae, pr?</p>
                     <div class="end-product">
                      <div class="price">25.00</div>
                     <a onclick="increase2();" ><i class="fa fa-heart" ></i><b id="boldstuff2"></b></a>
                      <a><i id="opener2">interéssé(e)</i></a>
                   
                       <a ><i id="oface2" class="fa fa-random"></i></a>
                     
                    </div>
                  </div>
                  <div class="clear"></div>
              </div>
              <!-- End Grid List View -->
             <!-- <div class="grid-item-list">
                  <div class="view view-first left-img">
                      <img src="images/shop3.jpg" alt="shop1" />
                  </div>
                  <div class="grid-item-text">
                    <h4>Product Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quidem vel atque nemo quo repellat consectetur non modi aperiam. Est, beatae, provident neque </p>
                    <div class="end-product">
                         <div class="price">25.00</div>
                      <a href="#"><i class="fa fa-heart"></i></a>
                       <a href="11.php" class="prod-detail">interéssé(e)</a>
                      <a href="#"><i class="fa fa-random"></i></a>
                     
                    </div>
                  </div>
                  <div class="clear"></div>
              </div>-->
              <!-- End Grid List View -->
             <!-- <div class="grid-item-list">
                  <div class="view view-first left-img">
                      <img src="images/shop4.jpg" alt="shop1" />
                  </div>
                  <div class="grid-item-text">
                    <h4>Product Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quidem vel atque nemo quo repellat consectetur non modi aperiam. Est, beatae, provident </p>
                    <div class="end-product">
                       <div class="price">25.00</div>
                      <a href="#"><i class="fa fa-heart"></i></a>
                       <a href="11.php" class="prod-detail">interéssé(e)</a>
                      <a href="#"><i class="fa fa-random"></i></a>
                     
                    </div>
                  </div>
                  <div class="clear"></div>
              </div>-->
              <!-- End Grid List View -->
          </div>
            
          <!-- End Product Grid -->
          <div class="pagenation clearfix">
            <ul>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>
          </div>
      </div>
   
      <?php include('include/categorie.php');?>
      <!-- End Home Blog -->   

      <div class="clear"></div>

  </div>
 
  <div class="info-box">
    <a class="info-toggle" href="#"><i class="fa fa-info-circle"></i></a>
    <div class="info-content">
      <ul>
        <li><i class="fa fa-phone"></i>9930 1234 5679</li>
        <li><i class="fa fa-envelope"></i><a href="#">contact@domain.com</a></li>
        <li><i class="fa fa-home"></i>street address example</li>
      </ul>
    </div>
  </div>

   <?php include('include/footer.php');?>
  <!--end footer-->

</div>
<!-- End Id Container -->

  <div class="preloader">

  </div>


  <!-- include jQuery -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/accordion.js"></script>
  <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="js/jquery.superfish.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#slider" ).slider();
  });
  </script>
  <script src="js/jquery.bxslider.js"></script>
  <script src="js/twitter.js"></script>

      <!-- include jQuery + carouFredSel plugin -->
    <script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>

    <!-- optionally include helper plugins -->
    <script type="text/javascript" language="javascript" src="js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.touchSwipe.min.js"></script>


  <script type="text/javascript" src="js/script.js"></script>



</body>

<!-- Mirrored from premiumlayers.com/demos/arkitekt/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 11 Jul 2015 17:36:43 GMT -->
</html>
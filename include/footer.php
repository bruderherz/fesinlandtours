<?php
if(isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['message']) )
{
        $destinataire = 'progabdou@gmail.com';
        $email = htmlentities($_POST['email']);
        if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email)))
        {
			
                $nom = 'Contact: '.stripslashes($_POST['nom']);
                $message = stripslashes($_POST['message']);
              
				$headers = "From: <".$email.">\n";
                $headers .= "Reply-To: ".$email."\n";
				
                $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
                if(mail($destinataire,$snom,$message,$headers))
                {
                        echo '<strong><p>Votre message a bien &eacute;t&eacute; envoy&eacute;</p><p><a href=boutique.php>Revenir au formulaire</a></p><p></br><a href="boutique.php">Revenir à l\'accueil</a></strong>';
                }
               
        }
        else
        {
                echo '<strong style=\"color:#ff0000;\"><p>L\'email que vous avez entr&eacute; est invalide.</p><p><a href=boutique.php>Revenir au formulaire</a></strong>';
        }
}
else
{
?>
<?php
  

  
?>
<footer>
	<div class="inner-footer">
		<div class="wrapper clearfix">
			<div class="dark">
				<div class="column3 message-form">
					<img src="images/logo2.png" alt="">
					<p style="font-size: 15px;">
						Intéragir avec nous sur ton choix.</p><b style="font-size: 13px;
    font-family: 'Roboto';
    font-weight: 100;
    color: #fff;
    border-bottom: 1px solid #444b51;
    padding-bottom: 15px;
    margin-bottom: 15px;
    margin-top: 15px;
    line-height: 22px;"> A votre service.
					</b>
					<div class="send-message">
						<form id="contact-form">
							<h4>Envoie-nous un message</h4>
							<div class="text-fields">
								<div class="float-input">
									<input name="name" id="name" type="text" placeholder="Nom">
								</div>
								<div class="float-input">
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
                        
                         <?php
}
?>
					</div>
				</div>
			  <div class="column3 contact">
					<div class="singup">
						<h4>INSCRIPTION À LA NEWSLETTER</h4>
						<p>
							Profitez de recevoir les nouveautés, promotion et d’autres offres exceptionnelles en privés. 
						</p>
						<form method="post" id="newsletter_subscribe" name="newsletter_form">
							<input type="text" name="nl-email" id="nl-email" value="" placeholder="Address@email.com"/>
							<input type="submit" name="submit" id="nl-submit" value="Soumettre" style="margin-top:39px;"/>
						</form>
					</div>
				</div>
				<div class="column3 third-row">
				<div class="flickr">
						<h4>Aimez nous sur Facebook</h4>
						<ul class="dark clearfix">
							<li class="column4"><a href="#"><img src="images/flickr2.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="images/flickr3.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="images/flickr4.jpg" alt=""></a></li>
						</ul>
						<ul class="dark clearfix">
							<li class="column4"><a href="#"><img src="images/flickr5.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="images/flickr2.jpg" alt=""></a></li>
							<li class="column4"><a href="#"><img src="images/flickr3.jpg" alt=""></a></li>
						</ul>
					</div>
					
				</div>
				
			</div>
			<!-- End Dark -->
		</div>
	</div>
	<!-- End Inner Footer -->
	<div class="last-div clearfix">
		<div class="wrapper">
			<div class="copyright">
				 © 2014 Arkitekt, All Rights Reserved
			</div>
			<div id="back-to-top">
				<a href="#top">Back to Top</a>
			</div>
			<div class="f-socials">
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
			</div>
		</div>
	</div>
	<!-- End Last Div -->
	</footer>
	<!--end footer-->
</div>
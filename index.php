

<?php include_once 'mail.php';?>

<html>
<head>
<meta charset="UTF-8">
<title>Julien Budin - Développeur Web</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google" value="notranslate">
<meta name="author" content="Julien Budin">


<meta name="description" content="Si vous cherchez un freelance pour designer et intégrer vos sites vitrine ou one-page, en responsive ou non, vous avez trouvé.
Refonte - Base de Donée - Responsive" />
<META name="keywords" content="julien budin, integrateur, web, developpeur, freelance, interateur troyes, troyes">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/styles.css">

<script src="js/bootstrap.js"></script>


<script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
<script src="js/bootstrap-portfilter.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
<script src="js/bootstrap-contact.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56264592-1', 'auto');
  ga('send', 'pageview');

</script>
<script>
$(document).ready(function () {
	if ( $(window).width() > 768) {

		$(window).scroll(function(){
	        var ScrollTop = parseInt($(window).scrollTop());
	        
	        if (ScrollTop < 100) {
	            $('.navbar').css('background-color', "transparent");
	            $('.navbar-brand').css('color', "white");
	            $('.navbar-default .navbar-nav a  ').css('color', "white");
	            //$('.photo_moi').css('display', "block");

	        };

	        if (ScrollTop > 10) {
	            $('.navbar').css('background-color', "#e7e7e7");
	            $('.navbar-brand').css('color', "black");
	            $('.navbar-default .navbar-nav a  ').css('color', "black");
	            //$('.photo_moi').css('display', "block");
 
	        };
	    });
	}
	else {
		$('.navbar').css('background-color', "#e7e7e7");
	            $('.navbar-brand').css('color', "black");
	            $('.navbar-default .navbar-nav a  ').css('color', "black");
	            $('.jesuis').css('padding-top', 100);
	            //$('.photo_moi').css('display', "block");
	}

	    
});
</script>

<script type="text/javascript">
$(document).ready(function(){
	$('body').localScroll(300);


})

$(document).ready(function(){
 
	$("[rel='tooltip']").tooltip();	
 
	$('#hover-cap-4col .thumbnail').hover(
		function(){
			$(this).find('.caption').fadeIn(250); //.fadeIn(250)
		},
		function(){
			$(this).find('.caption').fadeOut(205); //.fadeOut(205)
		}
	);	
 
});

$(function(){
    $('.categories a').click(function(e){
    	$('.categories ul li').removeClass('active');
    	$(this).parent('li').addClass('active');
    	var itemSelected = $(this).attr('data-filter');
    	$('.portfolio-item').each(function(){
    		if (itemSelected == '*'){
    			$(this).removeClass('filtered').removeClass('selected');
    			return;
    		} else if($(this).is(itemSelected)){
    			$(this).removeClass('filtered').addClass('selected');
    		} else{
    			$(this).removeClass('selected').addClass('filtered');
    		}
    	});
    });
});


</script>




<script>
$('body').scrollspy({
    target: '.navbar-fixed-top'
})
</script>

<script>
$(document).ready(function() {
    $(document).ready(function(){
	$("#formulaire").submit(function(){
		$.ajax({type:"POST", data: $(this).serialize(), url:"mail.php", 

		});
		return false;
	});
});
});
</script>
<script>
$('a.taphover').on("touchstart", function (e) {
    "use strict"; //satisfy the code inspectors
    var link = $(this); //preselect the link
    if (link.hasClass('hover')) {
        return true;
    } else {
        link.addClass("hover");
        $('a.taphover').not(this).removeClass("hover");
        e.preventDefault();
        return false; //extra, and to make sure the function has consistent return points
    }
});
</script>
</head>
<body id="page-top" class="index">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			<img src="img/photo.jpg" class="photo_moi" width="50px;">
      <a class="navbar-brand page-scroll" href="#page-top">Julien Budin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" id="myScrollspy">
      <ul class="nav navbar-nav navbar-right">
      	
        
        <li><a class="page-scroll" href="#accueil">Accueil</a></li>
        <li><a class="page-scroll" href="#competences">Compétences</a></li>
        <li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
        <li><a class="page-scroll" href="#contact">Contact</a></li>
      </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<header id="accueil">
	<div class="contain mobile">
		
		<p class="jesuis">Je suis</p>
		<p class="integrateur">Intégrateur / Développeur Web</p>
		<a class="center-block bloc" href="#portfolio">Mon portfolio</a>
		
		
	</div>
</header>


<section class="no-padding" id="competences">
	<div class="container-fluid">
	<h1>Compétences</h1>
	<hr class="hr_title">
	<div class="col-xs-12 col-sm-4 col-md-4 col-ld-4">
		<div class="competences"><img src="img/web.svg">
			<h3>Développeur Front-End</h3>
			Intégration Web (HTML5 / CCS3)<br>
			Responsive Design, jQuery<br>
			Framework : Bootstrap</div>
		
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-ld-4">
		<div class="competences"><img src="img/data.svg">
			<h3>Développeur Back-End</h3>
			Déploiement de CMS<br>
			PHP, SQL, Base de donnée<br>
			CMS : Wordpress, Prestashop</div>
		
	</div>
	<div class="col-xs-12 col-sm-4 col-md-4 col-ld-4">
		<div class="competences"><img src="img/responsive.svg">
			<h3>Responsive</h3>
			Le Responsive Design ?<br>
			Un site visible sur tous type de plateforme<br>
			Adaptation des sites sur Smartphone et Tablette<br>

		</div>
	</div>
	</div>
</section>

    <section class="no-padding" id="portfolio">
    	<h1>Portfolio</h1>
	<hr class="hr_title">
	<div class="row" style="margin-left:0px;margin-right:0px;">
		<div class="center-block" style="width:180px;">
					<span class="bloc">All</span>
				<button class="btn btn-small btn-default" data-toggle="portfilter" data-target="all">
					All
				</button>
				<button class="btn btn-small btn-default" data-toggle="portfilter" data-target="web">
					Web
				</button>
				<button class="btn btn-small btn-default" data-toggle="portfilter" data-target="video">
					Vidéo
				</button>
			</div>
				
			</div>
	</div>
        <div class="container-fluid">

            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6 no-padding" data-tag="web" style="padding:0px;margin-bottom:-20px">
                    <ul class="thumbnails" id="hover-cap-4col" style="padding-left:0px;">
						<li class="span3" style="list-style:none" data-tag='web'>
						  <div class="thumbnail no-border">
						  	<a href="http://www.julienbudin.fr/lea" style="color:white;">
						    <div class="caption">
						    	<h4>Léa Deglesne</h4>
						        <hr>
						        <h4>Site Web, Photographie</h4>
						        <p></p>
						    </div></a>
						    <img src="img/photo_lea.jpg" alt="Léa Deglesne">
						  </div>
						</li>
					</ul>
                </div>
                <div class="col-lg-4 col-sm-6 no-padding" data-tag="video" style="padding:0px;margin-bottom:-20px">
                    <ul class="thumbnails" id="hover-cap-4col" style="padding-left:0px;">
						<li class="span3" style="list-style:none" data-tag='video'>
						  <div class="thumbnail no-border">
						  	<a href="video/projet_video.mp4" style="color:white;">
						    <div class="caption">
						    	<h4>Memento</h4>
						        <hr>
						        <h4>Audiovisuel</h4>
						        <p></p>
						    </div></a>
						    <img src="img/memento.png" alt="Memento">
						  </div>
						</li>
					</ul>
                </div>
                <div class="col-lg-4 col-sm-6 no-padding" data-tag="all" style="padding:0px">
                    <ul class="thumbnails " id="hover-cap-4col" style="padding-left:0px;">
						<li class="span3" style="list-style:none" data-tag='all'>
						  <div class="thumbnail no-border">
						  	<a href="http://www.julienbudin.fr/lea" style="color:white;">
						    <div class="caption">
						    	<h4>Coming soon...</h4>
						        <hr>
						        <h4></h4>
						        <p></p>
						    </div></a>
						    <img src="img/coming.png" alt="Léa Deglesne">
						  </div>
						</li>
					</ul>
                </div>
                
            </div>
        </div>
    </section>




<section id="contact">
	<div class="row" style="margin-left:0px;margin-right:0px;"></div>
	<div class="contain">
		<h1>Contact</h1>
		<hr class="hr_title">
		<div class="col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-ld-8 col-ld-offset-2">
					

			<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
	          <fieldset>
	            

	            <?php if(isset($hasError)) { //If errors are found ?>
	              <p class="alert alert-danger">Vérifiez si vous avez rempli tous les champs avec des informations valides et réessayez. Je vous remercie.</p>
	            <?php } ?>

	            <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
	              <div class="alert alert-success">
	                <p><strong>Votre message a été envoyé !</strong></p>
	                <p>Merci de nous avoir écrit, <strong><?php echo $name;?></strong> ! Votre email a été envoyé avec succès et nous&rsquo;vous répondrons dans les meilleurs délais.</p>
	              </div>
	            <?php } ?>

	            <div class="form-group">
	              <label for="name">Nom <span class="help-required">*</span></label>
	              <input type="text" name="contactname" id="contactname" value="" class="form-control required" role="input" aria-required="true" />
	            </div>
	            
	            <div class="form-group ">
			  		<label class="control-label" for="">E-mail*</label>
			 		<div class="input-group">
			   		<span class="input-group-addon">@</span>
			    	<input type="text" name="email" id="email" value="" class="form-control required email" role="input" aria-required="true" />
			  		</div>
				</div>

	            <div class="form-group">
	              <label for="subject">Sujet <span class="help-required">*</span></label>

	              <input type="text" name="subject" id="subject" value="" class="form-control required" role="input" aria-required="true" />
	            </div>            

	            <div class="form-group">
	              <label for="message">Votre message <span class="help-required">*</span></label>
	              <textarea rows="8" name="message" id="message" class="form-control required" role="textbox" aria-required="true" placeholder="S'il vous plaît, indiquez autant de détails que possible. Merci"></textarea>
	            </div>
	            
	            <div class="actions">
	              <input type="submit" value="Tu l'envoies ce message !" name="submit" id="submitButton" class="btn btn-default" title="Cliquez ici pour envoyer votre message!" />
	              
	            </div>
	          </fieldset>
	        </form>


		</div>
	</div>
	</div>
</section>

<div class="row" style="margin-left:0px;margin-right:0px;"></div>
<div class="contain">
	<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12" style="padding-left:0px;padding-right:0px;">
	<footer>
		<!--<p class="coypright"> © Copyright - 2015</p>-->
		contact@julienbudin.fr<br>
		Sur les réseaux sociaux
		<div class="social">
			<a href=""><img src="img/facebook.svg" alt="facebook"></a>
			<a href=""><img src="img/twitter.svg" alt="twitter"></a>
			<a href=""><img src="img/linkedin.svg" alt="linkedin"></a>
		</div>
		

	</footer>
	</div>
</div>



	
</body>

</html>
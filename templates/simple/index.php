<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php 
	echo defined('DEFAULT_CHARSET') ? DEFAULT_CHARSET : 'utf-8'; ?>" />
	<meta name="description" content="<?php page_description(); ?>" />
	<meta name="keywords" content="<?php page_keywords(); ?>" />
    
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php
		echo TEMPLATE_DIR; ?>/template.css" media="screen,projection" />
	<link rel="stylesheet" type="text/css" href="<?php
		echo TEMPLATE_DIR; ?>/print.css" media="print" />
	<title><?php page_title('', '[WEBSITE_TITLE]'); ?></title>
	<?php
	// automatically include optional WB module files (frontend.css, frontend.js)
	if (function_exists('register_frontend_modfiles')) {
		register_frontend_modfiles('css');
		// register_frontend_modfiles('jquery');
		register_frontend_modfiles('js');
	} ?>
    
    <script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/jquery2.js"></script>	<!-- javascript til topbanner -->
	<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/slide.js"></script>	<!-- javascript til topbanner -->
	<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/jquery.js"></script>	<!-- henter jquery -->
	<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/menueffekt.js"></script>	<!-- henter javascript for menueffekten --> 
  
<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/menueffekt.js"></script>	<!-- henter javascript for menueffekten -->
	<!--[if IE]>
	<style type="text/css" media="all">
		body{behavior:url("<?php echo TEMPLATE_DIR; ?>/scripts/csshover.htc");}
	</style>
<![endif]-->

</head>
<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper">

		
    <a href="../index.php"><div id="logotop">&nbsp;</div></a>
		<div id="nav" class="clearfix">
			<?php show_menu2(0, SM2_ROOT, SM2_ALL, SM2_ALL, false, "\n</li>", false, false, false, '<ul id="header_menu" class="menu">'); ?>
		</div>
	
   
	<div id="contentrightwrapper">
		<div class="fb-like-box" data-href="https://www.facebook.com/jifhakoah" data-width="275" data-height="500" data-show-faces="true" data-stream="true" data-header="true"></div>
       
	</div>

      
	<div id="content">
	
		<div id="contentleftwrapper">
		<div class="toph1box">
			<h1><?php page_title('','[PAGE_TITLE]'); ?></h1>
		</div>
			<div class="textwrapper">
            	<div style="width:668px; height:4px; position:relative; margin-left:-40px; margin-top:-20px; margin-bottom:25px;"><img src="<?php echo TEMPLATE_DIR; ?>/images/content_shadow_top.png" /></div>
				<?php page_content(); ?>
			</div>
		</div>
		
	</div>
  </div>      
<div id="footer">
	<div id="footercontentwrapper">
		<div id="footercontentleft">
        <img src="<?php echo TEMPLATE_DIR; ?>/images/footerlogo.png" /><br/>
        <p>JIF Hakoah<br/>
		Alfevej 5A<br/>
		2730 Herlevv</p>
        </div>
        <div id="footercontentcenter">
        <h2>Kontakt os</h2>
        <b>E-mail:</b> <br />hakoah@hakoah.dk
        </div>
        <div id="footercontentright">
        <p style="font-size:12px; color:#686868; margin-top:0px;">Website by:</p>
        <div id="crunchlogo"><a href="http://wearecrunch.dk" target="_blank"/>
        &nbsp;</a>
<img src="https://track.adform.net/Serving/TrackPoint/?pm=447118&ADFPageName=pixel&ADFdivider=|" width="1" height="1" alt="" />
        </div>
    </div>
</div>

</div>


</body>
</html>
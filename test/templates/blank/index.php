<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
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
	<script type="text/javascript" src="<?php
		echo TEMPLATE_DIR; ?>/scripts/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="<?php
		echo TEMPLATE_DIR; ?>/scripts/jquery.cycle.all.js"></script>
	
	<script type="text/javascript">
        $(document).ready(function() {
                $('#slideshow').cycle({ 
		fx: 'scrollLeft', 
                speed:  'slow',
                timeout: 5000,
                pager:  '#slideshownav',
		pause: true,
		pauseOnPagerHover: true,
		});
                
            
        });
	</script>
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
  js.src = "//connect.facebook.net/da_DK/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper">
	<div id="header">	
		<div id="logotop"><a href="./index.php">
        &nbsp;</a>
        </div>
		<div id="nav" class="clearfix">
			<?php show_menu2(0, SM2_ROOT, SM2_ALL, SM2_ALL, false, "\n</li>", false, false, false, '<ul id="header_menu" class="menu">'); ?>
		</div>
		
	</div>
	
	<div id="content">
		
		<div id="callme">
			<div id="callmetext">
			
			
			</div>
			<div id="callmebuttonwrap"><a href="#"><button id="callmebutton">
			RING MIG OP
			</button></a></div>
		</div>
		
		
		<div id="contentleftwrapper">
		<div class="toph1box">
			<h1><?php page_title('','[PAGE_TITLE]'); ?></h1>
		</div>
		<div id="middlecontent">			
			<div class="textwrapper">
				<?php page_content(); ?>
			</div>
		</div>
		</div>
		<div id="contentrightwrapper">
		<div class="toph1box2">
			
		</div>
		<div id="rightcontent">
		</div>
		</div>
	</div>
	
	</div>
    
</div>


<div id="footer">
	<div id="footercontentwrapper">
		<div id="footercontentleft">
        <h2>Crunch I/S</h2>
        <p>Thorvaldsensvej 14 st. th.<br/>
        1871 Frederiksberg C<br/><br/>
        
        E-mail: crunch@wearecrunch.dk<br/>
        Telefon: +45 27 37 81 28
        </p>
        </div>
        <div id="footercontentcenter">
        <h2>Hold kontakten</h2>
        <div id="facebookicon">
        <a href="https://www.facebook.com/wearecrunch" target="_blank">&nbsp;</a>
        </div>
        <br/>
        <br/>
        <br/>
        <p>
        F&oslash;lg os p&aring; Facebook
        </p>
        </div>
        <div id="footercontentright">
        <?php if(SHOW_MENU) {page_menu(0, 1, '[a][menu_title][/a]', '', '', '', '');} ?>
        </div>
    </div>
</div>
</body>
</html>
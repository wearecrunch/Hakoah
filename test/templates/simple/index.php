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
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
	ob_start();		
	page_content(1);
	$page_content_1 = ob_get_contents();
	ob_end_clean();
	
	
	
	if(defined('TOPIC_BLOCK2') AND TOPIC_BLOCK2 != '') { 
		 	$page_content_2 = TOPIC_BLOCK2; 
	} else {
		ob_start();
		page_content(2);
		$page_content_2 = ob_get_contents();
		ob_end_clean();
	}
	
	/*Menüs*/
	ob_start(); 
	show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL, '<li class="[class]"><a href="[url]" class="[class]"><span>[menu_title]</span></a>', "</li>", '<ul>', '<li class="ulend"></li></ul>', true, '<ul id="mobile" class="nav">');
	$topmenu = ob_get_contents().'';
	ob_end_clean();
	
?>

<div id="wrapper">
	<div id="header">	
		<a href="http://hakoah.dk/index.php/"><div id="logotop">&nbsp;</div></a>
		<div id="nav" class="clearfix">
			<?php show_menu2(0, SM2_ROOT, SM2_ALL, SM2_ALL, false, "\n</li>", false, false, false, '<ul id="header_menu" class="menu">'); ?>
		</div>
		
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
		2730 Herlev</p>
        </div>
        <div id="footercontentcenter">
        <h2>Kontakt os</h2>
        <b>E-mail:</b> <br />jifhakoah@tiscali.dk
        </div>
        <div id="footercontentright">
        <p style="font-size:12px; color:#686868; margin-top:0px;">Website by:</p>
        <div id="crunchlogo"><a href="http://wearecrunch.dk" target="_blank"/>
        &nbsp;</a>
        </div>
    </div>
</div>
</body>
</html>
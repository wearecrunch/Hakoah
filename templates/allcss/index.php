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
	
?>
<div id="header">	
	&nbsp;
</div>
<div id="wrapper">

	
    <a href="#"><div id="logotop">&nbsp;</div></a>
		<div id="nav" class="clearfix">
			<?php show_menu2(0, SM2_ROOT, SM2_ALL, SM2_ALL, false, "\n</li>", false, false, false, '<ul id="header_menu" class="menu">'); ?>
		</div>
	
   
	

      
	<div id="content">
      <div style="width:966px; height:3px; position:relative; margin-left:-3px; margin-top:-3px; margin-bottom:0px;"><img src="<?php echo TEMPLATE_DIR; ?>/images/content_shadow_top.png" /></div>
   
         <h1 style="font-weight:normal; text-transform:uppercase; font-size:34px; padding:30px 0 0 60px;"><?php page_title('','[PAGE_TITLE]'); ?></h1>
<?php if ($page_content_2 != '') {
		echo '<div style="width:500px; float:left; padding:0px 30px 30px 60px;">'.$page_content_1.'</div>
		<div style="float:right; width:275px; padding: 0 60px 30px 30px;">'.$page_content_2.'</div>';
	} else {
		echo '<div style="width:500px; float:left; padding:0px 30px 30px 60px;">'.$page_content_1.'</div>';
	}
?>

		
		
		</div>
        
<div id="footer">
	<div id="footercontentwrapper">
		<div id="footercontentleft">
        <p>Aurora - Email: -
		Telefon: +45 22 22 22 22
        </p>
        </div>
        <div id="footercontentright">
        <div id="crunchlogo"><a href="http://wearecrunch.dk" target="_blank"/>
<p style="font-size:12px; color:#fff; margin-top:7px; float:left; margin-left:-76px;">Website by:</p>
        </a>
        </div>
    </div>
</div>

</div>


</body>
</html>
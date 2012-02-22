<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="<?php  echo LANGUAGE?>" xmlns="http://www.w3.org/1999/xhtml">

<head>

<link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('css/main.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('css/reset.css')?>" />
<link href='http://fonts.googleapis.com/css?family=Vast+Shadow|Lobster+Two|Gentium+Basic:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Amatic+SC'rel='stylesheet' type='text/css'/>

<?php   Loader::element('header_required'); ?>
</head>

<body>

	<div id="overallcontainer">
	
		<div id="topcontainer">
		
			<div id="titlecontainer">
				
				<a href="<?php  echo DIR_REL?>/"><?php  
				
				  
					if (!class_exists ('GlobalArea', false)){
					$block = Block::getByName('My_Site_Name');  
						if( $block && $block->bID ) $block->display();
						$ah->display($c);
					}
					elseif (class_exists('GlobalArea')) {
						$a = new GlobalArea('Site Name');
						$a->display();   
					}
					else echo SITE;
				
			?></a>
							
			</div>
			
			<div id="main_nav_container">
			
				<div id="main_nav_list">
					
					<?php  
						$a = new GlobalArea('Header Nav');
						$a->display();
					?>
	
				</div>
				
			</div>
			
		</div>
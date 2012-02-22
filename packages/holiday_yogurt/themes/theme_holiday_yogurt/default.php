<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

		<div id="maincontainer">
		
			<div id="maincontainer_contents_detail">
				
				<?php  
					$a = new Area('Main');
					$a->display($c);
				?>							
				
			</div>
			
			<div id="maincontainer_contents_sidebar">
		
				<?php  
					$a = new Area('Sidebar');
					$a->display($c);
				?>

			</div>
			
		</div>

<?php   
	$this->inc('elements/footer.php'); 
?>
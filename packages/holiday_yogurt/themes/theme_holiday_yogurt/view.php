<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

		<div id="maincontainer">
		
			<div id="maincontainer_contents_fullpage">
				
				<?php  
					print $innerContent;
				?>	
										
			</div>

		</div>

<?php   $this->inc('elements/footer.php'); ?>
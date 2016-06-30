<?php

require_once('required.php');

include("head.php");

$viewCategory = Atomic::getValue('v');
?>
	<body class="atoms">


<div class="grid-row atoms-container">
	<?php include("sidebar.php"); ?>
	
	<div class="atoms-main">
		<?php
		if( $viewCategory ) {
			$Atomic->includeCategoryComponents($viewCategory);
		}
		?>
	</div>

</div>
<div class="aa_js-actionDrawer aa_actionDrawer">
	<div class="aa_actionDrawer__wrap">
		<div class="aa_js-actionClose aa_actionDrawer__close"><i class="fa fa-times fa-3x"></i></div>
		<div id="js_actionDrawer__content" class="actionDrawer__content"></div>
	</div>
</div>
<?php include("footer.php"); ?>
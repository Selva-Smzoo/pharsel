<?php $page = 'thanks'; include "../config/include.php"; ?>

<!-- *** stylesheet *** -->
<?php include "../templates/common_css.php"; ?>
<link href="../css/contact.css" rel="stylesheet" type="text/css" media="all">

<!-- *** javascript *** -->
<?php include "../templates/common_js.php"; ?>
<script src="../js/top.js" type="text/javascript"></script>
<script src="../js/heightLine/jquery.heightLine.js" type="text/javascript"></script>
<script src="../js/fontFlex/jQuery.fontFlex.js" type="text/javascript"></script>
<script src="../js/lazylinepainter-1.5.1/jquery.lazylinepainter-1.5.1.js" type="text/javascript"></script>

<script>
// readyEvent
$(function(){
	$w.on({
		//load
		'load' : function(){
			//heightLine
			// $(".part_services .inner").heightLine({minWidth:480});

			//fontFlex
			$('.tl_intro_m').fontFlex(19, 23, 50);

		},
		//scroll
		'scroll' : function(){

		}
	}).superResize({
		//resize
		resizeAfter : function(){

		}
	}).firstLoad({
		//firstLoad
		pc_tab : function(){

		},
		sp : function(){

		}
	});
});


</script>
</head>

<body id="page_contact">
	<div class="wrapper">
		<?php include "../templates/header.php"; ?>

		<?php include "../templates/footer.php"; ?>
	</div>
</body>
</html>

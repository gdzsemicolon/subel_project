<?php
/**
 * SUBEL Business
 *
 * @package   SubelProject
 * @author    Semi Colon Team
 * @copyright Copyright (c) 2015, Semi Colon Team
 * @since     Version 1.0
 */
/*
 * Output class.
 * @author Semi Colon Team.
 * Description : This class for importing CSS and JS files..
 * 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<title><?=$title?></title>
        
    <link href="http://www.subel.com.tr/templates/css/general.css" rel="stylesheet" type="text/css" />
    <script src="http://www.subel.com.tr/templates/js/functions.js" type="text/javascript" language="javascript"></script>
    <script src="http://www.subel.com.tr/templates/js/jquery-1.6.1.min.js" type="text/javascript" language="javascript"></script>
        <link rel="stylesheet" type="text/css" href="http://www.subel.com.tr/templates/css/style.css">     
    <!-- script lanjutan-->
    <script type="text/javascript">
	var base_url = "<?=base_url()?>";
    </script>

</head>
<body>


<!--BEGIN MAIN DIV-->
<div class="mainDiv">
<?=$body?>
</div>
<!--END OF MAIN DIV-->
 
    </body>
</html>

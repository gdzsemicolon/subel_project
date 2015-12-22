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
 * Restricted class.
 * @author Semi Colon Team.
 * Description : This class for inform when user try to access member page before login the system.
 * 
 */
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
           <meta charset="utf-8">
          <title>Restricted Page</title>
    
</head>
<body>
    
<div id="container">
    <h1>Bu sayfası görebilmeniz için giriş yapmalısınız.</h1>
    <a href="<?php echo base_url()."site/login";?>">Giriş Sayfası</a>
    
</div>
    
    
</html>

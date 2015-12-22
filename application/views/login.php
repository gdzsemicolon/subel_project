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
 * Login class.
 * @author Semi Colon Team.
 * Description : This class for login screen.
 * 
 */
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
    <title>Subel Turizm Sanayi ve Ticaret Limited Şirketi</title>       

    <link href="http://subel.com.tr/images/style.css" rel="stylesheet" type="text/css" />

</head>


<body>

<div id="header">
    <div class="clearfix">
        <div class="logo">

            <a><img src="http://subel.com.tr/images/logo.png" alt="LOGO" height="52" width="140"></a>
            <strong><small><b>Subel Turizm Sanayi ve Ticaret Limited Şirketi</b></small></strong>
        </div>
        <ul class="navigation">
            <li class="active">
                <a href="<?php echo base_url(); ?>site/home">Anasayfa</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>site/aboutus">Hakkımızda</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>site/ourwork">HİZMETLERİMİZ</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>site/contact">İlETİŞİM</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>site/login">GİRİŞ</a>

            </li>

        </ul>
    </div>
</div>

<div id="contents">
    <div id="x">
        <div class="clearfix">
            <h1>GİRİŞ</h1>
            <p>

                <?php
                echo form_open('site/loginValidation');
                echo validation_errors();

                echo "<p> Email: ";
                echo form_input('email', $this->input->post('email'));
                echo "</p>";

                echo "<p>Şifre:  &nbsp  ";
                echo form_password('password');
                echo "</p>";

                echo "<p>";
                echo form_submit('login_submit', 'Giriş');
                echo "</p>";

                echo form_close();
                ?>

                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp<a href="<?php echo base_url() . "site/signup" ?>">Kayıt Ol!</a>

            </p>
        </div>


    </div>
</div>
</body>
<footer>
    <div id="footnote">
        <div class="clearfix">           
            <p>
                © Copyright 2015 SUBEL Ltd Şti. Tüm Hakkı Saklıdır.
            </p>
        </div>
    </div>
</footer>
</html>

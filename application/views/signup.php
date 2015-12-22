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
 * SignUp class.
 * @author Semi Colon Team.
 * Description : This class for users Sign Up.
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
                echo form_open('site/signupValidation');
                echo validation_errors();


                echo"<p>";
                echo "Eposta Adresi: &nbsp;&nbsp;";
                echo form_input('email', $this->input->post('email'));
                echo"</p>";

                echo"<p>";
                echo "Şifre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; ";
                echo form_password('password');
                echo"</p>";

                echo"<p>";
                echo "Şifre Tekrarı: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo form_password('cpassword');
                echo"</p>";

                echo"<p>";
                echo form_submit('signup_submit', 'Kayıt');
                echo"</p>";

                echo form_close();
                ?>

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

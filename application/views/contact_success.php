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
 * Contact Success class.
 * @author Semi Colon Team.
 * Description : This class for inform user if contact message sent successfully.
 * 
 */
defined('BASEPATH') or exit('No direct script access allowed');
?>
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
					<a href="<?php echo base_url(); ?>site/aboutus">HAKKIMIZDA</a>
                </li>
                <li>
					<a href="<?php echo base_url(); ?>site/ourwork">Çalışmalarımız</a>
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
                <img src="http://subel.com.tr/images/1f.jpg" alt="Img" height="300" width="950">
            </div>
        </div>
        <div class="highlight">
            <div class="clearfix">
                
                <h1>Mesajınız İletildi</h1>
                                <p>
                                    <?php echo 'Bizimle iletişime geçtiğiniz için teşekkür ederiz.'?>
                </p>
                
                               
            </div>
        </div>
        
            
    </div>
    <div id="footer">
        <div class="clearfix">
            <div class="section">
                <h4>Son Haberler</h4>
                <p>
                    Park, bahçe işlerinde çalışmak üzre erkekler için askerliğini yapmak şartıyla 2 erkek 2 bayan elemana ihtiyaç vardır. Sisteme giriş yaparak form doldurunuz. En kısa sürede dönüş yapılacaktır.
                </p>
            </div>
            <div class="section contact">
                <h4>İLETİŞİM</h4>
                <p>
                    <span>Adres:</span> Yeni Mahalle Hasan Şen Sokak No:6/3 Susurluk Balıkesir 
                </p>
                <p>
                    <span>Telefon:</span> 0 (266) 865 40 80
                </p>
                <p>
                    <span>E-Posta:</span> bilgi@subel.com.tr
                </p>
            </div>
            <div class="section">
                <h4>Mesaj GÖNDERİN</h4>
                <p>
                    Herhangi bir konuda fikir ve görüşlerinizi bildirmek için bizimle iletişime geçin.
                                        <input type="submit" onClick="parent.location='<?php echo base_url(); ?>site/contactMessage'" value='İletişim'>                                                                                
                </p>
                
            </div>
        </div>
        <div id="footnote">
            <div class="clearfix">
                <div class="connect">                   
                </div>
                <p>
                    © Copyright 2015 SUBEL Ltd Şti. Tüm Hakkı Saklıdır.
                </p>
            </div>
        </div>
    </div>

</body>
</html>

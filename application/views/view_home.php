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
 * View Home class.
 * @author Semi Colon Team.
 * Description : This class for home page for the website.
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
            <img src="http://subel.com.tr/images/1a.jpg" alt="Img" height="300" width="950">
        </div>
    </div>
    <div class="highlight">
        <div class="clearfix">

            <h1>SUBEL</h1>
            <p>
                Balıkesir bölgesinde kamu şirketleri içerisinde en fazla katma değer sağlayan kuruluş olmak ve Susurluk halkına en iyi hizmetlerin, faaliyetlerin getirilip sunulması amacını taşımaktadır. Amaçlar doğrultusunda büyüyerek daha fazla hizmetin sunulmasını için Subel Ltd. Şti. tüm çalışmalarını sağlam bir şekilde yürütmeye devam etmektedir.
            </p>

        </div>
    </div>
    <div class="featured">
        <h2>Neden BİZ?</h2>
        <ul class="clearfix">
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="http://subel.com.tr/images/pr1.jpg" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>Personel TEMİN</b> Firmamız kamu ya da özel sektörde bulunan hizmet ve ticaret işletmelerine personel temin hizmetleri yapmaktadır.
                </p>

            </li>
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="http://subel.com.tr/images/pr2.jpg" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>Proje Hazırlama</b> İşletmlerin dikey ya da yatay pozisyonda yapmak istedikleri büyüme çalışmalarına destek olmak ve ivme kazandırmak için fizibilite çalışması ve literatür çalışmaları yapmaktayız.
                </p>

            </li>
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="http://subel.com.tr/images/pr3.jpg" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>EĞİTİM HİZMETLERİ</b> Firmaların aktiflerini büyütmesinde ki önemli etkenlerden biride personelin nitelikli olmasıdır. Subel olarak satış, pazarlama, muhasebe ve işletme yönetimi süreçlerini kapsayan orta kademe ve alt kademe personellere eğitim faaliyetleri yapmaktayız.
                </p>

            </li>
            <li>
                <div class="frame1">
                    <div class="box">
                        <img src="http://subel.com.tr/images/pr4.jpg" alt="Img" height="130" width="197">
                    </div>
                </div>
                <p>
                    <b>ANALİZ ve RAPORLAMA</b> İşletmenizin tüm satış ve tahsilat hareketlerinin detaylandırılması ile personel performans değerlendirme çalışmalarını hazırlayarak daha rahat kararlar almanızı sağlamaktayız.
                </p>

            </li>
        </ul>
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
            <input type="submit" onClick="parent.location = '<?php echo base_url(); ?>site/contactMessage'" value='İletişim'>   
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
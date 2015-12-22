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
 * About Us class.
 * @author Semi Colon Team.
 * Description : This class for showing company About Us information.
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
                <img src="http://subel.com.tr/images/1b.jpg" alt="Img" height="300" width="950">
            </div>
        </div>
        <div class="highlight">
            <div class="clearfix">
                
                <h1>Hakkımızda</h1>
                <p>
                          Subel şirketi 2014 yılında Susurluk Belediye'si tarafından kurulmuştur.Şirket, Balıkesir bölgesinde kamu şirketleri içerisinde en fazla katma değer sağlayan kuruluş olmak ve Susurluk halkına en iyi hizmetlerin, faaliyetlerin getirilip sunulması amacını taşımaktadır.

                                                                                 Susurluk bölgesinde kamu kurumlarında personel temin hizmetlerinin yürütülmesinde Subel Ltd. Şti. önemli bir paya sahiptir. Faaliyette bulunan bir çok kuruma göre Subel Ltd. Şti., hem ana işverenler tarafından hemde çalıştırılan personel bakımından hizmetlerin yapılış biçimleri ile diğer yasal süreçlerin en hızlı şekilde gerçekleştirilmesinden dolayı memnuniyetin yüksek olduğu bir kurum olmaktadır.
 
                                                                                 Amaçlar doğrultusunda büyüyerek daha fazla hizmetin sunulmasını için Subel Ltd. Şti. tüm çalışmalarını sağlam bir şekilde yürütmeye devam etmektedir.
 
                                                                                 Şirketimizin Türk Ticaret Kanuna göre Limited Şirket olup tam ünvanımız; Subel Turizm Sanayi ve Ticaret Limited Şirketi' dir. 
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

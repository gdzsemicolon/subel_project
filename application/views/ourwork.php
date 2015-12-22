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
 * OurWork class.
 * @author Semi Colon Team.
 * Description : This class for showing company working area information.
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
            <img src="http://subel.com.tr/images/1c.jpg" alt="Img" height="300" width="950">
        </div>
    </div>
    <div class="highlight">
        <div class="clearfix">

            <h1>ÇALIŞMALARIMIZ</h1>
            <p>
            <h3>Personel Temin Hizmetleri </h3>
            <p>  Günümüz İşletmeleri ve kamu kuruluşları ana faaliyet konularına yoğunlaşabilmek ve büyümelerini sürdürebilmek için dış kaynak kullanımına ihtiyaç duymaktadırlar. Subel Ltd. Şti. bu doğrultuda firmalara temizlik, hizmet ve ticari alanda personel temin hizmeti sunmaktadır. Kurumlar ihtiyaç duyduğu alanda ve zamanda zahmetsiz bir şekilde Subel Ltd. Şti. ile dış kaynak ihtiyaçlarını tamamlamaktadırlar. Tüm yasal süreçlerin yerine getirilmesi ve dilerseniz personel sevk idaresi tarafımızdan yapılmaktadır. </p>
            <h3>Proje Hazırlama ve Sunma Faaliyetleri</h3> 
            <p>İşletmelerin dikey ya da yatay pozisyonda yapmak istedikleri büyüme istekleri detaylı bir ön çalışma ile daha işlevsel ve yapılabilir hale gelmektedir. Subel Ltd. Şti. olarak işletmelerin faaliyetlerini yürütmek istedileri yeni alanlarda ya da mevcut işlerininin verimliliğini attırmak istekleri için literatür taraması ve projelendirme çalışmaları ile fizibilite çalışmaları yapmaktayız. Böylece işletmeler uzun vadede sistemli bir programa sahip olabilmektedir. Proje olarak başlıca şu çalışmaları yapabilmekteyiz ; <ul> <li><p>Yeni bir sektöre giriş yapmak isteyen işletmeler için sektör araştırma çalışması</p></li><li><p>Mevcut yapının daha verimli hale getirilmesi için değerlendirme çalışması</p></li><li> <p>İşletmelerin tercih edecekleri alanda araştırma çalışmaları</p> </li></ul>
            <h3>Eğitim Hizmetleri </h3>
            <p>Kurumunuzun ihtiyaç duyduğu konularda eğitim çalışmaları ve toplu sunum hizmetleri yapabilmekteyiz. Kurumunuzda çalışan orta kademe ve alt kademe personellerinize vereceğimiz eğitim çalışmaları ile performan artışı ve daha kaliteli hizmet verebilir konuma gelecektir. Genel olarak satış, pazarlama, insan kaynakları gibi temel konularda eğitim çalışmaları yapabilmekteyiz. </p>
            <h3>Analiz ve Raporlama</h3> 
            <p>Tüm işletmeler ve kurumlar mevcut süreçlerinin hangi aşamada olduğunu ya da performans ölçümü yapmak istediğinde mutlaka işleyişleri iyi analiz etmesi gerekmektedir. Sadece analizde çoğu zaman tek başına yeterli olmamaktadır. Yalnızca yapılan analiz çalışmaları iyi yorumlandığında bir takım düzeltmeler ile kurumunuz daha iyi hale gelecektir. Subel Ltd. Şti . olarak satış , müşteri segment, ürün penetrasyon, işletme performans ve personel performans çalışmaları yaparak gerekli raporlama çalışmalarını yapabilmekteyiz.
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
            <input type="submit" onClick="parent.location = '<?php echo base_url(); ?>site/contact_message'" value='İletişim'>   
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

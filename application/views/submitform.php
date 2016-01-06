<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<link href="http://subel.com.tr/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<div align="center" id="container">
<p><?php
        echo form_open('site/formSending');
        echo validation_errors();
        echo form_label('Ad Soyad:');        
        $data_name = array(
            'name' => 'name',
            'id' => 'emp_name_id',
            'class' => 'input',
            'placeholder' => 'Ad Soyad'
        );
        echo form_input($data_name);
        echo "<br></br>";
        echo form_label('EPosta:');
        $data_email = array(
            'name' => 'email',
            'id' => 'emp_email_id',
            'class' => 'input',
            'placeholder' => 'EPosta Adresi'
        );
        echo form_input($data_email);
        echo "<br></br>";
        echo form_label('Doğum Yeri:');
        $data_yer = array(
            'name' => 'yer',
            'id' => 'emp_yer_id',
            'class' => 'input',
            'placeholder' => 'Doğum Yeriniz'
        );
        echo form_input($data_yer);
        echo "<br></br>";
        echo form_label('TC Kimlik Numarası:');
        $data_tc = array(
            'name' => 'tc',
            'id' => 'emp_tc_id',
            'class' => 'input',
            'placeholder' => 'TC No'
        );
        echo form_input($data_tc);
        echo "<br></br>";
        echo form_label('Telefon Numarası:');
        $data_tel = array(
            'name' => 'tel',
            'id' => 'emp_phone_id',
            'class' => 'input',
            'placeholder' => '0xxxxxxxxxx'
        );
        echo form_input($data_tel);
        echo "<br></br>";

        echo form_label('Evlilik Durumu:');

        $data_bekar = array(
            'name' => 'evlilik',
            'value' => 'Bekar',
            'checked' => TRUE,
        );
        echo form_radio($data_bekar);
        echo form_label('Bekar');
        $data_evli = array(
            'name' => 'evlilik',
            'value' => 'Evli',
        );
        echo form_radio($data_evli);
        echo form_label('Evli');
        echo "<br></br>";
        echo form_label('Tahsil Durumunuz:');

//create dropdown box
        $data_tahsil = array(
            'ilköğretim' => 'İlköğretim',
            'lise' => 'Lise',
            'önlisans' => 'Önlisans',
            'lisans' => 'Lisans'
        );
        echo form_dropdown('tahsil', $data_tahsil, 'lise');
        echo "<br></br>";
        echo form_label('Bilgisayar Kullanımı:');

//create dropdown box
        $data_bilgisayar = array(
            'başlangıç' => 'Başlangıç',
            'altseviye' => 'Alt Seviye',
            'ileriseviye' => 'İleri Seviye'
        );
        echo form_dropdown('pc', $data_bilgisayar, 'başlangıç');
        echo "<br></br>";
        echo form_label('Yabancı Dil:');

//create dropdown box
        $data_dil = array(
            'ingilizce' => 'İngilizce',
            'almanca' => 'Almanca',
            'ispanyolca' => 'İspanyolca'
        );
        echo form_dropdown('dil', $data_dil, 'ingilizce');
        echo "<br></br>";


        echo"<p>";
        echo form_submit('contact_submit', 'Gönder');
        echo"</p>";

        echo form_close();
        ?>
        

    </p>


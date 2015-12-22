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
 * Member Area class.
 * @author Semi Colon Team.
 * Description : This class for members personal page and form page.
 * 
 */
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--script BEGIN-->
<script type="text/javascript">
    $(document).ready(function () {
        get_html_data(base_url + "profile/show_details/", '', 'profile_detail_loading', 'profile_detail');
    });

    function edit_detail() {
        get_html_data(base_url + "profile/show_details/edit/", '', 'profile_detail_loading', 'profile_detail');
    }
    function back() {
        get_html_data(base_url + "profile/show_details/", '', 'profile_detail_loading', 'profile_detail');
    }

<?= $extra_script ?>
</script>
<!--script END-->
<style>
    #profile_detail table td{
        vertical-align: text-top;
    }
</style>
<div class="column_1" style="width:400px;">
    <?= $column_1 ?>    

    <p><?php
       //Form open after submit form will be passing site controller formSending method.
        echo form_open('site/formSending');
        echo validation_errors();
        echo form_label('Ad Soyad:');
        $data_name = array(
            'name' => 'name',
            'id' => 'emp_name_id',
            'class' => 'input',
            'placeholder' => 'Ad Soyad'
        );
        //Form type input
        echo form_input($data_name);
        echo "<br></br>";
        echo form_label('EPosta:');
        $data_email = array(
            'name' => 'email',
            'id' => 'emp_email_id',
            'class' => 'input',
            'placeholder' => 'EPosta Adresi'
        );
        //Form type input
        echo form_input($data_email);
        echo "<br></br>";
        echo form_label('Doğum Yeri:');
        $data_yer = array(
            'name' => 'yer',
            'id' => 'emp_yer_id',
            'class' => 'input',
            'placeholder' => 'Doğum Yeriniz'
        );
        //Form type input
        echo form_input($data_yer);
        echo "<br></br>";
        echo form_label('TC Kimlik Numarası:');
        $data_tc = array(
            'name' => 'tc',
            'id' => 'emp_tc_id',
            'class' => 'input',
            'placeholder' => 'TC No'
        );
        //Form type input
        echo form_input($data_tc);
        echo "<br></br>";
        echo form_label('Telefon Numarası:');
        $data_tel = array(
            'name' => 'tel',
            'id' => 'emp_phone_id',
            'class' => 'input',
            'placeholder' => '0xxxxxxxxxx'
        );
        //Form type input
        echo form_input($data_tel);
        echo "<br></br>";

        echo form_label('Evlilik Durumu:');

        $data_bekar = array(
            'name' => 'evlilik',
            'value' => 'Bekar',
            'checked' => true,
        );
        //Form type Radio button
        echo form_radio($data_bekar);
        echo form_label('Bekar');
        $data_evli = array(
            'name' => 'evlilik',
            'value' => 'Evli',
        );
        //Form type Radio button
        echo form_radio($data_evli);
        echo form_label('Evli');
        echo "<br></br>";
        echo form_label('Tahsil Durumunuz:');


        $data_tahsil = array(
            'ilköğretim' => 'İlköğretim',
            'lise' => 'Lise',
            'önlisans' => 'Önlisans',
            'lisans' => 'Lisans'
        );
        //Form type dropdown
        echo form_dropdown('tahsil', $data_tahsil, 'lise');
        echo "<br></br>";
        echo form_label('Bilgisayar Kullanımı:');


        $data_bilgisayar = array(
            'başlangıç' => 'Başlangıç',
            'altseviye' => 'Alt Seviye',
            'ileriseviye' => 'İleri Seviye'
        );
        echo form_dropdown('pc', $data_bilgisayar, 'başlangıç');
        echo "<br></br>";
        echo form_label('Yabancı Dil:');


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

    //Logout link display.
    <a href="<?php echo base_url() . "site/logout" ?>">Çıkış</a>
</div>

<div class="column_2" style="width:285px;">
    <?= $column_2 ?>
</div>
//end class.

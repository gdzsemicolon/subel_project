<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
    <head>

        <meta charset="utf-8">
    <title>Admin Page</title>           
    <link href="http://subel.com.tr/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div align="center" id="container">
    <h1>Başvuru Listesi</h1>
    <form class ="form-inline" role="form" action="<?php echo base_url() . 'site/search_user'; ?>" method="post">
        <div class="form-group">
            <label for="email">Lütfen arama kriterini seçiniz.</label>
            <select class="form-control" name="sel1" id="sel1">
                <option>Tc</option>
                <option>Yer</option>
                <option>Tahsil</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="search" id="search">
        </div>    
        <button type="submit" class="btn btn-info" name="submit">Ara</button>
    </form></br>
    <table style ="width: 978px;" class="table table-striped">
        <thead style="background-color: #2980B9">
            <tr>
                <th>ID</th>
                <th>Ad Soyad</th>
                <th>EPosta</th>
                <th>Yer</th>
                <th>TC No</th>
                <th>Telefon</th>
                <th>Medeni Hal</th>
                <th>Tahsil</th>
                <th>İşlem</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($form as $row) { ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->adsoyad; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->yer; ?></td>
                    <td><?php echo $row->tc; ?></td>
                    <td><?php echo $row->tel; ?></td>
                    <td><?php echo $row->evlilik; ?></td>
                    <td><?php echo $row->tahsil; ?></td>
                    <td>
                        <a href="<?= base_url() . 'site/edit/'; ?><?= $row->id;?>">Değiştir</a>
                        <a href="javascript:;" onClick="confirm_delete(<?= $row->id?>)">Sil</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>            
    </table>
     <a href="<?php echo base_url() . "site/logout" ?>">Çıkış</a>
    <script>
     function confirm_delete(id)
     {
         var res=confirm('Silmeyi onaylıyor musunuz?');
         if(res==true)
         {
             window.location="<?= base_url(). 'site/delete/'; ?>"+id; 
         }
     }
    </script>
</body>
</html>


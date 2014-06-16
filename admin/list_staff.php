<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>
<?php include 'xlinker/listing.php'; ?>


</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>Panel Admin</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">
            <div class="post-item">
                <div class="post-meta">
                    <h3>Selamat datang di panel administrasi</h3>                    
                    <div class="clear"></div>
                </div>
                <p align="justify">Halaman ini hanya diperuntukkan bagi mereka yang memiliki akses kedalam sistem. Halaman ini berisi beberapa bagian sistem
                          seperti Panel pembaharuan hingga panel administrasi website. Jika ada kesalahan dalam halaman ini hubungi : </p>
                
                <?php
                    include "../admin/xkoneksi/koneksi.php";
                ?>

                <style>
                            tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
                                background-color: #gray;
                            }
                            table{
                                width: 500px;
                                margin: auto;
                                border-collapse: collapse;
                                box-shadow: darkgrey 3px;
                                text-align: center;
                                border-width: thick;
                            }
                            thead tr {
                                background-color: #D4D074;
                            }
                </style>

    <center>
        <table>
            <thead>
                <tr>
                    <th>Profil</th>
                    <th>Staff ID</th>
                    <th>NAMA</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Pendidikan</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_staff ORDER BY staff_id";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "<img src='../admin/images/staff/$data[staff_foto]' width='80' height='80'>";?></td>
                <td><?php echo "$data[staff_id]";?></td>
                <td><?php echo "$data[staff_nama]";?></td>
                <td><?php echo "$data[staff_jabatan]";?></td>
                <td><?php echo "$data[staff_alamat]";?></td>
                <td><?php echo "$data[staff_pendidikan]";?></td>
                <td><a href="#<?php echo "$data[staff_id]";?>"><img src="../admin/images/edit.png"</a></td>
                <td><a href="#<?php echo "$data[staff_id]";?>$nama_foto=<?php echo "$data[staff_foto]";?>">
                    <img src="../admin/images/hapus.png"</a>
                </td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

            </div>
        <div class="clear"></div>        
        </div>
                
        <div id="tubes_sidebar" class="right">
            
            <div class="sidebar_section sidebar_section_bg">
                <?php include 'xmenu/side_admin.php';?>
            </div>
      </div>
        
        <div class="clear"></div>
                
    </div>
</div>

<div id="tubes_bottom_wrapper">
    <div id="tubes_bottom">     
        <div class="clear"></div>
    </div>
    
</div>

<div id="tubes_footer_wrapper">
    <div id="tubes_footer">
        <?php include 'xlinker/footlink.php'; ?>
    </div>
</div>

</body>
</html>
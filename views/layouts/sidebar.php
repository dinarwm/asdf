<?php 
    use yii\helpers\Url;
?>
<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li>
            <a href="<?php echo Url::base();?>/home"><i class="fa fa-home fa-fw"> </i> Dashboard</a>
        </li>
        <li>
            <a href="<?php echo Url::base();?>/akun"><i class="fa fa-user fa-fw"> </i> User Management</a>
        </li>
        <li>
            <a href="<?php echo Url::base();?>/kop"><i class="fa fa-envelope fa-fw"> </i> Kop Surat</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-file fa-fw"> </i> Surat Perizinan<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo Url::base();?>/imb">Izin Mendirikan Bangunan</a>
                </li>
                <li>
                    <a href="<?php echo Url::base();?>/imj">Izin Menutup Jalan</a>
                </li>
                <li>
                    <a href="<?php echo Url::base();?>/ipr">Izin Pemasangan Reklame</a>
                </li>
                <li>
                    <a href="<?php echo Url::base();?>/ipd">Izin Penggalangan Dana</a>
                </li>
                <li>
                    <a href="<?php echo Url::base();?>/siup">Surat Izin Usaha Perdagangan</a>
                </li>
                <li>
                    <a href="<?php echo Url::base();?>/tdp">Tanda Daftar Perusahaan</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->

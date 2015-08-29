<?php 
    use yii\helpers\Url;
?>
<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li>
            <a href="<?php echo Url::base();?>/"><i class="fa fa-home fa-fw"> </i> Dashboard</a>
        </li>
        <li>
            <a href="<?php echo Url::base();?>/Akun"><i class="fa fa-user fa-fw"> </i> User Management</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-envelope fa-fw"> </i> Kop Surat<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="panels-wells.html">Panels and Wells</a>
                </li>
                <li>
                    <a href="buttons.html">Buttons</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?php echo Url::base();?>/Akun"><i class="fa fa-file fa-fw"> </i> Surat Perizinan<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="panels-wells.html">Panels and Wells</a>
                </li>
                <li>
                    <a href="buttons.html">Buttons</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- /.sidebar-collapse -->

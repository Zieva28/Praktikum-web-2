<?php
$menu = [
    'Home' => 'index.php',
    'Produk' => 'produk.php',
    'Dafar' => 'daftar.php',
    'About' => 'about'
];
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <?php foreach ($menu as $key => $value): ?>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <?php 
                            </a>
                            <?php endforeach ?>

                            <a class="nav-link" href="daftar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Daftar
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
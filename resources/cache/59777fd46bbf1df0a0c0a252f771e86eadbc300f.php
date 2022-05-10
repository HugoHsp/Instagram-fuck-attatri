<main class="main">
    <?php $__env->startSection('topMenu'); ?>
    <header class="header">
        <nav class="nav">
            <a href="index.php">
                <h1 class="mainTitle" id="titleHeader" style="margin: 0 !important; font-size: 4rem;">
                    Instagram
                </h1>
            </a>
            <div class="icons">
                <a href="index.php">
                    <i class='bx bx-user-plus'></i>
                    <a href="index.php?action=publish">
                        <i class='bx bxl-telegram'></i>
                    </a>
                </a>  
            </div>
        </nav>
    </header>
    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->yieldContent('mainContent'); ?>
    <footer class="footer">
        <div class="footerBar">
            <a href="index.php">
                <i class='bx bx-home' ></i>
            </a>
            <a href="index.php?action=search">
                <i class='bx bx-search-alt-2' ></i>
            </a>
            <a href="index.php?action=articles">
                <i class='bx bx-user'></i>
            </a>
            <a href="index.php?action=deconnexion">
                <i class='bx bx-log-out-circle' ></i>
            </a>
        </div>
    </footer>
    </div>
</main>
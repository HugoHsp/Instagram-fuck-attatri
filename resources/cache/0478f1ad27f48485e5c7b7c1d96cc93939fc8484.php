<?php $__env->startSection('content'); ?>
<?php $__env->startSection('mainContent'); ?>
<link rel="stylesheet" href="/public/css/search.css">
<link rel="stylesheet" href="/public/css/nav.css">
<?php $__env->startSection('topMenu'); ?>
<div class="searchbar">
    <form method="GET">
        <input type="hidden" name="action" value="subscription">
        <input type="text" name="v" class="input" id="search_input"placeholder="Votre recherche" <?php if(isset($_GET["v"])){ ?> value="<?= $_GET["v"] ?>"<?php } ?>>
        <input type="hidden" name="search" value="rechercher">
        <button type="submit" style="background-color: unset; border: unset;">
            <i class='bx bx-search'></i>
        </button>
    </form>
</div>
<div class="content">
    <div class="article">
    <?php if(!empty($searchUsers)): ?>
    <h1>Ma recherche</h1>
    <?php $__empty_1 = true; $__currentLoopData = $searchUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="user">
        <span class="left">
            <h2><?php echo e($users->login); ?></h2>
        </span>
        <span class="right">
            <a href="index.php?action=addFriend&id=<?php echo e($users->id); ?>">
                <button type="submit" class="submit">
                    S'abonner
                </button>
            </a>
        </span>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>Aucun article à afficher</h1>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(!empty($friendUsers)): ?>
    <h1>Mes abonnements</h1>
    <?php $__empty_1 = true; $__currentLoopData = $friendUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="user">
        <span class="left">
            <h2><?php echo e($users->login); ?></h2>
        </span>
        <span class="right">
            <a href="index.php?action=delFriend&id=<?php echo e($users->id); ?>">
                <button class="submit">
                    Se désabonner
                </button>
            </a>
        </span>
    </div>
    <?php echo e($users->login); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>Aucun article à afficher</h1>
    <?php endif; ?>
    <?php endif; ?>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
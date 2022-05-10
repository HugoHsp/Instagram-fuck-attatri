<?php $__env->startSection('content'); ?>
<?php $__env->startSection('mainContent'); ?>
<link href="/public/css/nav.css" rel="stylesheet">
<div class="content">
    <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <article class="article">
            <span><?php echo e($item->login); ?></span>
            <img src="<?php echo e($item->img_url); ?>" class="image_post">
            <h3 class="post_title"><?php echo e($item->titre); ?></h3>
            <div class="flex">
                <p class="desc"><?php echo e($item->tags); ?></p>
                <i class='bx bx-message-rounded-dots'></i>
                <i class='bx bx-heart' ></i>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>Aucun article à afficher</h1>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
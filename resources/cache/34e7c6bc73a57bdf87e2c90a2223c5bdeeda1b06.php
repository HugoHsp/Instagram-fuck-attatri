<?php $__env->startSection('content'); ?>
<?php $__env->startSection('mainContent'); ?>
    <div class="content">
        <form action="index.php?action=registerT" method="POST">
            <input type="email" class="input" placeholder="E-mail" name="email">
            <input type="text" class="input" placeholder="Login" name="login">
            <input type="password" class="input" placeholder="Mot de passe" name="pwd1">
            <input type="password" class="input" placeholder="Confirmation du mot de passe" name="pwd2">
            <button type="submit" class="submit" name="submit">S'enregistrer</button> 
            <a href="index.php?action=login" class="question">Déja inscrit ? <span id="blue">connectez-vous</span></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
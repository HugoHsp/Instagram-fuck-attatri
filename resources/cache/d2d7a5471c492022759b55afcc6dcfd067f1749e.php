<?php $__env->startSection('content'); ?>
<?php $__env->startSection('mainContent'); ?>
    <div class="content">
        <form action="index.php?action=loginT" method="POST">
            <input type="email" class="input" placeholder="E-mail" name="email">
            <input type="password" class="input" placeholder="Mot de passe" name="password">
            <span>
                <input type="checkbox" name="remember" id="remember" name="remember">   
                <label for="remember">Se souvenir de moi</label>
            </span>
            <button type="submit" class="submit" name="submit">Connexion</button> 
            <a href="index.php?action=register" class="question">Vous n'avez pas encore de compte ? <span id="blue">inscrivez-vous</span></a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenue sur la gestion de la cuverie</h1>
    <?php if(auth()->guard()->check()): ?>
        <p>Connecté en tant que : <?php echo e(auth()->user()->name); ?></p>
    <?php else: ?>
        <p>Veuillez vous connecter pour accéder aux fonctionnalités.</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Dossier\resources\views/home.blade.php ENDPATH**/ ?>
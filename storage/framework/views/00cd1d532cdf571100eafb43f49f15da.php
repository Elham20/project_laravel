<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Gestion Cuverie'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <header>
        <nav>
            <a href="<?php echo e(route('home')); ?>">Accueil</a>
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->role === 'admin'): ?>
                    <a href="<?php echo e(route('users.index')); ?>">Gestion des Utilisateurs</a>
                <?php elseif(auth()->user()->role === 'manager'): ?>
                    <a href="<?php echo e(route('cuves.index')); ?>">Cuves</a>
                    <a href="<?php echo e(route('proprietaires.index')); ?>">Propriétaires</a>
                <?php elseif(auth()->user()->role === 'caviste'): ?>
                    <a href="<?php echo e(route('cuves.index')); ?>">Cuves</a>
                <?php endif; ?>
                <a href="<?php echo e(route('historique.index')); ?>">Historique</a>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Déconnexion</button>
                </form>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Connexion</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
        <p>© 2024 Gestion Cuverie</p>
    </footer>
</body>
</html>

<?php /**PATH C:\laragon\www\Dossier\resources\views/layouts/app.blade.php ENDPATH**/ ?>
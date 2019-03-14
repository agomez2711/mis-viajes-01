<?php $__env->startSection('title'); ?> Experiencias <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <p> Aqui pongo experiencias </p>
        <div>
            Lista de experiencias
            <?php $__currentLoopData = $experiencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experiencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1><?php echo e($experiencia->nombre); ?> (<?php echo e($experiencia->numpuntuaciones); ?>) <small><?php echo e($experiencia->user->email); ?></small></h1>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div>
            Más puntuadas
            <?php $__currentLoopData = $maxexperiencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experiencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1><?php echo e($experiencia->nombre); ?> (<?php echo e($experiencia->numpuntuaciones); ?>) <small><?php echo e($experiencia->user->email); ?></small></h1>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div>
            Última experiencia
            <h1><?php echo e($latest->nombre); ?> (<?php echo e($latest->numpuntuaciones); ?>) <small><?php echo e($latest->user->email); ?></small></h1>
        </div>
        <div>
            Filtro de experiencias
        </div>
        <div>
            Visualizar experiencias
        </div>
        <div>
            Valorar experiencias
        </div>
        <div>
            Comentar experiencia
        </div>
        <div>
            Añadir experiencias

        </div>
        <div>
            Buscador de experiencias
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
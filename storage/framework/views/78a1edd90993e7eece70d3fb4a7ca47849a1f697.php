<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Collection</title>

    <link rel="stylesheet" href="<?php echo e(asset('styles/collection.css')); ?>">
</head>

<body>
    <div class="wrapper">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.navbar','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <div class="collection">
            <div class="collection__title">
                Wheels
                <!--must be name from database-->
            </div>
            <div class="collection__filter">
                <button class="collection__sort"> Filter and sort</button>
                <span class="collection__productcount"> 6 products</span>
            </div>
            <hr class="collection__line">
            <div class="collection__gallery">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ProductCard::class, ['product' => $product] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\ProductCard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5)): ?>
<?php $component = $__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5; ?>
<?php unset($__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <hr class="collection__line">

        </div>



</body>

</html>
<?php /**PATH /home/kalvisreinis/Desktop/Project_KGK/KGK-repository/resources/views/products.blade.php ENDPATH**/ ?>
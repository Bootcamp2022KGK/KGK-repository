<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGK Product</title>

    <link rel="stylesheet" href="<?php echo e(asset('styles/product.css')); ?>">
</head>

<body>
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

    <div class="wrapper">
        <div class="product">
            <div class="product__image">
                <?php
                    $image = $product['picture_name'];
                ?>
                <img src="<?php echo e(asset("images/products/$image.jpg")); ?>" alt="">
            </div>
            <div class="product__title">
                <span>
                    <?php echo e($product['manufacturer']); ?>

                </span>
                <br>
                <span>
                    <?php echo e($product['model']); ?>

                </span>
            </div>

            <hr class="product__line">

            <p class="product__description">
                <?php echo e($product['description']); ?>

            </p>

            <span class="product__size">
                Size: <?php echo e($product['size']); ?>

            </span>
            <br>
            <span class="product__type">
                Type: <?php echo e($product['type']); ?>

            </span>
            <br>
            <span class="product__color">
                Color: <?php echo e($product['color']); ?>

            </span>
            <br>
            <span class="product__price">
                <?php
                    $price = number_format($product['price'], 2);
                ?>
                Price: <?php echo e($price); ?>eur
            </span>

            <hr class="product__line">

            <a href="">
                <button class="card__button" data-code="<?php echo e($product['code']); ?>">
                    Add to Cart
                </button>
            </a>

        </div>
</body>

<script src="<?php echo e(asset('js/addToCart.js')); ?>"></script>

</html>
<?php /**PATH /home/krish/Documents/web-dev/KGK_Project/resources/views/product.blade.php ENDPATH**/ ?>
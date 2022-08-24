<link rel="stylesheet" href="<?php echo e(asset('styles/card.css')); ?>">

<div class="card">
    <img class="card__image" src="<?php echo e(asset("images/products/$image.jpg")); ?>"  alt="rims">

    <div class="card__price"><?php echo e($price); ?></div>
    <div class="card__name"><?php echo e($model); ?></div>
    <div class="card__producer"><?php echo e($manufacturer); ?></div>
    
    <button class="card__button">Add to Cart</button>
</div>
<?php /**PATH /home/krish/Documents/web-dev/KGK_Project/resources/views/components/product-card.blade.php ENDPATH**/ ?>
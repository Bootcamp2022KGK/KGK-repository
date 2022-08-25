<link rel="stylesheet" href="<?php echo e(asset('styles/card.css')); ?>">

<div class="card">
    <a href="/products/<?php echo e($manufacturer); ?>/<?php echo e($model); ?>/<?php echo e($size); ?>/<?php echo e($code); ?>">
        <img class="card__image" src="<?php echo e(asset("images/products/$image.jpg")); ?>"  alt="rims">

        <div class="card__price"><?php echo e($price); ?></div>
        <div class="card__name"><?php echo e($model); ?></div>
        <div class="card__name"><?php echo e($code); ?></div>
        <div class="card__producer"><?php echo e($manufacturer); ?></div>
        <span><?php echo e($size); ?></span>
    </a>
    <button onclick="clickCounter()" class="card__button">Add to Cart</button>
</div>

<script>
    function clickCounter() {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount) + 1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("demo").innerHTML = localStorage.clickcount;
    }
</script>
<?php /**PATH /home/kalvisreinis/Desktop/Project_KGK/KGK-repository/resources/views/components/product-card.blade.php ENDPATH**/ ?>
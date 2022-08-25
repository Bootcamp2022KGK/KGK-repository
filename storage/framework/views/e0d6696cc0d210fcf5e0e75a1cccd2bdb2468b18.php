<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/homepagestyle.css">
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
    <div class="intro">
        <div class="intro__top">
            <div class="intro__text"> How ToTurn Your Car Into A Beast</div>
            <img class="intro__image"
                src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/3/car-fiat-500-abarth-street-2017-cars-tuning-fiat-500-hervey-dopson.jpg"
                alt="lading rims" class="intro__image">
        </div>
        <hr class="intro__line">
        <div class="intro__blogtext">
            <h1>Loren ipsum bla bla</h1>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus ligula eu nulla pellentesque
            placerat. Quisque tempor semper purus, a scelerisque metus laoreet facilisis. Proin urna ipsum, tincidunt
            eget bibendum in, rutrum sed lectus. Duis efficitur hendrerit condimentum. In hac habitasse platea dictumst.
            Donec in diam in dui finibus venenatis ut vestibulum magna. Phasellus tempus leo a neque rhoncus, ac
            convallis orci viverra. Nullam est mauris, ultricies quis ante vitae, ultrices condimentum risus. Morbi
            mattis id metus tempus finibus. Phasellus eget sodales eros. Sed et lobortis risus. Nullam dignissim tellus
            imperdiet neque malesuada, in mattis libero cursus. Curabitur rutrum est ut tincidunt porttitor. Nulla massa
            dui, commodo vitae nunc eget, venenatis tempor mauris. Duis ac ullamcorper massa, sit amet placerat dui. Nam
            nec sodales odio, non congue elit.
            <h1>Loren ipsum bla bla</h1>

            <img class="intro__image2"
                src="https://mclear.co.uk/wp-content/uploads/2019/09/IMG_20190723_121539-1-750x348.jpg"
                alt="lading rims" class="intro__image">
            Nulla varius ipsum purus, id semper elit pellentesque ac. Fusce fringilla neque nec neque convallis, vitae
            faucibus velit elementum. Phasellus sit amet orci bibendum, auctor diam ut, auctor massa. Cras iaculis velit
            porta, laoreet odio in, pretium mi. Morbi vitae justo leo. Nam nec purus non nisl congue pretium ac eu arcu.
            In quis aliquet urna. Duis gravida massa at sem suscipit euismod. Phasellus faucibus est quis pulvinar
            faucibus. Aenean nec lorem ante.

            Curabitur vehicula commodo enim ut consequat. Praesent auctor elit ante, id ultricies ante maximus at. Class
            aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed in mollis dui.
            Vestibulum id dolor vel mi laoreet ultricies. Fusce eu est et orci hendrerit gravida ut dignissim quam.
            Quisque ac rutrum felis. Ut massa dui, tempus at turpis a, ultricies molestie nisi. Integer fermentum ante
            vitae lorem iaculis semper. Cras auctor urna et ipsum tempus tincidunt. Pellentesque vel velit lacus. Donec
            rutrum augue iaculis risus sagittis vestibulum. Cras turpis nisl, molestie et consequat ut, egestas feugiat
            enim.
            <h1>Loren ipsum bla bla</h1>
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed accumsan purus
            felis, cursus ultricies velit convallis et. Aenean porttitor arcu vitae lacinia rhoncus. Vestibulum
            dignissim porta leo dictum laoreet. Vestibulum sed condimentum sem. Integer eu vehicula risus. Lorem ipsum
            dolor sit amet, consectetur adipiscing elit. Phasellus enim orci, scelerisque quis pharetra eu, sollicitudin
            sit amet elit. Maecenas finibus quam sed ipsum iaculis pellentesque. Nulla tortor sem, fringilla ac
            dignissim eu, dignissim at augue. Fusce sed imperdiet lorem. Suspendisse ac dictum enim. Donec ornare
            hendrerit nunc, eu convallis nulla molestie et. Donec id tortor sit amet magna tincidunt posuere iaculis ac
            elit.



        </div>


    </div>
    <hr class="intro__line">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
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

</body>
<?php /**PATH /home/kalvisreinis/Desktop/Project_KGK/KGK-repository/resources/views/homepage.blade.php ENDPATH**/ ?>
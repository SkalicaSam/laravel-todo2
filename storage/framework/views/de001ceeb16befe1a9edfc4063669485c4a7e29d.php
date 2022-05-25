<html>
    <head>
    </head>
    <body>
        <h1>todo list 2<h1>

            <?php $__currentLoopData = $listItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p>Item: <?php echo e($listItem->name); ?>  </br>Is complete: <?php echo e($listItem->is_complete); ?> 
                <form method="post" action="<?php echo e(route('markCompleteRouteFront', $listItem->id)); ?>" accept-charset="UTF-8">
                    <?php echo e(csrf_field()); ?>

                    <button type="submit" style="max-height: 25px; margin-left:20px;">Mark complete</button>
                </form>
                </p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <form method="post" action="<?php echo e(route('saveItem0')); ?>" accept-charset="UTF-8">
                    <?php echo e(csrf_field()); ?>

                    <label for="listItems23">New Todo Item</label></br>
                    <input type="text" name="listItem1"></br></br> 
                    <label for="listItems23">New Todo Item must be a number</label></br>
                   <input type="text" name="listItem2"></br> 
                    <button type="submit">Save Item</button>
                </form>
    </body>

</html><?php /**PATH C:\xampp\htdocs\laravel_projects_demos\todo2\resources\views/welcome2.blade.php ENDPATH**/ ?>
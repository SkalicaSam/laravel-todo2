<html>
    <head>
    </head>
    <body>
        <h1>todo list 2<h1>
            

            <form method="post" action="<?php echo e(route('saveItem')); ?>" accept-charset="UTF-8">
                    <?php echo e(csrf_field()); ?>

                    <label for="listItem">New Todo Item</label></br>
                    <input type="text" name="listItem"></br> 

                    <button type="submit">Save Item</button>
                </form>
    </body>

</html><?php /**PATH C:\xampp\htdocs\laravel_projects_demos\todo2\resources\views/welcome.blade.php ENDPATH**/ ?>
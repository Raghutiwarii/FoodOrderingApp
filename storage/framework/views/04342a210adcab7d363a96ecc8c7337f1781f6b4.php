
<?php $__env->startSection('content'); ?>

<div class="flex flex-col items-center">
    <div class="flex flex-col items-center w-4/5">
        <div class="self-end pb-2">
            <button onclick="location.href='/food/addfood'" style="font-size:20px" class="flex py-2 px-4 border border-transparent shadow-sm text-lg 
            font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add <i class="material-icons self-center">add</i></button>
        </div>
        <table class="p-10 border-collapse border bg-white">
            <thead>
                <tr>
                    <th class="border px-2 py-2">ID</th>
                    <th class="border px-2 py-2">Name</th>
                    <th class="border px-2 py-2">Description</th>
                    <th class="border px-2 py-2">Price</th>
                    <th class="border px-2 py-2">Type</th>
                    <th class="border px-2 py-2">Picture</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                    <td class="border px-2 py-2"><?php echo e($food['id']); ?></td>
                    <td class="border px-2 py-2"><?php echo e($food['name']); ?></td>
                    <td class="border px-2 py-2"><?php echo e($food['description']); ?></td>
                    <td class="border px-2 py-2"><?php echo e($food['price']); ?></td>
                    <td class="border px-2 py-2"><?php echo e($food['type']); ?></td>
                    <td class="border px-2 py-2"><?php echo e($food['picture']); ?></td>
                    <td class="border px-2 py-2">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $food)): ?>
                        <form action="/updatefood/<?php echo e($food['id']); ?>" method="GET">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-sky-600">Edit</button>
                        </form>
                        <?php endif; ?>
                    </td>
                    <td class="border px-2 py-2">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $food)): ?>
                        <form action="/food/<?php echo e($food['id']); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="text-red-600">Delete</button>
                        </form>
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <span class="p-5">
            <?php echo e($foods -> links()); ?>

        </span>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food\resources\views/placedOrders.blade.php ENDPATH**/ ?>
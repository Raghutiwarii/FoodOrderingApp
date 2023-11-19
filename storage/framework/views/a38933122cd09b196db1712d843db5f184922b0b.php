

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="text-center"><strong style="font-size:20px">Pending Orders</strong></h1>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="px-3 py-2 mt-4">
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="card-text font-weight-bold">Order ID: <?php echo e($order->id); ?></p>
                        <p class="card-text font-weight-bold">Date: <?php echo e(date_format(date_create($order->date), 'jS F Y')); ?></p>
                        <p class="card-text font-weight-bold">Type: <?php echo e($order->type); ?></p>
                        <p class="card-text font-weight-bold">Address: <?php echo e($order->deliveryAddress); ?></p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <?php $__currentLoopData = $order->food; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="card-text"><?php echo e($food->name); ?></p>
                                        <p class="card-text">Quantity: <b><?php echo e($food->pivot->quantity); ?></b></p>
                                        <p class="card-text">Total: <b>₹<?php echo e(number_format((float)($food->price * $food->pivot->quantity), 2, '.', '')); ?></b> (₹<?php echo e(number_format((float)($food->price), 2, '.', '')); ?> per unit)</p>
                                        <p class="card-text font-weight-bold">Time: <?php echo e(date_format(date_create($order->date), 'H:i:s')); ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="flex rounded-lg">
                                            <img class="flex h-28 w-44 object-fill rounded-lg" src="<?php echo e($food->picture); ?>" alt="<?php echo e($food->name); ?>">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary" onclick="markAsDelivered(<?php echo e($order->id); ?>)">Mark as Delivered</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function markAsDelivered(orderId) {
        if (confirm('Are you sure you want to mark this order as delivered?')) {
            axios.delete(`/orders/${orderId}`)
                .then(response => {
                    if (response.status === 200) {
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('An error occurred while marking the order as delivered.');
                });
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food\resources\views/admin/orders/index.blade.php ENDPATH**/ ?>
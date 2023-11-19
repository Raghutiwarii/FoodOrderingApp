<?php
// Initialize cart array in session
if (session('cart') == null) {
    session()->put('cart', array());
}
?>



<?php $__env->startSection('content'); ?>

<div class="hidden flex w-full justify-center items-center" id="message-modal" data-object="<?php echo e(Session::get('unauthorized')); ?>">
    <div class="px-4 py-2 mb-4 mx-2 bg-red-100 w-8/12 flex">
        <p id="message-content" class="text-red-800 flex-grow m-auto font-semibold"></p>
        <button type="button" class="close text-lg" id="close">x</button>
    </div>
</div>

<div class="mx-8">
    <div class="flex flex-row">
        <div class="flex flex-row space-x-4 flex-grow">
            <span class="font-weight-bold sort-font my-auto"> Filter By :</span>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="/home" class="sort-font">All</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="../home/FastFood" class="sort-font">FastFood</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="../home/Chinese" class="sort-font">Chinese</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="../home/Thali" class="sort-font">Thali</a>
            </div>
        </div>
        <div class="flex flex-row space-x-4 flex-grow justify-end">
            <span class="font-weight-bold sort-font my-auto"> Order By :</span>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="<?php echo e(url()->current().'?asc=true'); ?>" class="sort-font">Lowest</a>
            </div>
            <div class="py-1 px-3 border-solid border-1 border-slate-300 rounded-xl text-center bg-white">
                <a href="<?php echo e(url()->current().'?asc=false'); ?>" class="sort-font">Highest</a>
            </div>
        </div>
    </div>
</div>

<div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5">
    <?php $__currentLoopData = $foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="rounded-md overflow-hidden shadow-md border-1 border-gray-100">
        <a href="../food/<?php echo e($data['id']); ?>">
            <img class="h-48 w-full object-cover" src="<?php echo e($data['picture']); ?>" alt="Mountain">
            <div class="p-4">
                <div class="font-bold text-xl mb-2"><?php echo e($data['name']); ?></div>
                <p class="text-gray-700 text-base">
                ₹ <?php echo e($data['price']); ?>

                </p>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="p-5">
    <?php echo e($foods -> appends(request()->input()) ->  links()); ?>

</div>

<script type="text/javascript">
    function docReady(fn) {
        if (document.readyState === "complete" || document.readyState === "interactive") {
            fn;
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(() => {
        const modal = document.getElementById('message-modal');
        const content = document.getElementById('message-content');
        const closeBtn = document.getElementById('close');

        if (modal.dataset.object != '') {
            modal.classList.remove('hidden');
            content.innerHTML = modal.dataset.object
        }

        closeBtn.addEventListener('click', function(e) {
            modal.classList.add('hidden');
        })


    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food\resources\views/food/home.blade.php ENDPATH**/ ?>
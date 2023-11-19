<?php $__env->startSection('content'); ?>
<div class="flex flex-col items-center">
  <form action="/food/<?php echo e($food['id']); ?>" method="POST" class="w-50">
  <?php echo csrf_field(); ?>
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
        <div>
          <div class="col-span-3 sm:col-span-2">
            <label for="food name" class="block text-lg font-medium text-gray-700"> Food Name </label>
            <div class="mt-1 flex flex-col rounded-md ">
              <input required value="<?php echo e($food['name']); ?>" type="text" name="name" id="name" class="shadow-sm <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-1 border focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-lg border-gray-300" placeholder="Cheeseburger">
              <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
        </div>

        <div>
          <label for="food description" class="block text-lg font-medium text-gray-700"> Food Description </label>
          <div class="mt-1">
            <textarea required id="description" name="description" rows="3" class="<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> resize-none p-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-lg border border-gray-300 rounded-md" placeholder="Tasty cheeseburger with pickles"><?php echo e($food['description']); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>

        <div>
          <label for="food price" class="block text-lg font-medium text-gray-700"> Food Price </label>
          <div class="mt-1 flex flex-col rounded-md">
              <input required value="<?php echo e($food['price']); ?>" type="number" name="price" id="price" class="shadow-sm <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-1 border focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-lg border-gray-300" placeholder="20.00">
              <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div>
          <label for="food type" class="block text-lg font-medium text-gray-700">Food type</label>
          <div>
          <select name="type" id="type" class="flex justify-center mt-1 flex rounded-md shadow-sm p-1 border focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-lg border-gray-300">>
            <option value="FastFood" <?php echo e(($food['type'] == "FastFood") ? "selected" : ""); ?>>FastFood</option>
            <option value="Chinese" <?php echo e(($food['type'] == "Chinese") ? "selected" : ""); ?>>Chinese</option>
            <option value="Thali" <?php echo e(($food['type'] == "Thali") ? "selected" : ""); ?>>Thali</option>
            
          </select>
        </div>

        <div class="mt-3">
          <label for="food price" class="block text-lg font-medium text-gray-700"> Food Photo Link </label>
          <div class="mt-1 flex flex-col rounded-md">
            <input required value="<?php echo e($food['picture']); ?>" type="text" name="picture" id="picture" class="shadow-sm <?php $__errorArgs = ['picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> p-1 border focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-lg border-gray-300" placeholder="https://www.google.com/">
            <?php $__errorArgs = ['picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>  
      </div>
      <div class="px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
      </div>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\food\resources\views/food/updatefood.blade.php ENDPATH**/ ?>
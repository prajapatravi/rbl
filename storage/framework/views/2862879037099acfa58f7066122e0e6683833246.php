

<?php $__env->startSection('title', '| Sub Product'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Create New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Create Product Attributes</strong>
            <a class="btn btn-primary btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('productattribute.index')); ?>">Product Attributes List</a>
        </div>
        <div class="card-body card-block">
            <?php echo Form::open(
                     array(
                       'route' => 'productattribute.store',
                       'class' => 'form-horizontal',
                       'role'=>'form',
                       'data-toggle'=>"validator")
                     ); ?>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label">Product</label>
                        <select name="product_id" class="form-control">
                            <option value="">Select Product</option>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Product Attributes</label>
                        <input type="text" id="text-input" name="product_attribute_name" placeholder="Product Attributes Name" class="form-control" value="<?php echo e(old('product_attribute_name')); ?>" tabindex="1">
                    </div>
                </div>
            </div>    
        </div>
            
        <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
            </form>
        </div>

    </div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script>

        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/productattribute/create.blade.php ENDPATH**/ ?>
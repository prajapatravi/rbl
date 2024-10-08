

<?php $__env->startSection('title', '| Yard'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Edit New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Edit Product</strong> form
        </div>
        <div class="card-body card-block">
            
        <?php echo Form::model($data,
                  array(
                  'method' => 'PATCH',
                    'url' =>'product/'.Crypt::encrypt($data->id),
                    'class' => 'kt-form',
                    'data-toggle'=>"validator")
                  ); ?>

            <div class="row">
                <div class="col-md-4">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Name</label>
                        <input type="text" id="text-input" name="name" placeholder="Yard Name" class="form-control" value="<?php echo e($data->name); ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Bucket</label>
                        <input type="text" id="text-input" name="bucket" placeholder="Bucket Name" class="form-control" value="<?php echo e($data->bucket); ?>" tabindex="2">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/product/edit.blade.php ENDPATH**/ ?>
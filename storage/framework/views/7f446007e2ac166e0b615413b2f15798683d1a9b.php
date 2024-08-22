

<?php $__env->startSection('title', '| Upload'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Create New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            <strong>User Hierarchy Bulk Upload</strong>
            <a class="btn btn-success btn-sm float-right" href="<?php echo e(route('uh.download.sampleexcel')); ?>">Download Sample</a>
            <a class="btn btn-info btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('userhierarchy.index')); ?>">User Hierarchy List</a>
        </div>
        <div class="card-body card-block">
                     
        <form action="<?php echo e(route('userhierarchyimport')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">    
                <div class="col-sm-3">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Select Excel File</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class=" form-group">
                        <input type="file" name="file" accept=".xlsx, .xls, .csv">
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
        jQuery(document).ready(function() {
            jQuery('.datepicker').datepicker({
                format: "mm-yyyy",
                viewMode: "months", 
                minViewMode: "months"
            });
    })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/userheirarchy/upload.blade.php ENDPATH**/ ?>
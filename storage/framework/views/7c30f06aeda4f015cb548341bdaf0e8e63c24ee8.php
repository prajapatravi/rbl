

<?php $__env->startSection('title', '| Product Hierarchy'); ?>

<?php $__env->startSection('sh-detail'); ?>
    Create New
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Product Hierarchy</strong>
        </div>
        <div class="card-body card-block">
            <?php echo Form::open(
                     array(
                       'route' => 'doHierarchy',
                       'class' => 'form-horizontal',
                       'role'=>'form',
                       'data-toggle'=>"validator")
                     ); ?>

            <div class="row">
                <div class="col-md-6">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Agency</label>
                        <select name="branch_id" id="branch" data-placeholder="Choose a Agency..." class="standardSelect form-control" tabindex="3">
                            <option>Choose a Agency...</option>
                            <?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class=" form-group">
                        <label for="text-input" class=" form-control-label">Product Type</label>
                        <select name="product_id" id="type" data-placeholder="Choose a Product Type..." class="standardSelect form-control" tabindex="3">
                            <option>Choose a Products...</option>
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?>(<?php echo e(($value->type==1)?'Recovery':'Regular'); ?>)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">            
                    <div class="form-group">
                        <label for="text-input" class="form-control-label">Select Collection Manager</label>
                        <?php echo Form::select('cm_id', $col_manager_roles, '', ['class' => 'form-control', 'placeholder' => 'Select Collection Manager' ,'id'=>'cm_id']); ?>  

                    </div>
                </div> 
                <div class="col-md-4">            
                    <div class="form-group">
                        <label for="areaCollectionManager-select" class="form-control-label">Select Area Collection Manager</label>
                            <?php echo Form::select('acm_id', $area_col_manager_roles, '', ['class' => 'form-control', 'placeholder' =>'Select Area Collection Manager' ,'id'=>'areaCollectionManager']); ?>

                    </div>
                </div>
                <div class="col-md-4">            
                    <div class="form-group">
                        <label for="regionalCollectionManager" class="form-control-label">Select Regional Collection Manager</label>
                            <?php echo Form::select('rcm_id', $reg_col_manager_roles, '', ['class' => 'form-control', 'placeholder' =>'Select Regional Collection Manager','id'=>'regionalCollectionManager']); ?>

                    </div>
                </div> 
            </div>    
            
            <div class="row">
                <div class="col-md-4">            
                    <div class="form-group">
                        <label for="zonalCollectionManager" class="form-control-label">Select Zonal Collection Manager</label>
                            <?php echo Form::select('zcm_id', $zonal_col_manager_roles, '', ['class' => 'form-control', 'placeholder' =>'Select Zonal Collection Manager', 'id'=>'zonalCollectionManager']); ?>

                    </div>
                </div>  
                <div class="col-md-4">            
                    <div class="form-group">
                        <label for="nationalCollectionManager" class="form-control-label">Select National Collection Manager</label>
                            <?php echo Form::select('ncm_id', $national_col_manager_roles, '', ['class' => 'form-control', 'placeholder' =>'Select Area Collection Manager','id'=>'nationalCollectionManager']); ?>

                    </div>
                </div>
                <div class="col-md-4">            
                    <div class="form-group">
                        <label for="groupProductionHead" class="form-control-label">Select Group Product Head</label>
                            <?php echo Form::select('gph_id', $group_product_head_roles, '', ['class' => 'form-control', 'placeholder' =>'Select Regional Collection Manager','id'=>'groupProductionHead']); ?>

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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cm_id').change(function() {
                var cmId = $(this).val(); // Get the selected Collection Manager ID
              
                if (cmId) {
                    fetchCmanagerDetails(cmId); // Call function to fetch Collection Manager details
                } else {
                    $('#areaCollectionManager').val('');
                    $('#regionalCollectionManager').val('');
                    $('#zonalCollectionManager').val('');
                    $('#nationalCollectionManager').val('');
                    $('#groupProductionHead').val('');                    
                }
            });

            function fetchCmanagerDetails(cmId) {
                $.ajax({
                    url: "<?php echo e(route('product.hierarchy', ['cm_id' => ':cm_id'])); ?>".replace(':cm_id', cmId),
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#areaCollectionManager').val(data.acm_id);
                        $('#regionalCollectionManager').val(data.rcm_id);
                        $('#zonalCollectionManager').val(data.zcm_id);
                        $('#nationalCollectionManager').val(data.ncm_id);
                        $('#groupProductionHead').val(data.gph_id);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            }
        });
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/product/productHierarchy.blade.php ENDPATH**/ ?>
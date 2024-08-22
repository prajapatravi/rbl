

<?php $__env->startSection('title', '| Users'); ?>

<?php $__env->startSection('sh-detail'); ?>
Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="card">

    <!--begin::Portlet-->
    <div class="kt-portlet">
      <div class="card-header">
        <strong>Edit User Hierarchy</strong>
        <!-- <a class="btn btn-primary btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('userhierarchy.index')); ?>">User Heirarchy List</a> -->
      </div>

      <!--begin::Form-->
      
        <?php echo Form::model($data,
                  array(
                  'method' => 'PATCH',
                    'url' =>'userhierarchy/'.Crypt::encrypt($userdata->id),
                    'class' => 'kt-form',
                    'data-toggle'=>"validator")
                  ); ?>



        <div class="card-body card-block">

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class="form-control-label">Select Collection Manager</label>
                </div>
                <div class="col col-md-9">
                    <select name="cm_id"  class="form-control">
                        <?php $__currentLoopData = $col_manager_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->cm_id) && $userdata->cm_id == $v->id): ?> 
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>          
           
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Quality Auditor</label>
                </div>
                <div class="col col-md-9">
                    <select name="qa_id"  class="form-control">
                        <option value="">Select Quality Auditor</option>
                        <?php $__currentLoopData = $quality_auditor_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->qa_id) && $userdata->qa_id == $v->id): ?> 
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Quality Control</label>
                </div>
                <div class="col col-md-9">
                    <select name="qc_id"  class="form-control">
                        <option value="">Select Quality Control</option>
                        <?php $__currentLoopData = $quality_control_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->qc_id) && $userdata->qc_id == $v->id): ?> 
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Area Collection Manager</label>
                </div>
                <div class="col col-md-9">
                    <select name="acm_id"  class="form-control">
                        <option value="">Select Area Collection Manager</option>
                        <?php $__currentLoopData = $area_col_manager_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->acm_id) && $userdata->acm_id == $v->id): ?> 
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Regional Collection Manager</label>
                </div>
                <div class="col col-md-9">
                    <select name="rcm_id"  class="form-control">
                        <option value="">Select Regional Collection Manager</option>
                        <?php $__currentLoopData = $reg_col_manager_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->rcm_id) && $userdata->rcm_id == $v->id): ?> 
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Zonal Collection Manager</label>
                </div>
                <div class="col col-md-9">
                    <select name="zcm_id"  class="form-control">
                        <option value="">Select Zonal Collection Manager</option>
                        <?php $__currentLoopData = $zonal_col_manager_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->zcm_id) && $userdata->zcm_id == $v->id): ?>
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select National Collection Manager</label>
                </div>
                <div class="col col-md-9">
                    <select name="ncm_id"  class="form-control">
                        <option value="">Select National Collection Manager</option>
                        <?php $__currentLoopData = $national_col_manager_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->ncm_id) && $userdata->ncm_id == $v->id): ?>
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Group Product Head</label>
                </div>
                <div class="col col-md-9">
                    <select name="gph_id"  class="form-control">
                        <option value="">Select Group Product Head</option>
                        <?php $__currentLoopData = $group_product_head_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->gph_id) && $userdata->gph_id == $v->id): ?>
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="multiple-select" class=" form-control-label">Select Head of the Collections</label>
                </div>
                <div class="col col-md-9">
                    <select name="hc_id"  class="form-control">
                        <option value="">Select Head of the Collections</option>
                        <?php $__currentLoopData = $head_collection_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($v->id); ?>" 
                                <?php if(isset($userdata->hc_id) && $userdata->hc_id == $v->id): ?>
                                    selected 
                                <?php endif; ?>>
                                <?php echo e($v->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
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

      <!--end::Form-->
    </div>

    <!--end::Portlet-->
  </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/userheirarchy/edit.blade.php ENDPATH**/ ?>




<?php $__env->startSection('title', '| Users'); ?>



<!-- <?php $__env->startSection('sh-detail'); ?>

Users

<?php $__env->stopSection(); ?> -->



<?php $__env->startSection('content'); ?>

<div class="row">

		<div class="col-lg-12" style="margin-top:10x">

		</div>

</div>

<div class="animated fadeIn">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">User Hierarchyt List</strong>
					<a class="btn btn-info btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('userhierarchyBulkUpload')); ?>">Import User Hierarchy</a>

					<!-- <a class="btn btn-primary btn-sm float-right" href="<?php echo e(route('bulkDeactivate')); ?>">De-Activate user(Bulk)</a>
					<a class="btn btn-primary btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('userUpload')); ?>">Import Users (Create bulk user)</a>

					<a class="btn btn-primary btn-sm float-right" style="margin-right: 5px" href="<?php echo e(route('excelDownloadUser')); ?>" target="_blank">Export Users</a> -->

				</div>

				<div class="card-body">

					<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">

						<thead>
							<tr>
								<th scope="col">#</th>
								<th class="font-weight-bold" scope="col">Collection Manager</th>
								<th scope="col">Quality Auditor</th>
								<th scope="col">Quality Control</th>
								<th scope="col">Area Collection Manager</th>
								<th scope="col">Regional Collection Manager</th>
								<th scope="col">Zonal Collection Manager</th>
								<th scope="col">National Collection Manager</th>
								<th scope="col">Group Product Head</th>
								<th scope="col">Head of the Collections</th>
								<th scope="col">Status</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>

						<tbody>

							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr scope="row">
								<td><?php echo e($loop->iteration); ?></td>
								<td class="font-weight-bold">
									<?php if($row->cm_name): ?>
										<?php echo e($row->cm_name); ?>

									<?php else: ?>
										---
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->qa_name): ?>
										<?php echo e($row->qa_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->qc_name): ?>
										<?php echo e($row->qc_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->acm_name): ?>
										<?php echo e($row->acm_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->rcm_name): ?>
										<?php echo e($row->rcm_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->zcm_name): ?>
										<?php echo e($row->zcm_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->ncm_name): ?>
										<?php echo e($row->ncm_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->gph_name): ?>
										<?php echo e($row->gph_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->hc_name): ?>
										<?php echo e($row->hc_name); ?>

									<?php else: ?>
										-
									<?php endif; ?>
								</td>
								<td>
									<?php if($row->status == 1): ?>
										Activated
									<?php else: ?> 
										De-Activated
									<?php endif; ?>
								</td>

								<td nowrap>
									<div class="btn-group">
									<a href="<?php echo e(url('userhierarchy/'.Crypt::encrypt($row->id).'/edit')); ?>" class="btn btn-xs btn-info mr-1" title="View">
										<i class="fa fa-edit"></i>
									</a>

									<form action="<?php echo e(url('userhierarchy/' . Crypt::encrypt($row->id))); ?>" method="POST" style="display:inline;">
                                      <?php echo csrf_field(); ?>
                                           <?php echo method_field('DELETE'); ?>
                                     <button type="submit" class="btn btn-xs btn-danger mr-1" title="Delete">
                                         <i class="fa fa-trash"></i>
                                       </button>
                                            </form>

									</div>
								</td>

								

								
							</tr>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script>

	jQuery(document).on('ready',function(){

		jQuery('#kt_table_1').DataTable();

	})

</script>

<script type="text/javascript">
   function block_user(id) {
		if (confirm("Are you sure you want to block?")) {

			var link  = '/user/'+id+'/disable'
			location.href = link;
		}
	}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/userheirarchy/list.blade.php ENDPATH**/ ?>
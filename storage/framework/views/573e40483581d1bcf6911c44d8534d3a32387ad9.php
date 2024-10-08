

<?php $__env->startSection('css'); ?>



<style>

.sp-row .row {

    margin-bottom: 15px;

}





.sp-row .row {

    margin-bottom: 15px;

}



.flex-container {

    display: flex;

    align-items: center;

}



.flex-container {

    display: flex;

    align-items: center;

}

.kt-font-bolder {

    font-weight: 600 !important;

}

#seprator {

    margin: 2.5rem 0 0 0;

}

#seprator {

    margin: 2.5rem 0 0 0;

}

.kt-separator.kt-separator--space-lg {

    margin: 2.5rem 0;

}

.kt-separator.kt-separator--border-dashed {

    border-bottom: 1px dashed #ebedf2;

}

.kt-separator {

    height: 0;

    margin: 20px 0;

    border-bottom: 1px solid #ebedf2;

}

.kt-font-primary {

    color: #5867dd !important;

}



.kt-font-bolder {

    font-weight: 600 !important;

}

.kt-font-bold {

    font-weight: 500 !important;

}

.centerparameter{

	display: flex;

    justify-content: center;

    align-items: center

}

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>

Audit 

<?php $__env->stopSection(); ?>



<?php $__env->startSection('sh-detail'); ?>

Messages

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



<div class="row">

	<div class="col-lg-12" style="margin-top:10x">

	</div>

</div>

<div class="animated fadeIn">

	<div class="row">

		<div class="col-lg-12">

			<div class="card"> 

				<div class="card-header" style="background-image: linear-gradient(to right, rgb(132, 94, 194), rgb(144, 109, 198), rgb(156, 125, 201), rgb(168, 140, 205), rgb(179, 156, 208));color:#fff">

					<strong class="card-title"><?php echo e(($data->lob=='commercial_vehicle')?'Commercial Vehicle':ucfirst($data->lob)); ?> | <?php echo e(ucfirst(str_replace('_',' ',$data->type))); ?></strong>

				</div>

				<div class="card-body">

                  <input type="hidden" value="<?php echo e($result->id); ?>" id="auditid" name="auditData">
					<div class="row">

						<?php if($data->type=='branch'): ?>

							<div class="col-md-3 form-group">

								<label>Branch*</label>

								<select name="branch" class="form-control branch" disabled>

								<option value="">Choose Branch</option>

								<?php $__currentLoopData = $branch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  


									<option value="<?php echo e($item->id); ?>" <?php echo e(($item->id==$result->branch_id)?'selected':''); ?>><?php echo e($item->name); ?></option>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</select>
                              
							</div>

						<?php elseif($data->type=='agency'): ?>

							<div class="col-md-3 form-group">

								<label>Agency*</label>

								<select name="agency" class="form-control agency" disabled>

								<option value="">Choose Agency</option>

								<?php $__currentLoopData = $agency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

									<option value="<?php echo e($item->id); ?>" <?php echo e(($item->id==$result->agency_id)?'selected':''); ?>><?php echo e($item->name); ?></option>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</select>

							</div>

						<?php elseif($data->type=='repo_yard'): ?>

							<div class="col-md-3 form-group">

								<label>Yard*</label>

								<select name="yard" class="form-control yard" disabled>

								<option value="">Choose Yard</option>

								<?php $__currentLoopData = $yard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

									<option value="<?php echo e($item->id); ?>" <?php echo e(($item->id==$result->yard_id)?'selected':''); ?>><?php echo e($item->name); ?></option>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</select>

							</div>

							<?php elseif($data->type=='branch_repo'): ?>

							<div class="col-md-3 form-group">

								<label>Branch Repo*</label>

								<select name="branch_repo" class="form-control branch_repo" disabled>

								<option value="">Choose Branch Repo</option>

								<?php $__currentLoopData = $branchRepo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

									<option value="<?php echo e($item->id); ?>" <?php echo e(($item->id==$result->branch_repo_id)?'selected':''); ?>><?php echo e($item->name); ?></option>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</select>

							</div>

							<?php elseif($data->type=='agency_repo'): ?>

							<div class="col-md-3 form-group">

								<label>Agency Repo*</label>

								<select name="agency_repo" class="form-control agency_repo" disabled>

								<option value="">Choose Yard</option>

								<?php $__currentLoopData = $agencyRepo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

									<option value="<?php echo e($item->id); ?>" <?php echo e(($item->id==$result->agency_repo_id)?'selected':''); ?>><?php echo e($item->name); ?></option>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</select>

							</div>

						<?php endif; ?>

						<div class="col-md-3 form-group" id="product" style="display:none;">

							<label>Product*</label>

							<select name="product" class="form-control product" id="productSelect" disabled>

							<option value="">Choose Product</option>

							</select>

						</div>

					</div>

					<div class="row" id="data">

					</div>

				</div>

			</div>

			<div class="card">

				<div class="card-header"  style="background-image: linear-gradient(to right, rgb(132, 94, 194), rgb(144, 109, 198), rgb(156, 125, 201), rgb(168, 140, 205), rgb(179, 156, 208));color:#fff">

					<strong class="card-title">Audit</strong>

				</div>

				<div class="card-body">

					

					<div class="row">

						<div class="col-md-2 kt-font-bolder">

							Parameter

						</div>

						<div class="col-md-10 kt-font-bolder">

							<div class="row">

								<div class="col-md-2 kt-font-bolder">Sub Parameter</div> 

								<div class="col-md-2 kt-font-bolder">Observation</div> 

								<div class="col-md-2 kt-font-bolder">Scored</div> 

								<div class="col-md-2 kt-font-bolder">Remarks</div>

								<div class="col-md-2 kt-font-bolder">Action</div>

							</div>

						</div>

					</div>

					<div id="seprator" class="kt-separator kt-separator--border-dashed kt-separator--space-lg"></div>

					<?php

						$total=0;

					?>

					<?php $__currentLoopData = $data->parameter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

					<div class="row flex-container" style="border-bottom: 1px solid rgb(204, 204, 204); padding: 20px 0px; height: 100%;">

						<div class="col-md-2 kt-font-bolder kt-font-primary flex-item centerparameter" >

							<?php echo e($item->parameter); ?>


						</div>

						<div class="col-md-10 sp-row">

							<?php $__currentLoopData = $item->qm_sheet_sub_parameter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="row flex-container mb-2">

								<?php if(in_array($value->id,$redalertIds)): ?>

								<div class="col-md-2 kt-font-bold" style="color:red;">

								<?php else: ?>

								<div class="col-md-2 kt-font-bold">

								<?php endif; ?>

									<?php echo e($value->sub_parameter); ?> <i title="sdfdf" class="la la-info-circle kt-font-warning sp-details-top"></i>

								</div>

								<div class="col-md-2">

								<select class="form-control 0bervation" id="obs<?php echo e($value->id); ?>" data-id="<?php echo e($value->id); ?>" data-parameterId="<?php echo e($item->id); ?>" data-point="<?php echo e($value->weight); ?>" disabled>

										<option value="">Choose type</option>

									<?php if(isset($resultSubPar[$value->id]) && $resultSubPar[$value->id]->option_selected==null): ?>

										<?php if($value->pass==1): ?><option value="<?php echo e($value->weight); ?>" <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->selected_option==$value->weight))?'selected':''); ?>>Satisfactory</option><?php endif; ?>

										<?php if($value->fail==1): ?><option value="0"  <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_critical==0 && $resultSubPar[$value->id]->selected_option==0))?'selected':''); ?>>Unsatisfactory</option><?php endif; ?>

									<?php else: ?>

										<?php if($value->pass==1): ?><option value="<?php echo e($value->weight); ?>" <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->option_selected=='Pass'))?'selected':''); ?>>Satisfactory</option><?php endif; ?>

										<?php if($value->fail==1): ?><option value="0"  <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_critical==0 && $resultSubPar[$value->id]->option_selected=='Fail'))?'selected':''); ?>>Unsatisfactory</option><?php endif; ?>

									<?php endif; ?>

									<?php if($value->critical==1): ?><option value="Critical"  <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_critical==1))?'selected':''); ?>>Critical</option><?php endif; ?>

									<?php if($value->na==1): ?><option value="N/A"  <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_critical==0 && $resultSubPar[$value->id]->selected_option=='N/A'))?'selected':''); ?>>N/A</option><?php endif; ?>

									<?php if($value->pwd==1): ?><option value="<?php echo e(round(($value->weight)/2,2)); ?>"  <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->selected_option==round(($value->weight)/2,2)))?'selected':''); ?>>PWD</option><?php endif; ?>

									<?php if($value->per==1): ?><option value="<?php echo e(round(($value->weight))); ?>" data-type="rating" <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_percentage==1))?'selected':''); ?>>Percentage</option><?php endif; ?>

									</select>

									<span style="display:none" id="org<?php echo e($value->id); ?>"><?php echo e($value->weight); ?></span>

								</div>

								<div class="col-md-2">

								<select class="form-control ratingSelect" name="ratingSelect" id="ratingSelect<?php echo e($value->id); ?>"  style="<?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_percentage!=1))?'display:none':'display:block'); ?>" data-id="<?php echo e($value->id); ?>" data-parameterId="<?php echo e($item->id); ?>" disabled>

									<option>select percentage</option>

									<?php for($counting=10;$counting<=100;$counting=$counting+10): ?>

									<option value="<?php echo e($counting); ?>" <?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->selected_per==$counting))?'selected':''); ?>><?php echo e($counting); ?>%</option>

									<?php endfor; ?>

								</select>

								<?php if(isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_percentage!=1)): ?>

								<input type="text" id="<?php echo e($value->id); ?>" readonly="readonly" class="form-control" value="<?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_critical==1))?'Critical':($resultSubPar[$value->id]->score ?? '')); ?>"  style="<?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_percentage==1))?'display:none':'display:block'); ?>">

								<?php else: ?>

								<input type="text" id="<?php echo e($value->id); ?>" readonly="readonly" class="form-control" value="rating"  style="<?php echo e((isset($resultSubPar[$value->id]) && ($resultSubPar[$value->id]->is_percentage==1))?'display:none':'display:block'); ?>">

								<?php endif; ?>

								</div>

								<div class="col-md-2">

								

								</div>

								<div class="col-md-2">

									

								</div>

							</div>

							<div class="col-md-12 row">

								<div class="col-md-10">

									<textarea class="form-control" id="remark<?php echo e($value->id); ?>" placeholder="Enter Remark Here" disabled><?php echo e($resultSubPar[$value->id]->remark ?? ''); ?></textarea>

								</div>

								<?php if(in_array($value->id,$redalertIds)): ?>

												<img src="<?php echo e(URL::asset('/public/assets/images/flag.png')); ?>" style="width:30px;height:30px;" data-id="">

								<?php endif; ?>

							</div>

							<div class="col-md-12 row">

								<div class="col-md-10 preview<?php echo e($value->id); ?>">

									<?php $__currentLoopData = $value->artifact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<?php if(in_array($art->id,$artifactIds)): ?>

											<div class="img-wrap art<?php echo e($art->id); ?>" style="position: relative;display: inline-block;font-size: 0;">

												<!-- <span class="close">&times;</span> -->

												<img src="<?php echo e(URL::asset('storage/app/'.$art->file)); ?>" style="width:100px;height:100px;" data-id="<?php echo e($art->id); ?>">

											</div>

										<?php endif; ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								</div>

							</div>

							<div id="seprator" class="kt-separator kt-separator--border-dashed "></div>

							<?php

								$total=$total+$value->weight;

							?>

							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<span style="display:none" id="total<?php echo e($item->id); ?>"><?php echo e($total); ?></span>		

						</div>

					</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					

					<div>

						

				</div>

			</div>

		</div>



		<div class="card">

			<div class="card-header" style="background-image: linear-gradient(to right, rgb(255, 199, 95), rgb(255, 211, 97), rgb(254, 223, 101), rgb(252, 236, 106), rgb(249, 248, 113));color:#fff">

				<strong class="card-title">Result</strong>

			</div>

			<div class="card-body">

				

		<!-- <div class="row" style="border-bottom: 1px solid rgb(204, 204, 204);">

			<div class="col-lg-4 kt-font-bolder">&nbsp;</div>

			<div class="col-lg-4 kt-font-bolder">Scored</div>

			<div class="col-lg-4 kt-font-bolder">Scores%</div>

		</div>

		<div class="row" style="padding: 15px 0px;">

			<div class="col-lg-2 kt-font-bolder">Parameter</div>

			<div class="col-lg-2 kt-font-bolder">Scorable</div>

			<div class="col-lg-2 kt-font-bolder">With FATAL</div>

			<div class="col-lg-2 kt-font-bolder">Without FATAL</div>

			<div class="col-lg-2 kt-font-bolder">With FATAL</div>

			<div class="col-lg-2 kt-font-bolder">Without FATAL</div>

		</div> -->

		<div class="row" style="border-bottom: 1px solid rgb(204, 204, 204);">

			<!-- <div class="col-lg-4 kt-font-bolder">&nbsp;</div> -->

			<div class="col-lg-3 kt-font-bolder">Parameter</div>

			<div class="col-lg-3 kt-font-bolder">Scorable</div>

			<div class="col-lg-3 kt-font-bolder">Scored</div>

			<div class="col-lg-3 kt-font-bolder">Scores%</div>

		</div>

		

		<?php $__currentLoopData = $data->parameter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<!-- <div class="row" style="border-bottom: 1px solid rgb(204, 204, 204); padding: 20px 0px; height: 100%;">

				<div class="col-lg-2 kt-font-bold kt-font-primary"><?php echo e($item->parameter); ?></div>

			<div class="col-lg-2" id="scroable<?php echo e($item->id); ?>">0</div>

				<div class="col-lg-2 kt-font-danger" id="wfatal<?php echo e($item->id); ?>">0</div>

				<div class="col-lg-2" id="wnfatal<?php echo e($item->id); ?>">0</div>

				<div class="col-lg-2 kt-font-danger" id="wfatalper<?php echo e($item->id); ?>">0 %</div>

				<div class="col-lg-2" id="wnfatalper<?php echo e($item->id); ?>">0 %</div>

			</div> -->

			<div class="row" style="border-bottom: 1px solid rgb(204, 204, 204); padding: 20px 0px; height: 100%;">

				<div class="col-lg-3 kt-font-bold kt-font-primary"><?php echo e($item->parameter); ?></div>

				<div class="col-lg-3" id="scroable<?php echo e($item->id); ?>">0</div>

				<div class="col-lg-3 kt-font-danger" id="wfatal<?php echo e($item->id); ?>">0</div>

				<div class="col-lg-3" id="wfatalper<?php echo e($item->id); ?>">0</div>

			</div>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



		<!-- <div class="row" style="padding: 20px 0px; height: 100%;">

			<div class="col-lg-2 kt-font-bold kt-font-success">Over All</div>

			<div class="col-lg-2 kt-font-bold" id="scroable">0</div>

			<div class="col-lg-2 kt-font-bold kt-font-danger" id="wfatal">0</div>

			<div class="col-lg-2 kt-font-bold" id="wnfatal">0</div>

			<div class="col-lg-2 kt-font-bold kt-font-danger" id="wfatalper">0%</div>

			<div class="col-lg-2 kt-font-bold"  id="wnfatalper">0%</div>

		</div> -->

		<div class="row" style="padding: 20px 0px; height: 100%;">

			<div class="col-lg-3 kt-font-bold kt-font-success">Over All</div>

			<div class="col-lg-3 kt-font-bold" id="scroable">0</div>

			<div class="col-lg-3 kt-font-bold kt-font-danger" id="wfatal">0</div>

			<div class="col-lg-3 kt-font-bold" id="wfatalper">0</div>

		</div>

	</div>

</div>

	</div>



	<!-- <div class="col-md-12">

		

		<div class="card">

			<?php echo csrf_field(); ?>

			<div class="card-header" style="background-image: linear-gradient(to right, rgb(132, 94, 194), rgb(144, 109, 198), rgb(156, 125, 201), rgb(168, 140, 205), rgb(179, 156, 208));color:#fff">

				<h5>Update QC Status</h5>

			</div>

			<div class="card-body">

				<div class="row">

					<input type="hidden" name="qm_sheet_id" value="<?php echo e($result->qm_sheet_id); ?>">

					<input type="hidden" name="audit_id" value="<?php echo e($result->id); ?>">

					<div class="col-md-6 form-group">

						<label>Status*</label>

						<select class="form-control" name="status" required>

							<option>Select one!</option> 

							<option value="1">Pass with edit</option> 

							<option value="2">Pass</option> 

							<option value="3">Failed</option>

						</select>

					</div>

					<div class="col-md-6 form-group">

						<label>Feedback</label>

						<textarea class="form-control" name="feedback"></textarea>

					</div>

				</div>

			</div>

			<div class="card-footer">

				<button type="submit" class="btn btn-primary btn-sm submit">

					<i class="fa fa-dot-circle-o"></i> Submit

				</button>

				<button type="reset" class="btn btn-danger btn-sm">

					<i class="fa fa-ban"></i> Reset

				</button>

			</div>

		

		</div>

	</div> -->

</div>

	

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php echo $__env->make('shared.table_css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<style>

.img-wrap .close {

    position: absolute;

    top: 2px;

    right: 2px;

    z-index: 100;

    background-color: #FFF;

    padding: 5px 2px 2px;

    color: #000;

    font-weight: bold;

    cursor: pointer;

    opacity: .2;

    text-align: center;

    font-size: 22px;

    line-height: 10px;

    border-radius: 50%;

}

.img-wrap:hover .close {

    opacity: 1;

}

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>

jQuery('#collection_manager-select').on('change',function(e){

	var code =jQuery(this).data('code');

	var bucket =jQuery(this).data('bucket');

	jQuery('input[name=Collection_Manager_bucket]').val(bucket)

	jQuery('input[name=Collection_Managercode]').val(code)

})

jQuery(document).on('change', '.artifact', function(e){

	// console.log(e)

	if(e.target.files.length>0){

		jQuery('#moreArtifact').append('<input type="file" id="file" name="artifactfile[]" class="form-control-file artifact file">')

	}

})

jQuery(document).on('click', '.close', function() {

		var id = jQuery(this).closest('.img-wrap').find('img').data('id');

		var data={'id':id,'_token':'<?php echo e(csrf_token()); ?>'}

		var saveData = jQuery.ajax({

				type: 'DELETE',

				url: "<?php echo e(url('artifact')); ?>/"+id,

				data: data,

				success: function(resultData) { 

					console.log(resultData)

					jQuery('.art'+id).remove();

				}

			});

		saveData.error(function() { alert("Something went wrong"); });

});

	var result={};

	var par={};

	var subpar={};

	<?php

	foreach($data->parameter as $item)

	{

		?>

		result[<?php echo e($item->id); ?>]={};

		<?php

	}

	

	foreach($resultSubPar as $k=>$v){

		$subValue=($v->is_critical==1)?"Critical":$v->score;

		?>	

		subpar[<?php echo e($k); ?>]=<?php echo e($v->id); ?>


		resultFun('<?php echo e($subValue); ?>', <?php echo e($k); ?>,<?php echo e($v->parameter_id); ?>)

	<?php

	}

	foreach($resultPar as $k=>$v){

	?>

		par[<?php echo e($k); ?>]=<?php echo e($v->id); ?>


	<?php

	}

	?>

	function sum( obj ) {

		var sum = 0;

		for( var el in obj ) {

			if( obj.hasOwnProperty( el ) ) {

				sum += parseFloat( obj[el] );

			}

		}

		return sum;

	}

	function totalfun( obj ){

		var total=0;

		var parmeterTotal=0;

		for( var el in obj ) {

			if( obj.hasOwnProperty( el ) ) {

				var subtotal=0

				for( var item in obj[el] ) {

				if( obj[el].hasOwnProperty( item ) ) {

					if(obj[el][item]!='N/A'){

						paramterValue=jQuery('#org'+item).html();

					}

					else{

						paramterValue=0;

					}

					if(obj[el][item]!='Critical'){

						subtotal=parseFloat(subtotal)+parseFloat((obj[el][item]=='N/A'?0:obj[el][item]));

						parmeterTotal=parmeterTotal+parseFloat(paramterValue);

					}

					else{

						subtotal=0;

						parmeterTotal=parmeterTotal+parseFloat(paramterValue);

						break;

					}

				}

			}

			total=parseFloat(subtotal)+parseFloat(total);

				// total +=sum(obj[el])

			}

		}

		jQuery('#scroable').text(parmeterTotal)

		jQuery('#wfatal').text(total)

		jQuery('#wnfatal').text(total)

		var wfatalper=(total!=0)?(total/parmeterTotal)*100:0;

		// var wnfatalper=(total!=0)?(total/total)*100:0;

		jQuery('#wfatalper').text(wfatalper.toFixed(2)+'%')

		// jQuery('#wnfatalper').text(wnfatalper+'%')

	}

	var total=0;

	function resultFun(value, id,parameterId){

		console.log(value, id,parameterId)

		result[parameterId][id]=value;

		var total=0;

		var parmeterTotal=0;

			for( var el in result[parameterId] ) {

				if( result[parameterId].hasOwnProperty( el ) ) {

					var paramterValue=0;

					if(result[parameterId][el]!='N/A'){

						paramterValue=jQuery('#org'+el).html();

					}

					else{

						paramterValue=0;

					}

					if(result[parameterId][el]!='Critical'){

						total=parseFloat(total)+parseFloat((result[parameterId][el]=='N/A'?0:result[parameterId][el]));

						parmeterTotal=parmeterTotal+parseFloat(paramterValue);

					}

					else{

						total=0;

						parmeterTotal=parmeterTotal+parseFloat(paramterValue);

						break;

					}

				}

			}

			console.log(total)

		jQuery('#scroable'+parameterId).text(parmeterTotal)

		jQuery('#wfatal'+parameterId).text(total)

		// jQuery('#wnfatal'+parameterId).text(total)

		var wfatalper=(total!=0)?(total/parmeterTotal)*100:0;

		// var wnfatalper=(total!=0)?(total/total)*100:0;

		jQuery('#wfatalper'+parameterId).text(wfatalper.toFixed(2)+'%')

		// jQuery('#wnfatalper'+parameterId).text(wnfatalper+'%')

		totalfun(result)

		

	}

	

	jQuery(document).on('ready',function(e){
		

		jQuery('#collection_manager-select').val("<?php echo e($result->collection_manager_id); ?>")

		var type="<?php echo e($data->type); ?>"
	

		console.log(type)

		if(type=='branch'){

			gerProduct('<?php echo e($result->branch_id); ?>','branch')

			editBranch('<?php echo e($result->branch_id); ?>','<?php echo e($result->product_id); ?>','branch')

		}

		else if(type=='agency'){
		
			gerProduct('<?php echo e($result->agency_id); ?>','agency')

			editBranch('<?php echo e($result->agency_id); ?>','<?php echo e($result->product_id); ?>','agency')

		}

		else if(type=='branch_repo'){

			gerProduct('<?php echo e($result->branch_repo_id); ?>','branch_repo')

			editBranch('<?php echo e($result->branch_repo_id); ?>','<?php echo e($result->product_id); ?>','branch_repo')

		}

		else if(type=='agency_repo'){

			gerProduct('<?php echo e($result->agency_repo_id); ?>','agency_repo')

			editBranch('<?php echo e($result->agency_repo_id); ?>','<?php echo e($result->product_id); ?>','agency_repo')

		}

		else{

			gerProduct('<?php echo e($result->yard_id); ?>','yard')

			editBranch('<?php echo e($result->yard_id); ?>','<?php echo e($result->product_id); ?>','yard')

		}

	})

	

	function gerProduct(id,type){

		var saveData = jQuery.ajax({

			type: 'get',

			url: "<?php echo e(url('get_product')); ?>/"+id+'/'+type,

			dataType: "text",

			success: function(resultData) { 

				var data='';

				var obj=JSON.parse(resultData)

				obj.data.forEach(function(item, index){

					data=data+'<option value="'+item.id+'"'+(item.id==<?php echo e($result->product_id); ?>?'selected':'')+' >'+item.name+'</option>'

					// data=data+'<option value="'+item.id+'">'+item.name+'</option>'

					// data=dadata=data+'<option value="'+item.product.id+'">'+item.product.name+'</option>'

				});

				jQuery('#product').show();

				jQuery('#productSelect').attr('data-type',type)

				jQuery('#productSelect').attr('data-id',id)

				jQuery('#productSelect').html(data)

				// window.location='<?php echo e(url("audited_list")); ?>'

			}

		});

		saveData.error(function() { alert("Something went wrong"); });

	}

	function editBranch(id,product_id,type){
		
	
     // var auditid='null';
      var auditid=document.getElementById("auditid").value;

		var saveData = jQuery.ajax({
			

			type: 'get',

			url: "<?php echo e(url('get_branch_detail_qc')); ?>/"+id+'/'+type+'/'+auditid+'/'+product_id,
			//url: "http://idfc.qdegrees.com/get_branch_detail_qc/"+id+'/'+type+'/'+product_id,
			//url: "<?php echo e(URL::to('get_branch_detail_qc')); ?>/"+id+'/'+type+'/'+product_id,
			

			dataType: "text",

			success: function(resultData) { 

				console.log(resultData)

				jQuery('#data').html(resultData)

				jQuery('#collection_manager-select').val("<?php echo e($result->collection_manager_id); ?>")

				var code =jQuery('#collection_manager-select').find(':selected').data('code');

				var bucket =jQuery('#collection_manager-select').find(':selected').data('bucket');

				jQuery('input[name=Collection_Manager_bucket]').val(bucket)

				jQuery('input[name=Collection_Managercode]').val(code)

				

				<?php if($result->collection_manager_email != ''): ?>

					var html='<div>\

						<div>\

						<?php echo e($result->collectionuser->name); ?> (<?php echo e($result->collection_manager_email); ?>) change by <?php echo e($result->qa_qtl_detail->name); ?>\

						</div>\

						<div>\

							<button class="btn btn-sm btn-success" onclick="SaveData(`<?php echo e($result->collection_manager_email); ?>`,<?php echo e($result->id); ?>,`collection`)">Accept</button>\

							<button class="btn btn-sm btn-danger" onclick="RejectData(`<?php echo e($result->collection_manager_email); ?>`,<?php echo e($result->id); ?>,`collection`)">Reject</button>\

						</div>\

					</div>'

					jQuery('#error').show();

					jQuery('.error').show();

					jQuery('#error').html(html)

				<?php endif; ?>

				<?php if($result->agency_manager_email != ''): ?>

				var htmla='<div>\

						<div>\

							<?php echo e($result->agencyuser->name); ?> (<?php echo e(($result->agency_manager_email)); ?>) change by <?php echo e($result->qa_qtl_detail->name); ?>\

						</div>\

						<div>\

							<button class="btn btn-sm btn-success"  onclick="SaveData(`<?php echo e($result->agency_manager_email); ?>`,<?php echo e($result->id); ?>,`agency`);">Accept</button>\

							<button class="btn btn-sm btn-danger" onclick="RejectData(`<?php echo e($result->agency_manager_email); ?>`,<?php echo e($result->id); ?>,`agency`);">Reject</button>\

						</div>\

					</div>'

					jQuery('#agency_error').show();

					jQuery('.agency_error').show();

					jQuery('#agency_error').html(htmla)

				<?php endif; ?>

				<?php if($result->yard_manager_email != ''): ?>

				var htmlb='<div>\

						<div>\

							<?php echo e($result->yarduser->name); ?> (<?php echo e(($result->yard_manager_email)); ?>) change by <?php echo e($result->qa_qtl_detail->name); ?>\

						</div>\

						<div>\

							<button class="btn btn-sm btn-success"  onclick="SaveData(`<?php echo e($result->yard_manager_email); ?>`,<?php echo e($result->id); ?>,`yard`)">Accept</button>\

							<button class="btn btn-sm btn-danger" onclick="RejectData(`<?php echo e($result->yard_manager_email); ?>`,<?php echo e($result->id); ?>,`yard`)">Reject</button>\

						</div>\

					</div>'

					jQuery('#yard_error').show();

					jQuery('.yard_error').show();

					jQuery('#yard_error').html(htmlb)

				<?php endif; ?>

			}

		});

		saveData.error(function() { alert("Something went wrong"); });

	}

	

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\rbl\resources\views/audit/view_sheet.blade.php ENDPATH**/ ?>
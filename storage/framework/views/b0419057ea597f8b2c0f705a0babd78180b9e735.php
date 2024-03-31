<style>
	.editsection {
		display: none;
	}

	.editsection-content{
		background-color: white;
		display: none;
		width: 100%;
		border-radius: 15px 15px 0 0;
		z-index: 201;
	}

	.dt-overlay {
		position: fixed;
		left:0;
		top:0;
		right:0;
		bottom: 0;
		background-color: rgba(0, 0, 0, 0.432);
		z-index: 200;
	}
	.cus-font{
		font-size: 25px;
		font-weight: bold;
	}
	.cus-first{
		padding: 10px 10%;
	}
	.cus-first-1{
		color: rgb(120, 120, 120);
		/* padding: 10px 14%; */
	}
	.cus-second{
		padding: 10px 2% 10px 5%;
	}
	.cus-second-1{
		padding: 10px 5% 10px 2%;
	}
	.custom-define-style{
		background-color: transparent;
		border: rgb(220, 220, 220) solid 2px;
		padding: 17.5px;
		border-radius: 12px;
	}
	.custom-btn-set{
		font-size: 20px;
    width: fit-content;
    text-align: center;
    margin: auto;
    border: rgb(224,224,224) 2px solid;
		color: rgb(70,215,190);
		background-color: transparent;
		border-radius: 8px;
		border-style: outset;
	}

	/* end promote part */
</style>

<div class="editsection col-12 card p-4 ">
	<div class="dt-comment-edit editsection-content" >
		<div class="comment-body w-full" >
			<div class="promote-comment-part">
				<div class="comment-logo-part"  >
					<div class="comment-logo-detail-info">
						<p class="py-auto"><strong>Comments</strong></p>
					</div>
				</div>	
				<div class="close-promote-modal fs-4 dt-close_btn">
					×
				</div>														
			</div>
			<hr>
			<div class="">
				<div class="p-0 comment-scroll col-12" >
					<ul class="p-0 mo-comments" style="list-style: none;">
						<?php
							$item = $videos[0];
						?>
						
						<?php $__currentLoopData = $item->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li>
							<div class="inline-flex mo-card-info w-full" style="margin-top: 10px">
								<div>
									<img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
								</div>
								<div class="pl-2 comment-info" >
									<?php if(auth()->user()->id === $comment->user_id): ?>
										<p class="favor-ico">
											<a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-edit"></i> </a>
											<a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-trash"></i> </a>
										</p>
									<?php else: ?>
										<span class="favor-ico" onclick="onFavorHandle(this)" data-id="<?php echo e($comment->id); ?>"><i class="fa fa-heart"></i></span>
									<?php endif; ?>
									<p class="font-bold"><b><?php echo e(\App\User::find($comment->user_id)->first_name); ?> <?php echo e(\App\User::find($comment->user_id)->last_name); ?></b></p>
									<p class="fs-1-1 txt-green" >Music Fan Investor</p>
									<p class="text-gray-500 comment-content" ><?php echo e($comment->comment); ?> </p>
									<p class="txt-main fs-2 hand"><u>reply</u></p>
								</div>
							</div>
							<ul>
								
							</ul>   
						</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
				<div class="d-flex mt-2 col-12">
					<div>
						<img src="<?php echo e(URL::asset(auth()->user()->avatar)); ?>" class="avatar-md rounded-circle" style="width: 50px; height: 50px;">
					</div>
					<div style="display: inline-flex; width: 100%;">
						<input type="text" class="form-control chat-input pr-2" id="comment-input" name="comment-" placeholder="Enter Comment...">
						<img style="transform: rotate(90deg); width:50px; height:50px" id="comment-send-btn" data-media="111" src="<?php echo e(URL::asset('assets/images/valyoux/green_arrow_price_going_up.svg')); ?>">
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="dt-promote-edit editsection-content" >
		<div class="mo-promote-main-body p-3" style="width: 100%; padding: 22px 34px !important">
			<div class="promote-comment-part">
				<div class="comment-logo-part"  >
					<img src="<?php echo e(URL::asset('assets/uploads/artist/72921766.jpg')); ?>" style="width: 48px; height: 48px" alt="">
					<div class="comment-logo-detail-info">
						<p class="py-auto"><strong>Song Name</strong></p>
					</div>
				</div>	
				<div class="close-promote-modal fs-4 dt-close_btn">
					×
				</div>														
			</div>
		
			<div class="input-data-field">
				<form class="scrollable">
					<div class="form-group">
						<label for="inputNumPeople">1. How many listeners would you like to reach?</label>
						<div style="display: flex; justify-content: center;border:rgb(220, 220, 220) solid 2px; border-radius: 12px;
						">
							<div id="inputNumPeople-minuse-first-desk" class="cus-font cus-first-1" style="padding: 10px 10% 10px 25%;">-</div>
							<div id="inputMumberPoeple-first-desk" class="cus-font cus-first">50</div>
							<div id="inputNumPeople-plus-first-desk" class="cus-font cus-first-1" style="padding: 10px 25% 10px 10%;">+</div>
						</div>
						
					</div>
					<div class="form-group">
						<label for="inputPrice">2. How much would you like to pay each listener per steam?</label>
						<div style="display: flex; justify-content: center;border:rgb(200, 200, 200) solid 2px; border-radius: 12px;
						">
							<div id="inputNumPeople-minuse-second-desk" class="cus-font cus-first-1" style="padding: 10px 10% 10px 25%;">-</div>
							<div class="cus-font cus-second">V$</div>
							<div id="inputMumberPoeple-second-desk" class="cus-font cus-second-1">50</div>
							<div id="inputNumPeople-plus-second-desk" class="cus-font cus-first-1" style="padding: 10px 25% 10px 10%;">+</div>
						</div>
						
					</div>
					<div class="form-group">
						<label for="inputCompany">3.Total Spend</label>
						<div style="display: flex; justify-content: center;border:rgb(200, 200, 200) solid 2px; border-radius: 12px;
						">
							<div id="inputNumPeople-minuse-third-desk" class="cus-font cus-first-1" style="padding: 10px 10% 10px 25%;">-</div>
							<div class="cus-font cus-second">V$</div>
							<div id="inputMumberPoeple-third-desk" class="cus-font cus-second-1">50</div>
							<div id="inputNumPeople-plus-third-desk" class="cus-font cus-first-1" style="padding: 10px 25% 10px 10%;">+</div>
						</div>
						
					</div>
					<div class="form-group">
						<label for="inputCompany">4.SElect Promotion Type</label>
						<div class=" custom-define-style" data-toggle="collapse" data-target="#mo-select-promote">
							<span> &nbsp</span>
							<i class="fa fa-sort-down" style="float: right"></i>
						</div>
					</div>
					<div class="show-target-content collapse" id="mo-select-promote" >
						<div class="select-option promote-target d-flex mb-2 txt-main"  data-toggle="collapse" data-target="#mo-promote-select">
							<p class="circle-bordered my-auto"></p>&nbsp;
							<p class="my-auto"> <u>Targeted</u></p>
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="collapse" id="mo-promote-select" >
							<div class="show-target-content-search">
								<input type="text" placeholder="Search for Investors">
							</div>
							<div class="show-target-content-body" >
								<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="show-target-content-body-item" data-name="<?php echo e($user->first_name . " " . $user->last_name." ".$user->email); ?>" style="font-size: 0.7rem">
									<div class="target-info-button">
										<img src="<?php echo e(URL::to(''.$user->avatar)); ?>" alt="" style="width: 32px; height:32px">
										<div class="target-info-button-detail">
											<p class="my-auto target-name" style="font-size: 0.8rem"><strong><?php echo e($user->first_name . " " . $user->last_name); ?></strong></p>
											<p class="my-auto target-type"><?php echo e($user->email); ?></p>
										</div>																													
									</div>
									<div class="custom-control custom-checkbox target-info-state">
										<input type="checkbox" class="custom-control-input" id="investor_<?php echo e($user->id); ?>">
										<label class="custom-control-label" style="padding-top:2px" for="investor_<?php echo e($user->id); ?>">music fan</label>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>													
							</div>
							
						</div>
						<div class="select-option promote-compaign d-flex mb-3 txt-main">
							<p class="circle-bordered my-auto"></p>&nbsp;
							<p class="my-auto"> <u>Open Campaign</u></p>
							<i class="fa fa-info-circle"></i>
						</div>
						<div><p>🎧 I would like to have an open campaign. Any one can listen to the music on my profile and get paid. The promotional campaign will end when the amount of listeners you selected above is reached.</p></div>
					</div>
					<div class="bottom-button">
						
						<div class="btn-field">
							
							<button type="button" class="btn btn-success w-150 btn-promote custom-btn-set">Start Promotion</button>
						</div>
					</div>
											
				</form>
			</div>
		</div>
	</div>
	<div id="valyou-music-section- " class="valyou-media dt-valyou-edit editsection-content">
		<div class="promote-comment-part">
			<div class="comment-logo-part"  >
				<div class="comment-logo-detail-info">
					<p class="py-auto"><strong>Valyou</strong></p>
				</div>
			</div>	
			<div class="close-promote-modal fs-4 dt-close_btn">
				×
			</div>														
		</div>
		<div class="btn-margin">
			<div class="row" style="padding: 0 20px;">
				<?php $artist_poits = artistPoints(); ?>
				<?php $__currentLoopData = $artist_poits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-2 col-md-2">
						<button type="button" class=" btn btn-light radio dollar-price " data-toggle="tooltip" data-placement="top" data-original-title="This song is nice, might be a hit, Valyou for $<?php echo e($row->amount); ?>." onclick="setValyou(<?php echo e($row->amount); ?>)">$<?php echo e($row->amount); ?></button>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<div class="col-2 col-md-2" style="padding: 11px 6px;">
					<span class="valyou-custom-btn">Custom</span>
				</div>
			</div>
			<div class="row custom-valyou-div">
				<div class="col-5" style="font-size: 16px; padding: 5px 20px;">Custom price</div>
				<div class="col-7">
					<input type="text" class="input-price" id="set_valyou" placeholder="min $1">
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center mb-5 proceed-valyou-song-div">
			<p class="text-danger error_message">Please choose an option above</p>
			<div class="row justify-content-between">
				<button type="button" class="btn dt-close_btn btn-outline-secondary w-150">Cancel</button>
				<button type="button" class="btn valyou-g-btn add_value spycust-margin-10 m-0" value="">Proceed to Valyou Song</button>
			</div>
				
		</div>
	</div>
</div>

<script>
	$(document).on('click', '#inputNumPeople-minuse-first-desk', function() {
		console.log('ttt');
    var target = parseInt($('#inputMumberPoeple-first-desk').html());
    $('#inputMumberPoeple-first-desk').html(target - 1);
	});

	$(document).on('click', '#inputNumPeople-plus-first-desk', function() {
    var target = parseInt($('#inputMumberPoeple-first-desk').html());
    $('#inputMumberPoeple-first-desk').html(target + 1);
	});

	$(document).on('click', '#inputNumPeople-minuse-second-desk', function() {
    var target = parseInt($('#inputMumberPoeple-second-desk').html());
    $('#inputMumberPoeple-second-desk').html(target - 1);
	});

	$(document).on('click', '#inputNumPeople-plus-second-desk', function() {
    var target = parseInt($('#inputMumberPoeple-second-desk').html());
    $('#inputMumberPoeple-second-desk').html(target + 1);
	});

	$(document).on('click', '#inputNumPeople-minuse-third-desk', function() {
    var target = parseInt($('#inputMumberPoeple-third-desk').html());
    $('#inputMumberPoeple-third-desk').html(target - 1);
	});

	$(document).on('click', '#inputNumPeople-plus-third-desk', function() {
    var target = parseInt($('#inputMumberPoeple-third-desk').html());
    $('#inputMumberPoeple-third-desk').html(target + 1);
	});

	$(document).ready(function () {
		$('.dt-comment-btn').click(function(event){
			event.preventDefault();
			closeSection(3);
			$('.uploading-section-artist').hide();
			$('.all-video-list').hide();
			$('.editsection').show();
			$('.dt-comment-edit').show();
		});
		$('.dt-promote-btn').click(function(event){
			event.preventDefault();
			closeSection(3);
			$('.uploading-section-artist').hide();
			$('.all-video-list').hide();
			$('.editsection').show();
			$('.dt-promote-edit').show();
			
		});
		$('.dt-valyou-btn').click(function(event){
			event.preventDefault();
			closeSection(3);
			$('.uploading-section-artist').hide();
			$('.all-video-list').hide();
			$('.editsection').show();
			$('.dt-valyou-edit').show();
		});

		$('.dt-close_btn').click(function(){
			closeSection(3);
		});

		// event function for send button in comment list box with desktop mode.
		$('#comment-send-btn').click(function(){
			sendComment('comment-input');
		});

		function closeSection(type) {
			if(type == 0) {
				$('.editsection-content').hide();
			}else if(type == 1) {
				$('.dt-promote-edit').hide();
			}else if(type == 2) {
				$('.dt-valyou-edit').hide();
			}if(type == 3) { //all
				$('.editsection-content').hide();
				$('.dt-promote-edit').hide();
				$('.dt-valyou-edit').hide();
			}
			$('.editsection').hide();
			$('.uploading-section-artist').show();
			$('.all-video-list').show();
			
		}

	})


</script><?php /**PATH D:\@hbs@\git repository\valyou-laravel\resources\views/partician/video_feature_section.blade.php ENDPATH**/ ?>
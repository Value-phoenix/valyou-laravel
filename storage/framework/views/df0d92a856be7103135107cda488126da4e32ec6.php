<style>
/* custom */
.special-video-part {
    max-height: 55vh;
    overflow-y: auto;
}

.brand-list-box {
    overflow-x: auto;
}

.hori-nav {
    overflow-x: hidden;
    list-style: none;
}

.mo-card-size {
    width: 250px;
    height: 170px;
}

.sponsor-info{
    justify-content: center;
    align-items: center;
}

.avatar-sm {
    height: 50px !important;
    width: 50px !important;
}

.show-info-card, .comment-info {
    width: 100%;
    position: relative;
}
</style>
<div class="brand-sponsor-list w-full">
    <div class="row space-content m-0 p-1">
        <div>
            <span class="fs-1-1">Drake's Brand Sponsors in  <a href="social-media-bidnow" class="txt-main m-auto">Melbourne City 
                <i class="fa fa-arrow-down"></i></a></span>
        </div>
        <div>
            <a href="social-media-biding" class="txt-main m-auto">Bid Now (See All) &nbsp;<i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="brand-list-box my-2 w-full scrolling-sponsor-list scroll-style">
        <div class="hori-nav my-0 pl-0 d-inline-flex" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
            <?php $cnt = 0 ?>
            <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $cnt++;
                    $bg = ($cnt%2 == 0)?"bg-black": "bg-green-gra";
                 ?>
                <div  class="mr-2 cursor-grab">             
                    <div class="<?php echo e($bg); ?> mo-card-size rounded-lg p-3 text-center d-flex"> 
                        <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.png')); ?>" class="m-auto" height="70%">                
                    </div>   
                    <div class="d-flex mt-2 d-inline-flex sponsor-info">
                        <div>
                            <img src="<?php echo e(URL::asset($row->photo)); ?>" class="avatar-sm rounded-circle">
                        </div>
                        <div class="px-2 show-info-card">
                            <p class="font-weight-bold fs-2 mb-0"><b><?php echo e(isset($row->brand)?$row->brand:'Brand name'); ?></b></p>
                            <p class="mb-0" >Click & Earn $<?php echo e(isset($row->stock_value)?$row->stock_value:'0.0'); ?>VXD</p>
                        </div>
                    </div>                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH D:\@hbs@\git repository\valyou-laravel\resources\views/partician/brand_sponsor_list.blade.php ENDPATH**/ ?>
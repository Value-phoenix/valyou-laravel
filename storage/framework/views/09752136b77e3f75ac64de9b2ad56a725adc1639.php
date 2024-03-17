
<?php

use App\Models\VideoUploads;
use App\Models\Country;
// use App\Models\City;
use App\Models\State;
use App\User;
$country = Country::all();
// $city = City::all();
$state = State::all();
?>


<?php if(request()->segment(2) == "watch-to-earn"): ?>
<?php $__env->startSection('title'); ?> Watch to earn <?php $__env->stopSection(); ?>
<?php elseif(request()->segment(2) == "listen-to-earn"): ?>
<?php $__env->startSection('title'); ?> Listen to earn <?php $__env->stopSection(); ?>
<?php else: ?>
<?php $__env->startSection('title'); ?> Social Media biding <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('pageCSS'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/pages/social-media.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/tagify/tagify.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?> Market <?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-navbar'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
}.flex {
    display: flex;
}
.cursor-grab {
cursor: grab;
}

.gap-4 {
    gap: 1rem;
}
.flex-col {
    flex-direction: column;
}
.mr-8 {
    margin-right: 2rem;
}
.m-2 {
    margin: 0.5rem;
}.font-bold {
    font-weight: 700;
}
.p-3 {
    padding: 0.75rem;
}
.rounded-lg {
    border-radius: 0.5rem;
}
.justify-center {
    justify-content: center;
}
.items-center {
    align-items: center;
}
.w-64 {
    width: 16rem;
}
.h-40 {
    height: 10rem;
}.background-shadow {
    background: #fff;
    box-shadow: 0 0 9.3578px rgba(0,0,0,.1);
    /* border-radius: 10px; */
}
.w-full {
    width: 100%;
}
.indiana-scroll-container--hide-scrollbars {
    overflow: hidden;
    scrollbar-width: none;
}
.gap-6 {
    gap: 1.5rem;
}
.green-gradient {
    background: linear-gradient(80.48deg, #00ffc2 7.18%, #00b8ba 97.46%);
}

.shadow-lg, .shadow-md {
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -4px rgba(0, 0, 0, .1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
}
.text-center {
    text-align: center;
}
.p-3 {
    padding: 0.75rem;
}
.rounded-lg {
    border-radius: 0.5rem;
}
.my-4 {
    margin-top: 1rem;
    margin-bottom: 1rem;
}
.background-shadow {
    background: #fff;
    box-shadow: 0 0 9.3578px rgba(0,0,0,.1);
    border-radius: 10px;
}
.text-red, a:hover {
    color: #ff0093 !important;
}
.justify-between {
    justify-content: space-between;
}
.items-center {
    align-items: center;
}
.h-\[30px\] {
    height: 30px;
}
.css-ceydnk {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    font-family: Roboto, Helvetica, Arial, sans-serif;
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 1.75;
    letter-spacing: 0.02857em;
    text-transform: uppercase;
    min-width: 64px;
    padding: 6px 16px;
    border-radius: 4px;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    color: rgb(255, 255, 255);
    background-color: rgb(255, 0, 147);
    box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px;
}
.css-1yxmbwk {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    text-align: center;
    flex: 0 0 auto;
    font-size: 1.5rem;
    padding: 8px;
    border-radius: 50%;
    overflow: visible;
    color: rgba(0, 0, 0, 0.54);
    transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}

.p-2 {
    padding: 0.5rem;
}
.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.text-center {
    text-align: center;
}
.p-3 {
    padding: 0.75rem;
}
.bg-slate-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(241 245 249 / var(--tw-bg-opacity));
}
.rounded-lg {
    border-radius: 0.5rem;
}
.w-64 {
    width: 16rem;
}
.h-40 {
    height: 10rem;
}
/* // */
.items-center {
    align-items: center;
}
.ml-\[-10px\] {
    margin-left: -10px;
}
.css-1yxmbwk {
    display: inline-flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    background-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    text-align: center;
    flex: 0 0 auto;
    font-size: 1.5rem;
    padding: 8px;
    border-radius: 50%;
    overflow: visible;
    color: rgba(0, 0, 0, 0.54);
    transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.css-vubbuv {
    user-select: none;
    width: 1em;
    height: 1em;
    display: inline-block;
    fill: currentcolor;
    flex-shrink: 0;
    transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    font-size: 1.5rem;
}
.css-w0pj6f {
    overflow: hidden;
    pointer-events: none;
    position: absolute;
    z-index: 0;
    inset: 0px;
    border-radius: inherit;
}
.my-arrow-style{
    text-align: center;
    font-size: 1.2rem;
    left: 30%;
    position: absolute;
    bottom: 30%;
}
</style>

<div class="p-2" style="max-width:100%;">
    <div class="flex items-center ml-[-10px]">
        <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk" tabindex="1" type="button" id="back-button">
                <div class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium p-1 text-white bg-black rounded css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="KeyboardBackspaceIcon">
                    <i class="fa fa-arrow-left my-arrow-style"></i>
                </div>
        </button>
    </div>
    <div class="d-inline-flex">
        <img src="http://127.0.0.1:8000/assets/uploads/artist/1396741054.jpg" width="70" height="70" class="rounded-circle avatar-xm m-1 artist-list-photo" alt="">
        <p class="txt-main fs-2 font-weight-bold m-auto"> &nbsp;Bid Now to become one of the 10 Brand sponsors for Drake in any particular city.</p>
    </div>
    <div class="mt-3"><h4>1. Select Your Brand Exposure Location</h4><i class="fa fa-help"></i></div>
    <div class="flex flex-col gap-4">
        <b class="text-[14px]">I. Choose Region</b>
        <br/>
        <div class="cursor-grab flex indiana-scroll-container indiana-scroll-container--hide-scrollbars mb-3 overflow-auto">
            <div class="m-2 mr-8">
                <div class="w-64 h-40 p-3 flex items-center justify-center rounded-lg background-shadow font-bold " id="Africa"  onclick="thiselementSelector(1)">Africa</div>
            </div>
            <div class="m-2 mr-8">
                <div class="w-64 h-40 p-3 flex items-center justify-center rounded-lg background-shadow font-bold" id="Americas"  onclick="thiselementSelector(2)" >Americas</div>
            </div>
            <div class="m-2 mr-8">
                <div class="w-64 h-40 p-3 flex items-center justify-center rounded-lg background-shadow font-bold" id="Asia"  onclick="thiselementSelector(3)" >Asia</div>
            </div>
            <div class="m-2 mr-8">
                <div class="w-64 h-40 p-3 flex items-center justify-center rounded-lg background-shadow font-bold" id="Europe"  onclick="thiselementSelector(4)">Europe</div>
            </div><div class="m-2 mr-8">
                <div class="w-64 h-40 p-3 flex items-center justify-center rounded-lg background-shadow font-bold" id="Oceania"  onclick="thiselementSelector(5)" >Oceania</div>
            </div>
        </div>
    </div>
    <div>
        <h5>II. Select Country</h5>
        <div class="mb-3">
            <select  id="countries" onchange="Select_city()" class="form-control w-full" placeholder="Select Country" name="country">
                
                <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row->cnt_id); ?>"><?php echo e($row->cnt_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <input id="coutry_id" hidden/>
            <input id="coutry_id" hidden/>
        </div>
    </div>
    <div>
        <h5>III. Select State</h5>
        <div class="mb-3">
            <select class="form-control w-full" placeholder="Select Country" >
                <option value="any">Select state</option>
                <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row->state_id); ?>"><?php echo e($row->state_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div>
        <h5>IV. Select City / Town / Suburb</h5>
        <div class="mb-3" id="city_re_display">
            <select class="form-control w-full" placeholder="Select Country">
                <option value="any">Select City / Town / Suburb</option>
            </select>
        </div>
    </div>
    <div style="font-weight: 700; font-family: Roboto, sans-serif;">Bidding War: 1 spot remaining before bidding war starts in this selected city.</div>
    <div class="my-4"><h4>2. Upload your company brand business logos in three formats.</h4></div>
    <div>
        <p style="font-weight: 700; font-family: Roboto, sans-serif;">
            <b>Black, White and the original color all in a transparent form with no background.(svg, png)</b>
        </p>
    </div>
    <div class="w-full">
        <div class="cursor-grab indiana-scroll-container overflow-auto indiana-scroll-container--hide-scrollbars">
            <div class="flex md justify-center mx-[-15px] w-full overflow-auto scroll-style scroll-maincolor">
                <div class="flex-col p-2">
                    <div class="w-64 h-40 p-3 text-center rounded-lg shadow-lg green-gradient">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.svg')); ?>" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <p class="px-2 font-bold text-red">White Logo</p>
                </div>
                <div class="flex-col p-2">
                    <div class="w-64 h-40 p-3 text-center rounded-lg shadow-lg bg-black">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.svg')); ?>" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <p class="font-bold text-red">Black Logo</p>
                </div>
                <div class="flex-col p-2">
                    <div class="w-64 h-40 p-3 text-center rounded-lg shadow-lg bg-slate-100">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="<?php echo e(URL::asset('assets/uploads/brand_mark/mark.svg')); ?>" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <p class="font-bold text-red">Original Logo</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-success bg-green-gra w-full">UPLOAD LOGO</button>
    </div>
    <div class="my-4">
        <h4>3. Place a Bid. Minimum Starting Bid $10.00</h4>
        <div class="p-8 mt-4 text-xs bg-black rounded">
            <div class="w-full text-center">
                <p class="text-white">Top Bid $10.00</p>
            </div><br>
            <div class="d-flex p-3 bg-white rounded-lg">
                <div class="d-flex space-content w-full">
                    <button type="button" class="btn btn-light" id="minusevalue" onclick="var num = document.getElementById('numberinput').value*1 - 1; document.getElementById('numberinput').value = num;"> - </button>
                    <input class="form-control bid-input border-0 text-center fs-3" value="45" name="bid-value" id="numberinput" />
                    <button type="button" class="btn btn-light" id="plusvalue" onclick="var num = document.getElementById('numberinput').value*1 + 1;  document.getElementById('numberinput').value = num;"> + </button>
                </div>
            </div><br>
            <div class="w-full text-center">
                <p class="text-white">Lowest Bid $10.00</p>
            </div>
        </div>
        <div>
            <p class="text-center fs-3"> Total Cost + Fees:</p>
            <p class="txt-main text-center fs-4">$0 VXD</p>
        </div>
        <button type="button" class="btn btn-success bg-green-gra w-full">PLACE A BID NOW</button>
    </div>
    <p class="py-4">Thank you for choosing to collaborate with Artist <b>Drake</b> by becoming a brand sponsor.<br>
        <br>If your logo is approved, it will appear next to every single video and audio&nbsp;content of that particular music artist brand in the locations&nbsp;you have selected based on the winning top Bid.<br>
        <br>You could then proceed to add more advertising content such as video commercials or links to you business pages viewers can navigate to. 
    </p>
</div>
<?php $__env->stopSection(); ?>
<script>
    function thiselementSelector($num) {
        var number = $num;
        var continentarray = ['Africa', "Americas", 'Asia', 'Europe', 'Oceania'];
        // console.log('rrr');
        switch (number) {
            case 1:
                var text = document.getElementById('Africa').innerHTML;
                //
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 2:
                var text = document.getElementById('Americas').innerHTML;
                //
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 3:
                var text = document.getElementById('Asia').innerHTML;
                //
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 4:
                var text = document.getElementById('Europe').innerHTML;
                //
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 5:
                var text = document.getElementById('Oceania').innerHTML;
                //
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";   
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
        
            default:
                break;
        }
    }

    function Select_city() {
        var countryId = document.getElementById('countries').value;
        $.ajax({
            url: '/get-cities/' + countryId,
            type: 'GET',
            success: function(data) {
                var selectlist = '';
                for (let i = 0; i < data.length; i++) {
                    const element = '<option>'+data[i].city_name+'</option>';
                    selectlist += element;
                }
                const selectelement = '<select class="form-control w-full" placeholder="Select Country"><option value="any">Select City / Town / Suburb</option>' + selectlist + '</select>';
                console.log(selectlist);
                const cityDisplay = document.getElementById("city_re_display");
                // Clear the existing content of the div
                cityDisplay.innerHTML = '';
                document.getElementById("city_re_display").innerHTML = selectelement;
            },
            error: function(xhr, status, error) {
                console.error(error); // Handle any errors
            }
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
    var backButton = document.getElementById('back-button');
    console.log('here')
    if (backButton) {
        backButton.addEventListener('click', function() {
            window.history.back();
        });
    }
    });
</script>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@hbs@\git repository\valyou-laravel\resources\views/social-media-biding.blade.php ENDPATH**/ ?>
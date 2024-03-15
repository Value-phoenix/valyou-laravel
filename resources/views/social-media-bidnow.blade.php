

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
@extends('layouts.master')

@if(request()->segment(2) == "watch-to-earn")
@section('title') Watch to earn @endsection
@elseif(request()->segment(2) == "listen-to-earn")
@section('title') Listen to earn @endsection
@else
@section('title') Social Media biding @endsection
@endif
@section('pageCSS')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages/social-media.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/tagify/tagify.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/intl-tel-input/css/intlTelInput.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
@endsection

@section('title') Market @endsection
@section('bottom-navbar')

@endsection

@section('content')
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
    .flex {
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
.my-arrow-style{
    text-align: center;
    font-size: 1.2rem;
    left: 30%;
    position: absolute;
    bottom: 30%;
}
    </style>

<div class="p-2" style="max-width:100%;">
    <div class="flex items-center ">
        <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk" tabindex="1" type="button" id="back-button">
                <div class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium p-1 text-white bg-black rounded css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="KeyboardBackspaceIcon">
                    <i class="fa fa-arrow-left my-arrow-style"></i>
                </div>
        </button>
    </div>
    {{-- <div class="mt-3"><h4>View Brand Sponsor for <b>Drake</b> in <b>Asia</b></h4></div> --}}
    <div class="flex py-2">View Brand Sponsor for<b class="px-1">Drake</b>in<b id="continent">Asia</b></div>
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
                {{-- <option value="">Select country</option> --}}
                @foreach($country as $row)
                <option value="{{ $row->cnt_id }}">{{ $row->cnt_name }}</option>
                @endforeach
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
                @foreach($state as $row)
                <option value="{{ $row->state_id }}">{{ $row->state_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div>
        <h5>IV. Select City / Town / Suburb</h5>
        <div class="mb-3" id="city_re_display">
            <select class="form-control w-full" placeholder="Select Country">
                <option value="any">Select City / Town / Suburb</option>
                {{-- @foreach($city as $row)
                <option value="{{ $row->city_id }}">{{ $row->city_name }}</option>
                @endforeach --}}
            </select>
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-success bg-green-gra w-full">VIEW BRAND SPONSORS</button>
    </div>
    <div class="w-full mt-5">
        <div class="cursor-grab indiana-scroll-container indiana-scroll-container">
            <div class="flex w-full gap-6 overflow-auto scroll-style scroll-maincolor ">
                <div>
                    <div class="green-gradient shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">1. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button 
                    class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" 
                    tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="bg-black shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">2. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="green-gradient shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">3. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="bg-black shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">4. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="green-gradient shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">5. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="bg-black shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">6. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="green-gradient shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">7. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="bg-black shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">8. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="green-gradient shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">9. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="bg-black shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">10. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="green-gradient shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">1. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
                <div>
                    <div class="bg-black shadow-lg w-64 h-40 rounded-lg p-3 text-center">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img src="{{URL::asset('assets/uploads/brand_mark/mark.svg')}}" class="m-auto" height="70%">
                            </span>
                        </span>
                    </div>
                    <div class="p-3 my-4 background-shadow">
                        <b class="text-red">2. McDonalds</b>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Top Bid</p>
                            <p>$50</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Lowest Bid</p>
                            <p>$10</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class="font-[500]">Time Remaining</p>
                            <p>24 hr :00 mins</p>
                        </div>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient w-full text-white h-[30px] css-ceydnk" tabindex="0" type="button">Bid Now
                        <span class="MuiTouchRipple-root css-w0pj6f">
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <form action="/get-cities/countryId" method="POST">
    @csrf
    <input type="text" name="countryId">
    <input type="submit">
</form> --}}

@endsection
<script>
    function thiselementSelector($num) {
        var number = $num;
        var continentarray = ['Africa', "Americas", 'Asia', 'Europe', 'Oceania'];
        // console.log('rrr');
        switch (number) {
            case 1:
                var text = document.getElementById('Africa').innerHTML;
                document.getElementById('continent').innerHTML = text;
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 2:
                var text = document.getElementById('Americas').innerHTML;
                document.getElementById('continent').innerHTML = text;
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 3:
                var text = document.getElementById('Asia').innerHTML;
                document.getElementById('continent').innerHTML = text;
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 4:
                var text = document.getElementById('Europe').innerHTML;
                document.getElementById('continent').innerHTML = text;
                var changingelement = document.getElementById(continentarray[number-1]);
                // Change the border property of the element
                for (let i = 0; i < continentarray.length; i++) {
                    document.getElementById(continentarray[i]).style.border = "none";
                }
                changingelement.style.border = "2px solid black"; // Example: 2px solid red
                break;
            case 5:
                var text = document.getElementById('Oceania').innerHTML;
                document.getElementById('continent').innerHTML = text;
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
                // console.log(data); // Handle the retrieved data
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
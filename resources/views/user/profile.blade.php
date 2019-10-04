@extends('layouts.app')
@section('title', 'Meals.ng')
@section('content')

<div class="section bg-default-lite _1242018">
    <div class="container-v1">
        <div class="row">
            <div class="col-lg-5 col-12">

                <form class="form padding-v1" id="form-table" method="POST" style="margin-left: 15rem; width: 500px;">
                    @csrf
                    <h3 class="text-center display-5 text-nature">CREATE A FOOD TABLE</h3>
                    <div class="form-group">
                        <p>Start date: </p>
                        <input type="date" name="date" class="form-control date-picker" placeholder="Start date" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <p>Duration: </p>
                        {{-- <div class="dropdown">
                            <a href="#pablo" class="btn btn-nature dropdown-toggle" data-toggle="dropdown" data-value="0" id="navbarDropdownMenuLink1">
                                -- Choose option --
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" data-value = '5'>1 Week</a>
                                <a class="dropdown-item" data-value = '10'>2 Weeks</a>
                                <a class="dropdown-item" data-value = '15'>3 Weeks</a>
                                {{-- <div class="dropdown-divider"></div> --}}
                                {{-- <a class="dropdown-item" data-value = '20'>1 Month</a> --}}
                            {{-- </ul> --}}
                        {{-- </div>  --}}

                        <select class="browser-default custom-select" name="duration" style="border-radius: 5rem;">
                            <option selected>Open this select menu</option>
                            <option value="1 Week">1 Week</option>
                            <option value="2 Weeks">2 Weeks</option>
                            <option value="3 Weeks">3 Weeks</option>
                            <option value="1 Month">1 Month</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <p>Do you like Meat?
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="true" type="radio"  id="customRadioInline1"  name="meat_status" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1"> Yes</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input value="false" type="radio"  id="customRadioInline2" name="meat_status" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">No </label>
                            </div>
                            </p>
                    </div>
            
                        <div class="form-group">
                                <p>Do you like Fish?
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input value="1" type="radio" id="customRadioInline3" name="fish_status"  class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3"> Yes</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input value="0" type="radio" id="customRadioInline4" name="fish_status" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline4">No </label>
                                </div>
                                </p>
                        </div>
                        <div class="form-group">
                            <p>Any Allergies: </p>
                            <textarea class="form-control" name="allergies"  rows="3" style="border-radius: 20px;"></textarea>
                        </div>

                    <div class="form-group">
                        <p>Budget: </p>
                        <input type="text" class="form-control" name="budget" placeholder="Budget" required autocomplete="off">
                    </div>
                    
                    {{-- <div class="form-group">
                        <p>Phone: </p>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" required autocomplete="off"/>
                    </div> --}}
                    <button type="submit" class="btn btn-nature btn-lg">
                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                        Add Preference
                    </button>

                </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-12">
                <!-- <div class="bg-absolute bg-absolute-right bg-absolute-3"></div> -->
                <div class="image-wrap image-wrap-right-1 wow fadeInRight div-off-992" style="visibility: visible; animation-name: fadeInRight;">
                    <img src="/img/page-01_img04.png" width="1216" height="1325" alt="">
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
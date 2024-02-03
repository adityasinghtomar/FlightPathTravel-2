@extends('flight.admin.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Edit Coupon</h1>
            <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div>

          </div>

          <div class="col-auto">

          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

              <div class="col-auto">
                <button
                  class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                  data-tab-target=".-tab-item-1">Edit Coupon</button>
              </div>
        </div>

            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-10">
                  <div class="border-top-light mt-30 mb-30"></div>
                  <div class="row x-gap-20 y-gap-20">
                <form action="{{url('/update-coupon')}}" enctype="multipart/form-data" method="post">
                 @csrf      
                 <input type="hidden" name="id" value="{{$coupon->id}}" >
                 <div class="row">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Coupon Code</label>
                        <input type="text" name="coupon_code" value="{{$coupon->coupon_code}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Description</label>
                        <input type="text" name="description" value="{{$coupon->description}}">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Coupon Type</label>
                        <select class="form-control demo-select2-placeholder" value="{{$coupon->coupon_type}}" name="coupon_type" id="state_id" >
                            <option value="{{$coupon->coupon_type}}">Select Coupon Type</option>
                            <option value="percentage">%</option>
                           <option value="fixed">Fixed</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Amount</label>
                        <input type="number" name="amount" value="{{$coupon->amount}}" >
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Minimum Amount</label>
                        <input type="number" name="minimum_amount" value="{{$coupon->minimum_amount}}" >
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">User</label>
                         <select class="form-control demo-select2-placeholder" value="{{$coupon->user_id}}" name="user_id" id="state_id" >
                             <option value="{{$coupon->user_id}}">Select User</option>
                            @foreach($user as $state_)
                             <option value="{{$state_->id}}">{{__($state_->name)}}</option>
                             @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Status</label>
                       <select class="form-control demo-select2-placeholder" name="status" value="{{$coupon->status}}" id="state_id" >
                           <option value="{{$coupon->status}}">Select Status</option>
                            <option value="active">Active</option>
                           <option value="inactive">In-Active</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Coupon Start Date</label>
                        <input type="date" name="start_date" value="{{$coupon->start_date}}" >
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Coupon End Date</label>
                        <input type="date" name="start_date" value="{{$coupon->end_date}}" >
                      </div>
                    </div>
                  
                <div class="d-inline-block pt-30">
                    <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">Register</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>


@extends('flight.admin.db-footer')                        
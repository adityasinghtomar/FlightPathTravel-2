@extends('flight.admin.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Edit Users</h1>
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
                  data-tab-target=".-tab-item-1">Edit User</button>
              </div>
        </div>

            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-10">
                  <div class="border-top-light mt-30 mb-30"></div>
                  <div class="row x-gap-20 y-gap-20">
                <form action="{{ route('users.update') }}" enctype="multipart/form-data" method="post">
                      @csrf   
                    <input type="hidden" name="id" value="{{$users->id}}">                                   
                 <div class="row">                                  
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">First Name</label>
                        <input type="text" name="name" value="{{$users->name}}" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Last Name</label>
                        <input type="text" name="lname" value="{{$users->lname}}" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Email address</label>
                        <input type="text" name="email" value="{{$users->email}}" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Mobile number</label>
                        <input type="number" name="mobile" value="{{$users->mobile}}" required>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Address</label>
                        <input type="text" name="address" value="{{$users->address}}" required>
                      </div>
                    </div>
                                <div class="col-lg-6">
                                    <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">City</label>
                                        <select name="city" class="form-control form-select bg_input">
                                            <option value="1">Chikhli</option>
                                            <option value="1">New York</option>
                                            <option value="1">Kingsbury Road</option>
                                            <option value="1">Surat</option>
                                            <option value="1">Vapi</option>	
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">State</label>
                                        <select name="state" class="form-control form-select bg_input">
                                            <option value="1">State</option>
                                            <option value="1">Gujarat</option>
                                            <option value="1">London</option>
                                            <option value="1">United States</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-lg-6">
                                    <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Country</label>
                                <select name="country" class="form-control form-select bg_input">
                                    <option value="1">Country</option>
                                    <option value="1">India</option>
                                    <option value="1">United Kingdom</option>
                                    <option value="1">USA</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input ">
                                <label class="lh-1 text-16 text-light-1">Status</label>
                                <select name="status" class="form-control form-select bg_input">
                                <option value="active">Active</option>
                                <option value="inactive">In-active</option>
                            </select>
                            </div>
                        </div>
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Commision</label>
                        <select class="form-control demo-select2-placeholder"  name="commision" id="state_id" >
                             <option value="{{$users->commision}}">Select User</option>
                            @foreach($commision as $state_)
                             <option value="{{$state_->commision}}">{{__($state_->name)}}</option>
                             @endforeach
                        </select>
                      </div>
                    </div>

                  
                <div class="d-inline-block pt-30">
                    <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">Update</button>
                </div>
              </div>

              
            </div>
          </div>
        </div>


@extends('flight.admin.db-footer')                        
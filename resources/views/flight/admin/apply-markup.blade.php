@include('flight.admin.db-header')
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">

            <h1 class="text-30 lh-14 fw-600">Add Apply Mark-Up</h1>
            <div class="text-15 text-light-1"></div>

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
                  data-tab-target=".-tab-item-1">Add Apply Mark-Up </button>
              </div>
        </div>

            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-10">
                  <div class="border-top-light mt-30 mb-30"></div>
                  <div class="row x-gap-20 y-gap-20">
                <form action="{{url('/store-markup-apply')}}" enctype="multipart/form-data" method="post">
                                                      @csrf      
                 
                <div class="row">    
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Mark-up</label>
                        <select class="form-control demo-select2-placeholder" name="markup_id" id="state_id" >
                            <option value="">Select Mark-up</option>
                            @foreach($commision as $commisions)
                           <option value="{{$commisions->id}}">{{$commisions->name}}</option>
                           @endforeach
                        </select>
                      </div>
                    </div>
                  
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">User</label>
                        <select class="form-control demo-select2-placeholder" name="user_id" id="state_id" >
                            <option value="">Select User</option>
                           @foreach($users as $user)
                           <option value="{{$user->id}}">{{$user->name}}</option>
                           @endforeach
                        </select>
                      </div>
                    </div>
                    </div>
                <div class="d-inline-block pt-30">
                    <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white">Apply Mark-Up</button>
                </div>
              </div>

              
            </div>
          </div>
        </div>


@include('flight.admin.db-footer')                        
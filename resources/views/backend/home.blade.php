@extends('layouts.dashboard')

@section('content')
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-info border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
              <h5 class="text-info">0</h5>
                <span>Total Orders</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="icon-basket-loaded text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-danger border-left-sm">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h5 class="text-danger">
                  N0
                </h5>
                <span>Total Order</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-success border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-success">0</h4>
                <span>Total Paid</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                <i class="icon-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-warning border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-warning">0</h4>
                <span>Service Discounts</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-blooker">
                <i class="icon-user text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div>


      

    
    <!-- <div class="card-group">
       <div class="card border-right">
          <div class="card-header">
              Sales This Week
        <div class="card-action">
         <div class="dropdown">
         <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
         </a>
            <div class="dropdown-menu animated fadeIn dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void();">Action</a>
            <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a>
           </div>
          </div>
                 </div>
            </div>
          <div class="card-body">
            <canvas id="dash-chart-16" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Drips <span class="badge gradient-purpink text-white badge-pill shadow">50</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Apple <span class="badge gradient-orange
             text-white badge-pill shadow">50</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Nokia <span class="badge gradient-meridian text-white badge-pill">50</span></li>
          </ul>
        </div>
    <div class="card border-right">
          <div class="card-header">
              Profit Ratio
        <div class="card-action">
         <div class="dropdown">
         <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
         </a>
            <div class="dropdown-menu animated fadeIn dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void();">Action</a>
            <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a>
           </div>
          </div>
                 </div>
            </div>
          <div class="card-body">
            <canvas id="dash-chart-17" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Gross Profit <span class="badge gradient-quepal text-white badge-pill shadow">05</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Revenue <span class="badge gradient-violet
             text-white badge-pill shadow">08</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Expense <span class="badge gradient-ibiza text-white badge-pill shadow">07</span></li>
          </ul>
        </div>
    <div class="card">
          <div class="card-header">
              Trending Products
        <div class="card-action">
         <div class="dropdown">
         <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
         </a>
            <div class="dropdown-menu animated fadeIn dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void();">Action</a>
            <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a>
           </div>
          </div>
                 </div>
            </div>
          <div class="card-body">
            <canvas id="dash-chart-18" height="180"></canvas>
          </div>
          <ul class="list-group list-group-flush list shadow-none">
            <li class="list-group-item d-flex justify-content-between align-items-center">Jeans <span class="badge gradient-knight text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">T-Shirts <span class="badge gradient-dusk
             text-white badge-pill shadow">25</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">Shoes <span class="badge gradient-yoda text-white badge-pill shadow">25</span></li>
          </ul>
        </div>
    </div> -->
    

@endsection
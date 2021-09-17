<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">

    @if (session('status'))
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
          <div class="flex-sm-fill">
              <h1 class="h3 font-w700 mb-2">
                  Main Dashboard
              </h1>
              <h2 class="h6 font-w500 text-muted mb-0">
                  Welcome <a class="font-w600" href="javascript:void(0)">{{ Auth::user()->name }}</a>, everything looks great.
              </h2>
          </div>
          <div class="mt-3 mt-sm-0 ml-sm-3">
              <button type="button" class="btn btn-sm btn-alt-primary">
                  <i class="fa fa-cog"></i>
              </button>
              <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-analytics-overview" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-fw fa-calendar-alt"></i>
                      Last 30 days
                      <i class="fa fa-fw fa-angle-down"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="dropdown-analytics-overview">
                      <a class="dropdown-item font-w500" href="javascript:void(0)">This Week</a>
                      <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Week</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item font-w500" href="javascript:void(0)">This Month</a>
                      <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Month</a>
                  </div>
              </div>
          </div>
      </div>
    @endif
 

      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
          <h1 class="flex-sm-fill h3 my-2">{{ Route::current()->getName() }}</h1>

          <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">App</li>
                  <li class="breadcrumb-item" aria-current="page">
                      <a class="link-fx" href="">Dashboard</a>
                  </li>
              </ol>
          </nav>
      </div>
 </div>
</div>
<!-- END Hero -->
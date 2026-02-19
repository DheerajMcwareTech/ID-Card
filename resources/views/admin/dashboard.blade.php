@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3>Dashboard</h3>
      </div>
      <div class="col-12 col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html"> <i data-feather="home"></i></a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <!-- Zero Configuration  Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">

          <div class="row g-5 align-items-center mt-1">

            <div class="col-sm-6 col-xl-4 col-lg-6">
              <div class="card o-hidden shadow">
                <div class="card-body">
                  <div class="media static-widget">
                    <div class="media-body">
                      <h6 class="font-roboto">Streets</h6>
                      <h4 class="mb-0 counter">10</h4>
                    </div>
                    <i data-feather="map" class="feather-icon"></i>

                  </div>
                  <div class="progress-widget">
                    <div class="progress sm-progress-bar progress-animate">
                      <div class="progress-gradient-secondary" role="progressbar" style="width: 75%"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                          class="animate-circle"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4 col-lg-6">
              <div class="card o-hidden shadow">
                <div class="card-body">
                  <div class="media static-widget">
                    <div class="media-body">
                      <h6 class="font-roboto">QR Code Generated</h6>
                      <h4 class="mb-0 counter">9</h4>
                    </div>
                    <i data-feather="grid" class="feather-icon"></i>
                  </div>
                  <div class="progress-widget">
                    <div class="progress sm-progress-bar progress-animate">
                      <div class="progress-gradient-success" role="progressbar" style="width: 60%"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span
                          class="animate-circle"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- Zero Configuration  Ends-->

    <!-- Container-fluid Ends-->
  </div>
</div>
@endsection
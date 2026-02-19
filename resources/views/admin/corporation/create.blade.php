@extends('admin.layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3>Create Corporation</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                              <i data-feather="home"></i></a></li>
                      
                      <li class="breadcrumb-item active">Create Corporation</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header pb-0">
                    
                  </div>
                  <div class="card-body">
                        <form id="CorporationForm" action="{{ route('corporation.store') }}" method="post">
                          @csrf
                              <!-- Select Screen -->
                              <div class="mb-3">
                                  <label class="form-label fw-bold">Corporation Name (English)</label>
                                  <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Enter Corporation Name in English"
                                      name="name"
                                      required
                                  >
                              </div>
                              <!-- Slot Name Only -->
                              <div class="mb-3">
                                  <label class="form-label fw-bold">Corporation Name (Kannada)</label>
                                  <input
                                      type="text"
                                      class="form-control"
                                      placeholder="Enter Corporation Name in Kannada"
                                        name="name_kn"
                                      required
                                  >
                              </div>
                              <!-- Submit -->
                              <div class="mt-4 text-center">
                                  <button class="btn btn-primary" type="submit" style="border-radius: 12px;">
                                      Submit
                                  </button>
                              </div>
                          </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Container-fluid Ends-->
@endsection
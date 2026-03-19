@extends('admin.layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3>Create Designation</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                              <i data-feather="home"></i></a></li>

                      <li class="breadcrumb-item active">Create Designation</li>
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
                      <form id="DesignationForm" action="{{ route('designation.store') }}" method="post">
                        @csrf
                        <!-- Select Screen -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Designation Name<span style="color:red;">*</span></label>
                            <input type="text" class="form-control"
                                placeholder="Enter Designation Name" name="name" required>
                        </div>
                       
                        <!-- Submit -->
                        <div class="mt-4 text-center">
                            <button class="btn" type="submit" style="background-color: #1b4a17; border-color: #1b4a17; color:white; border-radius:12px;">
                                Submit
                            </button>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('script')
<script>
    document.getElementById("DesignationForm").addEventListener("submit", function(e) {
        

        
    });
</script>
@endsection
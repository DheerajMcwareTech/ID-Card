@extends('admin.layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3>Edit Department</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                              <i data-feather="home"></i></a></li>
                      
                      <li class="breadcrumb-item active">Edit Department</li>
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
                  
                  <div class="card-body">
                       <form class="needs-validation" novalidate="" id="editDeptForm" action="{{ route('department.update', $department->id) }}" method="post">
                        @csrf @method('put')
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label fw-bold" for="editDeptName"
                                    style="opacity:1;">Department Name<span style="color:red;">*</span></label>
                                <input class="form-control" id="editDeptName" type="text" name="name"
                                    placeholder="Enter Department Name" value="{{$department->name}}" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                        </div>
                        
                        
                        <div class="mt-4 text-center">
                            <button class="btn" type="submit" style="background-color: #1b4a17; border-color: #1b4a17; color:white; border-radius:12px;">
                                  Update
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

@section('script')
@endsection
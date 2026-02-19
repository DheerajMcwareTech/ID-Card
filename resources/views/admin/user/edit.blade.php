@extends('admin.layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3>Edit Users</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                              <i data-feather="home"></i></a></li>

                      <li class="breadcrumb-item active">Edit Users</li>
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
                      <form id="UsersForm" action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf @method('put')
                          <div class="mb-3">
                              <label class="form-label fw-bold">Users Name (English)</label>
                              <input type="text" class="form-control"
                                  placeholder="Enter Users Name in English" value="{{$user->name}}" name="name" required>
                          </div>

                          <div class="mb-3">
                              <label class="form-label fw-bold">Users Name (Kannada)</label>
                              <input type="text" class="form-control"
                                  placeholder="Enter Users Name in Kannada" value="{{$user->name_kn}}" name="name_kn" required>
                          </div>

                          <div class="mb-3">
                              <label class="form-label fw-bold">Email</label>
                              <input type="email" class="form-control" placeholder="Enter Email"
                                  name="email" required value="{{$user->email}}">
                              <div class="invalid-feedback">
                                  Please enter a valid email address.
                              </div>
                          </div>
                          <div class="mb-3">
                              <label class="form-label fw-bold">Phone Number</label>
                              <input type="tel" class="form-control" placeholder="Enter Phone Number"
                                  name="phone" pattern="[0-9]{10}" maxlength="10" required value="{{$user->phone}}">
                              <div class="invalid-feedback">
                                  Please enter a valid 10-digit phone number.
                              </div>
                          </div>
                          <div class="mb-3">
                              <label class="form-label fw-bold">Password</label>
                              <input type="password" class="form-control" placeholder="Enter Password"
                                  name="password" >
                              <div class="invalid-feedback">
                                  Please enter a password.
                              </div>
                          </div>
                          <div class="mb-3">
                              <label class="form-label fw-bold">Select Wards</label>
                              <select class="form-select" name="wards[]" multiple required>
                                @foreach($wards as $ward)
                                  <option value="{{$ward->id}}" {{ in_array($ward->id, $user->wards) ? 'selected' : '' }}>{{$ward->name}} - Ward {{$ward->number}}</option>
                                @endforeach
                              </select>
                              <div class="form-text">
                                  Hold Ctrl (Windows) / Cmd (Mac) to select multiple wards.
                              </div>
                              <div class="invalid-feedback">
                                  Please select at least one ward.
                              </div>
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
@endsection

@section('script')
    <script>
        const corporationMap = {
            "Gandhi Nagar": "ಗಾಂಧಿನಗರ",
            "Basavanagudi": "ಬಸವನಗುಡಿ",
            "Jayanagara": "ಜಯನಗರ"
        };

        document.getElementById("corporationSelect").addEventListener("change", function () {
            const selectedValue = this.value;
            const kannadaInput = document.getElementById("Corporation_name_kn");

            if (corporationMap[selectedValue]) {
                kannadaInput.value = corporationMap[selectedValue];
            } else {
                kannadaInput.value = "";
            }
        });
    </script>
@endsection
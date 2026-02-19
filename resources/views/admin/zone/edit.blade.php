@extends('admin.layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3>Edit Zone</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                              <i data-feather="home"></i></a></li>

                      <li class="breadcrumb-item active">Edit Zone</li>
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
                      <form id="ZoneForm" action="{{ route('zone.update', $zone->id) }}" method="post">
                          @csrf @method('put')
                          <!-- Select Screen -->
                          <div class="mb-3">
                              <label class="form-label fw-bold">Zone Name (English)</label>
                              <input type="text" class="form-control" value="{{$zone->name}}"
                                  placeholder="Enter Zone Name in English" name="name" required>
                          </div>
                          <!-- Slot Name Only -->
                          <div class="mb-3">
                              <label class="form-label fw-bold">Zone Name (Kannada)</label>
                              <input type="text" class="form-control" value="{{$zone->name_kn}}"
                                  placeholder="Enter Zone Name in Kannada" name="name_kn" required>
                          </div>
                          <div class="mb-3">
                              <label class="form-label fw-bold">Select Corporation</label>
                              <select class="form-select" id="corporationSelect" name="corporation_id" required>
                                  <option value="">Choose Corporation</option>
                                  @foreach($corporations as $corporation)
                                  <option value="{{$corporation->id}}" {{$corporation->id == $zone->corporation_id ? 'selected' : ''}}>{{$corporation->name}}</option>
                                  @endforeach

                              </select>
                          </div>
                          <div class="mb-3">
                              <label>Corporation Name (Kannada)</label>
                              <input type="text" class="form-control" id="Corporation_name_kn" value="{{$zone->corporation?->name_kn}}" readonly>
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
          @foreach($corporations as $corporation)
            "{{$corporation->id}}": "{{$corporation->name_kn}}",
          @endforeach
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
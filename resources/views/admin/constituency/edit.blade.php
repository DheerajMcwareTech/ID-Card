@extends('admin.layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3>Edit Constituency</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                              <i data-feather="home"></i></a></li>

                      <li class="breadcrumb-item active">Edit Constituency</li>
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
                      <form id="wardForm" action="{{ route('constituency.update', $constituency->id) }}" method="post">
                          @csrf @method('put')
                          <div class="row g-4">

                              <!-- LEFT SIDE -->
                              <div class="col-md-6">

                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Select Corporation</label>
                                      <select class="form-select w-100" name="corporation_id" id="corporationSelect" required>
                                          <option value="">Choose Corporation</option>
                                          @foreach($corporations as $corporation)
                                          <option value="{{$corporation->id}}" {{$corporation->id == $constituency->corporation_id ? 'selected' : ''}}>{{$corporation->name}}</option>
                                          @endforeach

                                      </select>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Select Zone</label>
                                      <select class="form-select w-100" name="zone_id" id="zoneSelect" required>
                                          <option value="">Choose Zone</option>
                                          @foreach($zones as $zone)
                                          <option value="{{$zone->id}}" {{$zone->id == $constituency->zone_id ? 'selected' : ''}}>{{$zone->name}}</option>
                                          @endforeach
                                      </select>
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Constituency Name (English)</label>
                                      <input type="text" class="form-control"
                                          placeholder="Enter Constituency Name in English" value="{{$constituency->name}}" name="name" required>
                                  </div>


                              </div>

                              <!-- RIGHT SIDE -->
                              <div class="col-md-6">

                                  <div class="mb-3">
                                      <label>Corporation Name (Kannada)</label>
                                      <input type="text" class="form-control" id="Corporation_name_kn"
                                          readonly value="{{$constituency->corporation?->name_kn}}">
                                  </div>


                                  <div class="mb-3">
                                      <label>Zone Name (Kannada)</label>
                                      <input type="text" class="form-control" id="Zone_name_kn"
                                          readonly value="{{$constituency->zone?->name_kn}}">
                                  </div>
                                  <div class="mb-3">
                                      <label class="form-label fw-bold">Constituency Name (Kannada)</label>
                                      <input type="text" class="form-control"
                                          placeholder="Enter Constituency Name in Kannada" value="{{$constituency->name_kn}}" name="name_kn" required>
                                  </div>

                              </div>

                          </div>

                          <!-- Submit Button -->
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
        console.log(corporationMap);
        

        document.getElementById("corporationSelect").addEventListener("change", function () {
            const selectedValue = this.value;
            const kannadaInput = document.getElementById("Corporation_name_kn");

            if (corporationMap[selectedValue]) {
                kannadaInput.value = corporationMap[selectedValue];
            } else {
                kannadaInput.value = "";
            }
            
            $.ajax({
              method: "POST",
              url: "{{ route('ward.store') }}",
              data: {_token: "{{csrf_token()}}", id: selectedValue, list:'zones'}, 
            })
            .done(function (res) {
              if(res.success){
                var options = '';
                $.each(res.list, function(key, value){
                    options += '<option value="' + value.id + '">' + value.name + '</option>';
                });
                options = '<option value="">Choose Zone</option>' + options;
                $('#zoneSelect').html(options);
              }
            })
            .fail(function (err) {
              console.log(err);              
            });
        });

         const zoneMap = {
            @foreach($zones as $zone)
              "{{$zone->id}}": "{{$zone->name_kn}}",
            @endforeach
        };

        document.getElementById("zoneSelect").addEventListener("change", function () {
            const selectedValue = this.value;
            const kannadaInput = document.getElementById("Zone_name_kn");

            if (zoneMap[selectedValue]) {
                kannadaInput.value = zoneMap[selectedValue];
            } else {
                kannadaInput.value = "";
            }
        });
    </script>
@endsection
@extends('admin.layouts.app')

@section('style')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <style>
      .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .sidebar-main .simplebar-offset {
          height: auto !important;
      }

      .footer {
          margin-left: 0px !important;
      }

      .switch {
          position: relative;
          display: inline-block;
          width: 50px;
          height: 26px;
      }

      .switch input {
          opacity: 0;
          width: 0;
          height: 0;
      }

      .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          transition: .4s;
          border-radius: 26px;
      }

      .slider:before {
          position: absolute;
          content: "";
          height: 20px;
          width: 20px;
          left: 3px;
          bottom: 3px;
          background-color: white;
          transition: .4s;
          border-radius: 50%;
      }

      input:checked+.slider {
          background-color: #2196F3;
      }

      input:checked+.slider:before {
          transform: translateX(24px);
      }
  </style>
@endsection

@section('content')
  <div class="container-fluid">
      <div class="page-title">
          <div class="row">
              <div class="col-12 col-sm-6">
                  <h3 style="color: #1e2f65;font-family: sans-serif;">Ward List</h3>
              </div>
              <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                      </li>

                      <li class="breadcrumb-item active">Ward List</li>
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
                      <div class="d-flex justify-content-between align-items-center mb-4">
                          <h4 class="mb-0 add"></h4>
                          <button class="btn btn-primary">
                              <a href="{{ route('ward.create') }}" style="color: white;">
                                  <i class="bi bi-plus-circle me-1"></i>
                                  Add 
                              </a>
                          </button>
                      </div>

                      <div class="table-responsive">
                          <table class="display" id="data-source-1" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Sl.No</th>
                                      <th>Corporation(Eng)</th>
                                      <th>Corporation(Kan)</th>
                                      <th>Zone(Eng)</th>
                                      <th>Zone(Kan)</th>
                                      <th>Ward(Eng)</th>
                                      <th>Ward(Kan)</th>
                                      <th>Ward Number</th>
                                      <th>Status</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($entries as $entry)
                                  <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{$entry->corporation?->name}}</td>
                                      <td>{{$entry->corporation?->name_kn}}</td>
                                      <td>{{$entry->zone?->name}}</td>
                                      <td>{{$entry->zone?->name_kn}}</td>
                                      <td>{{$entry->name}}</td>
                                      <td>{{$entry->name_kn}}</td>
                                      <td>{{$entry->number}}</td>
                                      <td>
                                          <label class="switch">
                                              <input type="checkbox" {{ $entry->status ? 'checked' : ''}}>
                                              <span class="slider"></span>
                                          </label>
                                      </td>
                                      <td>
                                          <a class="btn btn-sm btn-info me-2" title="View"
                                              href="{{ route('ward.show', $entry->id) }}">
                                              <i class="bi bi-eye"></i>
                                          </a>
                                          <a class="btn btn-sm btn-primary me-2" title="Edit"
                                              href="{{ route('ward.edit', $entry->id) }}">
                                              <i class="bi bi-pencil-square"></i>
                                          </a>

                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('script')
    <script>
        function openViewPage(button) {
            let row = button.closest("tr");

            let Venue = row.querySelector(".Venue").innerText;

            const url = `view.html?Venue=${encodeURIComponent(Venue)}`;

            window.location.href = url;
        }

        function openEditPage(button) {
            let row = button.closest("tr");

            let Venue = row.querySelector(".Venue").innerText;

            const url = `edit.html?Venue=${encodeURIComponent(Venue)}`;

            window.location.href = url;
        }
    </script>
@endsection
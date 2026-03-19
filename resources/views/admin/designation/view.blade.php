@extends('admin.layouts.app')

@section('style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .container {
        max-width: 900px;
        margin: 40px auto;
    }

    .card-box {
        background: #ffffff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 22px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
    }

    td {
        padding: 14px 18px;
        border: 1px solid #dfdfdf;
        font-size: 17px;
    }

    .label-col {
        font-weight: bold;
        background: #f7f7f7;
        width: 35%;
    }

    .divider {
        border: none;
        border-top: 1px dashed #243e75;
        margin: 20px 0;
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3 style="color: #1e2f65;font-family: sans-serif;">Designation View</h3>
            </div>
            <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                    </li>

                    <li class="breadcrumb-item active">Designation View</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container">
    <div class="card-box">
        <table>
            <tr>
                <td class="label-col">Sl.No</td>
                <td>🏛️ {{$designation->id}}</td>
            </tr>
            <tr>
                <td class="label-col">Designation Name</td>
                <td>{{$designation->name}}</td>
            </tr>

            <tr>
                <td class="label-col">Status</td>
                <td>{{$designation->status ? 'Active' : 'Inactive'}}</td>
            </tr>

        </table>
    </div>

</div>
@endsection

@section('script')

@endsection
@extends('dashboard::layouts.dashboardLayout')
@section('title','clients')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">



            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Clients</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Clients
                                </li>
                                <li class="breadcrumb-item active">{{$client->user->name}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>



            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <!-- Basic Tables start -->
            <div id="edit-map" style="height: 300px;"></div>
            <livewire:client::edit-client :client="$client" />

            <!-- Basic Tables end -->
        </div>
    </div>
</div>
<div id="edit" data-latitude="{{ $client->location->latitude }}" data-longitude="{{ $client->location->longitude }}"></div>
<div id="edit-map">

<!-- Basic trigger modal -->

<!-- Modal -->

<!-- Basic trigger modal end -->
@endsection
@section('styles')

<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/maps/leaflet.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/maps/map-leaflet.css">
@endsection
@section('scripts')
<script src="../../../app-assets/vendors/js/maps/leaflet.min.js"></script>
<script src="../../../app-assets/js/scripts/maps/map-leaflet.js"></script>
@endsection
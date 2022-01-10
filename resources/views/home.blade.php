@extends('master.main')
@section('judul','Dashboard')
@section('content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Dashboard</h4>
        <p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-info">
                            <i class="icon-layers"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Active</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">120 Deals</h5>
                    </div>
                    <div class="table-detail text-right">
                        <span data-plugin="peity-bar" data-colors="#34d3eb,#ebeff2" data-width="120" data-height="45">5,3,9,6,5,9,7,3,5,2,9,7,2,1</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-custom">
                            <i class="icon-trophy"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Won</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">95 Deals</h5>
                    </div>
                    <div class="table-detail text-right">
                        <span data-plugin="peity-pie" data-colors="#5fbeaa,#ebeff2" data-width="50" data-height="45">1/5</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-box">
            <div class="bar-widget">
                <div class="table-box">
                    <div class="table-detail">
                        <div class="iconbox bg-danger">
                            <i class="icon-close"></i>
                        </div>
                    </div>

                    <div class="table-detail">
                        <h4 class="m-t-0 m-b-5"><b>Lost</b></h4>
                        <h5 class="text-muted m-b-0 m-t-0">85 Deals</h5>
                    </div>
                    <div class="table-detail text-right">
                        <span data-plugin="peity-donut" data-colors="#f05050,#ebeff2" data-width="50" data-height="45">1/5</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

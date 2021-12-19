@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="card shadow mt-5">
            <div class="card-header border-bottom">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Page visits</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                x
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

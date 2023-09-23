@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- Tampilan "SEVER ONLINE" -->
                <div class="card-header">
                    <h1>SEVER ONLINE</h1>
                </div>

                <div class="card-body">
                    <div class="alert alert-info">
                        @if(isset($status))
                        <strong>Status:</strong> {{ $status }}
                        @else
                        <strong>Checking server status...</strong>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

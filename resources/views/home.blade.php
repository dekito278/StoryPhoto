@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <buat-pameran />
        </div>
        <div class="col-md-6 posts-container" style="height: 35rem; overflow-y: scroll">
            <lihat-pameran />
        </div>
    </div>
</div>
@endsection
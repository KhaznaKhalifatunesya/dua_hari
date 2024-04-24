@extends('layouts.main')

@section('content')
<div class="container-fluid py-4">
  <div class="shadow p-3 mb-5 bg-body-tertiary rounded-4">
    <div class="row text-center mb-5">
        <div class="col text-center">
            <h4>Daftar Konsumen</h4>
        </div>
    </div>
    @livewire('admin.konsumen')
</div>
  </div>
@endsection

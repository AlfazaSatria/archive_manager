@extends('layouts.app', ['title' => $title])
@section('title', 'Home')
@section('action')
<div class="card-header-action dropdown" style="float:right">
  <div class="btn-group">
    <button type="button" class="btn btn-danger change">Bulan ini</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
      <span class="sr-only">Toggle Dropdown</span>
      <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
        <li class="dropdown-title">Pilih Periode</li>
        <li><a href="#" class="dropdown-item filter" ids="1">Hari ini</a></li>
        <li><a href="#" class="dropdown-item filter" ids="2">Minggu ini</a></li>
        <li><a href="#" class="dropdown-item filter active" ids="3">Bulan ini</a></li>
        <li><a href="#" class="dropdown-item filter" ids="4">Tahun ini</a></li>
      </ul>
  </div>
</div>
@endsection
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Indofood</h4>
  </div>
  {{-- <p>
    {{$bumbufilter}}
  </p> --}}
  <div class="card-body">
    {{-- <div id="bumbu" style="height: 300px;"></div> --}}
    <p>
      Admin Tools Indofood
    </p>
  </div>
  <div class="card-footer bg-whitesmoke">
    Indofood Admin
  </div>
</div>

{{-- <script>
  const chart = new Chartisan({
    el: '#bumbu',
    url: "@chart('home_chart')"
  });
</script> --}}


@endsection
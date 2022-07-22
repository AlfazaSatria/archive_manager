@extends('layouts.app')
@section('title', 'Sales')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Tambah Sales</h4>
    </div>
    <div class="card-body">
        <form id="sales-add">

            <div class="form-group">
                <label for="seller_id">Nama Bulan</label>
                <select class="form-control select2" id="month_id" name="month_id">
                    <option disabled selected>Pilih Bulan</option>
                    @foreach($months as $key => $month)
                    <option value="{{ $month->id }}">{{$month->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="seller_id">Nama Sales</label>
                <select class="form-control select2" id="sales_id" name="sales_id">
                    <option disabled selected>Pilih Sales</option>
                    <option value="1">Bumbu</option>
                    <option value="2">Bumbu Export</option>
                    <option value="3">Minyak</option>
                    <option value="4">Bulk Export</option>
                    <option value="5">Sayur</option>

                </select>
            </div>

           
                <div class="form-group">
                    <label>Delivery</label>
                    <select class="form-control select2" name="delivery_id" id="delivery_id" disabled>
                        <option value="" disabled selected>Pilih Delivery</option>
                    </select>
                </div>
          


            <div class="form-group">
                <label for="desc">Tahun</label>
                <input type="number" class="form-control" id="year" name="year" placeholder="Tahun">
            </div>

            <div class="form-group">
                <label for="desc">Order</label>
                <input type="number" class="form-control" id="order" name="order" placeholder="order">
            </div>

            <div class="form-group">
                <label for="desc">Sales</label>
                <input type="number" class="form-control" id="sales" name="sales" placeholder="Sales">
            </div>


            <div class="form-group">
                <button class="btn btn-success" id="save-data">Save</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function()
  {
      $('select[name="sales_id"]').on('change', function() {
        $('select[name="delivery_id"]').removeAttr("disabled");
          var salesID = $(this).val();
              $.ajax({
                  url: '/sales/show/delivery/sales/'+salesID,
                  type: "GET",
                  dataType: "json",
                  success:function(data) {                      
                      $('select[name="delivery_id"]').empty();
                      $('select[name="delivery_id"]').append('<option value="" disabled selected>Pilih Delivery</option>');
                      $.each(data, function(key, value) {
                          $('select[name="delivery_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                      });
                  }
              });
          
         
      });

      
  });

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#sales-add').submit(function(e) {
    e.preventDefault();
    $("#save-data").addClass("btn disabled btn-success btn-progress");
    
    $.ajax({
      type: 'POST',
      url:"/sales/add",
      data:new FormData(this),
      dataType:'JSON',
      contentType: false,
      cache: false,
      processData: false,
      error: function(err){
        $("#save-data").removeClass("disabled btn-progress");
        swal("Oops!", "Error Input Data!", "error");
      },
      success: function(response){
        console.log(response.status)
        if(response.status == 200 || response.status == 201){
          swal("Success", "Data Anda Telah Disimpan!", "success");
          $("#save-data").removeClass("disabled btn-progress");
          $('#sales-add')[0].reset();
          $(".select2").val("");
          $(".select2").trigger("change");
        } else {
          $("#save-data").removeClass("disabled btn-progress");
          swal("Oops!", "Error Input Data!", "error");
        }
      },
    })
  })
</script>
@endsection
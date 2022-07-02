@extends('layouts.app')
@section('title', 'Files')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Tambah Files</h4>
  </div>
  <div class="card-body">
    <form id="departments-add">
      
      <div class="form-group">
        <label for="seller_id">Nama Departemen</label>
        <select class="form-control select2" id="department_id" name="department_id">
            <option disabled selected>Pilih Departemen</option>
            @foreach($departments as $key => $department)
                <option value="{{ $department->id }}">{{$department->name}}</option>
            @endforeach 
        </select>
      </div>
      
      
      <div class="form-group">
        <label for="desc">Deskripsi</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Deskripsi">
      </div>

      <div class="form-group">
        <label for="file_name">File</label>
          <input type="file" class="form-control" id="file_name" name="file_name">
        </div>
      
      <div class="form-group">
        <button class="btn btn-success" id="save-data">Save</button>
      </div>
    </form>
  </div>
</div>

<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#departments-add').submit(function(e) {
    e.preventDefault();
    $("#save-data").addClass("btn disabled btn-success btn-progress");
    
    $.ajax({
      type: 'POST',
      url:"/files/add",
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
          $('#departments-add')[0].reset();
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
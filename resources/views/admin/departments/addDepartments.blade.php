@extends('layouts.app')
@section('title', 'Departemen')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Tambah Departemen</h4>
  </div>
  <div class="card-body">
    <form id="departmens-add">
      
      <div class="form-group">
        <label for="name">Nama Departemen <span>(required)</span></label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Departemen" required>
      </div>
      
      
      <div class="form-group">
        <label for="desc">Akses View</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Deskripsi">
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

  $("#save-data").click(function(e){
    e.preventDefault();
    $("#save-data").addClass("btn disabled btn-success btn-progress");

    const name = $("#name").val();
    const description = $("#description").val();
   
    $.ajax({
      type: 'POST',
      url:"/departmens/add",
      data: {
        name,
        description
      },
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
        } else {
          $("#save-data").removeClass("disabled btn-progress");
          swal("Oops!", "Error Input Data!", "error");
        }
      },
    })
  })
</script>
@endsection
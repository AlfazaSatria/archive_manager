@extends('layouts.app')
@section('title', 'Password')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Reset Password</h4>
  </div>
  <div class="card-body">
    <form id="change-password">
      
      <div class="form-group">
        <label for="desc">Password Baru</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Password Baru">
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
  $('#change-password').submit(function(e) {
    e.preventDefault();
    $("#save-data").addClass("btn disabled btn-success btn-progress");
    
    $.ajax({
      type: 'POST',
      url:"/password/change",
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
          $('#password-change')[0].reset();
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
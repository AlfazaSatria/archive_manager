@extends('layouts.app')
@section('title', 'Files')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Daftar File</h4>
        <div class="card-header-action">
            <a href="{{ route('files.show.add.file') }}" class="btn btn-icon icon-left btn-info"><i
                    class="fas fa-plus" type="button"></i>Tambah File
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                <table id="table-files" class="table table-striped table-bordered" style="width:100%">
            </table>
        </div>
    </div>
    <div class="card-footer bg-whitesmoke">
       Indofood
    </div>
</div>

<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
    $(function() {
        var oTable = $('#table-files').DataTable({
          "columnDefs": [{
                "defaultContent": "-",
                "targets": "_all"
            }],
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{url()->current()}}'
            },
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', title: 'No'},
            {data: 'department_id', name: 'department_id', title: 'Nama Departments'},
            {data: 'description', name: 'description', title: 'Deskripsi'},
            {data: 'file_name', name: 'file_name', title: 'File'},
            {data: 'action', name: 'action', title: 'Aksi'},
        ],
        });
    });

    $(document).on('click', '#delete', function(){
      swal({
              title: 'Delete',
              text: 'Anda yakin ingin menghapus data ini?',
              icon: 'warning',
              buttons: true,
            })
            .then((willProccess) => {
              if(willProccess){
                let id = $(this).data("id");
                $.ajax(
                {
                    url: `/files/delete/${id}`,
                    type: 'delete',
                    data: {
                        id
                    },
                    success: function (response)
                    {
                        swal("Success", "Data Anda Telah Dihapus!", "success");
                        oTable.ajax.reload(null,false);
                    },
                    error: function(xhr) {
                        $("#save-data").removeClass("disabled btn-progress");
                    swal("Oops!", "Error Delete Data!", "error");
                    }
                });
              };
      });        
    });
</script>


@endsection
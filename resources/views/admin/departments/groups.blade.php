@extends('layouts.app')
@section('title', 'Departments')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>List Department</h4>
        <div class="card-header-action">
            <a href="{{ route('departments.show.add.department') }}" class="btn btn-icon icon-left btn-info"><i
                    class="fas fa-plus" type="button"></i>Tambah Departemen
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                <table id="table-groups" class="table table-striped table-bordered" style="width:100%">
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
        var oTable = $('#table-groups').DataTable({
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
            {data: 'name', name: 'name', title: 'Nama Departemen'},
           
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
                    url: `/departmens/delete/${id}`,
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
@extends('layouts.app')
@section('title', 'Sales')
@section('content')

<div class="card">
    <div class="card-header">
        <h4>Daftar File</h4>
        <div class="card-header-action">
            <a href="{{ route('sales.show.add.sales') }}" class="btn btn-icon icon-left btn-info"><i class="fas fa-plus"
                    type="button"></i>Tambah Sales
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="table-sales" class="table table-striped table-bordered" style="width:100%">
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
        var oTable = $('#table-sales').DataTable({
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
            {data: 'month.name', name: 'month.name', title: 'Bulan'},
            {data: 'year', name: 'year', title: 'Tahun'},
            {data: 'bumbu.name', name: 'bumbu.name', title: 'Bumbu'},
            {data: 'minyak.name', name: 'minyak.name', title: 'Minyak'},
            {data: 'bumbu_export.name', name: 'bumbu_export.name', title: 'Bumbu Export'},
            {data: 'sayur.name', name: 'sayur.name', title: 'Sayur'},
            {data: 'bulk_export_name', name: 'bulk_export_name', title: 'Bulk Export'},
            {data: 'sales', name: 'sales', title: 'Sales'},
            {data: 'order', name: 'order', title: 'Order'},
            {data: 'acv', name: 'acv', title: 'Acv'},
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
                    url: `/sales/delete/${id}`,
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
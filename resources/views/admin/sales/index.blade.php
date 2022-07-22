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
            {data: 'month_id', name: 'month_id', title: 'Bulan'},
            {data: 'year', name: 'year', title: 'Tahun'},
            {data: 'bumbu_id', name: 'bumbu_id', title: 'Bumbu'},
            {data: 'minyak_id', name: 'minyak_id', title: 'Minyak'},
            {data: 'bumbu_export_id', name: 'bumbu_export_id', title: 'Bumbu Export'},
            {data: 'sayur_id', name: 'sayur_id', title: 'Sayur'},
            {data: 'bulk_export_id', name: 'bulk_export_id', title: 'Bulk Export'},
            {data: 'sales', name: 'order', title: 'Order'},
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
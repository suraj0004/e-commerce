@extends('layouts.admin.app')
@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <section class="content">

        <div class="container-fluid">

            @if (session('status'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> {{ session('status') }} </h5>

                </div>
            @endif


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i>{{ $error }}</h5>
                    </div>
                @endforeach
            @endif


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">You can Add/Edit/Delete Weights from here.</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#addWeight">
                                <i class="icon fas fa-plus"></i> Add Weight
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="weight_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Weight Type</th>
                                        <th class="text-center">Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>


    <!--Add Modal -->
    <div class="modal fade" id="addWeight" tabindex="-1" role="dialog" aria-labelledby="addWeightTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.weight_type.store') }}" id="addWeightForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="weight_title">Add Weight </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="weight">Weight</label>
                            <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Weight">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Edit Modal -->
    <div class="modal fade" id="editWeight" tabindex="-1" role="dialog" aria-labelledby="editWeightTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" id="updateForm">
                    @method('PUT')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="weight_title">Edit Weight</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="edit_weight_id" name="edit_weight_id">
                        <div class="form-group">
                            <label for="edit_weight">Weight</label>
                            <input type="text" class="form-control" id="edit_weight" name="edit_weight">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <!-- DataTables  & Plugins -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>

    <script>
        // datatable
        $(document).ready(function() {
            $("#weight_table").DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('admin.weight_type.get_datatable') }}",
                    dataType: "json",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },
                },

                columns: [{
                        bSortable: false,
                        data: "id",
                    },
                    {
                        data: "weight_type"
                    },
                    {
                        data: "actions",
                        bSortable: false,
                        mRender: function(data, type, row) {
                            return (
                                `<div class="d-flex">
                                    <button type="button"  title="Edit" onClick="showEditModal('${data.edit_action}','${data.data.weight_type}')"  class="btn btn-primary m-1 ">
                                        <i class="fas fa-edit "></i>
                                    </button>

                                    <button type="button"  title="Delete" onClick="showDeleteConfirm('${data.delete_action}')"  class="btn btn-danger m-1">
                                        <i class="fas fa-trash "></i>
                                    </button>
                                </div>`
                            );
                        },
                    },
                ],
            });
        });


        $('form#addWeightForm').submit(function(e) {
            e.preventDefault();
            $("#full_page_loader").show();

            var weight_type = $('#weight').val();

            $.ajax({
                type: "POST",
                url: "{{ route('admin.weight_type.store') }}",
                data: {
                    weight: weight_type
                },
                success: function(response) {
                    $("#full_page_loader").hide();
                    $('#addWeightForm').trigger('reset');
                    $('#addWeight').modal('hide');
                    $("#weight_table").DataTable().ajax.reload(null, false);


                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    })
                },
                error: function(response) {
                    $("#full_page_loader").hide();
                    Toast.fire({
                        icon: 'error',
                        title: response.responseJSON.error.join("\n")
                    })
                }
            });
        });

        $('#updateForm').submit(function(e) {
            e.preventDefault();
            $("#full_page_loader").show();
            var edit_weights = $('#edit_weight').val();

            $.ajax({
                type: "PUT",
                url: $('#updateForm').attr('action'),
                data: {
                    edit_weight: edit_weights
                },
                success: function(response) {
                    $("#full_page_loader").hide();
                    $('#editWeight').modal('hide');
                    $("#weight_table").DataTable().ajax.reload(null, false);

                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    })
                },
                error: function(response) {
                    $("#full_page_loader").hide();
                    Toast.fire({
                        icon: 'error',
                        title: response.responseJSON.error.join("\n")
                    })
                }
            });
        });

        function showEditModal(action, weight) {
            $('#updateForm').attr('action', action);
            document.getElementById("edit_weight").value = weight;
            $('#editWeight').modal('show');
        }

        function showDeleteConfirm(action) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#full_page_loader").show();
                    $.ajax({
                        type: "POST",
                        url: action,
                        data: {
                            _method: "DELETE"
                        },
                        success: function(response) {
                            $("#full_page_loader").hide();
                            $("#weight_table").DataTable().ajax.reload(null, false);
                            Toast.fire({
                                icon: 'success',
                                title: response.message
                            })
                        },
                        error: function(response) {
                            $("#full_page_loader").hide();
                            Toast.fire({
                                icon: 'error',
                                title: response.responseJSON.error.join("\n")
                            })
                        }
                    });
                }
            })
        }

    </script>

@endpush

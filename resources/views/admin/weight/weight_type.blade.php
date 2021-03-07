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
                        <div class="card-body">
                            <table id="weight_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Weight Type</th>
                                        <th class="text-center">Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weights as $weight)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $weight->type }}</td>
                                            <td class="text-center">
                                                @php
                                                    $route = route('admin.weight_type.update', ['weight_type' => $weight->id]);
                                                @endphp
                                                <button type="button" class="btn btn-primary"
                                                    onclick="showEditModal('{{ $route }}','{{ $weight->type }}')">
                                                    <i class="icon fas fa-pen"></i>
                                                </button>
                                                <form class="d-inline"
                                                    action="{{ route('admin.weight_type.destroy', ['weight_type' => $weight->id]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit"> <i
                                                            class="icon fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
                <form method="POST" action="" id="updateForm">
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
        $(document).ready(function() {
            $('#weight_table').DataTable();

            $('form#addWeightForm').submit(function(e) {
                e.preventDefault();

                var weight_type = $('#weight').val();

                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.weight_type.store') }}",
                    data: {
                        weight: weight_type
                    },
                    success: function(response) {

                        console.log(response);
                        reopenModal();
                        $('#addWeightForm').trigger('reset');
                    },
                    error: function(response) {
                        // alert(response.responseJSON.error)

                        var error = '';
                        for (var i = 0; i < response.responseJSON.error.length; i++) {
                            error = error + response.responseJSON.error[i] + '\n';
                        }
                        alert(error)
                    }
                });



            });
        });

        function reopenModal(){
            $('#addWeight').modal('hide');
            setTimeout(()=>{
                $('#addWeight').modal('show')
            }, 1000)
        }

        function showEditModal(action, weight) {
            $('#editWeight').modal('show');
            $('#updateForm').attr('action', action);
            // document.getElementById("edit_weight_id").value = id;
            document.getElementById("edit_weight").value = weight;
        }

    </script>

@endpush

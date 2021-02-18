@extends('layouts.admin.app')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}"> --}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@endsection


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
                            <h3 class="card-title">You can Add/Edit/Delete tags from here.</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#addTag">
                                <i class="icon fas fa-plus"></i> Add Tag
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Tag Name</th>
                                        <th class="text-center">Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $tag->name }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="showEditModal({{ $tag->id }},'{{ $tag->name }}')">
                                                    <i class="icon fas fa-pen"></i>
                                                </button>
                                                <form class="d-inline"
                                                    action="{{ route('admin.tag.delete', ['id' => $tag->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit"> <i class="icon fas fa-trash"></i></button>
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
    <div class="modal fade" id="addTag" tabindex="-1" role="dialog" aria-labelledby="addTagTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.tag.add') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Tag </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="tag_name">Tag Name</label>
                            <input type="text" class="form-control" id="tag_name" name="tag_name"
                                placeholder="Enter Tag Name">

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
    <div class="modal fade" id="editTag" tabindex="-1" role="dialog" aria-labelledby="editTagTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.tag.update') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Tag </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                        <div class="form-group">
                            <label for="edit_tag_name">Tag Name</label>
                            <input type="text" class="form-control" id="edit_tag_name" name="edit_tag_name">
                            <input type="hidden" id="edit_tag_id" name="edit_tag_id">
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


@section('js')
    <!-- DataTables  & Plugins -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });

        function showEditModal(id, name) {

            $('#editTag').modal('show');
            document.getElementById("edit_tag_id").value = id;
            document.getElementById("edit_tag_name").value = name;

        }

    </script>

@endsection

@extends('layouts.admin.app')

@section('css')


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
                        <h3 class="card-title">You can Add/Edit/Delete Image from here.</h3>
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                            data-target="#addImage">
                            <i class="icon fas fa-plus"></i> Add Image
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="image_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sno.</th>
                                    <th>Image</th>
                                    <th class="text-center">Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="img-responsive text-center"><img src="{{Storage::disk('dynamic_images')->url($image->image)}}" alt="Image" class="img-fluid" width="300"></td>

                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary"
                                                onclick="showEditModal({{ $image->id }}) ">
                                                <i class="icon fas fa-pen"></i>
                                            </button>
                                            <form class="d-inline"
                                                action="{{ route('admin.image.delete', ['image_id' => $image->id]) }}"
                                                method="post">
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
<div class="modal fade" id="addImage" tabindex="-1" role="dialog" aria-labelledby="addImageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.image.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="image_title">Add Image/Images (You can select multiple images) </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="images[]">Images</label>
                        <input type="file" name="images[]" id="images[]" class="form-control" multiple >
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
<div class="modal fade" id="editImage" tabindex="-1" role="dialog" aria-labelledby="editImageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('admin.image.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="image_title">Edit Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_image_id" name="edit_image_id">
                    <div class="form-group">
                        <label for="edit_image">New Image</label>
                        <input type="file" class="form-control" id="edit_image" name="edit_image" >
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
        $('#image_table').DataTable();
    });

    function showEditModal(id) {
        $('#editImage').modal('show');
        document.getElementById("edit_image_id").value = id;
    }

</script>

@endsection

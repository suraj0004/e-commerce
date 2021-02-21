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
                                data-target="#addCategory">
                                <i class="icon fas fa-plus"></i> Add Category
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Parent Category</th>
                                        <th>Logo/Image</th>
                                        <th class="text-center">Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                @if ($category->parent)
                                                    {{ $category->parent->name }}
                                                @else
                                                    Root
                                                @endif
                                            </td>

                                            <td class="img-responsive text-center">
                                                @if ($category->image)
                                                    <img src="{{ Storage::disk('dynamic_images')->url($category->image->image) }}"
                                                        alt="Image" class="img-fluid" width="100" height="100">
                                                @else
                                                    No Image
                                                @endif
                                            </td>

                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="showEditModal({{ $category->id, }},'{{ $category->name }}',@if(!is_null($category->parent))'{{ $category->parent->id}}' @else '' @endif)">
                                                    <i class="icon fas fa-pen"></i>
                                                </button>
                                                <form class="d-inline"
                                                    action="{{ route('admin.category.destroy', ['id' => $category->id]) }}"
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
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="cstegory_title"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryTitle">Add Category </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="category_name">Category Parent</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="" selected>Root</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name"
                                placeholder="Enter Category Name">
                        </div>

                        <div class="form-group">
                            <label for="category_image">Category Logo/Image</label>
                            <div id="category_image_option">
                                <button type="button" class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#images-modal-for-add-category">
                                    Select from images
                                </button>
                                <input type="text" style="display: none;" name="select_image" id="select_image">
                                <div class="text-center">
                                    <strong>or</strong>
                                </div>
                                <label for="upload_image">Upload from your device </label> &nbsp; <input type="file"
                                    name="upload_image" id="upload_image">
                            </div>

                            <div id="img_preview_div" class="col-md-12 pt-2 text-center img-responsive"
                                style="min-height: 200px;display: none;">
                                <img id="img_preview" alt="Image" class="img-fluid " height="150" width="150">
                                <button type="button" class="btn btn-default btn-block mt-2" data-toggle="modal"
                                    data-target="#images-modal-for-add-category">
                                    Change images
                                </button>
                            </div>


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
                <form method="POST" action="{{ route('admin.category.update') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryTitle">Edit Cateogry </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="category_name">Category Parent</label>
                            <select name="edit_parent_id" id="edit_parent_id" class="form-control">
                                <option value="" selected>Root</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="edit_category_name">Category Name</label>
                            <input type="text" class="form-control" id="edit_category_name" name="edit_category_name"
                                placeholder="Enter Category Name">
                            <input type="hidden" id="edit_category_id" name="edit_category_id">

                        </div>

                        <div class="form-group">
                            <label for="edit_category_image">Category Logo/Image</label>
                            <div id="edit_category_image_option">
                                <button type="button" class="btn btn-default btn-block" data-toggle="modal"
                                    data-target="#images-modal-for-add-category">
                                    Select from images
                                </button>
                                <input type="text" style="display: none;" name="edit_select_image" id="edit_select_image">
                                <div class="text-center">
                                    <strong>or</strong>
                                </div>
                                <label for="edit_upload_image">Upload from your device </label> &nbsp; <input type="file"
                                    name="edit_upload_image" id="edit_upload_image">
                            </div>

                            <div id="edi_img_preview_div" class="col-md-12 pt-2 text-center img-responsive"
                                style="min-height: 200px;display: none;">
                                <img id="edit_img_preview" alt="Image" class="img-fluid " height="150" width="150">
                                <button type="button" class="btn btn-default btn-block mt-2" data-toggle="modal"
                                    data-target="#images-modal-for-add-category">
                                    Change images
                                </button>
                            </div>


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


    {{-- Images modal for add category --}}

    <div class="modal fade" id="images-modal-for-add-category" style="display: none;" aria-hidden="true">
        <div class="modal-dialog images-modal-for-add-category">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Images</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="height: 500px; overflow:scroll">
                        @foreach ($images as $image)
                            <div class="col-md-3 text-center mt-2 p-3 ">
                                <div class="border">
                                    <div class="pt-2 img-responsive" style="min-height: 200px">
                                        <img id="image_{{ $image->id }}"
                                            src="{{ Storage::disk('dynamic_images')->url($image->image) }}" alt="Image"
                                            class="img-fluid " height="150" width="150">
                                    </div>
                                    <hr>
                                    Select: <input type="radio" name="image" value="{{ $image->id }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imageSelectedForAddCategory()"> Confirm
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

      {{-- Images modal for edi category --}}

      <div class="modal fade" id="images-modal-for-edit-category" style="display: none;" aria-hidden="true">
        <div class="modal-dialog images-modal-for-edit-category">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Images</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="height: 500px; overflow:scroll">
                        @foreach ($images as $image)
                            <div class="col-md-3 text-center mt-2 p-3 ">
                                <div class="border">
                                    <div class="pt-2 img-responsive" style="min-height: 200px">
                                        <img id="edit_image_{{ $image->id }}"
                                            src="{{ Storage::disk('dynamic_images')->url($image->image) }}" alt="Image"
                                            class="img-fluid " height="150" width="150">
                                    </div>
                                    <hr>
                                    Select: <input type="radio" name="edit_image" value="{{ $image->id }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="imageSelectedForEditCategory()"> Confirm
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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

        function showEditModal(id, name, parent_id = '') {

            $('#editTag').modal('show');
            document.getElementById("edit_category_id").value = id;
            document.getElementById("edit_category_name").value = name;
            $("#edit_parent_id").val(parent_id);

        }

        function imageSelectedForAddCategory() {
            var id = $('input[name="image"]:checked').val();
            $("#category_image_option").hide();
            $("#img_preview_div").show();
            $('#img_preview').prop('src', $('#image_' + id).attr('src'));
            $('input[name="image"]').prop('checked', false);
            $("#select_image").val(id);
        }


        function imageSelectedForEditCategory() {
            var id = $('input[name="edit_image"]:checked').val();
            $("#edit_category_image_option").hide();
            $("#edit_img_preview_div").show();
            $('#edit_img_preview').prop('src', $('#edit_image_' + id).attr('src'));
            $('input[name="edit_image"]').prop('checked', false);
            $("#edit_select_image").val(id);
        }

    </script>

@endsection

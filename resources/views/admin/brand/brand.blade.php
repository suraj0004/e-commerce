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
                            <h3 class="card-title">You can Add/Edit/Delete brands from here.</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#addBrand">
                                <i class="icon fas fa-plus"></i> Add Brand
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="brand_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Brand Name</th>
                                        <th>Slug</th>
                                        <th>Logo / Image</th>
                                        <th class="text-center">Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $brand->name }}</td>
                                            <td>{{ $brand->slug }}</td>
                                            <td class="img-responsive text-center">
                                                @if($brand->image)
                                                @php
                                                    $image = Storage::disk('dynamic_images')->url($brand->image->image)
                                                @endphp

                                                <img src="{{ $image }}" alt="Image" class="img-fluid" height="100" width="100">

                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="showEditModal({{ $brand->id }},'{{ $brand->name }}', '{{ $brand->slug }}',@if($brand->image){{$brand->image->id}}, '{{$image}}'@endif)">
                                                    <i class="icon fas fa-pen"></i>
                                                </button>
                                                <form class="d-inline"
                                                    action="{{ route('admin.brand.delete', ['id' => $brand->id]) }}"
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
    <div class="modal fade" id="addBrand" tabindex="-1" role="dialog" aria-labelledby="addBrandTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.brand.add') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="brand_title">Add Brand </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="brand_name">Brand Name</label>
                            <input type="text" class="form-control" id="brand_name" name="brand_name"
                                placeholder="Enter Brand Name">
                        </div>
                        {{-- <div class="form-group">
                            <label for="slug_name">Slug Name</label>
                            <input type="text" class="form-control" id="slug_name" name="slug_name"
                                placeholder="Enter slug Name">
                        </div> --}}

                        <div class="form-group">
                            <div class="form-row">
                                <label for="feature_brand_image">Feature Image</label>
                            </div>
                            <div class="form-row" style="overflow: scroll">
                                <input type="hidden" name="brand_image_id" id="brand_image_id">
                                <img id="feature_image_preview" height="300" src="https://via.placeholder.com/500x300"
                                    class="" alt="" role="button" onclick="showImageModal('radio',select_brand_feature_image)">
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
    <div class="modal fade" id="editBrand" tabindex="-1" role="dialog" aria-labelledby="editBrandTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.brand.update') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="brand_title">Edit Brand Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit_brand_id" name="edit_brand_id">
                        <div class="form-group">
                            <label for="edit_brand_name">Brand Name</label>
                            <input type="text" class="form-control" id="edit_brand_name" name="edit_brand_name">
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <label for="feature_brand_image">Feature Image</label>
                            </div>
                            <div class="form-row" style="overflow: scroll">
                                <input type="hidden" name="edit_brand_image_id" id="edit_brand_image_id">
                                <img id="edit_brand_image_preview" height="300" src="https://via.placeholder.com/500x300"
                                    class="" alt="" role="button" onclick="showImageModal('radio',editSelectedBrandImagePreview)">
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

    @include('admin.components.images-modal', ['id' => "images-modal-for-brand"]);
@endsection


@push('js')
    <!-- DataTables  & Plugins -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>

    <script>
        $(document).ready(function() {
            $('#brand_table').DataTable();
        });

        function showEditModal(id, name, slug, image_id = '', image_src = '') {
            $('#editBrand').modal('show');
            document.getElementById("edit_brand_id").value = id;
            document.getElementById("edit_brand_name").value = name;
            document.getElementById("edit_slug_name").value = slug;
            if(image_id && image_src){
                $('#edit_brand_image_id').val(image_id);
                $('#edit_brand_image_preview').attr("src", image_src);
            }

            console.log(image_src);
        }


        function select_brand_feature_image(response) {
            console.log(response);
            $('#brand_image_id').val(response.id);
            $('#feature_image_preview').attr('src', response.src);
            reopenModal();

        }

        function reopenModal() {
            $('#addBrand').modal('hide');
            setTimeout(() => {
                $('#addBrand').modal('show');
            }, 1000);
        }

        function editSelectedBrandImagePreview(response){
            $('#edit_brand_image_id').val(response.id);
            $('#edit_brand_image_preview').attr('src', response.src);

        }



    </script>

@endpush

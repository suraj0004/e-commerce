@extends('layouts.admin.app')

@push('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        /* modal backdrop fix */

    </style>

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
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> {{ session('error') }} </h5>
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
                            <h3 class="card-title">You can Add/Edit/Delete Products from here.</h3>
                            <button id="add_product_modal_open_btn" type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#addProduct">
                                <i class="icon fas fa-plus"></i> Add Product
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="product_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Product Name</th>
                                        <th>Slug</th>
                                        <th>Quantity</th>
                                        <th>Weight</th>
                                        <th>Weight Type</th>
                                        <th>Price</th>
                                        <th>Categories</th>
                                        <th>Tags</th>
                                        <th class="text-center">Action(s)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->slug }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->weight }}</td>
                                            <td>{{ $product->weight_type }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                @foreach ($product->categories as $category)
                                                    <span>{{ $category->name }},</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($product->tags as $tag)
                                                    <span>{{ $tag->name }},</span>
                                                @endforeach
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="showEditModal({{ $product->id }},'{{ $product->name }}', '{{ $product->slug }}', '{{ $product->quantity }}','{{ $product->weight }}','{{ $product->weight_type }}','{{ $product->price }}')">
                                                    <i class="icon fas fa-pen"></i>
                                                </button>
                                                <form class="d-inline"
                                                    action="{{ route('admin.product.destroy', ['id' => $product->id]) }}"
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
    <div class="modal fade" id="addProduct"  role="dialog" aria-labelledby="addProductTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.product.store') }}" onsubmit="event.preventDefault(); addProductFormSubmit()" id="addProductForm">
                    @csrf

                    <div class="modal-header">
                        <h5 class="modal-title" id="product_title">Add Product </h5>
                        <button id="add_product_modal_close_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">


                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name"
                                        placeholder="Enter Product Name">
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Categorie's</label>
                                    <div class="row p-2">
                                        <select name="category_id[]" id="category_id" class="" multiple="multiple"
                                            style="width: 100%">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="product_quantity">Quantity</label>
                                    <input type="number" class="form-control" id="product_quantity" name="product_quantity"
                                        placeholder="Enter Product Quantity">

                                </div>



                                <div class="form-group">
                                    <label for="product_weight">Weight</label>
                                    <input type="number" class="form-control" id="product_weight" name="product_weight"
                                        placeholder="Enter Weight">
                                </div>

                                <div class="form-group" >
                                    <div class="form-row">
                                        <label for="product_weight">Feature Image</label>
                                    </div>
                                   <div class="form-row" style="overflow: scroll">
                                    <input type="hidden" name="feature_image_id" id="feature_image_id">
                                    <img id="feature_image_preview" height="300" src="https://via.placeholder.com/500x300" class="" alt="" role="button"  onclick="showImageModal('radio',selectedFeatureImage)">
                                   </div>
                                </div>


                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="brand_id">Brand</label>
                                    <select name="brand_id" id="brand_id" class="form-control">
                                        <option value="">Select Value</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for="tag_id">Tag's</label>
                                    <div class="row p-2">
                                        <select name="tag_id[]" id="tag_id" class="" multiple="multiple"
                                            style="width: 100%">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="product_price">Price</label>
                                    <input type="number" class="form-control" id="product_price" name="product_price"
                                        placeholder="Enter Price">
                                </div>


                                <div class="form-group">
                                    <div class="dropdown">
                                        <label for="weight_type">Weight Type</label>
                                        <select name="weight_type" id="weight_type" class="form-control">
                                            <option class="dropdown-item" value="kg">KilloGram(kg)</option>
                                            <option class="dropdown-item" value="mg">Milligrams(mg)</option>
                                            <option class="dropdown-item" value="l">Liter</option>
                                            <option class="dropdown-item" value="gm">Grams(g)</option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="weight_type">Product Images</label>
                                    <button class="btn btn-default btn-block" type="button" onclick="showImageModal('checkbox',selectedImages)">Select Images</button>
                                    <div class="row m-2" id="product_images_preview">

                                    </div>
                                </div>
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
    <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.product.update') }}" >
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="product_title">Edit Product Name</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit_product_id" name="edit_product_id">
                        <div class="form-group">
                            <label for="edit_product_name">Product Name</label>
                            <input type="text" class="form-control" id="edit_product_name" name="edit_product_name">
                        </div>

                        <div class="form-group">
                            <label for="edit_product_quantity">Quantity</label>
                            <input type="number" class="form-control" id="edit_product_quantity"
                                name="edit_product_quantity" placeholder="Enter Product Quantity">

                        </div>
                        <div class="form-group">
                            <label for="edit_product_weight">Weight</label>
                            <input type="number" class="form-control" id="edit_product_weight" name="edit_product_weight"
                                placeholder="Enter Weight">
                            <div class="dropdown">
                                <label for="edit_weight_type">Weight Type</label>
                                <select name="edit_weight_type" id="edit_weight_type" class="form-control">
                                    <option class="dropdown-item">KilloGram(kg)</option>
                                    <option class="dropdown-item">Milligrams(mg)</option>
                                    <option class="dropdown-item">Pounds</option>
                                    <option class="dropdown-item">Grams(g)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_product_price">Price</label>
                            <input type="number" class="form-control" id="edit_product_price" name="edit_product_price"
                                placeholder="Enter Price">
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

    @include('admin.components.images-modal',["id"=> "images-modal-for-product"])

@endsection


@push('js')
    <!-- DataTables  & Plugins -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        var product_images = null, product_feature_image = null;
        $(document).ready(function() {
            $('#product_table').DataTable();
            $('#category_id').select2({
                theme: "classic"
            });

            $('#tag_id').select2({
                theme: "classic"
            });


        });

        function showEditModal(id, name, slug, quantity, weight, weight_type, price) {
            $('#editProduct').modal('show');
            document.getElementById("edit_product_id").value = id;
            document.getElementById("edit_product_name").value = name;
            document.getElementById("edit_slug_name").value = slug;
            document.getElementById("edit_product_quantity").value = quantity;
            document.getElementById("edit_product_weight").value = weight;
            document.getElementById("edit_weight_type").value = weight_type;
            document.getElementById("edit_product_price").value = price;
        }

        function selectedImages(response) {
            console.log(response);
            var html = "";
            response.forEach(element => {
                html += `
                <div class="border p-2">
                <img src="${element.src}" height="100" width="160" />
                 </div>
                `;
            });
            $("#product_images_preview").html(html);
            reopenModal();

            product_images = response.map(function(element){
                return element.id;

            })
            console.log(product_images);
        }

        function selectedFeatureImage(response) {
            console.log(response.id);
            $("#feature_image_id").val(response.id);
            $("#feature_image_preview").attr("src",response.src)
            reopenModal();

            product_feature_image = response.id;
        }

        function reopenModal(){
            $('#addProduct').modal('hide');
            setTimeout(()=>{
                $('#addProduct').modal('show');
            },1000)
        }

        function addProductFormSubmit(){
            // event.preventDefault();
            var name = document.getElementById('product_name');
            var brand = document.getElementById('brand_id');
            var price = document.getElementById('product_price');
            var weight = document.getElementById('product_weight');
            var weight_type = document.getElementById('weight_type');
            var categories = $('#category_id').val();
            console.log(categories);
            var tags = $('#tag_id').val();
            var quantity = document.getElementById('product_quantity');
            const payload = {
                name: name.value,
                brand_id: brand.value,
                price: price.value,
                weight: weight.value,
                weight_type: weight_type.value,
                categories: categories,
                tags: tags,
                quantity: quantity.value,
                feature_image_id: product_feature_image,
                image_ids: product_images
            }

            $.ajax({
                type: "POST",
                url: "{{ route('admin.product.store') }}",
                data: payload,
                success: function (response) {
                    console.log(response);
                    window.location.reload();
                },
                error: function (response) {
                    console.log(response.responseJSON.error)
                    var error = '';
                    for(var i = 0; i < response.responseJSON.error.length; i++){
                        error = error + response.responseJSON.error[i]  + '\n';
                    }

                    alert(error)

                }
            });

            document.getElementById('addProductForm').reset();


        }

    </script>

@endpush

@extends('layouts.admin.app')

@section('css')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                            <h3 class="card-title">You can Add/Edit/Delete Products from here.</h3>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                data-target="#addProduct">
                                <i class="icon fas fa-plus"></i> Add Product
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                                                    <span>{{$category->name}},</span>
                                                @endforeach
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary"
                                                    onclick="showEditModal({{ $product->id }},'{{ $product->name }}', '{{$product->slug}}', '{{ $product->quantity }}','{{ $product->weight }}','{{ $product->weight_type }}','{{ $product->price }}') ">
                                                    <i class="icon fas fa-pen"></i>
                                                </button>
                                                <form class="d-inline"
                                                    action="{{ route('admin.product.destroy', ['id' => $product->id]) }}"
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
    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.product.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="product_title">Add Product </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="brand_id">Brand Name</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" >Select Value</option>
                                @foreach ($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Category Name</label>
                            <div class="row p-2">
                                <select name="category_id[]" id="category_id" class="" multiple="multiple" style="width: 100%">
                                <option value="" >Select Value</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                placeholder="Enter Product Name">
                        </div>
                        <div class="form-group">
                            <label for="slug_name">Slug Name</label>
                            <input type="text" class="form-control" id="slug_name" name="slug_name"
                                placeholder="Enter slug Name">
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
                                <div class="dropdown">
                                    <label for="weight_type">Weight Type</label>
                                    <select name="weight_type" id="weight_type" class="form-control">
                                        <option class="dropdown-item">KilloGram(kg)</option>
                                        <option class="dropdown-item">Milligrams(mg)</option>
                                        <option class="dropdown-item">Pounds</option>
                                        <option class="dropdown-item">Grams(g)</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Price</label>
                            <input type="number" class="form-control" id="product_price" name="product_price"
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

    <!--Edit Modal -->
    <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="{{ route('admin.product.update') }}">
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
                            <label for="edit_slug_name">Slug Name</label>
                            <input type="text" class="form-control" id="edit_slug_name" name="edit_slug_name">
                        </div>
                        <div class="form-group">
                            <label for="edit_product_quantity">Quantity</label>
                            <input type="number" class="form-control" id="edit_product_quantity" name="edit_product_quantity"
                                placeholder="Enter Product Quantity">

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

@endsection


@section('js')
    <!-- DataTables  & Plugins -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#product_table').DataTable();
            $('#category_id').select2({
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
    </script>

@endsection

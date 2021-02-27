<div class="modal fade" id="{{ $id }}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 1200px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Images</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9 pt-5 mt-5 text-center" id="ajax_response_images_loader">
                        <div class="spinner-border text-success" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="col-md-9 row" id="ajax_response_images" style="height: 500px; overflow:scroll; display:none;">
                    </div>
                    <div class="col-md-3 p-5 text-center">
                        <div class="form-group">
                            <label for="upload_images">Upload Image(s) from device</label>
                            <input type="file" class="form-control-file" id="upload_images" multiple>
                        </div>
                        <div id="uploaded_images">

                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-success" id="upload_images_btn"
                                onclick="uploadImages()">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirmSelectedImages()">
                    Confirm select
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@push('js')
    <script type="text/javascript">
        var callback_function, input_type, global_images = null;

        function showImageModal(type, cb) {
            input_type = type;
            if(global_images){
                renderImages(global_images);
            }else{
                getImagesFromServer();
            }
            callback_function = cb;
            $("#{{ $id }}").modal('show');
        }

        function renderImages(images) {
            global_images = images;
            var html = "";
            images.forEach(image => {
                            var div = `
                                        <div class="col-md-3 text-center mt-2 p-3 ">
                                            <div class="border">
                                                <div class="pt-2 img-responsive" style="min-height: 200px">
                                                        <img id="image_${image.id}" onclick="selectThisImage('image_input_field_${image.id}')" src="${image.image}" alt="Image" class="img-fluid " role="button"  height="150" width="150">
                                                </div>
                                                <hr>
                                                Select: <input id="image_input_field_${image.id}" type="${input_type}" name="image_modal_input_feild" value="${ image.id }">
                                            </div>
                                            </div>
                                    `;

                            html += div;
                        });

            $("#ajax_response_images").html(html);
        }

        function getImagesFromServer() {
            $("#ajax_response_images_loader").show();
            $("#ajax_response_images").hide();
            $.ajax({
                type: 'GET',
                url: "{{ route('admin.ajax.getImages') }}",
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        renderImages(response.data);
                        $("#ajax_response_images").show();
                        $("#ajax_response_images_loader").hide();
                    }
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    alert('Error - ' + errorMessage);
                }
            });
        }

        function confirmSelectedImages() {
            var data;
            if (input_type == 'checkbox') {
                data = [];
                $('input:checkbox[name=image_modal_input_feild]:checked').each(function() {
                    data.push({
                        id: Number($(this).val()),
                        src: $('#image_' + $(this).val()).attr('src')
                    })
                });
            } else {
                data = {
                    id: Number($('input[name=image_modal_input_feild]:checked').val()),
                    src: $('#image_' + $('input[name=image_modal_input_feild]:checked').val()).attr('src')
                };
            }
            callback_function(data);
            closeImageModal();
        }

        function closeImageModal() {
            $('input[name="image"]').prop('checked', false);
            callback_function = undefined;
            $("#{{ $id }}").modal('hide');
        }

        function selectThisImage(id) {
            $(`#${id}`).click();
        }

        function uploadImages() {

            $('#uploaded_images').html("");
            var files = $('#upload_images')[0].files;
            if (!files.length) {
                $('#uploaded_images').html("<label class='text-danger'>Please select image(s) for uploading</label>");
                return;
            }
            var error = '';
            var form_data = new FormData();

            for (var count = 0; count < files.length; count++) {
                var name = files[count].name;
                var extension = name.split('.').pop().toLowerCase();

                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    error += "Invalid " + (Number(count) + 1) + " Image File<br>"
                } else {
                    form_data.append("images[]", files[count]);
                }
            }
            if (error == '') {
                $("#upload_images_btn").prop("disabled", true);
                $("#upload_images_btn").hide();
                $.ajax({
                    url: "{{ route('admin.image.add') }}",
                    method: "POST",
                    data: form_data,
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('#uploaded_images').html(`
                                            <div class="text-center">
                                                <div class="spinner-border text-success" role="status">
                                                    <span class="sr-only">Loading...</span>
                                                </div>
                                            </div>
                                            `);
                    },
                    success: function(data) {
                        $('#uploaded_images').html("");
                        $('#upload_images').val('');
                        getImagesFromServer();
                        $("#upload_images_btn").prop("disabled", false);
                        $("#upload_images_btn").show();
                    }
                })
            } else {
                $('#uploaded_images').html("<label class='text-danger'>" + error + "</label>");
            }
        }

    </script>
@endpush

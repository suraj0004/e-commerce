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
                    <div class="col-md-9 row" id="ajax_response_images" style="height: 500px; overflow:scroll">
                    </div>
                    <div class="col-md-3 p-5 text-center">
                        <div class="form-group">
                            <label for="upload_images">Upload Image(s) from device</label>
                            <input type="file" class="form-control-file" id="upload_images" multiple>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="confirmSelectedImages()">
                    Confirm
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@push('js')
    <script type="text/javascript">
        var callback_function, input_type;

        function showImageModal(type, cb) {
            input_type = type;
            getImagesFromServer()
            callback_function = cb;
            $("#{{ $id }}").modal('show');
        }

        function getImagesFromServer() {
            $.ajax({
                type: 'GET',
                url: "{{ route('admin.ajax.getImages') }}",
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        var html = "";
                        response.data.forEach(image => {
                            var div = `
                                        <div class="col-md-3 text-center mt-2 p-3 ">
                                            <div class="border">
                                                <div class="pt-2 img-responsive" style="min-height: 200px">
                                                     <img id="image_${image.id}" src="${image.image}" alt="Image" class="img-fluid "   height="150" width="150">
                                                </div>
                                                <hr>
                                                Select: <input type="${input_type}" name="image_modal_input_feild" value="${ image.id }">
                                            </div>
                                         </div>`;

                            html += div;
                        });

                        $("#ajax_response_images").html(html);

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

    </script>
@endpush

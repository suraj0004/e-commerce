<div class="modal fade" id="images-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog images-modal" style="max-width: 1500px !important;">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Images</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <div class="row" style="height: 500px; overflow:scroll">
                    @foreach ($images as $image)
                        <div class="col-md-3 text-center mt-2 p-3 ">
                            <div class="border">
                                <div class="pt-2 img-responsive" style="min-height: 200px">
                                    <img id="image_{{ $image->id }}"
                                        src="{{ Storage::disk('dynamic_images')->url($image->image) }}" alt="Image"
                                        class="img-fluid " height="150" width="150">
                                </div>
                                <hr>
                                Select: <input type="{{$type}}" name="image" value="{{ $image->id }}">
                            </div>
                        </div>
                    @endforeach
                </div> --}}
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="imageSelectedForAddCategory()"> Confirm
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@push('js')
    <script type="text/javascript">
        $.ajax({
            type: 'GET',
            url: "{{ route('admin.ajax.getImages') }}",
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                var errorMessage = xhr.status + ': ' + xhr.statusText
                alert('Error - ' + errorMessage);
            }
        });

    </script>
@endpush

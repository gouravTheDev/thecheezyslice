@include('admin.include.menu')
<?php
// print_r($gallery);
?>
<div class="container pt-3">
    <div class="row">
        <div class="col-6">
            <h2>Gallery Manage</h2>
        </div>
        <div class="col-6 text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#uploadImageModal">Upload New Image</button>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadImageForm" name="uploadImageForm">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg" class="form-control" id="upload-images" name="images[]" multiple>
                    </div>
                    <div class="form-group text-right mt-3">
                        <button type="button" class="btn btn-success upload-image-btn">Upload</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.upload-image-btn').on('click', function(e) {
        console.log("hello")
        var formdata = new FormData();
        jQuery.each($('#upload-images')[0].files, function(i, file) {
            formdata.append('images[' + i + ']', file);
        });

        $.ajax({
            type: 'POST',
            url: '/admin/upload-image',
            data: formData,
            error: function(res) {
                console.log("error", res);
                // $('#ticket-modal').modal('hide');
            },
            success: function(res) {
                console.log(res);
                // if (res.error != '') {
                //     window.FlashMessage.error(res.error, {
                //         progress: true,
                //         timeout: 6000
                //     });
                // } else {
                //     window.FlashMessage.success(res.success, {
                //         progress: true,
                //         timeout: 6000
                //     });
                // }
                // $('#ticket-modal').modal('hide');
                // $.get('/support/tickets', function(htmldata) {
                //     $('.contentDiv').html(htmldata);
                // });
            }
        });
    });
</script>


@include('admin.include.footer')
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
    <div class="row mt-4">
        <?php
        foreach ($gallery as $image) { ?>
            <div class="col-4 my-1">
                <div class="text-right">
                    <button class="btn btn-danger btn-sm mb-1 delete-image" img-id="<?= $image->id ?>">&#10060;</button><br>
                </div>
                <img class="shadow img-responsive" src="/uploads/gallery/<?= $image->image ?>" alt="" style="width: 100%; height: 80%;">
            </div>
        <?php }
        ?>
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
        var formData = new FormData();
        jQuery.each($('#upload-images')[0].files, function(i, file) {
            formData.append('images[' + i + ']', file);
        });

        $.ajax({
            type: 'POST',
            url: '/admin/upload-image',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            data: formData,
            processData: false,
            contentType: false,
            error: function(res) {
                console.log("error", res);
                location.reload();
            },
            success: function(res) {
                location.reload();
            }
        });
    });

    $('.delete-image').on("click", function() {
        let imgId = $(this).attr('img-id');
        if (confirm('Are you sure you want to delete this image?')) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete-image',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                data: JSON.stringify({
                    image_id: imgId,
                }),
                processData: false,
                contentType: 'application/json',
                error: function(res) {
                    console.log("error", res);
                    location.reload();
                },
                success: function(res) {
                    console.log("deleted");
                    location.reload();
                }
            });
        } else {
            console.log("not delete");
        }
    })
</script>


@include('admin.include.footer')
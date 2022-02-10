<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>

<script type="text/javascript">
    var myWidget = cloudinary.createUploadWidget({
            cloudName: 'iamraw',
            uploadPreset: 'm7yfeylv'
        }, (error, result) => {
            if (!error && result && result.event === "success") {

                var imgUpload = document.getElementById('imgUpload');
                var previewDiv = document.getElementById('previewDiv');
                var previewAvt = document.getElementById('previewAvt');
                if (imgUpload) {
                    var currentImageValue = imgUpload.value;  // imgUpload.value = link anh link1, link2 , link 3
                    if (currentImageValue.length > 0) {
                        currentImageValue += ',';
                    }
                    currentImageValue += result.info.secure_url;

                    var avatarImg = document.getElementById('avatarImg');
                    if (avatarImg){
                        imgUpload.value = result.info.secure_url;
                        avatarImg.src = result.info.secure_url;
                    } else {
                        imgUpload.value = currentImageValue;
                        previewDiv.src = result.info.secure_url;
                        previewDiv.innerHTML += `<img src="${result.info.secure_url}"  class="img-rounded" alt="" width="100px" style="max-width: 20%">`;

                    }

                }
            }
        }
    )

    document.getElementById("upload_widget").addEventListener("click", function () {
        myWidget.open();
    }, false);
</script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ckeditorContent');
</script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{URL::asset('js/alert-error.js')}}"></script>

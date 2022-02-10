<script type="text/javascript">
    var domReadyQueue = [];
</script>
<script src="{{URL::asset('js/raovat.min.js')}}"></script>
<script src="{{URL::asset('js/ckeditor.js')}}"></script>
<script src="{{URL::asset('js/alert-error.js')}}"></script>
<script src='{{URL::asset('js/jquery.min.js')}}'></script>
<script src='{{URL::asset('js/districts.min.js')}}'></script>
<script src='{{URL::asset('js/select-address.js')}}'></script>

<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>

{{--<script type="text/javascript">--}}
{{--    var myWidget = cloudinary.createUploadWidget({--}}
{{--            cloudName: 'iamraw',--}}
{{--            uploadPreset: 'm7yfeylv'--}}
{{--        }, (error, result) => {--}}
{{--            if (!error && result && result.event === "success") {--}}

{{--                var imgUpload = document.getElementById('imgUpload');--}}
{{--                var previewDiv = document.getElementById('previewDiv');--}}
{{--                if (imgUpload) {--}}
{{--                    var currentImageValue = imgUpload.value;  // imgUpload.value = link anh link1, link2 , link 3--}}
{{--                    if (currentImageValue.length > 0) {--}}
{{--                        currentImageValue += ',';--}}
{{--                    }--}}
{{--                    currentImageValue += result.info.secure_url;--}}


{{--                    imgUpload.value = currentImageValue;--}}
{{--                    previewDiv.src = result.info.secure_url;--}}
{{--                    previewDiv.innerHTML += `<img src="${result.info.secure_url}"  class="img-rounded" alt="" width="100px">`;--}}
{{--                }--}}
{{--            }--}}
{{--        }--}}
{{--    )--}}

{{--    document.getElementById("upload_widget").addEventListener("click", function () {--}}
{{--        myWidget.open();--}}
{{--    }, false);--}}
{{--</script>--}}


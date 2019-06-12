<script type="text/javascript" src="./js/jquery.zip2addr.js"></script>

<script type="text/javascript">
    function choosefile()
    {
        document.querySelector('input[type=file]').click();
    }
    /*function previewFile(){
        var preview = document.querySelector('img');
        var file    = document.querySelector('input[type=file]').files[0];
        var reader  = new FileReader();

        reader.onloadend = function () {
            $(preview).css("display","block");
            $("#img_note").css("display","none");
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
    function upload()
    {
        var file_data    = document.querySelector('input[type=file]').files[0];
        var form_data = new FormData();
        form_data.append("file", file_data);

        if (check_multifile_logo(file_data['name'])) {
            $.ajax({
                url: "process.php",
                cache: false,
                contentType: false,
                processData: false,
                async: false,
                data: form_data,
                type: 'post',
                success: function(data) {
                    data = JSON.parse(data);
                    previewFile();
                }
            });
        } else {
            alert('We only accept JPG, JPEG, PNG, GIF and BMP files');
        }
    }
    function check_multifile_logo(file) {
        var extension = file.substr((file.lastIndexOf('.') + 1))
        if (extension === 'jpg' || extension === 'jpeg' || extension === 'gif' || extension === 'png' || extension === 'bmp') {
            return true;
        } else {
            return false;
        }
    }*/
    function check_multifile_logo(file) {
        var extension = file.substr((file.lastIndexOf('.') + 1))
        if (extension === 'jpg' || extension === 'jpeg' || extension === 'gif' || extension === 'png' || extension === 'bmp') {
            return true;
        } else {
            return false;
        }
    }

    function readURL(input) {
        if ( input.files && input.files[0]) {
            if(check_multifile_logo(input.files[0]['name'])){
                var reader = new FileReader();
                reader.onload = function(e) {
                    var preview = $('#thumb');
                    preview.attr('src', e.target.result);
                    preview.css('display', 'initial');
                    $('#text_thumb').css('display', 'none');
                    $('.thumb').css('border', 0);
                }
                reader.readAsDataURL(input.files[0]);
            }else{
                alert('We only accept JPG, JPEG, PNG, GIF and BMP files');
            }
        }
    }

    $(document).on('change', '#img_file', function() {
        readURL(this);
    });
    $("input").keypress(function(e) {
        if (e.which == 13) {
            return false;
        }
    });

    $("#zip").zip2addr({
        addr:"#address"
    })

    function cbChange(obj) {
        var cbs = document.getElementsByClassName("form-check-input");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = false;
        }
        obj.checked = true;
    }
</script>

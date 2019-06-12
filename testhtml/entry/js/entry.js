$(document).ready(function(){
    $("#entry-steps").steps({
        headerTag: "h5",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: false,
        enableAllSteps: false,
        enablePagination: true,
    });

    $("#btn_step1").on('click',function(e){
        e.preventDefault();
        if(chkInput()){
            auto_complete();
            $('a[href="#next"]').click();
        }else{
            e.stopPropagation();
        }
    });
    $("#btn_step2").on('click',function(e){
        e.preventDefault();
        $('a[href="#next"]').click();
    });

    $(".btn_back").on('click',function(e){
        e.preventDefault();
        $('a[href="#previous"]').click();
    });
});

function auto_complete(e) {
    if ($('#entry-steps ul li:first-child ').hasClass('current')) {
        var clone_html = $("#entry-steps-p-0 .step_content").html();
        $('#step2').html(clone_html);
        $("#step2 input").each(function() {
            if ($(this).attr('type') == 'hidden' || $(this).attr('type') == 'file') {
                $(this).replaceWith('');
            } else {
                var clone_name = '#example-basic-p-0 input[name="' + $(this).attr('name') + '"]';
                switch ($(this).attr('name')) {
                    case 'gender':
                        if ($(this).attr('check') == 'true') {
                            $(this).replaceWith('<img src="/resume/img/check1.png">');
                        } else {
                            $(this).replaceWith('<img src="/resume/img/check2.png">');
                        }
                        break;
                    case 'birth_date_year':
                        if ($(clone_name).val() == '') {
                            $(this).replaceWith('&nbsp;&nbsp;&nbsp;&nbsp;');
                            break;
                        }
                    case 'birth_date_month':
                        if ($(clone_name).val() == '') {
                            $(this).replaceWith('&nbsp;&nbsp;');
                            break;
                        }
                    case 'birth_date_day':
                        if ($(clone_name).val() == '') {
                            $(this).replaceWith('&nbsp;&nbsp;');
                            break;
                        }
                    default:
                        $(this).replaceWith($(clone_name).val());
                }
            }
        });
    }
}

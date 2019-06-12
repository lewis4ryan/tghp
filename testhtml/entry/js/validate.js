$(document).ready(function(){
    $("input[name='name']").on('blur',function(){
        chk_name();
    });

    $("input[name='kana']").on('blur',function(){
        chk_kana();
    });

    $("input[name='tel']").on('blur',function(){
        chk_tel();
    });

    $("input[name='mail']").on('blur',function(){
        chk_mail();
    });

    $("input[name='consent']").on('click',function(){
        chk_consent();
    });

    $("input[name='state']").on('click',function(){
        chk_state();
    });

    $("input[name='city']").on('click',function(){
        chk_city();
    });

    $("input[name='category']").on('click',function(){
        chk_category();
    });

});

function chk_name(){
    if( $("input[name='name']").val() == '' ){
        $('#chk_name').css( 'display','block' );
        return false;
    }else{
        $('#chk_name').css( 'display','none' );
        return true;
    }
}

function chk_mail(){
    if( $("input[name='mail']").val() == '' ){
        $('#chk_mail').css( 'display','block' );
        return false;
    }
    if( !$("input[name='mail']").val().match(/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/) ){
        $('#chk_mail').css( 'display','block' );
        return false;
    }
    $('#chk_mail').css( 'display','none' );
    return true;
}

function chk_kana(){
    if( $("input[name='kana']").val() == '' ){
        $('#chk_kana').css( 'display','block' );
        return false;
    }
    else{
        $('#chk_kana').css( 'display','none' );
        return true;
    }
}

function chk_tel(){
    if( $("input[name='tel']").val() == '' ){
        $('#chk_tel').css( 'display','block' );
        return false;
    }
    if( !$("input[name='tel']").val().match(/^0\d{1,4}\d{2,4}\d{4}$/) && !$("input[name='tel']").val().match(/^0\d{1,4}\-\d{2,4}\-\d{4}$/) ){
        $('#chk_tel').css( 'display','block' );
        return false;
    }
    $('#chk_tel').css( 'display','none' );
    return true;
}

function chk_state(){
    if( $("input[name='state']").val() == '' ){
        $('#chk_state').css( 'display','block' );
        return false;
    }
    else{
        $('#chk_state').css( 'display','none' );
        return true;
    }
}

function chk_city(){
    if( $("input[name='state']").val() == '' ){
        $('#chk_city').css( 'display','block' );
        return false;
    }
    else{
        $('#chk_city').css( 'display','none' );
        return true;
    }
}

function chk_consent(){
    if( $.isNumeric($("input[name='consent']:checked").val()) == false ){
        $('#chk_consent').css( 'display','block' );
        return false;
    }
    else if( $("input[name='consent']:checked").val() == 0 ){
        $('#chk_consent').css( 'display','block' );
        return false;
    }
    else{
        $('#chk_consent').css( 'display','none' );
        return true;
    }
}

function chk_category(){
    if( $.isNumeric($("input[name='category']:checked").val()) == false ){
        $('#chk_category').css( 'display','block' );
        return false;
    }
    else if( $("input[name='category']:checked").val() == 0 ){
        $('#chk_category').css( 'display','block' );
        return false;
    }
    else{
        $('#chk_category').css( 'display','none' );
        return true;
    }
}

function chkInput(){
    var flg_err = new Array();
    var chk_ret;

    chk_ret = chk_name();
    flg_err.push(chk_ret);

    chk_ret = chk_kana();
    flg_err.push(chk_ret);

    chk_ret = chk_tel();
    flg_err.push(chk_ret);

    chk_ret = chk_mail();
    flg_err.push(chk_ret);

    chk_ret = chk_consent();
    flg_err.push(chk_ret);

    chk_ret = chk_state();
    flg_err.push(chk_ret);

    chk_ret = chk_city();
    flg_err.push(chk_ret);

    chk_ret = chk_category();
    flg_err.push(chk_ret);


    if($.inArray(false, flg_err) >= 0){
        alert('各入力項目をご確認ください。');
        return false;
    }else{
        return true;
    }
}


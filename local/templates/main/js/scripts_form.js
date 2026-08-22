    function isValidEmail (email, strict)
    {
        if ( !strict ) email = email.replace(/^\s+|\s+$/g, '');
        return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]+[a-z]/i).test(email);
    }

    $(document).on("click", "#ur_main_list", function() {
		$('#fiz_list').hide();
		$('#ur_list').show();
		$('#ur_main_list').addClass("act");
		$('#fiz_main_list').removeClass("act");
	});
    $(document).on("click", "#fiz_main_list", function() {
		$('#ur_list').hide();
		$('#fiz_list').show();
		$('#fiz_main_list').addClass("act");
		$('#ur_main_list').removeClass("act");
	});

    $(document).on("submit", "#make-appointment form", function() {
        var mist=0;
        var name=$('#make-appointment input[name=name_f]').val();
        var phone=$('#make-appointment input[name=phone_f]').val();
        var mail=$('#make-appointment input[name=email_f]').val();
        var text=$('#make-appointment input[name=text_f]').val();  
        var agree='';
        agree=$('#make-appointment input[name=checkbox_f]:checked').val();
        if (agree!='y') {
            mist=mist+1;

        } else {

        } 
        if(name!=''){
            $('#make-appointment input[name=name_f]').parent().removeClass("error");
        }else{
            $('#make-appointment input[name=name_f]').parent().addClass("error");
            mist=mist+1;
        }
        if (isValidEmail(mail)){
            $('#make-appointment input[name=email_f]').parent().removeClass("error");
        }else{
            $('#make-appointment input[name=email_f]').parent().addClass("error");
            mist=mist+1;
        }
        if(phone!=''){
            $('#make-appointment input[name=phone_f]').parent().removeClass("error");
        }else{
            $('#make-appointment input[name=phone_f]').parent().addClass("error");
            mist=mist+1;
        }
        if(text!=''){
            $('#make-appointment input[name=text_f]').parent().removeClass("error");
        }else{
            $('#make-appointment input[name=text_f]').parent().addClass("error");
            mist=mist+1;
        }
 
        if(mist==0){
            $.ajax({
                type: "POST",
                url: "/local/templates/main/ajax/feadback.php",
                data: {
                    "name": name,
                    "mail": mail,
                    "phone": phone,
                    "text": text
                },
                success: function(msg){
                    $('#make-appointment .err_msg').html(msg);
                    $('#make-appointment input[name=name_f]').val('');
                    $('#make-appointment input[name=phone_f]').val('');
                    $('#make-appointment input[name=email_f]').val('');
                    $('#make-appointment input[name=text_f]').val('');
                    setTimeout('$("#make-appointment .mfp-close").trigger( "click" );$("#make-appointment .err_msg").html("");', 2000);
                }
            });
        }
        return false;
    });

    $(document).on("submit", "#callback form", function() {
        var mist=0;
        var name=$('#callback input[name=name_f]').val();
        var phone=$('#callback input[name=phone_f]').val();
        var agree='';
        agree=$('#callback input[name=checkbox_f]:checked').val();
        if (agree!='y') {
            mist=mist+1;

        } else {

        } 
        if(name!=''){
            $('#callback input[name=name_f]').parent().removeClass("error");
        }else{
            $('#callback input[name=name_f]').parent().addClass("error");
            mist=mist+1;
        }

        if(phone!=''){
            $('#callback input[name=phone_f]').parent().removeClass("error");
        }else{
            $('#callback input[name=phone_f]').parent().addClass("error");
            mist=mist+1;
        }

        if(mist==0){
            $.ajax({
                type: "POST",
                url: "/local/templates/main/ajax/callback.php",
                data: {
                    "name": name,
                    "phone": phone
                },
                success: function(msg){
                    $('#callback .err_msg').html(msg);
                    $('#callback input[name=name_f]').val('');
                    $('#callback input[name=phone_f]').val('');
                    setTimeout('$("#callback .mfp-close").trigger( "click" );$("#callback .err_msg").html("");', 2000);
                }
            });
        }
        return false;
    });

    $(document).on("focusout", ".main-slide form input[name=name]", function() {
        var name=$(this).val();
        $('.main-slide form input[name=name]').val(name);
    });
    $(document).on("focusout", ".main-slide form input[name=phone]", function() {
        var phone=$(this).val();
        $('.main-slide form input[name=phone]').val(phone);
    });
    $(document).on("change", ".main-slide form input[name=checkbox]", function() {
        var agree='';
        agree=$(this).parent().children('input[name=checkbox]:checked').val();
        if (agree!='y') {
			$(".main-slide form input[name=checkbox]").prop("checked", false);
        } else {
			$(".main-slide form input[name=checkbox]").prop("checked", true);
        } 
    });

    $(document).on("submit", ".main-slide form", function() {
        var mist=0;
        var $form = $(this);
        var name=$form.children('.main-form_group').children('input[name=name]').val();
        var phone=$form.children('.main-form_group').children('input[name=phone]').val();
        var agree='';
        agree=$form.children('.main-form_policy').children('.wrapper-unified-checkbox').children('input[name=checkbox]:checked').val();

        if (agree!='y') {
            mist=mist+1;

        } else {

        } 
        if(name!=''){
            $form.children('.main-form_group').children('input[name=name]').parent().removeClass("error");
        }else{
            $form.children('.main-form_group').children('input[name=name]').parent().addClass("error");
            mist=mist+1;
        }

        if(phone!=''){
            $form.children('.main-form_group').children('input[name=phone]').parent().removeClass("error");
        }else{
            $form.children('.main-form_group').children('input[name=phone]').parent().addClass("error");
            mist=mist+1;
        }

        if(mist==0){
            $.ajax({
                type: "POST",
                url: "/local/templates/main/ajax/callback.php",
                data: {
                    "name": name,
                    "phone": phone
                },
                success: function(msg){
                    $('.main-slide form .main-form_policy .err_msg').html(msg);
                    $('.main-slide form input[name=name]').val('');
                    $('.main-slide form input[name=phone]').val('');
                    $(".main-slide form input[name=checkbox]").prop("checked", false);
                }
            });
        }
        return false;
    });

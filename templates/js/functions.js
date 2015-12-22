function get_html_data(url_page, data_get, div_loading, div_result){
    loading(div_loading,true);
    //
    setTimeout(function(){
        $.ajax({
            type: "GET",
            url: url_page,
            data: data_get, 
            cache: false,
            dataType: 'html',
            success: function(html){
                $("#"+div_result).fadeOut('slow', function(){
                        $("#"+div_result).html(html);
                        $("#"+div_result).fadeIn();
                    }
                );
                loading(div_loading,false);
            }
        });
    }, 1100);
}

function post_html_data(url_page, data_post, div_loading, div_result, append){
    loading(div_loading,true);
    //
    setTimeout(function(){
        $.ajax({
            type: "POST",
            url: url_page,
            data: data_post, 
            cache: false,
            success: function(html){
                $("#"+div_result).fadeOut('slow', function(){
                        if(undefined == append)
                            $("#"+div_result).html(html);
                        else
                            $("#"+div_result).append(html);
                        $("#"+div_result).fadeIn();
                    }
                );
                loading(div_loading,false);
            }
        });
    }, 1000);
}

function loading(div_container, is_show ){
    $("#"+div_container).css({
        'display':'none',
        'float':'right',
        'margin-right':'20px',
        'z-index':'5'
    });
    if(is_show == true)
        $("#"+div_container).html('<img src="'+base_url+'templates/images/icons/loading.gif" />').fadeIn();
    if(is_show == false)
        $("#"+div_container).html('<img src="'+base_url+'templates/images/icons/loading.gif" />').fadeOut();
}

function loading_bymouse(show){
    
}
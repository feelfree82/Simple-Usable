jQuery(document).ready(function() {
    var greeting = jQuery("#greeting").val();

    jQuery("#push-me").click(function(){

        jQuery.ajax({
            type: 'GET',
            url: 'http://localhost/simple-usable/wp-admin/admin-ajax.php',
            data: {
                action: 'myAjax',
                greeting: greeting,
            },
            success: function(data, textStatus, XMLHttpRequest){
                jQuery("#about-us-content").html('');
                jQuery("#about-us-content").replaceWith(data);
            },
            error: function(MLHttpRequest, textStatus, errorThrown){
                alert(errorThrown);
            }
			
			
			
        });
    });
});
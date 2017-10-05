jQuery(document).ready(function(){
    jQuery('#janela').submit(function(){
        var dados = jQuery( this ).serialize();

        jQuery.ajax({
            type: "POST",
            url: "create-categoria.php",
            data: dados,
            success: function( data )
            {
                var res = $.parseJSON(data);
                console.log(res.result);

                alert(data)

            }
        });

        return false;
    });
});
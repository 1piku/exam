define([
    "jquery",
    "jquery/ui",
    'jquery/validate',
    'mage/translate'
], function($){
    "use strict";
     
    function main(config, element) {
        var $element = $(element);
        var AjaxUrl = config.AjaxUrl;
         
        var dataForm = $('#contact-form');
        dataForm.mage('validation', {});
         
        $(document).on('click','.submit',function() {
            // if (dataForm.valid()){
            // event.preventDefault();
            //     var param = dataForm.serialize();

            //         $.ajax({
            //             showLoader: true,
            //             url: AjaxUrl,
            //             data: param,
            //             type: "POST"

            //         }).done(function (data) {
            //             console.log(data);
            //             $('#succesmsg').html(data.output);
            //             $('.note').html(data);
            //             $('.note').css('color', 'red');
            //             document.getElementById("contact-form").reset();
            //             return true;
            //         });

            console.log('click button works');

                // }
            });
    };
return main;
     
     
});
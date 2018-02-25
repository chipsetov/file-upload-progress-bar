$("input[type=submit]").attr('disabled','disabled');
$(document).ready(
    function(){
        $('input:file').change(
            function(){
                if ($(this).val()) {
                    $('input:submit').removeAttr('disabled');
                }
            }
        );
    });
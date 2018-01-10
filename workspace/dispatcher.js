$(document).ready(function(){
    $.ajax({
        url: 'Dispatcher.php',
        type: 'POST',
        success: function(res)
        {
            $("#dispatcher").html(res);
        }
    })
});
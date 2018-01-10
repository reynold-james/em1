$(document).ready(function(){
    $.ajax({
        url: 'driver.php',
        type: 'POST',
        success: function(res)
        {
            $("#Assigned1").load(driver.php);
        }
    })
});
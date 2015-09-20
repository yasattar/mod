$(document).ready(function() {
    $(document).on('click', '#changePwd', function() {
        loader(true);
        $('#popUpModal').modal('show');
        $('#popUpModal h4').html('Change Password');
        $.ajax({
            url: global + 'site/change-password',
            type: 'GET',
            async: false,
            success: function(data) {
                $("#popUpModal .modal-body").html(data);
                loader(false);
            }
        });
    });
});

function resetUserPassword(userEmail, $this) {
    $this.innerHTML = 'Please wait...';
    $.ajax({
        url: global + 'site/reset-password-by-admin',
        type: 'POST',
        async: false,
        data: {email: userEmail},
        success: function(data) {
            if (data.status)
                showAlertBox('Success!', 'Request has been accepted.');
            else
                showAlertBox('Error!', 'There is some problem.', true);
            $this.innerHTML = 'Reset';
        }
    });
}
function showAlertBox(alert, msg, isError) {
    $("#alertBox h4 i").html(alert);
    $("#alertBox span").html(msg);
    if (isError)
        $("#alertBox").removeClass().addClass("alert alert-error alert-dismissable");
    else
        $("#alertBox").removeClass().addClass("alert alert-success alert-dismissable");
    $("#alertBox").fadeIn();
    setTimeout(function() {
        $("#alertBox").fadeOut();
    }, 5000);
}

function loader(mode) {
    if (mode) {
        $("#ajax_loader").fadeIn();
    } else {
        $("#ajax_loader").fadeOut();
    }
}

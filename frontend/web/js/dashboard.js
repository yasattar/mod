$(document).ready(function() {
    $(document).on('click', '.acceptReject', function() {
        var $this = $(this);
        $this.html('wait...');
        $('.acceptReject').addClass('disabled');

        var buttonTriggerType = $this.attr('data-type');
        if (confirm("Are you sure want to " + buttonTriggerType + "?")) {
            var requestAssignedId = $this.attr('data-id');
            if (requestAssignedId == '' || buttonTriggerType == '')
            {
                return false;
            }
            sendRequest(requestAssignedId, buttonTriggerType, $this);
        }
    });
    $(document).on('click', '.notifications-icon', function() {
        var serviceType = $(this).data().type;
        var userId = this.id;
        var userType = $(this).data().usertype;
        updateNotification(userId, userType, serviceType);
    });

    /* 
     *   admin accept request when not accepted by MSP for Medical request
     * 
     */
    $(document).on('click', '.adminRequestAccept', function() {
        loader(true);
        $('.modal-dialog').css('width', '1000');
        $('#popUpModal').modal('show');

        $('#popUpModal h4').html('Select Service Provider');
        var requestId = $(this).attr('data-id');
        var requestType = $(this).attr('data-type');
        $.ajax({
            url: global + 'dashboard/get-sp-list',
            type: 'GET',
            data: {
                requestId: requestId,
                requestType: requestType,
            },
            async: false,
            success: function(data) {
                $("#popUpModal .modal-body").html(data);
                requestContent();
            }
        });
        $("#request_id").val(requestId);
        $("#request_type").val(requestType);
        loader(false);
    });

});

function sendRequest(requestAssignedId, buttonTriggerType, $this) {
    loader(true);
    $.ajax({
        url: global + 'dashboard/accept-reject-request',
        type: 'POST',
        dataType: 'json',
        data: {
            requestAssignedId: requestAssignedId,
            buttonTriggerType: buttonTriggerType,
            request_type: $("#request_type").val(),
        },
        async: false,
        success: function(data) {
            if (data.status)
            {
                $this.closest('.btn-group').find('.acceptReject').removeClass('disabled');
                $this.addClass('disabled');
                showAlertBox('Success!', 'Request has been ' + buttonTriggerType + 'ed.');
            }
            else
            {
                showAlertBox('Error!', 'Problem occurred!');
            }
            requestContent();
        }
    });
    loader(false);
}
function sendRequestByAdmin(providerId, providerType, $this) {
    if (confirm("Are you sure want to assign?")) {
        loader(true);
        var requestId = $('#request_id').val();
        $this.innerHTML = 'wait...';
        $(".requestAssignModel button").addClass('disabled');
        $.ajax({
            url: global + 'dashboard/admin-accept-request',
            type: 'POST',
            dataType: 'json',
            data: {
                providerId: providerId,
                requestId: requestId,
                providerType: providerType,
                request_type: $("#request_type").val(),
            },
            async: false,
            success: function(data) {
                if (data.status)
                {
                    showAlertBox('Success!', 'Request has been accepted.');
                }
                else
                {
                    showAlertBox('Error!', 'Problem occurred!');
                }
                requestContent();
            }
        });
        $('#popUpModal').modal('hide');
        loader(false);
    }
}
function updateNotification(userId, userType, serviceType) {
    loader(true);
    $.ajax({
        url: global + 'dashboard/update-notification',
        type: 'POST',
        dataType: 'json',
        data: {
            userId: userId,
            userType: userType,
            serviceType: serviceType,
        },
        async: false,
        success: function(data) {
            if (data.status)
            {
                if (serviceType == 'medical')
                    $(".medicalIcon").html("");
                else
                    $(".socialIcon").html("");
            }
            else
            {
                // showAlertBox('Error!', 'Problem occurred!');
            }
        }
    });
    loader(false);
}
function ajaxRefreshDashboard() {
    $.ajax({
        url: global + 'dashboard/ajax-refresh',
        type: 'GET',
        async: false,
        success: function(data) {
            $("#refreshContainer").html(data);
        }
    });
}

function requestContent() {
    loader(true);
    var isActive = $('#social-list-tab').attr("class");
    ajaxRefreshDashboard();
    if (isActive == 'active')
    {
        $('#refreshContainer').find('.nav-tabs').find('li').removeClass('active');
        $('.nav-tabs').find('#social-list-tab').addClass('active');
        $('.tab-content').find('#social-list').removeClass('active');
        $('.tab-content').find('#medical-list').removeClass('active');
        $('.tab-content').find('#social-list').addClass('active');
    } else {
        $('#refreshContainer').find('.nav-tabs').find('li').removeClass('active');
        $('.nav-tabs').find('#medical-list-tab').addClass('active');
        $('.nav-tabs').find('#social-list-tab').removeClass('active');
        $('.tab-content').find('#social-list').removeClass('active');
        $('.tab-content').find('#medical-list').addClass('active');
        $('.tab-content').find('#social-list').removeClass('active');
    }
    loader(false);
}
$('#alertLog').hide()
$('#logButton').click(function () {
    $("#alertLog").removeClass('alert-success').removeClass('alert-danger');
    var emailLog = $('#emailLog').val();
    var passLog = $('#passLog').val();


    $.ajax({
        url: "dbSend/indexSentLog.php?task=login&emailLog=" + emailLog + "&passLog=" + passLog,
        success: function (data) {
            if (data.indexOf('sent') > -1) {
                $("#alertLog").addClass('alert-success');
                $("#alertLog").html('Logged in successfully');
                $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                $('#emailLog').val("");
                $('#passLog').val("");
                var delay = 1500;
                setTimeout(function () {
                    window.location.replace(window.location.href)
                }, delay);
            } else if (data.indexOf('pass') > -1) {
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html('Password is incorrect');
                $("#alertLog").slideDown(500).delay(1000).slideUp(500);
            } else {
                $("#alertLog").addClass('alert-danger');
                $("#alertLog").html('Email is incorrect');
                $("#alertLog").slideDown(500).delay(1000).slideUp(500);
            }
        },
        error: function (data, err) {
            $("#alertLog").addClass('alert-danger');
            $("#alertLog").html('Some problem occurred. We are sorry.');
            $("#alertLog").slideDown(500).delay(1000).slideUp(500);
        }
    });
});

$('#eyeLog').click(function () {
    /* var elementType = $('#passSign').prev().prop('pass'); */
    var elementType = $('#passLog').attr('type');
    console.log(elementType);
    if (elementType == "text") {
        $('#passLog').attr('type', 'password');
    } else if (elementType == "password") {
        $('#passLog').attr('type', 'text');
    }
});
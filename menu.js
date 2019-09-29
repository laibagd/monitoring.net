let ip;
let json;

function paimtiduomenis() {
    ip = $('#ip').val();

}

function siustiduomenis() {

    $.post('ping.php', json, function (data) {
        $('#apie').append(data);
    });

}


function suformuotJson() {
    json = {
        "ip": ip,

    };
}

$('[value=checkserver]').click(function () {

    paimtiduomenis();
    suformuotJson();
    siustiduomenis();

});




// Set timeout letiables.
let timoutWarning = 1000000; // Display warning in 20 sec.
let timoutNow = 2000000; // Timeout in 10sec.
let logoutUrl = 'logout.php'; // URL to logout page.

let warningTimer;
let timeoutTimer;

// Start timers.
function StartTimers() {
    warningTimer = setTimeout("IdleWarning()", timoutWarning);
    timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
}

// Reset timers.
function ResetTimers() {
    clearTimeout(warningTimer);
    clearTimeout(timeoutTimer);
    StartTimers();
    $("#timeout").dialog('close');
}

// Show idle timeout warning dialog.
function IdleWarning() {
    $("#timeout").dialog({
        modal: true
    });
}

// Logout the user.
function IdleTimeout() {
    window.location = logoutUrl;
}





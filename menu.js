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

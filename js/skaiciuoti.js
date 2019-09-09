function sudeti (a,b){
   return (a+b);

}

function atimti (a,b){
    return (a-b);

}
function Dauginti (a,b){
    return (a*b);

}
function dalinti (a,b){
    return a/b;

}
$('[value=Dauginti]').click(function () {

    let a = $('#fn').val();
    let b = $('#zinute').val();

    let ats=Dauginti(a,b);
    span = document.createElement('span');
    $('#rez').append(span);
    $('#rez> span ').html(ats);
});

$('[value=sudeti]').click(function () {

    let a = parseInt($('#fn').val());
    let b = parseInt($('#zinute').val());

    let ats = sudeti(a, b);
    span = document.createElement('span');
    $('#rez').append(span);
    $('#rez> span ').html(ats);
});

$('[value=atimti]').click(function () {

    let a = parseInt($('#fn').val());
    let b = parseInt($('#zinute').val());

    let ats = atimti(a, b);
    span = document.createElement('span');
    $('#rez').append(span);
    $('#rez> span ').html(ats);
});

$('[value=dalinti]').click(function () {

    let a = parseInt($('#fn').val());
    let b = parseInt($('#zinute').val());

    let ats = dalinti(a, b);
    span = document.createElement('span');
    $('#rez').append(span);
    $('#rez> span ').html(ats);
});
function checkkey(evt) {
    var char_code = (evt.which) ? evt.which : evt.keyCode;
    var ch = String.fromCharCode(char_code);
    if (!(/[0-9]/.test(ch))) {
        evt.preventDefault();
    }
}

function id_send(too) {
    window.location.href = `backend.php?id=${too}`;
}


function auto_blur(too, coo) {
    var len = too.value.length;
    if (len == 1) {
        document.getElementById(coo).focus();
    }

}
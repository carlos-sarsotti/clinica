



var check_n = 0;

var old_data = "--";

var id1;

function olvidopass_cb(new_data) {

document.getElementById('verolvidopass').innerHTML = new_data;

}

function olvidopass(ids) {

var ttx;

ttx = ids;

x_olvidopass( ttx, olvidopass_cb);

}




var check_n = 0;

var old_data = "--";

var id1;

function validacuit_cb(new_data) {

document.getElementById('vervalidacuit').innerHTML = new_data;

}

function validacuit(ids) {

var ttx;

ttx = ids;

//document.getElementById('status1').innerHTML = "<img border=0 src=assets/img/ajax-loading-input.gif>";

x_validacuit( ttx, validacuit_cb);

}

var check_n = 0;

var old_data = "--";

var id1;

function validadni_cb(new_data) {

document.getElementById('vervalidadni').innerHTML = new_data;

}

function validadni(ids) {

var ttx;

ttx = ids;

//document.getElementById('status1').innerHTML = "<img border=0 src=assets/img/ajax-loading-input.gif>";

x_validadni( ttx, validadni_cb);

}




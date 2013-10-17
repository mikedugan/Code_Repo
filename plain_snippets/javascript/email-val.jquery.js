function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}



    //m_c1_txtReqEmail
    var TempEmail = $('#m_c1_txtReqEmail').val();
    if (IsEmail(TempEmail) == false) {
        $('#m_c1_txtReqEmail').addClass("error");
        error += "\n     -  Invalid Email Address";
    } else {
        $('#m_c1_txtReqEmail').removeClass("error");
    }

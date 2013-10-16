// Code Block used displaying color code on passwords. 
function PasswordValidator() {
    $(document).ready(function() {
        $('#m2_MB_txt_UserPass2').hide();
        $("#m2_MB_txt_UserPass1").keyup(function(event) {
            var textBox = document.getElementById("m2_MB_txt_UserPass1");
            var count = textBox.value.length;

            if (count > 5) {
                $('#m2_MB_txt_UserPass2').show();
                $('#m2_MB_txt_UserPass2').css('border', '1px solid #FF0000');
                $('#m2_MB_txt_UserPass1').css('border', '1px solid #00FF00');
            } else {
                $('#m2_MB_txt_UserPass2').hide();
                $('#m2_MB_txt_UserPass1').css('border', '1px solid #FF0000');
            }
        });
        $("#m2_MB_txt_UserPass2").keyup(function(event) {
            var textBox1 = document.getElementById("m2_MB_txt_UserPass1");
            var textBox2 = document.getElementById("m2_MB_txt_UserPass2");


            if (textBox1.value == textBox2.value) {
                $('#m2_MB_txt_UserPass2').css('border', '1px solid #00FF00');
            } else {
                $('#m2_MB_txt_UserPass2').css('border', '1px solid #FF0000');
            }
        });
    });
}  //END PasswordValidator

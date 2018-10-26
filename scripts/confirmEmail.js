function checkOTP() {

var otp = document.getElementById('otp');

    if (/^[0-9]$/.test(otp.value)==false)
    {
        alert('please insert numbers only');
        document.getElementById("otp").value = "";
        return false;
    }
}
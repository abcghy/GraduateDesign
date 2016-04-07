function validate_password() {
    var password = document.getElementById('passwordsignup').value;
    var password_confirm = document.getElementById('passwordsignup_confirm').value;
    if (password != password_confirm) {
        // 如果不一样就将 passwordsignup_confirm_error 设置为 密码不一样
        document.getElementById('passwordsignup_confirm_error').innerHTML = '不一样';
        document.getElementById('submitsignup').setAttribute('disabled', 'disabled');
        return false;
    } else {
        document.getElementById('passwordsignup_confirm_error').innerHTML = '';
        return true;
    }
}

var xmlHttp;
var emailValidate = false;

function validate_email() {
    var email = document.getElementById('emailsignup').value;
    xmlHttp = new XMLHttpRequest();
    var url = 'validate_email.php';
    url = url + '?email=' + email;
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET", url, true);
    xmlHttp.send();
}

function stateChanged() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var json = xmlHttp.responseText;
        jsonObj = JSON.parse(json);
        // 如果 data 为 true 就说明数据库没有相同邮箱, 那么这一步就没有错误, 设置 submit 为可以按
        // 如果为 false 就说明有相同邮箱, 那么按钮应该不能按,并且有提示信息
        if (jsonObj.data == false) {
            document.getElementById('emailsignup_error').innerHTML = '邮箱已存在';
            document.getElementById('submitsignup').setAttribute('disabled', 'disabled');
            emailValidate = false;
        } else {
            document.getElementById('emailsignup_error').innerHTML = '';
            // document.getElementById('submitsignup').setAttribute('disabled', 'abled');
            emailValidate = true;
            validate_button();
        }
    }
}

function validate_button() {
    // 如果邮箱不存在, 密码相等
    // 每个都已经输入, 那么就将 button 就不disabled
    var email = document.getElementById('emailsignup').value;
    var password = document.getElementById('passwordsignup').value;
    var password_confirm = document.getElementById('passwordsignup_confirm').value;
    var username = document.getElementById('usernamesignup').value;
    if (emailValidate && validate_password() && email != ''
        && password != '' && password_confirm != '' && username != '') {
        document.getElementById('submitsignup').disabled = '';
    }
}
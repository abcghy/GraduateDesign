/**
 * Created by sakura on 16/5/8.
 */
var xmlHttp;

function add_compare(id) {
    xmlHttp = new XMLHttpRequest();
    var url = 'validate_email.php';
    url = url + '?id=' + id;
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET", url, true);
    xmlHttp.send();
}

function stateChanged() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        // var json = xmlHttp.responseText;
        // jsonObj = JSON.parse(json);
        // // 如果 data 为 true 就说明数据库没有相同邮箱, 那么这一步就没有错误, 设置 submit 为可以按
        // // 如果为 false 就说明有相同邮箱, 那么按钮应该不能按,并且有提示信息
        // if (jsonObj.data == false) {
        //     document.getElementById('emailsignup_error').innerHTML = '邮箱已存在';
        //     document.getElementById('submitsignup').setAttribute('disabled', 'disabled');
        //     emailValidate = false;
        // } else {
        //     document.getElementById('emailsignup_error').innerHTML = '';
        //     // document.getElementById('submitsignup').setAttribute('disabled', 'abled');
        //     emailValidate = true;
        //     validate_button();
        // }
        alert('success');
    }
}
/**
 * Created by sakura on 2016/4/14.
 */

var xmlHttp;
function query_model() {
    var makeId = document.getElementById('sell_make').value;
    xmlHttp = new XMLHttpRequest();
    var url = 'query_model.php';
    url = url + '?make=' + makeId;
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET", url, true);
    xmlHttp.send();
}

function stateChanged() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        var text = xmlHttp.responseText;
        document.getElementById('sell_model').innerHTML = text;
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
    }
}
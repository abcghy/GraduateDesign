<?php
/**
 * Created by PhpStorm.
 * User: sakura
 * Date: 16/5/16
 * Time: 下午8:45
 */

$evaluate_id = $_POST['evaluate_id'];

include_once ('../../front/db.php');

$a0  = $_POST['a0'];
$a1  = $_POST['a1'];
$a2  = $_POST['a2'];
$a3  = $_POST['a3'];
$a4  = $_POST['a4'];
$a5  = $_POST['a5'];
$a6  = $_POST['a6'];
$a7  = $_POST['a7'];
$a8  = $_POST['a8'];
$a9  = $_POST['a9'];
$a10 = $_POST['a10'];
$a11 = $_POST['a11'];
$a12 = $_POST['a12'];
$a13 = $_POST['a13'];
$a14 = $_POST['a14'];
$a15 = $_POST['a15'];
$a16 = $_POST['a16'];
$a17 = $_POST['a17'];
$a18 = $_POST['a18'];
$a19 = $_POST['a19'];
$a20 = $_POST['a20'];
$a21 = $_POST['a21'];
$a22 = $_POST['a22'];
$a23 = $_POST['a23'];
$a24 = $_POST['a24'];
$a25 = $_POST['a25'];
$a26 = $_POST['a26'];
$a27 = $_POST['a27'];
$a28 = $_POST['a28'];
$a29 = $_POST['a29'];
$a30 = $_POST['a30'];
$a31 = $_POST['a31'];
$a32 = $_POST['a32'];
$a33 = $_POST['a33'];
$a34 = $_POST['a34'];
$a35 = $_POST['a35'];
$a36 = $_POST['a36'];
$a37 = $_POST['a37'];
$a38 = $_POST['a38'];
$a39 = $_POST['a39'];
$a40 = $_POST['a40'];
$a41 = $_POST['a41'];
$a42 = $_POST['a42'];
$a43 = $_POST['a43'];
$a44 = $_POST['a44'];
$a45 = $_POST['a45'];
$a46 = $_POST['a46'];
$a47 = $_POST['a47'];
$a48 = $_POST['a48'];
$a49 = $_POST['a49'];
$a50 = $_POST['a50'];
$a51 = $_POST['a51'];
$a52 = $_POST['a52'];
$a53 = $_POST['a53'];
$a54 = $_POST['a54'];
$a55 = $_POST['a55'];
$a56 = $_POST['a56'];
$a57 = $_POST['a57'];
$a58 = $_POST['a58'];
$a59 = $_POST['a59'];
$a60 = $_POST['a60'];
$a61 = $_POST['a61'];
$a62 = $_POST['a62'];
$a63 = $_POST['a63'];
$a64 = $_POST['a64'];
$a65 = $_POST['a65'];
$a66 = $_POST['a66'];
$a67 = $_POST['a67'];
$a68 = $_POST['a68'];
$a69 = $_POST['a69'];
$a70 = $_POST['a70'];
$a71 = $_POST['a71'];
$a72 = $_POST['a72'];
$a73 = $_POST['a73'];
$a74 = $_POST['a74'];
$a75 = $_POST['a75'];
$a76 = $_POST['a76'];
$a77 = $_POST['a77'];
$a78 = $_POST['a78'];
$a79 = $_POST['a79'];
$a80 = $_POST['a80'];
$a81 = $_POST['a81'];
$a82 = $_POST['a82'];
$a83 = $_POST['a83'];
$a84 = $_POST['a84'];
$a85 = $_POST['a85'];
$a86 = $_POST['a86'];
$a87 = $_POST['a87'];
$a88 = $_POST['a88'];
$a89 = $_POST['a89'];
$a90 = $_POST['a90'];
$a91 = $_POST['a91'];
$a92 = $_POST['a92'];
$a93 = $_POST['a93'];
$a94 = $_POST['a94'];
$a95 = $_POST['a95'];
$a96 = $_POST['a96'];
$a97 = $_POST['a97'];
$a98 = $_POST['a98'];
$a99 = $_POST['a99'];
$a100 = $_POST['a100'];
$a101 = $_POST['a101'];
$a102 = $_POST['a102'];
$a103 = $_POST['a103'];
$a104 = $_POST['a104'];
$image = $_POST['image'];

$detail_result = $con->query('insert into detail (a0, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12, a13, a14, a15, a16, a17, a18, a19, a20, a21, a22, a23, a24, a25, a26, a27, a28, a29, a30, a31, a32, a33, a34, a35, a36, a37, a38, a39, a40, a41, a42, a43, a44, a45, a46, a47, a48, a49, a50, a51, a52, a53, a54, a55, a56, a57, a58, a59, a60, a61, a62, a63, a64, a65, a66, a67, a68, a69, a70, a71, a72, a73, a74, a75, a76, a77, a78, a79, a80, a81, a82, a83, a84, a85, a86, a87, a88, a89, a90, a91, a92, a93, a94, a95, a96, a97, a98, a99, a100, a101, a102, a103, a104) VALUES ("'.$a0.'", "'.$a1.'", "'.$a2.'", "'.$a3.'", "'.$a4.'", "'.$a5.'", "'.$a6.'", "'.$a7.'", "'.$a8.'", "'.$a9.'", "'.$a10.'", "'.$a11.'", "'.$a12.'", "'.$a13.'", "'.$a14.'", "'.$a15.'", "'.$a16.'", "'.$a17.'", "'.$a18.'", "'.$a19.'", "'.$a20.'", "'.$a21.'", "'.$a22.'", "'.$a23.'", "'.$a24.'", "'.$a25.'", "'.$a26.'", "'.$a27.'", "'.$a28.'", "'.$a29.'", "'.$a30.'", "'.$a31.'", "'.$a32.'", "'.$a33.'", "'.$a34.'", "'.$a35.'", "'.$a36.'", "'.$a37.'", "'.$a38.'", "'.$a39.'", "'.$a40.'", "'.$a41.'", "'.$a42.'", "'.$a43.'", "'.$a44.'", "'.$a45.'", "'.$a46.'", "'.$a47.'", "'.$a48.'", "'.$a49.'", "'.$a50.'", "'.$a51.'", "'.$a52.'", "'.$a53.'", "'.$a54.'", "'.$a55.'", "'.$a56.'", "'.$a57.'", "'.$a58.'", "'.$a59.'", "'.$a60.'", "'.$a61.'", "'.$a62.'", "'.$a63.'", "'.$a64.'", "'.$a65.'", "'.$a66.'", "'.$a67.'", "'.$a68.'", "'.$a69.'", "'.$a70.'", "'.$a71.'", "'.$a72.'", "'.$a73.'", "'.$a74.'", "'.$a75.'", "'.$a76.'", "'.$a77.'", "'.$a78.'", "'.$a79.'", "'.$a80.'", "'.$a81.'", "'.$a82.'", "'.$a83.'", "'.$a84.'", "'.$a85.'", "'.$a86.'", "'.$a87.'", "'.$a88.'", "'.$a89.'", "'.$a90.'", "'.$a91.'", "'.$a92.'", "'.$a93.'", "'.$a94.'", "'.$a95.'", "'.$a96.'", "'.$a97.'", "'.$a98.'", "'.$a99.'", "'.$a100.'", "'.$a101.'", "'.$a102.'", "'.$a103.'", "'.$a104.'");');

$detail_id_result = $con->query('select * from detail order by id desc;');
$detail_id_row = $detail_id_result->fetch_array();
$detail_id = $detail_id_row['id'];

$evaluate_result = $con->query('select * from evaluate where id = '.$evaluate_id);
$evaluate_row = $evaluate_result->fetch_array();

$model = $evaluate_row['model'];
$year = $evaluate_row['year'];
$mile = $evaluate_row['mile'];
$evaluate_price = $evaluate_row['evaluate_price'];
$fixed = $evaluate_row['fixed'];
$user = $evaluate_row['user'];

$car_insert_result = $con->query('insert into car (model, type, price, year, mile, fixed, title, description, user, detail) VALUES ('.$model.',1,'.$evaluate_price.','.$year.','.$mile.','.$fixed.',"","",'.$user.','.$detail_id.');');
$car_id_result = $con->query('select * from car order by id desc;');
$car_id_row = $car_id_result->fetch_array();
$car_id = $car_id_row['id'];

$image_insert_result = $con->query('insert into image (src, car) values ("'.$image.'", '.$car_id.');');
//echo 'insert into image (src, car) values ("'.$image.'", '.$car_id.');';
//http://pic17.nipic.com/20111118/8868045_214622414000_2.jpg

$evaluate_delete = $con->query('delete from evaluate where id = '.$evaluate_id.';');

//header('Location: evaluate_car.php');

$arr = range(1, 8);
shuffle($arr);

include_once ("../wait/wait".$arr[0].".html");
?>

<script>
    setTimeout(function () {
        location.href="evaluate_car.php";
    }, 2000);
</script>

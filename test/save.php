<?php
header("Content-Disposition: attachment; filename=sample.pdf");
if(!empty($_POST['data']) && isset($_POST['namn']) &&isset($_POST['besiktare'])&& isset($_POST['adress']))
{

    $N = $_POST['namn'];
    $B = $_POST['besiktare'];
    $A = $_POST['adress'];

    $data = base64_decode($_POST['data']);
    echo ($N);
    // print_r($data);
    file_put_contents("{$N}.pdf", $data);

}
else {
    echo "No Data Sent";
    echo "--------------";
    echo $_POST['data'];
    echo "--------------";
}``
?>
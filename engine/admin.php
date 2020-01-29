<script src="../public/packages/jquery-3.4.1.js"></script>
<script>
    function f(id){
        "use strict";
        let id_file_name = "file_name_"+id;
        let file_name = document.getElementById(id_file_name).value;
        let query = "id="+id+"&file_name="+file_name;
        alert(file_name);

        $.ajax({
            type: "POST",
            url: "server.php",
            data: query,
            success: function(answer){
                alert(answer);
            }
        });
    }
</script>
<?php
include_once '../config/config.php';
include_once 'ChromePhp.php';

$sql = "SELECT * FROM images";
$res = mysqli_query($connect, $sql);
$form = "<table width='400' style='margin: 0 auto;text-align:center;' border='1'>";

while($data = mysqli_fetch_assoc($res)){
    $form .= "<tr>
                <td>" . $data['id']. "</td>
                <td>
                    <input id='file_name_" .$data['id']. "' type='text' value=" . $data['file_name'] . "></td>";
    $form .=   "<td><input onclick='f(".$data['id'].")' type='button' value='Save'</td></tr>";
}
$form .= "</table>";

echo $form;
?>
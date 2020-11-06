<form method="post">
    <input type="text" name="nhapso" size="25"  placeholder="nhap so vao day" />
    <input type="submit" value="check"/>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nhapso = $_POST["nhapso"];
    if ($nhapso >= 100000 && $nhapso < 500000) {
        echo "so tien sau khi chiet khau la:". ($nhapso-($nhapso / 100));
    } else if ($nhapso >= 500000 && $nhapso < 3000000) {
        echo "so tien sau khi chiet khau la:".($nhapso-($nhapso * 2) / 100);
    } else if ($nhapso >= 3000000) {
        echo "so tien sau khi chiet khau la:".($nhapso-($nhapso * 5) / 100);
    }
}

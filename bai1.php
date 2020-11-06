<form method="post">
    <input type="text" name="nhap"><br><br>
    <input type="text" name="nhap1"><br><br>
    <input type="submit" name="cong" value="+">
    <input type="submit" name="tru" value="-">
    <input type="submit" name="nhan" value="*">
    <input type="submit" name="chia" value="/"><br><br>
    Result:
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nhap = $_POST["nhap"];
        $nhap1 = $_POST["nhap1"];
        $cong = $_POST["cong"];
        $tru = $_POST["tru"];
        $nhan = $_POST["nhan"];
        $chia = $_POST["chia"];
        echo calculate($nhap,$nhap1,$cong,$tru,$nhan,$chia);
    }
    function calculate($nhap,$nhap1,$cong,$tru,$nhan,$chia) {
        if ($cong == "+") {
            $result = $nhap + $nhap1;
        }
        if ($tru == "-"){
            $result = $nhap - $nhap1;
        }
        if ($nhan == "*") {
            $result = $nhap * $nhap1;
        }
        if ($chia == "/") {
            $result = $nhap / $nhap1;
        }
        return $result;
    }
    ?>
</form>


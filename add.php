<?php
//require_once ("connMysql.php");
//$sql = "SELECT * FROM `student`";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>學生管理系統</title>
</head>
<body>
<h1 align="center">學生管理系統 - 新增資料</h1>

<?php
// if ($result = mysqli_query($conn, $sql)) {
// 	$total_records = mysqli_num_rows($result);
//print $total_records;
?>
	<p align="center"><a herf="data.php">回主畫面</a></p>
	<form action="" method="get">
	<table border="1" align="center">
	    <tr>
	        <th>欄位</th>
	        <th>資料</th>
	    </tr>
	    <tr>
	        <td>姓名</td>
	        <td><input type="" name="" size="50"></td>
	    </tr>
	    <tr>
	        <td>性別</td>
	        <td><input  type="radio" name="sex" value="male">男 <input  type="radio" name="sex" value="female">女</td>
	    </tr>
	    <tr>
	        <td>生日</td>
	        <td><input type="" name="" size="50"></td>
	    </tr>
	    <tr>
	        <td>電子郵件</td>
	        <td><input type="" name="" size="50"></td>
	    </tr>
	    <tr>
	        <td>電話</td>
	        <td><input type="" name="" size="50"></td>
	    </tr>
	    <tr>
	        <td>住址</td>
	        <td><input type="" name="" size="100"></td>
	    </tr>
	    <tr>
	        <td colspan="2" align="center"><button type="submit">新增資料</button> <button type="reset">重新填寫</button></td>

	    </tr>


	</table>
	</form>

	<?php
	mysqli_close($conn);
}
?>

</body>
</html>
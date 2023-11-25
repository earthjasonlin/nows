<?php
error_reporting(0);
ob_start();
session_start();
require("data.php");
require("track.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" id="page_favionc">
	<link href="./css/min.css" rel="stylesheet">

</head>

<body>
	<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999">
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				<div class="col" style="display: flex; align-items: center;">
					<img src="./img/logo.png">
				</div>
				<div class="col" style="display: flex; align-items: center; justify-content: flex-end;">
					<div class="float-right" style="margin: 10px;">
						<a class="btn btn-primary btn-filled btn-xs" href="https://git.loliquq.cn/earthjasonlin/nows/issues/new?template=.github%2fISSUE_TEMPLATE%2fnew.yml">提交句子</a>
					</div>
					<div class="float-right" style="margin: 10px;">
						<a class="btn btn-primary btn-filled btn-xs" href="https://git.loliquq.cn/earthjasonlin/nows/wiki">API文档</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main-wrapper" style="position: relative; top: -6vh;">
		<div class="container main-sentence justify-content-center text-center">
			<?php
			//查询随机一条记录
			$sql = "SELECT * FROM soul ORDER BY RAND() LIMIT 1";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<div id="sentence" style="font-size: 2rem;">
					<?php echo $row["title"] ?>
				</div>
				<?php
				if ($row["author"] != NULL) {
				?>
					<div id="author" style="font-size: 1.5rem;">
						——<?php echo $row["author"] ?>
					</div>
				<?php
				}
				if ($row["from"] != NULL) {
				?>
					<div id="from" style="font-size: 1.5rem; color: dimgray;">
						<i>（<?php echo $row["from"] ?>）</i>
					</div>
			<?php
				}
			}
			?>
		</div>
	</div>

	<div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="/">再来一句</a></span>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
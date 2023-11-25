<?php
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
				<div class="col">
					<img src="./img/logo.png">
				</div>
				<div class="col">
					<div class="float-right" style="padding-top: 0px;">
						<a class="btn btn-primary btn-filled btn-xs" href="https://git.loliquq.cn/earthjasonlin/nows">开源</a>
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
						-<?php echo $row["author"] ?>
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
					<p class="lead text">截屏分享朋友</p>
					<span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="/">再来一句</a></span>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
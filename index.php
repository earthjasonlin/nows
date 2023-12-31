﻿<?php
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

	<title>mi鸡汤</title>
	<meta name="description" content="mihomo游戏鸡汤">
	<meta name="keywords" content="米哈游, mihoyo, 原神, 崩铁, 崩坏：星穹铁道, 鸡汤">
	<link rel="icon" href="/favicon.ico" id="page_favionc">
	<link href="./css/min.css" rel="stylesheet">

</head>

<body>
	<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999">
		<div class="container">
			<div class="row" style="margin-top: 30px;">
				<div class="col" style="display: flex; align-items: center;">
					<a href="/"><img src="./img/logo.png"></a>
				</div>
				<div class="col" style="display: flex; align-items: center; justify-content: flex-end;">
					<div class="float-right" style="margin: 10px;">
						<a class="btn btn-primary btn-filled btn-xs" href="https://git.loliquq.cn/earthjasonlin/nows/issues/new/choose" target="_blank">意见反馈</a>
					</div>
					<div class="float-right" style="margin: 10px;">
						<a class="btn btn-primary btn-filled btn-xs" href="https://git.loliquq.cn/earthjasonlin/nows/wiki" target="_blank">API文档</a>
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
			$id;
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row["id"];
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
				<p class="lead text">请点击「意见反馈」帮助我们做得更好！</p>
					<span class="btn btn-primary btn-filled btn-xs"><a class="btn btn-primary btn-filled btn-xs" href="/">再来一句</a></span>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<span style="color:#fff;"><?php echo "id.", $id, " ver.", substr(shell_exec('git rev-parse HEAD'), 0, 10); ?></span>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
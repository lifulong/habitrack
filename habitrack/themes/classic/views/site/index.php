<?php
/*
 *
 *params:habitracks	an hibitrack array
 *
 */
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script type="text/javascript" src="../js/add_habitrack_info.js"></script>
<script type="text/javascript">
	function get_habitrack_info()
	{
		alert("Not implement.");
	}
</script>

<div id="welcome">

	<p id="p_welcome_title">欢迎使用<i><?php echo CHtml::encode(Yii::app()->name); ?></i></p>
	<p id="p_welcome_child_title">您的习惯追踪工具</p>

</div>

<div id="view_habitrack">
	<br>
	<div style="font-size:24px;color:#ff0000;">此处展示所有追踪的习惯</div>
	<br>
	<?php 
		//echo json_encode($habitracks);
		foreach($habitracks as $habitrack)
		{
			echo "<div id='habitrack_name'>".$habitrack["name"]."</div>";
			$track_records=$habitrack["records"];
			echo "<div class='habitrack_record'>";
			foreach($track_records as $track_record)
			{
				echo "<li class='li_habitrack_record'>".$track_record["start_time"]." - ".$track_record["end_time"]."</li>";
			}
			echo "</div>";
		}
	?>
</div>

<div id="add_habitrack">
	<br>
	<div style="font-size:24px;color:#ff0000;">添加新的追踪的习惯</div>
	<br>
	<input id="bt_add_habitrack" type="button" name="add_habitrack" value="新的追踪" onclick="get_habitrack_info()">
	</input>
</div>

<p></p>
<br>
<div id="test"> 
	<div style="font-size:24px;color:#ff0000;">开发测试</div>
	baseUrl: <?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>
</div>


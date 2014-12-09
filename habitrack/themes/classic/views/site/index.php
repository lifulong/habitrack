<?php
/*
 *
 *params:habitracks	an hibitrack array
 *
 */
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/add_habitrack_info.js">
</script>

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
</div>
	<br>
	<div style="font-size:24px;color:#ff0000;">添加新的追踪的习惯</div>
	<br>
 
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		添加追踪
	</button>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
			    <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
			         ...
		        </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

<p></p>
<br>
<div id="test"> 
	<div style="font-size:24px;color:#ff0000;">开发测试</div>
	baseUrl: <?php echo CHtml::encode(Yii::app()->theme->baseUrl); ?>
</div>


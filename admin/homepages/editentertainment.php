<?php
	require_once '../../php/config.php';
	if (isset($_REQUEST['id'])) {
			
		$id = intval($_REQUEST['id']);
		$query = "SELECT * FROM entertainment WHERE id=:id";
		$stmt = $DBcon->prepare( $query );
		$stmt->execute(array(':id'=>$id));
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
			
		?>
			
		<div class="table-responsive" style="">
			<div class="dropper-header" style="text-align: center; ">
            	<b>Click on the image to change it</b>
			</div>
		
			<div class="carol">
				<input type="hidden" name="myid" value="<?php echo $id ?>">
				<div ><textarea class="header" name='editheader'><?php echo $header ?></textarea></div>
				<div><textarea class="msg" name='editbody' ><?php echo $body ?></textarea></div>
				<div id="edit-image" style='cursor:pointer' ><img class="rowimage"  src="<?php echo $image ?>"  id='old-image'><img id='prev-new' class='rowimage' style='display:none'></div>
				<input type="file" accept="image/*" name="editimage" id="select-image" style='display:none'>
			</div>
			<script>
			var id = document.getElementById.bind(document);
			id('select-image').addEventListener('change', function(event){
            var reader = new FileReader();
            reader.onload = function() {
            var output = id('prev-new');
            output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);

        })
			</script>
			<script>
			$(document).ready(function(){
				$('#edit-image').click(function(){
					$('#select-image').click();
					$('#select-image').on('change', function(){
						$('#old-image').hide()
						$('#prev-new').show()
					})
				});
			})
			</script>
		</div>
			
		<?php	
		
		
	}
	$DBcon = null;
	?>
	
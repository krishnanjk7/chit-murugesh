<?php include "header.php"; ?>
<div class="container">
	<h3>
		சீட்டு தொகைககள் 
		<a style="float:right" href="<?php echo base_url()?>index.php/Chit/chitamount_add">
			<button class="btn btn-success">புதிய தொகை </button>
		</a>
	</h3>
	<hr/>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>தொகை </th>
				<th>குறிப்பு </th>
				<!--<th>Action </th>-->
			</tr>
		</thead>
		<tbody>
			<?php foreach($chits as $row) { ?>
			<tr>
				<td><?php echo $row["amount"]?></td>
				<td><?php echo $row["description"]?></td>
				<!--<td>
					<a href="<?php echo base_url()?>index.php/Customer/customer_update?id=<?php echo $row["id"]?>">
						<button class="btn btn-primary">திருத்து </button>
					</a>
				</td>-->
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>


	
	<script>
		$(".table").DataTable({
			responsive:true
			/* dom: 'Bfrtip',
			buttons: [
				'print', 'excel', 'pdf'
			] */
		});
	</script>
<?php include "footer.php"; ?>
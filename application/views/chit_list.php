<?php include "header.php"; ?>
<div class="container">
	<h3>
		சீட்டுகள் 
		<a style="float:right" href="<?php echo base_url()?>index.php/Chit/chit_add">
			<button class="btn btn-success">புதிய சீட்டு </button>
		</a>
	</h3>
	<hr/>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>தொகை </th>
				<th>ஆரம்பம்  </th>
				<th>முடிவு </th>
				<th>மொத்த பயனாளர்கள் </th>
				<th>மொத்த சீட்டுகள் </th>
				<th>Commission </th>
				<th>குறிப்பு </th>
				<!--<th>Action </th>-->
			</tr>
		</thead>
		<tbody>
			<?php foreach($chits as $row) { ?>
			<tr>
				<td><?php echo $row["amount"]?></td>
				<td><?php echo $row["chit_start_date"]?></td>
				<td><?php echo $row["chit_end_date"]?></td>
				<td><?php echo $row["customer_count"]?></td>
				<td><?php echo $row["chit_count"]?></td>
				<td><?php echo intval($row["commission"])?>%</td>
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
<?php include "header.php"; ?>
<div class="container">
	<h3>
		பயனர்கள்  
		<a style="float:right" href="<?php echo base_url()?>index.php/Customer/customer_add">
			<button class="btn btn-success">புதிய பயனர்</button>
		</a>
	</h3>
	<hr/>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>பெயர் </th>
				<th>த .பெயர் </th>
				<th>கைபேசி </th>
				<th>தொலைபேசி</th>
				<th>விலாசம் </th>
				<th>Action </th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($customers as $row) { ?>
			<tr>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["father_name"]?></td>
				<td><?php echo $row["mobile"]?></td>
				<td><?php echo $row["phone"]?></td>
				<td><?php echo $row["address"]?></td>
				<td>
					<a href="<?php echo base_url()?>index.php/Customer/customer_update?id=<?php echo $row["id"]?>">
						<button class="btn btn-primary">திருத்து </button>
					</a>
				</td>
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
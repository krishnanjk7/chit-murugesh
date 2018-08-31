<?php include "header.php"; ?>
<div class="container">
	<h3>புதிய தொகை </h3>
	<hr/>
	<div class="col-xl-7 col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center justify-content-center align-self-center" style="margin: auto;">
		<form class="" id="form-add" role="form" action="<?php echo base_url()."index.php/Chit/chitamount_add"; ?>" method="POST">
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">தொகை </label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="number" name="amount" class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">குறிப்பு</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<textarea type="text" name="description" class="form-control"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<button class="btn btn-success" type="submit" name="submit" id="submit">சேமி</button>
					<a href="<?php echo base_url()?>index.php/Chit/chitamount_list">
						<button class="btn btn-danger" type="button" >பின் செல் </button>
					</a>
				</div>
			</div>
		</form>
	</div>
</div>


	
	<script>
		$('#submit').on('click',function(){
			$('form').validate({
				rules:{
					amount:{
						required:true,
						number:true
					}
				},
				messages:{
					amount:{
						required:'தொகையை உள்ளிடவும் ',
						number:'தவறான  தொகை'
					}
				},
				submitHandler:function(form){
					form.submit();
				}
			});
		});
	</script>
<?php include "footer.php"; ?>
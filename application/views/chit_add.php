<?php include "header.php"; ?>
<div class="container">
	<h3>புதிய சீட்டு</h3>
	<hr/>
	<div class="col-xl-7 col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center justify-content-center align-self-center" style="margin: auto;">
		<form class="" id="form-add" role="form" action="<?php echo base_url()."index.php/Chit/chit_add"; ?>" method="POST">
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">மொத்த சீட்டு தொகை</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<select class="form-control" name="chit_amount_id" id="chit_amount_id">
						<option>-Select Amount-</option>
						<?php foreach($chit_amounts as $row){ ?>
							<option value="<?php echo $row['id'];?>"><?php echo $row['amount'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left"> சீட்டு தொகை</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="number" name="amount_per_chit" class="form-control" id="amount_per_chit"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">மொத்த பயனாளர்கள்</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="number" name="customer_count" class="form-control" id="customer_count"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">மொத்த சீட்டுகள்</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="number" name="chit_count" class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">ஆரம்பம்</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="date" name="chit_start_date" class="form-control"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">முடிவு</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="date" name="chit_end_date" class="form-control"/>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">பயனாளர்கள்</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<select class="form-control" name="customer_id[]" multiple>
						<?php foreach($customers as $row){ ?>
							<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">Type</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<select class="form-control" name="type" id="type">
						<option>-Select Type-</option>
						<option value="1">Days</option>
						<option value="2">Monthly</option>
					</select>
				</div>
			</div>
			
			<div class="form-group row" style="display:none" id="day_show">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">Days Count</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="number" name="day_count" class="form-control"/>
				</div>
			</div>
			
			<div class="form-group row"style="display:none" id="month_show">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">Per Monthly</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<select class="form-control" name="month_count" >
						<option>-Select Per Month-</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 control-label text-left">Commission</label>
				<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<input type="text" name="commission" class="form-control"/>
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
					<a href="<?php echo base_url()?>index.php/Chit/chit_list">
						<button class="btn btn-danger" type="button" >பின் செல் </button>
					</a>
				</div>
			</div>
		</form>
	</div>
</div>


	
	<script>
	
		$('#type').on('change',function(){
			var result=$(this).val();
			if(result==1){
				$('#day_show').show();
				$('#month_show').hide();
			}else if(result==2){
				$('#day_show').hide();
				$('#month_show').show();
			}else{
				$('#day_show').hide();
				$('#month_show').hide();
			}
			
		});
	
		$('#submit').on('click',function(){
			$('form').validate({
				rules:{
					chit_amount_id:{
						required:true
					},
					customer_count:{
						required:true
					},
					chit_count:{
						required:true
					}
				},
				messages:{
					chit_amount_id:{
						required:'பெயரை உள்ளிடவும் '
					},
					customer_count:{
						required:'கைபேசி  எண்ணை  உள்ளிடவும் ',
					},
					chit_count:{
						required:'கைபேசி  எண்ணை  உள்ளிடவும் ',
					}
				},
				submitHandler:function(form){
					form.submit();
				}
			});
		});
	</script>
<?php include "footer.php"; ?>
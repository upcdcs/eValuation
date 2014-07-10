<div class="alert alert-info" role="alert">You have not set an evaluation period. Fill up the form below to set up one.</div>

<?php echo form_open('',array('class'=>'form-horizontal','role'=>'form'))?>
	<div class="panel panel-default" id="set-eval-period-form">
		<div class="panel-heading">
	    <h3 class="panel-title">Set Evaluation Period</h3>
	  </div>
		<div class="panel-body">
			<div class="form-group">
				<label for="year" class="col-sm-4 control-label">Academic Year</label>
				<div class="col-sm-8">
					<select class="form-control" id="year" name="year">
						<option value="2014-2015" selected="selected">2014-2015</option>
						<option value="2015-2016">2015-2016</option>
						<option value="2016-2017">2016-2017</option>
						<option value="2017-2018">2017-2018</option>
						<option value="2018-2019">2018-2019</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="semester" class="col-sm-4 control-label">Semester</label>
				<div class="col-sm-8">
					<select class="form-control" id="semester" name="semester">
						<option value="1" selected="selected">1st</option>
						<option value="2">2nd</option>
						<option value="3">Summer</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="start_date" class="col-sm-4 control-label">Start Date</label>
				<div class="col-sm-8">
					<input id="start_date" name="start_date" type="date" class="form-control" placeholder="MM/DD/YYYY">
				</div>
			</div>
			<div class="form-group">
				<label for="end_date" class="col-sm-4 control-label">End Date</label>
				<div class="col-sm-8">
					<input id="end_date" name="end_date" type="date" class="form-control" placeholder="MM/DD/YYYY">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-primary">Set Evaluation Period</button>
				</div>
			</div>
		</div>
	</div>
</form>
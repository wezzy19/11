<!-- AJAX  !-->
<form method="post" action="<?php echo base_url('index.php/dashboard/update-officials/'.$officials_data->id); ?>">
<div class="form-row">
<div class="form-group col">
<label for="position">Position:</label>
<select name="position" id="position" class="form-control" required>
<option value="Kagawad">Kagawad</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
<option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
</select>
<span><?= form_error('position') ?></span>
</div>
<div class="form-group col">
<label for="name">Name:</label>
<input type="text" name="name" value="<?php echo $officials_data->name; ?>" id="name" class="form-control" required />
<span><?= form_error('name') ?></span>
</div>
<div class="form-group col">
<label for="contact">Contact:</label>
<input type="text" name="contact" value="<?php echo $officials_data->contact; ?>" id="contact" class="form-control" required />
<span><?= form_error('contact') ?></span>
</div>
</div>
<div class="form-group col">
<label for="address">Address:</label>
<input type="text" name="address" value="<?php echo $officials_data->address; ?>" id="address" class="form-control" required />
<span><?= form_error('address') ?></span>
</div>
<div class="form-group col">
<label for="start_term">Start of Term:</label>
<input type="date" name="start_term" value="<?php echo $officials_data->start_term; ?>" id="start_term" class="form-control" required />
<span><?= form_error('start_term') ?></span>
</div>
<div class="form-group col">
<label for="end_term">End of Term:</label>
<input type="date" name="end_term" value="<?php echo $officials_data->end_term; ?>" id="end_term" class="form-control" required />
<span><?= form_error('end_term') ?></span>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
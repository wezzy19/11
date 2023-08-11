<div id="content">
   <div class="container">
      <br>
      <br>
      <br>
      <center>
      <h1 class="h3 mb-2 text-gray-800">MANAGE BLOTTER</h1>
</center>
      <br>
      <br>

            <div class="form-group col">
      <form method="POST"  action="<?php echo base_url('index.php/dashboard/update-blotter/'.$blotter_data->id); ?>">
         <div class="form-row">
            <div class="form-group col">
               <label for="complainant">Name of Complainant</label>
               <input type="text" name="complainant" value="<?php echo $blotter_data->complainant; ?>"  id="complainant" class="form-control" required />
               <span><?= form_error('complainant') ?></span>
            </div>
            <div class="form-group col">
               <label for="age1">Age</label>
               <input type="text" name="age1" value="<?php echo $blotter_data->age1;?>" id="age1"  class="form-control" required />
               <span><?= form_error('age1') ?></span>
            </div>
            <div class="form-group col">
               <label for="address">Address</label>
               <input type="text" name="address"  value="<?php echo $blotter_data->address;?>"  id="address" class="form-control" required />
               <span><?= form_error('address') ?></span>
            </div>
            <div class="form-group col">
               <label for="number">Contact Number</label>
               <input type="text" name="number"  value="<?php echo $blotter_data->number;?>" id="number" class="form-control" />
               <span><?= form_error('number') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col">
               <label for="complainee">Name of Complainee</label>
               <input type="text" name="complainee" value="<?php echo $blotter_data->complainee;?>" id="complainee"  class="form-control" required />
               <span><?= form_error('complainee') ?></span>
            </div>
            <div class="form-group col">
               <label for="age2">Age</label>
               <input type="text" name="age2" value="<?php echo $blotter_data->age2?>"  id="age2"  class="form-control" required />
               <span><?= form_error('age2') ?></span>
            </div>
            <div class="form-group col">
               <label for="address_complainee">Address</label>
               <input type="text" name="add_complainee" value="<?php echo $blotter_data->add_complainee;?>"  id="add_complainee"  class="form-control" required />
               <span><?= form_error('add_complainee') ?></span>
            </div>
            <div class="form-group col">
               <label for="num_complainee">Contact Number</label>
               <input type="text" name="num_complainee"  value="<?php echo $blotter_data->num_complainee;?>" id="num_complainee" class="form-control" />
               <span><?= form_error('num_complainee') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col">
               <label for="complaint">Complaint</label>
               <input type="text" name="complaint" value="<?php echo $blotter_data->complaint;?>"  id="complaint"  class="form-control" required />
               <span><?= form_error('complaint') ?></span>
            </div>
            <div class="form-group col">
               <label for="action">Action</label>
               <select name="action" value="<?php echo $blotter_data->action;?>"  id="action"  class="form-control" required>
                  <option value="first">1st Option</option>
                  <option value="second">2nd Option</option>
               </select>
               <span><?= form_error('action') ?></span>
            </div>
            <div class="form-group col">
               <label for="status">Status</label>
               <select name="status" value="<?php echo $blotter_data->status;?>" id="status" class="form-control" required>
                  <option value="solved">Solved</option>
                  <option value="unsolved">Unsolved</option>
               </select>
               <span><?= form_error('status') ?></span>
            </div>
            <div class="form-group col">
               <label for="incidence">Incidence</label>
               <input type="text" name="incidence" value="<?php echo $blotter_data->incidence;?>" id="incidence" class="form-control" required />
               <span><?= form_error('incidence') ?></span>
            </div>
            <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
  


<div id="content">
   <div class="container">
      <br>
      <br>
      <br>
      <div class="card shadow">
                <div class="card-header py-3">
                    <div class="card-header">
            <center>
               <h1 class="h3 mb-2 text-gray-800">MANAGE BLOTTER</h1>
            </center>
         </div>

         <style>
   /* Custom CSS to make the font black */
   .black-font {
      color: black;
   }
</style>


 
         <div class="card-body">
            <form method="POST">
               <div class="form-row">
                  <!-- Left Column - Complainant Information -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="complainant" class="black-font" >Name of Complainant</label>
                        <input type="text" name="complainant" id="complainant" class="form-control" required />
                        <span class="text-danger"><?= form_error('complainant') ?></span>
                     </div>
                     <div class="form-group">
                        <label for="age1" class="black-font">Age</label>
                        <input type="text" name="age1" id="age1" class="form-control" required />
                        <span class="text-danger"><?= form_error('age1') ?></span>
                     </div>
                     <div class="form-group">
                        <label for="address" class="black-font">Address</label>
                        <input type="text" name="address" id="address" class="form-control" required />
                        <span class="text-danger"><?= form_error('address') ?></span>
                     </div>
                     <div class="form-group">
                        <label for="number" class="black-font">Contact Number</label>
                        <input type="text" name="number" id="number" class="form-control" />
                        <span class="text-danger"><?= form_error('number') ?></span>
                     </div>
                  </div>
                  <!-- Right Column - Complainee Information -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="complainee" class="black-font">Name of Complainee</label>
                        <input type="text" name="complainee" id="complainee" class="form-control" required />
                        <span class="text-danger"><?= form_error('complainee') ?></span>
                     </div>
                     <div class="form-group">
                        <label for="age2" class="black-font">Age</label>
                        <input type="text" name="age2" id="age2" class="form-control" required />
                        <span class="text-danger"><?= form_error('age2') ?></span>
                     </div>
                     <div class="form-group">
                        <label for="address_complainee" class="black-font">Address</label>
                        <input type="text" name="add_complainee" id="add_complainee" class="form-control" required />
                        <span class="text-danger"><?= form_error('add_complainee') ?></span>
                     </div>
                     <div class="form-group">
                        <label for="num_complainee" class="black-font">Contact Number</label>
                        <input type="text" name="num_complainee" id="num_complainee" class="form-control" />
                        <span class="text-danger"><?= form_error('num_complainee') ?></span>
                     </div>
                  </div>
               </div>
               <br>
               
               <div class="form-row">
                  <!-- Bottom Row - Common Information -->
                  <div class="form-group col-md-3">
                     <label for="complaint" class="black-font">Complaint</label>
                     <input type="text" name="complaint" id="complaint" class="form-control" required />
                     <span class="text-danger"><?= form_error('complaint') ?></span>
                  </div>
                  <div class="form-group col-md-3">
                     <label for="action" class="black-font">Action</label>
                     <select name="action" id="action" class="form-control" required>
                        <option value="first">1st Option</option>
                        <option value="second">2nd Option</option>
                     </select>
                     <span class="text-danger"><?= form_error('action') ?></span>
                  </div>
                  <div class="form-group col-md-3">
                     <label for="status" class="black-font">Status</label>
                     <select name="status" id="status" class="form-control" required>
                        <option value="solved">Solved</option>
                        <option value="unsolved">Unsolved</option>
                     </select>
                     <span class="text-danger"><?= form_error('status') ?></span>
                  </div>
                  <div class="form-group col-md-3">
                     <label for="incidence" class="black-font">Incidence</label>
                     <input type="text" name="incidence" id="incidence" class="form-control" required />
                     <span class="text-danger"><?= form_error('incidence') ?></span>
                  </div>
               </div>
               <br>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <button class="btn btn-primary">Add Blotter</button>
                    
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<br>
                     <br>


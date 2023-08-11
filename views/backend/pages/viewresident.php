<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-flex justify-content-between align-items-center">
    <h1 class="h3 mb-2 text-gray-800">Resident</h1>
    <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-resident') ?>"><i class="fa fa-plus"></i> | Add Resident</a>
</div>
<br>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
   <div class="card-header py-3" style="display: flex; justify-content: space-between;">
        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 25px;">List</h6>
        <div class="input-group" style="max-width: 200px; position: relative;">
            <input type="text" class="form-control" placeholder="Search..." style="width: 100%; max-width: 200px;">
            <span class="input-group-addon" style="position: absolute; right: 10px; top: 0; bottom: 0; display: flex; align-items: center; pointer-events: none;">
                <i class="fa fa-search" style="margin-right: 5px;"></i> <!-- Add your search icon here, Font Awesome icon used as an example -->
            </span>
        </div>
    </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" style="border-collapse: collapse; width: 100%; table-layout: fixed;">
               <thead style="background-color: #f2f2f2;">
                  <tr>
                    <!-- <th scope="col" style="width: 30px; padding: 10px; text-align: center;">#</th>-->
                     <th scope="col" style="width: 130px; text-align: center; padding: 10px;">Photo</th>
                     <th scope="col" style="width: 300px; text-align: center; padding: 10px;">Full Name</th>
                     <th scope="col" style="width: 130px; text-align: center; padding: 10px;">Sex</th>
                     <th scope="col" style=" text-align: center; padding: 10px;">Purok</th>
                     <th scope="col" style=" text-align: center; padding: 10px;">Street</th>
                     <!--<th scope="col" style="width: 100px; text-align: center; padding: 10px;">Birth Date</th>
                     <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Birth Place</th>
                     <th scope="col" style="width: 100px; text-align: center; padding: 10px;">Nationality</th>
                     <th scope="col" style="width: 100px; text-align: center; padding: 10px;">Civil Status</th>
                     <th scope="col" style="width: 100px; text-align: center; padding: 10px;">Religion</th>
                     <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Total Household Members</th>
                     <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Land Ownership Status</th>
                     <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Household Ownership Status</th>
                     <th scope="col" style="width: 10px; text-align: center; padding: 10px;">Blood Type</th>
                     <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Differently-Abled</th>-->
                     <th scope="col" style="text-align: center; padding: 10px;">Contact</th>
                    <!-- <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Occupation</th>
                     <th scope="col" style="width: 150px; text-align: center; padding: 10px;">Monthly Income</th>
                     <th scope="col" style="width: 100px; text-align: center; padding: 10px;">Educational Attainment</th>
                     <th scope="col" style="width: 100px; text-align: center; padding: 10px;">Lightning Facilities</th>-->
                     <!-- Add styles for other columns as needed -->
                     <th scope="col" style=" text-align: center; padding: 10px;">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <!-- Table body content -->
                  <?php foreach($resident_list as $resident):?>
                  <tr style="width: auto; height: auto;">
              <!--    <th style=" auto; text-align: center; white-space: nowrap;" scope="row"><?= $resident->resident_id ?></th>-->
                  <td style=" auto; text-align: center; "><img src="<?php echo base_url($resident->image); ?>" height="50 px" width="50px" style="border-radius: 50px;" alt="Resident Image"></td>
                 <td style=" auto; text-align: center; "> <?= $resident->first_name ?> <?= $resident->middle_name ?> <?= $resident->last_name ?> <?= $resident->extname ?></td>
                 <td style=" auto; text-align: center; "><?= $resident->sex ?></td>
                 <td style=" auto; text-align: center; "><?= $resident->purok ?></td>
                 <td style=" auto; text-align: center; "><?= $resident->streetname ?></td>
                 <!-- <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->purok ?>, <?= $resident->streetname ?>, <?= $resident->barangay ?></td>-->
               <!-- <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->birth_date ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->birth_place?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->nationality ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->civil_status ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->religion ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->household_members ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->land_ownership ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->ownership_status ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->blood_type ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->disability ?></td>-->
                <td style=" auto; text-align: center;"><?= $resident->contact ?></td>
              <!--  <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->occupation ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->monthly_income ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->education ?></td>
                <td style=" auto; text-align: center; white-space: nowrap;"><?= $resident->lightning_facilities ?></td>-->
                     <td style="padding: 10px; text-align: center;">
                     <button style=" auto; text-align: center;" class="btn btn-primary edit-resident-btn" data-resident="<?= $resident->resident_id ?>" style="border-radius: 10px; background-color: #ffff00; color: #fff; padding: 5px 10px; text-decoration: none; "><i class="fas fa-edit"></i></button>
                  <!-- <a class='btn btn-warning btn-sm' href="<?php echo base_url('index.php/dashboard/update-resident/'.$resident->resident_id); ?>">Edit</a> -->
                        <a style=" auto; text-align: center;" class="btn btn-danger delete-resident-btn" href="<?= base_url('index.php/dashboard/delete-resident/'.$resident->resident_id); ?>" style="border-radius: 10px; background-color: #d9534f; color: #fff; padding: 5px 10px; text-decoration: none; margin-right: 20px;"><i class="fas fa-trash"></i></a>
                        <button type="button" class="btn btn-success"> <i class="fas fa-eye"></i></button>
                     </td>
                     <?php endforeach;?>
                  </tr>
                  <!-- Add more table rows as needed -->
               </tbody>
            </table>
            <p id="noDataMessage" style="text-align: center; display: none;">No available data</p>
         </div>
      </div>
   </div>
</div>

<script>

   /* AJAX  */

    $(document).on('click','.edit-resident-btn',function(){

      var residentId = this.dataset.resident;

      $.ajax({
          url:'<?= base_url('index.php/dashboard/ajax-update-resident-form') ?>',
          method:'POST',
          data:{
            resident_id: residentId
          },
          success:function(response){
         
                bootbox.dialog({
                  title: 'Edit Resident',
                  message:' ',
                  size: 'extra-large'
                }).find('.bootbox-body').html(response);
          }

        });

    });

    $(document).on('click','.delete-official-btn',function(e){

      var officialId = this.dataset.official;

      bootbox.confirm('Are you sure you want to delete this official',function(answer){

            if(answer==true){

               window.location = '<?= base_url('index.php/dashboard/delete-officials/') ?>'+officialId;
               
            }

      });


   });

    

</script>


<script>
        // JavaScript to show "No available data" message when there are no records
        document.addEventListener("DOMContentLoaded", function () {
            const tableBody = document.querySelector("tbody");
            const noDataMessage = document.getElementById("noDataMessage");

            // Check if there are no rows in the table body
            if (tableBody.rows.length === 0) {
                noDataMessage.style.display = "block"; // Show the message
            } else {
                noDataMessage.style.display = "none"; // Hide the message
            }
        });
    </script>

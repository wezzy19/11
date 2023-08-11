<style>
    /* Add border to the table */
    .table-bordered {
        border: 30px solid #dee2e6;
    }

    /* Add outline to the card */
    .card {
        border: 1px solid #ccc;
    }
</style>

<div class="container-fluid">
   <!-- Page Heading --> 
   <br>
  
 <center>
   <h1 class="h3 mb-2" style="color: black; font-size: 24px; font-family: Verdana, sans-serif;">Blotter List</h1>
   </center>
    <p class="mb-4">
      <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-blotter') ?>"> <i class="fas fa-plus"></i> Add Blotter </a>
   </p>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <div class="row">
            <div class="col-6">
               <h6 class="m-0 font-weight-bold text-primary">List</h6>
            </div>
            <div class="col-md-6">
             <form class="form-inline float-right"  id="search-form">
               <div class="input-group">
                   <input type="text" id="search-input" class="form-control" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered table-hover  ">
               <thead>
                  <tr>
                     <th scope="col" class="text-dark">#</th>
                     <th scope="col" class="text-dark">Date Recorded</th>
                     <th scope="col" class="text-dark">Name of Complainant</th>
                     <th scope="col" class="text-dark">Age</th>
                     <th scope="col" class="text-dark">Address</th>
                     <th scope="col" class="text-dark">Contact Number</th>
                     <th scope="col" class="text-dark">Name of Complainee</th>
                     <th scope="col" class="text-dark">Action Taken</th>
                     <th scope="col" class="text-dark">Status</th>
                     <th scope="col" class="text-dark">Incidence</th>
                     <th scope="col" class="text-dark">ACTION</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $counter = 1; ?>
                  <?php foreach ($blotter_list as $blotter) : ?>
                     <tr class="search-item">
                        <td><?= $counter ?></td>
                        <td><?= $blotter->date ?></td>
                        <td><?= $blotter->complainant ?></td>
                        <td><?= $blotter->age1 ?></td>
                        <td><?= $blotter->address ?></td>
                        <td><?= $blotter->number ?></td>
                        <td><?= $blotter->complainee ?></td>
                        <td><?= $blotter->action ?></td>
                        <td><?= $blotter->status ?></td>
                        <td><?= $blotter->incidence ?></td>
                        <td>
                        <div class= "btn-group">
                           <button type="button" class="btn btn-primary edit-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">
                              <i class="fas fa-edit"></i> 
                           </button>
                           <button type="button" class="btn btn-success">
                              <i class="fas fa-eye"></i> 
                           </button>
                           <button class="btn btn-danger delete-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">
                              <i class="fas fa-trash"></i> 
                           </button>
                           </div>
                        </td>
                     </tr>
                     <?php $counter++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>




<script>

   /* AJAX  */
   
   //blotter

    $(document).on('click','.edit-blotter-btn',function(){

      var blotterId = this.dataset.blotter;

      $.ajax({
          url:'<?= base_url('index.php/dashboard/ajax-update-blotter-form') ?>',
          method:'POST',
          data:{
            blotter_id: blotterId
          },
          success:function(response){
         
                bootbox.dialog({
                  title: 'Edit Blotter Records',
                  message:' ',
                  size: 'extra-large'
                }).find('.bootbox-body').html(response);
          }

        });

    });

    $(document).on('click','.delete-blotter-btn',function(e){

      var blotterId = this.dataset.blotter;

      bootbox.confirm('Are you sure you want to delete this official?',function(answer){

            if(answer==true){

               window.location = '<?= base_url('index.php/dashboard/delete-blotter/') ?>'+blotterId;
               
            }

      });


   });

//residents

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

$(document).ready(function() {
      // Search functionality (unchanged)
      $('#search-input').keyup(function() {
         var searchValue = $(this).val().toLowerCase();
         $('.search-item').each(function() {
            var residentName = $(this).find('td:nth-child(3)').text().toLowerCase();
            if (residentName.includes(searchValue)) {
               $(this).show();
            } else {
               $(this).hide();
            }
         });
      });
   });

    

</script>
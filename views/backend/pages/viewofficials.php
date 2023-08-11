<div class="container-fluid">
   <!-- Page Heading -->
   <br>
   <center>
      <h1 class="h3 mb-2 text-gray-800">Barangay Officials</h1>
   </center>
   <p class="mb-4">
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-officials') ?>"> Add Officials </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th># </th>
                     <th scope="col">Position</th>
                     <th scope="col">Name</th>
                     <th scope="col">Contact</th>
                     <th scope="col">Address</th>
                     <th scope="col">Start of Term</th>
                     <th scope="col">End of Term</th>
                     <th scope="col">Option</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $c = 1; 
                  foreach($officials_list as $officials_data): ?>
                  <tr>
                  <td><?= $c++ ?></td>
                     <td><?= $officials_data->position ?></td>
                     <td><?= $officials_data->name ?></td>
                     <td><?= $officials_data->contact ?></td>
                     <td><?= $officials_data->address ?></td>
                     <td><?= $officials_data->start_term ?></td>
                     <td><?= $officials_data->end_term ?></td>
                     <td>
                        <button type="button" class="btn btn-primary edit-official-btn" data-official="<?= $officials_data->id ?>">
                           Edit
                        </button>
                        
                        <button class="btn btn-danger  delete-official-btn" data-official="<?= $officials_data->id ?>">Delete</button>
                        
                  </tr>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<script>

   /* AJAX  */

    $(document).on('click','.edit-official-btn',function(){

      var officialId = this.dataset.official;

      $.ajax({
          url:'<?= base_url('index.php/dashboard/ajax-update-official-form') ?>',
          method:'POST',
          data:{
            official_id: officialId
          },
          success:function(response){
         
                bootbox.dialog({
                  title: 'Edit Official',
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

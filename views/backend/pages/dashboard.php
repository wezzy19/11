
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

    <!-- Content Row -->
    <style>
    /* Additional styles for the card title */
    .card-title {
        font-size: 18px;
        font-weight: bold;
        color: #fff; /* Set the text color to white */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    /* Custom class for darker cards */
    .dark-card {
        background-color: #303030; /* Change this to your desired darker color */
    }
</style>

<div class="row">
    <?php
    // Function to generate a random light color
    function random_light_color()
    {
        $letters = 'ABCDEF';
        $color = '#';
        for ($i = 0; $i < 6; $i++) {
            $color .= $letters[rand(0, 5)];
        }
        return $color;
    }
    ?>

    <div class="col-xl-3 col-md-6 mb-4" onclick="scrollToResidentTable()">
        <div class="card border-left-success shadow h-100 py-2" style="background-color: <?= random_light_color() ?>;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold mb-1">
                            Number of Residents
                        </div>
                        <div class="h5 mb-0 font-weight-bold"><?= $residentCount ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Function to scroll to the Resident List Table
    function scrollToResidentTable() {
        $('html, body').animate({
            scrollTop: $('#residentTableSection').offset().top
        }, 1000);
    }
</script>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" onclick="scrollToBlotter()">
        <div class="card border-left-success shadow h-100 py-2" style="background-color: <?= random_light_color() ?>;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold mb-1">
                            Number of Blotters
                        </div>
                        <div class="h5 mb-0 font-weight-bold"><?= $blotterCount ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Function to scroll to the Barangay officials
    function scrollToBlotter() {
        $('html, body').animate({
            scrollTop: $('#blotterTableSection').offset().top
        }, 1000);
    }
</script>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4" onclick="scrollToBarangayOfficials()">
        <a style="text-decoration: none;">
            <div class="card border-left-success shadow h-100 py-2" style="background-color: <?= random_light_color() ?>;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold mb-1">
                                Barangay Officials
                            </div>
                            <!-- Add content here if needed -->
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <script>
    // Function to scroll to the Barangay officials
    function scrollToBarangayOfficials() {
        $('html, body').animate({
            scrollTop: $('#brgyofficialsSection').offset().top
        }, 1000);
    }
</script>

    <!-- MaleCount Card -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2" style="background-color: <?= random_light_color() ?>;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold mb-1">
                        Male
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold"><?= $male_count ?></div>
                        </div>
                        <!-- Add a button to scroll down to the resident table -->
                        <div class="col-auto">
                            <a href="#residentTable" class="btn btn-sm btn-primary">View Male Residents</a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2" style="background-color: <?= random_light_color() ?>;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold mb-1">
                            Female
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold"><?= $female_count ?></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2" style="background-color: <?= random_light_color() ?>;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold mb-1">
                          Senior
                        </div>
                        <div class="h5 mb-0 font-weight-bold"><?= $senior_count ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Resident List Table -->
  <div id="residentTableSection" class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Resident List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="residentTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Birth Date</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Contact Number</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Civil Status</th>
                                    <th scope="col">Nationality</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($resident_list)) : ?>
                                    <?php $counter = 1; ?>
                                    <?php foreach ($resident_list as $resident) : ?>
                                        <tr class="search-item">
                                            <td><?= $counter ?></td>
                                            <td style="text-align: center;"><img src="<?= base_url($resident->image); ?>" height="50px" width="50px" alt="Resident Image"></td>
                                            <td><?= $resident->last_name ?>, <?= $resident->first_name ?> <?= $resident->middle_name ?></td>
                                            <td><?= $resident->birth_date ?></td>
                                            <td><?= $resident->sex ?></td>
                                            <td><?= $resident->purok ?> <?= $resident->barangay ?></td>
                                            <td><?= $resident->contact ?></td>
                                            <td><?= $resident->religion ?></td>
                                            <td><?= $resident->civil_status ?></td>
                                            <td><?= $resident->nationality ?></td>
                                           
                                          
                                        </tr>
                                        <?php $counter++; ?>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="11">No residents found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Load required CSS and JavaScript for DataTables -->
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#residentTable').DataTable();
    });
</script>




<!-- Blotter Table -->
<div class="container-fluid" id="blotterTableSection">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Blotter List</h1>
 
   <!-- DataTales Example -->
   <div class="card shadow mb-4" >
      <div class="card-header py-3 d-flex justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
         <!-- Topbar Search -->
         <form class="form-inline" id="search-form">
            <div class="input-group">
               <input type="text" id="search-input" class="form-control" placeholder="Search by name" aria-label="Search" aria-describedby="basic-addon2">
               <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                     <i class="fas fa-search fa-sm"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Date Recorded</th>
                     <th scope="col">Complainant</th>
                     <th scope="col">Person to Complain</th>
                     <th scope="col">Complaint</th>
                     <th scope="col">Action Taken</th>
                     <th scope="col">Status</th>
                     <th scope="col">Location of Incidence</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $counter = 1; ?>
                  <?php foreach ($blotter_list as $blotter) : ?>
                     <tr class="search-item">
                        <td><?= $counter ?></td>
                        <td><?= $blotter->date ?></td>
                        <td><?= $blotter->complainant ?></td>
                        <td><?= $blotter->complainee ?></td>
                        <td><?= $blotter->complaint ?></td>
                        <td><?= $blotter->action ?></td>
                        <td><?= $blotter->status ?></td>
                        <td><?= $blotter->location ?></td>
                    
                     </tr>
                     <?php $counter++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>


                        <!-- Barangay Officials -->
                        <div class="container mt-4" id="brgyofficialsSection">
   <h1 class="mb-4 text-center font-weight-bold" style="font-size: 36px; color: #007BFF; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">
      Barangay Officials
   </h1>
   <div class="row">
      <?php $captain_found = false; ?>
      <?php foreach ($brgyofficial_list as $brgyofficial) : ?>
         <?php if ($brgyofficial->position === 'Barangay Captain' && !$captain_found) : ?>
            <div class="col-md-12 mb-4">
               <div class="card shadow-sm captain-card">
                  <!-- Captain's card content here -->
                  <div class="official-image mx-auto">
                     <img src="<?= base_url($brgyofficial->image); ?>" alt="Barangay Captain" class="img-fluid rounded-circle border">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title text-white font-weight-bold">
                        <i class="fas fa-user fa-lg"></i>
                        <?= $brgyofficial->first_name ?> <?= $brgyofficial->last_name ?>
                     </h5>
                     <p class="card-text font-weight-bold">
                        <i class="fas fa-briefcase fa-lg"></i>
                        <?= $brgyofficial->position ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php $captain_found = true; ?>
         <?php else : ?>
            <div class="col-md-6 mb-4">
               <div class="card shadow-sm">
                  <!-- Other officials' card content here -->
                  <div class="official-image mx-auto">
                     <img src="<?= base_url($brgyofficial->image); ?>" alt="Barangay Official" class="img-fluid rounded-circle border">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title text-primary font-weight-bold">
                        <i class="fas fa-user fa-lg"></i>
                        <?= $brgyofficial->first_name ?> <?= $brgyofficial->last_name ?>
                     </h5>
                     <p class="card-text">
                        <i class="fas fa-briefcase fa-lg"></i>
                        <?= $brgyofficial->position ?>
                     </p>
                  </div>
               </div>
            </div>
         <?php endif; ?>
      <?php endforeach; ?>
   </div>
</div>

<style>
   /* The same styles as before for official-image, .card, and .card:hover */
   .official-image {
      width: 160px;
      height: 160px;
      overflow: hidden;
      border-radius: 50%;
      margin: 0 auto;
      border: 5px solid #fff;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
   }

   .official-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
   }

   .card {
      transition: transform 0.2s;
   }

   .card:hover {
      transform: translateY(-5px);
   }

   .text-primary {
      color: #007BFF;
   }

   /* Additional styles for the captain's card */
   .captain-card {
      /* Set custom styles here to make the card bigger and emphasize the captain */
      /* For example, you can set a larger width or height and add a background color */
      height: 450px;
      background-color: #007BFF;
      color: #fff;
      font-weight: bold;
      text-align: center;
      padding-top: 30px;
   }

   .captain-card .official-image {
      border: 5px solid #fff;
      box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2);
   }
</style>
                               
                                <!-- Table of Male Residents -->
<h2 id="residentTable">Male Residents</h2>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <!-- Table headers -->
        </thead>
        <tbody>
            <?php if (isset($maleResidents) && !empty($maleResidents)) : ?>
                <?php $counter = 1; ?>
                <?php foreach ($maleResidents as $resident) : ?>
                    <!-- Table rows -->
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="10">No male residents found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="<?= base_url();?>assets/backend/img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <span id="currentDateTime"></span><script>
        // Function to update date and time
  function updateDateTime() {
    const currentDate = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const formattedDate = currentDate.toLocaleDateString(undefined, options);
    const formattedTime = currentDate.toLocaleTimeString();

    const dateTimeString = `${formattedDate} - ${formattedTime}`;
    document.getElementById('currentDateTime').innerText = dateTimeString;
  }

  // Call the updateDateTime function to set the initial date and time
  updateDateTime();

  // Update date and time every second
  setInterval(updateDateTime, 1000);
</script> 
                </div>
                <!-- /.container-fluid -->

            </div>
            
            <!-- End of Main Content -->
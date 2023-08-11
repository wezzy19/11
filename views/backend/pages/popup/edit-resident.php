
            <!-- <form style="margin-left: -5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); box-sizing: border-box; width: 100%;" method="POST" enctype="multipart/form-data">-->
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/dashboard/update-resident/'.$resident_data->resident_id); ?>">    
            <div class="form-row">
              <div style="max-width: 210px; max-height: 330px; align-items: center; border-radius: 6px;" class="form-group" id="image-preview">
                <center>  
                    <img height="200px" width="200px" style="margin-top: 10px; height:180px; width: 180px; object-fit: cover; border-radius: 50%; overflow: hidden;   object-position: center;" src="<?php echo base_url($resident_data->image); ?>" alt="Uploaded Image" class="img-thumbnail">
                    <hr style="margin-left: 10px; border: 1px solid #ccc; max-width: 200px; margin-bottom: 30px;">
                </center>     
                <strong><span style="text-align: left; color: black;">Upload Photo</span></strong>
                <center> 
                    <div  id="image-upload-form" style="width: 110px; margin-top: 5px; margin-left: 100px;"  class="custom-file">
                        <label id="fileLabel" style="margin-left: -100px; text-align: left; " class="custom-file-label" for="image"></label>
                        <input style="padding-bottom: 0px;" type="file" name="image" id="image" class="custom-file-input" accept="image/*" />
                        <span><?= form_error('image') ?></span>
                    </div>
                </center>  
            </div>
                    
                <?php
                    if(isset($_SESSION['error'])):?>
	                <div style="color:red;"><?= $_SESSION['error'] ?></div>
                    <?php endif;?>

                <?php
                    if(isset($_SESSION['success'])):?>
	                <div style="color:green;"><?= $_SESSION['success'] ?></div>
                <?php endif;?>
    
                <br>
                           
            &nbsp &nbsp &nbsp &nbsp 
            <div class="form-group" style="magrin-left: -1000px; max-width: 1300px; margin-right: 0; align-items: center; border-radius: 8px; max-height: 100%;">
            <p style="margin: 10px; font-size: 20px; text-align: left;">Resident Form</p>
            <hr style="border: -1.5px solid #ccc; margin-top: 0px;">

                <div class="form-row" style="text-align: left;">  
                    <div class="form-group col" style="margin: 10px;">
                        <label for="firstname">First Name:</label>
                        <input style="border-radius: 3px" value="<?php echo $resident_data->first_name; ?>" type="text" name="firstname" id="firstname" class="form-control" required />
                        <span><?= form_error('firstname') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="middlename">Middle Name:</label>
                        <input type="text" style="border-radius: 3px" value="<?php echo $resident_data->middle_name; ?>" name="middlename" id="middlename" class="form-control" required />
                        <span><?= form_error('middlename') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="lastname">Last Name:</label>
                        <input type="text" style="border-radius: 3px" value="<?php echo $resident_data->last_name; ?>" name="lastname" id="lastname" class="form-control" required />
                        <span><?= form_error('lastname') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="extname">Extension Name:</label>
                            <select style="border-radius: 3px" value="<?php echo $resident_data->extname; ?>" name="extname" id="extname" class="form-control">
                            <option value=""></option>
                            <option value="Jr.">Jr.</option>
                            <option value="Sr.">Sr.</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option> <!-- Add more options as needed -->
                            </select>
                        <span><?= form_error('extname') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                    <div>
                            <label for="purok">Purok</label>
                        </div>
                    <div>
                <?php
                    $default_purok = isset($resident_data) ? $resident_data->purok : ''; // Get the sex value from the resident data

                    // Define the options for the sex dropdown
                    $purok_options = array(
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '6' => '7',
                    // Add more options if needed
                    );

                    // Generate the dropdown input using form_dropdown with inline styles
                    echo form_dropdown('purok', $purok_options, $default_purok, 'class="form-control" style="max-width: 300px; border-radius: 3px;"'); // Set the desired width here (150px in this example)
                    ?>
                    </div>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="street">Street Name:</label>
                        <input style="border-radius: 3px" type="text" value="<?php echo $resident_data->streetname; ?>" name="streetname" id="street" class="form-control" required />
                        <span><?= form_error('street') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="barangay">Barangay:</label>
                        <input style="border-radius: 3px" type="text" value="<?php echo $resident_data->barangay; ?>" name="barangay" id="barangay" class="form-control" required />
                        <span><?= form_error('barangay') ?></span>
                    </div>
                </div>
                <br>
                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <div>
                            <label for="sex">Sex</label>
                        </div>
                    <div>
                <?php
                    $default_sex = isset($resident_data) ? $resident_data->sex : ''; // Get the sex value from the resident data

                    // Define the options for the sex dropdown
                    $sex_options = array(
                    'Male' => 'Male',
                    'Female' => 'Female',
                    // Add more options if needed
                    );

                    // Generate the dropdown input using form_dropdown with inline styles
                    echo form_dropdown('sex', $sex_options, $default_sex, 'class="form-control" style="max-width: 300px; border-radius: 3px;"'); // Set the desired width here (150px in this example)
                    ?>
                    </div>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="birth_date">Birth Date:</label>
                        <input type="date" style="border-radius: 3px" value="<?php echo $resident_data->birth_date; ?>" name="birth_date" id="birth_date" class="form-control" required />
                        <span><?= form_error('birth_date') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="birth_place">Birth Place:</label>
                        <input type="text" style="border-radius: 3px" value="<?php echo $resident_data->birth_place; ?>" name="birth_place" id="birth_place" class="form-control" required />
                        <span><?= form_error('birth_place') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="nationality">Nationality:</label>
                        <input type="text" style="border-radius: 3px" value="<?php echo $resident_data->nationality; ?>" name="nationality" id="nationality" class="form-control" required />
                        <span><?= form_error('nationality') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="civil_status">Marital Status:</label>
                        <select name="civil_status" style="border-radius: 3px" value="<?php echo $resident_data->civil_status; ?>" id="civil_status" class="form-control" required>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                        <span><?= form_error('civil_status') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="religion">Religion:</label>
                        <input type="text" style="border-radius: 3px" value="<?php echo $resident_data->religion; ?>" name="religion" id="religion" class="form-control" required />
                        <span><?= form_error('religion') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="household_members">Total Household Members:</label>
                        <input min="1" type="number" style="border-radius: 3px" value="<?php echo $resident_data->household_members; ?>" name="household_members" id="household_members" class="form-control" required />
                        <span><?= form_error('household_members') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="land_ownership">Land Ownership Status:</label>
                        <select name="land_ownership" style="border-radius: 3px" value="<?php echo $resident_data->land_ownership; ?>" id="land_ownership" class="form-control" required>
                            <option value="Owned">Owned</option>
                            <option value="Landless">Landless</option>
                            <option value="Tenant">Tenant</option>
                            <option value="Caretaker">Caretaker</option>
                        </select>
                        <span><?= form_error('land_ownership') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="ownership_status">Household Ownership Status:</label>
                        <select name="ownership_status" style="border-radius: 3px" value="<?php echo $resident_data->ownership_status; ?>" id="ownership_status" class="form-control" required>
                            <option value="Own House">Own House</option>
                            <option value="Renting">Renting</option>
                            <option value="Living with Parents">Living with Parents</option>
                        </select>
                        <span><?= form_error('ownership_status') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="blood_type">Blood Type:</label>
                        <select name="blood_type" style="border-radius: 3px" value="<?php echo $resident_data->blood_type; ?>" id="blood_type" class="form-control" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                        <span><?= form_error('blood_type') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="disability">Differently-Abled:</label>
                        <select name="disability" style="border-radius: 3px" value="<?php echo $resident_data->disability; ?>" id="disability" class="form-control" required>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <span><?= form_error('disability') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="contact">Contact:</label>
                        <input type="text" name="contact" style="border-radius: 3px" value="<?php echo $resident_data->contact; ?>" id="contact" class="form-control" required />
                        <span><?= form_error('contact') ?></span>
                    </div>
                    <br>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="occupation">Occupation:</label>
                        <input type="text" value="<?php echo $resident_data->occupation; ?>" name="occupation" style="border-radius: 3px" id="occupation" class="form-control" required />
                        <span><?= form_error('occupation') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="monthly_income">Monthly Income:</label>
                        <input type="number" min="0" style="border-radius: 3px" value="<?php echo $resident_data->monthly_income; ?>" name="monthly_income" id="monthly_income" class="form-control" required />
                        <span><?= form_error('monthly_income') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="education">Educational Attainment:</label>
                        <select name="education" style="border-radius: 3px" value="<?php echo $resident_data->education; ?>" id="education" class="form-control" required>
                            <option value="No schooling completed">No schooling completed</option>
                            <option value="Elementary Graduate">Elementary Graduate</option>
                            <option value="Elementary Undergraduate">Elementary Undergraduate</option>
                            <option value="High School Graduate">High School Graduate</option>
                            <option value="High School Undergraduate">High School Undergraduate</option>
                            <option value="College Undergraduate">College Undergraduate</option>
                            <option value="Vocational">Vocational</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master Degree">Master Degree</option>
                            <option value="Doctorate Degree">Doctorate Degree</option>
                        </select>
                        <span><?= form_error('education') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="lightning_facilities">Lightning Facilities:</label>
                        <select name="lightning_facilities" style="border-radius: 3px" value="<?php echo $resident_data->lightning_facilities; ?>" id="lightning_facilities" class="form-control" required>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                        <span><?= form_error('lightning_facilities') ?></span>
                    </div>
                </div>
                <br>
             <!--  <div class="form-row">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="remarks">Remarks:</label>
                        <textarea name="remarks" id="remarks" class="form-control"></textarea>
                    </div>
                </div>                <br>-->

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Update Resident</button>
                </div>
            </form>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Listen for the 'change' event on the file input
    $('#image').change(function() {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                // Update the image preview with the selected image
                $('#image-preview img').attr('src', e.target.result);
            };

            // Read the image as a data URL
            reader.readAsDataURL(input.files[0]);
        }
    });

    $('#image-upload-form').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: '<?= base_url('index.php/dashboard/addresident') ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                var data = JSON.parse(response);
                if (data.image_path) {
                    $('#image-preview img').attr('src', '<?= base_url() ?>' + data.image_path);
                }
            },
            error: function(xhr, status, error) {
                console.log(error);
                $('#image-error').text('Error occurred during image upload.');
            }
        });
    });
});
</script>


<script>
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0]?.name || 'Choose file';
        document.getElementById('fileLabel').innerText = fileName;
    });
</script>
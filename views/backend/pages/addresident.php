<!DOCTYPE html>
<html>
<head>
    <title>Resident Information Form</title>
</head>

<body>
    <div id="content">
        <center>
        <div  style=" max-width: 1200px; max-height: auto; !important; margin: 0 auto; border-radius: 8px;" class="container" >       
            <?php
            if(isset($_SESSION['error'])):?>
	        <div style="color:red;"><?= $_SESSION['error'] ?></div>
            <?php endif;?>
            <!-- <form style="margin-left: -5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); box-sizing: border-box; width: 100%;" method="POST" enctype="multipart/form-data">-->
           <form method="POST" enctype="multipart/form-data">    
            <div class="form-row">
                <div style="width: 230px; max-height: 330px; align-items: center; border-radius: 6px; background-color: #ffffff;" class="form-group" id="image-preview">
                <center>  
                    <img height="200px" width="200px" style="margin-top: 10px; height:180px; width: 180px; object-fit: cover; border-radius: 50%; overflow: hidden;   object-position: center;" src="<?= base_url();?>assets/backend/img/prof.JPG" alt="Uploaded Image" class="img-thumbnail">
                    <hr style="margin-left: 10px; border: 1px solid #ccc; max-width: 200px; margin-bottom: 30px;">
                </center>     
                <strong><span style="text-align: left; color: black; margin-left: -100px">Upload Photo</span></strong>
                <center> 
                    <div  id="image-upload-form" style="width: 110px; margin-top: 5px; margin-left: 100px;"  class="custom-file">
                        <label id="fileLabel" style="margin-left: -100px; " class="custom-file-label" for="image"></label>
                        <input style="padding-bottom: 0px;" type="file" name="image" id="image" class="custom-file-input" accept="image/*" required />
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
                           
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
            <div class="form-group" style="magrin-left: -1000px; max-width: 1300px; margin-right: 0; align-items: center; border-radius: 8px; background-color: #ffffff; max-height: 100%;">
            <p style="margin: 10px; font-size: 20px; text-align: left;">Resident Form</p>
            <hr style="border: -1.5px solid #ccc; margin-top: 0px;">

                <div class="form-row" style="text-align: left;">  
                    <div class="form-group col" style="margin: 10px;">
                        <label for="firstname">First Name:</label>
                        <input style="border-radius: 3px" type="text" name="firstname" id="firstname" class="form-control" required />
                        <span><?= form_error('firstname') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="middlename">Middle Name:</label>
                        <input type="text" style="border-radius: 3px" name="middlename" id="middlename" class="form-control" required />
                        <span><?= form_error('middlename') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="lastname">Last Name:</label>
                        <input type="text" style="border-radius: 3px" name="lastname" id="lastname" class="form-control" required />
                        <span><?= form_error('lastname') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="extname">Extension Name:</label>
                            <select style="border-radius: 3px" name="extname" id="extname" class="form-control">
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
                        <label for="purok">Purok:</label>
                        <select style="border-radius: 3px" name="purok" id="purok" class="form-control" required>
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <span><?= form_error('purok') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="street">Street Name:</label>
                        <input style="border-radius: 3px" type="text" name="streetname" id="street" class="form-control" required />
                        <span><?= form_error('street') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="barangay">Barangay:</label>
                        <input style="border-radius: 3px" type="text" name="barangay" id="barangay" class="form-control" required />
                        <span><?= form_error('barangay') ?></span>
                    </div>
                </div>
                <br>
                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="sex">Sex:</label>
                        <select name="sex" style="border-radius: 3px" id="sex" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span><?= form_error('sex') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="birth_date">Birth Date:</label>
                        <input type="date" style="border-radius: 3px" name="birth_date" id="birth_date" class="form-control" required />
                        <span><?= form_error('birth_date') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="birth_place">Birth Place:</label>
                        <input type="text" style="border-radius: 3px" name="birth_place" id="birth_place" class="form-control" required />
                        <span><?= form_error('birth_place') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="nationality">Nationality:</label>
                        <input type="text" style="border-radius: 3px" name="nationality" id="nationality" class="form-control" required />
                        <span><?= form_error('nationality') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="civil_status">Marital Status:</label>
                        <select name="civil_status" style="border-radius: 3px" id="civil_status" class="form-control" required>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                        <span><?= form_error('civil_status') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="religion">Religion:</label>
                        <input type="text" style="border-radius: 3px" name="religion" id="religion" class="form-control" required />
                        <span><?= form_error('religion') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="household_members">Total Household Members:</label>
                        <input min="1" type="number" style="border-radius: 3px" name="household_members" id="household_members" class="form-control" required />
                        <span><?= form_error('household_members') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="land_ownership">Land Ownership Status:</label>
                        <select name="land_ownership" style="border-radius: 3px" id="land_ownership" class="form-control" required>
                            <option value="Owned">Owned</option>
                            <option value="Landless">Landless</option>
                            <option value="Tenant">Tenant</option>
                            <option value="Caretaker">Caretaker</option>
                        </select>
                        <span><?= form_error('land_ownership') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="ownership_status">Household Ownership Status:</label>
                        <select name="ownership_status" style="border-radius: 3px" id="ownership_status" class="form-control" required>
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
                        <select name="blood_type" style="border-radius: 3px" id="blood_type" class="form-control" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                        <span><?= form_error('blood_type') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="disability">Differently-Abled:</label>
                        <select name="disability" style="border-radius: 3px" id="disability" class="form-control" required>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <span><?= form_error('disability') ?></span>
                    </div>
                    <br>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="contact">Contact:</label>
                        <input type="text" name="contact" style="border-radius: 3px" id="contact" class="form-control" required />
                        <span><?= form_error('contact') ?></span>
                    </div>
                    <br>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="occupation">Occupation:</label>
                        <input type="text" name="occupation" style="border-radius: 3px" id="occupation" class="form-control" required />
                        <span><?= form_error('occupation') ?></span>
                    </div>
                    <div class="form-group col" style="margin: 10px;">
                        <label for="monthly_income">Monthly Income:</label>
                        <input type="number" min="0" style="border-radius: 3px" name="monthly_income" id="monthly_income" class="form-control" required />
                        <span><?= form_error('monthly_income') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row" style="text-align: left;">
                    <div class="form-group col" style="margin: 10px;">
                        <label for="education">Educational Attainment:</label>
                        <select name="education" style="border-radius: 3px" id="education" class="form-control" required>
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
                        <select name="lightning_facilities" style="border-radius: 3px" id="lightning_facilities" class="form-control" required>
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
                    <button type="submit" class="btn btn-primary">Add Resident</button>
                </div>
            </form>
            </center>
            </div>
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


</body>

</html>

        </div>
    </div>
    </div>
    <br>
  

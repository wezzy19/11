<!DOCTYPE html>
<html>

<head>
    <title>Resident Information Form</title>
</head>

<body>
    <!-- Main Content -->
    <div id="content">
        <div class="container">
            <br>
            <br>
            <br>
            <h2 class="text-center">EDIT RESIDENT INFORMATION</h2>
            <?php
if(isset($_SESSION['error'])):?>
	<div style="color:red;"><?= $_SESSION['error'] ?></div>
<?php endif;?>
            <br>
            <br>

            <form action="<?php echo base_url('index.php/dashboard/update-resident/'.$resident_data->resident_id); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="firstname">First Name:</label>
                        <input value="<?php echo $resident_data->first_name; ?>" type="text" name="firstname" id="firstname" class="form-control" required />
                        <span><?= form_error('firstname') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="middlename">Middle Name:</label>
                        <input type="text" value="<?php echo $resident_data->middle_name; ?>" name="middlename" id="middlename" class="form-control" required />
                        <span><?= form_error('middlename') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="lastname">Last Name:</label>
                        <input type="text" value="<?php echo $resident_data->last_name; ?>" name="lastname" id="lastname" class="form-control" required />
                        <span><?= form_error('lastname') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="extname">Extension Name:</label>
                            <select value="<?php echo $resident_data->extname; ?>" name="extname" id="extname" class="form-control">
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

                <div class="form-row">
                    <div class="form-group col">
                        <label for="purok">Purok:</label>
                        <select value="<?php echo $resident_data->purok; ?>" name="purok" id="purok" class="form-control" required>
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <span><?= form_error('purok') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="street">Street Name:</label>
                        <input type="text" value="<?php echo $resident_data->streetname; ?>" name="streetname" id="street" class="form-control" required />
                        <span><?= form_error('street') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="barangay">Barangay:</label>
                        <input type="text" value="<?php echo $resident_data->barangay; ?>" name="barangay" id="barangay" class="form-control" required />
                        <span><?= form_error('barangay') ?></span>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="sex">Sex:</label>
                        <select value="<?php echo $resident_data->sex; ?>" name="sex" id="sex" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span><?= form_error('sex') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="birth_date">Birth Date:</label>
                        <input type="date" value="<?php echo $resident_data->birth_date; ?>" name="birth_date" id="birth_date" class="form-control" required />
                        <span><?= form_error('birth_date') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="birth_place">Birth Place:</label>
                        <input type="text" name="birth_place" value="<?php echo $resident_data->birth_place; ?>" id="birth_place" class="form-control" required />
                        <span><?= form_error('birth_place') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="nationality">Nationality:</label>
                        <input type="text" value="<?php echo $resident_data->nationality; ?>" name="nationality" id="nationality" class="form-control" required />
                        <span><?= form_error('nationality') ?></span>
                    </div>
                    <div class="form-group col">
                        <label for="civil_status">Marital Status:</label>
                        <select name="civil_status" value="<?php echo $resident_data->civil_status; ?>" id="civil_status" class="form-control" required>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                        <span><?= form_error('civil_status') ?></span>
                    </div>
                    <div class="form-group col">
                        <label for="religion">Religion:</label>
                        <input type="text" value="<?php echo $resident_data->religion; ?>" name="religion" id="religion" class="form-control" required />
                        <span><?= form_error('religion') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="household_members">Total Household Members:</label>
                        <input value="<?php echo $resident_data->household_members; ?>" min="1" type="number" name="household_members" id="household_members" class="form-control" required />
                        <span><?= form_error('household_members') ?></span>
                    </div>
                    <div class="form-group col">
                        <label for="land_ownership">Land Ownership Status:</label>
                        <select value="<?php echo $resident_data->land_ownership; ?>" name="land_ownership" id="land_ownership" class="form-control" required>
                            <option value="Owned">Owned</option>
                            <option value="Landless">Landless</option>
                            <option value="Tenant">Tenant</option>
                            <option value="Caretaker">Caretaker</option>
                        </select>
                        <span><?= form_error('land_ownership') ?></span>
                    </div>
                    <div class="form-group col">
                        <label for="ownership_status">Household Ownership Status:</label>
                        <select value="<?php echo $resident_data->ownership_status; ?>" name="ownership_status" id="ownership_status" class="form-control" required>
                            <option value="Own House">Own House</option>
                            <option value="Renting">Renting</option>
                            <option value="Living with Parents">Living with Parents</option>
                        </select>
                        <span><?= form_error('ownership_status') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="blood_type">Blood Type:</label>
                        <select value="<?php echo $resident_data->blood_type; ?>" name="blood_type" id="blood_type" class="form-control" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                        <span><?= form_error('blood_type') ?></span>
                    </div>
                    <div class="form-group col">
                        <label for="disability">Differently-Abled:</label>
                        <select value="<?php echo $resident_data->disability; ?>" name="disability" id="disability" class="form-control" required>
                            <option value="no">No</option>
                            <option value="yes">Yes</option>
                        </select>
                        <span><?= form_error('disability') ?></span>
                    </div>
                    <br>
                    <div class="form-group col">
                        <label for="contact">Contact:</label>
                        <input type="text" value="<?php echo $resident_data->contact; ?>" name="contact" id="contact" class="form-control" required />
                        <span><?= form_error('contact') ?></span>
                    </div>
                    <br>
                </div>
                <br>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="occupation">Occupation:</label>
                        <input type="text" value="<?php echo $resident_data->occupation; ?>" name="occupation" id="occupation" class="form-control" required />
                        <span><?= form_error('occupation') ?></span>
                    </div>
                    <div class="form-group col">
                        <label for="monthly_income">Monthly Income:</label>
                        <input value="<?php echo $resident_data->monthly_income; ?>" type="number" min="0" name="monthly_income" id="monthly_income" class="form-control" required />
                        <span><?= form_error('monthly_income') ?></span>
                    </div>
                </div>
                <br>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="education">Educational Attainment:</label>
                        <select value="<?php echo $resident_data->education; ?>" name="education" id="education" class="form-control" required>
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
                    <div class="form-group col">
                        <label for="lightning_facilities">Lightning Facilities:</label>
                        <select value="<?php echo $resident_data->lightning_facilities; ?>" name="lightning_facilities" id="lightning_facilities" class="form-control" required>
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                        <span><?= form_error('lightning_facilities') ?></span>
                    </div>
                </div>
                <br>

                <!--<div class="form-row">
                    <div class="form-group col">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*" required />
                        <button type="submit" name="upload_btn"> Upload Image </button>
                        <span><?= form_error('image') ?></span>
                    </div>
                </div>-->
                <?php
if(isset($_SESSION['error'])):?>
	<div style="color:red;"><?= $_SESSION['error'] ?></div>
<?php endif;?>

<?php
if(isset($_SESSION['success'])):?>
	<div style="color:green;"><?= $_SESSION['success'] ?></div>
<?php endif;?>
            <!--    <form action="<?base_url('index.php/dashboard/add-resident/') ?>" method="POST" enctype="multipart/form-data">-->
                <div class="form-group col">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control" accept="image/*" required />
                        
                        <span><?= form_error('image') ?></span>
                    </div>
<!--</form>-->
                <br>
                <?php if (!empty($resident_data->image)) : ?>
                <div class="form-row">
                    <div class="form-group col">
                <img src="<?php echo base_url($resident_data->image); ?>" height="100" width="100" alt="Resident Image">
                </div>
                </div>
                <?php endif; ?>
                <br>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="remarks">Remarks:</label>
                        <textarea value="<?php echo $resident_data->remarks; ?>" name="remarks" id="remarks" class="form-control"></textarea>
                    </div>
                </div>
                <br>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Add Resident</button>
                </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>
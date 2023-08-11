<!-- Main Content -->
<!--<div id="content">
    <div class="container">
        <br>
        <br>
        <h2 class="text-center">EDIT OFFICIALS INFORMATION</h2>
        <br>
        <br>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editOfficialsModal">
            Edit
        </button>

        <div class="modal fade" id="editOfficialsModal" tabindex="-1" role="dialog" aria-labelledby="editOfficialsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editOfficialsModalLabel">Edit Officials Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url('index.php/dashboard/update-officials/'.$officials_data->id); ?>">
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="position">Position:</label>
                                    <input type="text" name="position" value="<?php echo $officials_data->position; ?>" id="position" class="form-control" required />
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showNotification() {
        alert("Officials information has been updated successfully!");
    }
</script>
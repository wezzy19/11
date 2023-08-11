 <form method="POST" >
            <div class="form-row">
                <div class="form-group col">
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position" class="form-control" required />
                    <span><?= form_error('position') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" required />
                    <span><?= form_error('name') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="contact">Contact#:</label>
                    <input type="text" name="contact" id="contact" class="form-control" required />
                    <span><?= form_error('contact') ?></span>
                </div>
                <div class="form-group col">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" required />
                    <span><?= form_error('address') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="start_term">Start Term:</label>
                    <input type="date" name="start_term" id="start_term" class="form-control" required />
                    <span><?= form_error('start_term') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="end_term">End Term:</label>
                    <input type="date" name="end_term" id="end_term" class="form-control" required />
                    <span><?= form_error('end_term') ?></span>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary" >Add Officials</button>
                
            </div>
        </form>
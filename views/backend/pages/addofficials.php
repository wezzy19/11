<!-- Main Content -->
<div id="content">
    
    <div class="container">
        <br>
        <br>
        <br>
        <h2 class="text-center">Manage Officials</h2>
        <br>
        <br>
        
        <style>
   /* Custom CSS to make the font black */
   .black-font {
      color: black;
   }
</style>
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
    </div>
</div>
</div>
<script>
    function showPopup() {
        var modal = document.getElementById("popupModal");
        modal.style.display = "block";
    }

    function closePopup() {
        var modal = document.getElementById("popupModal");
        modal.style.display = "none";
    }

    function addOfficials() {
        // Code to add officials to your system/database
        closePopup(); // Close the popup after adding officials
    }
</script>

    <?php include 'navbar.php';?>
    

    <div class="container mt-5">
    <form action="contactInfo.php" method="post" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="Name">Name</label>
      <input type="text" class="form-control" id="Name" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="Comment">Comment</label>
    <input type="text" class="form-control" id="Comment" name="comment" placeholder="Comment">
  </div>
  <div class="form-group">
    <label for="Phone">Phone No.</label>
    <input type="tel" class="form-control" id="Phone" name="phone" placeholder="+XXX-XXXXXXXXXX">
  </div>

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I am human
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
    </div>

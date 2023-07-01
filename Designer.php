<?php
include ("./include/Connection.php");
include ("./include/header.php");
include ("./include/sidebar.php");
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Designer</h4>
                  <form class="forms-sample" id="myformdata">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Username" name="user">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Role</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Designer" name="role">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Password</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Profile Pic</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" placeholder="" name="spic" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" id="btn">Submit</button>
                  </form>
                </div>
              </div>
            </div>

<?php
 include ("./include/footer.php");
?>
<script>
     $(document).ready(function() {
    $("#btn").on('click', function(e) {
        e.preventDefault();
        var mydata = new FormData(myformdata);
        $.ajax({
            url: "./files/Insert-Designer.php",
            method: "POST",
            data: mydata,
            contentType: false,
            processData: false,
            success:function(res){
                alert(res);
              }
        })
    })
})
</script>
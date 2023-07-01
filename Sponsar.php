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
                  <h4 class="card-title">Sponsar</h4>
                  <form class="forms-sample" id="myformdata">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Add Sponsar</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Add Sponsar" name="sponsar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Add logo</label>
                      <input type="file" class="form-control" id="exampleInputUsername1" placeholder="Add logo" name="logo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Description</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Description" name="description">
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
            url: "./files/Insert-Sponsar.php",
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
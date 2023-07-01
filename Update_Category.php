<?php
include ("./include/Connection.php");
include ("./include/header.php");
include ("./include/sidebar.php");
?>
<?php
$in=new connection();
$uid=$_GET['uid'];
$usd="SELECT * FROM `category` WHERE `cid`=$uid";
$d=mysqli_query($in->mysqli);
$gfet=mysqli_fetch_array($d);

?>
   <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category</h4>
                  <form class="forms-sample" id="myformdata">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Add Category</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Add Category" name="category">
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
            url: "./files/Update-Category.php",
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
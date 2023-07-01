<?php
include ("./include/Connection.php");
?>
<?php
$in=new connection();
$res=$in->select("category","*",null,"`cid`");
?>
<?php
include ("./include/header.php");
include ("./include/sidebar.php");
?>

<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Category View</h4>
                            <a href="./insertcate.php" class="btn btn-info ml-auto">Add Category</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                // $sql = "SELECT * FROM `category`";
                                                // $run=mysqli_query($conn,$sql);
                                                // while($fet=mysqli_fetch_array($run)){ 
                                                    foreach($res as $data){
                                                         ?>
                                                    
                                        <tr>
                                            <td><?php echo $data['category'] ?></td>
                                            <td><?php echo $data['description'] ?></td>
                                            <td><a class="btn btn-primary" href="./Update_Category.php?uid=<?php echo $data['cid'] ?>">Update</a></td>
                                           <td><button class="btn btn-danger delete" data-del="<?php echo $data['cid'] ?>">Delete</button></td>
                                            <?php
                                                }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>

<?php include ("./include/footer.php"); ?>


<script>
       $(document).ready(function() {
            $(document).on("click",".delete",function(){
                var cdel=$(this).data("del");
                var msg=this;
                $.ajax({
                    url:"./files/Del-Category.php",
                    method:"GET",
                    data:{mydel:cdel},
                    success:function(res){   
                        alert(res);
                //         if (res == 1) {
                //     Swal.fire({
                //         title: 'Are you sure?',
                //         text: "You want to empty cart",
                //         icon: 'warning',
                //         showCancelButton: true,
                //         confirmButtonColor: '#3085d6',
                //         cancelButtonColor: '#d33',
                //         confirmButtonText: 'Yes, delete it!'
                //     }).then((result) => {
                //         if (result.isConfirmed) {
                //             const Toast = Swal.mixin({
                //                 toast: true,
                //                 position: 'top-end',
                //                 showConfirmButton: false,
                //                 timer: 2000,
                //                 timerProgressBar: true,
                //                 didOpen: (toast) => {
                //                     toast.addEventListener('mouseenter',
                //                         Swal.stopTimer)
                //                     toast.addEventListener('mouseleave',
                //                         Swal.resumeTimer)
                //                 }
                //             })

                //             Toast.fire({
                //                 icon: 'success',
                //                 title: 'Data Has Been Deleted'
                //             })
                //             $(msg).closest("tr").fadeOut();
                //         }
                //     })
                // } else {
                //     Swal.fire({
                //         title: 'Are you sure?',
                //         text: "You won't be able to revert this!",
                //         icon: 'warning',
                //         showCancelButton: true,
                //         confirmButtonColor: '#3085d6',
                //         cancelButtonColor: '#d33',
                //         confirmButtonText: 'Yes, delete it!'
                //     }).then((result) => {
                //         if (result.isConfirmed) {
                //             const Toast = Swal.mixin({
                //                 toast: true,
                //                 position: 'top-end',
                //                 showConfirmButton: false,
                //                 timer: 2000,
                //                 timerProgressBar: true,
                //                 didOpen: (toast) => {
                //                     toast.addEventListener('mouseenter',
                //                         Swal.stopTimer)
                //                     toast.addEventListener('mouseleave',
                //                         Swal.resumeTimer)
                //                 }
                //             })

                //             Toast.fire({
                //                 icon: 'success',
                //                 title: 'Data Has Been Deleted'
                //             })
                //         }
                //     })
                // }
            }
        })
    })
})
    
</script>
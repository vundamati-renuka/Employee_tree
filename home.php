<?php 
include('config.php');
 
?>
<head><link href="bootstrap.min.css" rel="stylesheet"></head>

    <div class="container">
        <div>
            <button class="mt-5 btn btn-success btn-sm" ><a style="color:white;" href="?go=add">Add Employee Data</a></button>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                        <th>Manager</th>
                        <th>Status</th>
                    </tr>
                </thead>
                
                   <tbody>
                    <?php $res = mysqli_query( $con, "select * from employee order by parent_id"); ?>
                        
                        <?php while($results = mysqli_fetch_assoc($res)){ ?>
                        <tr>
                            <td><?=$results['id'] ?></td>
                            <td><?=$results['parent_id'] ?></td>
                            <td><?=$results['name'] ?></td>
                            <td><?=$results['des'] ?></td>
                        </tr>
                        <?php }?>
                   </tbody>
                
            </table>
        </div>
    </div>

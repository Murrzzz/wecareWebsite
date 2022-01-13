<?php
  require('assets/session.php');
  require('assets/dbh.php');
  require ('assets/read.php');
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>We Care</title>
    <meta charset="utf-8" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image" href="Image/L.png">
     <!-- Bootstrap Styles-->
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
</head>
<body>

    <?php include "header.php"; ?>
 <br><br><br><br><br><br>
    <div class="panel panel-default/.  l.,, container w-50 p-4">
                        <div class="panel-heading">
                            Make a request
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="/Counseling_Website/assets/create.php" method="POST">
                                        <div class="form-group">
                                            <label>Category Details</label>
                                            <select class="form-select" name="v_category_name" aria-label="Default select example">;
                                                <?php
                                                    $sql= "SELECT v_category_name FROM category_admin";

                                                    $result= $conn->query($sql);
                                                    $rowValidate= mysqli_fetch_array($result); // I use fetching array to get the username of the accounts
                                                
                                                    while($rowValidate= mysqli_fetch_array($result)) {
                                                    echo '<option   value=\"'.$rowValidate[0].'">'.$rowValidate[0].'</option>';
                                                    }
                                                    echo "</select>";
                                                ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Channel Details</label>
                                            <select class="form-select" name="v_channel_name" aria-label="Default select example">;
                                                <?php
                                                    $sql1= "SELECT v_channel_name FROM channel_admin";

                                                    $result1= $conn->query($sql1);
                                                    $rowValidate1= mysqli_fetch_array($result1); // I use fetching array to get the username of the accounts
                                                
                                                    while($rowValidate1= mysqli_fetch_array($result1)) {
                                                    echo '<option   value=\"'.$rowValidate1[0].'">'.$rowValidate1[0].'</option>';
                                                    }
                                                    echo "</select>";
                                                ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Time Details</label>
                                            <select class="form-select" name="time" aria-label="Default select example">;
                                                <?php
                                                    $sql= "SELECT i_time_dis FROM admin_time";

                                                    $result= $conn->query($sql);
                                                    $rowValidate= mysqli_fetch_array($result); // I use fetching array to get the username of the accounts
                                                
                                                    while($rowValidate= mysqli_fetch_array($result)) {
                                                    echo '<option   value="'.$rowValidate[0].'">'.$rowValidate[0].'</option>';
                                                    }
                                                    echo "</select>";
                                                ?>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Message Request</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="v_message" rows="3"></textarea>
                                        </div>
                                         <button type="submit" name="add_request" class="btn btn-success">Add Request</button>
                                       
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    Request Submitted
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category Name</th>
                                                    <th>Channel Name</th>
                                                    <th>Time</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i=0;
                                            while ($results = mysqli_fetch_array($sqlRequest)) { 
                                                $i++;    
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <!-- <td> <?php echo $results['i_id'] ?></td> -->
                                                    <th scope="row"><?=$i?></th>
                                                    <td> <?php echo $results['v_category_name'] ?></td>
                                                    <td> <?php echo $results['v_channel_name'] ?></td>
                                                    <td> <?php echo $results['time'] ?></td>
                                                    <td> <?php echo $results['status'] ?></td>
                                                </tr>                                              
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- approved and deny table
                             -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Requested List
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category Name</th>
                                                    <th>Channel Name</th>
                                                    <th>Status</th>
                                                    <th>Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $i=0;
                                            while ($results = mysqli_fetch_array($sqlRequestList)) { 
                                                $i++;    
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <!-- <td> <?php echo $results['i_id'] ?></td> -->
                                                    <th scope="row"><?=$i?></th>
                                                    <td> <?php echo $results['v_category_name'] ?></td>
                                                    <td> <?php echo $results['v_channel_name'] ?></td>
                                                    <td> <?php echo $results['status'] ?></td>
                                                    <td> <?php echo $results['time'] ?></td>
                                                    <td><a href="assets/view.php?id=<?=$results['i_id']?>" 
                                                            class="btn btn-primary"><?php $res_id= $results['i_id'] ?>View</a></td> <!-- i create res_id to pass the id -->
                                                </tr>                                              
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    


    <br><br><br><br><br><br><br><br><br>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        
   


   <?php include "footer.php"; ?>
 
</body>
</html>
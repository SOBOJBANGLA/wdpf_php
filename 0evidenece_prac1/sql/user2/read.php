<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    require_once "connect.php";

    $read = $conn->query("SELECT * FROM st_info");
    $num = 1; //maintain serial
    ?>
  <div class="container">
  <table class="table table-striped">
        <thead>
            <tr style="text-align: center;">
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Birth</th>
                <th>District</th>
                <th>Subject</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php while($output = $read->fetch_object()){ //: ?>
                <tr style="text-align: center;">
                    <td><?php echo $num //$output->id ;?></td>
                    <td><?php echo "<img src='$output->image' style='height:60px;width: 80px'> ";?></td>
                    <td><?php echo $output->name ;?></td>
                    <td><?php echo $output->gender ;?></td>
                    <td><?php echo $output->address ;?></td>
                    <td><?php echo $output->birth ;?></td>
                    <td><?php echo $output->district ;?></td>
                    <td><?php echo $output->subject ;?></td>
                    <td><a class="btn btn-info" href="edit.php?idn=<?php echo$output->id;?>& nm=<?php echo$output->name;?>& ad=<?php echo$output->address;?> & br=<?php echo$output->birth;?> "><span class="glyphicon glyphicon-edit">Edit</span></a></td>
                    <td><a class="btn btn-danger" href="delete.php?idn=<?php echo$output->id;?>& nm=<?php echo$output->name;?>& ad=<?php echo$output->address;?> & br=<?php echo$output->birth;?> " onclick="return confirm('Are you sure to delete')"><span class="glyphicon glyphicon-trash">Delete</a></td>
                    <td><a class="btn btn-info" href="insert.php?idn=<?php echo$output->id;?>& nm=<?php echo$output->name;?> & gn=<?php echo$output->gender;?> & ad=<?php echo$output->address;?> & br=<?php echo$output->birth;?> & dt=<?php echo$output->district;?> & sb=<?php echo$output->subject;?>">New</a></td>
                </tr>
                <?php $num++; } //endwhile; ?>

        </tbody>
    </table>

  </div>
    
</body>
</html>
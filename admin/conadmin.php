<?php
include_once("conn.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
  $(document).ready(function()
  {
      $("#se").keyup(function(){
      
      $("#here").show();
      var x=$(this).val();
      $.ajax({
        
          type:'POST',
          url:"fetch.php",
          data:'q='+x,
          success: function(data)
          {
            $("#here").html(data);
          },
        }); 
    });   
    });
</script>
</head>

<body>
<hr>
<?php
  //if(isset($_SESSION['user_session']))
  {
?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Insert Account Detail</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="acount_details.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter first name" name="fname">
            </div>
            
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter last Name" name="lname">
            </div>
            
            <div class="form-group">
            <input type="text" class="form-control" placeholder="contact number" name="cntact_no">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="email id" name="email">
            </div>
            
            
            <div class="form-group">
            <button type="submit"class="btn btn-success" >
                  SAVE
                </button>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


        </div>
    </div>
</div>
<br><br>
<h3 class="text-center">
  <?php 
    if(isset($_GET['msg']))
      echo $_GET['msg'];
  ?>
</h3>
<br>
<div class="container">
    <div class="panel panel-primary">
          <div class="panel-heading">
              <h3>WELCOME
              
          <a href="logout.php"><button type="button" class="btn btn-danger pull-right">LOG OUT</button></a>
          </h3>
            </div>
            <div class="panel-body">
            
              <table class="table table-hover">
    <thead>
      <tr>
        
        <th>NAME</th>
        <th>EMAIL</th>
        
        <th>MOBILE NO.</th>
        <th>MESSAGE</th>
  
      
      </tr>
    </thead>
    <tbody id="here">
  <?php
    $qry="select * from cont_acnt";
    $sql=mysqli_query($con,$qry);
  while($row=mysqli_fetch_assoc($sql))
  {
  
  ?>
      <tr >
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['mob'] ?></td>
        <td><?php echo $row['msgg'] ?></td>
      </tr>
 
 <?php
  }
 ?>    
    </tbody>
  </table>
            </div>
            <div class="panel-footer">
            </div> 
        </div>
</div>  
<?php
  }
  //else
   // header('location:index.php?msg=Log In First');
?>
</body>
</html>

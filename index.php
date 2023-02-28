<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<title>Prospect</title>
</head>

<body>
    <section id ="nav" style="color:white;background-color:#1b49e0;text-align:center;padding:10px;margin-bottom:20px;">
        <h1>DIGIBOXX<br></h1>
    </section>
  
  <section class="content">
  <div class="row ms-5">

            <div class="col-md-5">
                <div class="card card-outline card-warning" style='border-top: 5px solid #ffc107;'>
                    <div class="card-header">
                      <h3 class="card-title">Prospect Status</h3>
                    </div> 

                    <div class="card-body">

                        <form class="form form-floating" id="form" autocomplete="off" action="<?php echo base_url('Prospect/store') ?>" method="post">

                            <input type="text" name="status" id="ControlInput1" class="form-control">
                            <p><?php echo form_error('status')?></p>
                            <input type="hidden" name="creator" id="creator">
                            <h5 style="margin-top:20px;float:right">
                                <input type="submit" class="btn btn-primary submit" name ="submit" value="Submit">
                                <input type="reset" class="btn btn-secondary" name ="cancel" value="Cancel">
                            </h5>   

                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-11">
                <div class="card" style='border-top: 5px solid #ffc107; margin-top:20px'>
                    <div class="card-outline card-warning">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of all Prospect</h3>
                    </div>

                    <div class="card-body">
                        
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Edit</td>
                                <td>Prospect Status</td>
                                <td>Created By</td>
                                <td>Created Date</td>                                
                            </tr>
                        </thead>
                            
                        <tbody>
                            <?php  
                                foreach($this->model->fetch() as $row){ 
                            
                            ?>
                            <tr>
                                            <td><a href="<?php echo base_url('Prospect/edit/'.$row->id) ?>"><input type='submit' class='btn btn-outline-warning' value='Edit' ></td>  
                                             
                                            <td><?php echo $row->status?></td>  
                                            <td><?php echo $row->creator?></td>  
                                            <td><?php echo $row->date?></td>  
                                        
                                        
                                        </tr>
                               <?php } ?>  
                        

                        </tbody>
                        </div>
  </div>
  </section>


  <!-- Bootstrap js cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" ></script>
    <!-- datatables js cdn -->
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <!-- datatables js function -->

    <script>
        $(document).ready( function () 
    {
        $('.table').DataTable();
    } );
    </script>

    <!-- jQuery Ajax -->
    <script>
            $(document).ready( function () 
    {
        $('.submit').on('click',function()
        {
            // event.preventDefault();

            // alert("Data Submitted");
            $.ajax({
                url:"<?php echo base_url('Prospect/store') ?>",
                alert ("Data");
                // dataType:"JSON",
                // sucess:function (data) {
                //     alert('Data')
                // }
            })


            //     confirmDialog=confirm("Data Inserted Sucessfully.")
            // if(confirmDialog)
            
                // $.ajax({
                //     url  : ,
                //     data:$('.form').serialize(),
                //     type:"post",
                //     datatype:'json',
                //     success : function (response) {
                //         alert('Sucessfully Inserted');
                //     }

                // })
            }

            );
    });

    </script>



</body>
</html>
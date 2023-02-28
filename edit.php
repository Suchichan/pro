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
        <h1><span>DIGIBOXX<br></h1>
    </section>
  
  <section class="content">
  <div class="row ms-5">

            <div class="col-md-5">
                <div class="card card-outline card-warning" style='border-top: 5px solid #ffc107;'>
                    <div class="card-header">
                      <h3 class="card-title">Prospect Status</h3>
                    </div> 

                    <div class="card-body">
                    <?php if($error=$this->session->flashdata('status')):






                        <form action="<?php echo base_url('Prospect/update/').$status->id?>" autocomplete= "off" method="post" class="form form-floating">



                            <input type="text" name="status" id="ControlInput1" class="form-control" value="<?php echo $status->status ?>">
                            <p><?php echo form_error('status')?></p>
                            <input type="hidden" name="creator" id="creator">

                            
                            <h5 style="margin-top:20px;float:right">
                                <input type="submit" class="btn btn-primary" name ="submit" value="Submit">
                                <a href="<?php echo base_url()?>"><button  class="btn btn-danger" name ="cancel">Cancel</a>
                            </h5>

                        </form>
                    </div>
                </div>
            </div>
</div>
</body>
</html>
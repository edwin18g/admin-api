<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Private</a></li>
    <li><a href="#">Pictures</a></li>
    <li class="active">Vacation</li>        
  </ol>
<!-- Main content -->
  <div class="col-md-12 form f-label">
  <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  <?php } ?>
    <!-- Profile Image -->
  
    <div class="box box-success pad-profile">
     	<div class="box-header with-border">
        
              <h2 class="hidden-xs">Hi!  Welcome .... <?php echo isset($this->session->userdata('user_details')[0]->name)?$this->session->userdata('user_details')[0]->name:'';?></h2>

  


      </div>
        <ul class="list-inline">
    <li class="text-center"><a href=""><img src="https://cdn3.iconfinder.com/data/icons/iconka-buddy-set/128/priest_128.png" class="media-object" ><h5>Priest</span></h5></a> </li>
        <li class="text-center"> <img src="https://cdn2.iconfinder.com/data/icons/iconslandgps/PNG/128x128/Places/CatholicTemple.png" class="media-object" ><h5>Parish</span></h5></li>
            <li class="text-center"> <img src="https://cdn3.iconfinder.com/data/icons/iconka-buddy-set/128/priest_128.png" class="media-object" ><h5>Priest</span></h5></li>
                <li class="text-center"> <img src="https://cdn3.iconfinder.com/data/icons/iconka-buddy-set/128/priest_128.png" class="media-object" ><h5>Priest</span></h5></li>
                    <li class="text-center"> <img src="https://cdn3.iconfinder.com/data/icons/iconka-buddy-set/128/priest_128.png" class="media-object" ><h5>Priest</span></h5></li>
                        <li class="text-center"> <img src="https://cdn3.iconfinder.com/data/icons/iconka-buddy-set/128/priest_128.png" class="media-object" ><h5>Priest</span></h5></li>
  </ul>
     

                        
      <!-- /.box -->
    </div>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->
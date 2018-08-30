<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Dashboard</a></li>
    
  </ol>
<!-- Main content -->
  <div class="col-md-12 form f-label">
  <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  <?php } ?>
    <!-- Profile Image -->
  <div class="clearfix"></div>
    <div class="box box-success pad-profile with-border">
    <div class="clearfix"></div>
        
              <h2 class="hidden-xs">Hi!  Welcome .... <?php echo isset($this->session->userdata('user_details')[0]->name)?$this->session->userdata('user_details')[0]->name:'';?></h2>

  


      
        <ul class="list-inline">
    <li class="text-center dash-block col-sm-3">
        <a href="<?php echo base_url('priests');?>" >
      <div class="">
      <div class="media dash-media">
  <div class="media-left">
    <img src="http://4.bp.blogspot.com/-CiBrlthg3V4/TuNxJRmZ1_I/AAAAAAAAJXE/DY-Ez3RxqUE/s400/Bishop%2BPaprocki.jpg" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h2 class="media-heading">141</h2>
    <h4>Priests</h4>
  </div>
</div>
      
      </div> </a></li>
      <li class="text-center dash-block col-sm-3">
        <a href="<?php echo '#';?>" >
      <div class="">
      <div class="media dash-media">
  <div class="media-left">
    <img src="http://www.majodi.org/v4/images/thumbnails/images/parish/StMaryAyerS.jpg" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h2 class="media-heading">120</h2>
    <h4>Churches</h4>
  </div>
</div>
      
      </div> </a></li>
      <li class="text-center dash-block col-sm-3">
        <a href="<?php echo base_url('user/gallery');;?>" >
      <div class="">
      <div class="media dash-media">
  <div class="media-left">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxM8jmirZGc4woptPdJUmsYCNynrvMdWw2g1WoELebsP0KRXwI" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h2 class="media-heading">120</h2>
    <h4>Gallery</h4>
  </div>
</div>
      
      </div> </a></li>
  </ul>
     

                        
      <!-- /.box -->
    </div>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->
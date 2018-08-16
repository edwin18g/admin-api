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
    <li class="text-center">
      <div class="col-sm-3">
      <div class="media dash-media">
  <div class="media-left">
    <img src="http://4.bp.blogspot.com/-CiBrlthg3V4/TuNxJRmZ1_I/AAAAAAAAJXE/DY-Ez3RxqUE/s400/Bishop%2BPaprocki.jpg" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h2 class="media-heading">120</h2>
    <h4>Priests</h4>
  </div>
</div>
      
      </div> </li>
  </ul>
     

                        
      <!-- /.box -->
    </div>
    <!-- /.content -->
  </div>
</div>
<!-- /.content-wrapper -->
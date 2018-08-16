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
    <div class="listWrap">
    
    <ul class="list">
    
        <li>
            <span>ID</span>
            <span>Name</span>
            <span>Logins</span>
            <span>Role</span>
            <span>Actions</span>
            <span></span>
        </li>
        <li>
            <span>23</span>
            <span>Harry Giles</span>
            <span>4341</span>
            <span><span class="label label-warning">Manager</span></span>
            <span>
                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Edit</button>
                    <button type="button" class="btn btn-default" disabled>Delete</button>
                </div>
            </span>
            <span></span>
        </li>
        <li>
            <span>543</span>
            <span>Susan Crown</span>
            <span>10032</span>
            <span><span class="label label-default">Guest</span></span>
            <span>
                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Edit</button>
                    <button type="button" class="btn btn-default" disabled>Delete</button>
                </div>
            </span>
            <span></span>
        </li>
        <li>
            <span>43</span>
            <span>Barry Smith</span>
            <span>91</span>
            <span><span class="label label-primary">Engineer</span></span>
            <span>
                <div class="btn-group btn-group-xs" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Edit</button>
                    <button type="button" class="btn btn-default" disabled>Delete</button>
                </div>
            </span>
            <span></span>
        </li>
        <li>

        </li>
    </ul>

</div>

    </div>
    
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

    <div class="text-center"> <button type="button" class="btn btn-default" onclick="more_priest()">More</button></div>

</div>

    </div>
  </div>
  </div>
    
  <script>

        var base_url      = '<?php echo base_url();?>'; 
      var priestList      = <?php echo json_encode($priestList); ?>;
      var offset          = <?php echo $offset;?>;
      var listSelect      = $('.list');
      console.log(priestList);
      $( document ).ready(function() 
      {
        init();
        });
        function more_priest()
        {

        }
        
      function init()
      {
        listSelect.empty();
        listSelect.html(priestrender(priestList));
        
      }

      function ajax_load()
      {
        $.ajax({
  method: "POST",
  url: base_url+'user/priest_ajax',
  data: { enddata: offset},
  success:function(res){
      alert(res);
    listSelect.append(priestrender(res.priestList));
  }
});
      }

      function priestrender(priestList)
      {
          var rhtml = '';
          
        $.each( priestList, function( i, priest  ) {
          rhtml  += ` <li>
            <span><img src="http://www.kuzhithuraidiocese.com/images/diocesepriest/`+priest.priestid+`.jpg" class="img-responsive" alt="Cinque Terre"></span>
            <span>`+priest.pname+`</span>
            <span>4341</span>
            <span><span class="label label-warning">Manager</span></span>
            <span>
            <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
    <span class="glyphicon glyphicon-collapse-down"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
     
    </ul>
  </div>
            </span>
            <span></span>
        </li>`      
});   
return rhtml;

      }


      </script>

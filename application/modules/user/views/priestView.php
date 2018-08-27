<style>
.list-priest img{
    width: 70px;
    border-radius: 50px;
}
.list li:nth-child(even),.list li:nth-child(odd){
    font-size:22px !important:

}
</style>
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #9c27b0;
    color: white;
    padding: 5px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper clearfix">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Private</a></li>
    <li><a href="#">Pictures</a></li>
    <li class="active">Vacation</li>        
  </ol>
  <div class="col-md-12"> 
    <span class="col-md-4"> 
        <input class="form-control" id="searchkeyPirest" type="text" placeholder="Search..">
    </span>
    <span>
    <div class="dropdown">
  <button class="dropbtn">All priest</button>
  <div class="dropdown-content">
  <a href="#">
    All Priest</a>
    <a href="#">Other Diocese Priests</a>
    <a href="#">Diocese Priests </a>
  </div>
</div>
   </span><span></span> </div>
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
    
    <ul class="list list-priest">
    
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

    <div class="text-center more-priest-block"> <button type="button" class="btn btn-default" onclick="more_priest()">More</button></div>

</div>

    </div>
  </div>
  </div>
    
  <script>

        var base_url      = '<?php echo base_url();?>'; 
      var priestList      = <?php echo json_encode($priestList); ?>;
      var offset          = <?php echo $offset;?>;
      var searchKey       = '';
      var listSelect      = $('.list');
     
      console.log(priestList);
      $( document ).ready(function() 
      {
        init();
        });

        $('#searchkeyPirest').on('keyup',function () {
    var searchValue = $(this).val();
    console.log("rund");
    setTimeout(function(){
        if(searchValue == $('#searchkeyPirest').val() && searchValue != null && searchValue != "") {
            listSelect.empty();
        listSelect.html('<li></li>')     
        offset = 0;    
        ajax_load();
        }
        else if(searchValue == ''){
           // logic to load all the data
        }
    },300);
});
        function more_priest()
        {
            searchKey = $('#searchkeyPirest').val();
            ajax_load();
        }
        
      function init()
      {
        listSelect.empty();
        listSelect.html('<li></li>')
        listSelect.append(priestrender(priestList));
        searchKey = $('#searchkeyPirest').val();
        
      }

      function ajax_load()
      {
        $.ajax({
  method: "POST",
  url: base_url+'user/priest_ajax',
  data: { enddata: offset,search:searchKey},
  success:function(res){
        var priestTemp =$.parseJSON(res);
        
        offset = priestTemp['offset'];
        if(priestTemp['offset'] == priestTemp['priestList_count'])
        {
$('.more-priest-block').hide();
        }
    listSelect.append(priestrender(priestTemp['priestList']));
   
  }
});
      }
      function imgError(image) {
    image.onerror = "";
    image.src = "http://i2.wp.com/www.4motiondarlington.org/wp-content/uploads/2013/06/No-image-found.jpg";
    return true;
}

      function priestrender(priestList)
      {
          var rhtml = '';
          
        $.each( priestList, function( i, priest  ) {
          rhtml  += ` <li>
            <span><img src="http://www.kuzhithuraidiocese.com/images/diocesepriest/`+priest.priestid+`.jpg" class="img-responsive" onerror="imgError(this);" alt="Cinque Terre"></span>
            <span>`+priest.pname+`</span>
            <span>4341</span>
            <span></span>
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

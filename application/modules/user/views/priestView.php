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

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 100000; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #9c27b0;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 5px;
    background-color: #9c27b0;
    color: white;
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

   </span><span><button class="dropbtn" id="AddPriest">Add Priest</button></span><span id="priestCount">   </span> </div>
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
            loadding.....
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
      var priestList_count = <?php echo $priestList_count?>;
     
      console.log(priestList);
      $( document ).ready(function() 
      {
        init();
        });

        $('#searchkeyPirest').on('keyup',function () {
    var searchValue = $(this).val();
    searchKey = searchValue;
    console.log("rund");
    setTimeout(function(){
        if(searchValue == $('#searchkeyPirest').val() && searchValue != null && searchValue != "") {
            listSelect.empty();
        listSelect.html('<li></li>')     
        offset = 0;    
        ajax_load();
        }
        else if(searchValue == ''){
            init();
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
        $('#priestCount').html('showing :' + offset + ' / ' + priestList_count);
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
        $('#priestCount').html('showing :' +priestTemp['offset']+' / ' +priestTemp['priestList_count']);
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
            <span><a href="`+base_url+`f/`+priest.slug+`"><img src="http://www.kuzhithuraidiocese.com/images/diocesepriest/`+priest.priestid+`.jpg" class="img-responsive" onerror="imgError(this);" alt="Cinque Terre"></a></span>
            <span><a href="`+base_url+`f/`+priest.slug+`">`+priest.pname+`</a></span>
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
      <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Add priest</h2>
  </div>
  <div class="modal-body">
  <form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
  </div>
  <div class="modal-footer">
    <h3>Modal Footer</h3>
  </div>
</div>

</div>

      <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("AddPriest");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


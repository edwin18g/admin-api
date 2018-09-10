<style>
.twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    
    width: 100%; // orginal twitter width: 290px;
}
.twPc-bg {
    background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 120px;
    width: 100%;
}
.twPc-block {
    display: block !important;
}
.twPc-button {
    margin: -35px -10px 0;
    text-align: right;
    width: 100%;
}
.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -30px 5px 0 8px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 95px;
    width: 95px;
}
.twPc-divUser {
    margin: 63px 0 0;
}
.twPc-divName {
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.twPc-divName a {
    color: inherit !important;
}
.twPc-divStats {
    margin-left: 11px;
    padding: 10px 0;
}
.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0;
    vertical-align: top;
}
.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}
.twPc-StatValue {
    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-StatLabel {
    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
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
  
<!-- Main content -->
  <div class="col-md-12 form f-label">
  <?php if($this->session->flashdata("messagePr")){?>
    <div class="alert alert-info">      
      <?php echo $this->session->flashdata("messagePr")?>
    </div>
  <?php } ?>
    <!-- Profile Image -->
   
    <div class="box box-success pad-profile">
    
   <!-- code start -->
<div class="twPc-div">
    <a class="twPc-bg twPc-block"></a>

	<div>
		<div class="twPc-button">
            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
            <a href="#" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">follow</a>
           
            <!-- Twitter Button -->   
		</div>

		<a title="<?php echo $priestDetials->pname;?>" href="#" class="twPc-avatarLink">
			<img alt="<?php echo $priestDetials->pname;?>" src="http://www.kuzhithuraidiocese.com/images/diocesepriest/<?php echo $priestDetials->priestid;?>.jpg" class="twPc-avatarImg">
		</a>

		<div class="twPc-divUser">
			<div class="twPc-divName">
				<a href="#"><?php echo $priestDetials->pname;?></a>
			</div>
			<span>
				<a href="#">@<span><?php echo $priestDetials->pname;?></span></a>
			</span>
		</div>

		<div class="twPc-divStats">
			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					<a href="#" title="9.840 Tweet">
						<span class="twPc-StatLabel twPc-block">Tweets</span>
						<span class="twPc-StatValue">9.840</span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="#" title="885 Following">
						<span class="twPc-StatLabel twPc-block">Following</span>
						<span class="twPc-StatValue">885</span>
					</a>
				</li>
				<li class="twPc-ArrangeSizeFit">
					<a href="#" title="1.810 Followers">
						<span class="twPc-StatLabel twPc-block">Followers</span>
						<span class="twPc-StatValue">1.810</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- code end -->

    </div>
  </div>
  </div>
    
  


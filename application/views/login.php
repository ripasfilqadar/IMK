<html>
	<head>
		<title>Moment</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/semantic.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/main.css">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/icon.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/usefull.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/components/form.css">
		

		<script type="text/javascript" src="<?php echo base_url()?>assets/css/semantic.js"></script> 
	</head>

<body>
		<div class="ui large menu">
		  <div class="ui grid">
		        <div class="ui inverted fixed menu navbar page grid">
		            <a href="" class="brand item"><b>Moment</b></a> 
		                <div class="right menu">
		                <form action="<?php echo base_url()?>login/masuk" method="POST">
							<div class="ui simple dropdown item">
							
								Log In
		      					<i class="dropdown icon"></i>
		      					<div class="menu">
		        					<div class="ui two column middle aligned relaxed fitted stackable grid">
		  								<div class="column" id="lala">
		    								<div class="ui form segment" >
		      									<div class="field">
			        								<div class="ui left icon input">
														<input type="text" placeholder="Username" name="name">
														<i class="user icon"></i>
													</div>
		      									</div>
												<div class="field">
													<div class="ui left icon input">
														<input type="password" placeholder="Password" name="password">
														<i class="lock icon"></i>
											        </div>
												</div>
												<div  ><button type="submit" class="ui blue button" style="width:100%"> Login</button></div>
												<p><a href="">Lupa Password?</a></p>
		      								<!-- <div class="ui blue button" width=100%>Login</div>
		      								<a href="">Lupa Password?</a> -->
		    								</div>
		  								</div>
		  							</div>
		    					</div>
		                </div>
		                </form>
		            </div>
		        </div>
			</div>
		</div>
<div class="ui two column centered grid" style="margin: 50px 10px 10px 10px;">
    <div class="column"></div>
    <div class="four column centered row">
      <div class="column">
      
<div class="ui items" >
  <div class="item">
    
    <div class="content">
      <section class="header"><h2>Welcome to Moment</h2></section>
      <div class="description">
        <p><b>Moment</b> adalah suatu aplikasi berbasis web yang akan membantu Anda untuk mampu mengelola kondisi keuangan anda dengan baik. </p>
        <p>Beberapa keunggulan Moment dibandingkan aplikasi lain adalah: </p>
        <p class="header"><h3><i class="world icon"></i>Luas Digunakan</h2></p>
        <p class="header"><h3><i class="money icon"></i>Hemat Biaya</h3></p>
        <p class="header"><h3><i class="calculator icon"></i>Perhitungan Akurat</h3></p>
        <p class="header"><h3><i class="child icon"></i>User Friendly</h3></p>
      </div>
    </div>
  </div>
</div>      </div>
        <div class="ui vertical divider">
    
  		</div>
      <div class="column">
      <!-- form -->

<form class="ui large segment form" action="<?php echo base_url()?>login/register" method="post">
<!-- <div class="ui large segment form"> -->
	  <h2 class="ui dividing header">Sign Up</h2>
  <!-- <div class="two fields"> -->
    <div class="required field">
		<p><label>Username</label>
		<input type="text" name="username" ></p>
		
		<p><label>Email Address</label>
		<input type="email" name="mail" ></p>

		<p><label>Password</label>
		<input type="password" name="password"></p>
        
    <!-- </div> -->
    
  <!-- </div> -->
 
  <div class="ui error message">
    <div class="header">We noticed some issues</div>
  </div>
  <button class="ui submit button">Register</button>
</div>

</form>

      <!-- form -->


      </div>
    </div>
  </div>



<section class="main footer" >
	<nav>
			<p>Moment | Your Money Management</p>
			</nav>
		</section>

<?php
if (isset($flagdaftar))
{
	if ($flagdaftar==1)
	{
		unset($flagdaftar);
		echo "<script>alert('pendaftaran berhasil')</script>";
		
		$flagdaftar=NULL;
	}
	else if ($flagdaftar==0)
	{
		echo "<script>alert('pendaftaran gagal')</script>";
	}
}
?>

	</body>
</html>
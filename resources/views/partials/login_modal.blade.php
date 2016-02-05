

<div class="modal fade" id="login-modal">
	{!! Form::open(array('action' => 'UsersController@postLoginModal', 'class'=>'','role'=>"form",'id'=>'login-form-1')) !!}
	  <div class="modal-dialog" style="width: 75%">
	    <div class="modal-content">
	      	<div class="modal-header" style="background-color: #288FB2;">
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      	</div>
	      <div class="modal-body">

	        <div class="top-content">
	        	
	            <div class="inner-bg">
	                <div class="container">
	                	
	                    <div class="row">
	                        <div class="col-sm-5">
	                        	
	                        	<div class="form-box">
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Login to our site</h3>
		                            		<p>Enter username and password to log on:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-key"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
					                    <form role="form" action="" method="post" class="login-form">
					                    	<div class="form-group">
					                    		<label class="sr-only" for="form-username">Username</label>
					                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
					                        </div>
					                        <div class="form-group">
					                        	<label class="sr-only" for="form-password">Password</label>
					                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
					                        </div>
					                        <button type="submit" class="btn">Sign in!</button>
					                    </form>
				                    </div>
			                    </div>
			                
			                	<div class="social-login">
		                        	<h3>...or login with:</h3>
		                        	<div class="social-login-buttons">
			                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
			                        		<i class="fa fa-facebook"></i>  Facebook
			                        	</a>
			                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
			                        		<i class="fa fa-twitter"></i> Twitter
			                        	</a>
			                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
			                        		<i class="fa fa-google-plus"></i> Google Plus
			                        	</a>
		                        	</div>
		                        </div>
		                        
	                        </div>
	                        
	                        <div class="col-sm-1 middle-border"></div>
	                        <div class="col-sm-1"></div>
	                        	
	                        <div class="col-sm-5">
	                        	
	                        	<div class="form-box">
	                        		<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Sign up now</h3>
		                            		<p>Fill in the form below to get instant access:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-pencil"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
					                    <form role="form" action="" method="post" class="registration-form">
					                        <div class="form-group">
					                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
					                        </div>
					                        <div class="form-group">
					                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
					                        </div>
					                        <div class="form-group has-error">
					                        	<input type="password" name="password-again" placeholder="Password Again..." class="form-password form-control" id="form-password">
					                        	<span class="error-feedback">Not Matched</span>
					                        </div>
					                        <button type="submit" class="btn">Sign me up!</button>
					                    </form>
				                    </div>
	                        	</div>
	                        	
	                        </div>
	                    </div>
	                    
	                </div>
	            </div>
	            
	        </div>

	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	{!! Form::close() !!}
</div><!-- /.modal -->
<?php include "include/forms_header.php" ?>
<?php include "include/forms_nav.php" ?>


						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Italy</span>
																			<ul class="dropdown">
																				<li><a class="deutsch">France</a></li>
																				<li><a class="english"> Italy</a></li>
																				<li><a class="espana">Brazil</a></li>
																				<li><a class="russian">Usa</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">

																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>


													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3>
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div>
														</li>
													</ul>
										</li>

							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div>
										</li>
									</ul>
							</li>
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>
											</div>

											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div>
										</li>
									</ul>
							</li>
							<div class="clearfix"></div>
								</ul>
							</div>
							<div class="clearfix"></div>
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

						<!-- //header-ends -->
							<!--//outer-wp-->
								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.php">Home</a></li>
															<li class="active">Forms</li>
														</ol>
											</div>
											<!--/sub-heard-part-->
												<!--/forms-->
													<div class="forms-main">
														<h2 class="inner-tittle">Basic Form </h2>
															<div class="graph-form">
																	<div class="form-body">
																		<form> <div class="form-group"> <label for="exampleInputEmail1">Email address</label> <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> </div> <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div> <div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile"> <p class="help-block">Example block-level help text here.</p> </div> <div class="checkbox"> <label> <input type="checkbox"> Check me out </label> </div> <button type="submit" class="btn btn-default">Submit</button> </form>
																	</div>

															</div>
																<!--/forms-inner-->
													  				<div class="forms-inner">
																	  <!--/set-1-->
																		<div class="set-1">
																			<div class="col-md-6 graph-2">
																				<h3 class="inner-tittle two">Horizontal form  </h3>
																					<div class="grid-1">
																							<div class="form-body">
																										<form class="form-horizontal"> <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Email</label> <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> </div> </div> <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Password</label> <div class="col-sm-9"> <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> </div> </div> <div class="form-group"> <div class="col-sm-offset-2 col-sm-10"> <div class="checkbox"> <label> <input type="checkbox"> Remember me </label> </div> </div> </div> <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Sign in</button> </div> </form>
																							</div>

																					</div>
																				</div>
																				<div class="col-md-6 graph-2 second">
																					<h3 class="inner-tittle two">Inline Form </h3>
																							<div class="grid-1">
																								<div class="form-body">
																									<div data-example-id="simple-form-inline"> <form class="form-inline"> <div class="form-group"> <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div> <div class="form-group"> <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> </div> <div class="checkbox"> <label> <input type="checkbox"> Remember me </label> </div> <button type="submit" class="btn btn-default">Sign in</button> </form> </div>
																								</div>
																							 </div>
																					</div>
																				 <div class="clearfix"> </div>
																			</div>
																			 <!--//set-1-->
																			  <!--/set-2-->
																		<div class="set-1">
																			<div class="graph-2 general">
																				<h3 class="inner-tittle two">General Form  </h3>
																					<div class="grid-1">
																							<div class="form-body">
																									<form class="form-horizontal">
																										<div class="form-group">
																											<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
																											</div>
																											<div class="col-sm-2">
																												<p class="help-block">Your help text!</p>
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
																											<div class="col-sm-8">
																												<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="inputPassword" class="col-sm-2 control-label">Password</label>
																											<div class="col-sm-8">
																												<input type="password" class="form-control1" id="inputPassword" placeholder="Password">
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
																												<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
																											<div class="col-sm-8">
																												<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
																												<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
																											<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
																												<option>Lorem ipsum dolor sit amet.</option>
																												<option>Dolore, ab unde modi est!</option>
																												<option>Illum, fuga minus sit eaque.</option>
																												<option>Consequatur ducimus maiores voluptatum minima.</option>
																											</select></div>
																										</div>
																										<div class="form-group">
																											<label class="col-sm-2 control-label">Multiple Select</label>
																											<div class="col-sm-8">
																												<select multiple="" class="form-control1">
																													<option>Option 1</option>
																													<option>Option 2</option>
																													<option>Option 3</option>
																													<option>Option 4</option>
																													<option>Option 5</option>
																												</select>
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
																											<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
																										</div>
																										<div class="form-group">
																											<label for="radio" class="col-sm-2 control-label">Radio</label>
																											<div class="col-sm-8">
																												<div class="radio block"><label><input type="radio"> Unchecked</label></div>
																												<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
																												<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
																												<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
																											<div class="col-sm-8">
																												<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
																												<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
																												<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
																												<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
																											</div>
																										</div>
																										<div class="form-group">
																											<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
																											</div>
																										</div>
																										<div class="form-group mb-n">
																											<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
																											<div class="col-sm-8">
																												<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
																											</div>
																										</div>
																									</form>
																							</div>

																					</div>
																				</div>
																			</div>
																			 <!--//set-2-->
																			 <!--/set-3-->
																			 <div class="set-3">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two">General Form  </h3>
																						<div class="grid-1">
																						   <form class="form-horizontal">
																									<div class="form-group">
																										<label class="col-md-2 control-label">Email Address</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input type="text" class="form-control1 icon" placeholder="Email Address">
																											</div>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Password</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<span class="input-group-addon">
																													<i class="fa fa-key"></i>
																												</span>
																												<input type="password" class="form-control1 icon" id="exampleInputPassword1" placeholder="Password">
																											</div>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Email Address</label>
																										<div class="col-md-8">
																											<div class="input-group input-icon right">
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input id="email" class="form-control1 icon" type="text" placeholder="Email Address">
																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">With tooltip</p>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Password</label>
																										<div class="col-md-8">
																											<div class="input-group input-icon right">
																												<span class="input-group-addon">
																													<i class="fa fa-key"></i>
																												</span>
																												<input type="password" class="form-control1 icon" placeholder="Password">
																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">With tooltip</p>
																										</div>
																									</div>
																									<div class="form-group has-success">
																										<label class="col-md-2 control-label">Input Addon Success</label>
																										<div class="col-md-8">
																											<div class="input-group input-icon right">
																												<span class="input-group-addon">
																													<i class="fa fa-envelope-o"></i>
																												</span>
																												<input id="email" class="form-control1 icon" type="text" placeholder="Email Address">
																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">Email is valid!</p>
																										</div>
																									</div>
																									<div class="form-group has-error">
																										<label class="col-md-2 control-label">Input Addon Error</label>
																										<div class="col-md-8">
																											<div class="input-group input-icon right">
																												<span class="input-group-addon">
																													<i class="fa fa-key"></i>
																												</span>
																												<input type="password" class="form-control1 icon" placeholder="Password">
																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">Error!</p>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Checkbox Addon</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<div class="input-group-addon"><input type="checkbox"></div>
																												<input type="text" class="form-control1 icon">
																											</div>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Checkbox Addon</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<input type="text" class="form-control1 icon">
																												<div class="input-group-addon"><input type="checkbox"></div>

																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">Checkbox on right</p>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Radio Addon</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<div class="input-group-addon"><input type="radio"></div>
																												<input type="text" class="form-control1 icon">
																											</div>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Radio Addon</label>
																										<div class="col-md-8">
																											<div class="input-group">
																												<input type="text" class="form-control1 icon">
																												<div class="input-group-addon"><input type="radio"></div>

																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">Radio on right</p>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Input Processing</label>
																										<div class="col-md-8">
																											<div class="input-icon right spinner">
																												<i class="fa fa-fw fa-spin fa-spinner"></i>
																												<input id="email" class="form-control1 icon" type="text" placeholder="Processing...">
																											</div>
																										</div>
																										<div class="col-sm-2">
																											<p class="help-block">Processing right</p>
																										</div>
																									</div>
																									<div class="form-group">
																										<label class="col-md-2 control-label">Static Paragraph</label>
																										<div class="col-md-8">
																											<p class="form-control1 m-n">email@example.com</p>
																										</div>
																									</div>
																									<div class="form-group mb-n">
																										<label class="col-md-2 control-label">Read Only</label>
																										<div class="col-md-8">
																											<input type="text" class="form-control1 icon" placeholder="Readonly" readonly="">
																										</div>
																									</div>
																								</form>
																						</div>
																				</div>
																			</div>
																			<!--//set-3-->
																			<!--/set-4-->
																			 <div class="set-4">
																				<div class="graph-2 general">
																					<h3 class="inner-tittle two">General Form  </h3>
																						<div class="grid-1">
																						    <div class="forms">

																											<div data-example-id="form-validation-states-with-icons"> <form> <div class="form-group has-success has-feedback"> <label class="control-label" for="inputSuccess2">Input with success</label> <input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status"> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputSuccess2Status" class="sr-only">(success)</span> </div> <div class="form-group has-warning has-feedback"> <label class="control-label" for="inputWarning2">Input with warning</label> <input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status"> <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span> <span id="inputWarning2Status" class="sr-only">(warning)</span> </div> <div class="form-group has-error has-feedback"> <label class="control-label" for="inputError2">Input with error</label> <input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status"> <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span> <span id="inputError2Status" class="sr-only">(error)</span> </div> <div class="form-group has-success has-feedback"> <label class="control-label" for="inputGroupSuccess1">Input group with success</label> <div class="input-group"> <span class="input-group-addon">@</span> <input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"> </div> <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span> <span id="inputGroupSuccess1Status" class="sr-only">(success)</span> </div> </form> </div>
																									</div>
																						</div>
																				</div>
																			</div>
																		   <!--//set-4-->
																		</div>
																	<!--//forms-inner-->
																</div>
														<!--//forms-->
												</div>
											<!--//outer-wp-->
                      <?php include "include/forms_footer.php" ?>
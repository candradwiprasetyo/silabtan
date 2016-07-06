<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png" type="image/png">

		<title>Bracket Responsive Bootstrap3 Admin</title>

		<link rel="stylesheet" href="css/style.default.css" />

		<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="css/jquery.tagsinput.css" />
		<link rel="stylesheet" href="css/colorpicker.css" />
		<link rel="stylesheet" href="css/dropzone.css" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<i class="fa fa-spinner fa-spin"></i>
			</div>
		</div>

		<section>

			<div class="leftpanel">

				<div class="logopanel">
					<h1><span>[</span> bracket <span>]</span></h1>
				</div><!-- logopanel -->

				<div class="leftpanelinner">

					<!-- This is only visible to small devices -->
					<div class="visible-xs hidden-sm hidden-md hidden-lg">
						<div class="media userlogged">
							<img alt="" src="images/photos/loggeduser.png" class="media-object">
							<div class="media-body">
								<h4>John Doe</h4>
								<span>"Life is so..."</span>
							</div>
						</div>

						<h5 class="sidebartitle actitle">Account</h5>
						<ul class="nav nav-pills nav-stacked nav-bracket mb30">
							<li>
								<a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a>
							</li>
							<li>
								<a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a>
							</li>
							<li>
								<a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a>
							</li>
							<li>
								<a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a>
							</li>
						</ul>
					</div>

					<h5 class="sidebartitle">Navigation</h5>
					<ul class="nav nav-pills nav-stacked nav-bracket">
						<li>
							<a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="email.html"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a>
						</li>
						<li class="nav-parent nav-active active">
							<a href=""><i class="fa fa-edit"></i> <span>Forms</span></a>
							<ul class="children" style="display: block;">
								<li class="active">
									<a href="general-forms.html"><i class="fa fa-caret-right"></i> General Forms</a>
								</li>
								<li>
									<a href="form-layouts.html"><i class="fa fa-caret-right"></i> Form Layouts</a>
								</li>
								<li>
									<a href="form-validation.html"><i class="fa fa-caret-right"></i> Form Validation</a>
								</li>
								<li>
									<a href="form-wizards.html"><i class="fa fa-caret-right"></i> Form Wizards</a>
								</li>
								<li>
									<a href="wysiwyg.html"><span class="pull-right badge badge-danger">updated</span><i class="fa fa-caret-right"></i> Text Editor</a>
								</li>
								<li>
									<a href="code-editor.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Code Editor</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a href=""><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
							<ul class="children">
								<li>
									<a href="buttons.html"><i class="fa fa-caret-right"></i> Buttons</a>
								</li>
								<li>
									<a href="icons.html"><i class="fa fa-caret-right"></i> Icons</a>
								</li>
								<li>
									<a href="typography.html"><i class="fa fa-caret-right"></i> Typography</a>
								</li>
								<li>
									<a href="alerts.html"><i class="fa fa-caret-right"></i> Alerts &amp; Notifications</a>
								</li>
								<li>
									<a href="modals.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Modals</a>
								</li>
								<li>
									<a href="tabs-accordions.html"><i class="fa fa-caret-right"></i> Tabs &amp; Accordions</a>
								</li>
								<li>
									<a href="sliders.html"><i class="fa fa-caret-right"></i> Sliders</a>
								</li>
								<li>
									<a href="graphs.html"><i class="fa fa-caret-right"></i> Graphs &amp; Charts</a>
								</li>
								<li>
									<a href="widgets.html"><span class="pull-right badge badge-danger">updated</span><i class="fa fa-caret-right"></i> Panels &amp; Widgets</a>
								</li>
								<li>
									<a href="extras.html"><i class="fa fa-caret-right"></i> Extras</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="tables.html"><i class="fa fa-th-list"></i> <span>Tables</span></a>
						</li>
						<li>
							<a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
						</li>
						<li class="nav-parent">
							<a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
							<ul class="children">
								<li>
									<a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a>
								</li>
								<li>
									<a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a>
								</li>
								<li>
									<a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a>
								</li>
								<li>
									<a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a>
								</li>
								<li>
									<a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a>
								</li>
								<li>
									<a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a>
								</li>
								<li>
									<a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a>
								</li>
								<li>
									<a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a>
								</li>
								<li>
									<a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a>
								</li>
								<li>
									<a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a>
								</li>
								<li>
									<a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a>
								</li>
								<li>
									<a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a>
								</li>
								<li>
									<a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a>
								</li>
								<li>
									<a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a>
								</li>
							</ul>
						</li>
						<li class="nav-parent">
							<a href="layouts.html"><i class="fa fa-laptop"></i> <span>Skins &amp; Layouts</span></a>
							<ul class="children">
								<li>
									<a href="layouts.html"><i class="fa fa-caret-right"></i> General Layouts</a>
								</li>
								<li>
									<a href="horizontal-menu.html"><i class="fa fa-caret-right"></i> Top Menu</a>
								</li>
								<li>
									<a href="horizontal-menu2.html"><i class="fa fa-caret-right"></i> Top Menu w/ Sidebar</a>
								</li>
								<li>
									<a href="fixed-width.html"><i class="fa fa-caret-right"></i> Fixed Width Page</a>
								</li>
								<li>
									<a href="fixed-width2.html"><span class="pull-right badge badge-info">new</span><i class="fa fa-caret-right"></i> Fixed Width w/ Menu</a>
								</li>
							</ul>
						</li>
					</ul>

					<div class="infosummary">
						<h5 class="sidebartitle">Information Summary</h5>
						<ul>
							<li>
								<div class="datainfo">
									<span class="text-muted">Daily Traffic</span>
									<h4>630, 201</h4>
								</div>
								<div id="sidebar-chart" class="chart"></div>
							</li>
							<li>
								<div class="datainfo">
									<span class="text-muted">Average Users</span>
									<h4>1, 332, 801</h4>
								</div>
								<div id="sidebar-chart2" class="chart"></div>
							</li>
							<li>
								<div class="datainfo">
									<span class="text-muted">Disk Usage</span>
									<h4>82.2%</h4>
								</div>
								<div id="sidebar-chart3" class="chart"></div>
							</li>
							<li>
								<div class="datainfo">
									<span class="text-muted">CPU Usage</span>
									<h4>140.05 - 32</h4>
								</div>
								<div id="sidebar-chart4" class="chart"></div>
							</li>
							<li>
								<div class="datainfo">
									<span class="text-muted">Memory Usage</span>
									<h4>32.2%</h4>
								</div>
								<div id="sidebar-chart5" class="chart"></div>
							</li>
						</ul>
					</div><!-- infosummary -->

				</div><!-- leftpanelinner -->
			</div><!-- leftpanel -->

			<div class="mainpanel">

				<div class="headerbar">

					<a class="menutoggle"><i class="fa fa-bars"></i></a>

					<form class="searchform" action="index.html" method="post">
						<input type="text" class="form-control" name="keyword" placeholder="Search here..." />
					</form>

					<div class="header-right">
						<ul class="headermenu">
							<li>
								<div class="btn-group">
									<button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
										<i class="glyphicon glyphicon-user"></i>
										<span class="badge">2</span>
									</button>
									<div class="dropdown-menu dropdown-menu-head pull-right">
										<h5 class="title">2 Newly Registered Users</h5>
										<ul class="dropdown-list user-list">
											<li class="new">
												<div class="thumb">
													<a href=""><img src="images/photos/user1.png" alt="" /></a>
												</div>
												<div class="desc">
													<h5><a href="">Draniem Daamul (@draniem)</a><span class="badge badge-success">new</span></h5>
												</div>
											</li>
											<li class="new">
												<div class="thumb">
													<a href=""><img src="images/photos/user2.png" alt="" /></a>
												</div>
												<div class="desc">
													<h5><a href="">Zaham Sindilmaca (@zaham)</a><span class="badge badge-success">new</span></h5>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href=""><img src="images/photos/user3.png" alt="" /></a>
												</div>
												<div class="desc">
													<h5><a href="">Weno Carasbong (@wenocar)</a></h5>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href=""><img src="images/photos/user4.png" alt="" /></a>
												</div>
												<div class="desc">
													<h5><a href="">Nusja Nawancali (@nusja)</a></h5>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href=""><img src="images/photos/user5.png" alt="" /></a>
												</div>
												<div class="desc">
													<h5><a href="">Lane Kitmari (@lane_kitmare)</a></h5>
												</div>
											</li>
											<li class="new">
												<a href="">See All Users</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="btn-group">
									<button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
										<i class="glyphicon glyphicon-envelope"></i>
										<span class="badge">1</span>
									</button>
									<div class="dropdown-menu dropdown-menu-head pull-right">
										<h5 class="title">You Have 1 New Message</h5>
										<ul class="dropdown-list gen-list">
											<li class="new">
												<a href=""> <span class="thumb"><img src="images/photos/user1.png" alt="" /></span> <span class="desc"> <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a>
											</li>
											<li>
												<a href=""> <span class="thumb"><img src="images/photos/user2.png" alt="" /></span> <span class="desc"> <span class="name">Nusja Nawancali</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a>
											</li>
											<li>
												<a href=""> <span class="thumb"><img src="images/photos/user3.png" alt="" /></span> <span class="desc"> <span class="name">Weno Carasbong</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a>
											</li>
											<li>
												<a href=""> <span class="thumb"><img src="images/photos/user4.png" alt="" /></span> <span class="desc"> <span class="name">Zaham Sindilmaca</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a>
											</li>
											<li>
												<a href=""> <span class="thumb"><img src="images/photos/user5.png" alt="" /></span> <span class="desc"> <span class="name">Veno Leongal</span> <span class="msg">Lorem ipsum dolor sit amet...</span> </span> </a>
											</li>
											<li class="new">
												<a href="">Read All Messages</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="btn-group">
									<button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
										<i class="glyphicon glyphicon-globe"></i>
										<span class="badge">5</span>
									</button>
									<div class="dropdown-menu dropdown-menu-head pull-right">
										<h5 class="title">You Have 5 New Notifications</h5>
										<ul class="dropdown-list gen-list">
											<li class="new">
												<a href=""> <span class="thumb"><img src="images/photos/user4.png" alt="" /></span> <span class="desc"> <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span> <span class="msg">is now following you</span> </span> </a>
											</li>
											<li class="new">
												<a href=""> <span class="thumb"><img src="images/photos/user5.png" alt="" /></span> <span class="desc"> <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span> <span class="msg">is now following you</span> </span> </a>
											</li>
											<li class="new">
												<a href=""> <span class="thumb"><img src="images/photos/user3.png" alt="" /></span> <span class="desc"> <span class="name">Veno Leongal <span class="badge badge-success">new</span></span> <span class="msg">likes your recent status</span> </span> </a>
											</li>
											<li class="new">
												<a href=""> <span class="thumb"><img src="images/photos/user3.png" alt="" /></span> <span class="desc"> <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span> <span class="msg">downloaded your work</span> </span> </a>
											</li>
											<li class="new">
												<a href=""> <span class="thumb"><img src="images/photos/user3.png" alt="" /></span> <span class="desc"> <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span> <span class="msg">send you 2 messages</span> </span> </a>
											</li>
											<li class="new">
												<a href="">See All Notifications</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li>
								<div class="btn-group">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										<img src="images/photos/loggeduser.png" alt="" />
										John Doe
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-usermenu pull-right">
										<li>
											<a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a>
										</li>
										<li>
											<a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a>
										</li>
										<li>
											<a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a>
										</li>
										<li>
											<a href="signin.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<button id="chatview" class="btn btn-default tp-icon chat-icon">
									<i class="glyphicon glyphicon-comment"></i>
								</button>
							</li>
						</ul>
					</div><!-- header-right -->

				</div><!-- headerbar -->

				<div class="pageheader">
					<h2><i class="fa fa-edit"></i> General Forms <span>Subtitle goes here...</span></h2>
					<div class="breadcrumb-wrapper">
						<span class="label">You are here:</span>
						<ol class="breadcrumb">
							<li>
								<a href="index.html">Bracket</a>
							</li>
							<li>
								<a href="general-forms.html">Forms</a>
							</li>
							<li class="active">
								General Forms
							</li>
						</ol>
					</div>
				</div>

				<div class="contentpanel">

					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-btns">
								<a href="" class="panel-close">&times;</a>
								<a href="" class="minimize">&minus;</a>
							</div>
							<h4 class="panel-title">Input Fields</h4>
							<p>
								Individual form controls automatically receive some global styling. All textual elements with <code>
									.form-control</code>
								are set to width: 100%; by default. Wrap labels and controls in <code>
									.form-group</code>
								for optimum spacing.
							</p>
						</div>
						<div class="panel-body panel-body-nopadding">

							<form class="form-horizontal form-bordered">

								<div class="form-group">
									<label class="col-sm-3 control-label">Default Input</label>
									<div class="col-sm-6">
										<input type="text" placeholder="Default Input" class="form-control" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label" for="disabledinput">Disabled Input</label>
									<div class="col-sm-6">
										<input type="text" placeholder="Disabled Input" id="disabledinput" class="form-control" disabled="" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label" for="readonlyinput">Read-Only Input</label>
									<div class="col-sm-6">
										<input type="text" value="Read Only Input" id="readonlyinput" class="form-control" readonly="readonly" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Help Text</label>
									<div class="col-sm-6">
										<input type="text" placeholder="Help Text" class="form-control">
										<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Input w/ Tooltip</label>
									<div class="col-sm-6">
										<input type="text" placeholder="Hover me" title="Tooltip goes here" data-toggle="tooltip" data-trigger="hover" class="form-control tooltips" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Input w/ Popover</label>
									<div class="col-sm-6">
										<input type="text" placeholder="Click Me" class="form-control popovers" data-toggle="popover" data-placement="top" data-original-title="The Title" data-content="Content goes here..." data-trigger="click" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Placeholder</label>
									<div class="col-sm-6">
										<input type="text" placeholder="This is a placeholder" class="form-control">
									</div>
								</div>

								<div class="form-group has-success">
									<label class="col-sm-3 control-label">Input with success</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group has-warning">
									<label class="col-sm-3 control-label">Input with warning</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group has-error">
									<label class="col-sm-3 control-label">Input with error</label>
									<div class="col-sm-6">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Column sizing</label>
									<div class="col-sm-4">
										<input type="text" placeholder=".col-sm-4" class="form-control">
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder=".col-sm-3" class="form-control">
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder=".col-sm-2" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Input Sizing</label>
									<div class="col-sm-5">
										<input type="text" placeholder=".input-sm" class="form-control input-sm mb15">
										<input type="text" placeholder="default" class="form-control mb15">
										<input type="text" placeholder=".input-lg" class="form-control input-lg">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Input Tags</label>
									<div class="col-sm-7">
										<input name="tags" id="tags" class="form-control" value="foo,bar,baz" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Textarea</label>
									<div class="col-sm-7">
										<textarea class="form-control" rows="5"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Autogrow Textarea</label>
									<div class="col-sm-7">
										<textarea id="autoResizeTA" class="form-control" rows="5"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Radio</label>
									<div class="col-sm-6">
										<div class="radio">
											<label>
												<input type="radio">
												Unchecked</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" checked="">
												Checked</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" disabled="">
												Disabled Unchecked</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" checked="" disabled="">
												Disabled Checked</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label" for="checkbox">Checkbox</label>
									<div class="col-sm-6">
										<div class="checkbox block">
											<label>
												<input type="checkbox">
												Unchecked</label>
										</div>
										<div class="checkbox block">
											<label>
												<input type="checkbox" checked="">
												Checked</label>
										</div>
										<div class="checkbox block">
											<label>
												<input type="checkbox" disabled="">
												Disabled Unchecked</label>
										</div>
										<div class="checkbox block">
											<label>
												<input type="checkbox" checked="" disabled="">
												Disabled Checked</label>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">File Upload</label>
									<div class="col-sm-6">
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="input-append">
												<div class="uneditable-input">
													<i class="glyphicon glyphicon-file fileupload-exists"></i>
													<span class="fileupload-preview"></span>
												</div>
												<span class="btn btn-default btn-file"> <span class="fileupload-new">Select file</span> <span class="fileupload-exists">Change</span>
													<input type="file" />
												</span>
												<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Spinner</label>
									<div class="col-sm-9">
										<input type="text" id="spinner" />
										<span class="help-block">Enhance a text input for entering numeric values, with up/down buttons and arrow key handling.</span>
									</div>
								</div>

							</form>

						</div><!-- panel-body -->

						<div class="panel-footer">
							<div class="row">
								<div class="col-sm-6 col-sm-offset-3">
									<button class="btn btn-primary">
										Submit
									</button>
									&nbsp;
									<button class="btn btn-default">
										Cancel
									</button>
								</div>
							</div>
						</div><!-- panel-footer -->

					</div><!-- panel -->

					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-btns">
								<a href="" class="panel-close">&times;</a>
								<a href="" class="minimize">&minus;</a>
							</div>
							<h4 class="panel-title">Input Groups</h4>
							<p>
								Extend form controls by adding text or buttons before, after, or on both sides of any text-based input. Use <code>
									.input-group</code>
								with an <code>
									.input-group-addon</code>
								to prepend or append elements to a <code>
									.form-control</code>
								.
							</p>
						</div>
						<div class="panel-body panel-body-nopadding">
							<form method="get" class="form-horizontal form-bordered">

								<div class="form-group">
									<label class="col-sm-3 control-label">Basic examples</label>
									<div class="col-sm-6">
										<div class="input-group mb15">
											<span class="input-group-addon">@</span>
											<input type="text" placeholder="Username" class="form-control" />
										</div>

										<div class="input-group mb15">
											<input type="text" class="form-control" />
											<span class="input-group-addon">.00</span>
										</div>

										<div class="input-group">
											<span class="input-group-addon">$</span>
											<input type="text" class="form-control" />
											<span class="input-group-addon">.00</span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Sizing</label>
									<div class="col-sm-6">
										<div class="input-group input-group-lg mb15">
											<span class="input-group-addon">@</span>
											<input type="text" placeholder="Username" class="form-control" />
										</div>

										<div class="input-group mb15">
											<span class="input-group-addon">@</span>
											<input type="text" placeholder="Username" class="form-control" />
										</div>

										<div class="input-group input-group-sm">
											<span class="input-group-addon">@</span>
											<input type="text" placeholder="Username" class="form-control" />
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Checkbox &amp; Radio</label>
									<div class="col-sm-6">

										<div class="input-group mb15">
											<span class="input-group-addon">
												<input type="checkbox" />
											</span>
											<input type="text" class="form-control" />
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<input type="radio" />
											</span>
											<input type="text" class="form-control" />
										</div>

									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Button addons</label>
									<div class="col-sm-6">

										<div class="input-group mb15">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default">
													Go!
												</button> </span>
											<input type="text" class="form-control" />
										</div>

										<div class="input-group mb15">
											<input type="text" class="form-control" />
											<span class="input-group-btn">
												<button type="button" class="btn btn-default">
													Go!
												</button> </span>
										</div>

										<div class="input-group mb15">
											<div class="input-group-btn">
												<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">Action</a>
													</li>
													<li>
														<a href="#">Another action</a>
													</li>
													<li>
														<a href="#">Something else here</a>
													</li>
													<li class="divider"></li>
													<li>
														<a href="#">Separated link</a>
													</li>
												</ul>
											</div>
											<input type="text" class="form-control" />
										</div>

										<div class="input-group">
											<input type="text" class="form-control" />
											<div class="input-group-btn">
												<button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="#">Action</a>
													</li>
													<li>
														<a href="#">Another action</a>
													</li>
													<li>
														<a href="#">Something else here</a>
													</li>
													<li class="divider"></li>
													<li>
														<a href="#">Separated link</a>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Segmented buttons</label>
									<div class="col-sm-6">

										<div class="input-group mb15">
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" tabindex="-1">
													Action
												</button>
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li>
														<a href="#">Action</a>
													</li>
													<li>
														<a href="#">Another action</a>
													</li>
													<li>
														<a href="#">Something else here</a>
													</li>
													<li class="divider"></li>
													<li>
														<a href="#">Separated link</a>
													</li>
												</ul>
											</div>
											<input type="text" class="form-control" />
										</div>

										<div class="input-group">
											<input type="text" class="form-control" />
											<div class="input-group-btn">
												<button type="button" class="btn btn-default" tabindex="-1">
													Action
												</button>
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu pull-right" role="menu">
													<li>
														<a href="#">Action</a>
													</li>
													<li>
														<a href="#">Another action</a>
													</li>
													<li>
														<a href="#">Something else here</a>
													</li>
													<li class="divider"></li>
													<li>
														<a href="#">Separated link</a>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>

							</form>

						</div><!-- panel-body -->
					</div><!-- panel -->

					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-btns">
								<a href="" class="panel-close">&times;</a>
								<a href="" class="minimize">&minus;</a>
							</div>
							<h4 class="panel-title">Select Fields</h4>
						</div>
						<div class="panel-body panel-body-nopadding">
							<form class="form-horizontal form-bordered">
								<div class="form-group">
									<label class="col-sm-3 control-label">Select Sizing</label>
									<div class="col-sm-5">
										<select class="form-control input-sm mb15">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
										</select>
										<select class="form-control mb15">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
										</select>
										<select class="form-control input-lg">
											<option>Option 1</option>
											<option>Option 2</option>
											<option>Option 3</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Chosen Select</label>
									<div class="col-sm-5">
										<select class="form-control chosen-select" data-placeholder="Choose a Country...">
											<option value=""></option>
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
											<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curacao">Curacao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Territories">French Southern Territories</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-bissau">Guinea-bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											<option value="Korea, Republic of">Korea, Republic of</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macao">Macao</option>
											<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											<option value="Moldova, Republic of">Moldova, Republic of</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russian Federation">Russian Federation</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Barthelemy">Saint Barthelemy</option>
											<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Martin (French part)">Saint Martin (French part)</option>
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="South Sudan">South Sudan</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="Taiwan, Province of China">Taiwan, Province of China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-leste">Timor-leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
											<option value="Viet Nam">Viet Nam</option>
											<option value="Virgin Islands, British">Virgin Islands, British</option>
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											<option value="Wallis and Futuna">Wallis and Futuna</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Chosen Multiple Select</label>
									<div class="col-sm-5">
										<select class="chosen-select" multiple data-placeholder="Choose a Country...">
											<option value=""></option>
											<option value="United States">United States</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="Afghanistan">Afghanistan</option>
											<option value="Aland Islands">Aland Islands</option>
											<option value="Albania">Albania</option>
											<option value="Algeria">Algeria</option>
											<option value="American Samoa">American Samoa</option>
											<option value="Andorra">Andorra</option>
											<option value="Angola">Angola</option>
											<option value="Anguilla">Anguilla</option>
											<option value="Antarctica">Antarctica</option>
											<option value="Antigua and Barbuda">Antigua and Barbuda</option>
											<option value="Argentina">Argentina</option>
											<option value="Armenia">Armenia</option>
											<option value="Aruba">Aruba</option>
											<option value="Australia">Australia</option>
											<option value="Austria">Austria</option>
											<option value="Azerbaijan">Azerbaijan</option>
											<option value="Bahamas">Bahamas</option>
											<option value="Bahrain">Bahrain</option>
											<option value="Bangladesh">Bangladesh</option>
											<option value="Barbados">Barbados</option>
											<option value="Belarus">Belarus</option>
											<option value="Belgium">Belgium</option>
											<option value="Belize">Belize</option>
											<option value="Benin">Benin</option>
											<option value="Bermuda">Bermuda</option>
											<option value="Bhutan">Bhutan</option>
											<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
											<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
											<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
											<option value="Botswana">Botswana</option>
											<option value="Bouvet Island">Bouvet Island</option>
											<option value="Brazil">Brazil</option>
											<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
											<option value="Brunei Darussalam">Brunei Darussalam</option>
											<option value="Bulgaria">Bulgaria</option>
											<option value="Burkina Faso">Burkina Faso</option>
											<option value="Burundi">Burundi</option>
											<option value="Cambodia">Cambodia</option>
											<option value="Cameroon">Cameroon</option>
											<option value="Canada">Canada</option>
											<option value="Cape Verde">Cape Verde</option>
											<option value="Cayman Islands">Cayman Islands</option>
											<option value="Central African Republic">Central African Republic</option>
											<option value="Chad">Chad</option>
											<option value="Chile">Chile</option>
											<option value="China">China</option>
											<option value="Christmas Island">Christmas Island</option>
											<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
											<option value="Colombia">Colombia</option>
											<option value="Comoros">Comoros</option>
											<option value="Congo">Congo</option>
											<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
											<option value="Cook Islands">Cook Islands</option>
											<option value="Costa Rica">Costa Rica</option>
											<option value="Cote D'ivoire">Cote D'ivoire</option>
											<option value="Croatia">Croatia</option>
											<option value="Cuba">Cuba</option>
											<option value="Curacao">Curacao</option>
											<option value="Cyprus">Cyprus</option>
											<option value="Czech Republic">Czech Republic</option>
											<option value="Denmark">Denmark</option>
											<option value="Djibouti">Djibouti</option>
											<option value="Dominica">Dominica</option>
											<option value="Dominican Republic">Dominican Republic</option>
											<option value="Ecuador">Ecuador</option>
											<option value="Egypt">Egypt</option>
											<option value="El Salvador">El Salvador</option>
											<option value="Equatorial Guinea">Equatorial Guinea</option>
											<option value="Eritrea">Eritrea</option>
											<option value="Estonia">Estonia</option>
											<option value="Ethiopia">Ethiopia</option>
											<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
											<option value="Faroe Islands">Faroe Islands</option>
											<option value="Fiji">Fiji</option>
											<option value="Finland">Finland</option>
											<option value="France">France</option>
											<option value="French Guiana">French Guiana</option>
											<option value="French Polynesia">French Polynesia</option>
											<option value="French Southern Territories">French Southern Territories</option>
											<option value="Gabon">Gabon</option>
											<option value="Gambia">Gambia</option>
											<option value="Georgia">Georgia</option>
											<option value="Germany">Germany</option>
											<option value="Ghana">Ghana</option>
											<option value="Gibraltar">Gibraltar</option>
											<option value="Greece">Greece</option>
											<option value="Greenland">Greenland</option>
											<option value="Grenada">Grenada</option>
											<option value="Guadeloupe">Guadeloupe</option>
											<option value="Guam">Guam</option>
											<option value="Guatemala">Guatemala</option>
											<option value="Guernsey">Guernsey</option>
											<option value="Guinea">Guinea</option>
											<option value="Guinea-bissau">Guinea-bissau</option>
											<option value="Guyana">Guyana</option>
											<option value="Haiti">Haiti</option>
											<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
											<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
											<option value="Honduras">Honduras</option>
											<option value="Hong Kong">Hong Kong</option>
											<option value="Hungary">Hungary</option>
											<option value="Iceland">Iceland</option>
											<option value="India">India</option>
											<option value="Indonesia">Indonesia</option>
											<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
											<option value="Iraq">Iraq</option>
											<option value="Ireland">Ireland</option>
											<option value="Isle of Man">Isle of Man</option>
											<option value="Israel">Israel</option>
											<option value="Italy">Italy</option>
											<option value="Jamaica">Jamaica</option>
											<option value="Japan">Japan</option>
											<option value="Jersey">Jersey</option>
											<option value="Jordan">Jordan</option>
											<option value="Kazakhstan">Kazakhstan</option>
											<option value="Kenya">Kenya</option>
											<option value="Kiribati">Kiribati</option>
											<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
											<option value="Korea, Republic of">Korea, Republic of</option>
											<option value="Kuwait">Kuwait</option>
											<option value="Kyrgyzstan">Kyrgyzstan</option>
											<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
											<option value="Latvia">Latvia</option>
											<option value="Lebanon">Lebanon</option>
											<option value="Lesotho">Lesotho</option>
											<option value="Liberia">Liberia</option>
											<option value="Libya">Libya</option>
											<option value="Liechtenstein">Liechtenstein</option>
											<option value="Lithuania">Lithuania</option>
											<option value="Luxembourg">Luxembourg</option>
											<option value="Macao">Macao</option>
											<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
											<option value="Madagascar">Madagascar</option>
											<option value="Malawi">Malawi</option>
											<option value="Malaysia">Malaysia</option>
											<option value="Maldives">Maldives</option>
											<option value="Mali">Mali</option>
											<option value="Malta">Malta</option>
											<option value="Marshall Islands">Marshall Islands</option>
											<option value="Martinique">Martinique</option>
											<option value="Mauritania">Mauritania</option>
											<option value="Mauritius">Mauritius</option>
											<option value="Mayotte">Mayotte</option>
											<option value="Mexico">Mexico</option>
											<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
											<option value="Moldova, Republic of">Moldova, Republic of</option>
											<option value="Monaco">Monaco</option>
											<option value="Mongolia">Mongolia</option>
											<option value="Montenegro">Montenegro</option>
											<option value="Montserrat">Montserrat</option>
											<option value="Morocco">Morocco</option>
											<option value="Mozambique">Mozambique</option>
											<option value="Myanmar">Myanmar</option>
											<option value="Namibia">Namibia</option>
											<option value="Nauru">Nauru</option>
											<option value="Nepal">Nepal</option>
											<option value="Netherlands">Netherlands</option>
											<option value="New Caledonia">New Caledonia</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Nicaragua">Nicaragua</option>
											<option value="Niger">Niger</option>
											<option value="Nigeria">Nigeria</option>
											<option value="Niue">Niue</option>
											<option value="Norfolk Island">Norfolk Island</option>
											<option value="Northern Mariana Islands">Northern Mariana Islands</option>
											<option value="Norway">Norway</option>
											<option value="Oman">Oman</option>
											<option value="Pakistan">Pakistan</option>
											<option value="Palau">Palau</option>
											<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
											<option value="Panama">Panama</option>
											<option value="Papua New Guinea">Papua New Guinea</option>
											<option value="Paraguay">Paraguay</option>
											<option value="Peru">Peru</option>
											<option value="Philippines">Philippines</option>
											<option value="Pitcairn">Pitcairn</option>
											<option value="Poland">Poland</option>
											<option value="Portugal">Portugal</option>
											<option value="Puerto Rico">Puerto Rico</option>
											<option value="Qatar">Qatar</option>
											<option value="Reunion">Reunion</option>
											<option value="Romania">Romania</option>
											<option value="Russian Federation">Russian Federation</option>
											<option value="Rwanda">Rwanda</option>
											<option value="Saint Barthelemy">Saint Barthelemy</option>
											<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
											<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
											<option value="Saint Lucia">Saint Lucia</option>
											<option value="Saint Martin (French part)">Saint Martin (French part)</option>
											<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
											<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
											<option value="Samoa">Samoa</option>
											<option value="San Marino">San Marino</option>
											<option value="Sao Tome and Principe">Sao Tome and Principe</option>
											<option value="Saudi Arabia">Saudi Arabia</option>
											<option value="Senegal">Senegal</option>
											<option value="Serbia">Serbia</option>
											<option value="Seychelles">Seychelles</option>
											<option value="Sierra Leone">Sierra Leone</option>
											<option value="Singapore">Singapore</option>
											<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
											<option value="Slovakia">Slovakia</option>
											<option value="Slovenia">Slovenia</option>
											<option value="Solomon Islands">Solomon Islands</option>
											<option value="Somalia">Somalia</option>
											<option value="South Africa">South Africa</option>
											<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
											<option value="South Sudan">South Sudan</option>
											<option value="Spain">Spain</option>
											<option value="Sri Lanka">Sri Lanka</option>
											<option value="Sudan">Sudan</option>
											<option value="Suriname">Suriname</option>
											<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
											<option value="Swaziland">Swaziland</option>
											<option value="Sweden">Sweden</option>
											<option value="Switzerland">Switzerland</option>
											<option value="Syrian Arab Republic">Syrian Arab Republic</option>
											<option value="Taiwan, Province of China">Taiwan, Province of China</option>
											<option value="Tajikistan">Tajikistan</option>
											<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
											<option value="Thailand">Thailand</option>
											<option value="Timor-leste">Timor-leste</option>
											<option value="Togo">Togo</option>
											<option value="Tokelau">Tokelau</option>
											<option value="Tonga">Tonga</option>
											<option value="Trinidad and Tobago">Trinidad and Tobago</option>
											<option value="Tunisia">Tunisia</option>
											<option value="Turkey">Turkey</option>
											<option value="Turkmenistan">Turkmenistan</option>
											<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
											<option value="Tuvalu">Tuvalu</option>
											<option value="Uganda">Uganda</option>
											<option value="Ukraine">Ukraine</option>
											<option value="United Arab Emirates">United Arab Emirates</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
											<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
											<option value="Uruguay">Uruguay</option>
											<option value="Uzbekistan">Uzbekistan</option>
											<option value="Vanuatu">Vanuatu</option>
											<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
											<option value="Viet Nam">Viet Nam</option>
											<option value="Virgin Islands, British">Virgin Islands, British</option>
											<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
											<option value="Wallis and Futuna">Wallis and Futuna</option>
											<option value="Western Sahara">Western Sahara</option>
											<option value="Yemen">Yemen</option>
											<option value="Zambia">Zambia</option>
											<option value="Zimbabwe">Zimbabwe</option>
										</select>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-btns">
										<a href="" class="panel-close">&times;</a>
										<a href="" class="minimize">&minus;</a>
									</div>
									<h4 class="panel-title">Toggle Switches</h4>
								</div>
								<div class="panel-body">

									<form class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-5 control-label">Default Switch</label>
											<div class="col-sm-7 control-label">
												<div class="toggle toggle-default"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-5 control-label">Primary Switch</label>
											<div class="col-sm-7 control-label">
												<div class="toggle toggle-primary"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-5 control-label">Success Switch</label>
											<div class="col-sm-7 control-label">
												<div class="toggle toggle-success"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-5 control-label">Warning Switch</label>
											<div class="col-sm-7 control-label">
												<div class="toggle toggle-warning"></div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-5 control-label">Danger Switch</label>
											<div class="col-sm-7 control-label">
												<div class="toggle toggle-danger"></div>
											</div>
										</div>

									</form>
								</div><!-- panel-body -->
							</div><!-- panel -->
						</div><!-- col-md-6 -->

						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-btns">
										<a href="" class="panel-close">&times;</a>
										<a href="" class="minimize">&minus;</a>
									</div>
									<h4 class="panel-title">Enhanced Checkboxes and Radios</h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6">
											<div class="ckbox ckbox-default">
												<input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
												<label for="checkboxDefault">Checkbox Default</label>
											</div>

											<div class="ckbox ckbox-primary">
												<input type="checkbox" value="1" id="checkboxPrimary" checked="checked" />
												<label for="checkboxPrimary">Checkbox Primary</label>
											</div>

											<div class="ckbox ckbox-warning">
												<input type="checkbox" id="checkboxWarning" checked="checked" />
												<label for="checkboxWarning">Checkbox Warning</label>
											</div>

											<div class="ckbox ckbox-success">
												<input type="checkbox" id="checkboxSuccess" checked="checked" />
												<label for="checkboxSuccess">Checkbox Success</label>
											</div>

											<div class="ckbox ckbox-danger">
												<input type="checkbox" id="checkboxDanger" checked="checked" />
												<label for="checkboxDanger">Checkbox Danger</label>
											</div>

											<div class="ckbox ckbox-default">
												<input type="checkbox" id="checkboxDisabled" disabled="disabled" />
												<label for="checkboxDisabled">Checkbox Disabled</label>
											</div>

										</div><!-- col-md-6 -->

										<div class="col-md-6">
											<div class="rdio rdio-default">
												<input type="radio" name="radio" id="radioDefault" value="1" checked="checked" />
												<label for="radioDefault">Radio Default</label>
											</div>

											<div class="rdio rdio-primary">
												<input type="radio" name="radio" value="2" id="radioPrimary" />
												<label for="radioPrimary">Radio Primary</label>
											</div>

											<div class="rdio rdio-warning">
												<input type="radio" name="radio" value="3" id="radioWarning" />
												<label for="radioWarning">Radio Warning</label>
											</div>

											<div class="rdio rdio-success">
												<input type="radio" name="radio" value="4" id="radioSuccess" />
												<label for="radioSuccess">Radio Success</label>
											</div>

											<div class="rdio rdio-danger">
												<input type="radio" name="radio" value="5" id="radioDanger" />
												<label for="radioDanger">Radio Danger</label>
											</div>

											<div class="rdio rdio-default">
												<input type="radio" name="radio" value="6" disabled="disabled" id="radioDisabled" />
												<label for="radioDisabled">Radio Disabled</label>
											</div>
										</div>

									</div><!-- row -->
								</div><!-- panel-body -->
							</div><!-- panel -->
						</div><!-- col-md-6 -->
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-btns">
										<a href="" class="panel-close">&times;</a>
										<a href="" class="minimize">&minus;</a>
									</div>
									<h4 class="panel-title">Time Picker</h4>
								</div>
								<div class="panel-body">
									<p>
										Easily select a time for a text input using your mouse or keyboards arrow keys.
									</p>
									<br />
									<label>Default Time Picker</label>
									<div class="input-group mb15">
										<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
										<div class="bootstrap-timepicker">
											<input id="timepicker" type="text" class="form-control"/>
										</div>
									</div>

									<label>24 Hour Mode Time Picker</label>
									<div class="input-group mb15">
										<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
										<div class="bootstrap-timepicker">
											<input id="timepicker2" type="text" class="form-control"/>
										</div>
									</div>

									<label>Specify a step for the minute field</label>
									<div class="input-group mb15">
										<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
										<div class="bootstrap-timepicker">
											<input id="timepicker3" type="text" class="form-control"/>
										</div>
									</div>

								</div>
							</div><!-- panel -->
						</div><!-- col-md-6 -->

						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-btns">
										<a href="" class="panel-close">&times;</a>
										<a href="" class="minimize">&minus;</a>
									</div>
									<h4 class="panel-title">Input Masks</h4>
								</div>
								<div class="panel-body">
									<p>
										Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).
									</p>
									<br />

									<div class="input-group mb15">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										<input type="text" placeholder="Date" id="date" class="form-control" />
									</div>

									<div class="input-group mb20">
										<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
										<input type="text" placeholder="Phone" id="phone" class="form-control" />
									</div>

									<div class="input-group mb20">
										<span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
										<input type="text" placeholder="SSN" id="ssn" class="form-control" />
									</div>

								</div>
							</div><!-- panel -->
						</div><!-- col-md-6 -->

					</div><!-- row -->

					<div class="row">
						<div class="col-md-6">

							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-btns">
										<a href="" class="panel-close">&times;</a>
										<a href="" class="minimize">&minus;</a>
									</div>
									<h4 class="panel-title">Date Picker</h4>
								</div>
								<div class="panel-body">

									<p>
										The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. Click elsewhere on the page or hit the Esc key to close. If a date is chosen, feedback is shown as the input's value.
									</p>
									<br />
									<label>Default Functionality</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									</div>

									<br />

									<p>
										Set the <code>
											numberOfMonths</code>
										option to an integer of 2 or more to show multiple months in a single datepicker.
									</p>
									<br />
									<label>Multiple Months</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple">
										<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									</div>

									<br />

									<label>Display Inline</label>
									<div class="input-group mb15">
										<div id="datepicker-inline"></div>
									</div>

									<p>
										Display the datepicker embedded in the page instead of in an overlay. Simply call <code>
											.datepicker()</code>
										on a <code>
											div</code>
										instead of an input.
									</p>

								</div><!-- panel-body -->
							</div><!-- panel -->

						</div>
						<div class="col-md-6">

							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="panel-btns">
										<a href="" class="panel-close">&times;</a>
										<a href="" class="minimize">&minus;</a>
									</div>
									<h4 class="panel-title">Color Picker</h4>
								</div>
								<div class="panel-body">

									<p>
										A simple component to select color in the same way you select color in Adobe Photoshop.
									</p>
									<br />

									<form role="form">

										<div class="form-group">
											<label class="control-label">Color Picker</label>
											<br />
											<input type="text" name="colorpicker" class="form-control colorpicker-input" id="colorpicker" />
											<span id="colorSelector" class="colorselector"> <span></span> </span>
										</div>

										<br />
										<br />

										<div class="form-group">
											<label class="control-label">Color Picker Flat Mode</label>
											<br />
											<input type="text" name="colorpicker" class="form-control colorpicker-input" id="colorpicker3" />
											<div class="clearfix"></div>
											<br />
											<span id="colorpickerholder"></span>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-btns">
								<a href="" class="panel-close">&times;</a>
								<a href="" class="minimize">&minus;</a>
							</div>
							<h4 class="panel-title">Dropzone Multi-File Upload</h4>
							<p>
								DropzoneJS is an open source library that provides drag'n'drop file uploads with image previews. <a href="http://dropzonejs.com/" target="_blank">http://dropzonejs.com/</a>
							</p>
						</div>
						<div class="panel-body">
							<p>
								This is just a demo. Uploaded files are <strong>not</strong> stored. This does not handle your file uploads on the server. You have to implement the code to receive and store the file yourself.
							</p>
							<br />
							<form action="/file/post" class="dropzone">
								<div class="fallback">
									<input name="file" type="file" multiple />
								</div>
							</form>
						</div>
					</div>

				</div><!-- contentpanel -->
			</div><!-- mainpanel -->

			<div class="rightpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a>
					</li>
					<li>
						<a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a>
					</li>
					<li>
						<a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a>
					</li>
					<li>
						<a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="rp-alluser">
						<h5 class="sidebartitle">Online Users</h5>
						<ul class="chatuserlist">
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/userprofile.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Los Angeles, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user1.png" class="media-object"> </a>
									<div class="media-body">
										<span class="pull-right badge badge-danger">2</span>
										<strong>Zaham Sindilmaca</strong>
										<small>San Francisco, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Bangkok, Thailand</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>

						<div class="mb30"></div>

						<h5 class="sidebartitle">Offline Users</h5>
						<ul class="chatuserlist">
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Los Angeles, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Zaham Sindilmaca</strong>
										<small>San Francisco, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Bangkok, Thailand</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>
					</div>
					<div class="tab-pane" id="rp-favorites">
						<h5 class="sidebartitle">Favorites</h5>
						<ul class="chatuserlist">
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Los Angeles, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user1.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Zaham Sindilmaca</strong>
										<small>San Francisco, CA</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Bangkok, Thailand</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Renov Leongal</strong>
										<small>Cebu City, Philippines</small>
									</div>
								</div><!-- media -->
							</li>
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user5.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Weno Carasbong</strong>
										<small>Tokyo, Japan</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>
					</div>
					<div class="tab-pane" id="rp-history">
						<h5 class="sidebartitle">History</h5>
						<ul class="chatuserlist">
							<li class="online">
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user4.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Eileen Sideways</strong>
										<small>Hi hello, ctc?... would you mind if I go to your...</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user2.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Zaham Sindilmaca</strong>
										<small>This is to inform you that your product that we...</small>
									</div>
								</div><!-- media -->
							</li>
							<li>
								<div class="media">
									<a href="#" class="pull-left media-thumb"> <img alt="" src="images/photos/user3.png" class="media-object"> </a>
									<div class="media-body">
										<strong>Nusja Nawancali</strong>
										<small>Are you willing to have a long term relat...</small>
									</div>
								</div><!-- media -->
							</li>
						</ul>
					</div>
					<div class="tab-pane pane-settings" id="rp-settings">

						<h5 class="sidebartitle mb20">Settings</h5>
						<div class="form-group">
							<label class="col-xs-8 control-label">Show Offline Users</label>
							<div class="col-xs-4 control-label">
								<div class="toggle toggle-success"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-8 control-label">Enable History</label>
							<div class="col-xs-4 control-label">
								<div class="toggle toggle-success"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-8 control-label">Show Full Name</label>
							<div class="col-xs-4 control-label">
								<div class="toggle-chat1 toggle-success"></div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-8 control-label">Show Location</label>
							<div class="col-xs-4 control-label">
								<div class="toggle toggle-success"></div>
							</div>
						</div>

					</div><!-- tab-pane -->

				</div><!-- tab-content -->
			</div><!-- rightpanel -->

		</section>

		<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>

<script src="js/jquery.datatables.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>

<script src="js/custom.js"></script>

		<script>
			jQuery(document).ready(function()
			{

				// Chosen Select
				jQuery(".chosen-select").chosen(
				{
					'width' : '100%',
					'white-space' : 'nowrap'
				});

				// Tags Input
				jQuery('#tags').tagsInput(
				{
					width : 'auto'
				});

				// Textarea Autogrow
				jQuery('#autoResizeTA').autogrow();

				// Color Picker
				if (jQuery('#colorpicker').length > 0)
				{
					jQuery('#colorSelector').ColorPicker(
					{
						onShow : function(colpkr)
						{
							jQuery(colpkr).fadeIn(500);
							return false;
						},
						onHide : function(colpkr)
						{
							jQuery(colpkr).fadeOut(500);
							return false;
						},
						onChange : function(hsb, hex, rgb)
						{
							jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
							jQuery('#colorpicker').val('#' + hex);
						}
					});
				}

				// Color Picker Flat Mode
				jQuery('#colorpickerholder').ColorPicker(
				{
					flat : true,
					onChange : function(hsb, hex, rgb)
					{
						jQuery('#colorpicker3').val('#' + hex);
					}
				});

				// Date Picker
				jQuery('#datepicker').datepicker();

				jQuery('#datepicker-inline').datepicker();

				jQuery('#datepicker-multiple').datepicker(
				{
					numberOfMonths : 3,
					showButtonPanel : true
				});

				// Spinner
				var spinner = jQuery('#spinner').spinner();
				spinner.spinner('value', 0);

				// Input Masks
				jQuery("#date").mask("99/99/9999");
				jQuery("#phone").mask("(999) 999-9999");
				jQuery("#ssn").mask("999-99-9999");

				// Time Picker
				jQuery('#timepicker').timepicker(
				{
					defaultTIme : false
				});
				jQuery('#timepicker2').timepicker(
				{
					showMeridian : false
				});
				jQuery('#timepicker3').timepicker(
				{
					minuteStep : 15
				});

			});
		</script>

	</body>
</html>

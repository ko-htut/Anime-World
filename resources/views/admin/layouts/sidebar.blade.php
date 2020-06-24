<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{asset('images/man.png')}}" class="img-responsive" style="background:#30A5FF;">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="/backend/dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="/backend/movies"><em class="fa fa-play-circle-o">&nbsp;</em> Movies</a></li>
			<li class="parent "><a data-toggle="collapse" href="#series">
				<em class="fa fa-navicon">&nbsp;</em> Series <span data-toggle="collapse" href="#series" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="series">
					<li><a class="" href="/backend/series/series">
						<span class="fa fa-arrow-right">&nbsp;</span> Series
					</a></li>
					<li><a class="" href="/backend/series/season">
						<span class="fa fa-arrow-right">&nbsp;</span> Seasons
					</a></li>
					<li><a class="" href="/backend/series/episodes">
						<span class="fa fa-arrow-right">&nbsp;</span> Episodes
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#comics">
				<em class="fa fa-navicon">&nbsp;</em> Comics <span data-toggle="collapse" href="#comics" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="comics">
					<li><a class="" href="/backend/comic/series">
						<span class="fa fa-arrow-right">&nbsp;</span> Series
					</a></li>
					<li><a class="" href="/backend/comic/season">
						<span class="fa fa-arrow-right">&nbsp;</span> Seasons
					</a></li>
					<li><a class="" href="/backend/comic/episode">
						<span class="fa fa-arrow-right">&nbsp;</span> Episodes
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Others <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="/backend/subtitle">
						<span class="fa fa-arrow-right">&nbsp;</span> Subtitle
					</a></li>
					<li><a class="" href="/backend/dataplan">
						<span class="fa fa-arrow-right">&nbsp;</span> Dataplan
					</a></li>
					<li><a class="" href="/backend/credit">
						<span class="fa fa-arrow-right">&nbsp;</span> Credit
					</a></li>
					<li><a class="" href="/backend/category">
						<span class="fa fa-arrow-right">&nbsp;</span> Category
					</a></li>
				</ul>
			</li>
			<li><a href="/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->

<nav class="navbar navbar-default navbar-fixed-top main-menu" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="with-img">
					<a href="{{ route('dashboard', [ Auth::user()->getTeam()->slug ]) }}" style="font-size: 13px; font-weight: 500; font-family: 'Open Sans';">
						@if($team->team_logo)
                            <img src="/img/avatars/{{ $team->team_logo }}" alt="" width="155" height="155" class="media-object" style="border-radius: 3px;">
                        @else
                            <img src="/img/no-image.png" alt="" width="155" height="155" class="media-object" style="border-radius: 3px;">
                        @endif
                        {{ $team->name }}
					</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group with-icon">
						<input type="text" class="form-control overall-search-input" placeholder="Search...">
						<i class="fa fa-search icon"></i>
					</div>
				</form>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 9px; padding-left: 9px;"><i class="fa fa-plus fa-fw"></i></a>
					<ul class="dropdown-menu dropdown-menu-right" style="margin-top: -3px; margin-right: -6px; margin-top: -3px; padding: 4px 5px;">
                        <li><a href="{{ route('wikis.create', [ $team->slug ]) }}" style="padding: 5px 6px;">Create wiki</a></li>
                        <li><a href="{{ route('spaces.create', [ $team->slug ]) }}" style="padding: 5px 6px;">Craete space</a></li>
                        <li class="divider" style="margin: 0px;"></li>
                        <li><a href="{{ route('teams.settings.members', [$team->slug,]) }}" style="padding: 5px 6px;">Invite user</a></li>
                    </ul>
              	</li>
              	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 9px; padding-left: 9px; position: relative;"><i class="fa fa-bell fa-fw"></i><span class="unread-notification" style="background-color: #03A9F4; height: 11px; width: 11px; display: inline-block; border-radius: 50%; position: absolute; top: 13px; right: 8px; border: 2px solid #fbfbfb;"></span></a>
					<div class="dropdown-menu dropdown-menu-right" style="margin-top: -3px; margin-right: -6px; width: 400px; padding: 12px 18px;">
                        <div class="menu-notifications">
                        	<div class="notification-head" style="margin-bottom: 10px;">
                        		<div class="pull-left" style="height: 18px; display: flex; align-items: center;">
                        			<h2 style="font-size: 12px; color: #777;">Notifications</h2>
                        		</div>
                        		<div class="pull-right" style="height: 18px; display: flex; align-items: center;">
                        			<a href="#"><i class="fa fa-times fa-fw" style="font-size: 12px; color: #777;"></i></a>
                        		</div>
                        		<div class="clearfix"></div>
                        	</div>
                        	<div class="notification-body">
                        		<p style="font-size: 12px; text-align: center; padding: 5px 10px; color: #777;">
                        			Notifications will be displayed here whenever something happens in one of your contributed projects.
                        		</p>
                        	</div>
                        </div>
                    </div>
                </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <i class="fa fa-caret-down fa-fw"></i></a>
					<ul class="dropdown-menu dropdown-menu-right" style="margin-top: -3px; padding: 4px 5px;">
                        <li><a href="{{ route('users.show', [$team->slug, Auth::user()->slug]) }}" style="padding: 5px 6px;">Profile</a></li>
                        <li><a href="{{ route('settings.profile', [$team->slug, Auth::user()->slug]) }}" style="padding: 5px 6px;">Settings</a></li>
                        <li class="divider" style="margin: 0px; background-color: #eee;"></li>
                        <li><a href="{{ route('logout') }}" style="padding: 5px 6px;">Logout </a></li>
                    </ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
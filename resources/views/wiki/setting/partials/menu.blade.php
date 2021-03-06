<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="{{ (Route::currentRouteName() == 'wikis.overview' ? 'active' : '') }}">
		<a href="{{ route('wikis.overview', [ $team->slug, $space->slug, $wiki->slug ]) }}">General</a>
	</li>
	<li role="presentation" class="{{ (Route::currentRouteName() == 'wikis.permission' ? 'active' : '') }}">
		<a href="{{ route('wikis.permission', [ $team->slug, $space->slug, $wiki->slug ]) }}">Permissions</a>
	</li>
	<li role="presentation" class="{{ (Route::currentRouteName() == 'wikis.notification' ? 'active' : '') }}">
		<a href="#">Notifications</a>
	</li>
	<li role="presentation">
		<a href="#">Integrations</a>
	</li>
</ul>
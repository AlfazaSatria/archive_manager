<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="{{ route('home') }}">Indofood</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="{{ route('home') }}">Indofood</a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="@if ($title == 'Home Dashboard') active @endif">
				<a class="nav-link" href="{{ route('home') }}">
					<i class="fas fa-home"></i><span>Home</span>
				</a>
			</li>
		</ul>
	
	</aside>
</div>
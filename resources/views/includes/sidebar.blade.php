<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="{{ route('home') }}"> <img src="{{ asset('dist/assets/img/indofood.png') }}" alt="logo" width="240" ></a>
		</div>
		
		<ul class="sidebar-menu">
			<li class="menu-header">Dashboard</li>
			<li class="@if ($title == 'Home Dashboard') active @endif">
				<a class="nav-link" href="{{ route('home') }}">
					<i class="fas fa-home"></i><span>Home</span>
				</a>
			</li>
		@if (auth()->user()->department_id == 1 || auth()->user()->department_id == 2)
			<li class="@if ($title == 'Departemen') active @endif">
				<a class="nav-link" href="{{ route('departments.show') }}">
					<i class="fas fa-building"></i><span>Departemen</span>
				</a>
			</li>
			@endif
			<li class="@if ($title == 'File') active @endif">
				<a class="nav-link" href="{{ route('files.show') }}">
					<i class="fas fa-file"></i><span>File</span>
				</a>
			</li>
		</ul>
	
	</aside>
</div>
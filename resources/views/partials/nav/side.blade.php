<ul id="slide-out" class="sidenav">
	<li>
		<div class="user-view">
      <div class="avatar">
      	<img src="http://dummyimage.com/64x64/4d494d/686a82.gif&text=A" class="circle">
      </div>
      <ul class="collapsible">
		    <li>
		      <div class="collapsible-header" @click="openUserView">
		      	<div>
		      		<p class="truncate">John Doe</p>
		      		<p class="truncate">jdandturk@gmail.com</p>
		      	</div>
		      	<i class="material-icons" :class="{ rotate: userViewIsOpen }">arrow_drop_down</i>
		      </div>
		      <div class="collapsible-body">
		      	<ul>
		      		<li><a href="#" class="waves-effect"><i class="material-icons">person</i>Profile</a></li>
			        <li><a href="#" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>
			        <li class="divider"></li>
			        <li>
			          <a href="{{ route('logout') }}" class="waves-effect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>Log Out</a>
			          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			            @csrf
			          </form>
			        </li>
		      	</ul>
		      </div>
		    </li>
		  </ul>
    </div>
	</li>
  <li><a class="subheader">Navigation</a></li>
  <li><a href="#" class="waves-effect"><i class="material-icons">home</i>Home</a></li>
  <li>
  	<ul class="collapsible">
  		<li>
  			<a class="collapsible-header waves-effect"><i class="material-icons">cloud</i>Categories</a>
  			<div class="collapsible-body">
  				<ul class="sub-menu">
  					<li><a href="#" class="waves-effect">Category 1</a></li>
  					<li><a href="#" class="waves-effect">Category 2</a></li>
  					<li><a href="#" class="waves-effect">Category 3</a></li>
  				</ul>
  			</div>
  		</li>
  	</ul>
  </li>
  <li><a href="#" class="waves-effect"><i class="material-icons">archive</i>Archives</a></li>
</ul>
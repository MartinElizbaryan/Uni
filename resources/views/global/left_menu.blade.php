	<div class="sidebar" data-color="purple" data-background-color="white" data-image="/img/left_menu.jpg">
		      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
	  <div class="logo">
		<a href="http://www.creative-tim.com" class="simple-text logo-normal">
		  Creative Tim
		</a>
	  </div>
	  <div class="sidebar-wrapper">
		<ul class="nav">
		  <li class="nav-item {{ Request::route()->getName() == 'dashboard' ? 'active' : '' }}">
			<a class="nav-link" href="/">
			  <i class="material-icons">person</i>
			  <p>Students</p>
			</a>
		  </li>
		  <li class="nav-item {{ Request::route()->getName() == 'faculty' ? 'active' : '' }}">
			<a class="nav-link" href="/faculty">
			  <i class="material-icons">person</i>
			  <p>Faculty</p>
			</a>
		  </li>
		  <li class="nav-item {{ Request::route()->getName() == 'group' ? 'active' : '' }}">
			<a class="nav-link" href="/group">
			  <i class="material-icons">work</i>
			  <p>Group</p>
			</a>
		  </li>
		  
		</ul>
	  </div>
	  <div class="sidebar-background" style="background-image: url(/img/left_menu.jpg);"></div>
	</div>

	
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li class="{{ request()->is('Question') ? 'active' : ''}}"><a href="/Question"><i class="fa fa-share"></i><span>Question</span></a></li>
      </ul>
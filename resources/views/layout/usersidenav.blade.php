<a id="show-sidebar" class="btn btn-sm" href="#">
         <i class="fas fa-bars"></i>
         </a>
         <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
               <div class="sidebar-brand">
                  <div id="close-sidebar">
                     <i class="fas fa-chevron-right"></i>
                  </div>
               </div>
               <div class="sidebar-menu">
                  <ul>
                     <li>
                        <a href="{{ url('userhome') }}">
                        <i class="fas fa-book"></i>
                        <span class="show-menu-name">Home</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('dashboard') }}">
                        <i class="fas fa-chart-bar"></i>
                        <span class="show-menu-name">Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('template') }}">
                        <i class="fas fa-box"></i>
                        <span class="show-menu-name">Templates</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('connections') }}">
                        <i class="fas fa-plug"></i>
                        <span class="show-menu-name">Connection</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('settings') }}">
                        <i class="fas fa-cog"></i>
                        <span class="show-menu-name">Settings</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{ url('help') }}">
                        <i class="fas fa-file"></i>
                        <span class="show-menu-name">Help</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
               <a href="#" class="text-warning font-weight-bold">
               <i class="fas fa-sign-out-alt ml-2"></i>
               <span class="show-menu-name">Sign Out</span>
               </a>
            </div>
         </nav>
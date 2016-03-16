<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- dashboard -->

                  <li>

                      <a href="{{ URL::route('dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  {{-- Add an Employee --}}
                  <li>

                      <a href="{{ route('employee.create') }}">
                          <i class="fa fa-user"></i>
                          <span>Add an Employee</span>
                      </a>
                  </li>
                  {{-- Employee List --}}
                  <li>

                      <a href="{{ route('employee.index') }}">
                          <i class="fa fa-users"></i>
                          <span>Employee List</span>
                      </a>
                  </li>

                  {{-- Shipments --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-truck"></i>
                          <span>Shipments</span>
                      </a>
                  </li>

                  {{-- Customers --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-user"></i>
                          <span>Customers</span>
                      </a>
                  </li>

                  {{-- Salespersons --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-flash"></i>
                          <span>Sales persons</span>
                      </a>
                  </li>

                  {{-- Staff Users --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-users"></i>
                          <span>Staff Users</span>
                      </a>
                  </li>

                  {{-- Roles & Permissions --}}
                  <li>

                      <a href="#">
                          <i class="fa fa-gears"></i>
                          <span>Roles & Permissions</span>
                      </a>
                  </li>


                  









              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
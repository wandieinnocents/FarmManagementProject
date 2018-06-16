<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<!-- <li><a href="{{backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li> -->


<li><a href="{{  backpack_url("animalcategory") }}"><i class="fa fa-files-o"></i> <span>Category</span></a></li>
<!-- ANIMALS -->
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Animals</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">



      <li><a href="{{  backpack_url("animal") }}"><i class="fa fa-files-o"></i> <span>Add Animals</span></a></li>

    </ul>
  </li>

  <!-- ANIMALS -->
    <li class="treeview">
      <a href="#"><i class="fa fa-group"></i> <span>Sick Animals</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">

        <li><a href="{{  backpack_url("sickanimal") }}"><i class="fa fa-files-o"></i> <span>Add Sick Animals</span></a></li>
      </ul>
    </li>
    <!-- ANIMALS -->
      <li class="treeview">
        <a href="#"><i class="fa fa-group"></i> <span>Farm Operators</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">

            <li><a href="{{  backpack_url("farmoperator") }}"><i class="fa fa-files-o"></i> <span>Add Operators</span></a></li>
        </ul>
      </li>
      <!-- ANIMALS TRANSFERS-->
        <li class="treeview">
          <a href="#"><i class="fa fa-group"></i> <span>Animal Transfers</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">

              <li><a href="{{  backpack_url("animaltransfer") }}"><i class="fa fa-files-o"></i> <span>Record Transfer</span></a></li>
          </ul>
        </li>



<!-- SETTINGS  -->
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">

      <li><a href="{{  backpack_url("elfinder") }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
      <li><a href="{{  backpack_url('language') }}"><i class="fa fa-flag-o"></i> <span>Languages</span></a></li>
      <li><a href="{{ backpack_url( 'language/texts') }}"><i class="fa fa-language"></i> <span>Language Files</span></a></li>
      <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
      <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
      <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
  </li>

<!-- Users, Roles Permissions -->
  <li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
      <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
  </li>

<div class="scroll-sidebar">
  <nav class="sidebar-nav">
    <ul id="sidebarnav">
      <li @if(isset($menu) && $menu == 'info') class="active"  @endif>
        <a class="waves-effect waves-dark" href="/admin/info" aria-expanded="false">
          <i class="mdi mdi-bank"></i><span class="hide-menu">Информация </span>
        </a>
      </li>
      <li @if(isset($menu) && $menu == 'user') class="active"  @endif>
        <a class="waves-effect waves-dark" href="/admin/user" aria-expanded="false">
          <i class="mdi mdi-account"></i><span class="hide-menu">Администраторы </span>
        </a>
      </li>
      <li @if(isset($menu) && $menu == 'password') class="active"  @endif>
        <a class="waves-effect waves-dark" href="/admin/password" aria-expanded="false">
          <i class="mdi mdi-settings"></i><span class="hide-menu">Сменить пароль </span>
        </a>
      </li>
      <li>
        <a class="waves-effect waves-dark" href="/admin/logout" aria-expanded="false">
          <i class="mdi mdi-settings"></i><span class="hide-menu">Выйти</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
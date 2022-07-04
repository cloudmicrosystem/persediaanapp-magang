  <!-- Sidebar -->
  <aside class="sidebar trans-0-4">
    <!-- Button Hide sidebar -->
    <button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

    <!-- - -->
    <ul class="menu-sidebar p-t-100 p-b-20">
        <li class="t-center m-b-13">
            <h4 class="txt13 m-b-20" style="color: black">

            </h4>
        </li>
        <li class="t-center m-b-13">
            <h4 class="txt13 m-b-20" style="color: black">
                Menu
            </h4>
        </li>
        <li class="t-center m-b-13">
            <a href="/" class="txt19">Home</a>
        </li>

        <li class="t-center m-b-13">
            <a href="/product" class="txt19">Product</a>
        </li>

        <li class="t-center m-b-13">
            <a href="/store" class="txt19">Store</a>
        </li>

        <li class="t-center m-b-13">
            <a href="/artikel" class="txt19">Artikel</a>
        </li>

        <li class="t-center m-b-13">
            <a href="/about" class="txt19">About</a>
        </li>

        <li class="t-center m-b-33">
            <a href="/contact" class="txt19">Contact</a>
        </li>
        <li class="t-center m-b-33">
            <a href="">
                <form method='POST' action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-outline-info">
                        <link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </a>
        </li>
    </ul>

</aside>

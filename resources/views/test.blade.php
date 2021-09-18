<h1>Hello Admin</h1>
@if(Auth::user()->hasrole('admin'))
    <div>{{ Auth::user()->name }}</div>
@endif
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-dropdown-link :href="route('logout')"
                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-dropdown-link>
</form>

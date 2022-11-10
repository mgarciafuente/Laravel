<div class="cont">
    <a href="{{ route('index') }}"><h1>Task list</h1></a>
    @if(!(isset($menu) && $menu == 'no')) 
        <nav>
            <button class="menu">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
            </button>
            <ul class="navul">
                <li><a href="{{ route('new') }}" @if($view_name == 'new') class="disabled" @endif>New task</a></li>
                <li><a href="{{ route('current') }}"  @if($view_name == 'current') class="disabled" @endif>Current tasks</a></li>
                <li><a href="{{ route('search') }}"  @if($view_name == 'search') class="disabled" @endif>Search task</a></li>
            </ul>
        </nav>
    @endif
</div> 
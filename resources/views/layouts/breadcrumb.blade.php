<nav aria-label="breadcrumb" class="bg-dark">
    <ol class="breadcrumb text-light bg-dark">
        <li class="breadcrumb-item">
            @hasSection('second-breadcrumb')<a href="dashboard">@endif
              {{ __('Dashboard') }}
            @hasSection('second-breadcrumb')</a>@endif
        </li>
      @hasSection ('second-breadcrumb')
        <li class="breadcrumb-item">
            @hasSection('third-breadcrumb')<a href="#">@endif 
                @yield('second-breadcrumb') 
            @hasSection('third-breadcrumb')</a>@endif
        </li>
      @endif
      @hasSection ('third-breadcrumb')
        <li class="breadcrumb-item">
            @hasSection('fourth-breadcrumb')<a href="#">@endif 
                @yield('third-breadcrumb') 
            @hasSection('fourth-breadcrumb')</a>@endif
        </li>
      @endif
      @hasSection ('fourth-breadcrumb')
        <li class="breadcrumb-item">
            @yield('fourth-breadcrumb') 
        </li>
      @endif
    </ol>
</nav>
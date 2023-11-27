<div class="sidebar" id="sidebar">

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="@if(in_array(Route::currentRouteName(),['dashboard'])) active @endif">
                    <a href="{{route('dashboard')}}"><img src="{{asset('assets/img/icons/dashboard.svg')}}" alt="img"><span> Tableau de board</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"
                       class="@if(in_array(Route::currentRouteName(),['cv-import','cv-list'])) active subdrop @endif">
                        <img src="{{asset('assets/img/icons/product.svg')}}"
                             alt="img"><span> CV</span> <span class="menu-arrow"></span></a>
                    <ul @if(in_array(Route::currentRouteName(),['cv-import','cv-list'])) style="display: block" @endif>
                        <li>
                            <a href="{{route('cv-import')}}" class="@if(in_array(Route::currentRouteName(),['cv-import'])) active @endif">Importer un CV</a>
                        </li>
                        <li>
                            <a href="{{route('cv-list')}}" class="@if(in_array(Route::currentRouteName(),['cv-list'])) active @endif">Liste</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"
                    class="@if(in_array(Route::currentRouteName(),['services-list'])) active subdrop @endif">
                        <img src="{{asset('assets/img/icons/settings.svg')}}"
                                                       alt="img"><span> Services</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('services-list')}}?type=DNTCP">DNTCP</a></li>
                        <li><a href="{{route('services-list')}}?type=ACCT">ACCT</a></li>
                        <li><a href="{{route('services-list')}}?type=RGD">RGD</a></li>
                        <li><a href="{{route('services-list')}}?type=PGT">PGT</a></li>
                        <li><a href="{{route('services-list')}}?type=TR">TR</a></li>
                        <li><a href="{{route('services-list')}}?type=RP">RP</a></li>
                        <li><a href="{{route('services-list')}}?type=CIFP">CIFP</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"
                       class="@if(in_array(Route::currentRouteName(),['users-create','users-list'])) active subdrop @endif"
                    >
                        <img src="{{asset('assets/img/icons/settings.svg')}}"
                                                       alt="img"><span> Gestion d'utilisateurs</span> <span
                                class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="{{route('users-create')}}" class="@if(in_array(Route::currentRouteName(),['users-create'])) active subdrop @endif">Ajouter un Utilisateur</a>
                        </li>
                        <li>
                            <a href="{{route('users-list')}}" class="@if(in_array(Route::currentRouteName(),['users-list'])) active subdrop @endif">Liste des Utilisateurs</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{asset('assets/img/icons/settings.svg')}}"
                                                       alt="img"><span> Configurations</span> <span class="menu-arrow"></span></a>
                    <ul>
{{--                        <li><a href="generalsettings.html">A</a></li>--}}

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

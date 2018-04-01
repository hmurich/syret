<section class="sidebar">
    <ul class="sidebar-menu">
        <li>
            <a href="{{ action('Admin\IndexController@getIndex') }}" >
                <i class="fa  fa-desktop "></i> <span>На главную</span>
            </a>
        </li>

        <li>
            <a href="{{ action('Admin\SysPainterValController@getIndex') }}" >
                <i class="fa  fa-desktop "></i> <span>Справочники</span>
            </a>
        </li>

        <li>
            <a href="{{ action('Admin\SysPainterCatController@getIndex') }}" >
                <i class="fa  fa-desktop "></i> <span>Типы справочников</span>
            </a>
        </li>

        <li>
            <a href="{{ action('Admin\SiteSettingController@getIndex') }}" >
                <i class="fa  fa-desktop "></i> <span>Настройки сайта</span>
            </a>
        </li>

    </ul>
</section>

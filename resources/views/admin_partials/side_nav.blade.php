<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="{{ (Request::is('admin') ? 'active' : '') }}">
            <a href="/admin"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="{{ (Request::is('admin/slides') ? 'active' : '') }}">
            <a href="/admin/slides"><i class="fa fa-fw fa-bar-chart-o"></i> Header slides</a>
        </li>
        <li class="{{ (Request::is('admin/spacer1') ? 'active' : '') }}">
            <a href="#"><i class="fa fa-fw fa-table"></i>First spacer with quote</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-edit"></i> -----</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-desktop"></i> -----</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-wrench"></i> -----</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> ----- <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="#">-----</a>
                </li>
                <li>
                    <a href="#">-----</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-file"></i> -----</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-dashboard"></i> -----</a>
        </li>
    </ul>
</div>

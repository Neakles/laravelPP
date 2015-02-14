<!DOCTYPE html>
<html ng-app="PPApp">
    <head>
        <title>Administration Page</title>
        @section('css')
        << HTML::style('css/main.css') >>
        @show
    </head>
    <body>
        <md-toolbar class="md-primary" layout="row" layout-align="space-around center" layout-padding id="header">
            <h2 class="md-toolbar-tools">PP Blog Admin Panel</h2>
            <md-button aria-label="logout">
                <i class="fa fa-power-off"></i> logout
            </md-button>
        </md-toolbar>
        <md-toolbar layout="row"
            layout-align="start center"
            layout-padding id="subheader" class="md-primary md-hue-3">
            <a href="#"><i class="fa fa-home"></i> Home</a>
            <a href="#"><i class="fa fa-users"></i> Users</a>
            <a href="#">Pages</a> <a href="#">Post</a>
            <a href="#">Settings</a>
        </md-toolbar>
        <md-content>
            @yield('content')
        </md-content>
    </body>
    @section('js')
    << HTML::script('js/admin.js') >>
    @show
</html>

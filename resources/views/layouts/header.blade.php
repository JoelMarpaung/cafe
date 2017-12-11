<!-- code : bootstrap template - krs app - arnosa.net - and modified by group 9 -->
<nav class="navbar navbar-default" style="background-color:DodgerBlue">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" style="color:white">Sistem Informasi Cafe IT Del</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
				<li class="link">
                    <a class="btn btn-danger" href="{{url('/logout')}}" style="font-weight: bold; color:white;">Log Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
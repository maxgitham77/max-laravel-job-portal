<div class="box-nav-tabs nav-tavs-profile mb-5">
    <ul class="nav" role="tablist">
        <li><a class="btn btn-border mb-20 active" href="candidate-profile-dashboard.html">Dashboard</a></li>
        <li><a class="btn btn-border mb-20" href="candidate-profile.html">My Profile</a></li>
        <li><a class="btn btn-border mb-20" href="candidate-profile-jobs.html">My Jobs</a></li>
        <li><a class="btn btn-border mb-20" href="candidate-profile-save-jobs.html">Saved Jobs</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="btn btn-border mb-20" onclick="event.preventDefault(); this.closest('form').submit();"  href="{{ route('logout') }}">Logout</a>
            </form>
            </li>
    </ul>
</div>

@extends ('layout.master')

@section('content')

<section class="content-header">
    <h1>
        Manage Admin
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">User Management </li>
        <li class="active">Manage admin</li>
</section>


<section class="content">

    <div class="row">
        <div class="col-md-3">
            <div class="box">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                        src="https://www.gravatar.com/avatar/edb0e96701c209ab4b50211c856c50c4.jpg?s=80&amp;d=mm&amp;r=g">
                    <h3 class="profile-username text-center">admin</h3>
                </div>

                <ul class="nav nav-pills nav-stacked">

                    <li role="presentation"><a href="{{ route('adminUser') }}">Update Account
                            Info</a></li>

                    <li role="presentation" class="active"><a href="{{ route('passUser') }}">Change
                            Password</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-6">

            <form class="form" action="http://localhost:3333/admin/change-password" method="post">

                <input type="hidden" name="_token" value="b7hFPNAU6IQazLSj42bwYTVFhGPFD9qLkKql7wdR">

                <div class="box padding-10">

                    <div class="box-body backpack-profile-form">



                        <div class="form-group">
                            <label class="required">Old password</label>
                            <input autocomplete="new-password" required="" class="form-control" type="password"
                                name="old_password" id="old_password" value="" placeholder="Old password">
                        </div>

                        <div class="form-group">
                            <label class="required">New password</label>
                            <input autocomplete="new-password" required="" class="form-control" type="password"
                                name="new_password" id="new_password" value="" placeholder="New password">
                        </div>

                        <div class="form-group">
                            <label class="required">Confirm password</label>
                            <input autocomplete="new-password" required="" class="form-control" type="password"
                                name="confirm_password" id="confirm_password" value="" placeholder="Confirm password">
                        </div>

                        <div class="form-group m-b-0">

                            <button type="submit" class="btn btn-success"><span class="ladda-label"><i
                                        class="fa fa-save"></i> Change Password</span></button>
                            <a href="http://localhost:3333/admin" class="btn btn-default"><span
                                    class="ladda-label">Cancel</span></a>

                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>

</section>

@endsection

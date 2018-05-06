@if(Auth::guard('user')->check())
<div class="modal fade" id="modal-profile-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="text-center"><h5><b>Update Profile</b></h5></span>
            <div class="content" style="padding: 10px;">
                            <form role="form" action="{{route('user.edit.submit')}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group text-center">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                             style="width: 200px; height: 150px;">
                                            <img src="/images/users/profile_330x330/{{Auth::guard('user')->user()->image}}" alt=""/>
                                        </div>
                                        <div>
                                                                        <span class="btn-sm btn-default btn-file">
                                                                        <span class="fileinput-new">
                                                                        Change profile image </span>
                                                                        <span class="fileinput-exists">
                                                                        Change </span>
                                                                        <input type="file" name="edit_photo">
                                                                        </span>
                                            <a href="#" class="btn-sm btn-danger fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Full Name</label>
                                    <input class="form-control" value="{{Auth::guard('user')->user()->name}}" name="name"
                                           type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" value="{{Auth::guard('user')->user()->email}}" name="email"
                                           type="email">
                                </div>
                                <div class="form-group">
                                    <label for="Phone" class="control-label">Phone</label>
                                    <input class="form-control" value="{{Auth::guard('user')->user()->phone}}" name="phone"
                                           id="Phone" type="text">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-sm btn-info">Update</button>
                                    <button type="button" class="btn-cart pull-right"
                                            data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-password-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="text-center"><h5><b>Change Password</b></h5></span>
            <div class="content" style="padding: 10px;">
                <form role="form" method="post" action="{{route('user.update.submit')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label">Old Password</label>
                        <input class="form-control" id="oldpass" name="oldpass"
                               placeholder="Old Password" type="password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">New Password</label>
                        <input class="form-control" id="oldpass" name="newpass"
                               placeholder="New Password" type="password">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                        <input class="form-control" id="confirmpass" name="confirmpass"
                               placeholder="Confirm Password" type="password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-cart " >
                            Update</button>
                        <button type="button" class="btn-cart pull-right"
                                data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endif
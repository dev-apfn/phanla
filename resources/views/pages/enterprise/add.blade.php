<div class="modal fade in" id="add-enterprise">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/enterprises') }}">
                {{ csrf_field() }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Enterprise</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><strong>Field</strong></th>
                                <th><strong>Value</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" class="form-control" name="name" placeholder="Cuulkids Inc" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>Location</td>
                                <td>
                                    <input type="text" class="form-control" name="location" placeholder="Fajara Estate" value="{{ old('location') }}" required>

                                    @if ($errors->has('location'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>Coordinates</td>
                                <td>
                                     <input type="text" class="form-control" name="latitude" placeholder="Latitude" value="{{ old('latitude') }}" required>

                                     @if ($errors->has('latitude'))
                                     <span class="help-block text-danger">
                                         <strong>{{ $errors->first('latitude') }}</strong>
                                     </span>
                                     @endif

                                     <hr />

                                    <input type="text" class="form-control col-md-6" name="longitude" placeholder="Longitude" value="{{ old('longitude') }}" required>

                                    @if ($errors->has('longitude'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>Phone</td>
                                <td>
                                    <input type="text" class="form-control" name="phone" placeholder="+220 334 3008" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" class="form-control" name="email" placeholder="info@cuulkids.com" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <td>Description</td>
                                <td>
                                     <textarea class="form-control" name="description" placeholder="This is a brief description" required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

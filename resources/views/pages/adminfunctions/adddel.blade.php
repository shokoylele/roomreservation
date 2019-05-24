<!--ADD NEW ROOM-->
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Room</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form" id="roomDataForm" method="POST" action="{{ route('processaddroom') }}">
            @csrf
              <div class="form-group{{ $errors->has('room_id') ? ' has-error' : '' }}">
                <label for="room_id">Room Number: </label>
                <input type="text" class="form-control{{ $errors->has('room_id') ? ' has-error' : '' }}" placeholder="Enter room number" id="newroom_id" name="room_id" value="{{ old('room_id') }}" required>
                @if ($errors->has('room_id'))
                  <span class="help-block" role="alert">
                      <strong>{{ $errors->first('room_id') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <label for="room_desc">Room Description: </label>
                <select id="room_desc" class="form-control{{ $errors->has('room_desc') ? ' has-error' : '' }}" name="room_desc" value="{{ old('room_desc') }}" required>
                  <option selected disabled>Select room description</option>
                  <option value="6th Floor">6th Floor</option>
                  <option value="7th Floor">7th Floor</option>
                  <option value="8th Floor">8th Floor</option>
                  <option value="CL 8th Floor">CL 8th Floor</option>
                  <option value="9th Floor">9th Floor</option>
                  <option value="CL 10th Floor">CL 10th Floor</option>
                  <option value="Lower Penthouse">Lower Penthouse</option>
                  <option value="Upper Penthouse">Upper Penthouse</option>
                  <option value="Drawing Room 10th Floor">Drawing Room 10th Floor</option>
                  <option value="Others">Others</option>
                </select>
                  @if ($errors->has('room_desc'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('room_desc') }}</strong>
                  </span>
                  @endif
              </div>
              <div class="form-group">
                <label for="isSpecial">Category: </label>
                  <select class="form-control{{ $errors->has('isSpecial') ? ' has-error' : '' }}" id="isSpecial" name="isSpecial" required>
                    <option value="" selected disabled>Select room category</option>
                    <option value="0">Ordinary Room</option>
                    <option value="1">Special Room</option>
                  </select>
                    @if ($errors->has('isSpecial'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('isSpecial') }}</strong>
                      </span>
                    @endif
              </div>
              <button type="submit" id="addRoomBtn" class="btn btn-primary pull-right">{{ __('Add') }}</button>
          </form>
        </div>
      </div>

      <!--DELETE ROOM-->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Delete Existing Room</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form role="form" id="roomIdDelForm" method="POST" action="{{ route('processdelroom') }}">
            @csrf
            <div class="form-group{{ $errors->has('delroom_id') ? ' has-error' : '' }}">
              <label>Room Number: </label>
              <select class="form-control" id="delroom_id" name="room_id" required>
                <option value="" selected disabled>Select a room to be deleted</option>
                @foreach ($descriptions as $description)
                  <optgroup label="{{$description}}">
                    @foreach ($rooms as $room)
                      @if ($description == $room->room_desc)
                        <option value="{{$room->room_id}}">{{$room->room_id}}</option>
                      @endif
                    @endforeach
                  </optgroup>
                @endforeach
              </select>
            </div>
            <button type="button" id="delRoomBtn" data-target="#confirmRoomDeletion" data-toggle="modal" class="btn btn-danger pull-right">Delete</button>

            <div class="modal fade" id="confirmRoomDeletion">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Room Deletion</h4>
                  </div>
                  <div class="modal-body">
                    <h4>Are you sure you want to delete this room? You cannot undo this action.</h4>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Revise</button>
                      <button type="submit" class="btn btn-danger" onclick="$('#roomIdDelForm').submit()">Delete</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div><!--END OF BOX-BODY-->
      </div><!--END OF CONTENT BOX-->
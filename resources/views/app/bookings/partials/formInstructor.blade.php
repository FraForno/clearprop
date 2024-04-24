<div class="form-group">
    <label for="instructors" class="required">{{ trans('cruds.booking.fields.instructor') }}</label>
    <div class="input-group">
        <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user-tie"></i>
              </span>
        </div>
        <select class="form-control select2 {{ $errors->has('instructors') ? 'is-invalid' : '' }}" name="instructors"
                id="instructors" required>
            @foreach($instructors as $id => $instructor)
                <option
                    value="{{ $id }}" {{ old('instructors') == $id ? 'selected' : '' }}>{{ $instructor }}</option>
            @endforeach
        </select>
        @if($errors->has('instructors'))
            <span class="text-danger">{{ $errors->first('instructors') }}</span>
        @endif
        <span
            class="help-block text-secondary small">{{ trans('cruds.booking.fields.instructor_helper') }}</span>
    </div>
</div>


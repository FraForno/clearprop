<div class="form-group">
    <label for="instructor_id" class="required">{{ trans('cruds.booking.fields.instructor') }}</label>
    <div class="input-group">
        <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="fas fa-user-tie"></i>
              </span>
        </div>
        <select class="form-control select2 {{ $errors->has('instructor') ? 'is-invalid' : '' }}" name="instructor_id"
                id="instructor_id" required>
            @foreach($instructors as $id => $instructor)
                <option
                    value="{{ $id }}" {{ old('instructor_id') == $id ? 'selected' : '' }}>{{ $instructor }}</option>
            @endforeach
        </select>
        @if($errors->has('instructor'))
            <span class="text-danger">{{ $errors->first('instructor') }}</span>
        @endif
        <span
            class="help-block text-secondary small">{{ trans('cruds.booking.fields.instructor_helper') }}</span>
    </div>
</div>


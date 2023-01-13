@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex p-0 border-none">
                    <h3 class="card-title p-3">
                        <i class="fas fa-user mr-1"></i>
                        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                   name="name"
                                   id="name" value="{{ old('name', $user->name) }}" required>
                            @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.name_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.user.fields.surname') }}</label>
                            <input class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}" type="text"
                                   name="surname"
                                   id="surname" value="{{ old('surname', $user->surname) }}" required>
                            @if($errors->has('surname'))
                                <span class="text-danger">{{ $errors->first('surname') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.surname_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label class="required" for="birthplace">{{ trans('cruds.user.fields.birthplace') }}</label>
                            <input class="form-control {{ $errors->has('birthplace') ? 'is-invalid' : '' }}" type="text"
                                   name="birthplace"
                                   id="birthplace" value="{{ old('birthplace', $user->birthplace) }}" required>
                            @if($errors->has('birthplace'))
                                <span class="text-danger">{{ $errors->first('birthplace') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.birthplace_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="birthdate">{{ trans('cruds.user.fields.birthdate') }}</label>
                            <input class="form-control date {{ $errors->has('birthdate') ? 'is-invalid' : '' }}"
                                   type="text"
                                   name="birthdate" id="birthdate" value="{{ old('birthdate', $user->birthdate) }}">
                            @if($errors->has('birthdate'))
                                <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.birthdate_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                            <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                   name="email"
                                   id="email" value="{{ old('email', $user->email) }}" required>
                            @if($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                            <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                   type="password"
                                   name="password" id="password">
                            @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.password_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.user.fields.lang') }}</label>
                            <select class="form-control {{ $errors->has('lang') ? 'is-invalid' : '' }}" name="lang"
                                    id="lang"
                                    required>
                                <option value
                                        disabled {{ old('lang', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\User::LANG_SELECT as $key => $label)
                                    <option
                                            value="{{ $key }}" {{ old('lang', $user->lang) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('lang'))
                                <span class="text-danger">{{ $errors->first('lang') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.lang_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="taxno">{{ trans('cruds.user.fields.taxno') }}</label>
                            <input class="form-control {{ $errors->has('taxno') ? 'is-invalid' : '' }}" type="text"
                                   name="taxno"
                                   id="taxno" value="{{ old('taxno', $user->taxno) }}">
                            @if($errors->has('taxno'))
                                <span class="text-danger">{{ $errors->first('taxno') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.taxno_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="phone_1">{{ trans('cruds.user.fields.phone_1') }}</label>
                            <input class="form-control {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" type="text"
                                   name="phone_1"
                                   id="phone_1" value="{{ old('phone_1', $user->phone_1) }}">
                            @if($errors->has('phone_1'))
                                <span class="text-danger">{{ $errors->first('phone_1') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.phone_1_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="phone_2">{{ trans('cruds.user.fields.phone_2') }}</label>
                            <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text"
                                   name="phone_2"
                                   id="phone_2" value="{{ old('phone_2', $user->phone_2) }}">
                            @if($errors->has('phone_2'))
                                <span class="text-danger">{{ $errors->first('phone_2') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.phone_2_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="phone_3">{{ trans('cruds.user.fields.phone_3') }}</label>
                            <input class="form-control {{ $errors->has('phone_3') ? 'is-invalid' : '' }}" type="text"
                                   name="phone_3"
                                   id="phone_3" value="{{ old('phone_3', $user->phone_3) }}">
                            @if($errors->has('phone_3'))
                                <span class="text-danger">{{ $errors->first('phone_3') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.phone_3_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="fax">{{ trans('cruds.user.fields.fax') }}</label>
                            <input class="form-control {{ $errors->has('fax') ? 'is-invalid' : '' }}" type="text"
                                   name="fax"
                                   id="fax" value="{{ old('fax', $user->fax) }}">
                            @if($errors->has('fax'))
                                <span class="text-danger">{{ $errors->first('fax') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.fax_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.user.fields.address') }}</label>
                            <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text"
                                   name="address"
                                   id="address" value="{{ old('address', $user->address) }}">
                            @if($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.address_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="zipcode">{{ trans('cruds.user.fields.zipcode') }}</label>
                            <input class="form-control {{ $errors->has('zipcode') ? 'is-invalid' : '' }}" type="text"
                                   name="zipcode"
                                   id="zipcode" value="{{ old('zipcode', $user->zipcode) }}">
                            @if($errors->has('zipcode'))
                                <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.zipcode_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="city">{{ trans('cruds.user.fields.city') }}</label>
                            <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text"
                                   name="city"
                                   id="city" value="{{ old('city', $user->city) }}">
                            @if($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.city_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="prov">{{ trans('cruds.user.fields.prov') }}</label>
                            <input class="form-control {{ $errors->has('prov') ? 'is-invalid' : '' }}" type="text"
                                   name="prov"
                                   id="prov" value="{{ old('prov', $user->prov) }}">
                            @if($errors->has('prov'))
                                <span class="text-danger">{{ $errors->first('prov') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.prov_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="factor_id">{{ trans('cruds.user.fields.factor') }}</label>
                            <select class="form-control select2 {{ $errors->has('factor') ? 'is-invalid' : '' }}"
                                    name="factor_id"
                                    id="factor_id" required>
                                @foreach($factors as $id => $factor)
                                    <option
                                            value="{{ $id }}" {{ ($user->factor ? $user->factor->id : old('factor_id')) == $id ? 'selected' : '' }}>{{ $factor }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('factor'))
                                <span class="text-danger">{{ $errors->first('factor') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.factor_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="license">{{ trans('cruds.user.fields.license') }}</label>
                            <input class="form-control {{ $errors->has('license') ? 'is-invalid' : '' }}" type="text"
                                   name="license"
                                   id="license" value="{{ old('license', $user->license) }}">
                            @if($errors->has('license'))
                                <span class="text-danger">{{ $errors->first('license') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.license_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="planes">{{ trans('cruds.user.fields.plane') }}</label>
                            <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all"
                          style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all"
                                      style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2 {{ $errors->has('planes') ? 'is-invalid' : '' }}"
                                    name="planes[]"
                                    id="planes" multiple>
                                @foreach($planes as $id => $plane)
                                    <option
                                            value="{{ $id }}" {{ (in_array($id, old('planes', [])) || $user->planes->contains($id)) ? 'selected' : '' }}>{{ $plane }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('planes'))
                                <span class="text-danger">{{ $errors->first('planes') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.plane_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="medical_due">{{ trans('cruds.user.fields.medical_due') }}</label>
                            <input class="form-control date {{ $errors->has('medical_due') ? 'is-invalid' : '' }}"
                                   type="text"
                                   name="medical_due" id="medical_due"
                                   value="{{ old('medical_due', $user->medical_due) }}">
                            @if($errors->has('medical_due'))
                                <span class="text-danger">{{ $errors->first('medical_due') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.medical_due_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="associate_due">{{ trans('cruds.user.fields.associate_due') }}</label>
                            <input class="form-control date {{ $errors->has('associate_due') ? 'is-invalid' : '' }}"
                                   type="text"
                                   name="associate_due" id="associate_due" value="{{ old('associate_due', $user->associate_due) }}">
                            @if($errors->has('associate_due'))
                                <span class="text-danger">{{ $errors->first('associate_due') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.associate_due_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                            <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all"
                          style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all"
                                      style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}"
                                    name="roles[]"
                                    id="roles" multiple required>
                                @foreach($roles as $id => $roles)
                                    <option
                                            value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $roles }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <span class="text-danger">{{ $errors->first('roles') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.roles_helper') }}</span>
                        </div>
						<div class="form-group">
                            <label for="notes">{{ trans('cruds.user.fields.notes') }}</label>
                            <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" rows="10" cols="50"
                                   name="notes"
                                   id="notes">{{ old('notes', $user->notes) }}</textarea>
                            @if($errors->has('notes'))
                                <span class="text-danger">{{ $errors->first('notes') }}</span>
                            @endif
                            <span class="help-block text-secondary small">{{ trans('cruds.user.fields.notes_helper') }}</span>
                        </div>
                        {{--            <div class="form-group">--}}
                        {{--                <div class="form-check {{ $errors->has('instructor') ? 'is-invalid' : '' }}">--}}
                        {{--                    <input type="hidden" name="instructor" value="0">--}}
                        {{--                    <input class="form-check-input" type="checkbox" name="instructor" id="instructor" value="1" {{ $user->instructor || old('instructor', 0) === 1 ? 'checked' : '' }}>--}}
                        {{--                    <label class="form-check-label" for="instructor">{{ trans('cruds.user.fields.instructor') }}</label>--}}
                        {{--                </div>--}}
                        {{--                @if($errors->has('instructor'))--}}
                        {{--                    <span class="text-danger">{{ $errors->first('instructor') }}</span>--}}
                        {{--                @endif--}}
                        {{--                <span class="help-block text-secondary small">{{ trans('cruds.user.fields.instructor_helper') }}</span>--}}
                        {{--            </div>--}}
                        <div class="form-group">
                            <button class="btn btn-primary float-right" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

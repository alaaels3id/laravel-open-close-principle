@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <select
                            name="icon"
                            id="icon"
                            class="icons_select2 form-control form-data"
                            data-size="auto"
                            title="@lang('back.select-a-value')"
                        >
                            @foreach($icons as $icon)
                                <option data-icon="{{ $icon->class }}" value="{{ $icon->class }}">
                                    {{ Str::of($icon->name)->headline() }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

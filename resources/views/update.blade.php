<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Update User</h2>
                {!! Form::open([
                    'url' => route('user.update', ['id' => $data->id]),
                    'method' => 'POST'
                ]) !!}

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    {{ Form::text('name', $data->name, [
                        'id' => 'name',
                        'class' => 'form-control',
                        'required' => 'required',
                        'autofocus' => 'autofocus',
                        'autocomplete' => 'name'
                    ]) }}
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    {{ Form::text('email', $data->email, [
                        'id' => 'email',
                        'class' => 'form-control',
                        'required' => 'required',
                        'autocomplete' => 'email'
                    ]) }}
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">{{ __('Number') }}</label>
                    {{ Form::text('number', $data->number, [
                        'id' => 'number',
                        'class' => 'form-control',
                        'required' => 'required',
                        'autocomplete' => 'off'
                    ]) }}
                    <x-input-error :messages="$errors->get('number')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('Gender') }}</label>
                    <div>
                        <label for="male" class="form-check form-check-inline">
                            {{ Form::radio('gender', 'male', $data->gender === 'male', ['id' => 'male', 'class' => 'form-check-input']) }}
                            <span class="ms-1">{{ __('Male') }}</span>
                        </label>
                        <label for="female" class="form-check form-check-inline">
                            {{ Form::radio('gender', 'female', $data->gender === 'female', ['id' => 'female', 'class' => 'form-check-input']) }}
                            <span class="ms-1">{{ __('Female') }}</span>
                        </label>
                        <!-- Add more options as needed -->
                    </div>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">{{ __('Date') }}</label>
                    {{ Form::date('date', $data->date, [
                        'id' => 'date',
                        'class' => 'form-control',
                        'required' => 'required'
                    ]) }}
                    <x-input-error :messages="$errors->get('date')" class="mt-2" />
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>

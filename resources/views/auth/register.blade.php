<x-guest-layout>

    {!! Form::open([
    'url' => route('register'),
    'method' => 'POST'
    ]) !!}



    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        {{ Form::text('name', old('name'), [
       'id' => 'name',
        'required'=>'name',
        'autofocus'=>'name',
        'autocomplete' => 'name',
       'class' => 'block mt-1 w-full'
       ]) }}


        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        {{ Form::text('email', old('email'), [
       'id' => 'email',
        'required'=>'email',
        'autofocus'=>'email',
        'autocomplete' => 'name',
       'class' => 'block mt-1 w-full'
       ]) }}


        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>


   <!-- Number -->
<div>
    <x-input-label for="number" :value="__('Number')" />
    {{ Form::text('number', old('number'), [
        'id' => 'number',
        'required' => 'required',
        'autofocus' => 'autofocus',
        'autocomplete' => 'off', // Adjust autocomplete as needed
        'class' => 'block mt-1 w-full'
    ]) }}
    <x-input-error :messages="$errors->get('number')" class="mt-2" />
</div>

  <!-- Gender -->
<div>
    <x-input-label for="gender" :value="__('Gender')" />
    <div>
        <label for="male" class="inline-flex items-center">
            {{ Form::radio('gender', 'male',
                 old('gender') === 'male',
                 ['id' => 'male']) }}
            <span class="ml-2">Male</span>
        </label>
        <label for="female" class="inline-flex items-center ml-6">
            {{ Form::radio('gender', 'female',
                old('gender') === 'female',
                 ['id' => 'female']) }}
            <span class="ml-2">Female</span>
        </label>
        <!-- Add more options as needed -->
    </div>
    <x-input-error :messages="$errors->get('gender')" class="mt-2" />

    <!-- Date -->
<div>
    <x-input-label for="date" :value="__('Date')" />
    {{ Form::date('date', \Carbon\Carbon::now(), [
        'id' => 'date',
        'class' => 'block mt-1 w-full',
        'required' => 'required'
    ]) }}
    <x-input-error :messages="$errors->get('date')" class="mt-2" />
</div>

</div>

    <!-- Password -->
    <div>
    <x-input-label for="password" :value="__('password')" />

    {{ Form::password('password', [
        'id' => 'password',
        'required' => 'required',
        'autofocus' => null,
        'autocomplete' => 'new-password',
        'class' => 'block mt-1 w-full'
    ]) }}

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>


    <!-- Confirm Password -->
    <div>
    <x-input-label for="password_confirmation" :value="__('password_confirmation')" />

    {{ Form::password('password_confirmation', [
        'id' => 'password_confirmation',
        'required' => 'required',
        'autofocus' => null,
        'autocomplete' => 'new-password',
        'class' => 'block mt-1 w-full'
    ]) }}

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>


    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
    <!-- </form> -->
    {!! Form::close() !!}

</x-guest-layout>



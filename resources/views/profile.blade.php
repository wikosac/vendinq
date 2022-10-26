@extends('dashboard')

@section('container')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="POST" action="/profile/update">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <label for="name" class="form-label">Name : </label>
                                    <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ auth()->user()->username }}" autofocus>
                                </div>
                                <div>
                                    <label for="email" class="form-label">Email : </label>
                                    <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ auth()->user()->email }}" autofocus>
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <label for="new_password" class="form-label">New Password : </label>
                                    <input id="new_password" class="block mt-1 w-full" 
                                            type="password" 
                                            name="new_password" 
                                            autocomplete="new-password">
                                </div>
                                <div>
                                    <label for="new_password" class="form-label">Confirm Password : </label>
                                    <input id="confirm_password" class="block mt-1 w-full" 
                                            type="password" 
                                            name="password_confirmation" 
                                            autocomplete="confirm-password">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button class="ml-3">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection
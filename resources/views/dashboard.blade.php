@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-4 rounded-lg">
            @if (session('success'))
                <div class="text-center py-1 lg:px-4">
                    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                        <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Congratulation</span>
                        <span class="font-semibold mr-2 text-left flex-auto">{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            <h1>Dashboard</h1>
        </div>
    </div>
@endsection

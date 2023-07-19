{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

{{-- @extends('layouts.app') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Clothistic - Account Detail</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
</head>

<body>
    <section class="py-5 my-5">
        <div class="container">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">
                    <div class="p-4">
                        <div class="img-circle text-center mb-3">
                            <img src="{{ asset('image/user1.jpg') }}" alt="Image" class="shadow">
                        </div>
                        <h4 class="text-center">{{ $user->name }}</h4>
                        <p class="text-center mail">{{ $user->email }}</p>
                        <div class="btn-img">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-dark rouded-0 shadow ">LOGOUT</button>
                            </form>
                            <br>
                            <a href="/"><button class="btn btn-dark rouded-0 shadow ">BACK</button></a>
                        </div>
                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4">Account Detail</h3>
                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Last name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="Gender">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6 border-bottom border-bottom">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="MM/DD/YY">
                                    </div>
                                </div>
                                <div class="col-md-6 border-bottom ">
                                </div>
                                <div class="col-md-6 ">
                                    <h3 class="ch-pw">Change Password</h3>
                                    <div class="pw">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-acc">
                                    <button type="submit" form class="btn btn-dark">SAVE
                                        CHANGE</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>

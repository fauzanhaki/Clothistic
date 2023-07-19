<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
    <!-- Home -->
    <section class="home">
        <div class="form_container">
            <i class="form_close"></i>

            <!-- Signup From -->
            <div class="form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2>Signup</h2>

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    <div class="input_box">
                        <i class="uil uil-user circle"></i>
                        <input type="text" placeholder="Enter your name" name="name" required />
                    </div>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" name="email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Password" name="password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Confirm password" name="password_confirmation" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <button class="button">Signup Now</button>

                    <div class="login_signup">Already have an account? <a href="{{ route('login') }}"
                            id="login">Login</a></div>
                </form>
            </div>

        </div>
    </section>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>

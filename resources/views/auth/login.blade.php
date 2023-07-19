<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>

    <!-- Home -->
    <section class="home">
        <div class="form_container">

            <i class="form_close"></i>
            <!-- Login From -->
            <div class="form">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <h2>Login</h2>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div class="input_box">
                        <input type="email" placeholder="Email" name="email" autofocus required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Enter your password" name="password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="remember_me" name="remember" />
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>

                    <button class="button">Login Now</button>

                    <div class="login_signup">Don't have an account? <a href="{{ route('register') }}"
                            id="signup">Signup</a></div>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>

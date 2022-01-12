<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# How To Add Google's Two Factor Authentication To A Laravel 8 Application.

In this guide, you will learn how to use Google Authenticator to implement Time based One-Time Password (TOTP) specified in [RFC 6238.](https://datatracker.ietf.org/doc/html/rfc6238) which uses HMAC-Based One-Time Password Algorithm (HOTP) specified in [RFC 4226](https://datatracker.ietf.org/doc/html/rfc4226) in building an authentication system.


We will be using [this package](https://github.com/antonioribeiro/google2fa) to implement the [Google Two-Factor Authentication](https://github.com/antonioribeiro/google2fa) on our Laravel Application....**[Read More](https://dev.to/roxie/how-to-add-google-s-two-factor-authentication-to-a-laravel-8-application-4jjp)**

## Installation

- `composer require eusebiu/laravel-spark-google2fa`
- `php artisan vendor:publish --provider="Eusebiu\LaravelSparkGoogle2FA\Google2FAServiceProvider" --force`
- `php artisan migrate`
- `npm run dev`


<p align="center">
    <a href="https://bluepundit.eu" target="_blank"><img src="https://bluepundit.eu/img/bluepundit-logo-pundit.png?1" height="100"></a><br>
    <a href="https://harbour.space" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Harbour.Space_Logo_2.png/800px-Harbour.Space_Logo_2.png" height="100" alt="Laravel Logo"></a></p>

## About Extra
Extra is a project that is used to demonstrate how to use Laravel to build a web
application.
It belongs to the course MWA2 at [Harbour.Space University](https://harbour.space/).
The lecturer is [Nico Deblauwe](https://bluepundit.eu).

The project is a simple application for sending invoices to customers.

## Requirements
The project is built using the [TALL stack](https://tallstack.dev/), more specifically [Laravel 10](https://laravel.com) for the backend,
with [Tailwind CSS](https://tailwindcss.com/)
and [Alpine.js](https://alpinejs.dev/) for the frontend.

Tooling used for local development:
- [Ray](https://myray.app) for sending debug info to a separate app (paid)
- [Debugbar](https://github.com/barryvdh/laravel-debugbar) for displaying profiling data (free)
- [Helo](https://usehelo.com/) for email testing
- [Tinkerwell](https://tinkerwell.app/) for testing/debugging during development (paid)

## Environment keys
The following env keys (extra compared to a standard Laravel project) are used:
- `FLARE_KEY` (go to [flareapp.io](https://flareapp.io/) to obtain a key - **not free**)

## Installation instructions
Clone the repository and install the dependencies:

```sh
git clone https://github.com/ndeblauw/hsdemo.git
composer install
```
Create a database and set the credentials in the .env file.

(Re)generate the tables and seed with dummy data
```sh
php artisan migrate:fresh --seed
```
Set the application key
```sh
php artisan key:generate
```

### Development
Make sure a (local) email testing service is running (e.g. Helo)

### Production
- It's better to use the **database driver for the queues** (and don't forget to configure a queue worker).
- Don't forget to **set up the scheduler** (e.g. cron job) to run the schedule:run command every minute.
- The scheduler comes with a **backup service**, don't forget to configure a remote S3 disk (or change the backup location) to have this working

## Contributing
Any pull request from a student that improves this code is welcomed.

## Security Vulnerabilities
If you discover a security vulnerability, please send an e-mail to Nico Deblauwe via [nico@bluepundit.eu](mailto:nico@bluepundit.eu).
Security vulnerabilities will be promptly addressed.

## License
This project can only be used for educational purposes, not limited in time, nor to any institution. There are no rights to use this code for any other purpose. Please reference the orginal repository if you use this code.


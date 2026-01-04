# Laravel Nova Jalali Date Filter

A jalali (persian) date/datetime resource filter for Laravel Nova

## Requirements

- `php: ^8.2`
- `laravel: ^12.0`
- `laravel/nova: ^5.0`

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require xamani/nova-jalali-date-filter
```

## Usage

Extend `Xamani\JalaliDateFilter\JalaliDateFilter`:

```php
use Xamani\JalaliDateFilter\JalaliDateFilter;

class DueOn extends JalaliDateFilter
{...}
```

Add the field to your resource in the ```filters``` method:

```php
use App\Nova\Filters\DueOn;

DueOn::make()
    ->color('rgb(30, 136, 229)') // customize color
    ->locale('fa,en') // customize locale
    ->format('jYYYY/jMM/jDD') // customize format
    ->type('date'), // date or datetime
```

The filter extends the `Laravel\Nova\Filters\Filter` filter, so all the usual methods are available.

## Credits

- [Vue Persian DateTime Picker](https://github.com/talkhabi/vue3-persian-datetime-picker)

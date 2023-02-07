# pablozagni/flowbite-blade-components

FBC = Flowbite Blade Components.

Set of custom Laravel Blade components using Flowbite.

Laravel 9 uses Tailwindow. One of the most powerfull component suite is Flowbite. But we need Blade Components to write less code. Here are my set of components. Feel free to modify, add and summit your components.

Use:

php artisan vendor:publish --tag=fbc-views

To publish components to \resources\views\vendors\fbc\components

Usage:

<x-fbc::table>
    {...}
</x-fbc::table>

in any view
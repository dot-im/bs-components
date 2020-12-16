# Laravel Bootstarp Components

#### Installation
via composer

```bash
composer require dot-im/bs-components
```

and clear view cache

```bash
php artisan view:clear
```

# Available Components

#### Alert
Alert syntax

```blade
{{-- Default alert success --}}
<x-bs-alert>Alert message</x-bs-alert>

{{-- Alert one line syntax --}}
<x-bs-alert type="danger" message="Alert message" />

{{-- Alert translate message --}}
<x-bs-alert trans="Alert message" />

{{-- Alert dismissible --}}
<x-bs-alert message="Alert message" dismissible />
```

#### Breadcrumb
Breadcrumb syntax

```blade
<x-bs-breadcrumb>
  {{-- Bredcrumb item with href --}}
  <x-bs-breadcrumb-item text="home" href="/home" />
  
  {{-- Bredcrumb item with call url() function --}}
  <x-bs-breadcrumb-item text="home" url="home" />
  
  {{-- Bredcrumb item with call route() function --}}
  <x-bs-breadcrumb-item text="home" route="home" />
  
  {{-- Bredcrumb item with call trans() text function --}}
  <x-bs-breadcrumb-item trans="home" />
  
  {{-- Bredcrumb item is active --}}
  <x-bs-breadcrumb-item text="home" active />
</x-bs-breadcrumb>
```

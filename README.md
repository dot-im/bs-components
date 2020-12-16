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

#### Card
Card syntax

```blade
<x-bs-card header="Card Header">
  <h1>Card body</h1>
</x-bs-card>

{{-- Card with slots --}}
<x-bs-card>
  <x-slot name="header">
    Card Header
  </x-slot>
  
  <x-slot name="body">
    Card body
  </x-slot>
  
  <x-slot name="footer">
    Card footer
  </x-slot>
</x-bs-card>
```

#### Btn
Btn syntax

```blade
<x-bs-btn>
  Default btn success
</x-bs-btn>

{{-- one line syntax --}}
<x-bs-btn text="Default btn success" />

{{-- btn type --}}
<x-bs-btn text="Error" type="danger" />

{{-- btn disabled --}}
<x-bs-btn text="Default btn success" disabled />

{{-- btn a links --}}
<x-bs-btn text="link with href" href="home" />
<x-bs-btn text="link with url" url="home" />
<x-bs-btn text="link with route" route="home" />

{{-- btn sizes --}}
<x-bs-btn text="Small btn" size="sm" />
<x-bs-btn text="Larg btn" size="lg" />

{{-- btn translate text --}}
<x-bs-btn trans="translate btn" />
```

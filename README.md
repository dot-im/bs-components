# Requirements
* ``PHP >= 8.0.0``
* ``laravel/framework >= 8.12``

# Installation
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

#### Forms
Forms by default, it contains ``csrf``, ``method_field``, ``multipart/form-data``

And support all laravel routes ``[GET, POST, PATCH, PUT, DELETE]``
```blade
<x-bs-form method="PATCH" action="/new-user">
    {{-- form content --}}
</x-bs-form>

{{-- forum route action --}}
<x-bs-form method="POST" route="register"></x-bs-form>

{{-- forum url action --}}
<x-bs-form method="DELETE" url="/del-user"></x-bs-form>
```
#### Inputs
inputs syntax

```blade
{{-- Defult text input --}}
<x-bs-input placeholder="Welcome"/>

{{-- input type --}}
<x-bs-input type="email" />

{{-- input with label --}}
<x-bs-input type="email" label="Please insert the email."/>

{{-- input has old value --}}
<x-bs-input name="username" has-old/>
{{-- result is --}}
<input type="text" name="username" value="{{ old('username') }}" >

{{-- input has validation errors --}}
<x-bs-input name="username" has-errors/>

{{-- result is --}}
<input type="text" name="username" class="form-control @error('username') is-invalid @enderror">
@error('username')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
```
#### Select
select syntax

```blade
{{-- Select with options --}}
<x-bs-select :options="[
    'val1' => 'val1',
    'val2' => 'val2',
    'val3' => 'val3',
    'val4' => 'val4',
]" selected="val4"/>

{{-- Select with custom options --}}
<x-bs-select>
    <option value="one">1</option>
</x-bs-select>
```
# Html Attributes

All components can be add any html attribute like ``id``, ``class``, ``role`` like

```blade
{{-- Alert with class attribute --}}
<x-bs-alert class="custom alert" message="Alert message" />

{{-- card with class id attribute --}}
<x-bs-card class="my-card" id="card-1">
  card body
</x-bs-card>

{{-- btn with javascript attribute --}}
<x-bs-btn onclick="e.preventDefault();" text="javascript btn">
```

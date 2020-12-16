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
Alert syntax the default type is `alert-success`

```blade
<x-bs-alert>
  Alert message
</x-bs-alert>
```

Alert one line syntax
```blade
<x-bs-alert type="danger" message="Alert message" />
```

Alert translate message
```blade
<x-bs-alert trans="Alert message" />
```

Alert dismissible
```blade
<x-bs-alert message="Alert message" dismissible />
```

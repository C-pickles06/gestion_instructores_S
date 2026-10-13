# Overryde
El proyecto de **Etapa productiva** es un sistema de gestion de aprendices, instructores y actividades de formacion, lo cual nos lleva a tratar de mejorar el flujo de la entrega de las evidencias, asignacion de instructores de seguimiento y evaluacion, donde se implementará una interfaz de usuario (UI) con **Tailwind CSS** para una mejor experiencia de usuario. Como primera medida, se creará un dashboard principal para los usuarios autenticados, con el fin de tener un punto de partida para futuras implementaciones, donde se pueda tener una vista general de las actividades de formacion, asignacion de instructores de seguimiento y evaluación.

## Caracteristicas

- Interfaz de usuario intuitiva y moderna
- Sistema de gestion de aprendices
- Sistema de gestion de instructores
- Sistema de gestion de actividades de formacion
- Sistema de notificaciones
- Sistema de reportes
- Sistema de configuracion

## Estructura del proyecto

```text
Etapa productiva/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/
│   │       │   ├── AuthenticatedSessionController.php
│   │       │   ├── ConfirmablePasswordController.php
│   │       │   ├── NewPasswordController.php
│   │       │   ├── PasswordResetLinkController.php
│   │       │   └── RegisteredUserController.php
│   │       └── DashboardController.php
│   ├── Models/
│   ├── Providers/
│   ├── Services/
│   └── Utils/
├── bootstrap/
│   └── app.php
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   ├── seeders/
│   └── schemas/
├── public/
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── resources/
│   ├── js/
│   │   ├── app.js
│   │   └── components/
│   │       ├── TestComponent.vue
│   │       └── ExampleComponent.vue
│   └── views/
│       ├── auth/
│       │   ├── confirm-password.blade.php
│       │   ├── login.blade.php
│       │   ├── reset-password.blade.php
│       │   └── register.blade.php
│       └── dashboard.blade.php
├── routes/
│   ├── web.php
│   ├── api.php
│   └── console.php
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
├── tests/
├── tools/
│   ├── .php-cs-fixer.dist.php
│   └── phpmd.xml
├── artisan
├── composer.json
├── package.json
├── postcss.config.js
├── tailwind.config.js
├── webpack.mix.js
└── vite.config.js
```

## Dependencias

### Laravel

- guzzlehttp/guzzle: ~7.0
- laravel/framework: ^11.1
- laravel/jetstream: ^4.1
- laravel/sanctum: ^4.1
- laravel/tinker: ^2.9
- nunomaduro/collision: ^8.1

### Tailwind CSS

- tailwindcss/forms: ^1.5
- tailwindcss/ui: ^0.6.0

### Testing

- pestphp/pest: ^3.5
- PHPUnit/PHPUnit: ^11.0
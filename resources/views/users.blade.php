<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Control' }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-100 font-sans text-slate-800">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white flex flex-col justify-between hidden md:flex">
            <div>
                <!-- Logo -->
                <div class="h-16 flex items-center px-6 border-b border-slate-800">
                    <span class="text-xl font-bold tracking-wider text-indigo-400">
                        <i class="fa-solid fa-cube mr-2"></i>Etapa productiva
                    </span>
                    <span class="h-2 text-xs text-slate-500">CAA Fonseca, Regional Guajira</span>
                </div>

                <!-- Navigation -->
                <nav class="mt-6 px-4 space-y-1">
                    <a href="#" class="flex items-center px-4 py-3 bg-indigo-600 text-white rounded-lg transition font-medium">
                        <i class="fa-solid fa-chart-line w-6"></i>
                        <span>Dashboard</span>
                    </a>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition font-medium">
                        <i class="fa-solid fa-cart-shopping w-6"></i>
                        <span>Aprendices</span>
                    </a>

                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition font-medium">
                        <i class="fa-solid fa-file-invoice w-6"></i>
                        <span>Instructores</span>

                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition font-medium">
                        <i class="fa-solid fa-file-invoice w-6"></i>
                        <span>Reportes</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-lg transition font-medium">
                        <i class="fa-solid fa-gear w-6"></i>
                        <span>Configuración</span>
                    </a>
                </nav>
            </div>

            <!-- User profile bottom -->
            <div class="p-4 border-t border-slate-800 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center font-bold">
                    {{ substr(auth()->user()->name ?? 'Admin', 0, 1) }}
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-semibold truncate">{{ auth()->user()->name ?? 'Administrador' }}</p>
                    <p class="text-xs text-slate-400 truncate">{{ auth()->user()->email ?? 'admin@ejemplo.com' }}</p>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6">
                <div class="flex items-center gap-4">
                    <button class="md:hidden text-slate-600 focus:outline-none">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                    <h1 class="text-lg font-semibold text-slate-700">Dashboard General</h1>
                </div>

                <div class="flex items-center gap-4">
                    <!-- Notifications -->
                    <button class="text-slate-500 hover:text-slate-700 relative p-2">
                        <i class="fa-regular fa-bell text-lg"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>

                    <!-- Logout Button -->
                    <form method="POST" action="{{ route('logout') ?? '#' }}" class="inline">
                        @csrf
                        <button type="submit" class="text-sm bg-slate-100 hover:bg-slate-200 px-3 py-1.5 rounded-lg text-slate-600 transition">
                            <i class="fa-solid fa-right-from-bracket mr-1"></i> Salir
                        </button>
                    </form>
                </div>
            </header>

            <!-- Dashboard Body -->
            <main class="flex-1 p-6 space-y-6">
                <!-- Stat Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs uppercase font-semibold text-slate-500">a</p>
                            <h3 class="text-2xl font-bold mt-1 text-slate-800">0</h3> <!-- Esto se sacara de la base de datos -->                            <span class="text-xs text-emerald-600 font-semibold"><i class="fa-solid fa-arrow-up"></i> +14.2%</span>
                        </div>
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center text-xl">
                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs uppercase font-semibold text-slate-500">Nuevos Usuarios</p>
                            <h3 class="text-2xl font-bold mt-1 text-slate-800">1,240</h3>
                            <span class="text-xs text-emerald-600 font-semibold"><i class="fa-solid fa-arrow-up"></i> +8.1%</span>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center text-xl">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs uppercase font-semibold text-slate-500">Pedidos Activos</p>
                            <h3 class="text-2xl font-bold mt-1 text-slate-800">85</h3>
                            <span class="text-xs text-rose-500 font-semibold"><i class="fa-solid fa-arrow-down"></i> -2.4%</span>
                        </div>
                        <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-lg flex items-center justify-center text-xl">
                            <i class="fa-solid fa-box"></i>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs uppercase font-semibold text-slate-500">Conversión</p>
                            <h3 class="text-2xl font-bold mt-1 text-slate-800">4.3%</h3>
                            <span class="text-xs text-emerald-600 font-semibold"><i class="fa-solid fa-arrow-up"></i> +0.6%</span>
                        </div>
                        <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center text-xl">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                    </div>
                </div>

                

                    <!-- Recent Activity -->
                    <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-sm">
                        <h2 class="font-semibold text-slate-700 mb-4">Últimas Acciones</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 mt-2"></span>
                                <div>
                                    <p class="text-sm font-medium text-slate-700">Nueva orden #1042 registrada</p>
                                    <span class="text-xs text-slate-400">Hace 12 min</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-blue-500 mt-2"></span>
                                <div>
                                    <p class="text-sm font-medium text-slate-700">Usuario registrado: Carlos M.</p>
                                    <span class="text-xs text-slate-400">Hace 45 min</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-2 h-2 rounded-full bg-amber-500 mt-2"></span>
                                <div>
                                    <p class="text-sm font-medium text-slate-700">Factura #89 generada</p>
                                    <span class="text-xs text-slate-400">Hace 2 horas</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Recent Records Table -->
            </main>
        </div>
    </div>
    
</body>
</html>
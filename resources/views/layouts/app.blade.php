<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		{{ $title ?? config('app.name') }} | {{ config('app.name') }}
		@if(app()->isLocal()) (App) @endif
	</title>

	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	@vite(['resources/css/app.css', 'resources/js/app.js'])

	@livewireStyles
</head>

<body x-init="
    let savedStatus = localStorage.getItem('sidebarCollapsed') === 'true';
    Alpine.store('sidebar', {
        collapsed: window.innerWidth < 1024 ? true : savedStatus,
        isMobile: window.innerWidth < 768
    });
    window.addEventListener('resize', () => {
        Alpine.store('sidebar').isMobile = window.innerWidth < 768;
    });
    $watch('$store.sidebar.collapsed', value => {
        localStorage.setItem('sidebarCollapsed', value);
    });"
	class="bg-background text-on-surface font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed flex min-h-screen">
	<livewire:app.sidebar />
	<main class="flex-1 flex flex-col min-w-0">
		<livewire:app.header />
		<section class="p-8 mt-12 min-h-screen">
			{{ $slot }}
		</section>
	</main>
	<!-- Mobile Backdrop -->
	<div x-show="$store.sidebar.isMobile && !$store.sidebar.collapsed"
		x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
		x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="$store.sidebar.collapsed = true"
		class="fixed inset-0 bg-black/50 z-50 md:hidden">
	</div>
	@livewireScripts
</body>

</html>

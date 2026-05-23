<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		{{ $title ?? config('app.name') }} | {{ config('app.name') }}
		@if(app()->isLocal()) (Single) @endif
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

<body>
	{{ $slot }}
	@livewireScripts
</body>

</html>

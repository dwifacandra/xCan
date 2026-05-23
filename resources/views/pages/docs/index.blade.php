<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>xCan Core - Developer Guide</title>
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
	<link
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
		rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css2?family=Geist:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap"
		rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
		rel="stylesheet" />
	<script id="tailwind-config">
		tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        "colors": {
                "secondary-container": "#e1272b",
                "on-secondary-fixed": "#410003",
                "surface": "#f9f9f9",
                "tertiary-fixed": "#e5e1e4",
                "surface-container": "#eeeeee",
                "outline": "#767685",
                "inverse-primary": "#bec2ff",
                "secondary-fixed": "#ffdad6",
                "outline-variant": "#c6c5d6",
                "surface-tint": "#454ecf",
                "on-surface-variant": "#454654",
                "surface-dim": "#dadada",
                "primary-container": "#1218a6",
                "surface-container-low": "#f3f3f3",
                "surface-container-high": "#e8e8e8",
                "secondary-fixed-dim": "#ffb3ac",
                "primary-fixed-dim": "#bec2ff",
                "on-primary-container": "#8c94ff",
                "on-background": "#1a1c1c",
                "on-tertiary-fixed-variant": "#474649",
                "inverse-on-surface": "#f0f1f1",
                "on-primary-fixed": "#00016d",
                "error": "#ba1a1a",
                "primary": "#00017a",
                "on-error-container": "#93000a",
                "surface-variant": "#e2e2e2",
                "tertiary": "#1f1f21",
                "tertiary-fixed-dim": "#c8c6c8",
                "surface-bright": "#f9f9f9",
                "on-secondary-container": "#fffbff",
                "background": "#f9f9f9",
                "inverse-surface": "#2f3131",
                "on-error": "#ffffff",
                "on-primary-fixed-variant": "#2b32b7",
                "tertiary-container": "#353436",
                "surface-container-lowest": "#ffffff",
                "on-tertiary": "#ffffff",
                "on-surface": "#1a1c1c",
                "error-container": "#ffdad6",
                "secondary": "#bb0017",
                "on-tertiary-container": "#9e9c9f",
                "on-tertiary-fixed": "#1c1b1d",
                "on-primary": "#ffffff",
                "primary-fixed": "#e0e0ff",
                "on-secondary": "#ffffff",
                "on-secondary-fixed-variant": "#93000f",
                "surface-container-highest": "#e2e2e2"
        },
        "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
        },
        "spacing": {},
        "fontFamily": {
                "headline": [
                        "Geist"
                ],
                "display": [
                        "Geist"
                ],
                "body": [
                        "Inter"
                ],
                "label": [
                        "JetBrains Mono"
                ]
        },
        "fontSize": {}
},
    },
  }
	</script>
	<style>
		body {
			font-family: 'Inter', sans-serif;
			background-color: theme('colors.background');
			color: theme('colors.on-background');
		}

		.font-headline {
			font-family: 'Geist', sans-serif;
		}

		.font-label {
			font-family: 'JetBrains Mono', monospace;
		}
	</style>
</head>

<body class="bg-background text-on-background">
	<!-- Shared Component TopNavBar start -->
	<div class="relative flex h-auto min-h-screen w-full flex-col bg-[#f8f8fc] group/design-root overflow-x-hidden"
		style='font-family: "Be Vietnam Pro", "Noto Sans", sans-serif;'>
		<div class="layout-container flex h-full grow flex-col">
			<div class="px-40 flex flex-1 justify-center py-5">
				<div
					class="layout-content-container flex flex-col max-w-[960px] flex-1 bg-surface-container-lowest rounded-xl shadow-sm border border-surface-variant overflow-hidden">
					<header
						class="flex items-center justify-between whitespace-nowrap border-b border-solid border-surface-variant px-10 py-3 bg-surface-container-lowest">
						<div class="flex items-center gap-8">
							<div class="flex items-center gap-4 text-on-surface">
								<div class="size-4">
									<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M39.5563 34.1455V13.8546C39.5563 15.708 36.8773 17.3437 32.7927 18.3189C30.2914 18.916 27.263 19.2655 24 19.2655C20.737 19.2655 17.7086 18.916 15.2073 18.3189C11.1227 17.3437 8.44365 15.708 8.44365 13.8546V34.1455C8.44365 35.9988 11.1227 37.6346 15.2073 38.6098C17.7086 39.2069 20.737 39.5564 24 39.5564C27.263 39.5564 30.2914 39.2069 32.7927 38.6098C36.8773 37.6346 39.5563 35.9988 39.5563 34.1455Z"
											fill="currentColor"></path>
										<path clip-rule="evenodd"
											d="M10.4485 13.8519C10.4749 13.9271 10.6203 14.246 11.379 14.7361C12.298 15.3298 13.7492 15.9145 15.6717 16.3735C18.0007 16.9296 20.8712 17.2655 24 17.2655C27.1288 17.2655 29.9993 16.9296 32.3283 16.3735C34.2508 15.9145 35.702 15.3298 36.621 14.7361C37.3796 14.246 37.5251 13.9271 37.5515 13.8519C37.5287 13.7876 37.4333 13.5973 37.0635 13.2931C36.5266 12.8516 35.6288 12.3647 34.343 11.9175C31.79 11.0295 28.1333 10.4437 24 10.4437C19.8667 10.4437 16.2099 11.0295 13.657 11.9175C12.3712 12.3647 11.4734 12.8516 10.9365 13.2931C10.5667 13.5973 10.4713 13.7876 10.4485 13.8519ZM37.5563 18.7877C36.3176 19.3925 34.8502 19.8839 33.2571 20.2642C30.5836 20.9025 27.3973 21.2655 24 21.2655C20.6027 21.2655 17.4164 20.9025 14.7429 20.2642C13.1498 19.8839 11.6824 19.3925 10.4436 18.7877V34.1275C10.4515 34.1545 10.5427 34.4867 11.379 35.027C12.298 35.6207 13.7492 36.2054 15.6717 36.6644C18.0007 37.2205 20.8712 37.5564 24 37.5564C27.1288 37.5564 29.9993 37.2205 32.3283 36.6644C34.2508 36.2054 35.702 35.6207 36.621 35.027C37.4573 34.4867 37.5485 34.1546 37.5563 34.1275V18.7877ZM41.5563 13.8546V34.1455C41.5563 36.1078 40.158 37.5042 38.7915 38.3869C37.3498 39.3182 35.4192 40.0389 33.2571 40.5551C30.5836 41.1934 27.3973 41.5564 24 41.5564C20.6027 41.5564 17.4164 41.1934 14.7429 40.5551C12.5808 40.0389 10.6502 39.3182 9.20848 38.3869C7.84205 37.5042 6.44365 36.1078 6.44365 34.1455L6.44365 13.8546C6.44365 12.2684 7.37223 11.0454 8.39581 10.2036C9.43325 9.3505 10.8137 8.67141 12.343 8.13948C15.4203 7.06909 19.5418 6.44366 24 6.44366C28.4582 6.44366 32.5797 7.06909 35.657 8.13948C37.1863 8.67141 38.5667 9.3505 39.6042 10.2036C40.6278 11.0454 41.5563 12.2684 41.5563 13.8546Z"
											fill="currentColor" fill-rule="evenodd"></path>
									</svg>
								</div>
								<h2 class="text-on-surface text-lg font-bold leading-tight tracking-[-0.015em] font-headline">xCan Core
									v4 Docs</h2>
							</div>
							<label class="flex flex-col min-w-40 !h-10 max-w-64">
								<div
									class="flex w-full flex-1 items-stretch rounded-lg h-full border border-surface-variant overflow-hidden">
									<div
										class="text-on-surface-variant flex bg-surface-container-low items-center justify-center pl-4 pr-2"
										data-icon="search" data-size="20px" data-weight="regular">
										<span class="material-symbols-outlined text-[20px]">search</span>
									</div>
									<input
										class="flex w-full min-w-0 flex-1 resize-none bg-surface-container-low text-on-surface focus:outline-none placeholder:text-on-surface-variant px-2 text-sm font-normal leading-normal font-body"
										placeholder="Search" value="" />
								</div>
							</label>
						</div>
						<div class="flex flex-1 justify-end gap-8">
							<div class="flex items-center gap-9">
								<a class="text-on-surface text-sm font-medium leading-normal hover:text-primary transition-colors"
									href="#">Playground</a>
								<a class="text-on-surface text-sm font-medium leading-normal hover:text-primary transition-colors"
									href="#">Components</a>
								<a class="text-on-surface text-sm font-medium leading-normal hover:text-primary transition-colors"
									href="#">Tokens</a>
								<a class="text-on-surface text-sm font-medium leading-normal hover:text-primary transition-colors"
									href="#">Resources</a>
							</div>
							<div class="flex gap-2">
								<button
									class="flex cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-on-primary text-sm font-semibold leading-normal font-body hover:bg-primary-container transition-colors">
									<span class="truncate">GitHub</span>
								</button>
								<button
									class="flex cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-surface-variant text-on-surface text-sm font-semibold leading-normal font-body hover:bg-surface-dim transition-colors">
									<span class="truncate">v4.0.0</span>
								</button>
							</div>
						</div>
					</header>
					<div class="flex flex-1 flex-row">
						<!-- Sidebar -->
						<div
							class="w-64 flex-shrink-0 flex flex-col justify-between border-r border-surface-variant bg-surface-container-lowest p-4">
							<div class="flex flex-col gap-6">
								<div class="flex gap-3 items-center">
									<div
										class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 bg-primary-fixed flex items-center justify-center text-primary font-bold font-headline">
										xC</div>
									<div class="flex flex-col">
										<h1 class="text-on-surface text-sm font-semibold leading-normal font-headline">Developer Guide</h1>
										<p class="text-on-surface-variant text-xs font-label">v4.0.0</p>
									</div>
								</div>
								<nav class="flex flex-col gap-1">
									<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-surface-container-low transition-colors group"
										href="#">
										<span
											class="material-symbols-outlined text-on-surface-variant group-hover:text-primary text-[20px]">home</span>
										<p class="text-on-surface text-sm font-medium leading-normal font-body group-hover:text-primary">
											Overview</p>
									</a>
									<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary-fixed text-primary group" href="#">
										<span class="material-symbols-outlined text-[20px]"
											style="font-variation-settings: 'FILL' 1;">terminal</span>
										<p class="text-sm font-semibold leading-normal font-body">Playground</p>
									</a>
									<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-surface-container-low transition-colors group"
										href="#buttons">
										<span
											class="material-symbols-outlined text-on-surface-variant group-hover:text-primary text-[20px]">ads_click</span>
										<p class="text-on-surface text-sm font-medium leading-normal font-body group-hover:text-primary">
											Buttons &amp; Inputs</p>
									</a>
									<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-surface-container-low transition-colors group"
										href="#modal">
										<span
											class="material-symbols-outlined text-on-surface-variant group-hover:text-primary text-[20px]">web_asset</span>
										<p class="text-on-surface text-sm font-medium leading-normal font-body group-hover:text-primary">
											Modal</p>
									</a>
									<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-surface-container-low transition-colors group"
										href="#dialog">
										<span
											class="material-symbols-outlined text-on-surface-variant group-hover:text-primary text-[20px]">error</span>
										<p class="text-on-surface text-sm font-medium leading-normal font-body group-hover:text-primary">
											Confirm Dialog</p>
									</a>
								</nav>
							</div>
							<div class="flex flex-col gap-1 mt-8 border-t border-surface-variant pt-4">
								<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-surface-container-low transition-colors group"
									href="#">
									<span
										class="material-symbols-outlined text-on-surface-variant group-hover:text-primary text-[20px]">settings</span>
									<p class="text-on-surface text-sm font-medium leading-normal font-body group-hover:text-primary">
										Settings</p>
								</a>
							</div>
						</div>
						<!-- Main Content Area -->
						<div class="flex-1 flex flex-col overflow-y-auto bg-surface-container-lowest p-8 scroll-smooth">
							<!-- Hero / Intro -->
							<div class="flex flex-col gap-2 mb-10">
								<h1 class="text-on-surface text-4xl font-bold leading-tight tracking-[-0.033em] font-headline">
									Interactive Playground</h1>
								<p class="text-on-surface-variant text-base font-normal leading-normal font-body max-w-2xl">Experiment
									with components in a live sandbox environment. These examples utilize the xCan Core v4 design tokens,
									showcasing Alpine.js interactivity and Tailwind CSS structure.</p>
							</div>
							<!-- Buttons Section -->
							<section class="mb-12" id="buttons">
								<h2
									class="text-2xl font-semibold text-on-surface mb-4 font-headline border-b border-surface-variant pb-2">
									Buttons</h2>
								<div
									class="bg-surface-container-low border border-surface-variant rounded-lg p-8 flex flex-wrap gap-4 items-center justify-center mb-4">
									<button
										class="bg-primary text-on-primary px-4 py-2.5 rounded font-semibold text-sm hover:opacity-90 transition-opacity font-body shadow-sm">
										Royal Blue Button
									</button>
									<button
										class="bg-secondary text-on-secondary px-4 py-2.5 rounded font-semibold text-sm hover:opacity-90 transition-opacity font-body shadow-sm">
										Crimson Button
									</button>
									<button
										class="bg-transparent border border-outline text-on-surface px-4 py-2.5 rounded font-semibold text-sm hover:bg-surface-variant transition-colors font-body">
										Ghost Button
									</button>
								</div>
								<div class="bg-inverse-surface rounded-lg p-4 overflow-x-auto">
									<pre><code class="text-inverse-on-surface font-label text-sm">
&lt;!-- Primary (Royal Blue) --&gt;
&lt;button class="bg-primary text-on-primary px-4 py-2 rounded font-semibold"&gt;...&lt;/button&gt;

&lt;!-- Secondary (Crimson) --&gt;
&lt;button class="bg-secondary text-on-secondary px-4 py-2 rounded font-semibold"&gt;...&lt;/button&gt;
            </code></pre>
								</div>
							</section>
							<!-- Modal Section -->
							<section class="mb-12" id="modal">
								<h2
									class="text-2xl font-semibold text-on-surface mb-4 font-headline border-b border-surface-variant pb-2">
									Modal</h2>
								<p class="text-on-surface-variant mb-6 font-body text-sm">A standard overlay component for focused
									tasks. Uses a glassmorphic background layer in production.</p>
								<div
									class="bg-surface-container border border-surface-variant rounded-lg p-8 flex justify-center items-center mb-4 min-h-[300px]">
									<!-- Simulated Modal Card -->
									<div
										class="bg-surface-container-lowest border border-outline-variant rounded-xl shadow-lg w-full max-w-sm p-6 flex flex-col gap-4 transform scale-100">
										<div class="flex justify-between items-center border-b border-surface-variant pb-3">
											<h3 class="font-headline font-semibold text-lg text-on-surface">Configuration</h3>
											<button class="text-on-surface-variant hover:text-on-surface">
												<span class="material-symbols-outlined text-[20px]">close</span>
											</button>
										</div>
										<div class="py-2">
											<p class="text-sm text-on-surface-variant font-body">Update your environment settings here.
												Changes apply immediately upon saving.</p>
										</div>
										<div class="flex justify-end gap-3 pt-3">
											<button
												class="bg-transparent border border-outline-variant text-on-surface px-4 py-2 rounded font-medium text-sm hover:bg-surface-container-low transition-colors">Cancel</button>
											<button
												class="bg-primary text-on-primary px-4 py-2 rounded font-medium text-sm hover:opacity-90 transition-opacity">Save
												Changes</button>
										</div>
									</div>
								</div>
								<div class="bg-inverse-surface rounded-lg p-4 overflow-x-auto">
									<pre><code class="text-inverse-on-surface font-label text-sm">
&lt;!-- Alpine.js Implementation Example --&gt;
&lt;div x-data="{ open: false }"&gt;
  &lt;button @click="open = true" class="..."&gt;Open Modal&lt;/button&gt;

  &lt;div x-show="open" class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50"&gt;
    &lt;div @click.away="open = false" class="bg-surface-container-lowest rounded-xl p-6 w-full max-w-sm shadow-lg border border-outline-variant"&gt;
      &lt;h3 class="font-headline text-lg"&gt;Title&lt;/h3&gt;
      &lt;!-- Content --&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
								</div>
							</section>
							<!-- Confirm Dialog Section -->
							<section class="mb-12" id="dialog">
								<h2
									class="text-2xl font-semibold text-on-surface mb-4 font-headline border-b border-surface-variant pb-2">
									Confirm Dialog</h2>
								<p class="text-on-surface-variant mb-6 font-body text-sm">A specialized modal for destructive or
									critical actions, utilizing the Secondary (Crimson) token.</p>
								<div
									class="bg-surface-container border border-surface-variant rounded-lg p-8 flex justify-center items-center mb-4 min-h-[300px]">
									<!-- Simulated Dialog Card -->
									<div
										class="bg-surface-container-lowest border border-outline-variant rounded-xl shadow-lg w-full max-w-sm p-6 flex flex-col gap-4 transform scale-100 items-center text-center">
										<div
											class="size-12 rounded-full bg-error-container text-secondary flex items-center justify-center mb-2">
											<span class="material-symbols-outlined text-[28px]">warning</span>
										</div>
										<h3 class="font-headline font-semibold text-xl text-on-surface">Delete Repository</h3>
										<p class="text-sm text-on-surface-variant font-body px-2">Are you sure you want to delete this
											repository? This action cannot be undone and all data will be lost.</p>
										<div class="flex justify-center gap-3 w-full mt-4">
											<button
												class="flex-1 bg-transparent border border-outline-variant text-on-surface px-4 py-2.5 rounded font-medium text-sm hover:bg-surface-container-low transition-colors">Cancel</button>
											<button
												class="flex-1 bg-secondary text-on-secondary px-4 py-2.5 rounded font-medium text-sm hover:opacity-90 transition-opacity shadow-sm">Delete
												Forever</button>
										</div>
									</div>
								</div>
								<div class="bg-inverse-surface rounded-lg p-4 overflow-x-auto">
									<pre><code class="text-inverse-on-surface font-label text-sm">
&lt;div x-show="isConfirmOpen" class="..."&gt;
  &lt;div class="bg-surface-container-lowest rounded-xl p-6 text-center shadow-lg border border-outline-variant"&gt;
    &lt;div class="bg-error-container text-secondary rounded-full size-12 mx-auto flex items-center justify-center mb-4"&gt;
      &lt;span class="material-symbols-outlined"&gt;warning&lt;/span&gt;
    &lt;/div&gt;
    &lt;!-- Title &amp; Message --&gt;
    &lt;button class="bg-secondary text-on-secondary w-full rounded mt-4 py-2"&gt;Confirm Action&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- Shared Component TopNavBar end -->
		</div>
	</div>
</body>

</html>

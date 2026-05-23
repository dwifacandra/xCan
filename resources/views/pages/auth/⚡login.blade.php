<?php
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

new
	#[Layout('layouts::single')]
	#[Title('Login')]
class extends Component
{
	public string $email = '';
	public string $password = '';
	public bool $remember = false;

	protected array $rules = [
		'email' => ['required', 'string', 'email'],
		'password' => ['required', 'string'],
	];

	public function login()
	{
		$this->validate();

		if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
			throw ValidationException::withMessages([
				'email' => __('auth.failed'),
			]);
		}

		session()->regenerate();

		return redirect()->intended('/dashboard');
	}
};
?>

<main class="grid grid-cols-1 lg:grid-cols-12 min-h-screen h-dvh">
	<section class="lg:col-span-5 flex flex-col p-safe-area relative z-10 bg-surface">
		<header class="flex justify-between items-center w-full mb-stack-lg">
			{{-- Brand --}}
			<x-brand variant="full" subtext="Ecosystem" />
			<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">
				Don't have an account? <span class="text-primary font-bold">Sign up</span>
			</a>
		</header>
		<div class="flex-grow flex flex-col justify-center max-w-[400px] mx-auto w-full">
			<div class="mb-stack-lg">
				<h1 class="font-headline-xl text-headline-xl text-on-surface mb-stack-sm">Welcome back</h1>
				<p class="text-on-surface-variant leading-relaxed">Enter your professional credentials to access your
					creator hub.</p>
			</div>
			<form wire:submit="login" class="space-y-stack-md" x-data="{ show: false }">
				<div class="space-y-2 relative">
					<label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Email
						Address</label>
					@error('email') <span class="text-error bg-error-container px-2 py-0.5 rounded absolute right-0 text-xs">{{
						$message }}</span> @enderror
					@error('[password]') <span
						class="text-error bg-error-container px-2 py-0.5 rounded absolute right-0 text-xs">{{
						$message }}</span> @enderror
					<div class="relative">
						<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">mail</span>
						<input wire:model="email"
							class="w-full pl-12 pr-4 py-4 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none"
							placeholder="name@company.com" type="email">
					</div>
				</div>
				<div class="space-y-2">
					<div class="flex justify-between items-end">
						<label
							class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Password</label>
						<a class="text-label-sm font-label-sm text-primary hover:underline" href="#">Forgot password?</a>
					</div>
					<div class="relative w-full flex items-center">
						<span class="absolute left-4 flex items-center justify-center text-outline">
							<span class="material-symbols-outlined">lock</span>
						</span>
						<input :type="show ? 'text' : 'password'" wire:model="password"
							class="w-full pl-12 pr-12 py-4 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary-container focus:border-transparent transition-all outline-none"
							placeholder="••••••••">
						<button @click="show = !show" type="button"
							class="absolute right-4 flex items-center justify-center text-outline hover:text-primary transition-colors">
							<span class="material-symbols-outlined" x-text="show ? 'visibility_off' : 'visibility'">visibility</span>
						</button>
					</div>
				</div>
				<div class="flex items-center gap-2 py-2">
					<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary" id="remember"
						type="checkbox">
					<label class="text-body-md text-on-surface-variant cursor-pointer select-none" for="remember">Remember this
						device</label>
				</div>
				<button type="submit" wire:loading.attr="disabled"
					class="w-full py-4 primary-gradient text-on-secondary-container font-button-text text-button-text rounded-xl shadow-lg hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 uppercase tracking-widest">
					<span wire:loading.remove>
						Login
					</span>
					<span wire:loading class="flex items-center justify-center">
						<i class="fas fa-circle-notch animate-spin"></i>
						<span>Loading</span>
						<span class="animate-pulse">...</span>
					</span>
				</button>
				<div class="relative py-4 flex items-center">
					<div class="flex-grow border-t border-outline-variant"></div>
					<span class="px-4 font-label-sm text-label-sm text-outline uppercase">Or continue with</span>
					<div class="flex-grow border-t border-outline-variant"></div>
				</div>
				<div class="grid grid-cols-2 gap-stack-md" x-data>
					<button
						class="group flex items-center justify-center gap-3 py-3 border border-outline-variant rounded-xl bg-surface-container-high transition-all duration-300 hover:border-primary/50 hover:bg-primary-container/10 hover:scale-[1.02]"
						type="button">
						<i class="fa-brands fa-google text-outline group-hover:text-primary transition-colors"></i>
						<span class="font-button-text text-button-text group-hover:text-primary transition-colors">Google</span>
					</button>
					<button
						class="group flex items-center justify-center gap-3 py-3 border border-outline-variant rounded-xl bg-surface-container-high transition-all duration-300 hover:border-secondary/50 hover:bg-secondary-container/10 hover:scale-[1.02]"
						type="button">
						<i class="fa-brands fa-github text-outline group-hover:text-secondary transition-colors"></i>
						<span class="font-button-text text-button-text group-hover:text-secondary transition-colors">GitHub</span>
					</button>
				</div>
			</form>
		</div>
		<footer class="mt-stack-lg flex justify-between items-center text-outline text-label-sm font-label-sm">
			<span class="">© {{ date('Y') }} xCan Ecosystem. All rights reserved.</span>
			<div class="flex gap-4">
				<a class="hover:text-primary" href="#">Privacy</a>
				<a class="hover:text-primary" href="#">Terms</a>
			</div>
		</footer>
	</section>
	<section
		class="hidden select-none lg:flex lg:col-span-7 relative overflow-hidden flex-col justify-center items-center p-stack-lg animate-gradient">
		<div class="absolute inset-0 grid-pattern opacity-20"></div>
		<div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] glow-effect blur-[100px]"></div>
		<div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-secondary opacity-10 blur-[120px]"></div>
		<div class="relative z-10 w-full max-w-2xl space-y-stack-md">
			<div class="relative h-[600px] w-full">
				<div class="glass-card absolute top-10 left-0 right-10 rounded-2xl p-stack-lg z-30 transform -rotate-2"
					style="transform: rotateY(1.35deg) rotateX(1.34deg) rotate(1deg);">
					<div class="flex justify-between items-center mb-stack-lg">
						<div>
							<h3 class="text-white font-headline-lg-mobile">Revenue Growth</h3>
							<p class="text-white/60 text-label-sm uppercase tracking-widest">Enterprise Analytics Hub</p>
						</div>
						<div class="flex gap-2">
							<div class="w-3 h-3 rounded-full bg-error"></div>
							<div class="w-3 h-3 rounded-full bg-amber-400"></div>
							<div class="w-3 h-3 rounded-full bg-emerald-400"></div>
						</div>
					</div>
					<div class="relative h-40 w-full">
						<svg class="w-full h-full" viewBox="0 0 400 150">
							<defs>
								<linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
									<stop offset="0%" stop-color="#fff" stop-opacity="0.4"></stop>
									<stop offset="100%" stop-color="#fff" stop-opacity="0"></stop>
								</linearGradient>
							</defs>
							<path d="M0,130 Q50,120 100,80 T200,60 T300,30 T400,10 L400,150 L0,150 Z" fill="url(#chartGradient)">
							</path>
							<path class="chart-path" d="M0,130 Q50,120 100,80 T200,60 T300,30 T400,10" fill="none" stroke="#fff"
								stroke-linecap="round" stroke-width="4"></path>
							<circle class="animate-pulse" cx="200" cy="60" fill="#fff" r="6"></circle>
							<circle class="animate-pulse" cx="300" cy="30" fill="#fff" r="6"></circle>
						</svg>
						<div class="absolute top-2 right-4 glass-card px-3 py-2 rounded-lg border-white/40">
							<p class="text-emerald-400 font-bold text-xs">+18% YoY Growth</p>
							<p class="text-white text-sm font-bold">$1.8M</p>
						</div>
					</div>
				</div>
				<div
					class="glass-card absolute top-[280px] -left-12 px-6 py-4 rounded-2xl flex items-center gap-3 z-40 transform rotate-3 shadow-2xl">
					<span class="material-symbols-outlined text-emerald-400 scale-125"
						style="font-variation-settings: &quot;FILL&quot; 1;">check_circle</span>
					<span class="text-white text-sm font-label-sm font-medium">Domain {{ config('app.domain') }}/link-page</span>
				</div>
				<div
					class="glass-card absolute top-[360px] right-[-20px] px-6 py-4 rounded-2xl flex items-center gap-3 z-20 transform -rotate-1 opacity-90">
					<span class="material-symbols-outlined text-white"
						style="font-variation-settings: &quot;FILL&quot; 1;">payments</span>
					<span class="text-white text-sm font-label-sm">+$49.00 processed via Commerce</span>
				</div>
				<div class="absolute bottom-0 left-0 right-0 pt-stack-lg border-t border-white/20">
					<p class="text-white italic text-lg leading-relaxed mb-6">
						"Consolidating our entire media infrastructure into the xCan Ecosystem has saved our team hundreds of
						engineering hours and significantly improved our operational overhead."
					</p>
					<div class="flex items-center gap-4">
						<img alt="Executive Portrait" class="w-14 h-14 rounded-full border-2 border-white/30"
							src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHtQFCSEl5aWyR3iIGmPtlui7x20sHjQzkAdPTUFYvM9Gn_p8EKrAjrQVShOfEZL4D-YzIKSk8YinIXpCDXq-ctWLPaILlHnO_OWGQIj9eSca7f_ENGU3jXzb2JKKQmU38IZyYBa8zHQ5nIbQubOcFHKj5YvNtwKXW0ka9FynWzvmT_YNHFDbTJsM_5QK17S0bt9bu_jeMNRAsW29mok6HuZJXw8WxJwl-AE58M7UbOG_6v5w0bVON4ffNx7lqp4vOHs3RPJry15Fz">
						<div>
							<p class="text-white font-bold text-lg">Aditya Varma</p>
							<p class="text-white/60 text-xs uppercase tracking-widest">VP Engineering, Global Media Corp</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

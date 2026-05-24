<?php
use Livewire\Attributes\Title;
use Livewire\Component;

new
	#[Title('Dashboard')]
class extends Component
{
    //
};
?>


<div>
	<!-- Welcome Header -->
	<div class="mb-8">
		<h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Developer Overview</h2>
		<p class="text-outline font-body-md">Your ecosystem health and real-time performance analytics.</p>
	</div>
	<!-- KPI Cards Row -->
	<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
		<!-- Visitors -->
		<div class="glass-card p-6 rounded-2xl group">
			<div class="flex items-center justify-between mb-4">
				<div class="p-2 bg-primary/10 text-primary rounded-lg">
					<span class="material-symbols-outlined">group</span>
				</div>
				<span class="text-green-600 font-label-sm flex items-center gap-1">+12.5% <span
						class="material-symbols-outlined text-[16px]">trending_up</span></span>
			</div>
			<p class="text-outline font-label-sm uppercase tracking-wider mb-1">Total Visitors</p>
			<h3 class="font-headline-lg text-[28px] text-on-surface">1,248,302</h3>
		</div>
		<!-- Revenue -->
		<div class="glass-card p-6 rounded-2xl group">
			<div class="flex items-center justify-between mb-4">
				<div class="p-2 bg-secondary/10 text-secondary rounded-lg">
					<span class="material-symbols-outlined">payments</span>
				</div>
				<span class="text-green-600 font-label-sm flex items-center gap-1">+8.2% <span
						class="material-symbols-outlined text-[16px]">trending_up</span></span>
			</div>
			<p class="text-outline font-label-sm uppercase tracking-wider mb-1">Total Revenue</p>
			<h3 class="font-headline-lg text-[28px] text-on-surface">$12,490.00</h3>
		</div>
		<!-- Active Links -->
		<div class="glass-card p-6 rounded-2xl group" style="transform: scale(1.01);">
			<div class="flex items-center justify-between mb-4">
				<div class="p-2 bg-on-primary-fixed-variant/10 text-on-primary-fixed-variant rounded-lg">
					<span class="material-symbols-outlined">link</span>
				</div>
				<span class="text-outline font-label-sm">Active</span>
			</div>
			<p class="text-outline font-label-sm uppercase tracking-wider mb-1">Active Links</p>
			<h3 class="font-headline-lg text-[28px] text-on-surface">342</h3>
		</div>
		<!-- Stream Events -->
		<div class="glass-card p-6 rounded-2xl group">
			<div class="flex items-center justify-between mb-4">
				<div class="p-2 bg-on-surface/10 text-on-surface rounded-lg">
					<span class="material-symbols-outlined">bolt</span>
				</div>
				<span class="text-red-500 font-label-sm flex items-center gap-1">Live Now</span>
			</div>
			<p class="text-outline font-label-sm uppercase tracking-wider mb-1">Stream Events</p>
			<h3 class="font-headline-lg text-[28px] text-on-surface">1,024</h3>
		</div>
	</div>
	<!-- Central Analytics Section -->
	<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
		<!-- Left: Visitor Growth Chart (Simulated High Fidelity Card) -->
		<div class="lg:col-span-2 glass-card rounded-2xl p-8 overflow-hidden relative" style="transform: scale(1.01);">
			<div class="flex items-center justify-between mb-8">
				<div>
					<h4 class="font-headline-lg text-headline-lg text-on-surface">Visitor Growth</h4>
					<p class="text-outline font-label-sm">Unique sessions per day (Last 30 days)</p>
				</div>
				<div class="flex bg-surface-container-low p-1 rounded-lg">
					<button class="px-4 py-1 text-[12px] font-bold bg-white shadow-sm rounded-md text-primary">Day</button>
					<button class="px-4 py-1 text-[12px] font-bold text-outline hover:text-on-surface">Week</button>
					<button class="px-4 py-1 text-[12px] font-bold text-outline hover:text-on-surface">Month</button>
				</div>
			</div>
			<!-- Chart Visual (Using Tailwind/CSS for high-end look) -->
			<div class="h-64 w-full relative flex items-end justify-between gap-2 px-2">
				<div class="absolute inset-0 border-b border-outline-variant/20 flex flex-col justify-between">
					<div class="border-t border-outline-variant/10 w-full"></div>
					<div class="border-t border-outline-variant/10 w-full"></div>
					<div class="border-t border-outline-variant/10 w-full"></div>
					<div class="border-t border-outline-variant/10 w-full"></div>
					<div class="border-t border-outline-variant/10 w-full"></div>
				</div>
				<!-- Simulated Data Bars with Gradient -->
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[40%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[35%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[55%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[45%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[75%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[60%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[85%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[70%]"></div>
				<div class="w-full bg-primary/20 rounded-t-sm transition-all hover:bg-primary/40 cursor-pointer h-[95%]"></div>
				<div
					class="w-full gradient-brand rounded-t-sm transition-all hover:opacity-90 cursor-pointer h-[100%] shadow-xl shadow-primary/20">
				</div>
			</div>
			<div class="flex justify-between mt-4 text-[10px] font-label-sm text-outline px-2">
				<span class="">JAN 1</span><span class="">JAN 7</span><span class="">JAN 14</span><span class="">JAN
					21</span><span class="">JAN 30</span>
			</div>
		</div>
		<!-- Right: Recent Activity -->
		<div class="glass-card rounded-2xl p-8 flex flex-col">
			<h4 class="font-headline-lg text-headline-lg text-on-surface mb-6">Recent Activity</h4>
			<div class="space-y-6 flex-1 overflow-y-auto pr-2">
				<!-- Activity Item 1 -->
				<div class="flex gap-4 items-start group cursor-pointer">
					<div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 shrink-0">
						<span class="material-symbols-outlined text-[20px]">domain</span>
					</div>
					<div>
						<p class="font-button-text text-on-surface group-hover:text-primary transition-colors">Domain bound</p>
						<p class="text-outline text-[13px] leading-tight">api.xcan.dev connected successfully to the core.</p>
						<p class="text-[11px] font-label-sm mt-1">2 mins ago</p>
					</div>
				</div>
				<!-- Activity Item 2 -->
				<div class="flex gap-4 items-start group cursor-pointer">
					<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary shrink-0">
						<span class="material-symbols-outlined text-[20px]">payments</span>
					</div>
					<div>
						<p class="font-button-text text-on-surface group-hover:text-primary transition-colors">Payment received</p>
						<p class="text-outline text-[13px] leading-tight">Payout of $1,400 processing to connected account.</p>
						<p class="text-[11px] font-label-sm mt-1">1 hour ago</p>
					</div>
				</div>
				<!-- Activity Item 3 -->
				<div class="flex gap-4 items-start group cursor-pointer">
					<div class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-secondary shrink-0">
						<span class="material-symbols-outlined text-[20px]">article</span>
					</div>
					<div>
						<p class="font-button-text text-on-surface group-hover:text-primary transition-colors">New blog post</p>
						<p class="text-outline text-[13px] leading-tight">Draft 'Future of TALL Stack' published to staging.</p>
						<p class="text-[11px] font-label-sm mt-1">4 hours ago</p>
					</div>
				</div>
				<!-- Activity Item 4 -->
				<div class="flex gap-4 items-start group cursor-pointer">
					<div
						class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-outline shrink-0">
						<span class="material-symbols-outlined text-[20px]">person_add</span>
					</div>
					<div>
						<p class="font-button-text text-on-surface group-hover:text-primary transition-colors">New collaborator</p>
						<p class="text-outline text-[13px] leading-tight">Sarah Jenkins joined the project as 'Admin'.</p>
						<p class="text-[11px] font-label-sm mt-1">Yesterday</p>
					</div>
				</div>
			</div>
			<button class="mt-8 text-primary font-button-text text-[14px] flex items-center gap-2 hover:gap-3 transition-all">
				View all logs <span class="material-symbols-outlined">arrow_forward</span>
			</button>
		</div>
	</div>
	<!-- Bottom Row: Health & Actions -->
	<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pb-12">
		<!-- System Health -->
		<div class="glass-card rounded-2xl p-6">
			<h5 class="font-button-text text-on-surface mb-6 flex items-center gap-2">
				<span class="material-symbols-outlined text-green-500">check_circle</span>
				System Health
			</h5>
			<div class="space-y-4">
				<div>
					<div class="flex justify-between mb-2">
						<span class="font-label-sm text-outline">API Responsiveness</span>
						<span class="font-label-sm text-on-surface">99.9%</span>
					</div>
					<div class="w-full bg-surface-container h-1 rounded-full overflow-hidden">
						<div class="bg-green-500 h-full w-[99.9%]"></div>
					</div>
				</div>
				<div>
					<div class="flex justify-between mb-2">
						<span class="font-label-sm text-outline">Database Load</span>
						<span class="font-label-sm text-on-surface">24%</span>
					</div>
					<div class="w-full bg-surface-container h-1 rounded-full overflow-hidden">
						<div class="bg-primary h-full w-[24%]"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Quick Actions -->
		<div class="glass-card rounded-2xl p-6">
			<h5 class="font-button-text text-on-surface mb-6">Quick Actions</h5>
			<div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
				<button class="flex flex-col items-center gap-2 p-4 rounded-xl hover:bg-primary/5 transition-colors group">
					<span class="material-symbols-outlined text-outline group-hover:text-primary">terminal</span>
					<span class="text-[12px] font-label-sm text-outline group-hover:text-on-surface">SSH Access</span>
				</button>
				<button class="flex flex-col items-center gap-2 p-4 rounded-xl hover:bg-primary/5 transition-colors group">
					<span class="material-symbols-outlined text-outline group-hover:text-primary">database</span>
					<span class="text-[12px] font-label-sm text-outline group-hover:text-on-surface">Backup DB</span>
				</button>
				<button class="flex flex-col items-center gap-2 p-4 rounded-xl hover:bg-primary/5 transition-colors group">
					<span class="material-symbols-outlined text-outline group-hover:text-primary">monitoring</span>
					<span class="text-[12px] font-label-sm text-outline group-hover:text-on-surface">Debug Mode</span>
				</button>
				<button class="flex flex-col items-center gap-2 p-4 rounded-xl hover:bg-primary/5 transition-colors group">
					<span class="material-symbols-outlined text-outline group-hover:text-primary">cached</span>
					<span class="text-[12px] font-label-sm text-outline group-hover:text-on-surface">Clear Cache</span>
				</button>
			</div>
		</div>
	</div>
</div>

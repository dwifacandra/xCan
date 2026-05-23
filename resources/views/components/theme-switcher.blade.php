<button x-data="{
        theme: localStorage.theme || 'system',
        updateTheme() {
            localStorage.theme = this.theme;
            const isDark = this.theme === 'dark' || (this.theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches);
            document.documentElement.classList.toggle('dark', isDark);
        }
    }" @click="
        theme = (theme === 'light') ? 'dark' : (theme === 'dark' ? 'system' : 'light');
        updateTheme();
    "
	class="flex h-10 w-10 items-center justify-center rounded-full transition-colors duration-200 hover:bg-surface-variant">
	<span class="material-symbols-outlined transition-colors duration-200"
		:class="theme === 'dark' ? 'text-indigo-400' : (theme === 'system' ? 'text-gray-500' : 'text-amber-500')">
		<span x-show="theme === 'light'">light_mode</span>
		<span x-show="theme === 'dark'">dark_mode</span>
		<span x-show="theme === 'system'">desktop_windows</span>
	</span>
</button>

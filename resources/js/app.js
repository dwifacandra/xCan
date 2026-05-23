// Dark mode initialization based on user preference or system setting
function updateTheme() {
	const theme = localStorage.theme || "system";
	const isDark =
		theme === "dark" ||
		(theme === "system" &&
			window.matchMedia("(prefers-color-scheme: dark)").matches);
	document.documentElement.classList.toggle("dark", isDark);
}
updateTheme();
document.addEventListener("livewire:navigated", () => {
	updateTheme();
});
window
	.matchMedia("(prefers-color-scheme: dark)")
	.addEventListener("change", updateTheme);

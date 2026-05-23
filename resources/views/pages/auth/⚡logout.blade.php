<?php

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component
{
	public function logout()
	{
		Auth::guard('web')->logout();
		session()->invalidate();
		session()->regenerateToken();
		return redirect()->route('welcome');
	}
};
?>

<button wire:click="logout"
	class="flex w-full items-center gap-3 px-4 py-2.5 text-[14px] text-error hover:bg-error/5 transition-colors">
	<span class="material-symbols-outlined shrink-0 text-[20px]">logout</span>
	<span>Logout</span>
</button>

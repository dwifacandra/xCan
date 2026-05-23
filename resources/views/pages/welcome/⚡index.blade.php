<?php
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new
	#[Layout('layouts::guest')]
	#[Title('Make Your Page with xCan')]
class extends Component
{
    //
};
?>


<main class="w-full">
	<livewire:pages.welcome.1st-hero />
	<livewire:pages.welcome.2nd-hero />
	<livewire:pages.welcome.slider />
	<livewire:pages.welcome.feature />
	<livewire:pages.welcome.explore />
</main>

<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<nav class="flex-1 space-y-1">
	<x-nav.item icon="dashboard" label="Dashboard" href="{{ route('dashboard.overview') }}" />
	<x-nav.group icon="link" label="Links">
		<x-nav.item icon="workspaces" label="Manage" href="{{ route('links.manage') }}" isSub />
		<x-nav.item icon="settings" label="Setting" href="{{ route('links.setting') }}" isSub />
	</x-nav.group>
	<x-nav.item icon="article" label="Blog" href="{{ route('blog.manage') }}" />
	<x-nav.item icon="attach_money" label="Monetize" href="{{ route('monetize.manage') }}" />
	<x-nav.item icon="settings" label="Settings" href="{{ route('setting.manage') }}" />
</nav>

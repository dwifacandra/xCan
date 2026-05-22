<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xCan Core — Premium Developer Link Hub Design System</title>
    
    <!-- Meta tags for SEO -->
    <meta name="description" content="An interactive showcase and simulator for xCan Core—a high-performance, glassmorphic design system tailored for the developer ecosystem and TALL stack community.">
    <meta name="keywords" content="Laravel, Tailwind CSS, AlpineJS, Livewire, Design System, Link in Bio, Glassmorphic">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js CDN for immediate interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Custom Scrollbar for the simulator viewport */
        .simulator-viewport::-webkit-scrollbar {
            width: 6px;
        }
        .simulator-viewport::-webkit-scrollbar-track {
            background: transparent;
        }
        .simulator-viewport::-webkit-scrollbar-thumb {
            background: rgba(0, 1, 122, 0.1);
            border-radius: 9999px;
        }
        .simulator-viewport::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 1, 122, 0.25);
        }
    </style>
</head>
<body class="h-full antialiased technical-grid text-on-surface relative overflow-x-hidden font-inter"
      x-data="xCanSandbox()">

    <!-- Backdrop glowing accent blobs -->
    <div class="w-[500px] h-[500px] rounded-full bg-primary/5 blur-[120px] absolute -top-40 -left-40 pointer-events-none"></div>
    <div class="w-[600px] h-[600px] rounded-full bg-secondary/5 blur-[150px] absolute -bottom-40 -right-40 pointer-events-none"></div>

    <div class="min-h-screen flex flex-col justify-between">
        <!-- Top Navigation -->
        <header class="w-full border-b border-outline-variant/40 bg-white/70 backdrop-blur-md sticky top-0 z-40 px-6 py-4">
            <div class="max-w-7xl mx-auto flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <img src="/logo.png" alt="xCan Logo" class="w-16 h-16 object-contain">
                    <span class="font-geist font-bold text-xl tracking-tight text-primary">xCan <span class="text-secondary">Core</span></span>
                    <span class="font-jetbrains text-[10px] uppercase font-bold tracking-wider px-2 py-0.5 rounded-full bg-primary/10 text-primary border border-primary/20">v1.0.0-Beta</span>
                </div>
                
                <div class="flex items-center gap-4">
                    <a href="#spec-reference" class="text-sm font-medium text-on-surface-variant hover:text-primary transition-colors">
                        Design Specs
                    </a>
                    <button @click="resetSandbox()" class="btn-ghost-primary px-4 py-2 rounded-default font-inter text-button-text font-semibold cursor-pointer">
                        Reset Demo
                    </button>
                    <a href="https://github.com" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 font-jetbrains text-xs font-semibold px-3.5 py-2 rounded-default bg-tertiary text-on-tertiary hover:bg-tertiary/90 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.11.82-.26.82-.577v-2.234c-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22v3.293c0 .319.22.694.825.576C20.565 21.795 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                        GitHub Repository
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Body Grid Container -->
        <main class="max-w-7xl w-full mx-auto p-6 md:p-8 flex-grow">
            <!-- Hero Title Block -->
            <div class="mb-10 text-center md:text-left">
                <span class="inline-flex items-center gap-1.5 font-jetbrains text-xs font-semibold px-2.5 py-1 rounded-full bg-primary/10 text-primary mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                    TALL Stack Focused Identity
                </span>
                <h1 class="font-geist text-4xl md:text-5xl font-extrabold tracking-tight text-primary leading-none">
                    xCan <span class="text-secondary">Core</span> Workspace
                </h1>
                <p class="mt-3 text-on-surface-variant font-inter max-w-2xl text-base md:text-lg leading-relaxed">
                    A studio-light sandbox engineered for high-performance developer ecosystems. Customize metadata, link cards, and chips to generate design tokens in real time.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- LEFT COLUMN: CONTROLS & COMPONENT PLAYGROUND (7 cols) -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    
                    <!-- Sandbox Control Panel -->
                    <div class="glass-card rounded-lg p-6 shadow-sm">
                        <!-- Tab Bar -->
                        <div class="flex border-b border-outline-variant/60 pb-3 mb-6 gap-6">
                            <button @click="activeTab = 'profile'" 
                                    :class="activeTab === 'profile' ? 'text-primary border-b-2 border-primary font-bold' : 'text-on-surface-variant font-medium'"
                                    class="text-sm pb-2 focus:outline-none transition-all cursor-pointer">
                                Profile Info
                            </button>
                            <button @click="activeTab = 'links'" 
                                    :class="activeTab === 'links' ? 'text-primary border-b-2 border-primary font-bold' : 'text-on-surface-variant font-medium'"
                                    class="text-sm pb-2 focus:outline-none transition-all cursor-pointer">
                                Interactive Links
                            </button>
                            <button @click="activeTab = 'docs'" 
                                    :class="activeTab === 'docs' ? 'text-primary border-b-2 border-primary font-bold' : 'text-on-surface-variant font-medium'"
                                    class="text-sm pb-2 focus:outline-none transition-all cursor-pointer">
                                Component Catalog
                            </button>
                        </div>

                        <!-- Tab 1: Profile Info -->
                        <div x-show="activeTab === 'profile'" class="space-y-5">
                            <div>
                                <label class="block font-jetbrains text-xs font-semibold text-primary uppercase tracking-wider mb-2">Developer Name</label>
                                <input type="text" x-model="name" class="w-full px-4 py-2.5 input-precision font-inter text-sm" placeholder="Alex Rivera">
                            </div>
                            
                            <div>
                                <label class="block font-jetbrains text-xs font-semibold text-primary uppercase tracking-wider mb-2">Role / Title</label>
                                <input type="text" x-model="role" class="w-full px-4 py-2.5 input-precision font-inter text-sm" placeholder="Principal Engineer">
                            </div>
                            
                            <div>
                                <label class="block font-jetbrains text-xs font-semibold text-primary uppercase tracking-wider mb-2">Biography</label>
                                <textarea x-model="bio" rows="3" class="w-full px-4 py-2.5 input-precision font-inter text-sm resize-none" placeholder="Write a short developer-focused biography..."></textarea>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block font-jetbrains text-xs font-semibold text-primary uppercase tracking-wider mb-2">Status Indicator Ring</label>
                                    <div class="flex gap-3">
                                        <label class="flex items-center gap-2 cursor-pointer text-xs font-medium text-on-surface-variant">
                                            <input type="radio" name="status" value="active" x-model="statusColor" class="text-primary focus:ring-primary">
                                            Active (Gradient)
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer text-xs font-medium text-on-surface-variant">
                                            <input type="radio" name="status" value="idle" x-model="statusColor" class="text-primary focus:ring-primary">
                                            Idle (Orange)
                                        </label>
                                        <label class="flex items-center gap-2 cursor-pointer text-xs font-medium text-on-surface-variant">
                                            <input type="radio" name="status" value="offline" x-model="statusColor" class="text-primary focus:ring-primary">
                                            Offline (Gray)
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block font-jetbrains text-xs font-semibold text-primary uppercase tracking-wider mb-2">Status Tag Label</label>
                                    <input type="text" x-model="statusLabel" class="w-full px-3 py-1.5 input-precision font-jetbrains text-xs" placeholder="Active Now">
                                </div>
                            </div>

                            <div>
                                <label class="block font-jetbrains text-xs font-semibold text-primary uppercase tracking-wider mb-2">Technical Skill Chips (JetBrains Mono)</label>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <template x-for="(tag, index) in tags" :key="index">
                                        <span class="inline-flex items-center gap-1 font-jetbrains text-xs font-medium px-2.5 py-1 rounded-full bg-primary/10 text-primary border border-primary/20">
                                            <span x-text="tag"></span>
                                            <button @click="removeTag(index)" class="hover:text-secondary focus:outline-none ml-1 cursor-pointer">×</button>
                                        </span>
                                    </template>
                                </div>
                                <div class="flex gap-2">
                                    <input type="text" x-model="newTag" @keydown.enter.prevent="addTag()" class="flex-grow px-3 py-2 input-precision font-jetbrains text-xs" placeholder="Add custom tag (e.g. Docker, SaaS)">
                                    <button @click="addTag()" class="btn-ghost-primary px-4 py-2 rounded-default text-xs font-bold cursor-pointer">Add</button>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Interactive Links -->
                        <div x-show="activeTab === 'links'" class="space-y-6">
                            <div>
                                <h3 class="font-geist font-bold text-sm text-primary mb-3">Current Link Cards</h3>
                                <div class="space-y-2.5 max-h-60 overflow-y-auto pr-1">
                                    <template x-for="(link, index) in links" :key="index">
                                        <div class="flex items-start justify-between p-3 rounded-md bg-white border border-outline-variant/60 shadow-xs">
                                            <div class="space-y-0.5">
                                                <div class="flex items-center gap-2">
                                                    <span class="font-inter font-semibold text-sm text-primary" x-text="link.title"></span>
                                                    <span class="font-jetbrains text-[10px] text-on-surface-variant/75" x-text="link.url"></span>
                                                </div>
                                                <p class="font-inter text-xs text-on-surface-variant" x-text="link.desc"></p>
                                            </div>
                                            <button @click="removeLink(index)" class="text-xs text-secondary hover:text-secondary-container p-1 font-bold cursor-pointer">
                                                Delete
                                            </button>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <div class="border-t border-outline-variant/60 pt-5 space-y-4">
                                <h3 class="font-geist font-bold text-sm text-primary">Add New Link Card</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block font-jetbrains text-xs font-semibold text-on-surface-variant uppercase tracking-wider mb-1.5">Card Title</label>
                                        <input type="text" x-model="newLinkTitle" class="w-full px-3.5 py-2 input-precision font-inter text-xs" placeholder="e.g. Join the Discord">
                                    </div>
                                    <div>
                                        <label class="block font-jetbrains text-xs font-semibold text-on-surface-variant uppercase tracking-wider mb-1.5">Destination URL</label>
                                        <input type="text" x-model="newLinkUrl" class="w-full px-3.5 py-2 input-precision font-inter text-xs" placeholder="https://...">
                                    </div>
                                </div>
                                <div>
                                    <label class="block font-jetbrains text-xs font-semibold text-on-surface-variant uppercase tracking-wider mb-1.5">Card Description (Max 1 sentence)</label>
                                    <input type="text" x-model="newLinkDesc" class="w-full px-3.5 py-2 input-precision font-inter text-xs" placeholder="e.g. Chat with 5,000+ developer enthusiasts.">
                                </div>
                                <div class="flex justify-end">
                                    <button @click="addLink()" class="btn-primary-gradient px-4 py-2.5 rounded-default font-inter text-button-text font-bold cursor-pointer">
                                        Add Link Card
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3: Component Catalog -->
                        <div x-show="activeTab === 'docs'" class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="space-y-4">
                                    <h4 class="font-geist font-bold text-xs text-primary uppercase tracking-wider">Button Variations</h4>
                                    <div class="space-y-3">
                                        <div>
                                            <span class="block text-[10px] font-jetbrains text-on-surface-variant mb-1">Primary Gradient Button</span>
                                            <button class="w-full btn-primary-gradient py-2.5 rounded-default font-inter text-button-text font-bold cursor-pointer">
                                                Primary Action
                                            </button>
                                        </div>
                                        <div>
                                            <span class="block text-[10px] font-jetbrains text-on-surface-variant mb-1">Ghost Button</span>
                                            <button class="w-full btn-ghost-primary py-2.5 rounded-default font-inter text-button-text font-semibold cursor-pointer">
                                                Secondary Action
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <h4 class="font-geist font-bold text-xs text-primary uppercase tracking-wider">Input Focus State</h4>
                                    <div>
                                        <span class="block text-[10px] font-jetbrains text-on-surface-variant mb-1">Interactive Input Spec</span>
                                        <input type="text" class="w-full px-3 py-2 input-precision font-inter text-xs" placeholder="Click to see cobalt glow focus..." value="Active user focus ring">
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-outline-variant/60 pt-5 space-y-4">
                                <h4 class="font-geist font-bold text-xs text-primary uppercase tracking-wider">Elevation & Depth Rules</h4>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div class="p-3 bg-background border border-outline-variant/40 rounded-default space-y-1">
                                        <span class="font-jetbrains text-[10px] text-primary uppercase font-bold">1. Base Layer</span>
                                        <p class="text-xs text-on-surface-variant">Soft background canvas starting at #f9f9f9.</p>
                                    </div>
                                    <div class="p-3 glass-card rounded-default space-y-1">
                                        <span class="font-jetbrains text-[10px] text-primary uppercase font-bold">2. Card Layer</span>
                                        <p class="text-xs text-on-surface-variant">40% opacity, 20px blur, 10% black outline.</p>
                                    </div>
                                    <div class="p-3 glass-card glass-card-hover rounded-default space-y-1 cursor-pointer">
                                        <span class="font-jetbrains text-[10px] text-secondary uppercase font-bold">3. Active Elev.</span>
                                        <p class="text-xs text-on-surface-variant">Hover to preview scale (1.02x) and blue spread glow.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- JSON Exporter and Code Snippet -->
                    <div class="glass-card rounded-lg p-6 shadow-sm space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-primary/80"></span>
                                <h3 class="font-geist font-bold text-sm text-primary uppercase tracking-wider">JSON Code Exporter</h3>
                            </div>
                            <button @click="copyCodeToClipboard()" class="text-xs text-primary hover:text-primary-container font-semibold flex items-center gap-1 cursor-pointer">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                                <span x-text="copyMessage">Copy Code</span>
                            </button>
                        </div>
                        
                        <div class="relative">
                            <pre class="w-full p-4 rounded-default bg-tertiary text-on-tertiary font-jetbrains text-xs leading-relaxed overflow-x-auto select-all max-h-56 shadow-inner"><code x-text="exportJson()"></code></pre>
                        </div>
                        <p class="text-[11px] text-on-surface-variant font-inter">
                            This layout compiles reactively. TALL stack developers can plug this JSON direct into database records or hydration models for instant rendering.
                        </p>
                    </div>

                </div>

                <!-- RIGHT COLUMN: DEVICE SIMULATOR (5 cols) -->
                <div class="lg:col-span-5 flex justify-center sticky top-24">
                    
                    <!-- iPhone Container Wrapper -->
                    <div class="relative w-[340px] sm:w-[380px] md:w-[410px] h-[720px] sm:h-[780px] bg-tertiary rounded-[40px] p-3 shadow-2xl border-4 border-tertiary-container/80 flex flex-col items-center">
                        
                        <!-- Internal Screen Border -->
                        <div class="absolute inset-[3px] rounded-[36px] border border-white/20 pointer-events-none z-30"></div>
                        
                        <!-- Top Speaker / Camera Notch -->
                        <div class="absolute top-4 w-32 h-5 bg-tertiary rounded-full z-30 flex items-center justify-center">
                            <!-- Lens Dot -->
                            <div class="w-2.5 h-2.5 rounded-full bg-primary/60 border border-white/5 ml-auto mr-4"></div>
                        </div>

                        <!-- Simulator Screen Canvas -->
                        <div class="w-full h-full rounded-[28px] overflow-hidden bg-background relative flex flex-col justify-between simulator-viewport overflow-y-auto select-none p-gutter">
                            
                            <!-- Internal Grid Background inside Phone -->
                            <div class="absolute inset-0 technical-grid pointer-events-none opacity-60 z-0"></div>

                            <!-- Screen Header Info (Time/Status) -->
                            <div class="relative w-full flex items-center justify-between text-xs px-2 pt-1 pb-4 z-10 text-on-surface/60 font-jetbrains">
                                <span class="font-bold text-[10px]">09:41</span>
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4.35 19.4c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0l1.9-1.9C9.2 19.65 10.56 20 12 20c4.97 0 9-4.03 9-9s-4.03-9-9-9zm0 15c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6z"/></svg>
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                                    <span class="font-bold text-[9px] border border-on-surface/20 rounded px-1 py-0.5">5G</span>
                                </div>
                            </div>

                            <!-- Viewport Contents (Centered Layout) -->
                            <div class="relative w-full flex flex-col items-center flex-grow z-10 pt-2 pb-6 px-3">
                                
                                <!-- Profile Avatar Segment -->
                                <div class="relative mb-stack-md flex justify-center">
                                    <!-- 2px gradient ring acting as indicator -->
                                    <div class="avatar-gradient-ring"
                                         :class="{
                                            'bg-gradient-to-r from-primary to-secondary': statusColor === 'active',
                                            '!bg-none bg-amber-500': statusColor === 'idle',
                                            '!bg-none bg-outline-variant': statusColor === 'offline'
                                         }">
                                        <img src="/avatar.png" alt="Developer Avatar" 
                                             class="w-20 h-20 rounded-full border-2 border-white object-cover bg-surface-container shadow-sm">
                                    </div>

                                    <!-- Status Mini Dot Badge -->
                                    <div class="absolute bottom-0 right-1 w-5 h-5 rounded-full border-2 border-white flex items-center justify-center"
                                         :class="{
                                            'bg-secondary': statusColor === 'active',
                                            'bg-amber-500': statusColor === 'idle',
                                            'bg-outline': statusColor === 'offline'
                                         }">
                                        <span class="block w-1.5 h-1.5 rounded-full bg-white animate-ping" x-show="statusColor === 'active'"></span>
                                    </div>
                                </div>

                                <!-- User Meta Information -->
                                <div class="text-center space-y-1.5 w-full mb-stack-md">
                                    <!-- Status indicator text -->
                                    <div class="inline-flex items-center gap-1 font-jetbrains text-[9px] font-semibold tracking-wider px-2 py-0.5 rounded-full"
                                         :class="{
                                            'bg-primary/5 text-primary border border-primary/20': statusColor === 'active',
                                            'bg-amber-500/10 text-amber-600 border border-amber-500/20': statusColor === 'idle',
                                            'bg-on-surface-variant/5 text-on-surface-variant border border-on-surface-variant/20': statusColor === 'offline'
                                         }">
                                        <span class="w-1 h-1 rounded-full"
                                              :class="{
                                                'bg-primary': statusColor === 'active',
                                                'bg-amber-500': statusColor === 'idle',
                                                'bg-on-surface-variant': statusColor === 'offline'
                                              }"></span>
                                        <span x-text="statusLabel || 'Available'"></span>
                                    </div>

                                    <h2 class="font-geist text-2xl font-bold tracking-tight text-on-surface leading-tight px-2" x-text="name || 'Anonymous Developer'"></h2>
                                    <p class="font-jetbrains text-[11px] font-semibold text-primary uppercase tracking-wider" x-text="role || 'Software Engineer'"></p>
                                    
                                    <p class="font-inter text-xs text-on-surface-variant leading-relaxed px-4 pt-1 max-w-[280px] mx-auto text-center" 
                                       x-text="bio || 'No biography written.'"></p>
                                </div>

                                <!-- Technical Skills row -->
                                <div class="flex flex-wrap gap-1 justify-center w-full max-w-[300px] mb-stack-lg border-b border-outline-variant/30 pb-stack-md">
                                    <template x-for="(tag, idx) in tags" :key="idx">
                                        <span class="font-jetbrains text-[10px] font-medium px-2 py-0.5 rounded-full bg-primary/5 text-primary border border-primary/10" x-text="tag"></span>
                                    </template>
                                </div>

                                <!-- Link Cards Vertical Stack -->
                                <div class="w-full flex flex-col gap-stack-md mb-stack-lg">
                                    <template x-for="(link, idx) in links" :key="idx">
                                        <a :href="link.url" target="_blank" 
                                           class="glass-card glass-card-hover p-4 rounded-default block text-left relative z-10 transition-all select-none no-underline group">
                                            
                                            <!-- Top-right Chevron Icon -->
                                            <div class="absolute top-4 right-4 text-primary group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-200">
                                                <svg class="w-3.5 h-3.5 stroke-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/></svg>
                                            </div>

                                            <div class="pr-6 space-y-0.5">
                                                <h4 class="font-inter font-semibold text-sm text-on-surface leading-snug group-hover:text-primary-container transition-colors" x-text="link.title"></h4>
                                                <p class="font-inter text-xs text-on-surface-variant/80 leading-relaxed font-light" x-text="link.desc"></p>
                                            </div>
                                        </a>
                                    </template>
                                </div>

                                <!-- Primary Button Action CTA -->
                                <div class="w-full space-y-stack-sm mt-auto">
                                    <button class="w-full btn-primary-gradient py-3 rounded-default font-inter text-button-text font-bold uppercase tracking-wider text-center flex items-center justify-center gap-1 cursor-pointer">
                                        Hire For Project
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </button>

                                    <!-- Ghost Button Action -->
                                    <button class="w-full btn-ghost-primary py-3 rounded-default font-inter text-button-text font-semibold uppercase tracking-wider text-center cursor-pointer">
                                        Copy Profile Link
                                    </button>
                                </div>

                            </div>

                            <!-- Screen Footer Info (Developer Credit) -->
                            <div class="relative w-full text-center py-2 z-10">
                                <span class="font-jetbrains text-[9px] text-on-surface-variant/60 uppercase tracking-widest">
                                    Powered by xCan Core
                                </span>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- SECTION: Core Design System Specs -->
            <section id="spec-reference" class="mt-16 border-t border-outline-variant/60 pt-16">
                <div class="mb-8">
                    <h2 class="font-geist text-2xl font-bold tracking-tight text-primary">Core Tokens Reference Sheet</h2>
                    <p class="font-inter text-sm text-on-surface-variant mt-1">Direct reference guide mapping CSS classes and HEX variables according to the design plan.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Palette swatch card -->
                    <div class="glass-card rounded-lg p-6 space-y-4">
                        <h3 class="font-geist font-bold text-sm text-primary uppercase tracking-wider">Color Palette</h3>
                        <div class="grid grid-cols-2 gap-3">
                            <div @click="copyHex('#00017a', 'Primary')" class="cursor-pointer group flex flex-col space-y-1.5 p-2 rounded bg-white border border-outline-variant/40 hover:border-primary transition-colors">
                                <div class="w-full h-8 rounded bg-[#00017a]"></div>
                                <span class="font-jetbrains text-[10px] font-bold text-primary">Primary</span>
                                <span class="font-jetbrains text-[9px] text-on-surface-variant">#00017a</span>
                            </div>
                            <div @click="copyHex('#bb0017', 'Secondary')" class="cursor-pointer group flex flex-col space-y-1.5 p-2 rounded bg-white border border-outline-variant/40 hover:border-secondary transition-colors">
                                <div class="w-full h-8 rounded bg-[#bb0017]"></div>
                                <span class="font-jetbrains text-[10px] font-bold text-secondary">Secondary</span>
                                <span class="font-jetbrains text-[9px] text-on-surface-variant">#bb0017</span>
                            </div>
                            <div @click="copyHex('#f9f9f9', 'Background')" class="cursor-pointer group flex flex-col space-y-1.5 p-2 rounded bg-white border border-outline-variant/40 hover:border-on-surface transition-colors">
                                <div class="w-full h-8 rounded bg-[#f9f9f9] border border-outline-variant/20"></div>
                                <span class="font-jetbrains text-[10px] font-bold text-on-surface">Background</span>
                                <span class="font-jetbrains text-[9px] text-on-surface-variant">#f9f9f9</span>
                            </div>
                            <div @click="copyHex('#2f3131', 'Inverse Surface')" class="cursor-pointer group flex flex-col space-y-1.5 p-2 rounded bg-white border border-outline-variant/40 hover:border-on-surface transition-colors">
                                <div class="w-full h-8 rounded bg-[#2f3131]"></div>
                                <span class="font-jetbrains text-[10px] font-bold text-inverse-surface">Inverse Surf.</span>
                                <span class="font-jetbrains text-[9px] text-on-surface-variant">#2f3131</span>
                            </div>
                        </div>
                        <p class="text-[10px] text-on-surface-variant font-jetbrains text-center">Click swatch to copy hex code to clipboard.</p>
                    </div>

                    <!-- Typography rules card -->
                    <div class="glass-card rounded-lg p-6 space-y-4">
                        <h3 class="font-geist font-bold text-sm text-primary uppercase tracking-wider">Typography Specs</h3>
                        <div class="space-y-3 font-inter text-xs">
                            <div class="border-b border-outline-variant/30 pb-2">
                                <span class="font-jetbrains text-[9px] uppercase tracking-wider text-primary font-semibold block">Headline XL</span>
                                <span class="font-geist text-lg font-bold tracking-tight">Geist 40px (Bold, tight letter)</span>
                            </div>
                            <div class="border-b border-outline-variant/30 pb-2">
                                <span class="font-jetbrains text-[9px] uppercase tracking-wider text-primary font-semibold block">Body MD</span>
                                <span class="font-inter text-xs text-on-surface-variant">Inter 16px (Regular reading text)</span>
                            </div>
                            <div>
                                <span class="font-jetbrains text-[9px] uppercase tracking-wider text-primary font-semibold block">Label SM</span>
                                <span class="font-jetbrains text-[10px] tracking-wide text-primary">JetBrains Mono 12px</span>
                            </div>
                        </div>
                    </div>

                    <!-- Spacing rules card -->
                    <div class="glass-card rounded-lg p-6 space-y-4">
                        <h3 class="font-geist font-bold text-sm text-primary uppercase tracking-wider">Precision Geometry</h3>
                        <div class="space-y-3 font-inter text-xs">
                            <div class="flex items-center justify-between border-b border-outline-variant/30 pb-2">
                                <span class="font-medium">Standard Border Radius</span>
                                <span class="font-jetbrains text-[10px] bg-primary/5 text-primary border border-primary/10 rounded px-1.5 py-0.5">0.25rem (4px)</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-outline-variant/30 pb-2">
                                <span class="font-medium">Large Section Radius</span>
                                <span class="font-jetbrains text-[10px] bg-primary/5 text-primary border border-primary/10 rounded px-1.5 py-0.5">0.5rem (8px)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="font-medium">Link Card spacing gap</span>
                                <span class="font-jetbrains text-[10px] bg-primary/5 text-primary border border-primary/10 rounded px-1.5 py-0.5">1rem (stack-md)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Page Footer -->
        <footer class="w-full border-t border-outline-variant/40 bg-white/40 py-6 text-center mt-12">
            <p class="font-jetbrains text-xs text-on-surface-variant/80">
                xCan Core Design System. Developed in alignment with TALL stack community principles.
            </p>
        </footer>
    </div>

    <!-- Quick Toast Component for color copier -->
    <div x-show="toastShow" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-2"
         class="fixed bottom-6 left-6 z-50 bg-tertiary text-on-tertiary font-jetbrains text-xs font-semibold px-4 py-3 rounded-default shadow-lg flex items-center gap-2 border border-white/10"
         style="display: none;">
        <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
        <span x-text="toastText"></span>
    </div>

    <!-- Alpine Sandbox script -->
    <script>
        function xCanSandbox() {
            return {
                activeTab: 'profile',
                name: 'Alex Rivera',
                role: 'Principal Engineer',
                bio: 'Building open-source tools for the TALL stack community. Developer at xCan.',
                statusColor: 'active',
                statusLabel: 'Active Now',
                tags: ['Laravel', 'Alpine.js', 'Tailwind CSS', 'Livewire'],
                newTag: '',
                links: [
                    { title: 'xCan Design System Docs', desc: 'Access the complete token reference and TALL stack guidelines.', url: 'https://github.com/xcan/core' },
                    { title: 'Alpine.js Toolkit', desc: 'Custom reactive micro-interactions ready for copy-paste.', url: 'https://alpinejs.dev' },
                    { title: 'Laravel Framework', desc: 'Read the official documentation for building robust PHP APIs.', url: 'https://laravel.com' }
                ],
                newLinkTitle: '',
                newLinkUrl: '',
                newLinkDesc: '',
                
                // Exporter and toast state
                copyMessage: 'Copy Code',
                toastShow: false,
                toastText: '',

                addTag() {
                    let cleaned = this.newTag.trim();
                    if (cleaned && !this.tags.includes(cleaned)) {
                        this.tags.push(cleaned);
                        this.newTag = '';
                    }
                },

                removeTag(index) {
                    this.tags.splice(index, 1);
                },

                addLink() {
                    let title = this.newLinkTitle.trim();
                    let url = this.newLinkUrl.trim();
                    let desc = this.newLinkDesc.trim();
                    
                    if (title && url) {
                        this.links.push({ title, desc, url });
                        this.newLinkTitle = '';
                        this.newLinkUrl = '';
                        this.newLinkDesc = '';
                    }
                },

                removeLink(index) {
                    this.links.splice(index, 1);
                },

                resetSandbox() {
                    this.name = 'Alex Rivera';
                    this.role = 'Principal Engineer';
                    this.bio = 'Building open-source tools for the TALL stack community. Developer at xCan.';
                    this.statusColor = 'active';
                    this.statusLabel = 'Active Now';
                    this.tags = ['Laravel', 'Alpine.js', 'Tailwind CSS', 'Livewire'];
                    this.links = [
                        { title: 'xCan Design System Docs', desc: 'Access the complete token reference and TALL stack guidelines.', url: 'https://github.com/xcan/core' },
                        { title: 'Alpine.js Toolkit', desc: 'Custom reactive micro-interactions ready for copy-paste.', url: 'https://alpinejs.dev' },
                        { title: 'Laravel Framework', desc: 'Read the official documentation for building robust PHP APIs.', url: 'https://laravel.com' }
                    ];
                },

                exportJson() {
                    let data = {
                        name: this.name,
                        role: this.role,
                        bio: this.bio,
                        status: {
                            color: this.statusColor,
                            label: this.statusLabel
                        },
                        tags: this.tags,
                        links: this.links
                    };
                    return JSON.stringify(data, null, 2);
                },

                copyCodeToClipboard() {
                    navigator.clipboard.writeText(this.exportJson()).then(() => {
                        this.copyMessage = 'Copied!';
                        setTimeout(() => { this.copyMessage = 'Copy Code'; }, 2000);
                        this.triggerToast('JSON configuration copied successfully!');
                    });
                },

                copyHex(hex, name) {
                    navigator.clipboard.writeText(hex).then(() => {
                        this.triggerToast(`${name} Color: ${hex} copied!`);
                    });
                },

                triggerToast(text) {
                    this.toastText = text;
                    this.toastShow = true;
                    setTimeout(() => { this.toastShow = false; }, 3000);
                }
            }
        }
    </script>
</body>
</html>

<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>CampusMind AI - Study Hub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-container": "#d0e1fb",
                        "primary": "#000000",
                        "inverse-surface": "#2d3133",
                        "surface-container-highest": "#e0e3e5",
                        "surface-container-low": "#f2f4f6",
                        "primary-fixed-dim": "#b9c7e4",
                        "surface-tint": "#515f78",
                        "background": "#f7f9fb",
                        "secondary-fixed-dim": "#b7c8e1",
                        "secondary": "#505f76",
                        "on-tertiary-fixed": "#002113",
                        "surface-bright": "#f7f9fb",
                        "outline": "#75777e",
                        "on-secondary-container": "#54647a",
                        "tertiary": "#000000",
                        "on-primary-fixed": "#0d1c32",
                        "on-background": "#191c1e",
                        "on-surface": "#191c1e",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#38485d",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#44474d",
                        "on-primary-container": "#76849f",
                        "surface-dim": "#d8dadc",
                        "surface": "#f7f9fb",
                        "on-error": "#ffffff",
                        "outline-variant": "#c5c6cd",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed-variant": "#005236",
                        "on-tertiary-container": "#009668",
                        "on-secondary": "#ffffff",
                        "inverse-primary": "#b9c7e4",
                        "secondary-fixed": "#d3e4fe",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-container": "#eceef0",
                        "on-primary-fixed-variant": "#39475f",
                        "surface-container-high": "#e6e8ea",
                        "tertiary-container": "#002113",
                        "primary-fixed": "#d6e3ff",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#6ffbbe",
                        "surface-variant": "#e0e3e5",
                        "primary-container": "#0d1c32",
                        "tertiary-fixed-dim": "#4edea3",
                        "error-container": "#ffdad6",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#eff1f3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "4px",
                        "lg": "24px",
                        "md": "16px",
                        "xl": "32px",
                        "sm": "12px",
                        "xs": "8px",
                        "gutter": "12px",
                        "container-margin": "16px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-mobile": ["Inter"],
                        "label-caps": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "display-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "display-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        body { -webkit-tap-highlight-color: transparent; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen pt-14 pb-20 md:pb-0 font-body-lg text-body-lg">
<!-- TopAppBar -->
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-container-margin h-14 bg-surface dark:bg-on-background shadow-sm">

<h1 class="text-headline-md font-headline-md font-bold text-primary dark:text-on-primary-fixed">CampusMind AI</h1>
<div class="w-8 h-8 rounded-full overflow-hidden bg-surface-variant cursor-pointer hover:bg-surface-container transition-colors active:scale-95">
<img alt="User profile photo" class="w-full h-full object-cover" data-alt="A small circular user profile photo showing a young academic student in a modern university setting, bright natural lighting, professional and friendly expression. The background is a slightly blurred modern library with sleek architectural details, fitting a high-end corporate academic aesthetic. 50 words minimum." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkFeY79g2upRFcPOKpukYLMo1Jx6APp0q-D9Ujw2m3Y5_UbBsfN-RsGt9KSCwiyK4hFj9JpHvvoP6hQ7mlcyRwkqHTO7H1__UxBMxRrPl2NjL0v8oajF1TvYF43YVcDDg0M_adT2GyghhcmZ0e5HrzbAZVoopr0Dz3yQizhBRW8LUA9pQExzL0fy2cIH6R5_9SGgvHHzXXf-GusKqwu1sFwUGt2__6mzmGG0JUd3C2vyKdqWtTzDoOkQ">
</div>
</header>
<main class="max-w-7xl mx-auto px-container-margin md:px-[40px] pt-lg flex flex-col gap-lg pb-lg">
<!-- Search and Filter Section -->
<section class="flex flex-col md:flex-row gap-sm items-center">
<div class="relative w-full flex-1">
<span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full h-[44px] pl-10 pr-4 bg-[#F1F5F9] border-transparent focus:border-[#0A192F] focus:bg-surface-container-lowest focus:ring-0 rounded text-body-sm font-body-sm transition-all text-on-surface outline-none" placeholder="Search courses, topics, or file types..." type="text">
</div>
<button class="flex items-center gap-xs px-md h-[44px] bg-[#F1F5F9] hover:bg-surface-container-highest text-on-surface rounded transition-colors w-full md:w-auto justify-center border border-transparent focus:border-[#0A192F]">
<span class="material-symbols-outlined text-on-surface-variant">filter_list</span>
<span class="font-body-sm text-body-sm">Filters</span>
</button>
</section>
<!-- Filter Chips -->
<section class="flex gap-xs overflow-x-auto hide-scrollbar py-1">
<button class="px-sm py-1.5 rounded-full bg-slate-200 text-slate-800 text-label-caps font-label-caps whitespace-nowrap border border-transparent hover:border-slate-400 transition-colors shrink-0">Lecture Note</button>
<button class="px-sm py-1.5 rounded-full bg-slate-200 text-slate-800 text-label-caps font-label-caps whitespace-nowrap border border-transparent hover:border-slate-400 transition-colors shrink-0">PDF</button>
<button class="px-sm py-1.5 rounded-full bg-slate-200 text-slate-800 text-label-caps font-label-caps whitespace-nowrap border border-transparent hover:border-slate-400 transition-colors shrink-0">Assignment</button>
<button class="px-sm py-1.5 rounded-full bg-slate-200 text-slate-800 text-label-caps font-label-caps whitespace-nowrap border border-transparent hover:border-slate-400 transition-colors shrink-0">Syllabus</button>
</section>
<!-- Materials Grid -->
<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-md">
<!-- Card 1 -->
<div class="bg-surface-container-lowest border border-[#E2E8F0] rounded-lg p-md flex flex-col gap-sm hover:shadow-[0px_8px_24px_rgba(10,25,47,0.12)] transition-shadow duration-300">
<div class="flex justify-between items-start">
<span class="px-2 py-1 rounded bg-[#E2E8F0] text-on-surface-variant text-[10px] font-bold uppercase tracking-wider">PDF</span>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant mb-1">Data Structures (CSE205)</p>
<h3 class="text-body-lg font-headline-md font-semibold text-primary line-clamp-2">Trees &amp; Graphs Advanced Algorithms</h3>
</div>
<div class="mt-auto pt-sm border-t border-surface-variant flex justify-between items-center">
<span class="text-body-sm font-body-sm text-on-surface-variant">2.4 MB</span>
<div class="flex gap-2">
<button aria-label="View" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
<button aria-label="Download" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest border border-[#E2E8F0] rounded-lg p-md flex flex-col gap-sm hover:shadow-[0px_8px_24px_rgba(10,25,47,0.12)] transition-shadow duration-300">
<div class="flex justify-between items-start">
<span class="px-2 py-1 rounded bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase tracking-wider">Lecture Note</span>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant mb-1">Discrete Math (CSE103)</p>
<h3 class="text-body-lg font-headline-md font-semibold text-primary line-clamp-2">Combinatorics Midterm Review Session Notes</h3>
</div>
<div class="mt-auto pt-sm border-t border-surface-variant flex justify-between items-center">
<span class="text-body-sm font-body-sm text-on-surface-variant">1.1 MB</span>
<div class="flex gap-2">
<button aria-label="View" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
<button aria-label="Download" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest border border-[#E2E8F0] rounded-lg p-md flex flex-col gap-sm hover:shadow-[0px_8px_24px_rgba(10,25,47,0.12)] transition-shadow duration-300">
<div class="flex justify-between items-start">
<span class="px-2 py-1 rounded bg-error-container text-on-error-container text-[10px] font-bold uppercase tracking-wider">Assignment</span>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant mb-1">Database Systems (CSE301)</p>
<h3 class="text-body-lg font-headline-md font-semibold text-primary line-clamp-2">Project Phase 1: ER Diagram Submission Guidelines</h3>
</div>
<div class="mt-auto pt-sm border-t border-surface-variant flex justify-between items-center">
<span class="text-body-sm font-body-sm text-on-surface-variant text-error font-medium">Due in 2 days</span>
<div class="flex gap-2">
<button aria-label="View" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
<button aria-label="Download" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
</div>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest border border-[#E2E8F0] rounded-lg p-md flex flex-col gap-sm hover:shadow-[0px_8px_24px_rgba(10,25,47,0.12)] transition-shadow duration-300">
<div class="flex justify-between items-start">
<span class="px-2 py-1 rounded bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase tracking-wider">Syllabus</span>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</div>
<div>
<p class="text-label-caps font-label-caps text-on-surface-variant mb-1">AI Fundamentals (CSE405)</p>
<h3 class="text-body-lg font-headline-md font-semibold text-primary line-clamp-2">Fall 2024 Complete Course Outline &amp; Reading List</h3>
</div>
<div class="mt-auto pt-sm border-t border-surface-variant flex justify-between items-center">
<span class="text-body-sm font-body-sm text-on-surface-variant">540 KB</span>
<div class="flex gap-2">
<button aria-label="View" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
<button aria-label="Download" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-surface-container transition-colors text-primary">
<span class="material-symbols-outlined text-[20px]">download</span>
</button>
</div>
</div>
</div>
</section>
</main>
<!-- FAB -->
<button aria-label="Upload Material" class="fixed bottom-[100px] md:bottom-lg right-container-margin md:right-lg w-14 h-14 rounded-full bg-[#0A192F] text-white flex items-center justify-center shadow-[0px_8px_24px_rgba(10,25,47,0.12)] hover:scale-105 active:scale-95 transition-transform z-40"><span class="material-symbols-outlined text-[24px]">add</span></button>
<!-- BottomNavBar (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 pb-safe bg-surface-container-lowest dark:bg-inverse-surface border-t border-outline-variant dark:border-outline">
<!-- Active Tab: Study Hub -->
<a class="flex flex-col items-center justify-center text-primary dark:text-primary-fixed-dim relative after:content-[''] after:absolute after:top-0 after:w-8 after:h-0.5 after:bg-primary dark:after:bg-primary-fixed-dim hover:bg-surface-container-low dark:hover:bg-surface-container-highest active:scale-90 transition-transform duration-200 flex-1 h-full" href="#">
<span class="material-symbols-outlined" data-icon="auto_stories" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
<span class="text-label-caps font-label-caps mt-1">Study Hub</span>
</a>
<!-- Inactive Tabs -->
<a class="flex flex-col items-center justify-center text-secondary dark:text-secondary-fixed-dim opacity-70 hover:bg-surface-container-low dark:hover:bg-surface-container-highest active:scale-90 transition-transform duration-200 flex-1 h-full" href="#">
<span class="material-symbols-outlined" data-icon="quiz">quiz</span>
<span class="text-label-caps font-label-caps mt-1">Exam Prep</span>
</a>
<a class="flex flex-col items-center justify-center text-secondary dark:text-secondary-fixed-dim opacity-70 hover:bg-surface-container-low dark:hover:bg-surface-container-highest active:scale-90 transition-transform duration-200 flex-1 h-full" href="#">
<span class="material-symbols-outlined" data-icon="psychology">psychology</span>
<span class="text-label-caps font-label-caps mt-1">Advisor</span>
</a>
<a class="flex flex-col items-center justify-center text-secondary dark:text-secondary-fixed-dim opacity-70 hover:bg-surface-container-low dark:hover:bg-surface-container-highest active:scale-90 transition-transform duration-200 flex-1 h-full" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-label-caps font-label-caps mt-1">Profile</span>
</a>
</nav>
<!-- Desktop Side Nav (Placeholder for standard layout, though prompt asks to focus on mobile-first navigation) -->
<!-- Note: Top AppBar cluster is usually enough for desktop in this specific prompt context, omitting a full side-nav to keep the grid central as requested by 'silent UI' -->


</body></html>
<?php
session_start();
include('db.php');

$user_id = $_SESSION['user_id'] ?? 1;

$query = "SELECT * FROM profiles WHERE id = '$user_id' LIMIT 1";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

$full_name = $user['full_name'] ?? 'Syed Ahmed';
$department = $user['department'] ?? 'CSE';
$semester = $user['semester'] ?? '1st Semester';

$profile_pic = '';
if (!empty($user['profile_pic'])) {
    $profile_pic = (strpos($user['profile_pic'], 'http') === 0) ? $user['profile_pic'] : 'uploads/' . $user['profile_pic'];
}
?>
<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>CampusMind AI - Academic Advisor</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "body-lg": ["Inter", "sans-serif"],
                        "display-lg": ["Inter", "sans-serif"],
                        "headline-md": ["Inter", "sans-serif"],
                        "display-mobile": ["Inter", "sans-serif"],
                        "label-caps": ["Inter", "sans-serif"],
                        "body-sm": ["Inter", "sans-serif"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "display-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                        "display-mobile": ["24px", { "lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700" }],
                        "label-caps": ["11px", { "lineHeight": "14px", "letterSpacing": "0.02em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .chat-scroll::-webkit-scrollbar { width: 4px; }
        .chat-scroll::-webkit-scrollbar-track { background: transparent; }
        .chat-scroll::-webkit-scrollbar-thumb { background-color: theme('colors.outline-variant'); border-radius: 4px; }
    </style>
</head>
<body class="bg-background text-on-background h-screen flex flex-col overflow-hidden">

<!-- TopAppBar -->
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-container-margin h-14 bg-surface dark:bg-on-background shadow-sm text-primary dark:text-inverse-primary">
<div class="flex items-center gap-xs">
<span class="text-headline-md font-headline-md font-bold text-primary dark:text-on-primary-fixed">CampusMind AI</span>
</div>
<div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant shrink-0">
<img class="w-full h-full object-cover" src="<?php echo htmlspecialchars($profile_pic); ?>" onerror="this.src='https://lh3.googleusercontent.com/aida-public/AB6AXuAlxbHJD7opOq8BHr4gKZ_QD_SkG0Kjp_g0lk796COKHiEGHvmQqxJ3KfcGu70FVQv-SGf0g26irUnciXxG1Irb6pb1YAvGQODVATgdkdSHC1Z6gGk9XMGsFau1-F_9Yg08umRy53xXGiC7VizukLBiGl64x9gSrhDfQqj0IvdnVsXGtBQ_InEl56J-gzUg_UphkepZCr-xtEJAfP4Y3Ze4ze39wANVadlHWTe0nkX10kkPNw6q3z2gQw';">
</div>
</header>

<!-- Main Content Area -->
<main id="main-content" class="flex-1 flex flex-col pt-14 pb-[170px] overflow-hidden transition-all duration-300">
<!-- Profile Summary Card -->
<div class="px-container-margin py-sm shrink-0">
<div class="bg-surface rounded-xl p-sm flex items-center gap-md shadow-sm border border-surface-variant">
<div class="w-12 h-12 rounded-full overflow-hidden border border-outline-variant shrink-0">
<img class="w-full h-full object-cover" src="<?php echo htmlspecialchars($profile_pic); ?>" onerror="this.src='https://lh3.googleusercontent.com/aida-public/AB6AXuAlxbHJD7opOq8BHr4gKZ_QD_SkG0Kjp_g0lk796COKHiEGHvmQqxJ3KfcGu70FVQv-SGf0g26irUnciXxG1Irb6pb1YAvGQODVATgdkdSHC1Z6gGk9XMGsFau1-F_9Yg08umRy53xXGiC7VizukLBiGl64x9gSrhDfQqj0IvdnVsXGtBQ_InEl56J-gzUg_UphkepZCr-xtEJAfP4Y3Ze4ze39wANVadlHWTe0nkX10kkPNw6q3z2gQw';">
</div>
<div class="flex-1 min-w-0">
<h2 class="text-on-surface font-headline-md text-headline-md truncate"><?php echo htmlspecialchars($full_name); ?></h2>
<p class="text-on-surface-variant font-body-sm text-body-sm truncate"><?php echo htmlspecialchars($department . ' • ' . $semester); ?></p>
</div>
<div class="shrink-0 bg-surface-container-high rounded-full p-2">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">more_vert</span>
</div>
</div>
</div>

<!-- Chat Area -->
<div id="chat-container" class="flex-1 overflow-y-auto chat-scroll px-container-margin flex flex-col gap-lg pb-md">
<div class="text-center mt-sm">
<span class="text-on-surface-variant font-label-caps text-label-caps bg-surface-container px-2 py-1 rounded-full">Today, 10:42 AM</span>
</div>

<!-- AI Initial Message -->
<div class="flex gap-xs items-end w-full max-w-[90%] md:max-w-[75%]">
<div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0 mb-1">
<span class="material-symbols-outlined text-on-primary text-[18px]">psychology</span>
</div>
<div class="bg-surface border border-surface-variant p-sm rounded-2xl rounded-bl-none shadow-sm flex flex-col gap-2">
<p class="text-on-surface font-body-sm text-body-sm leading-relaxed">
    Welcome back to CampusMind AI, <?php echo htmlspecialchars(explode(" ", $full_name)[0]); ?>. I see you're focusing on your <?php echo htmlspecialchars($department . ' ' . $semester); ?> coursework. How can I assist you today?
</p>
</div>
</div>
</div>
</main>

<!-- Fixed Input & Suggestions Area -->
<div class="fixed bottom-16 left-0 w-full px-container-margin py-sm bg-gradient-to-t from-background via-background/90 to-transparent z-40 flex flex-col gap-2 shadow-lg">
<!-- Quick Prompts -->
<div id="suggestions-box" class="flex gap-xs overflow-x-auto pb-1 no-scrollbar whitespace-nowrap scroll-smooth transition-all duration-300">
<button onclick="sendQuickPrompt('What should I study for C Programming?')" class="bg-surface border border-outline-variant text-on-surface font-body-sm text-body-sm px-4 py-2 rounded-full hover:bg-surface-container transition-colors shrink-0 shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">code</span>
What should I study for C Programming?
</button>
<button onclick="sendQuickPrompt('Career path for CSE 1st semester')" class="bg-surface border border-outline-variant text-on-surface font-body-sm text-body-sm px-4 py-2 rounded-full hover:bg-surface-container transition-colors shrink-0 shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]">route</span>
Career path for CSE 1st semester
</button>
</div>

<!-- Text Input Form -->
<div class="flex items-center gap-xs bg-surface border border-outline-variant rounded-full p-1 pl-4 shadow-sm focus-within:border-primary focus-within:ring-1 focus-within:ring-primary transition-all">
<input id="user-input" class="flex-1 bg-transparent border-none focus:ring-0 font-body-sm text-body-sm text-on-surface h-10 outline-none p-0 placeholder:text-on-surface-variant/70" placeholder="Ask your AI Advisor..." type="text">
<button id="send-btn" class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center shrink-0 hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined text-[20px]">send</span>
</button>
</div>
</div>

<!-- BottomNavBar (Optimized with proper width and modern styling) -->
<nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center h-16 pb-safe bg-white border-t border-slate-200 shadow-md">
<a class="flex flex-col items-center justify-center text-slate-500 hover:text-black transition-colors duration-200 w-20 h-full" href="study-hub.php">
<span class="material-symbols-outlined text-[22px]">auto_stories</span>
<span class="text-[11px] font-semibold mt-0.5 tracking-tight whitespace-nowrap">Study Hub</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 hover:text-black transition-colors duration-200 w-20 h-full" href="exam-prep.php">
<span class="material-symbols-outlined text-[22px]">quiz</span>
<span class="text-[11px] font-semibold mt-0.5 tracking-tight whitespace-nowrap">Exam Prep</span>
</a>
<a class="flex flex-col items-center justify-center text-black relative after:content-[''] after:absolute after:top-0 after:w-10 after:h-0.5 after:bg-black w-20 h-full bg-slate-50" href="advisor.php">
<span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">psychology</span>
<span class="text-[11px] font-semibold mt-0.5 tracking-tight whitespace-nowrap">Advisor</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 hover:text-black transition-colors duration-200 w-20 h-full" href="profile.php">
<span class="material-symbols-outlined text-[22px]">person</span>
<span class="text-[11px] font-semibold mt-0.5 tracking-tight whitespace-nowrap">Profile</span>
</a>
</nav>

<script>
const chatContainer = document.getElementById('chat-container');
const userInput = document.getElementById('user-input');
const sendBtn = document.getElementById('send-btn');
const suggestionsBox = document.getElementById('suggestions-box');
const mainContent = document.getElementById('main-content');
const profilePicUrl = "<?php echo htmlspecialchars($profile_pic); ?>";

let hasInteracted = false;

function hideSuggestions() {
    if (!hasInteracted) {
        hasInteracted = true;
        suggestionsBox.style.opacity = '0';
        suggestionsBox.style.transform = 'translateY(10px)';
        setTimeout(() => {
            suggestionsBox.style.display = 'none';
        }, 300);
    }
}

function appendMessage(text, sender) {
    hideSuggestions();
    
    const messageDiv = document.createElement('div');
    if (sender === 'user') {
        messageDiv.className = "flex gap-xs items-end w-full max-w-[90%] md:max-w-[75%] self-end flex-row-reverse";
        messageDiv.innerHTML = `
            <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant shrink-0 mb-1">
                <img class="w-full h-full object-cover" src="${profilePicUrl}" onerror="this.src='https://lh3.googleusercontent.com/aida-public/AB6AXuAlxbHJD7opOq8BHr4gKZ_QD_SkG0Kjp_g0lk796COKHiEGHvmQqxJ3KfcGu70FVQv-SGf0g26irUnciXxG1Irb6pb1YAvGQODVATgdkdSHC1Z6gGk9XMGsFau1-F_9Yg08umRy53xXGiC7VizukLBiGl64x9gSrhDfQqj0IvdnVsXGtBQ_InEl56J-gzUg_UphkepZCr-xtEJAfP4Y3Ze4ze39wANVadlHWTe0nkX10kkPNw6q3z2gQw';">
            </div>
            <div class="bg-primary text-on-primary p-sm rounded-2xl rounded-br-none shadow-sm">
                <p class="font-body-sm text-body-sm leading-relaxed">${text}</p>
            </div>
        `;
    } else {
        messageDiv.className = "flex gap-xs items-end w-full max-w-[90%] md:max-w-[75%]";
        messageDiv.innerHTML = `
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center shrink-0 mb-1">
                <span class="material-symbols-outlined text-on-primary text-[18px]">psychology</span>
            </div>
            <div class="bg-surface border border-surface-variant p-sm rounded-2xl rounded-bl-none shadow-sm flex flex-col gap-2">
                <p class="text-on-surface font-body-sm text-body-sm leading-relaxed">${text}</p>
            </div>
        `;
    }
    chatContainer.appendChild(messageDiv);
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

function handleSendMessage() {
    const text = userInput.value.trim();
    if (!text) return;
    
    appendMessage(text, 'user');
    userInput.value = '';

    setTimeout(() => {
        appendMessage("That's a great question regarding your academic goals! Keep practicing consistently and let me know if you need specific resources.", 'ai');
    }, 1000);
}

function sendQuickPrompt(text) {
    userInput.value = text;
    handleSendMessage();
}

sendBtn.addEventListener('click', handleSendMessage);
userInput.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
        handleSendMessage();
    }
});
</script>
<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
</body></html>
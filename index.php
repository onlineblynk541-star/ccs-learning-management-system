<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Gateway | JRMSU Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="tailwind-offline.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                    colors: { 
                        jrmsuNavy: '#002855',
                        jrmsuNavyDark: '#001a38',
                        jrmsuGold: '#EAA221',
                        jrmsuGoldLight: '#facc15'
                    }
                }
            }
        }
    </script>
    <style>
        .login-bg {
            background: radial-gradient(circle at top left, #002855 0%, #001a38 100%);
        }
        @keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .loading-spinner { animation: spin-slow 1s linear infinite; }
        
        /* Smooth scale for card hover */
        .portal-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .portal-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="login-bg min-h-screen flex items-center justify-center p-6 antialiased font-sans">

    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-jrmsuGold/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-4xl relative z-10">
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-white/10 backdrop-blur-md border border-white/20 rounded-3xl shadow-2xl mb-6 transform -rotate-3 hover:rotate-0 transition-transform duration-500">
                <i class="fas fa-university text-jrmsuGold text-5xl"></i>
            </div>
            <h1 class="text-white text-4xl font-black tracking-tight mb-2">JRMSU <span class="text-jrmsuGold">PORTAL</span></h1>
            <p class="text-white/60 text-lg font-medium tracking-wide">College of Computing Studies Gateway</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="portal-card bg-white rounded-[2rem] shadow-2xl overflow-hidden border border-white/10 flex flex-col">
                <div class="bg-jrmsuNavy p-6 text-center border-b-4 border-jrmsuGold">
                    <i class="fas fa-user-graduate text-white text-3xl mb-2"></i>
                    <h2 class="text-white font-bold text-sm uppercase tracking-widest">Student</h2>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between">
                    <p class="text-slate-500 text-sm text-center mb-6 leading-relaxed">
                        Access your grades, enrollment status, and student modules.
                    </p>
                    <button onclick="navigateTo('login.php', this)" class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-xs font-black rounded-2xl text-jrmsuNavy bg-jrmsuGold hover:bg-jrmsuGoldLight shadow-lg transition-all duration-300">
                        <span class="btnText flex items-center gap-2">
                            OPEN STUDENT HUB <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                        <span class="btnLoader hidden flex items-center gap-2">
                            <i class="fas fa-circle-notch loading-spinner text-lg"></i>
                        </span>
                    </button>
                </div>
            </div>

            <div class="portal-card bg-white rounded-[2rem] shadow-2xl overflow-hidden border border-white/10 flex flex-col">
                <div class="bg-jrmsuNavy p-6 text-center border-b-4 border-jrmsuGold">
                    <i class="fas fa-chalkboard-teacher text-white text-3xl mb-2"></i>
                    <h2 class="text-white font-bold text-sm uppercase tracking-widest">Faculty</h2>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between">
                    <p class="text-slate-500 text-sm text-center mb-6 leading-relaxed">
                        Manage class schedules, student grading, and faculty resources.
                    </p>
                    <button onclick="navigateTo('instructor_login.php', this)" class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-xs font-black rounded-2xl text-jrmsuNavy bg-jrmsuGold hover:bg-jrmsuGoldLight shadow-lg transition-all duration-300">
                        <span class="btnText flex items-center gap-2">
                            FACULTY ACCESS <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                        <span class="btnLoader hidden flex items-center gap-2">
                            <i class="fas fa-circle-notch loading-spinner text-lg"></i>
                        </span>
                    </button>
                </div>
            </div>

            <div class="portal-card bg-white rounded-[2rem] shadow-2xl overflow-hidden border border-white/10 flex flex-col">
                <div class="bg-jrmsuNavy p-6 text-center border-b-4 border-jrmsuGold">
                    <i class="fas fa-layer-group text-white text-3xl mb-2"></i>
                    <h2 class="text-white font-bold text-sm uppercase tracking-widest">Administrator</h2>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-between">
                    <p class="text-slate-500 text-sm text-center mb-6 leading-relaxed">
                        Full system management, user control, and database maintenance.
                    </p>
                    <button onclick="navigateTo('admin_login.php', this)" class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-xs font-black rounded-2xl text-jrmsuNavy bg-jrmsuGold hover:bg-jrmsuGoldLight shadow-lg transition-all duration-300">
                        <span class="btnText flex items-center gap-2">
                            CMS DASHBOARD <i class="fas fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                        </span>
                        <span class="btnLoader hidden flex items-center gap-2">
                            <i class="fas fa-circle-notch loading-spinner text-lg"></i>
                        </span>
                    </button>
                </div>
            </div>

        </div>

        <div class="text-center mt-12 space-y-2">
            <p class="text-white/40 text-[10px] font-medium uppercase tracking-[0.2em]">
                &copy; 2026 Jose Rizal Memorial State University - Siocon Campus
            </p>
            <p class="text-white/20 text-[9px] uppercase tracking-widest">
                Developed for CCS Learning Management System
            </p>
        </div>
    </div>

    <script>
        function navigateTo(url, btn) {
            const btnText = btn.querySelector('.btnText');
            const btnLoader = btn.querySelector('.btnLoader');

            // Disable all buttons to prevent multiple clicks
            document.querySelectorAll('button').forEach(b => {
                b.disabled = true;
                b.classList.add('opacity-80', 'cursor-not-allowed');
            });
            
            // Show loader in the clicked button
            btnText.classList.add('hidden');
            btnLoader.classList.remove('hidden');
            
            // Slight delay to appreciate the smooth transition before redirect
            setTimeout(() => {
                window.location.href = url;
            }, 600);
        }
    </script>
</body>
</html>
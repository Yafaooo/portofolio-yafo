<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yafao Mabe Lamboe, S.Kom | Software Engineer</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-grid { background-image: radial-gradient(#1e293b 1px, transparent 1px); background-size: 40px 40px; }
        .aurora {
            position: absolute; width: 400px; height: 400px; border-radius: 50%;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.15) 0%, transparent 70%);
            filter: blur(60px); z-index: -1;
        }
        .typed-cursor { color: #4f46e5; font-size: 1.2em; }
    </style>
</head>
<body class="bg-[#050810] text-slate-300 bg-grid relative overflow-x-hidden">

    <div class="aurora top-[-100px] left-[-100px]"></div>
    <div class="aurora bottom-[20%] right-[-100px] bg-indigo-900/10"></div>

    <a href="https://wa.me/6282272463816" target="_blank" class="fixed bottom-8 left-8 z-[60] bg-indigo-600 hover:bg-indigo-500 text-white p-4 rounded-full shadow-lg shadow-indigo-500/20 transition-all hover:scale-110 active:scale-95 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.887-11.888 3.174 0 6.16 1.236 3.484 2.247 2.248 3.481 5.231 3.481 8.401 0 6.556-5.331 11.888-11.887 11.888-2.01 0-3.987-.506-5.741-1.465l-6.249 1.689zm5.989-4.759c1.636.973 3.239 1.417 4.881 1.417 5.469 0 9.918-4.448 9.918-9.917 0-2.657-1.035-5.151-2.914-7.03-1.876-1.877-4.372-2.913-7.004-2.913-5.469 0-9.918 4.45-9.918 9.917 0 1.838.513 3.635 1.485 5.189l-.955 3.486 3.507-.949zm8.502-12.191c-.244-.543-.499-.554-.73-.564-.189-.008-.405-.008-.621-.008-.216 0-.568.082-.865.407-.298.324-1.137 1.111-1.137 2.71 0 1.598 1.163 3.141 1.325 3.358.163.216 2.287 3.493 5.542 4.894.774.333 1.379.531 1.85.682.776.246 1.484.212 2.043.129.622-.094 1.913-.781 2.183-1.536.271-.754.271-1.401.19-1.536-.082-.135-.298-.216-.622-.38s-1.913-.943-2.21-.1.051-1.163-.163-1.325-.216-.622-.379-.325z"/></svg>
        <span class="absolute left-full ml-4 top-1/2 -translate-y-1/2 bg-slate-800 text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap tracking-widest uppercase">Chat Yafao</span>
    </a>

    <nav data-aos="fade-down" class="fixed w-full top-0 z-50 bg-[#050810]/80 backdrop-blur-xl border-b border-white/5">
        <div class="max-w-6xl mx-auto px-8 py-5 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center font-extrabold text-white italic shadow-lg shadow-indigo-600/20">Y</div>
                <span class="text-sm tracking-[0.3em] font-bold text-white uppercase">Yafao.Dev</span>
            </div>
            <div class="hidden md:flex gap-10 text-[10px] uppercase tracking-[0.2em] font-bold">
                <a href="#about" class="hover:text-indigo-400 transition">Experience</a>
                <a href="#work" class="hover:text-indigo-400 transition">Projects</a>
                <a href="#tech" class="hover:text-indigo-400 transition">Stack</a>
                <a href="https://wa.me/6282272463816" class="bg-indigo-600 text-white px-5 py-2 rounded-full hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/10">Hire Me</a>
            </div>
        </div>
    </nav>

    <section class="relative min-h-screen flex items-center px-8 pt-20">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1">
                <div data-aos="fade-right" class="inline-block px-3 py-1 border border-indigo-500/30 rounded-full bg-indigo-500/5 text-indigo-400 text-[10px] font-bold tracking-widest uppercase mb-6">
                    S1 Software Engineering
                </div>
                <h1 data-aos="fade-right" data-aos-delay="200" class="text-6xl md:text-8xl font-extrabold text-white mb-4 tracking-tighter leading-none">
                    Yafao Mabe <br> <span class="text-indigo-600">Lamboe.</span>
                </h1>
                <div data-aos="fade-right" data-aos-delay="300" class="text-xl md:text-2xl font-mono text-indigo-400 mb-8 h-8">
                    I am a <span id="typing-text"></span>
                </div>
                <p data-aos="fade-right" data-aos-delay="400" class="text-lg text-slate-400 leading-relaxed mb-10 max-w-lg">
                    Mentransformasi logika kompleks menjadi sistem yang elegan. Spesialisasi dalam pembangunan arsitektur backend yang <span class="text-white font-bold">scalable</span> dan <span class="text-white font-bold">secure</span>.
                </p>
                <div data-aos="fade-up" data-aos-delay="600" class="flex gap-6">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-white">S.Kom</span>
                        <span class="text-[10px] uppercase tracking-widest text-slate-500">Degree</span>
                    </div>
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-white">Laravel 12</span>
                        <span class="text-[10px] uppercase tracking-widest text-slate-500">Core Stack</span>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 flex justify-center" data-aos="zoom-in" data-aos-duration="1500">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-indigo-600/20 rounded-full blur-3xl opacity-0 group-hover:opacity-100 transition duration-1000"></div>
                    <div class="relative w-72 h-72 md:w-96 md:h-96 overflow-hidden rounded-full border-2 border-indigo-500/30 p-2 bg-[#050810]">
                        <img src="https://ui-avatars.com/api/?name=Yafao+Mabe&background=4f46e5&color=fff&size=512" alt="Yafao Mabe Lamboe" class="w-full h-full object-cover rounded-full grayscale hover:grayscale-0 transition duration-700 scale-110 hover:scale-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-32 px-8 bg-black/20">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center gap-4 mb-16" data-aos="fade-right">
                <h3 class="text-indigo-500 font-mono text-xs uppercase tracking-[0.3em]">01. Professional Experience</h3>
                <div class="h-[1px] flex-grow bg-white/5"></div>
            </div>
            
            <div class="space-y-20">
                <div class="grid md:grid-cols-3 gap-8 border-t border-white/5 pt-12" data-aos="fade-up">
                    <div class="text-slate-500 font-mono text-sm tracking-widest italic">2024 — 2026</div>
                    <div class="md:col-span-2">
                        <h4 class="text-2xl font-bold text-white mb-2 italic">Guru Informatika (IT Educator)</h4>
                        <p class="text-indigo-400 font-bold mb-6 tracking-wide uppercase text-sm">SMAK Kasih Karunia & SMP Swasta Teladan Medan</p>
                        <p class="text-slate-400 leading-relaxed mb-6">
                            Mendidik siswa dalam bidang Rekayasa Perangkat Lunak, fokus pada logika pemrograman dan pengembangan solusi digital untuk kebutuhan internal sekolah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="py-32 px-8 bg-slate-900/20 border-y border-white/5">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center gap-4 mb-16" data-aos="fade-right">
                <h3 class="text-indigo-500 font-mono text-xs uppercase tracking-[0.5em]">// Recent Deployments</h3>
                <div class="h-[1px] flex-grow bg-white/5"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div data-aos="fade-up" class="group relative p-1 rounded-3xl bg-gradient-to-b from-indigo-500/20 to-transparent hover:from-indigo-500/60 transition-all duration-500">
                    <div class="bg-[#0b0f1a] p-8 rounded-[1.4rem] h-full flex flex-col">
                        <div class="flex justify-between items-start mb-6">
                            <span class="text-[10px] bg-indigo-500/10 text-indigo-400 px-3 py-1 rounded-full font-bold uppercase tracking-widest border border-indigo-500/20">Live on Railway</span>
                            <div class="flex gap-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-[9px] text-slate-500 font-bold uppercase">Secured</span>
                            </div>
                        </div>
                        <h4 class="text-3xl font-black text-white mb-4 italic tracking-tighter">Secure E-Voting <span class="text-indigo-500">v2.0</span></h4>
                        <p class="text-sm text-slate-400 leading-relaxed mb-8 flex-grow">
                            Sistem pemungutan suara digital terenkripsi menggunakan algoritma <span class="text-white font-mono">SHA-256</span>. Dibangun untuk integritas data tinggi dengan UI Glassmorphism modern.
                        </p>
                        <div class="flex flex-wrap gap-3 mb-8 text-[8px] font-bold text-slate-500 uppercase tracking-widest">
                            <span class="border border-white/10 px-2 py-1 rounded">Laravel 12</span>
                            <span class="border border-white/10 px-2 py-1 rounded">Tailwind</span>
                            <span class="border border-white/10 px-2 py-1 rounded">SHA-256</span>
                        </div>
                        <div class="flex items-center gap-6">
                            <a href="https://evoting-secure-production.up.railway.app" target="_blank" class="text-xs font-black text-white bg-indigo-600 px-6 py-3 rounded-xl hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/20 tracking-widest">VIEW LIVE →</a>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="group relative p-1 rounded-3xl bg-gradient-to-b from-emerald-500/20 to-transparent hover:from-emerald-500/60 transition-all duration-500">
                    <div class="bg-[#0b0f1a] p-8 rounded-[1.4rem] h-full flex flex-col">
                        <div class="flex justify-between items-start mb-6">
                            <span class="text-[10px] bg-emerald-500/10 text-emerald-400 px-3 py-1 rounded-full font-bold uppercase tracking-widest border border-emerald-500/20">Active on Railway</span>
                            <div class="flex gap-2">
                                <div class="w-2 h-2 bg-emerald-500 rounded-full animate-ping"></div>
                                <span class="text-[9px] text-slate-500 font-bold uppercase">Live Data</span>
                            </div>
                        </div>
                        <h4 class="text-3xl font-black text-white mb-4 italic tracking-tighter">YAFAO<span class="text-emerald-500">.POS</span> Elite</h4>
                        <p class="text-sm text-slate-400 leading-relaxed mb-8 flex-grow">
                            Sistem Point of Sales (Kasir) modern dengan arsitektur <span class="text-white font-mono">Laravel 12</span>. Menampilkan manajemen inventory real-time dan sistem transaksi instan dengan UI bertema Dark-Premium.
                        </p>
                        <div class="flex flex-wrap gap-3 mb-8 text-[8px] font-bold text-slate-500 uppercase tracking-widest">
                            <span class="border border-white/10 px-2 py-1 rounded">Laravel 12</span>
                            <span class="border border-white/10 px-2 py-1 rounded">Tailwind CSS</span>
                            <span class="border border-white/10 px-2 py-1 rounded">High Availability</span>
                        </div>
                        <div class="flex items-center gap-6">
                            <a href="https://lumina-pos-production.up.railway.app" target="_blank" class="text-xs font-black text-white bg-emerald-600 px-6 py-3 rounded-xl hover:bg-emerald-500 transition shadow-lg shadow-emerald-600/20 tracking-widest">OPEN SYSTEM →</a>
                            <a href="https://github.com/Yafaooo/lumina-pos" target="_blank" class="text-slate-500 hover:text-white transition group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tech" class="py-32 px-8">
        <div class="max-w-6xl mx-auto">
            <h3 data-aos="zoom-in" class="text-center text-white text-3xl font-bold mb-20 italic underline decoration-indigo-500 underline-offset-8">Modern Stack Expertise</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div data-aos="fade-up" data-aos-delay="100" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-indigo-500/50 transition group">
                    <div class="text-indigo-500 text-3xl font-black mb-4 group-hover:scale-110 transition">PHP</div>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Version 8.4</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-indigo-500/50 transition group">
                    <div class="text-indigo-500 text-3xl font-black mb-4 group-hover:scale-110 transition">Go</div>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Concurrency</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-indigo-500/50 transition group">
                    <div class="text-indigo-500 text-3xl font-black mb-4 group-hover:scale-110 transition">Postgres</div>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Relational</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="400" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-indigo-500/50 transition group">
                    <div class="text-indigo-500 text-3xl font-black mb-4 group-hover:scale-110 transition">Docker</div>
                    <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">DevOps</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-20 text-center bg-black/40 border-t border-white/5">
        <div class="flex justify-center gap-12 mb-12">
            <a href="https://www.linkedin.com/in/yafao-mabe-lamboe-6b829b292/" target="_blank" class="text-slate-500 hover:text-indigo-400 transition tracking-widest font-bold text-[10px] uppercase">LinkedIn</a>
            <a href="https://github.com/Yafaooo" target="_blank" class="text-slate-500 hover:text-indigo-400 transition tracking-widest font-bold text-[10px] uppercase">GitHub</a>
            <a href="https://www.instagram.com/yafaooo_" target="_blank" class="text-slate-500 hover:text-indigo-400 transition tracking-widest font-bold text-[10px] uppercase">Instagram</a>
        </div>
        <p class="text-[9px] text-slate-700 uppercase tracking-[0.8em]">Built for 2026 &bull; Yafao Mabe Lamboe, S.Kom</p>
    </footer>

    <div class="fixed bottom-6 right-6 z-50">
        <button onclick="toggleMusic()" id="musicBtn" class="bg-indigo-600/20 backdrop-blur-md border border-white/10 p-4 rounded-full hover:bg-indigo-500 transition-all group shadow-2xl">
            <div id="musicIcon" class="text-white group-hover:scale-110 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                </svg>
            </div>
        </button>
        <audio id="bgMusic" loop>
            <source src="https://www.bensound.com/bensound-music/bensound-slowmotion.mp3" type="audio/mpeg">
        </audio>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        AOS.init({ duration: 1000, once: false, mirror: true });

        var typed = new Typed('#typing-text', {
            strings: ['Software Engineer', 'IT Educator', 'Full-stack Developer'],
            typeSpeed: 60,
            backSpeed: 40,
            backDelay: 2000,
            loop: true,
            cursorChar: '_'
        });

        function toggleMusic() {
            const music = document.getElementById('bgMusic');
            const btn = document.getElementById('musicBtn');
            if (music.paused) {
                music.play();
                btn.classList.add('animate-pulse', 'bg-indigo-600/50');
            } else {
                music.pause();
                btn.classList.remove('animate-pulse', 'bg-indigo-600/50');
            }
        }
    </script>
</body>
</html>

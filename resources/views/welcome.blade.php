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
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.887-11.888 3.174 0 6.16 1.236 8.41 3.484 2.247 2.248 3.481 5.231 3.481 8.401 0 6.556-5.331 11.888-11.887 11.888-2.01 0-3.987-.506-5.741-1.465l-6.249 1.689zm5.989-4.759c1.636.973 3.239 1.417 4.881 1.417 5.469 0 9.918-4.448 9.918-9.917 0-2.657-1.035-5.151-2.914-7.03-1.876-1.877-4.372-2.913-7.004-2.913-5.469 0-9.918 4.45-9.918 9.917 0 1.838.513 3.635 1.485 5.189l-.955 3.486 3.507-.949zm8.502-12.191c-.244-.543-.499-.554-.73-.564-.189-.008-.405-.008-.621-.008-.216 0-.568.082-.865.407-.298.324-1.137 1.111-1.137 2.71 0 1.598 1.163 3.141 1.325 3.358.163.216 2.287 3.493 5.542 4.894.774.333 1.379.531 1.85.682.776.246 1.484.212 2.043.129.622-.094 1.913-.781 2.183-1.536.271-.754.271-1.401.19-1.536-.082-.135-.298-.216-.622-.38s-1.913-.943-2.21-.1.051-1.163-.163-1.325-.216-.622-.379-.325z"/></svg>
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
                        <img src="{{ asset('images/fotosaya.jpeg') }}" alt="Yafao Mabe Lamboe" class="w-full h-full object-cover rounded-full grayscale hover:grayscale-0 transition duration-700 scale-110 hover:scale-100">
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

                <div class="grid md:grid-cols-3 gap-8 border-t border-white/5 pt-12">
                    <div class="text-slate-500 font-mono text-sm tracking-widest italic" data-aos="fade-right">Implementation</div>
                    <div class="md:col-span-2">
                        <h4 class="text-2xl font-bold text-white mb-8 uppercase tracking-tighter" data-aos="fade-left">Sistem Informasi & UI/UX Design</h4>
                        
                        <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-8">
                            <div data-aos="flip-left" class="bg-white/[0.03] p-6 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition-all group">
                                <div class="mb-5 overflow-hidden rounded-xl border border-white/5 aspect-video bg-slate-800 relative group">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity z-10 flex items-center justify-center">
                                        <span class="text-white text-[10px] font-bold tracking-widest">VIEW INTERFACE</span>
                                    </div>
                                    <img src="{{ asset('images/screenshot-siakad.png') }}" alt="SIAKAD" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 opacity-60 group-hover:opacity-100">
                                </div>
                                <h5 class="text-white font-bold mb-3 group-hover:text-indigo-400 text-lg">SIAKAD (Akademik)</h5>
                                <p class="text-[11px] text-slate-400 mb-6">Sistem informasi akademik terpadu untuk efisiensi administrasi sekolah.</p>
                                <div class="flex items-center justify-between mt-auto">
                                    <a href="#" class="text-[9px] px-4 py-2 bg-indigo-600 text-white rounded-lg font-bold uppercase tracking-widest">Live Demo</a>
                                    <span class="text-[9px] font-mono text-indigo-500 bg-indigo-500/10 px-2 py-1 rounded">LARAVEL 12</span>
                                </div>
                            </div>

                            <div data-aos="flip-right" data-aos-delay="200" class="bg-white/[0.03] p-6 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition-all group">
                                <div class="mb-5 overflow-hidden rounded-xl border border-white/5 aspect-video bg-slate-800 relative group">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity z-10 flex items-center justify-center">
                                        <span class="text-white text-[10px] font-bold tracking-widest">VIEW INTERFACE</span>
                                    </div>
                                    <img src="{{ asset('images/screenshot-gereja.png') }}" alt="Database Gereja" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700 opacity-60 group-hover:opacity-100">
                                </div>
                                <h5 class="text-white font-bold mb-3 group-hover:text-indigo-400 text-lg">Database Jemaat</h5>
                                <p class="text-[11px] text-slate-400 mb-6">Sistem manajemen data jemaat dengan enkripsi data dan akurasi tinggi.</p>
                                <div class="flex items-center justify-between mt-auto">
                                    <a href="#" class="text-[9px] px-4 py-2 bg-indigo-600 text-white rounded-lg font-bold uppercase tracking-widest">Live Demo</a>
                                    <span class="text-[9px] font-mono text-indigo-500 bg-indigo-500/10 px-2 py-1 rounded">SQL OPTIMIZED</span>
                                </div>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="400" class="lg:col-span-2 bg-white/[0.03] p-6 rounded-2xl border border-white/10 hover:border-indigo-500/50 transition-all group">
                                <div class="grid md:grid-cols-2 gap-8 items-center">
                                    <div class="overflow-hidden rounded-xl border border-white/5 aspect-video bg-slate-800 relative group">
                                        <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity z-10 flex items-center justify-center">
                                            <span class="text-white text-[10px] font-bold tracking-widest">OPEN FIGMA</span>
                                        </div>
                                        <img src="{{ asset('images/resort-design.png') }}" alt="UI/UX Resort" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 transition">
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-start mb-3">
                                            <h5 class="text-white font-bold group-hover:text-indigo-400 text-lg uppercase">Resort Destination App</h5>
                                            <span class="text-[8px] px-2 py-1 bg-pink-500/20 text-pink-400 rounded-full font-bold uppercase">UI/UX Design</span>
                                        </div>
                                        <p class="text-[11px] text-slate-400 mb-6">Perancangan antarmuka aplikasi booking resort mewah dengan pendekatan User-Centered Design.</p>
                                        <a href="https://www.figma.com/design/VYlEmarX6d5ZWA63EuAlZU/UX-Challenge---Mobile-Datatable---YAFAO?node-id=1-542&t=YNgZHhD1JQDbM42k-1" target="_blank" class="text-[9px] px-4 py-2 bg-indigo-600 text-white rounded-lg font-bold inline-flex items-center gap-2 uppercase tracking-widest">
                                            <span>View Project</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<style>
    /* Custom Cursor Style */
    .project-cursor {
        width: 100px;
        height: 100px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translate(-50%, -50%) scale(0);
        transition: transform 0.3s ease;
    }
    .project-cursor span {
        color: white;
        font-size: 8px;
        font-weight: 900;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    .group:hover ~ .project-cursor, 
    .group:hover .project-cursor {
        transform: translate(-50%, -50%) scale(1);
    }

    /* Glossy Shimmer Animation */
    @keyframes shimmer {
        0% { transform: translateX(-150%) skewX(-25deg); }
        100% { transform: translateX(150%) skewX(-25deg); }
    }
    .shimmer-effect::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.05), transparent);
        animation: shimmer 3s infinite;
    }

    /* Floating Index Number */
    .project-index {
        position: absolute;
        top: -20px;
        right: 10px;
        font-size: 120px;
        font-weight: 900;
        line-height: 1;
        color: transparent;
        -webkit-text-stroke: 1px rgba(255,255,255,0.03);
        z-index: 0;
        pointer-events: none;
        font-style: italic;
    }
</style>

<section id="work" class="py-32 px-8 bg-[#020617] relative overflow-hidden" x-data="{ mouseX: 0, mouseY: 0 }" @mousemove="mouseX = $event.clientX; mouseY = $event.clientY">
    
    <div class="project-cursor hidden lg:flex" :style="`left: ${mouseX}px; top: ${mouseY}px`" id="custom-cursor">
        <span>View Project</span>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="flex flex-col mb-24" data-aos="fade-up">
            <div class="flex items-center gap-4 mb-4">
                <div class="h-[1px] w-12 bg-indigo-500"></div>
                <h3 class="text-indigo-500 font-mono text-xs uppercase tracking-[0.5em]">Selected Artifacts</h3>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
            
            <div data-aos="fade-up" 
                 class="group relative"
                 @mouseenter="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(1)'"
                 @mouseleave="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(0)'">
                
                <span class="project-index">01</span>
                
                <div class="relative z-10 p-[1px] rounded-[2.5rem] bg-gradient-to-b from-amber-500/30 via-transparent to-transparent hover:from-amber-500 transition-all duration-700 overflow-hidden shimmer-effect">
                    <div class="bg-[#0b1224] p-10 rounded-[2.45rem] h-full flex flex-col border border-white/5">
                        <div class="mb-8 overflow-hidden rounded-3xl aspect-video bg-slate-900 relative border border-white/10">
                            <img src="https://images.unsplash.com/photo-1519003722824-194d4455a60c?q=80&w=800&auto=format&fit=crop" alt="LAMBOE Express" class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1224] via-transparent to-transparent"></div>
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <span class="text-[9px] font-black text-amber-500 border border-amber-500/30 px-4 py-1.5 rounded-full uppercase tracking-[0.2em] bg-amber-500/5">System v1.0 // Edge</span>
                            <div class="flex gap-1">
                                <div class="w-1 h-1 bg-amber-500 rounded-full animate-ping"></div>
                                <div class="w-1 h-1 bg-amber-500 rounded-full"></div>
                            </div>
                        </div>

                        <h4 class="text-3xl font-black text-white mb-4 italic tracking-tighter uppercase italic">L.A.M.B.O.E<span class="text-amber-500">.Express</span></h4>
                        <p class="text-xs text-slate-400 leading-relaxed mb-10 font-medium">
                            Arsitektur ekspedisi futuristik dengan integrasi <span class="text-white italic">Real-Time Logistics</span>. UI didesain untuk efisiensi tinggi dengan skema warna industrial premium.
                        </p>

                        <div class="mt-auto">
                            <a href="https://lamboe-ekspress.vercel.app/" target="_blank" class="inline-flex items-center gap-4 text-[10px] font-black text-white group-hover:text-amber-400 transition-colors uppercase tracking-[0.3em]">
                                Explore Deployment <span class="w-8 h-[1px] bg-amber-500 group-hover:w-16 transition-all duration-500"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="100" 
                 class="group relative"
                 @mouseenter="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(1)'"
                 @mouseleave="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(0)'">
                
                <span class="project-index">02</span>

                <div class="relative z-10 p-[1px] rounded-[2.5rem] bg-gradient-to-b from-blue-500/30 via-transparent to-transparent hover:from-blue-500 transition-all duration-700 overflow-hidden shimmer-effect">
                    <div class="bg-[#0b1224] p-10 rounded-[2.45rem] h-full flex flex-col border border-white/5">
                        <div class="mb-8 overflow-hidden rounded-3xl aspect-video bg-slate-900 relative border border-white/10">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=800&auto=format&fit=crop" alt="Gemini AI" class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1224] via-transparent to-transparent"></div>
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <span class="text-[9px] font-black text-blue-400 border border-blue-400/30 px-4 py-1.5 rounded-full uppercase tracking-[0.2em] bg-blue-500/5">Neural Intelligence</span>
                            <div class="flex gap-1">
                                <div class="w-1 h-1 bg-blue-500 rounded-full animate-pulse"></div>
                            </div>
                        </div>

                        <h4 class="text-3xl font-black text-white mb-4 italic tracking-tighter uppercase italic">Gemini<span class="text-blue-500">.Chat-API</span></h4>
                        <p class="text-xs text-slate-400 leading-relaxed mb-10 font-medium">
                            Implementasi Large Language Model untuk asisten virtual. Menangani pemrosesan bahasa alami dengan latensi rendah melalui <span class="text-white italic">Optimized API Gateways</span>.
                        </p>

                        <div class="mt-auto">
                            <a href="https://projectfinal-avpn-ancy.vercel.app/" target="_blank" class="inline-flex items-center gap-4 text-[10px] font-black text-white group-hover:text-blue-400 transition-colors uppercase tracking-[0.3em]">
                                Launch Intelligence <span class="w-8 h-[1px] bg-blue-500 group-hover:w-16 transition-all duration-500"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" 
                 class="group relative"
                 @mouseenter="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(1)'"
                 @mouseleave="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(0)'">
                
                <span class="project-index">03</span>

                <div class="relative z-10 p-[1px] rounded-[2.5rem] bg-gradient-to-b from-emerald-500/30 via-transparent to-transparent hover:from-emerald-500 transition-all duration-700 overflow-hidden shimmer-effect">
                    <div class="bg-[#0b1224] p-10 rounded-[2.45rem] h-full flex flex-col border border-white/5">
                        <div class="mb-8 overflow-hidden rounded-3xl aspect-video bg-slate-900 relative border border-white/10">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=800&auto=format&fit=crop" alt="Lumina POS" class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1224] via-transparent to-transparent"></div>
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <span class="text-[9px] font-black text-emerald-400 border border-emerald-400/30 px-4 py-1.5 rounded-full uppercase tracking-[0.2em] bg-emerald-500/5">Enterprise POS</span>
                        </div>

                        <h4 class="text-3xl font-black text-white mb-4 italic tracking-tighter uppercase italic">YAFAO<span class="text-emerald-500">.POS</span> Elite</h4>
                        <p class="text-xs text-slate-400 leading-relaxed mb-10 font-medium">
                            Sistem manajemen transaksi tingkat korporasi. Fokus pada keamanan data dan antarmuka pengguna yang memberikan kesan <span class="text-white italic">Luxurious-Dark</span>.
                        </p>

                        <div class="mt-auto">
                            <a href="https://lumina-pos-production.up.railway.app" target="_blank" class="inline-flex items-center gap-4 text-[10px] font-black text-white group-hover:text-emerald-400 transition-colors uppercase tracking-[0.3em]">
                                Access Terminal <span class="w-8 h-[1px] bg-emerald-500 group-hover:w-16 transition-all duration-500"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" 
                 class="group relative"
                 @mouseenter="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(1)'"
                 @mouseleave="document.getElementById('custom-cursor').style.transform = 'translate(-50%, -50%) scale(0)'">
                
                <span class="project-index">04</span>

                <div class="relative z-10 p-[1px] rounded-[2.5rem] bg-gradient-to-b from-indigo-500/30 via-transparent to-transparent hover:from-indigo-500 transition-all duration-700 overflow-hidden shimmer-effect">
                    <div class="bg-[#0b1224] p-10 rounded-[2.45rem] h-full flex flex-col border border-white/5">
                        <div class="mb-8 overflow-hidden rounded-3xl aspect-video bg-slate-900 relative border border-white/10">
                            <img src="https://images.unsplash.com/photo-1639322537228-f710d846310a?q=80&w=800&auto=format&fit=crop" alt="E-Voting" class="w-full h-full object-cover grayscale-[50%] group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0b1224] via-transparent to-transparent"></div>
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <span class="text-[9px] font-black text-indigo-400 border border-indigo-400/30 px-4 py-1.5 rounded-full uppercase tracking-[0.2em] bg-indigo-500/5">Cryptography v2</span>
                        </div>

                        <h4 class="text-3xl font-black text-white mb-4 italic tracking-tighter uppercase italic">Secure <span class="text-indigo-500">E-Voting</span></h4>
                        <p class="text-xs text-slate-400 leading-relaxed mb-10 font-medium">
                            Aplikasi pemungutan suara digital dengan enkripsi tingkat tinggi. Mengutamakan integritas setiap suara dengan protokol keamanan yang tidak tertembus.
                        </p>

                        <div class="mt-auto">
                            <a href="https://evoting-secure-production.up.railway.app" target="_blank" class="inline-flex items-center gap-4 text-[10px] font-black text-white group-hover:text-indigo-400 transition-colors uppercase tracking-[0.3em]">
                                Verify Integrity <span class="w-8 h-[1px] bg-indigo-500 group-hover:w-16 transition-all duration-500"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-600/5 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-600/5 blur-[120px] rounded-full pointer-events-none"></div>
</section>
   <section id="tech" class="py-32 px-8">
    <div class="max-w-6xl mx-auto">
        <h3 data-aos="zoom-in" class="text-center text-white text-3xl font-bold mb-20 italic underline decoration-indigo-500 underline-offset-8">Modern Stack Expertise</h3>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <div data-aos="fade-up" data-aos-delay="100" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-indigo-500/50 transition group">
                <div class="text-indigo-500 text-3xl font-black mb-2 group-hover:scale-110 transition">PHP</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">v8.4 / Laravel 12</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="200" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-yellow-500/50 transition group">
                <div class="text-yellow-500 text-3xl font-black mb-2 group-hover:scale-110 transition">JS</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">ES6+ / Node.js</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-blue-500/50 transition group">
                <div class="text-blue-500 text-3xl font-black mb-2 group-hover:scale-110 transition">TS</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Type Safety</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="400" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-cyan-500/50 transition group">
                <div class="text-cyan-500 text-3xl font-black mb-2 group-hover:scale-110 transition">GO</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Concurrency</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="500" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-orange-500/50 transition group">
                <div class="text-orange-500 text-3xl font-black mb-2 group-hover:scale-110 transition">HTML</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Semantic UI</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="600" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-sky-400/50 transition group">
                <div class="text-sky-400 text-3xl font-black mb-2 group-hover:scale-110 transition">T-CSS</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Modern Styling</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="700" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-indigo-400/50 transition group">
                <div class="text-indigo-400 text-3xl font-black mb-2 group-hover:scale-110 transition">SQL</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">PostgreSQL</p>
            </div>

            <div data-aos="fade-up" data-aos-delay="800" class="bg-white/[0.03] border border-white/5 p-8 rounded-2xl text-center hover:border-blue-600/50 transition group">
                <div class="text-blue-600 text-3xl font-black mb-2 group-hover:scale-110 transition">DOCKER</div>
                <p class="text-[10px] font-bold tracking-widest uppercase text-slate-500">Containerization</p>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daycare Liyana - Tempat Terbaik untuk Tumbuh Kembang Si Kecil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .hero-gradient { 
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset("images/cover_contoh.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }

        .bounce-in { animation: fadeInUp 0.6s ease-out; }
        @keyframes fadeInUp {
            0% { transform: translateY(20px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
        .slide-in { animation: slideIn 0.6s ease-out; }
        @keyframes slideIn {
            from { transform: translateX(-30px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        .hover\:scale-102:hover { transform: scale(1.02); }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo_daycare.png') }}" alt="Daycare Jagad Solution Logo" class="w-16 h-12 object-contain">
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                        Daycare Jagad Solution
                    </span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-info-circle"></i>
                        <span>About</span>
                    </a>
                    <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-star"></i>
                        <span>Services</span>
                    </a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition duration-300 flex items-center space-x-1">
                        <i class="fas fa-phone"></i>
                        <span>Contact</span>
                    </a>
                    <a href="#login" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition duration-300 transform hover:scale-102">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4">
                <div class="flex flex-col space-y-3">
                    <a href="#home" class="text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-200">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-200">
                        <i class="fas fa-info-circle mr-2"></i>About
                    </a>
                    <a href="#services" class="text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-200">
                        <i class="fas fa-star mr-2"></i>Services
                    </a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium py-2 border-b border-gray-200">
                        <i class="fas fa-phone mr-2"></i>Contact
                    </a>
                    <a href="#login" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-4 py-2 rounded-full text-center">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white slide-in">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Tempat Terbaik untuk 
                        <span class="text-yellow-300">Tumbuh Kembang</span> 
                        Si Kecil
                    </h1>
                    <p class="text-xl mb-8 text-gray-200 leading-relaxed">
                        Daycare Liyana menyediakan lingkungan yang aman, nyaman, dan edukatif dengan pendampingan profesional untuk masa depan cerah anak Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#register" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-yellow-300 transition duration-300 transform hover:scale-102 shadow-lg">
                            <i class="fas fa-user-plus mr-2"></i>Daftar Sekarang
                        </a>
                        <a href="#about" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition duration-300">
                            <i class="fas fa-play mr-2"></i>Tentang Kami
                        </a>
                    </div>
                </div>
                <div>
                    <div class="bg-white rounded-2xl p-8 shadow-2xl">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                                <i class="fas fa-child text-white text-3xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-800 mb-4">Program Unggulan</h3>
                            <div class="space-y-3 text-left">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span class="text-gray-700">Penitipan anak</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span class="text-gray-700">Bimbingan Belajar Calistung</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span class="text-gray-700">Tahfidz Al-Qur'an</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-check-circle text-green-500"></i>
                                    <span class="text-gray-700">Terapi Wicara</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang Daycare Jagad Solution</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kami berkomitmen memberikan pengalaman terbaik untuk tumbuh kembang anak dengan fasilitas modern dan pendampingan profesional.
                </p>
            </div>
            
            <!-- About Image Carousel -->
            <div class="mb-16">
                <div class="relative max-w-4xl mx-auto">
                    <!-- Carousel Container -->
                    <div id="about-carousel" class="relative overflow-hidden rounded-2xl shadow-lg">
                        <div class="flex transition-transform duration-500 ease-in-out" style="width: 400%;">
                            <!-- Slide 1 -->
                            <div class="w-1/4 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=800&h=500&fit=crop" 
                                     alt="Daycare Activities" 
                                     class="w-full h-96 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Aktivitas Edukatif</h3>
                                    <p class="text-white/90 text-sm">Program belajar yang menyenangkan untuk anak-anak</p>
                                </div>
                            </div>
                            
                            <!-- Slide 2 -->
                            <div class="w-1/4 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&h=500&fit=crop" 
                                     alt="Daycare Facilities" 
                                     class="w-full h-96 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Fasilitas Modern</h3>
                                    <p class="text-white/90 text-sm">Lingkungan yang aman dan nyaman untuk bermain</p>
                                </div>
                            </div>
                            
                            <!-- Slide 3 -->
                            <div class="w-1/4 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&h=500&fit=crop" 
                                     alt="Daycare Learning" 
                                     class="w-full h-96 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Pembelajaran Interaktif</h3>
                                    <p class="text-white/90 text-sm">Metode belajar yang mengembangkan kreativitas</p>
                                </div>
                            </div>
                            
                            <!-- Slide 4 -->
                            <div class="w-1/4 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?w=800&h=500&fit=crop" 
                                     alt="Daycare Care" 
                                     class="w-full h-96 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                                    <h3 class="text-white text-xl font-bold mb-2">Perawatan Berkualitas</h3>
                                    <p class="text-white/90 text-sm">Pendampingan profesional dengan penuh kasih sayang</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation Arrows -->
                        <button id="carousel-prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg transition-all duration-300 z-10">
                            <i class="fas fa-chevron-left text-lg"></i>
                        </button>
                        <button id="carousel-next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-3 rounded-full shadow-lg transition-all duration-300 z-10">
                            <i class="fas fa-chevron-right text-lg"></i>
                        </button>
                        
                        <!-- Dots Indicator -->
                        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                            <button class="carousel-dot w-3 h-3 bg-white/60 hover:bg-white rounded-full transition-all duration-300 active" data-slide="0"></button>
                            <button class="carousel-dot w-3 h-3 bg-white/60 hover:bg-white rounded-full transition-all duration-300" data-slide="1"></button>
                            <button class="carousel-dot w-3 h-3 bg-white/60 hover:bg-white rounded-full transition-all duration-300" data-slide="2"></button>
                            <button class="carousel-dot w-3 h-3 bg-white/60 hover:bg-white rounded-full transition-all duration-300" data-slide="3"></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center card-hover bg-white p-8 rounded-2xl shadow-lg border border-blue-100">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Penuh Kasih Sayang</h3>
                    <p class="text-gray-600">Setiap anak diperlakukan dengan penuh kasih sayang dan perhatian khusus sesuai kebutuhan individual mereka.</p>
                </div>
                
                <div class="text-center card-hover bg-white p-8 rounded-2xl shadow-lg border border-green-100">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-blue-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Pendidikan Berkualitas</h3>
                    <p class="text-gray-600">Program edukasi yang dirancang khusus untuk merangsang perkembangan kognitif, motorik, dan sosial anak.</p>
                </div>
                
                <div class="text-center card-hover bg-white p-8 rounded-2xl shadow-lg border border-purple-100">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Keamanan Terjamin</h3>
                    <p class="text-gray-600">Sistem keamanan dengan monitoring CCTV untuk keselamatan anak.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berbagai program unggulan yang dirancang untuk memenuhi kebutuhan tumbuh kembang anak di setiap tahap usianya.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl p-6 shadow-lg card-hover">
                    <img src="{{ asset('images/aksa_bayi.jpg') }}" alt="Layanan Bayi" class="w-full h-32 object-cover rounded-lg mb-4">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mb-4 flex items-center justify-center">
                        <i class="fas fa-baby text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Daycare 1 (0-2 tahun)</h3>
                    <p class="text-gray-600 text-sm">Perawatan khusus untuk bayi dengan nutrisi dan stimulasi yang tepat.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg card-hover">
                    <img src="{{ asset('images/hanin_balita.jpg') }}" alt="Layanan Balita" class="w-full h-32 object-cover rounded-lg mb-4">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-600 rounded-full mb-4 flex items-center justify-center">
                        <i class="fas fa-child text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Daycare 2 (2-4 tahun)</h3>
                    <p class="text-gray-600 text-sm">Program bermain sambil belajar untuk mengembangkan motorik dan kognitif.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg card-hover">
                    <img src="{{ asset('images/prasekolah_contoh.jpg') }}" alt="Layanan Prasekolah" class="w-full h-32 object-cover rounded-lg mb-4">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full mb-4 flex items-center justify-center">
                        <i class="fas fa-users text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Daycare 3 (4 tahun keatas)</h3>
                    <p class="text-gray-600 text-sm">Persiapan masuk sekolah dengan aktivitas edukatif yang menyenangkan.</p>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-lg card-hover">
                    <img src="{{ asset('images/halfday_contoh.jpg') }}" alt="Layanan Half Day Care" class="w-full h-32 object-cover rounded-lg mb-4">
                    <div class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-full mb-4 flex items-center justify-center">
                        <i class="fas fa-clock text-white text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Half Day Care</h3>
                    <p class="text-gray-600 text-sm">Layanan penitipan lengkap dengan program aktivitas setengah hari.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration CTA Section -->
    <section id="register" class="py-20 gradient-bg">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Siap Bergabung dengan Daycare Jagad Solution?</h2>
                <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                    Daftarkan si kecil sekarang dan dapatkan diskon khusus untuk pendaftaran pertama. 
                    Tempat terbatas, jangan sampai kehabisan!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-yellow-300 transition duration-300 transform hover:scale-102 shadow-lg">
                        <i class="fas fa-user-plus mr-2"></i>Daftar Sekarang
                    </a>
                    <a href="#" class="border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition duration-300">
                        <i class="fas fa-phone mr-2"></i>Hubungi Kami
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Contact & Footer Section -->
    <section id="contact" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-3xl font-bold mb-6">Hubungi Kami</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Alamat</h4>
                                <p class="text-gray-300">Metland Transyogi Cluster Gloxinia XX No. 18, Cipenjo, Cileungsi, Bogor Regency, West Java 16820</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Telepon</h4>
                                <p class="text-gray-300">+62 815-8439-5883</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <p class="text-gray-300">daycareliyana.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-8">
                        <h4 class="text-xl font-semibold mb-4">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Map -->
                <div>
                    <h3 class="text-3xl font-bold mb-6">Lokasi Kami</h3>
                    <div class="bg-gray-800 rounded-2xl p-4 h-80">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.984493066485!2d106.97498897399178!3d-6.395999493594558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69946a10b6e7a5%3A0x8046507904aae6ea!2sDaycare%20Jagad%20Solution!5e0!3m2!1sen!2sid!4v1754321225724!5m2!1sen!2sid"
                            width="100%" 
                            height="100%" 
                            style="border:0; border-radius: 1rem;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <div class="border-t border-gray-700 mt-12 pt-8 text-center">
                <p class="text-gray-400">
                    © 2025 Daycare Jagad Solution. All rights reserved. | 
                    <a href="#" class="text-blue-400 hover:text-blue-300">Privacy Policy</a> | 
                    <a href="#" class="text-blue-400 hover:text-blue-300">Terms of Service</a>
                </p>
            </div>
        </div>
    </section>

    <!-- JavaScript for Interactivity -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-white', 'shadow-lg');
                nav.classList.remove('bg-transparent');
            } else {
                nav.classList.remove('bg-white', 'shadow-lg');
                nav.classList.add('bg-transparent');
            }
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('bounce-in');
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        document.querySelectorAll('.card-hover, section').forEach(el => {
            observer.observe(el);
        });

        // Counter Animation
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            
            function updateCounter() {
                start += increment;
                if (start < target) {
                    element.textContent = Math.floor(start);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            }
            updateCounter();
        }

        // Initialize counters when they come into view
        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const count = parseInt(target.getAttribute('data-count'));
                    animateCounter(target, count);
                    counterObserver.unobserve(target);
                }
            });
        });

        document.querySelectorAll('[data-count]').forEach(counter => {
            counterObserver.observe(counter);
        });

        // About Carousel Functionality
        const carousel = document.getElementById('about-carousel');
        const carouselContainer = carousel.querySelector('.flex');
        const slides = carousel.querySelectorAll('.w-1/4.flex-shrink-0');
        const dots = carousel.querySelectorAll('.carousel-dot');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        
        let currentSlide = 0;
        const totalSlides = slides.length;
        
        function updateCarousel() {
            const translateX = -currentSlide * 25; // 25% per slide since each slide is w-1/4
            carouselContainer.style.transform = translateX(${translateX}%);
            
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
                dot.classList.toggle('bg-white', index === currentSlide);
                dot.classList.toggle('bg-white/60', index !== currentSlide);
            });
        }
        
        // Initialize carousel to show first slide
        updateCarousel();
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }
        
        function goToSlide(index) {
            currentSlide = index;
            updateCarousel();
        }
        
        // Event listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => goToSlide(index));
        });
        
        // Auto-play carousel
        let autoPlayInterval = setInterval(nextSlide, 5000);
        
        // Pause auto-play on hover
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });
        
        carousel.addEventListener('mouseleave', () => {
            autoPlayInterval = setInterval(nextSlide, 5000);
        });
        
        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;
        
        carousel.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });
        
        carousel.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            const diff = startX - endX;
            
            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    nextSlide(); // Swipe left
                } else {
                    prevSlide(); // Swipe right
                }
            }
        });
    </script>
</body>
</html>

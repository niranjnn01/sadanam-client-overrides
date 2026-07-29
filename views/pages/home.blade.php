@extends('layouts.guest')

@section('content')


    {{-- Hero Section --}}
    
    <section class="w-full h-[500px]">
        <x-sections.hero-split 
            image="{{tenant_asset('images/sree-narayana-guru.jpg')}}" 
            alt="Your Business"
        >
            <span class="text-primary">Sree Narayana</span> English Medium School in
            <span class="block md:inline">Varkala, is a legacy continued.</span>
        </x-sections.hero-split>
    </section>



    {{-- Feature Blocks Section --}}
    <section class="feature-blocks py-12 bg-white">
        <div class="container max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            
            @foreach($highlights as $highlight)
            <x-featured-card 
                :icon="$highlight['icon']"
                :title="$highlight['title']"
                :description="$highlight['description']"
            />
            @endforeach
            
        </div>
    </section>

    {{-- A Beacon of Education Section --}}
    <section class="beacon-of-education py-16 bg-white">
        <div class="container max-w-7xl mx-auto px-4 flex flex-col lg:flex-row gap-12">
            
            <!-- Left: Text + Image -->
            <div class="beacon-text-block lg:w-2/3 flex flex-col justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-6 border-b-2 border-yellow-400 pb-2 w-full inline-block">
                        A Beacon of Education
                    </h2>

                    <div class="w-full flex flex-col md:flex-row">
                        <div class="md:w-3/4">
                            <p class="text-md mb-6 leading-relaxed font-semibold">
                                Nestled amidst the serene landscapes of Varkala, a beacon of empowerment was ignited by the indomitable spirit of Gourikutty Amma.
                            </p>
                            <p class="mb-4 text-gray-700">
                                The esteemed founder of Sri Narayana English Medium School at Saradagiri, Varkala was more than a mere educator. Her legacy echoes through the hallowed halls, where knowledge blossoms and values are materialized in every life.
                            </p>
                            <p class="mb-4 text-gray-700">
                                Sri Narayana English Medium School, which began as a humble nursery and primary school blossomed into a haven of learning, today where young minds are imbued with knowledge and values.
                            </p>
                            <p class="mb-6 text-gray-700">
                                Recognized by the Government of Kerala, Sri Narayana English Medium School is nearing 30 years of illuminating paths in education.
                            </p>
                        </div>

                        <!-- Image -->
                        <div class="md:w-1/4 ms-5 mt-6 md:mt-0">
                            <div class="relative">
                                <div class="image-skeleton absolute inset-0 rounded-lg"></div>
                                <img
                                    src="{{tenant_asset('images/gourikutty-amma.jpg')}}"
                                    alt="Gourikutty Amma"
                                    class="lazy-image rounded-lg shadow-md object-cover w-full relative"
                                    loading="lazy"
                                >
                            </div>
                            <p class="image-caption text-center text-sm text-gray-600 mt-2 font-medium">
                                Gourikutty Amma
                            </p>
                        </div>
                    </div>
                </div>

                <a
                    href="/about"
                    class="bg-primary text-black px-4 py-2 rounded-lg text-lg hover:bg-yellow-600 transition duration-300 shadow-md self-start mt-6"
                >
                    Learn More
                </a>
            </div>

            <!-- Right: Quote -->
            <div class="lg:w-1/3 flex">
                <div class="quote-box flex flex-col justify-center bg-[#f1d04b] shadow-lg p-8 w-full h-full">
                
                    <p class="quote-text  text-black mb-3">
                        <span class="inline-flex items-center mr-2"><x-heroicon-o-light-bulb class="w-10 h-10" /></span>
                        <span class="text-xl">
                            In oneself lies the whole world and if you know how to look and learn, the door is there and the key is in your hand.
                        </span>
                    </p>
                    <p class="quote-author font-semibold text-right">
                        - Sree Narayana Guru
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section with Theme Colors -->
    <section class="pb-20 w-full bg-white">
        <div class="container max-w-7xl mx-auto px-8">
            <h2 class="text-2xl font-bold mb-2">Upcoming Events</h2>
            <p class="text-muted-foreground mb-10">Stay connected with our vibrant community through these exciting events.</p>

            @if($events->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($events as $event)
                        <!-- Event Card -->
                        <a href="{{ route('events.view', $event->slug) }}" class="rounded-xl shadow-xl overflow-hidden text-white relative h-64 transform hover:-translate-y-1 transition duration-300 group block">
                            <!-- Event Image with Loading State -->
                            <div class="absolute inset-0 bg-gray-200 animate-pulse event-image-skeleton"></div>
                            
                            <img src="{{ $event->image_url }}" 
                                     alt="{{ $event->title }}" 
                                     class="absolute inset-0 w-full h-full object-cover group-hover:scale-[1.05] transition duration-500 event-image"
                                     loading="lazy">


                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            
                            <!-- Content -->
                            <div class="absolute inset-0 flex flex-col justify-end p-6">
                                @if($event->price && $event->price > 0)
                                    <div class="absolute top-0 right-0 bg-primary/90 text-black p-3 rounded-bl-xl font-bold text-xl">
                                        ₹{{ number_format($event->price, 0) }}
                                    </div>
                                @elseif(isset($event->is_free) && $event->is_free)
                                    <div class="absolute top-0 right-0 bg-green-500/90 p-3 rounded-bl-xl font-bold text-sm">
                                        FREE
                                    </div>
                                @endif
                                
                                <p class="text-4xl font-extrabold mb-1">
                                    {{ \Carbon\Carbon::parse($event->starting_at)->format('jS') }}
                                </p>
                                <p class="text-sm font-semibold opacity-90 mb-3">
                                    {{ strtoupper(\Carbon\Carbon::parse($event->starting_at)->format('M Y')) }}
                                </p>
                                <h3 class="text-xl font-bold mb-2 leading-tight line-clamp-2">
                                    {{ $event->title }}
                                </h3>
                                
                                @if($event->starting_at)
                                    <div class="flex items-center space-x-2 text-sm opacity-90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>{{ \Carbon\Carbon::parse($event->starting_at)->format('g:i A') }}</span>
                                    </div>
                                @endif
                                
                                @if($event->venue)
                                    <div class="flex items-center space-x-2 text-sm opacity-90 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="line-clamp-1">{{ $event->venue }}</span>
                                    </div>
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- View All Events Button -->
                @if($events->count() >= 4)
                    <div class="mt-12 text-center">
                        <a href="{{ route('events.index') }}" class="inline-flex items-center px-6 py-3 bg-primary text-black rounded-lg hover:bg-yellow-600 transition-all duration-200 hover:shadow-lg transform hover:-translate-y-0.5 font-semibold">
                            <span>View All Events</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                @endif
            @else
                <x-empty-state 
                    title="No Upcoming Events"
                    message="We're currently planning exciting new events for our school community. Stay tuned for announcements or check back soon!"
                    icon="heroicon-o-calendar"
                />
            @endif
        </div>
    </section>

    {{-- Bottom Features Section --}}
    <section class="bottom-features py-16 text-white mb-20">
        <div class="font-sans bg-fixed bg-center bg-no-repeat text-gray-800 p-8"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{tenant_asset('images/bg.jpg')}});"
        >
            <div class="container max-w-7xl mx-auto px-6 
                        grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center md:text-left">

                <!-- Exemplary Educators (Large Box) -->
                <div class="text-white feature-item-large md:col-span-2 p-8 bg-gray-500 flex flex-col justify-center h-auto md:h-64  hover:shadow-xl transition-all duration-300">
                    <h2 class="text-3xl font-bold mb-4">Exemplary Educators</h2>
                    <p class="mb-3 opacity-90">
                        Our teachers exemplify unwavering dedication and professionalism, fostering an enriching learning environment.
                    </p>
                    <p class="opacity-90">
                        Through personalized attention, the teachers create a nurturing space where students are encouraged to be curious, foster critical thinking, inspiring a lifelong love of learning.
                    </p>
                </div>

                <!-- We are Diverse -->
                <div class="feature-item-small p-8 border-4 border-white text-white hover:bg-white hover:text-gray-800 transition-all duration-300 group">
                    <h2 class="text-xl font-bold mb-2 text-primary group-hover:text-gray-800">We are Diverse</h2>
                    <p class="opacity-90 group-hover:opacity-100">We represent a diverse range of cultures, experiences, and perspectives.</p>
                </div>

                <!-- We are 1:20 -->
                <div class="feature-item-small p-8 border-4 border-white  hover:bg-white hover:text-gray-800 transition-all duration-300 group">
                    <h2 class="text-xl font-bold mb-2 text-primary group-hover:text-gray-800">
                        We are <br>
                        <span class="text-4xl font-extrabold text-white block leading-none my-2 group-hover:text-primary">1:20</span>
                    </h2>
                    <p class="text-white opacity-90 group-hover:opacity-100">
                        Student-teacher ratio of 1:20, ensuring every student receives personalized attention.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    @if($testimonials->count() > 0)
    <div class="py-10 mx-auto bg-white">
        <div class="container max-w-7xl mx-auto px-8">
            <x-headings.four class="text-foreground">
                What they say <span class="font-medium text-primary">About us</span>
            </x-headings.four>

            <div class="flex flex-col gap-5 lg:flex-row lg:gap-7">
                @if($testimonials->count() > 0)
                @foreach($testimonials as $index => $testimonial)
                <x-card class="basis-1/3 bg-card border border-border shadow-xl gap-3 p-10 hover:shadow-2xl transition-all duration-300">
                    <x-card.header class="relative">
                        <div class="my-3 flex gap-3">
                            <div>
                                <img src="{{ tenant_asset($testimonial->testimonialBy->displayPicture->url ?? '/asset/people1.jpg') }}" 
                                     class="rounded-full w-10 h-10 object-cover" 
                                     alt="{{ $testimonial->testimonialBy->full_name ?? 'Anonymous' }}"
                                     loading="lazy" />
                            </div>
                            <div class="flex flex-col">
                                <div class="font-bold text-card-foreground">{{ $testimonial->testimonialBy->full_name ?? 'Anonymous' }}</div>
                                <div class="text-sm text-muted-foreground">{{ $testimonial->testimonialBy->type ?? 'Client' }}</div>
                            </div>
                        </div>
                        <x-heroicon-s-chat-bubble-bottom-center-text class="text-yellow-200 absolute w-10 h-10 right-0 top-0 text-6xl" />
                    </x-card.header>
                    <x-card.content>
                        <x-card.description class="text-card-foreground">{{ $testimonial->description }}</x-card.description>
                    </x-card.content>
                </x-card>
                @endforeach
                @else
                    <x-empty-state 
                        title="No Testimonials Yet"
                        message="We haven't received any testimonials yet. Be the first to share your experience with our services!"
                        icon="heroicon-o-chat-bubble-left-right"
                    />
                @endif
            </div>
        </div>
    </div>
    @endif

    
<style>
/* Image loading skeleton animation */
.image-skeleton, .event-image-skeleton {
    background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

/* Lazy loading images */
.lazy-image, .event-image, .hero-image {
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.lazy-image.loaded, .event-image.loaded, .hero-image.loaded {
    opacity: 1;
}

/* Line clamp utilities */
.line-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Event card hover effect */
.group:hover .event-image {
    filter: brightness(0.9);
}

/* Focus states for accessibility */
a:focus-visible, button:focus-visible {
    outline: 2px solid #3b82f6;
    outline-offset: 2px;
}

/* Newsletter form loading */
.newsletter-loading {
    pointer-events: none;
    opacity: 0.7;
}

/* Smooth scroll for anchors */
html {
    scroll-behavior: smooth;
}

/* Feature cards animation */
.feature-card {
    animation: fadeInUp 0.6s ease-out;
    animation-fill-mode: both;
}

.feature-card:nth-child(1) { animation-delay: 0.1s; }
.feature-card:nth-child(2) { animation-delay: 0.2s; }
.feature-card:nth-child(3) { animation-delay: 0.3s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .event-card-content {
        padding: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle all lazy loading images
    const lazyImages = document.querySelectorAll('.lazy-image, .event-image, .hero-image');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    
                    // Create new image to preload
                    const newImg = new Image();
                    newImg.onload = function() {
                        img.classList.add('loaded');
                        // Hide skeleton if exists
                        const skeleton = img.parentElement.querySelector('.image-skeleton, .event-image-skeleton');
                        if (skeleton) {
                            skeleton.style.display = 'none';
                        }
                    };
                    
                    newImg.onerror = function() {
                        img.classList.add('loaded');
                        const skeleton = img.parentElement.querySelector('.image-skeleton, .event-image-skeleton');
                        if (skeleton) {
                            skeleton.style.display = 'none';
                        }
                    };
                    
                    newImg.src = img.src;
                    
                    // If image is already cached
                    if (newImg.complete) {
                        img.classList.add('loaded');
                        const skeleton = img.parentElement.querySelector('.image-skeleton, .event-image-skeleton');
                        if (skeleton) {
                            skeleton.style.display = 'none';
                        }
                    }
                    
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '50px'
        });

        lazyImages.forEach(img => {
            if (img.classList.contains('hero-image')) {
                // Load hero image immediately
                loadImage(img);
            } else {
                imageObserver.observe(img);
            }
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        lazyImages.forEach(img => loadImage(img));
    }

    // Load image function
    function loadImage(img) {
        const newImg = new Image();
        newImg.onload = function() {
            img.classList.add('loaded');
            const skeleton = img.parentElement.querySelector('.image-skeleton, .event-image-skeleton');
            if (skeleton) {
                skeleton.style.display = 'none';
            }
        };
        
        newImg.onerror = function() {
            img.classList.add('loaded');
            const skeleton = img.parentElement.querySelector('.image-skeleton, .event-image-skeleton');
            if (skeleton) {
                skeleton.style.display = 'none';
            }
        };
        
        newImg.src = img.src;
        
        if (newImg.complete) {
            img.classList.add('loaded');
            const skeleton = img.parentElement.querySelector('.image-skeleton, .event-image-skeleton');
            if (skeleton) {
                skeleton.style.display = 'none';
            }
        }
    }

    // Newsletter form handling
    const newsletterForm = document.querySelector('form[action*="newsletter"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
                submitBtn.disabled = true;
                this.classList.add('newsletter-loading');
                
                // Reset after some time if form doesn't redirect
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    this.classList.remove('newsletter-loading');
                }, 5000);
            }
        });
    }

    // Smooth scroll for anchor links
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

    // Add animation to feature cards when they come into view
    const featureCards = document.querySelectorAll('.feature-card');
    if (featureCards.length > 0 && 'IntersectionObserver' in window) {
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, {
            threshold: 0.1
        });

        featureCards.forEach(card => {
            card.style.animationPlayState = 'paused';
            cardObserver.observe(card);
        });
    }
});
</script>
@endsection
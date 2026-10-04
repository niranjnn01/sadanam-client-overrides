@extends('theme::layouts.guest')

@section('content')



    {{-- Hero Section --}}
    <x-heros.lead-capture background="{{ tenant_asset('images/hero-bg.webp') }}">


        <div class="text-start">
            <!-- Tagline / Pre-title -->
            <p class="font-bold tracking-widest text-white/90 md:text-xl">
                Est. 1926 
            </p>

            <!-- Main Heading -->
            <h1 class="text-3xl font-bold tracking-tight text-primary md:text-5xl lg:text-6xl font-serif shadow-lg">
                SNV Sadanam
            </h1>

            <!-- Tagline -->
            <h2 class="font-brand text-xl font-semibold text-white/90 md:text-2xl">
                A Home Away from Home
            </h2>
        </div>
        
        
        <x-slot:description>
            SNV Sadanam has been a trusted sanctuary for working women. providing safety, comfort, and a true sense of belonging in the heart of the city.
        </x-slot:description>

        <x-slot:actions>
            <x-button href="/about" variant="primary" size="xl">Learn about us</x-button>
            
        </x-slot:actions>

        <x-slot:form>
            <x-forms.callback-request formContainerClass="bg-surface/75 p-5 rounded-xl">
                
                <x-slot:heading>
                    <x-headings.two class="text-secondary font-bold mb-3">
                        Request a call back
                    </x-headings.two>
                </x-slot:heading>

                <x-slot:subHeading>
                    <p class="italic text-lg pb-5">
                        Our team will get back to you at the earliest.
                    </p>
                </x-slot:subHeading>


            </x-forms.callback-request>
        </x-slot:form>

    </x-heros.lead-capture>
    


    {{-- Composite : Celebrations --}}
    @include('system::composites.celebration-band')



    <x-system::layout.section class="bg-primary-foreground">
        <x-system::layout.container class=" my-10">

        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl mb-3 text-center font-brand">Our Branches</h2>
            <p class="mb-10 text-center ">
                Our hostels feature an expanding network of branches strategically situated in prime, safe, and vibrant neighborhoods across the city. Designed with student and traveler convenience in mind, every location offers seamless access to major public transit hubs, key educational institutes, and bustling city centers.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row gap-5">

            @foreach($branches as $branch)
            <x-cards.media 
                    class="flex-1 shadow-none interactive-card"
                    :image="[
                        'src' => tenant_asset($branch['image']['src']),
                        'alt' => $branch['image']['alt']
                    ]"
                    :title="$branch['title']"
                    :description="$branch['excerpt']"
                    :ctas="$branch['ctas']"
                />
            @endforeach

        </div>
        </x-system::layout.container>
    </x-system::layout.section>


    {{-- Compiste Section --}}
    <x-container class="bg-surface rounded-xl my-10 max-w-[1440px]">


        <x-system::composites.standard-split :image="['src' => tenant_asset('images/canteen.webp'), 'alt' => 'Canteen']">
            <x-slot:heading>
                
                <x-headings.one varient="center-loud">
                    Peaceful Minds
                </x-heading.one>

            </x-slot:heading>
            <x-slot:description>
                <div class="flex flex-col gap-5">
                    <p>Designed as a quiet sanctuary amid campus life, our hostel offers a naturally tranquil environment that makes focusing on your studies or work effortless. The peaceful atmosphere fosters concentration, helping you stay productive and balanced throughout the stay.</p>
                    <p>When it is time to unwind, that same calm energy seamlessly transitions into a space for relaxation and social connection. Serene outdoor courtyards and cozy common rooms invite you to recharge with a book, share a casual meal, or gather with friends for late-evening chats. It strikes the perfect balance</p>
                </div>
                
            </x-slot:description>
        </x-system::composites.standard-split>

        

        <x-system::composites.borderless-feature-container>
            
            @foreach($featuredSectionWhychooseUs->items as $featuredSection)

                <x-cards.borderless 
                    :title="$featuredSection['title']" 
                    :description="$featuredSection['description']" 
                    :icon="$featuredSection['media']"/>

            @endforeach

        </x-system::composites.borderless-feature-container>


    </x-container>


    {{-- Composite Component : Img featured Combo --}}
    <x-system::composites.img-featured-combo 
        :highlights="$amenities"
        imageOverlayTitle="Life, Elevated"
        imageOverlayDescription="All your essentials for living, studying, and relaxing. All under one safe roof."
        
        :featuredImgSrc="tenant_asset('images/second-floor.webp')"/>
    
    

    {{-- Quotation - compact --}}
    <x-system::composites.quotations.compact
        quotation="Whatever be the difference in men's creed, dress, and language—their humanity is one."
        author="Sree Narayana Guru"
    />
    

    {{-- Componet Text Image Gallery --}}
    <x-system::composites.gallery-previews.text-featured-mason
        eyebrow="100 Years of Heritage & Comfort" 
        title="A Glance Inside Our Living History"
        :featuredImage="tenant_asset('images/stair-well.webp')"  
        :gallery="$homeGallery"
    >
        <p>
            Step into a space where a century of heritage meets modern comfort. Every corner tells a story, offering an inspiring backdrop for your stay.
        </p>
        <p>Explore the thoughtful details designed to make you feel right at home. you will find fully equipped social lounges, cozy quiet zones, and pristine modern amenities crafted to support both relaxation and productivity. Browse our gallery to get a glimpse of the unique spaces awaiting you.</p>
    </x-system::composites.gallery-previews.text-featured-mason>
    
    


    
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
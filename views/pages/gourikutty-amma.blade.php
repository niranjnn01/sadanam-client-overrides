@extends('layouts.guest')

@section('title', $page_heading)

@section('pageHeading', $page_heading)


@section('content')

    <div class="container mx-auto px-4 py-8">

    <x-headings.two class="mt-5">Gourikutty Amma</x-headings.one>

        <div class="prose max-w-none">
            <div class="relative">
                <figure class="ml-4 mb-3" style="width: 250px; float: right !important; margin-left: 1.5rem !important;">
                    <x-image
                        src="{{tenant_asset('images/gourikutty-amma.jpg')}}"
                        class="w-full h-auto rounded-lg shadow-md"
                        alt="Gourikutty Amma"
                        
                    />
                    <figcaption class="text-right text-sm text-gray-600 mt-2">
                        Gourikutty Amma (1906 - 1987)
                    </figcaption>
                </figure>

                <p class="mb-4 leading-relaxed">
                Kakkattu Gourikutty Amma, the founder of <a href="/about" class="text-primary font-medium">Sri Narayana English medium school</a> at Saradagiri
                Varkala was born in an aristocratic Ezhava family in kayamkulam of central Travancore, Kerala.
                After graduating in physics, she joined the central government service in the Accountant
                General’s office Thiruvananthapuram. During her short service period, She took a lead role in
                the formation of Sree Narayana Vanitha Samajam in 1934. The Samajam is presently known as
                SNV women’s Association.

                </p>

                <p class="mb-4 leading-relaxed">
                The women’s association provided a platform for women to engage in social and charity service.
                Responding to her inner call for charity work and empowerment of women, Gourikutty Amma
                resigned from the service and devoted her entire life for the upliftment of women, particularly
                from the lowest strata of the society.
                </p>

                <p class="mb-4 leading-relaxed">
                Sri Narayana Vidyarthini Sadanam, a privately owned hostel for girl students started by Srimathi
                T. V. Narayani Amma in 1924 was handed over to Sri Narayana Vanitha Samajam in 1935.
                The activities of present SNV women's association expanded gradually encompassing students
                hostel, working women’s hostel in Thiruvananthapuram and an exclusive project for women
                empowerment at Saradagiri, Varkala.
                </p>



                <h2 class="text-2xl font-bold mt-8 mb-4 text-gray-800">Saradagiri Project</h2>

                <p class="mb-4 leading-relaxed">
                    Named after the revered Sarada Devi of Sivagiri Mutt, the Saradagiri Project is the 
                    brainchild of Gourikutty Amma.
                </p>

                <p class="mb-4 leading-relaxed">
                Conceived in 1966, the project
                    aims at the socio-economic empowerment of poor women. After procuring 6.5 acres of land at
                    Shardagiri adjacent to Sivagiri Mutt in 1968, she designed and executed income generating
                    programs for poor women.
                </p>
                <p class="mb-4 leading-relaxed">
                    Production and Training units related to Tailoring, Pickle making, Curry powder and Bakery,
                    Food Processing etc at Saradagiri may be considered as the forerunner of the modern
                    Kudumbasree units of Kerala. To make the woman more self-reliant, a baby creche and nursery 
                    school were started to look after the children and educate them properly while the mothers are 
                    working. This need based arrangement was really a boon to the woman engaged in various production 
                    units at Saradagiri.
                </p>

                <p class="mb-4 leading-relaxed">
                    
                    Considering the request of the general public at Varkala, an English medium nursery and
                    primary school was also started at Saradagiri. By 1974, the following entities were fully
                    operationalised.
                </p>

                <ol style="list-style-type: decimal !important; padding-left: 2rem !important;" class="my-4 font-medium space-y-2 mb-4">
                    <li class="mb-2">Nursery school (English and Malayalam medium)</li>
                    <li class="mb-2">Lower primary English medium school</li>
                    <li class="mb-2">Agathi Mandiram - catering to the old and destitute women</li>
                    <li class="mb-2">Santi Bhavanam for old age women</li>
                </ol>

                <p class="mb-4 leading-relaxed">
                    The lower primary English medium school was later elevated to an English medium High school
                    recognised by the Government of Kerala. The ownership and management of the school is
                    vested with SNV women’s association, Thiruvananthapuram.
                </p>

                
            </div>
        </div>
    
    </div>
@endsection

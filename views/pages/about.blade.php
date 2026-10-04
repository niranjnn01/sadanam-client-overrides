@extends('theme::layouts.guest')


@section('content')

        
    <x-system::layout.container>

        <div class="flex flex-col gap-5 mb-5">

            <p class="text-lg">Sri Narayana Guru, the great visionary, recognized the need for a hostel for underprivileged girls and women who lacked safe and affordable accommodation while pursuing higher education and employment opportunities in Thiruvananthapuram. Guru initiated the effort by offering a gold coin along with his blessings, leading to the founding of SNV Sadanam.</p>

            <p class="text-lg">Established in 1924 at Thiruvananthapuram, Sree Narayana Vidyarthini Sadanam (SNV Sadanam) today is a premier institution dedicated to the educational and social empowerment of women. For over a century, the organization has provided secure residential facilities and support systems for female students and working professionals. </p>

            <p class="text-lg">Established on the principle that education is a primary tool for social progress, the institution was created to be an affordable and inclusive space, open to all women regardless of caste, religion or creed. Besides Thiruvananthapuram, the S.N.V. Women’s Association also purchased 6 acres of land at Varkala. Being close to Sivagiri, the picturesque place was named Saradhagiri. Apart from commendable social work that was carried on earlier, Saradagiri also has a school and a hostel currently.</p>

        </div>

        
    </x-system::layout.container>



    <x-system::layout.band class="bg-surface my-5 p-10">
        

        <div class="max-w-5xl mx-auto">

            <x-headings.two class="text-secondary mb-3">Core Facilities and Services available</x-headings>
            <p class="text-center text-lg mb-5">The organization operates several wings designed to meet the diverse needs of its residents</p>


            <div class="flex flex-col lg:flex-row justify gap-3">

                @php

                $facilities = [
                    [
                        'title' => "Student Hostel",
                        'description' => "Safe and affordable housing for students enrolled in various educational institutions across the city.",
                        'icon' => "heroicon-o-building-office-2",
                    ],
                    [
                        'title' => "Working Women’s Hostels",
                        'description' => "Dedicated accommodation for professionals, ensuring a supportive environment for those entering the workforce.",
                        'icon' => "heroicon-o-home",
                    ],
                    [
                        'title' => "Guest Rooms",
                        'description' => "The hostels provide safe and affordable guest rooms for women who are on a short visit to the city. ",
                        'icon' => "heroicon-o-users",
                    ]
                ];
                    
                @endphp

                @foreach ($facilities as $item)
                    <x-cards.borderless-compact
                        :title="$item['title']"
                        :description="$item['description']"
                        :icon="$item['icon']"
                    />    
                @endforeach
                
            </div>


        </div>

    </x-system::layout.band>

    <x-system::layout.container>
        

    
        
        <div class="flex flex-col lg:flex-row gap-5 my-10 py-5">
            <div class="flex-1">

                <x-image class="shadow-xl mb-3" src="{{tenant_asset('images/branches/varkala.webp') }}" alt="Hostel at Saradagiri, Varkala."/>
                <x-figcaption class="text-center" caption="Hostel at Saradagiri, Varkala."/>
            </div>
            <div class="flex-1">

                <x-headings.two class="text-secondary text-start">Hostel at Saradagiri, Varkala.</x-headings.two>
                <p class="text-lg">The institution is managed by the S.N.V. Women’s Association, whose committee members work honorarily to carry out the noble mission of the founders of the institution. The Sadanam is notable for its long-standing tradition of inmates-led governance. The management encourages residents to participate in the internal administration and decision-making process and strives to foster practical leadership experience and civic responsibilities. They also conduct very entertaining cultural programmes on special days like the hostel day.</p>

            </div>
        </div>
        


        
        <div class="p-10 my-5 bg-surface border-primary-foreground rounded-xl">


            <div class="max-w-3xl mx-auto">
                <x-headings.two class="text-secondary">Mission and Future Outlook</x-headings.two>
                <p class="text-lg  italic">Marking its centenary in 2024, SNV Sadanam remains committed to its original mission: removing the logistical and social barriers that prevent women from achieving their full potential. The organization continues to modernize its infrastructure while maintaining its legacy as a center for providing a safe and secure ‘home away from home’ atmosphere for its inmates.</p>
            </div>

        </div>
        


        <br/>
    </x-system::layout.container>



@endsection
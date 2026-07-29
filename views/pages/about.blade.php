@extends('layouts.guest')


@section('content')

<div class=" ">
<div class=" overflow-hidden ">

    <h1 class="text-4xl font-semibold mb-6 text-gray-900">Saradagiri School</h1>

<div>
    <div class="md:float-right flex flex-col justify-center  md:ml-6 md:w-1/3   ">
      
            <x-image class="rounded-lg" src="{{tenant_asset('images/saradagiri-school.jpg')}}" alt="Saradagiri School"/>
            
 
        <p class="mt-2 text-xs text-end text-gray-500">Saradagiri School</p>
    </div>

    <p class="mb-4 text-md">From its humble beginnings as a nursery and primary school within The Saradagiri Project, Sri Narayana English Medium School has blossomed into a beacon of learning.</p>

    <p class="mb-4 text-md">Initially the first English Medium primary school in Varkala, it has since evolved into a comprehensive educational institution recognized by the Government of Kerala, thanks to the unwavering commitment of Gourikutty Amma, its esteemed founder.</p>

    <p class="mb-4 text-md  "><span class="text-yellow-500"><a href="{{ tenant_route('gourikutty-amma') }}" class="text-primary font-medium">Gourikutty Amma </a></span>, the esteemed founder of Sri Narayana English Medium School at Saradagiri, Varkala, was more than a mere educator. Her legacy echoes through time, resonating with dedication and passion for uplifting women, especially those marginalized in society.</p>

    <h2 class="text-2xl font-bold mb-4 text-gray-800 ">A Beacon of Education</h2>

    <p class="mb-4 text-md">Nestled amongst the picturesque hills of Varkala, in close proximity to the sacred Sree Narayana Guru's Mahasamadhi Mandiram, Sri Narayana English Medium School boasts a sprawling campus spanning 6.5 acres.</p>

</div>
    
    

    <p class="mb-2 text-md">The school is well-equipped with ample amenities to cater to the diverse needs of its students like:</p>
    <ul class="list-disc list-inside ml-4 mb-8 text-md space-y-1">
        <li>Playground</li>
        <li>Smart Classrooms</li>
        <li>Science Laboratory</li>
        <li>Library</li>
    </ul>

    <p class="mt-8 pt-4 mb-4 text-md ">Today, the ownership and management of the school are entrusted to the <span class="font-bold">SNV Women's Association, Thiruvananthapuram.</span> </p>

</div>


</div>
@endsection
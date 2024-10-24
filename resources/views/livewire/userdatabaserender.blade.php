<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/8bdc128fe8.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body class="bg-slate-50">
    <div>
        @if ($companyInfo)
            <div class="flex justify-center">
            <div class="flex flex-col max-w-6xl px-8 lg:px-20 py-32 bg-white mb-20">    

    <!-- HEADERIS, ESMINE INFORMACIJA -->
    <div class="flex justify-start gap-10 align-middle">
    @if($companyInfo->company_main_photo)
        <img src="{{ asset('storage/' . $companyInfo->company_main_photo) }}" class="block max-w-24 rounded-md" alt="">
    @endif
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3">
            <h1 class="text-4xl mt-10 font-bold tracking-tight text-zinc-800 col-span-2 sm:text-5xl">{{ $companyInfo->company_headline }}</h1>
            <p class="my-6 text-base/7 text-zinc-600 col-span-2">{{ $companyInfo->company_short_description }}<p>
            <div class="flex justify-start col-span-3">
                        <div class="flex justify-start gap-5 mb-10">
                        @if($companyInfo->company_fb_link)    
                        <a  href="{{ $companyInfo->company_fb_link }}"><i class="fa-brands fa-facebook text-2xl text-gray-400 hover:text-gray-500"></i></a>
                        @endif
                        @if($companyInfo->company_insta_link)
                        <a  href="{{ $companyInfo->company_insta_link }}"><i class="fa-brands fa-square-instagram text-2xl text-gray-400 hover:text-gray-500"></i></a>
                        @endif
                        @if($companyInfo->company_linkedin_link)
                        <a  href="{{ $companyInfo->company_linkedin_link }}"><i class="fa-brands fa-linkedin text-2xl text-gray-400 hover:text-gray-500"></i></a>
                        @endif
                        </div>
                        @if($companyInfo->company_followers)
                        <div class="text-gray-400 text-base/7 ml-5 mt-1">
                            <p>Mus seka: {{ $companyInfo->company_followers }} žmonės</p>
                        </div>
                        @endif
            </div>
    </div>
    <!-- IMONES VEIKLOS GALERIJA -->
    @if($companyInfo && $companyInfo->company_photos)
    @php
        $photos = json_decode($companyInfo->company_photos); // Decode JSON string to array
    @endphp
    <div class="grid grid-cols-2 mx-0 md:grid-cols-4 gap-4 xl:-mx-28 my-10">
    @foreach($photos as $photo)
        <div>
            <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $photo) }}" alt="">
        </div>
    @endforeach
    </div>
    @endif

    <!-- KONTAKTU SEKCIJA -->

    <div class="flex flex-col items-center my-28 md:flex-row md:justify-evenly">
    @if($companyInfo->company_phone)
        <h2 class="text-3xl my-2 md:my-10 font-bold tracking-tight text-zinc-800 sm:text-4xl">+{{ $companyInfo->company_phone }}</h2>
    @endif
    @if($companyInfo->company_email)
        <h2 class="text-3xl my-2 md:my-10 font-bold tracking-tight text-zinc-800 sm:text-4xl">{{ $companyInfo->company_email }}</h2>
    @endif
    </div>


    <!-- APIE MUS SEKCIJA -->

    <div>
        <div>
            <h2 class="text-3xl my-10 font-bold tracking-tight text-zinc-800 sm:text-4xl">{{ $companyInfo->company_long_desc_name }}</h2>
        </div>
        <div>
            <p class="my-6 text-base/7 text-zinc-600 dark:text-zinc-400"> {{ $companyInfo->company_long_desc }}</p>
        </div>
    </div>

    <!-- REKVIZITAI -->

    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-20 mt-10">
        <div class="col-span-2">
            <h2 class="text-3xl my-6 font-bold tracking-tight text-zinc-800 sm:text-4xl">{{ $companyInfo->company_requisites_name }}</h2>
            <ul class="text-slate-600 text-base/7">
                <li class="mb-6 text-base/7 text-zinc-600">{{ $companyInfo->company_requisites_desc }}</li>
                <li><b>Pavadinimas: </b>{{ $companyInfo->company_name }}</li>
                @if($companyInfo->company_code)
                <li><b>Įmonės kodas: </b>{{ $companyInfo->company_code }}</li>
                @endif
                @if($companyInfo->company_address)
                <li><b>Adresas: </b>{{ $companyInfo->company_address }}</li>
                @endif
                @if($companyInfo->company_iv_desc)
                <li><b>IV pažymėjimo numeris: </b>{{ $companyInfo->company_iv_desc }}</li>
                @endif
            </ul>
        </div>
    </div>

    </div>
</div>
        <div class="flex justify-center mb-8">
            <a href="/" class="text-slate-400 hover:text-slate-600">Privatumas, taisyklės, sausainėliai</a>
        </div>
@livewireScripts
        @else
            <h1 class="text-center m-10 text-3xl">Tokios įmonės/veiklos musu svetainėje nėra</h1>
        @endif
    </div>
</body>
</html>
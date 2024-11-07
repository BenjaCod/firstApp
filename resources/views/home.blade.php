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
<body class="bg-gray-50 mt-10">
    <div class="text-black p-6 rounded-3xl flex justify-center items-center flex-col h-full">
        <h1 class="text-5xl font-bold text-zinc-800">Mūsų svetainė</h1><br>
        <p class="text-2xl text-center max-w-5xl text-zinc-600">Sukurk internetinį puslapį per kelias minutes</p><br>
        <div class="inline-flex">
            <a href="{{ route('login') }}" class=" border-gray-100 bg-gray-100 border-solid border-2 hover:border-indigo-500 text-gray-700 font-bold pb-2 pt-1 px-4 rounded-full mr-2 text-2xl">
                Prisijungti
            </a>
            <a href="{{ route('register') }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold pb-1 pt-1 px-4 rounded-full ml-2 text-2xl">
                Kurti puslapi
            </a>
        </div>  
        <p class="text-xl text-center max-w-5xl mt-20 text-zinc-600">Jūsų svetainė atrodys taip (pavyzdys): </p><br>
    </div>


<!-- Website view -->

<div>
            <div class="flex justify-center mt-5">
            <div class="flex flex-col max-w-6xl px-8 lg:px-20 py-32 bg-white mb-20 shadow-lg">    

    <!-- HEADERIS, ESMINE INFORMACIJA -->
    <div class="flex justify-start gap-10 align-middle">
        <img src="\images\logo_example.png" class="block max-w-32 rounded-md" alt="Main Photo">
</div>
    <div class="grid grid-cols-1 md:grid-cols-3">
            <h1 class="text-4xl mt-10 font-bold tracking-tight text-zinc-800 col-span-2 sm:text-5xl">Software designer, founder, and amateur astronaut.</h1>
            <p class="my-6 text-base/7 text-zinc-600 col-span-2">I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.<p>
            <div class="flex justify-start col-span-3">
                        <div class="flex justify-start gap-5 mb-10">  
                        <a  href="#"><i class="fa-brands fa-facebook text-2xl text-gray-400 hover:text-gray-500"></i></a>
                        <a  href="#"><i class="fa-brands fa-square-instagram text-2xl text-gray-400 hover:text-gray-500"></i></a>
                        <a  href="#"><i class="fa-brands fa-linkedin text-2xl text-gray-400 hover:text-gray-500"></i></a>
                        </div>
                        <div class="text-gray-400 text-base/7 ml-5 mt-1">
                            <p>Mus seka: 43752 žmonės</p>
                        </div>
            </div>
    </div>
    <!-- IMONES VEIKLOS GALERIJA -->
    <div class="grid grid-cols-2 mx-0 md:grid-cols-4 gap-4 xl:-mx-28 my-10">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_2.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_5.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="\images\image_8.jpg" alt="">
        </div>
    </div>

    <!-- KONTAKTU SEKCIJA -->

    <div class="flex flex-col items-center my-28 md:flex-row md:justify-evenly">
        <h2 class="text-3xl my-2 md:my-10 font-bold tracking-tight text-zinc-800 sm:text-4xl">+37060000000</h2>
        <h2 class="text-3xl my-2 md:my-10 font-bold tracking-tight text-zinc-800 sm:text-4xl">musuimone@imone.lt</h2>
    </div>

    <!-- APIE MUS SEKCIJA -->

    <div>
        <div>
            <h2 class="text-3xl my-10 font-bold tracking-tight text-zinc-800 sm:text-4xl">Apie mus</h2>
        </div>
        <div>
            <p class="my-6 text-base/7 text-zinc-600 dark:text-zinc-400">
                UAB „Krekenavos agrofirma“ istorija siekia beveik tris dešimtmečius. 1993 m. 
                Krekenavos miestelyje įsi­kū­ręs kiaulių auginimo kompleksas buvo didžiausias visoje šalyje. 
                Tuomet pastačius mėsos perdirbimo ce­chą, čia pradėti gaminti ir mėsos gaminiai. 
                Per dešimtmetį stipriai išaugus „Krekenavos“ mėsos gaminių pak­lausai, prireikė naujo cecho, 
                nes senasis nebepajėgė patenkinti paklausos. Todėl 2004 metais, inves­ta­vus daugiau nei 23 mln. eurų, 
                Kėdainių rajone pastatyta moderni, visiškai nauja mėsos perdirbimo ga­mykla. 
                Po daugiau nei 22.000 m2 plotą užimančios įmonės pastatų stogu įsikūrė didžiausia Lietuvoje 
                kiau­lių ir galvijų skerdykla, mėsos išpjaustymo, pakavimo cechai bei termiškai apdorotų mėsos 
                produktų gamy­bos padalinys.</p>
        </div>
    </div>

    <!-- REKVIZITAI -->

    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-20 mt-10">
        <div class="col-span-2">
            <h2 class="text-3xl my-6 font-bold tracking-tight text-zinc-800 sm:text-4xl">Rekvizitai</h2>
            <ul class="text-slate-600 text-base/7">
                <li class="mb-6 text-base/7 text-zinc-600">Darom visokias desras ten kemsam avis visokias duodam duodam uch ty kiek darbo kaip kiaulu papjovus draskomes kaip patrakeliai</li>
                <li><b>Pavadinimas: </b>UAB "ImonesPavadinimas"</li>
                <li><b>Įmonės kodas: </b>384859305</li>
                <li><b>Adresas: </b>Imones adresas gatve. 48B-39. Vilnius. Lietuva.</li>
            </ul>
        </div>
    </div>

    </div>
</div>
        <div class="flex justify-center mb-8">
            <a href="/" class="text-slate-400 hover:text-slate-600">Privatumas, taisyklės, sausainėliai</a>
        </div>
@livewireScripts
    </div>
</body>
</html>

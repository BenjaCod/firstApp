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
<body class="bg-gray-100">
    <div class="text-black p-6 rounded-4xl flex justify-center items-center flex-col h-full">
        <h1 class="text-5xl font-bold">ManoSvetainė</h1><br>
        <p class="text-2xl text-center max-w-5xl"> Sukurk internetini puslapi savo verslui <br>per kelias minutes</p><br>
        <div class="inline-flex">
            <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2 text-2xl">
                Prisijungti
            </a>
            <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-2 text-2xl">
                Kurti puslapi
            </a>
        </div>  
        <p class="text-2xl text-center max-w-5xl mt-10">Jusu puslapis atrodys taip (pavyzdys): </p><br>
    </div>

<div class="flex justify-center">
    <div class="flex flex-col max-w-5xl border-2 border-solid rounded-3xl p-10 bg-white mb-20">    

                            <!-- HEADERIS, ESMINE INFORMACIJA -->

                            <div class="flex gap-10 mb-5">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="max-w-40 rounded-full block" alt="">
                                </div>

                                <div>

                                        <div class="flex gap-5 justify-between">
                                            <div class="flex flex-col justify-evenly">
                                                <h1 class="text-4xl font-semibold">Pavadinimas</h1>
                                                <p class="text-3xl text-slate-700">2456 sekejai</p>
                                            </div>

                                            <div>
                                                <div class="flex justify-end gap-5 mb-4">
                                                <a  href="https://www.google.com/"><i class="fa-brands fa-facebook text-2xl text-blue-700"></i></a>
                                                <a  href="https://www.google.com/"><i class="fa-brands fa-square-instagram text-2xl text-blue-700"></i></a>
                                                <a  href="https://www.google.com/"><i class="fa-brands fa-linkedin text-2xl text-blue-700"></i></a>
                                                </div>
                                                <div class="flex flex-col items-end">
                                                    <p class="text-2xl text-slate-700">+37072283127</p>
                                                    <p class="text-2xl text-slate-700">manoimone@gmail.com</p>
                                                </div>

                                            </div>
                                        </div>

                                    <div>
                                        <p class="text-2xl mt-5 text-slate-600">Automobiliu varikliu, vaziuokliu, greiciu deciu, kebulu remontas, dazymas, ir kitai darbai.<p>
                                    </div>

                                </div>


                            </div>

                            <!-- IMONES VEIKLOS GALERIJA -->

                        <div class="mt-5">
                        @livewire('image-slider-home')
                        </div>

                            <!-- APIE MUS SEKCIJA -->

                            <div>
                                <div>
                                    <h2 class="text-3xl mb-5 font-semibold mt-8">Apie Mus</h2>
                                </div>
                                <div>
                                    <p class="text-justify text-slate-600 text-lg"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum velit in metus porta, nec interdum ex tincidunt. 
                                        Nam mattis egestas neque, eget condimentum enim pellentesque condimentum. Phasellus faucibus tristique metus eu porttitor. 
                                        Duis non ligula eu eros convallis dictum eu dictum urna. Praesent congue pretium enim eget molestie. Integer laoreet nibh purus, 
                                        ut gravida arcu vulputate et. Cras pretium libero lacus, et aliquam nulla consequat id. Integer velit quam, dapibus ut tellus nec,
                                         bibendum egestas massa. Cras maximus tellus quis eros aliquam malesuada. Nam vestibulum mauris magna, id lobortis ligula molestie at.</p>
                                </div>
                            </div>

                            <!-- REKVIZITAI / ZEMELAPIS -->

                            <div class="flex flex-col gap-5 justify-between lg:flex-row mt-10">
                                <div>
                                    <h2 class="text-3xl mb-5 font-semibold">Rekvizitai</h2>
                                    <ul class="text-slate-600 text-sm text-justify">
                                        <li class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum elementum velit in metus porta, nec interdum ex tincidunt. Nam mattis egestas neque, eget condimentum enim pellentesque condimentum. Phasellus faucibus tristique metus eu porttitor.</li>
                                        <li><b>Imones kodas:</b> 38493028</li>
                                        <li><b>Adresas:</b> Lauko g. 19. Vilnius</li>
                                        <li><b>IV veiklos pazymejimo numeris:</b> 12412421442</li>
                                    </ul>
                                </div>
                                <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8168.643163407764!2d25.28663516018156!3d54.6984015708314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96a9e18ad90f%3A0x24f9751bf4c2e79e!2sKalvariju%20Market!5e1!3m2!1sen!2slt!4v1728916649015!5m2!1sen!2slt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl"></iframe>
                                </div>
                            </div>

    </div>
</div>
                            <div class="flex justify-center mb-8">
                                <a href="/" class="text-slate-400 hover:text-slate-600">Privatumas, taisykles, sausaineliai</a>
                            </div>
@livewireScripts
</body>
</html>

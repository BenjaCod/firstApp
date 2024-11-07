<div class="mt-10 mb-20">
@if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @isset($name)
    <div class="gird grid-cols-2 md:grid-cols-1 gap-0">
    <h1 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-center">Jūsų svetainė veikia adresu:</h1>
    <h1 class="text-xl mb-10 md:text-2xl text-indigo-500 font-semibold text-center">mususvetaine.lt/c/{{$name}}</h1>
    </div>
    @else
    <h1 class="my-10 text-2xl text-gray-700">Užpildykite informaciją ir paspauskite "išsaugoti"</h1>
    @endisset
    <div>
        <form wire:submit.prevent="save">
        @csrf

        <div class="grid gap-6 mb-6 md:grid-cols-2">

            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jūsų įmonės/veiklos pavadinimas</label>
                <input wire:model="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Pavadinimas" required />
            </div>

            <div>
                <label for="company_headline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Antraštė</label>
                <input wire:model="company_headline" type="text" id="company_headline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Jūsų svetainės antraštė" />
            </div>

            <div>
                <label for="company_short_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trumpas veiklos aprašymas</label>
                <textarea wire:model="company_short_description" rows="1" name="company_short_description" type="text" id="company_short_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Vieno sakinio jūsų veiklos aprašymas"></textarea>
            </div>

            <div>
                <label for="company_followers" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kiek sekėjų turite?</label>
                <input wire:model="company_followers" type="number" id="company_followers" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Įveskite tikslų Instagram sekėjų skaičių" />
            </div>

            <div>
                <label for="company_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono numeris susisiekimui</label>
                <input wire:model="company_phone" type="number" id="company_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="+37060000000" />
            </div>

            <div>
                <label for="company_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elektroninis paštas susisiekimui</label>
                <input wire:model="company_email" type="text" id="company_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="jusu@pastas.lt" />
            </div>

            <div>
                <label for="company_long_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ilgas veiklos aprašymas, paslaugos, produktai ir kita informacija</label>
                <textarea wire:model="company_long_desc" type="text" rows="1" name="company_long_desc" id="company_long_desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Aprašykite savo veiklą. Ką jūsų darote, siūlote, kodėl Jus verta pasirinkti?"></textarea>
            </div>

            <div>
            <label for="company_fb_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nuoroda į Jūsų Facebook puslapį</label>
            <input wire:model="company_fb_link" type="text" id="company_fb_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Jeigu neturite - palikite tuščią." />
            </div>

            <div>
            <label for="company_insta_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nuoroda į Jūsų Instagram puslapį</label>
            <input wire:model="company_insta_link" type="text" id="company_insta_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Jeigu neturite - palikite tuščią." />
            </div>

            <div>
            <label for="company_linkedin_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nuoroda į Jūsų Linkedin puslapį</label>
            <input wire:model="company_linkedin_link" type="text" id="company_linkedin_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Jeigu neturite - palikite tuščią." />
            </div>

            <div>
            <label for="company_long_desc_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ilgojo veiklos aprašymo pavadinimas</label>
            <input wire:model="company_long_desc_name" type="text" id="company_long_desc_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Pavyzdžiui: Apie mus / Ką mes veikiame? / Mūsų istorija / ir kiti." />
            </div>

            <div>
            <label for="company_requisites_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jūsų rekvizitų pavadinimas</label>
            <input wire:model="company_requisites_name" type="text" id="company_requisites_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Pavyzdžiui: Kontaktai / Rekvizitai / Susisiekti / ir kiti." />
            </div>

            <div>
            <label for="company_requisites_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Papildoma informacija apie jūsų veiklą</label>
            <input wire:model="company_requisites_desc" type="text" id="company_requisites_desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Informacija apie jūsų teikiamas paslaugas, kokybę, vietą, ir kt." />
            </div>

            <div>
            <label for="company_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Įmonės kodas / Pavadinimas</label>
            <input wire:model="company_code" type="number" id="company_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Jeigu neturite - palikite tuščią." />
            </div>

            <div>
            <label for="company_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Veiklos adresas</label>
            <input wire:model="company_address" type="text" id="company_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Pilnas veiklos adresas (neprivaloma)" />
            </div>

            <div>
            <label for="company_iv_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IV pažymėjimo numeris</label>
            <input wire:model="company_iv_desc" type="number" id="company_iv_desc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" placeholder="Individualios veilkos pažymėjimo numeris (neprivaloma)" />
            </div>

            </div>

            <div class="grid gap-6 mb-6 md:grid-cols-1">
            
            <div>
            <label for="company_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Įkelkite galerijos nuotraukas (senos bus panaikintos)</label>
            <input multiple wire:model="company_photos" type="file" id="company_image" accept="image/png, image/jpeg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" />
            </div>

                <!-- Display Existing Photo galery -->

            <div class="mt-4">
                <h4 class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Galerijos nuotraukos</h4>
                <div class="grid grid-cols-2 gap-4 md:grid-cols-8">
                    @foreach($existingPhotos as $photo)
                        <div class="border rounded overflow-hidden">
                            <img src="{{ Storage::url($photo) }}" alt="Company Photo" class="w-full h-32 object-cover">
                            <button wire:click="deletePhoto('{{ $photo }}')" class="p-1 ml-1 text-red-400 font-semibold">Ištrinti</button>
                        </div>
                        
                    @endforeach
                </div>
            </div>

            <div>
            <label for="company_main_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Įkelkite pagrindinę nuotrauką (logotipą)</label>
            <input wire:model="company_main_photo" type="file" id="company_main_image" accept="image/png, image/jpeg" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500" />
            </div>       
            <br>
            <button 
            wire:loading.attr="disabled" 
            type="save" 
            class="text-white mb-20 bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-500 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800"
        >
            <span wire:loading.remove>
                Išsaugoti
            </span>
            <span wire:loading>
                Palaukite...
            </span>
        </button>
        </div>

        </form>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
        </div>


<!-- WEBSITE VIEW -->


<!-- END OF WEBSITE VIEW -->

</div>

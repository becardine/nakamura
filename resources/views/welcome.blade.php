<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="main-hero py-32 mx-auto -mt-24 text-left bg-center bg-no-repeat bg-contain md:max-w-none md:text-center"
        style="background-image: url('{{ asset('images/banner-1.jpg') }}')">
    </div>
    <!-- End Main Hero Content -->
    <section class="section-about px-2 py-32 bg-center bg-no-repeat bg-contain md:max-w-none md:text-center"
        style="background-image: url('{{ asset('images/session-about.jpg') }}')">
        <div class="items-center max-w-6xl px-8 mx-auto xl:px-5 sm:flex sm:flex-wrap">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">

                        <div class="relative flex">

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 justify-end space-y-4">
                    <h1 class="text-red-700 text-4xl text-end font-openJapan">Our History</h1>
                    <p class="text-white text-end">
                        With the arrival of Japanese immigrants more than a century ago, new habits of a new Japanese culture and cuisine came with them. Dishes and items from the East were integrated with food from the West and a diverse diet emerged.
                    </p>
                    <br>
                    <p class="text-white text-end">
                        Here at <span class="text-red-700">Nakaruma</span>, we create dishes with great care and with a lot of flavor. Getting the best of Japanese cuisine with indisputable quality. In our spaces you have pleasant moments, a cozy atmosphere, in addition to, of course, the best service and freshness of food.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-menus bg-center bg-no-repeat bg-contain md:max-w-none md:text-center"
    style="background-image: url('{{ asset('images/session-menus.jpg') }}')">
        <div class="text-center">
            <h3 class="text-red-700 text-2xl font-openJapan">Our Menu</h3>
            <h2 class="text-white text-3xl font-bold">
                TODAY'S SPECIALITY</h2>
        </div>
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-y-6">

                @foreach ($specials->menus as $menu)
                    <div class="bg-slate-800 max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                        <img class="w-full h-48 rounded-t" src="{{ Storage::url($menu->image) }}" alt="Image" />
                        <div class="px-4 py-4">
                            <h4 class="mb-3 text-xl font-semibold tracking-tight text-white uppercase text-start">
                                {{ $menu->name }}</h4>
                            <p class="leading-normal text-gray-600 text-start">{{ $menu->description }}</p>
                        </div>
                        <div class="flex items-center justify-between p-4">
                            <span class="text-xl text-red-700 font-semibold">R$ {{ $menu->price }}</span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="pt-4 pb-12">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold text-red-700 font-openJapan">
                Food Gallery</h2>
            <p class="text-white text-xl">
                Some of the photos we love most
            </p>
        </div>
        <div class="container grid gap-4 mx-auto lg:grid-cols-3 md:grid-cols-3">
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTF8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="image" class="object-cover w-full h-80">
            </div>
            <div class="w-full rounded">
                <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="image" class="object-cover w-full h-80">
            </div>
        </div>
    </section>

    <section class="pt-4 pb-32">
        <div class="my-16 text-center">
            <h2 class="text-4xl text-red-700 font-openJapan">
                Testimonial </h2>
            <p class="text-xl text-white">
                A little about what customers say about us
            </p>
        </div>
        <div class="grid justify-center justify-items-center gap-1 lg:grid-cols-3 grid-cols-3 mx-10">
            <div class="max-w-md p-4 bg-slate-800 rounded-lg shadow-lg md:mt-16 flex flex-col justify-around">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-red-700 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-white">
                        Chef's match
                    </h2>
                    <p class="mt-2 text-gray-600">
                        One of the best restaurants I have had the pleasure of visiting. Really incredible! From service to dishes. Congratulations to the team!
                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-red-700 disabled">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-slate-800 rounded-lg shadow-lg md:mt-16 flex flex-col justify-around">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-red-700 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-white">Rodizio Premium
                    </h2>
                    <p class="mt-2 text-gray-600">
                        I've been a customer for a few years now. And it's amazing how quality always surprises me. There is no other like it!
                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-red-700">Katy Perry</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-slate-800 rounded-lg shadow-lg md:mt-16 flex flex-col justify-around">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-red-700 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-white">
                        Special boat
                    </h2>
                    <p class="mt-2 text-gray-600">
                        It was an incredible coincidence to visit this restaurant. Service notes thousand. And the quality of the products is unquestionable.
                    </p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-red-700">Demi Lovato</a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>

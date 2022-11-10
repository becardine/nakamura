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
                    <h1 class="text-red-700 text-5xl text-end font-bold">Nossa História</h1>
                    <p class="text-white text-end">
                        Com a vinda dos imigrantes japoneses há mais de um século, vieram com eles novos hábitos de uma
                        nova cultura e da culinária japonesa. Os pratos e itens vindos do Oriente integraram-se com a
                        comida do Ocidente e surgiu uma diversificada alimentação.
                    </p>
                    <br>
                    <p class="text-white text-end">
                        Aqui no <span class="text-red-700">Nakaruma</span>, criamos pratos com todo cuidado e com muito
                        sabor. Conseguindo entregar o melhor da culinária japonesa com qualidade indiscutível.
                        Em nossos espaços você tem momentos agradáveis, um ambiente aconchegante, além é claro, do
                        melhor atendimento e frescor dos alimentos.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-menus bg-center bg-no-repeat bg-contain md:max-w-none md:text-center"
    style="background-image: url('{{ asset('images/session-menus.jpg') }}')">
        <div class="text-center">
            <h3 class="text-red-700 text-2xl font-bold">Our Menu</h3>
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
    <section class="pt-4 pb-12 bg-gray-50">
        <div class="my-8 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Food Gallery</h2>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
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

    <section class="pt-4 pb-12 bg-gray-800">
        <div class="my-16 text-center">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                Testimonial </h2>
            <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
        </div>
        <div class="grid gap-2 lg:grid-cols-3">
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores
                        deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis
                        pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores
                        deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis
                        pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-center -mt-16 md:justify-end">
                    <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
                        src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
                </div>
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
                    <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores
                        deserunt
                        ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis
                        pariatur
                        minus consequuntur!</p>
                </div>
                <div class="flex justify-end mt-4">
                    <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>

<div class="w-full grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-8 my-7">

    <div class="mt-5 md:mt-0 md:col-span-2">
        @if ($errors->isNotEmpty())
            <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <strong class="font-bold">Oops!</strong>
                <span class="block sm:inline">There are some errors with your submission.</span>
            </div>
        @endif
        @if ($success)
            <div class="text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ $success }}</span>
                <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif
        <form wire:submit.prevent="submit">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    @if ($currentPage === 1)
                        <div class="flex flex-col">
                            <div class="w-full py-2">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                    name</label>
                                <input wire:model.lazy="firstName" type="text" name="first_name" id="first_name"
                                    autocomplete="given-name"
                                    class="mt-1 py-1 px-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full py-2">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input wire:model.lazy="lastName" type="text" name="last_name" id="last_name"
                                    autocomplete="family-name"
                                    class="mt-1 py-1 px-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('lastName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full py-2">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input wire:model.lazy="email" type="text" name="email_address" id="email_address"
                                    autocomplete="email"
                                    class="mt-1 py-1 px-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                    @elseif ($currentPage === 2)
                        <div class="flex flex-col">
                            <div class="w-full py-2">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <input wire:model.lazy="password" type="password" name="password" id="password"
                                    class="mt-1 py-1 px-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full py-2">
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700">Confirm
                                    Password</label>
                                <input wire:model.lazy="confirmPassword" type="password" name="password_confirmation"
                                    id="password_confirmation"
                                    class="mt-1 py-1 px-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('confirmPassword') <span
                                        class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                    @elseif ($currentPage === 3)
                    <div class="flex flex-col">
                        <!-- <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-wrap -m-4">


                                <div class="p-4 md:w-1/3 text-center">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                            src="{{ asset('img/test-v-card.png') }}" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $name = "Test
                                                template" }} </h1>
                                            <div class="flex items-center flex-wrap justify-center">
                                                <button wire:click="selectTemplate" type="button"
                                                    class="btn btn-primary">Select template</button>
                                            </div>

                                
                                      
                                        </div>
                                    </div>
                                </div>


                                <div class="p-4 md:w-1/3 text-center">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                            src="{{ asset('img/test-v-card.png') }}" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                                                Catalyzer</h1>
                                            <div class="flex items-center flex-wrap justify-center">
                                                <button class="btn btn-primary"><a>Select template</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="p-4 md:w-1/3 text-center">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                            src="{{ asset('img/test-v-card.png') }}" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                                                Catalyzer</h1>
                                            <div class="flex items-center flex-wrap justify-center">
                                                <button class="btn btn-primary"><a>Select template</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="p-4 md:w-1/3 text-center">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                            src="{{ asset('img/test-v-card.png') }}" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                                                Catalyzer</h1>
                                            <div class="flex items-center flex-wrap justify-center">
                                                <button class="btn btn-primary"><a>Select template</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-4 md:w-1/3 text-center">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                            src="{{ asset('img/test-v-card.png') }}" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                                                Catalyzer</h1>
                                            <div class="flex items-center flex-wrap justify-center">
                                                <button class="btn btn-primary"><a>Select template</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-4 md:w-1/3 text-center">
                                    <div
                                        class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                            src="{{ asset('img/test-v-card.png') }}" alt="blog">
                                        <div class="p-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                                                Catalyzer</h1>
                                            <div class="flex items-center flex-wrap justify-center">
                                                <button class="btn btn-primary"><a>Select template</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div> -->







                            
        <!-- start test section -->


        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">

                    
                    @foreach ($templates as $template)
                        

                    <div class="p-4 md:w-1/3 text-center">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-96 md:h-36 w-full object-cover object-center"
                                src="{{ asset('img/test-v-card.png') }}" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    CATEGORY</h2>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $template }} </h1>
                                    <div class="flex items-center flex-wrap justify-center">
                                        <button wire:click="selectTemplate({{ $template }})" type="button"
                                            class="btn btn-primary">Select template</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                        </div>
                        {{-- @error('test2') <span
                                    class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror --}}

                    </div>



                    @endif
        </section>


                </div>
                <div class="flex items-center justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                    @if ($currentPage === 1)
                        <div></div>
                    @else
                        <button wire:click="goToPreviousPage" type="button"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                            Back
                        </button>
                    @endif
                    @if ($currentPage === count($pages))
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    @else
                        <button wire:click="goToNextPage" type="button"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Next
                        </button>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

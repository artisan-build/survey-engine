<div>

    <div class="flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                {{ $title }}
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                        @error('email') <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p> @enderror
                    </div>
                    @if (!$anonymous)
                    <div class="mt-6">
                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                            Name
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input wire:model="name" id="name" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" wire:model="$respondentIdentificationOptIn" class="form-checkbox h-4 w-4 text-green-600 transition duration-150 ease-in-out">
                            <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                                Store My Name and Email With My Results
                            </label>
                        </div>
                    </div>
                    @endif

                    <div class="mt-6">
          <span class="block w-full rounded-md shadow-sm">
            <button wire:click="answer('email', 'email')" type="button" wire:click="" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 transition duration-150 ease-in-out">
              Start The Survey
            </button>
          </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- v::name_email -->
</div>

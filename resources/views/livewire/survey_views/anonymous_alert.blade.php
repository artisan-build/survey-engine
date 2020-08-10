<div class="rounded-md bg-green-50 p-4 lg:mb-6">
    <div class="flex">
        <div class="ml-3">
            <h3 class="text-sm leading-5 font-medium text-green-800">
                Your Responses Are Anonymous
                <button wire:click="$set('showAnonymous', true)" class="px-2 py-1.5 rounded-md text-sm leading-5 font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150 ml-8 lg:hidden">
                    Learn More
                </button>
            </h3>
            <div class="mt-2 text-sm leading-5 text-green-700">
                <p class="hidden lg:block">
                    We will not store your email address with your results. We only use this information to make sure you haven't already filled out this survey.
                    <button wire:click="$set('showAnonymous', true)" class="px-2 py-1.5 rounded-md text-sm leading-5 font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150">
                        Learn More
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

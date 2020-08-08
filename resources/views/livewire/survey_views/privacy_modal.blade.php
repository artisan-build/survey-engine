<div class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center">

    <div class="fixed inset-0 transition-opacity">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>


    <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-xl sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div>
            <div class="mt-3 text-center sm:mt-5">
                <h3 class="text-lg leading-6 font-medium text-gray-900 hidden lg:block" id="modal-headline">
                    Your Privacy Is Important
                </h3>
                <div class="mt-6">
                    <p class="text-sm leading-5 text-gray-700">
                        We want you to feel confident answering all our questions honestly so we do not store your personal information with your survey results. When you finish the survey, we store a receipt containing the id of this survey and a hash of your email address and no other identifying information. This is only used to ensure that everyone only fills out the survey one time.
                    </p>
                    <p class="text-sm leading-5 text-gray-700 mt-6">
                        This survey administration site is open source. To see how we keep your responses anonymous, you can check out <a class="text-blue-500 underline" target="_blank" href="https://github.com/artisan-build/survey-engine">the repo on GitHub</a>.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-6">
      <span class="flex w-full rounded-md shadow-sm">
        <button wire:click="$set('showAnonymous', false)" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
          Got It!
        </button>
      </span>
        </div>
    </div>
</div>

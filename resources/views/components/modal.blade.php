
  <!-- Main modal -->
  <div id="{{ $service->slug }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-2xl shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-5 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Fill out the form below
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="space-y-2">
                  <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="flex flex-col w-full space-y-5 bg-slate-200/[.03] rounded-2xl p-5">
                        <div>
                            <label for="name" class="text-slate-900 mb-1 block">Name</label>
                            <input type="text" id="name" name="name" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                        </div>
                        <div>
                            <label for="email" class="text-slate-900 mb-1 block">Email</label>
                            <input type="email" id="email" name="email" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                        </div>
                        <div>
                            <label for="subject" class="text-slate-900 mb-1 block">Subject</label>
                            <input type="text" id="subject" name="subject" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                        </div>
                        <div>
                            <label for="message" class="text-slate-900 mb-1 block">Message</label>
                            <textarea id="message" name="message" class="text-slate-900 h-40 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0"></textarea>
                        </div>
                        <div>
                            <x-button>Submit</x-button>
                        </div>
                    </div>
                  </form>
              </div>
             
          </div>
      </div>
  </div>
  
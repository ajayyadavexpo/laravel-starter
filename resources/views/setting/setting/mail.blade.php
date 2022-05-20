<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <p class="text-2xl mb-4 font-bold text-gray-800">Mail Setting</p>
                <form method="POST" action="{{ route('admin.mail.update',$mail->id)}}">
                  @csrf
                  @method('put')

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Mail Transport
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_transport"
                        type="text"
                        name="mail_transport"
                        value="{{ old('mail_transport',$mail->mail_transport) }}"
                      >
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                        Mail Host
                      </label>
                      <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="mail_host"
                        type="text"
                        name="mail_host"
                        value="{{ old('mail_host',$mail->mail_host) }}"
                      >
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Mail Port
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_port"
                        type="text"
                        name="mail_port"
                        value="{{ old('mail_port',$mail->mail_port) }}"
                      >
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                        Mail username
                      </label>
                      <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="mail_username"
                        type="text"
                        name="mail_username"
                        value="{{ old('mail_username',$mail->mail_username) }}"
                      >
                    </div>
                </div>


                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Mail Password
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_password"
                        type="text"
                        name="mail_password"
                        value="{{ old('mail_password',$mail->mail_password) }}"
                      >
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
                        Mail Encryption
                      </label>
                      <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="mail_encryption"
                        type="text"
                        name="mail_encryption"
                        value="{{ old('mail_encryption',$mail->mail_encryption) }}"
                      >
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
                        Mail From
                      </label>
                      <input class="appearance-none block w-full text-gray-700 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  id="mail_from"
                        type="text"
                        name="mail_from"
                        value="{{ old('mail_from',$mail->mail_from) }}"
                      >
                    </div>
                </div>

                <div class="text-center mt-16">
                  <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Update</button>
                </div>
              </div>


            </div>
        </main>
    </div>
</div>
</x-app-layout>

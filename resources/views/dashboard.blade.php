<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                @role('admin')
                <h3 class="text-gray-700 text-3xl font-medium">Admin Dashboard</h3>                
                @endrole

                @role('writer')
                <h3 class="text-gray-700 text-3xl font-medium">writer Dashboard</h3>                
                @endrole
  
            </div>
        </main>
    </div>
</div>
</x-app-layout>

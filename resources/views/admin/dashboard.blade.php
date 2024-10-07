<x-admin.layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-base-900">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-base-900">
                
                <h2>{{ __('Google Searchable ID Setting') }}</h2>

                <div id="message"></div>

                <form id="settings-form">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="google_search_id" id="google_search_id" 
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" 
                                value="{{\App\Models\Setting::where('user_id', auth()->id())->value('google_search_id') ?? ''}}">
                    </div>

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold rounded-md">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- AJAX Script -->
    <script>
        document.getElementById('settings-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let googleSearchId = document.getElementById('google_search_id').value;
            let token = document.querySelector('input[name=_token]').value;

            fetch('{{ route("settings.store") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({
                    google_search_id: googleSearchId,
                    _token: token
                })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('message').innerHTML = '<div class="text-green-500">' + data.message + '</div>';
            })
            .catch(error => {
                document.getElementById('message').innerHTML = '<div class="text-red-500">An error occurred.</div>';
            });
        });
    </script>

</x-admin.layout>



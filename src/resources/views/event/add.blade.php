<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Vytvoriť podujatie
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-std-form>
                <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="name" value="Názov podujatia" />
                        <x-std-text-input name="name" type="text" value="{{ old('name') }}" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" value="Popis" />
                        <x-std-textarea name="description" required>{{ old('description') }}</x-std-textarea>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="date" value="Dátum" />
                        <x-std-text-input name="date" type="date" value="{{ old('date') }}" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="organizer" value="Organizátor (nepovinné)" />
                        <x-std-text-input name="organizer" type="text" value="{{ old('organizer') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="location_name" value="Miesto" />
                        <x-std-text-input name="location_name" type="text" value="{{ old('location_name') }}" required />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="location_address" value="Adresa (nepovinné)" />
                        <x-std-text-input name="location_address" type="text" value="{{ old('location_address') }}"/>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="image" value="Fotografia" />
                        <input id="picker" name="image" type="file" required />
                        <img id="preview" class="my-2 object-cover relative mx-auto rounded-lg overflow-hidden shadow-lg">
                    </div>

                    <div class="flex justify-end mt-8">
                        <x-primary-button>{{ __('Pridať') }}</x-primary-button>
                    </div>
                </form>
            </x-std-form>

            <script>
                const filePicker = document.getElementById("picker");
                const imgPreview = document.getElementById("preview");

                filePicker.addEventListener("change", function () {
                    const files = filePicker.files[0];
                    if (files) {
                        const fileReader = new FileReader();
                        fileReader.readAsDataURL(files);
                        fileReader.addEventListener("load", function () {
                            imgPreview.src = this.result;
                        });
                    }
                });
            </script>
        </div>
    </div>
</x-app-layout>
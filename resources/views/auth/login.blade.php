<x-layout>
    <x-page-heading>Login</x-page-heading>


    <x-forms.form action="/login" method="POST" enctype="multipart/form-data">
        <x-forms.input label="Email" name="email" type="text" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.button>Login</x-forms.button>
    </x-forms.form>

</x-layout>

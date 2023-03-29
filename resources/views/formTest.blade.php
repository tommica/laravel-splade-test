<x-layout>
    <x-slot name="header">
        {{ __('Docs') }}
    </x-slot>

    <x-panel>
        <h1 class="text-2xl">Hi you!</h1>
        <x-splade-form action="{{route('formTestPost')}}" method="POST">
            <input v-model="form.name" type="text" placeholder="Name" />
            <input v-model="form.email" type="email" placeholder="Email" />
            <button type="submit">Send</button>
        </x-splade-form>

        <div class="mt-3 border-s-orange-500">
            <h3>Submitted data</h3>
            <div>Name: {{$name}}</div>
            <div>Email: {{$email}}</div>
        </div>
    </x-panel>
</x-layout>
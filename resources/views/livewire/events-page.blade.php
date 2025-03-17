<div class="container py-6">
    <livewire:components.sender-component />
    <livewire:components.reciver-component />

    <div class="card card-body mt-4">
        <h5 class="card-title text-center text-gradient from-primary to-pink">Parent Component</h5>
        <div class="text-lg text-center">Clicks: {{ $clicks }}</div>
        <div class="text-lg text-center mt-4">Name: {{ $name }}</div>
    </div>

</div>

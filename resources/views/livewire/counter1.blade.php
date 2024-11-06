<div>
    {{-- The whole world belongs to you. --}}
    <h1>Counter 1</h1>

    <div x-data="counter1">
        <button @click="count++">Count: <span x-text="count"></span></button>
    </div>

    <a wire:navigate href="/">Counter overview</button>
</div>

<script>
    document.addEventListener(typeof Alpine === 'undefined' ? 'alpine:init' : 'livewire:navigated', function() {
        console.log(Alpine);

        Alpine.data('counter1', () => ({
            count: 0,
        }));
    }, { once: true });
</script>


<div class="card offset col-6">
    <div class="card-header">
        Counter App
    </div>
    <div class="card-body">
        <h1 class="text-primary">Your Count is: {{ $count }}</h1>
        <button wire:click='increment' class="btn btn-secondary">incrementing</button>
        <button wire:click='decrement' class="btn btn-secondary">decrementing</button>
    </div>
</div>


<div class="">
    <label for="perPage">Items per page:</label>
    <select wire:model="perPage" wire:change="$refresh" id="perPage">
        @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>

    <!-- Search input -->
    <div>
        <input type="text" wire:model.debounce.300ms="search" placeholder="Search items...">
    </div>

    <!-- Items list -->
    <div>
        @foreach($items as $item)
            <div>{{ $item->name }}</div>
        @endforeach

        <!-- No items message -->
        @if($items->isEmpty())
            <div>No items found.</div>
        @endif
    </div>

    <!-- Sorting links -->
    <div>
        <span>Sort by:</span>
        <button wire:click="sortBy('name')" class="{{ $sortField === 'name' ? 'font-bold' : '' }}">
            Name
            @if($sortField === 'name')
                {{ $sortDirection === 'asc' ? '▲' : '▼' }}
            @endif
        </button>

        <!-- Pagination links -->
        {{ $items->links() }}
    </div>
</div>

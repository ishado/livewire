<div>
    <input type="text" wire:model.live="search" placeholder="Search posts..." class="form-control">

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</div>

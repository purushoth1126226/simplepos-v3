<div class="{{ $col }} mx-auto mb-1">
    <nav class="nav nav-pills flex-column flex-sm-row shadow-sm rounded-pill bg-white">

        <a wire:navigate.hover href="{{ route('adminfaq') }}"
            class="flex-sm-fill text-sm-center nav-link rounded-pill {{ $name == 'faq' ? 'active' : '' }}">FAQ</a>

        <a wire:navigate.hover href="{{ route('adminsupport') }}"
            class="flex-sm-fill text-sm-center nav-link rounded-pill {{ $name == 'support' ? 'active' : '' }}"
            aria-current="page">Support</a>

    </nav>
</div>

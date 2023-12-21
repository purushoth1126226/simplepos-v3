<div class="{{ $col }} mx-auto mb-1">
    <nav class="nav nav-pills flex-column flex-sm-row shadow-sm rounded-pill bg-white">
        <a wire:navigate
            class="flex-sm-fill text-sm-center nav-link rounded-pill {{ $name == 'salesreport' ? 'active' : '' }}"
            aria-current="page" href="{{ route('salesreport') }}">Sales Reports</a>

        <a wire:navigate
            class="flex-sm-fill text-sm-center nav-link rounded-pill {{ $name == 'saleitemsreport' ? 'active' : '' }}"
            href="{{ route('saleitemsreport') }}">Saleitems Reports</a>

        <a wire:navigate
            class="flex-sm-fill text-sm-center nav-link rounded-pill {{ $name == 'amountcdreport' ? 'active' : '' }}"
            href="{{ route('amountcdreport') }}">Amountcd Reports</a>

    </nav>
</div>

<div>
    <x-admin.layouts.admintableindex>

        <x-slot name="title">
            PRODUCT CATEGORY
        </x-slot>

        <x-slot name="action">
            <a wire:navigate class="btn btn-sm btn-secondary shadow float-end mx-1" href="{{ route('adminsettings') }}"
                role="button">Back</a>
            <button wire:click="create" type="button" class="btn btn-sm btn-primary shadow float-end mx-1"
                data-bs-toggle="modal" data-bs-target="#createoreditModal">
                Create
            </button>
        </x-slot>

        <x-slot name="tableheader">
            @include('helper.tablehelper.tableheader', [
                'name' => 'S.NO',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'UNIQID',
                'type' => 'sortby',
                'sortname' => 'uniqid',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'PRODUCT CATEGORY NAME',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'ACTIVE',
                'type' => 'normal',
                'sortname' => '',
            ])
            @include('helper.tablehelper.tableheader', [
                'name' => 'VIEW/EDIT',
                'type' => 'normal',
                'sortname' => '',
            ])
        </x-slot>

        <x-slot name="tablebody">
            @foreach ($this->productcategory as $index => $eachproductcategory)
                <tr>
                    <td>{{ $this->productcategory->firstItem() + $index }}</td>
                    <td>{{ $eachproductcategory->uniqid }}</td>
                    <td class="text-start">{{ $eachproductcategory->name }}</td>
                    <td>{!! $eachproductcategory->active
                        ? '<span class="badge bg-success fs-6">Yes</span>'
                        : '<span class="badge bg-danger fs-6">No</span>' !!}
                    </td>
                    <td>
                        <button wire:click="show({{ $eachproductcategory->id }})" class="btn btn-sm btn-success"><i
                                class="bi bi-eye-fill"></i></button>

                        <button wire:click="edit({{ $eachproductcategory->id }})" class="btn btn-sm btn-primary"><i
                                class="bi bi-pencil-fill"></i></button>
                    </td>
                </tr>
            @endforeach
        </x-slot>

        <x-slot name="tablerecordtotal">
            Showing {{ $this->productcategory->firstItem() }} to {{ $this->productcategory->lastItem() }} out of
            {{ $this->productcategory->total() }}
            items
        </x-slot>

        <x-slot name="pagination">
            {{ $this->productcategory->links() }}
        </x-slot>

    </x-admin.layouts.admintableindex>

    <!-- Create or Edit Modal -->
    @include('livewire.admin.settings.mastersettings.productcategory.createoredit')

    <!-- Show Modal -->
    @include('livewire.admin.settings.mastersettings.productcategory.show')

    <!-- Modal Action Helper -->
    @include('livewire.helper.livewiremodalhelper')

</div>

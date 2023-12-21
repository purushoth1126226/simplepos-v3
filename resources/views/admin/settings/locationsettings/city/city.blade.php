@extends('components.admin.layouts.adminapp')
@section('headSection')
@endsection

@section('adminnavbar')
    <x-admin.layouts.adminnavbar modulename="{{ __('LOCATION SETTINGS') }}" />
@endsection

@section('main-content')
    <x-admin.layouts.adminbreadcrumb>
        <li class="breadcrumb-item"><a wire:navigate class="text-decoration-none"
                href="{{ route('adminsettings') }}">{{ __('Settings') }}</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('CITY') }}</li>
    </x-admin.layouts.adminbreadcrumb>


    @include('admin.settings.locationsettings.partial', ['name' => 'city', 'col' => 'col-sm-6'])



    @livewire('admin.settings.locationsettings.city.citylivewire')
@endsection
@section('footerSection')
    @include('helper.sidenavhelper.sidenavactive', [
        'type' => 1,
        'nameone' => '#adminsettings_sidenav',
    ])
@endsection

@extends('layouts.app')

@section('content')
  <x-common.page-breadcrumb pageTitle="Menu" />
  {{-- @include('menu.components.menuTable') --}}
  <x-menu.menuTable :menus="$menus"/>
 
@endsection

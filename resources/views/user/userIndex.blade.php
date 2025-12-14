@extends('layouts.app')

@section('content')
  {{-- <div class="grid grid-cols-12 gap-4 md:gap-6">
    <div class="col-span-12 space-y-6 xl:col-span-12">
          @include('user.userTable')
    </div>
  </div> --}}

   <x-common.page-breadcrumb pageTitle="User" />
    {{-- <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] lg:p-6">
        <h3 class="mb-5 text-lg font-semibold text-gray-800 dark:text-white/90 lg:mb-7">Profile</h3>
    </div> --}}
      <x-user.userTable :users="$users"/>
@endsection

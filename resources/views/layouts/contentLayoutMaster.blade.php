{{-- pageConfigs variable pass to Helper's updatePageConfig function to update page configuration --}}
@isset($pageConfigs)
    {!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
// confiData variable layoutClasses array in Helper.php file.
$configData = Helper::applClasses();
@endphp

<html class="loading" lang="@if (session()->has('locale')) {{ session()->get('locale') }}@else{{ $configData['defaultLanguage'] }} @endif"
data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">
<!-- BEGIN: Head-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | MyCollection</title>
    <link rel="apple-touch-icon" href="../../images/favicon/coin-collecting.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon/coin-collecting.png">

    {{-- Include core + vendor Styles --}}
    @include('panels.styles')

</head>
<!-- END: Head-->

{{-- @isset(config('custom.custom.mainLayoutType'))
@endisset --}}

@include('layouts.verticalLayoutMaster')

</html>

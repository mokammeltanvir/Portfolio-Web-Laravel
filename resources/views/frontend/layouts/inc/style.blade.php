    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{@$seoSetting->description}}">
    <meta name="keywords" content="{{@$seoSetting->keywords}}">
	<title>{{@$seoSetting->title}}</title>
	<link rel="shortcut icon" type="image/ico" href="{{asset($generalSetting->favicon)}}" />

<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/normalize.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/style-plugin-collection.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/theme.css">
<link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/responsive.css">


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


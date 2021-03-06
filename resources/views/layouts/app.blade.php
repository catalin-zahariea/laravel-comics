<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>

        {{-- --------------------------------------------------------------- --}}
        {{-- | YIELD TITLE TAG | --}}
        {{-- --------------------------------------------------------------- --}}

        @yield('title_tag')

    </title>

    {{-- --------------------------------------------------------------- --}}
    {{-- | LINK CUSTOM CSS | --}}
    {{-- --------------------------------------------------------------- --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- --------------------------------------------------------------- --}}
    {{-- | LINK GOOGLE FONT - ROBOTO / ROBOTO CONDENSED | --}}
    {{-- --------------------------------------------------------------- --}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
    {{-- --------------------------------------------------------------- --}}
    {{-- | LINK FONTAWESOME CDN | --}}
    {{-- --------------------------------------------------------------- --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

{{-- --------------------------------------------------------------- --}}
{{-- | INCLUDE HEADER | --}}
{{-- --------------------------------------------------------------- --}}

@include('partials/header')

{{-- --------------------------------------------------------------- --}}
{{-- | MAIN YIELD | --}}
{{-- --------------------------------------------------------------- --}}

<main>
    @yield('main_content')
</main>

{{-- --------------------------------------------------------------- --}}
{{-- | INCLUDE FOOTER | --}}
{{-- --------------------------------------------------------------- --}}

@include('partials/footer')

</body>
</html>
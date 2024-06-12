<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('/dashboard.partials.header')
    <div class="grid grid-rows-3 grid-flow-col gap-4">
        <div class="row-span-3" >@include('/dashboard.partials.sidebar')</div>
        <div class="col-span-2 ..."></div>
        <div class="row-span-2 col-span-2 ..." style="height: 0vh">@yield('main')</div>
      </div>
    



</body>
</html>
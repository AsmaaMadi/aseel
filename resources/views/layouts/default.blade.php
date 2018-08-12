
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
@include('includes.head')

<body>
@include('includes.header')
@yield('content')

@include('includes.prefooter')
@include('includes.footer')
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
@include('includes.script')
</body>

</html>
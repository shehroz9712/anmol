<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<title>Event Management System </title>
<!-- Google font-->
<link rel="preconnect" href="http://fonts.gstatic.com">
<link
    href="http://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
<link
    href="http://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
    rel="stylesheet">
<link
    href="http://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
<!-- Font Awesome-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/fontawesome.css') }}">
<!-- ico-font-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/icofont.css') }}">
<!-- Themify icon-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/themify.css') }}">
<!-- Flag icon-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/flag-icon.css') }}">
<!-- Feather icon-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/feather-icon.css') }}">
<!-- Plugins.css') }} start-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/chartist.css') }}">
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/owlcarousel.css') }}">
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/prism.css') }}">
<!-- Plugins.css') }} Ends-->
<!-- Bootstrap.css') }}-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- App.css') }}-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/style.css') }}">
<link id="color" rel="stylesheet" href="{{ asset('assets/css/color-2.css') }}" media="screen">
<!-- Responsive.css') }}-->
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/responsive.css') }}">
<link rel="stylesheet" type="text.css" href="{{ asset('assets/css/my_style.css') }}">
<style>
    :root {
        --theme-color: #ff8b38;
        --theme-color-hover: #df630b;
    }

    .card-footer {
        margin-left: auto;
    }

    .theme-color,
    label {
        color: var(--theme-color) !important;
    }


    ul {
        list-style-type: none;
    }

    li {
        display: inline-block;
    }

    input[type="checkbox"][id^="myCheckbox"] {
        display: none;
    }

    label {
        /* border: 1px solid #fff; */
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
    }

    label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        /* border: 1px solid grey; */
        position: absolute;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    label img {
        height: 100px;
        width: 100px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    :checked+label {
        border-color: #ddd;
    }

    :checked+label:before {
        content: "✓" !important;
        background-color: grey;
        transform: scale(1);
    }

    :checked+label img {
        transform: scale(0.9);
        /* box-shadow: 0 0 5px #333; */
        z-index: -1;
    }
</style>

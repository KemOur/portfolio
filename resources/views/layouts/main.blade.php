<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Junior-SANCA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

    </style>

    <style>
        html{
            font-family: 'Muli', sans-serif;
            line-height: 1.15;
        }
        body {
            font-family: 'Muli', sans-serif;
        }

        .nav {
            top: 0;
            background-color: #fff;
        }
        .nav__container {
            width: 80%;
            max-width: 1356px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 56px;
        }

        @media  (min-width: 600px) {
            .nav__container{
                justify-content: space-between;
            }
        }

        .nav__logo{
            text-decoration: none;
            cursor: pointer;
            color: #151516;
            font-weight: 900;
            font-size: 20px;
        }
        a{
            text-decoration: none;
            color: inherit;
            background-color: transparent;
        }

        .logo__link{
            color: black;

        }
        .nav__logo--juju{
            color: #52cffb;
        }

        @media (min-width: 600px){
            .nav__menu {
                display: block;
            }
        }

        @media (max-width: 600px){
            .nav__logo {
                font-size: 15px;
            }
        }
        .nav__menu{
            justify-content: space-between;
        }

        @media (max-width: 600px){
            .nav__menu__item {
                font-size: 14px;
                margin-left: 12px;
            }
        }

        .nav__menu__item {
            font-size: 14px;
            margin-left: 12px;
        }

        .nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            z-index: 10;
            box-shadow: 0 1px 2px rgb(16 16 17 / 2%), 0 3.4px 8px rgb(16 16 17 / 1%), 0 12px 30px rgb(16 16 17 / 0%);
        }

        .nav {
            border-bottom: 1px solid #efefef;
        }

        .page {
            margin-top: 120px;
        }

        .container{
            width: 80%;
            max-width: 1356px;
            margin-left: auto;
            margin-right: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 64px;
        }

        .header__title {
            font-size: 22px;
            color: #151516;
            font-weight: 900;
            margin-bottom: 24px;
            line-height: 28px;
            margin-top: 0;
        }

        h1 {
            margin: .67em 0;
        }

        .header__nav{
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        .header__nav li {
            display: inline-block;
            margin-right: 24px;
            border-bottom: 1px solid #efefef;
        }
        .posts__title {
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            display: inline-block;
            padding-bottom: 2px;
            margin: 0 0 24px;
        }

        .postlist {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .card-img-top{
            height: 180px;
        }
        .footer__divider {
            width: 120px;
            background-color: #efefef;
            display: block;
            height: 1px;
            margin-bottom: 40px;
        }

        .footer__inner {
            font-size: 14px;
            padding: 0 0 48px;
        }

        .footer__inner a {
            border-bottom: 1px solid #efefef;
        }
        .footer__cp {
            font-size: 10px!important;
            margin-top: 24px!important;
        }
    </style>
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
@yield('scripts')
</body>
</html>

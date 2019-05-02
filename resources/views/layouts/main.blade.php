<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title> Home - Notemask</title>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png"/>
    <link rel="manifest" href="/img/site.webmanifest"/>
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#323453"/>
    <meta name="msapplication-TileColor" content="#da532c"/>
    <meta name="theme-color" content="#323453"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <style type="text/css">@font-face {
            font-weight: 400;
            font-style: normal;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-Regular.woff2")
            format("woff2");
        }
        @font-face {
            font-weight: 400;
            font-style: italic;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-Italic.woff2")
            format("woff2");
        }

        @font-face {
            font-weight: 500;
            font-style: normal;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-Medium.woff2")
            format("woff2");
        }
        @font-face {
            font-weight: 500;
            font-style: italic;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-MediumItalic.woff2")
            format("woff2");
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-Bold.woff2")
            format("woff2");
        }
        @font-face {
            font-weight: 700;
            font-style: italic;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-BoldItalic.woff2")
            format("woff2");
        }

        @font-face {
            font-weight: 900;
            font-style: normal;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-Black.woff2")
            format("woff2");
        }
        @font-face {
            font-weight: 900;
            font-style: italic;
            font-family: "Inter-Loom";

            src: url("https://cdn.useloom.com/assets/fonts/inter/Inter-UI-BlackItalic.woff2")
            format("woff2");
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body class="body">

@yield('content')

<div class="footer">
    <div class="footer-cont">
        <div class="div-block-2"><a class="button w-button" href="{{route('main')}}">Create new note</a>
            <!-- <div class="div-block-3"><a class="link" href="#">Support</a><a class="link" href="#">Privacy</a><a class="link" href="#">About</a><a class="link" href="#">Blog</a></div> -->
        </div>
        <div class="socials"><a class="link-block-2 w-inline-block" href="https://facebook.com"><img src="/img/facebook-icon.svg" alt="Facebook" title="Facebook"/></a><a class="link-block-2 w-inline-block" href="https://twitter.com"><img src="/img/twitter-icon.svg" alt="Twitter" title="Twitter"/></a></div>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" defer="defer"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js" crossorigin="anonymous" defer="defer"></script> -->
<script src="/js/jquery.validate.min.js" crossorigin="anonymous" defer="defer"></script>
<script defer="defer" src="/js/app.min.js"></script>

@yield('js_footer')

</body>
</html>
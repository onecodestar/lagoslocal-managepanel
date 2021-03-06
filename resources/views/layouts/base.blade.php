<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        Lagoslocal for Business
    </title>
    <!-- Metas -->
    @if(env('IS_DEMO'))
        <meta  name="keywords" content="creative tim, updivision, html dashboard, laravel, livewire, alpine.js, html css dashboard laravel, livewire soft ui dashboard laravel, laravel soft ui dashboard laravel pro, livewire soft ui dashboard, laravel soft ui dashboard pro, soft ui admin, livewire dashboard, laravel dashboard pro, laravel admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, soft ui dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, soft ui dashboard, soft ui laravel bootstrap 5 dashboard" />
        <meta  name="description" content="Fullstack tool for building Laravel apps with hundreds of UI components and ready-made CRUDs" />
        <meta  itemprop="name" content="Soft UI Dashboard PRO Laravel by Creative Tim & UPDIVISION" />
        <meta  itemprop="description" content="Fullstack tool for building Laravel apps with hundreds of UI components and ready-made CRUDs" />
        <meta  itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/493/original/opt_sdp_laravel_thumbnail.jpg" />
        <meta  name="twitter:card" content="product" />
        <meta  name="twitter:site" content="@creativetim" />
        <meta  name="twitter:title" content="Soft UI Dashboard PRO Laravel by Creative Tim & UPDIVISION" />
        <meta  name="twitter:description" content="Fullstack tool for building Laravel apps with hundreds of UI components and ready-made CRUDs" />
        <meta  name="twitter:creator" content="@creativetim" />
        <meta  name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/493/original/opt_sdp_laravel_thumbnail.jpg" />
        <meta  property="fb:app_id" content="655968634437471" />
        <meta  property="og:title" content="Soft UI Dashboard PRO Laravel by Creative Tim & UPDIVISION" />
        <meta  property="og:type" content="article" />
        <meta  property="og:url" content="https://www.creative-tim.com/live/soft-ui-dashboard-laravel" />
        <meta  property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/493/original/opt_sdp_laravel_thumbnail.jpg" />
        <meta  property="og:description" content="Fullstack tool for building Laravel apps with hundreds of UI components and ready-made CRUDs" />
        <meta  property="og:site_name" content="Creative Tim" />
        <script>
            (function(a,s,y,n,c,h,i,d,e){
                s.className+=' '+y;h.start=1*new Date;
                h.end=i=function(){
                    s.className=s.className.replace(RegExp(' ?'+y),'')
                    };
                (a[n]=a[n]||[]).hide=h;
                setTimeout(function(){i();
                h.end=null},c);h.timeout=c;
            })(window,document.documentElement,'async-hide','dataLayer',4000,
            {'GTM-K9BGS8K':true});
        </script>
        <script>
            (function(i,s,o,g,r,a,m){
                i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
                a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];
                a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            }
            )(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-46172202-22', 'auto', {allowLinker: true});
            ga('set', 'anonymizeIp', true);
            ga('require', 'GTM-K9BGS8K');
            ga('require', 'displayfeatures');
            ga('require', 'linker');
            ga('linker:autoLink', ["2checkout.com","avangate.com"]);
            </script>
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })
            (window,document,'script','dataLayer','GTM-NKDMSK6');
        </script>
    @endif
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="../../assets/css/leaflet.css" crossorigin="" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard2.css" rel="stylesheet" />
    <!-- Quill -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @livewireStyles
</head>

<body class="g-sidenav-show  {{ (strpos(Request::route()->uri(), 'authentication') === false) or (!in_array(request()->route()->getName(),['forgot-password', 'reset-password'],)) ? 'bg-gray-100' : '' }} ">

    {{ $slot }}

    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/choices.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.0.0"></script>
    @livewireScripts
</body>

</html>

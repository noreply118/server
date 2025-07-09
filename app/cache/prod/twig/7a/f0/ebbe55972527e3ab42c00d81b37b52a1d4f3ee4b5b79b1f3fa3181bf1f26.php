<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_7af0ebbe55972527e3ab42c00d81b37b52a1d4f3ee4b5b79b1f3fa3181bf1f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"googlebot\" content=\"noindex, follow\">
    <meta name=\"YahooSeeker\" content=\"noindex, follow\">
    <meta name=\"msnbot\" content=\"noindex, follow\">
    <meta name='robots' content='noindex, follow' />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Page Not Found</title>
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/ico/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
</head>
<body>";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
<!-- /HEADER -->
    <!-- CONTENT AREA -->
    <div class=\"content-area\">

        <!-- BREADCRUMBS -->
        <section class=\"page-section breadcrumbs text-right\">
            <div class=\"container\">
                <div class=\"page-header\">
                             <h1 class=\"entrytitle\">Sorry! Page Not Found</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li class=\"active\">Sorry! Page Not Found</li>
                </ul>
            </div>
        </section>
<!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class=\"page-section with-sidebar\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <!-- CONTENT -->
                    <div class=\"col-md-12 content\" id=\"content\">

                        <!-- Blog posts -->
                        <article class=\"post-wrap\">
                            <div class=\"post-media\">


                            <div class=\"content-boxes nfind\">
<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/img/not-found-img.jpg"), "html", null, true);
        echo "\" alt=\"Ratetrade\"/>
<div style=\"
    max-width: 219px;
    margin-left: 40%;
\">
    <h1 style=\"
    background: 1px solid;
    border: 2px solid;
    text-align: center;
\" onclick=\"location.href='https://www.ratetrade.ca'\">Home</h1>
</div>
</div></div></article></div></div></div></section>";
        // line 71
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 71,  120 => 59,  84 => 26,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}

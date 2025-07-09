<?php

/* MainRatetradeBundle:Default:thank-you.html.twig */
class __TwigTemplate_fd7f23075f156eddae116685ac8637f433d9b701fa67b5350d0ccee17bd93f99 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"widht=content-width, initial-scale=1\">
        <meta name=\"robots\" content=\"index, follow\">
        <meta name=\"geo.region\" content=\"CA\" />
        <title>Thank You - Ratetrade.ca</title>
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"favicon.ico\" sizes=\"114x114\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"144x144\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"https://www.ratetrade.ca/thank-you\"/>
        <script language=\"JavaScript\" 
                src=\"http://www.iplocationtools.com/iplocationtools.js?key=7b71786a7773756d6a207270\">
        </script>


    <body>";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
  <!-- /HEADER -->
 <!-- CONTENT AREA -->
    <div class=\"content-area\">

        <!-- BREADCRUMBS -->
        <section class=\"page-section breadcrumbs text-right\">
            <div class=\"container\">
                <div class=\"page-header\">
                             <h1 class=\"entrytitle\">Thank You</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li class=\"active\">Thank You</li>
                </ul>
            </div>
        </section>
<!-- /BREADCRUMBS -->
        <section class=\"inner-page\">

            <div class=\"container\">
                <div class=\"row text-content\">
                    <div class=\"col-xs-12 col-sm-7 col-md-12\">
                        <div class=\"left-content\">
                          
                            <div class=\"content-boxes\">
                                <br/>
                                We have received your message and would like to thank you for writing to us. Your inquiry is very important to us, One of our staff members will contact you shortly.
                                <br/><br/>
                                Talk to you soon,<br/>
                                Ratetrade.ca
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br/>

        </section>";
        // line 72
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo " 
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/mainratetrade/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/mainratetrade/js/menu-js.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>

            function validateEmail(email) {
                var re = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
                return re.test(email);
            }

            \$(document).on(\"click\", \".subsc\", function(e) {
                e.preventDefault();
                \$(\"#exampleInputEmail2\").css('border', '1px solid green');

                if (\$(\"#exampleInputEmail2\") == '')
                {
                    \$(\"#exampleInputEmail2\").focus();
                    \$(\"#exampleInputEmail2\").css('border', '1px solid red');
                }
                else if (!validateEmail(\$(\"#exampleInputEmail2\").val()))
                {
                    \$(\"#exampleInputEmail2\").css('border', '1px solid red');
                    \$(\"#exampleInputEmail2\").focus();
                }
                else {
                    \$.ajax({
                        url: '";
        // line 98
        echo $this->env->getExtension('routing')->getPath("email_subscribe");
        echo "',
                        type: \"post\",
                        async: true,
                        data: {'email': \$(\"#exampleInputEmail2\").val(),
                            'name': \"testname\"},
                        success: function(response) {
                            \$(\"#exampleInputEmail2\").val('');
                            alert(response);
                        },
                        error: function(request, error) {
                            // alert('No data found');
                        }
                    });
                }
            });

            \$('.locations').on('click', function() {

                \$('.location-name-box').toggle(500);
            });
            \$('.level1Btn').on('click', function(e) {
                e.preventDefault();
                \$('.level1 ul').toggle(500);
            });
            \$('.level2Btn').on('click', function(e) {
                e.preventDefault();
                \$('.level2 ul').toggle(500);
            });
            \$('.level3Btn').on('click', function(e) {
                e.preventDefault();
                \$('.level3 ul').toggle(500);
            });
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:thank-you.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 98,  134 => 74,  130 => 73,  126 => 72,  85 => 33,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  43 => 17,  39 => 16,  35 => 15,  19 => 1,);
    }
}

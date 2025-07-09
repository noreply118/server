<?php

/* MainRatetradeBundle:Default:ParentGuide.html.twig */
class __TwigTemplate_e843a83f9065fbc4358e70bfa8ab3c8d0dcd13b6c90deda4990e4d7851798ad3 extends Twig_Template
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
        <title>";
        // line 4
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "category"), "html", null, true);
        }
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"widht=content-width, initial-scale=1\">
        <meta name=\"robots\" content=\"index, follow\">
        <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">  
        <meta name=\"geo.region\" content=\"CA\" />
        <meta name=\"title\" content=\"";
        // line 10
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "category"), "html", null, true);
        }
        echo "\">
        <meta name=\"description\" content=\"";
        // line 11
        echo (isset($context["mdesc"]) ? $context["mdesc"] : null);
        echo "\"> 
        <meta name=\"keywords\" content=\"";
        // line 12
        if (((isset($context["mkeywords"]) ? $context["mkeywords"] : null) != "")) {
            echo (isset($context["mkeywords"]) ? $context["mkeywords"] : null);
        } else {
            echo twig_escape_filter($this->env, (isset($context["mkeywords"]) ? $context["mkeywords"] : null), "html", null, true);
        }
        echo "\">
        <meta property=\"og:type\" content=\"article\" />
        <meta name=\"og:title\" content=\"";
        // line 14
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "category"), "html", null, true);
        }
        echo "\">
        <meta name=\"og:description\" content=\"";
        // line 15
        echo (isset($context["mdesc"]) ? $context["mdesc"] : null);
        echo "\">
        <meta property=\"og:site_name\" content=\"Rate Trade\" />
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\" />
        <meta name=\"twitter:card\" content=\"summary\" />
        <meta name=\"twitter:description\" content=\"";
        // line 19
        echo (isset($context["mdesc"]) ? $context["mdesc"] : null);
        echo "\">
        <meta name=\"twitter:title\" content=\"";
        // line 20
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "category"), "html", null, true);
        }
        echo "\">
        <meta name=\"twitter:site\" content=\"@ratetrade\" />
        <meta name=\"twitter:creator\" content=\"@ratetrade\" /> 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"favicon.ico\" sizes=\"114x114\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"144x144\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\"/>
       
<style>
.content-boxes{
  border:none!important;
}
</style>";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
        <!-- /HEADER -->
    <!-- CONTENT AREA -->
    <div class=\"content-area\">

        <!-- BREADCRUMBS -->
        <section class=\"page-section breadcrumbs text-right\">
            <div class=\"container\">
                <div class=\"page-header\">
                             <h1 class=\"entrytitle\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "category"), "html", null, true);
        echo "</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li class=\"active\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "category"), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </section>
<!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class=\"page-section with-sidebar\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <!-- CONTENT -->
                    <div class=\"col-md-9 content\" id=\"content\">

                        <!-- Blog posts -->
                        <article class=\"post-wrap\">
                            <div class=\"post-media\">


                            <div class=\"content-boxes parentinfo\">
                            <div class=\"left-content\">";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationdata"]) ? $context["educationdata"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 86
            echo "
                                   <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "pageUrl"))), "html", null, true);
            echo "\"><div class=\"tab-boxes\"><div class=\"boxinside\"></div>
                                        <div class=\"row\">
                                       
                                                 <img src=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "image"), "html", null, true);
            echo "\" alt=\"No image Avilable\" class=\"img-responsive tabbox-img\"> <h3 class=\"education-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "category"), "html", null, true);
            echo "</h3>
                                                <p>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "parentPageContent"), "html", null, true);
            echo ".....</p>
                                              
                                        </div>
                                    </div></a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                            </div>
                        </div>
<div class=\"clear\"></div>
    </div>
                      </article>  </div>











<!-- SIDEBAR -->
                    <aside class=\"col-md-3 sidebar\" id=\"sidebar\">
                    
                    <!-- widget car categories -->
                    <div class=\"widget shadow car-categories\">
                        <h4 class=\"widget-title\">Mortgage Categories</h4>
                        <div class=\"widget-content\">
                            <ul>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-calculator\"></i> &nbsp; Calculators</a>
                                    <ul class=\"children\">
                                                <li><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                                <li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("chmc_insurance");
        echo "\">Mortgage Insurance</a></li>
                                                <li><a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>";
        // line 139
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "6")) {
            // line 140
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 142
            echo "                                                           <ul class=\"children\">";
        }
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 146
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 147
                echo "                                                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>";
        // line 156
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "18")) {
            // line 157
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 159
            echo "                                                           <ul class=\"children\">";
        }
        // line 162
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 163
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 164
                echo "                                                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>";
        // line 172
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "1")) {
            // line 173
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 175
            echo "                                                           <ul class=\"children\">";
        }
        // line 177
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 178
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 179
                echo "                                                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                                    </ul>
                                </li>
                                

  <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Mortgage Information</a>";
        // line 189
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "47")) {
            // line 190
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 192
            echo "                                                           <ul class=\"children\">";
        }
        // line 194
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 195
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "47")) {
                // line 196
                echo "                                                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                                    </ul>
                                </li>";
        // line 203
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "39")) {
            echo "<li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Auto Insurance</a>";
            // line 206
            if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "39")) {
                // line 207
                echo "                                                        <ul class=\"children active\">";
            } else {
                // line 209
                echo "                                                           <ul class=\"children\">";
            }
            // line 211
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 212
                if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "39")) {
                    // line 213
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "                                    </ul>
                                </li>";
        }
        // line 222
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "44")) {
            echo "<li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Insurance</a>";
            // line 225
            if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "44")) {
                // line 226
                echo "                                                        <ul class=\"children active\">";
            } else {
                // line 228
                echo "                                                           <ul class=\"children\">";
            }
            // line 230
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 231
                if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "44")) {
                    // line 232
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                    </ul>
                                </li>";
        }
        // line 239
        echo "



                            </ul>
                        </div>
                    </div>
                    <!-- /widget car categories -->
                   
                                 </aside>
                    <!-- /SIDEBAR -->
</div></div></section>";
        // line 253
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo " 
  
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
        // line 278
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

            \$('.locations').on('click', function(e) {
                e.preventDefault();
                \$('.location-name-box').toggle(500);
            });
            \$('.level1Btn').on('click', function(e) {
                e.preventDefault();
                \$('.level1 ul').toggle(200);

            });
            \$('.level2Btn').on('click', function(e) {
                e.preventDefault();
                \$('.level2 ul').toggle(200);

            });
            \$('.level3Btn').on('click', function(e) {
                e.preventDefault();
                \$('.level3 ul').toggle(200);

            });
        </script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:ParentGuide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 278,  499 => 253,  486 => 239,  482 => 235,  471 => 232,  469 => 231,  465 => 230,  462 => 228,  459 => 226,  457 => 225,  452 => 222,  448 => 216,  437 => 213,  435 => 212,  431 => 211,  428 => 209,  425 => 207,  423 => 206,  418 => 203,  415 => 199,  404 => 196,  402 => 195,  398 => 194,  395 => 192,  392 => 190,  390 => 189,  382 => 182,  371 => 179,  369 => 178,  365 => 177,  362 => 175,  359 => 173,  357 => 172,  351 => 167,  340 => 164,  338 => 163,  334 => 162,  331 => 159,  328 => 157,  326 => 156,  319 => 150,  308 => 147,  306 => 146,  302 => 145,  299 => 142,  296 => 140,  294 => 139,  286 => 133,  282 => 132,  278 => 131,  274 => 130,  270 => 129,  266 => 128,  262 => 127,  258 => 126,  254 => 125,  250 => 124,  220 => 96,  210 => 91,  204 => 90,  198 => 87,  195 => 86,  191 => 85,  168 => 63,  161 => 59,  149 => 50,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  80 => 20,  76 => 19,  69 => 15,  61 => 14,  52 => 12,  48 => 11,  40 => 10,  35 => 8,  24 => 4,  19 => 1,);
    }
}

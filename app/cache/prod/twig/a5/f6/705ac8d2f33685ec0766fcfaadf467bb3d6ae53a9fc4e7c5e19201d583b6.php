<?php

/* MainRatetradeBundle:Default:GuideDesc.html.twig */
class __TwigTemplate_a5f6705ac8d2f33685ec0766fcfaadf467bb3d6ae53a9fc4e7c5e19201d583b6 extends Twig_Template
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
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        }
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=content-width, initial-scale=1\">
    <meta name=\"robots\" content=\"index, follow\">
    <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">  
    <meta name=\"geo.region\" content=\"CA\">
    <meta name=\"title\" content=\"";
        // line 10
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
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
    <meta property=\"og:type\" content=\"article\">
    <meta name=\"og:title\" content=\"";
        // line 14
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        }
        echo "\">
    <meta name=\"og:description\" content=\"";
        // line 15
        echo (isset($context["mdesc"]) ? $context["mdesc"] : null);
        echo "\">
    <meta property=\"og:site_name\" content=\"Rate Trade\">
    <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\">
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:description\" content=\"";
        // line 19
        echo (isset($context["mdesc"]) ? $context["mdesc"] : null);
        echo "\">
    <meta name=\"twitter:title\" content=\"";
        // line 20
        if (((isset($context["pgtitle"]) ? $context["pgtitle"] : null) != "")) {
            echo (isset($context["pgtitle"]) ? $context["pgtitle"] : null);
        } else {
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        }
        echo "\">
    <meta name=\"twitter:site\" content=\"@ratetrade\">
    <meta name=\"twitter:creator\" content=\"@ratetrade\">   
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"114x114\">
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
        echo "\">
    <script src=\"https://code.jquery.com/jquery-1.12.1.min.js\"></script>";
        // line 44
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
        // line 53
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        echo "</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li class=\"active\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
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


                            <div class=\"content-boxes\">";
        // line 77
        echo (isset($context["guidedesc"]) ? $context["guidedesc"] : null);
        // line 78
        if (((isset($context["category"]) ? $context["category"] : null) == "Mortgage Renewal Process")) {
            echo "<div class=\"reproc\">
                                <h3>Mortgage Renewals By Province</h3>";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["province"]) ? $context["province"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 81
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mortgage_renewals", array("city" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "provinceUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "province"), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "</div>";
        }
        // line 85
        if (((isset($context["category"]) ? $context["category"] : null) == "Cost to Refinance?")) {
            echo "<div class=\"reproc\">
                                <h3>Mortgage Refinance By Province</h3>";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["province"]) ? $context["province"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 88
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mortgage_refinance", array("city" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "provinceUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "province"), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "</div>";
        }
        // line 91
        echo "

                            </div>



                            <div class=\"clear\"></div>
                            <div class=\"mortapb\"><a href=\"#\" class=\"an-button\" data-toggle=\"modal\" data-target=\"#agentModal1\">Apply Now</a>
                                &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
                                <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "fixed"));
        echo "\" class=\"an-button\">Best Available Rates</a>
                            </div>
                            <div class=\"clear\"></div>
                        

                           





                        </div>
                    </div>


                   
                    </article>
<!-- SIDEBAR -->
                    <aside class=\"col-md-3 sidebar\" id=\"sidebar\">
                    
                    <!-- widget car categories -->
                    <div class=\"widget shadow car-categories\">
                        <h4 class=\"widget-title\">Mortgage Categories</h4>
                        <div class=\"widget-content\">
                            <ul>
                               
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>";
        // line 129
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "6")) {
            // line 130
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 132
            echo "                                                           <ul class=\"children\">";
        }
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 138
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 139
                if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "id") == $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id"))) {
                    // line 140
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\" class=\"edu-cat\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                } else {
                    // line 142
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>";
        // line 152
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "18")) {
            // line 153
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 155
            echo "                                                           <ul class=\"children\">";
        }
        // line 159
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 160
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 161
                if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "id") == $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id"))) {
                    // line 162
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\" class=\"edu-cat\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                } else {
                    // line 164
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>";
        // line 173
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "1")) {
            // line 174
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 176
            echo "                                                           <ul class=\"children\">";
        }
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 181
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 182
                if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "id") == $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id"))) {
                    // line 183
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\" class=\"edu-cat\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                } else {
                    // line 185
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Mortgage Information</a>";
        // line 194
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "47")) {
            // line 195
            echo "                                                        <ul class=\"children active\">";
        } else {
            // line 197
            echo "                                                           <ul class=\"children\">";
        }
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 202
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "47")) {
                // line 203
                if (($this->getAttribute((isset($context["cat"]) ? $context["cat"] : null), "id") == $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id"))) {
                    // line 204
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\" class=\"edu-cat\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                } else {
                    // line 206
                    echo "                                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                                    </ul>

                                </li>";
        // line 213
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "39")) {
            echo " <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Auto Insurance</a>
                                    <ul class=\"children active\">";
            // line 217
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 218
                if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "39")) {
                    // line 219
                    echo "                                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "                                    </ul>
                                </li>";
        }
        // line 226
        if (($this->getAttribute((isset($context["parentcat"]) ? $context["parentcat"] : null), "id") == "44")) {
            // line 227
            echo "
<li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Insurance</a>
                                    <ul class=\"children active\">";
            // line 232
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 233
                if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "44")) {
                    // line 234
                    echo "                                                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                    echo "</a></li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                                    </ul>
                                </li>";
        }
        // line 240
        echo "

                            </ul>
                        </div>
                    </div>
                    <!-- /widget car categories -->
                                                     </aside>
                    <!-- /SIDEBAR -->
</div></div></section>
                     <!-- FOOTER -->";
        // line 250
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
<!-- /WRAPPER -->
   <div class=\"modal fade\" id=\"agentModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Contact Us</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-12\">
                                <div class=\"form-class\">
                                    <form class=\"\">
                                        <div class=\"col-xs-12 col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"name\"><i class=\"fa fa-user\"></i> &nbsp;Name: *</label>
                                                <input type=\"text\" class=\"form-control required\" name=\"urName\" id=\"urName\" placeholder=\"Enter Name\">
                                            </div>
                                            <div class=\"form-group\">

                                                <label for=\"phoneNumber\"><i class=\"fa fa-mobile\"></i> &nbsp; Phone Number: *</label>
                                                <input type=\"text\"  class=\"form-control required\" name=\"phoneNumber\" id=\"phonenUmber\" placeholder=\"Enter Phone Number\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"besttime\"><i class=\"fa fa-clock-o\"></i> &nbsp;Best Time to Call: *</label>
                                                <select name=\"bestTime\" id=\"bestTime\"  class=\"form-control required\">
                                                    <option value=\"anytime\">Any Time</option>
                                                    <option value=\"morning\">Morning</option>
                                                    <option value=\"afternoon\">Afternoon</option>
                                                    <option value=\"evening\">Evening</option>
                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"forEmail\"><i class=\"fa fa-envelope\"></i> &nbsp;Email Address: *</label>
                                                <input type=\"text\"  class=\"form-control\" name=\"emailId\" id=\"EmailId\" placeholder=\"Enter Email Address\">
                                            </div>                                
                                        </div>

                                        <div class=\"col-xs-12 col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"agentLocation\"><i class=\"fa fa-map-marker\"></i> &nbsp;Location: *</label>
                                                <input type=\"text\" name=\"agentLocationName\" id=\"agentLocationName\" class=\"form-control\" value=\"\" placeholder=\"Seach City\">
                                                <select name=\"agentLocation\" id=\"agentLocation\" class=\"form-control required\" onClick=\"getPop()\" size=\"5\" style=\"display:none;\">";
        // line 294
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 295
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                echo "  
                                                            <option value=\"";
                // line 296
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 298
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"lookingfor\"><i class=\"fa fa-home\"></i> &nbsp;I am Looking For: *</label>
                                                <select name=\"lookingFor\" id=\"lookingFor\"  class=\"form-control required\">
                                                    <option value=\"\">Please Select</option>
                                                    <option value=\"buying\" selected>Buying</option>
                                                    <option value=\"renew-mortgage\">Renew Mortgage</option>
                                                    <option value=\"debt-consolidation\">Debt Consolidation</option>
                                                    <option value=\"refinancing\">Refinancing</option>
                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <br>
                                                <input type=\"hidden\" id=\"rate-request\" value=\"\">
                                                <button type=\"button\" class=\"btn btn-primary lead-submit\" >Submit Now</button>
                                            </div>                                
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div></div></div>
 <script>

                                                    function validateEmail(email) {
                                                        var re = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
                                                        return re.test(email);
                                                    }

                                                    \$(document).on(\"click\", \".subsc\", function (e) {
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
        // line 349
        echo $this->env->getExtension('routing')->getPath("email_subscribe");
        echo "',
                                                                type: \"post\",
                                                                async: true,
                                                                data: {'email': \$(\"#exampleInputEmail2\").val(),
                                                                    'name': \"testname\"},
                                                                success: function (response) {
                                                                    \$(\"#exampleInputEmail2\").val('');
                                                                    alert(response);
                                                                },
                                                                error: function (request, error) {
                                                                    // alert('No data found');
                                                                }
                                                            });
                                                        }
                                                    });

                                                    \$('#locationName').click(function (e) {
                                                        \$('.loclist').show(100);
                                                    });
                                                    \$('.loclist').blur(function (e) {
                                                        \$(this).hide(100);
                                                    });

                                                    function getSelected() {

                                                        document.getElementById('locationName').value = document.getElementById('locationList').value;

                                                        \$('#locationList').hide(100);
                                                    }

                                                    \$('#agentLocationName').click(function (e) {
                                                        \$('#agentLocation').show(100);
                                                    });
                                                    \$('#agentLocation').blur(function (e) {
                                                        \$(this).hide(100);
                                                    });

                                                    function capitalizeFirstLetter(string) {
                                                        return string.charAt(0).toUpperCase() + string.slice(1);
                                                    }

                                                    \$('#agentLocationName').on('input', function () {
                                                        // Getiing option based on input value and setting it as selected
                                                        \$('#agentLocation option:contains(' + capitalizeFirstLetter(this.value) + ')').eq(0).prop('selected', true);
                                                    });

                                                    function getPop() {

                                                        //document.getElementById('locationName').value = document.getElementById('locationList').text;
                                                        \$('#agentLocationName').val(\$('option:selected', \$('#agentLocation')).text());
                                                        \$('#agentLocation').hide(100);
                                                    }


                                                    \$('.locations').on('click', function () {

                                                        \$('.location-name-box').toggle(500);
                                                    });
                                                    \$('.level1Btn').on('click', function (e) {
                                                        e.preventDefault();
                                                        \$('.level1 ul').toggle(500);
                                                    });
                                                    \$('.level2Btn').on('click', function (e) {
                                                        e.preventDefault();
                                                        \$('.level2 ul').toggle(500);
                                                    });
                                                    \$('.level3Btn').on('click', function (e) {
                                                        e.preventDefault();
                                                        \$('.level3 ul').toggle(500);
                                                    });

                                                    \$(document).on(\"change\", \".required\", function () {
                                                        \$(this).css('border', '1px solid green');

                                                        if (\$(this).val() == '')
                                                        {
                                                            \$(this).focus();
                                                            \$(this).css('border', '1px solid red');
                                                        }

                                                        var id = \$(this).attr('id');
                                                        if (id == 'EmailId' && !validateEmail(\$(\"#EmailId\").val()))
                                                        {
                                                            \$(\"#EmailId\").focus();
                                                            \$(\"#EmailId\").css('border', '1px solid red');
                                                        }
                                                    });

                                                    \$(document).on(\"click\", \".lead-submit\", function (e) {

                                                        if (\$(\"#urName\").val() == '')
                                                        {
                                                            \$(\"#urName\").focus();
                                                            \$(\"#urName\").css('border', '1px solid red');
                                                        }
                                                        else if (\$(\"#EmailId\").val() == '')
                                                        {
                                                            \$(\"#EmailId\").focus();
                                                            \$(\"#EmailId\").css('border', '1px solid red');
                                                        }
                                                        else if (!validateEmail(\$(\"#EmailId\").val()))
                                                        {
                                                            \$(\"#EmailId\").css('border', '1px solid red');
                                                            \$(\"#EmailId\").focus();
                                                        }
                                                        else if (\$(\"#phonenUmber\").val() == '')
                                                        {
                                                            \$(\"#phonenUmber\").focus();
                                                            \$(\"#phonenUmber\").css('border', '1px solid red');
                                                        }
                                                        else {
                                                            var currentRequest = null;
                                                            \$(\".lead-submit\").text(\"Please Wait..\");
                                                            var formData = {
                                                                fname: \$(\"#urName\").val(),
                                                                email: \$(\"#EmailId\").val(),
                                                                phone: \$(\"#phonenUmber\").val(),
                                                                message: \$(\"#rate-request\").val(),
                                                                location: \$(\"#agentLocationName\").val(),
                                                                besttime: \$(\"#bestTime\").find(\"option:selected\").text(),
                                                                purpose: \$(\"#lookingFor\").find(\"option:selected\").text()
                                                            };
                                                            currentRequest = \$.ajax({
                                                                type: \"post\",
                                                                async: true,
                                                                url: \"lead-update.php\",
                                                                data: formData,
                                                                beforeSend: function () {
                                                                    if (currentRequest != null) {
                                                                        currentRequest.abort();
                                                                    }
                                                                },
                                                                success: function (response) {
                                                                    \$(\".lead-submit\").text(\"Submit\");
                                                                    \$(\".required\").removeAttr('style');
                                                                    \$(\"#agentModal1\").modal('hide');
                                                                    alert(\"Query Successful\");
                                                                    window.location.href = '/thank-you';
                                                                },
                                                                error: function (request, error) {
                                                                    \$(\".lead-submit\").text(\"Submit\");
                                                                    \$(\".required\").removeAttr('style');
                                                                    alert(\"Query Failed\");
                                                                }
                                                            });
                                                        }
                                                    });
        </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:GuideDesc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 349,  572 => 301,  561 => 298,  555 => 296,  551 => 295,  547 => 294,  501 => 250,  490 => 240,  486 => 237,  475 => 234,  473 => 233,  469 => 232,  463 => 227,  461 => 226,  457 => 222,  446 => 219,  444 => 218,  440 => 217,  434 => 213,  430 => 210,  418 => 206,  411 => 204,  409 => 203,  407 => 202,  403 => 201,  400 => 197,  397 => 195,  395 => 194,  389 => 189,  377 => 185,  370 => 183,  368 => 182,  366 => 181,  362 => 180,  359 => 176,  356 => 174,  354 => 173,  348 => 168,  336 => 164,  329 => 162,  327 => 161,  325 => 160,  321 => 159,  318 => 155,  315 => 153,  313 => 152,  306 => 146,  294 => 142,  287 => 140,  285 => 139,  283 => 138,  279 => 137,  276 => 132,  273 => 130,  271 => 129,  240 => 100,  229 => 91,  226 => 89,  216 => 88,  212 => 87,  208 => 85,  205 => 82,  195 => 81,  191 => 80,  187 => 78,  185 => 77,  163 => 57,  156 => 53,  144 => 44,  140 => 40,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  80 => 20,  76 => 19,  69 => 15,  61 => 14,  52 => 12,  48 => 11,  40 => 10,  35 => 8,  24 => 4,  19 => 1,);
    }
}

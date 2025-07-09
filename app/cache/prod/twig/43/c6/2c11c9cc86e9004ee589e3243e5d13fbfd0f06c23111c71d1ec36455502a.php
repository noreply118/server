<?php

/* MainRatetradeBundle:Default:city-mortgage-rates.html.twig */
class __TwigTemplate_43c62c11c9cc86e9004ee589e3243e5d13fbfd0f06c23111c71d1ec36455502a extends Twig_Template
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
        echo strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageTitle"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "Ratetrade.ca :" => twig_capitalize_string_filter($this->env, ""), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term")));
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=content-width, initial-scale=1\">
        <meta name=\"robots\" content=\"index, follow\" />
        <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">  
        <meta name=\"geo.region\" content=\"CA\" />
        <meta name=\"title\" content=\"";
        // line 10
        echo strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageTitle"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "Ratetrade.ca :" => twig_capitalize_string_filter($this->env, ""), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term")));
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageMetaDesc"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term"))), "html", null, true);
        echo "\" /> 
       <meta name=\"keywords\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageMetaKey"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term"))), "html", null, true);
        echo "\" /> 

        <meta property=\"og:type\" content=\"article\" />
        <meta name=\"og:title\" content=\"";
        // line 15
        echo strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageTitle"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "Ratetrade.ca :" => twig_capitalize_string_filter($this->env, ""), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term")));
        echo "\">
        <meta name=\"og:description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageMetaDesc"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term"))), "html", null, true);
        echo "\">
        <meta property=\"og:site_name\" content=\"Rate Trade\" />
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\" />
        <meta name=\"twitter:card\" content=\"summary\" />
        <meta name=\"twitter:description\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageMetaDesc"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term"))), "html", null, true);
        echo "\">
        <meta name=\"twitter:title\" content=\"";
        // line 21
        echo strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageTitle"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "Ratetrade.ca :" => twig_capitalize_string_filter($this->env, ""), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term")));
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
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\"/>
         <script language=\"JavaScript\" 
                src=\"https://www.iplocationtools.com/iplocationtools.js?key=7b71786a7773756d6a207270\">
        </script>";
        // line 45
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
        // line 54
        echo strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageTitle"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "Ratetrade.ca :" => twig_capitalize_string_filter($this->env, ""), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term")));
        echo ".</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li class=\"active\">";
        // line 58
        echo strtr($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "pageTitle"), array("%ratetype%" => twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "Ratetrade.ca :" => twig_capitalize_string_filter($this->env, ""), "%city%" => twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "%term%" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term")));
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

                            <div class=\"content-boxes\">
<p>Get Mortgage Rates &nbsp;";
        // line 78
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "html", null, true);
        echo "  &nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term"), "html", null, true);
        echo "  &nbsp;";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo ". Compare Current Best and Lowest Interest at RateTrade. With our easy to use platform for comparing fixed rate mortgages in";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "html", null, true);
        echo ", you will be able to search, compare and choose the fixed mortgage rates with best terms and lowest interest rates in &nbsp;";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["target"]) ? $context["target"] : null)), "html", null, true);
        echo ".</p>

                                        <div class=\"best-rate-box\">
                                        <table align=\"left\" cellspacing=\"0\" cellpadding=\"0\" class=\"table-rates fixed\">
                                            <tbody>
                                                <tr>
                                                    <th scope=\"col\">Rate</th>
                                                    <th scope=\"col\" align=\"center\">Term</th>
                                                    <th scope=\"col\" align=\"center\">Type</th>
                                                    <th scope=\"col\" align=\"center\">&nbsp;</th>
                                                </tr>";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) ? $context["rates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 91
            echo "                                                    <tr>
                                                        <td>
                                                            <span class=\"rt-rate\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rate"), "html", null, true);
            echo "<sup>%</sup>
                                                            </span>
                                                        </td>  
                                                        <td class=\"terms\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "term"), "html", null, true);
            echo "</td>
                                                        <td class=\"type\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rateType"), "html", null, true);
            echo "</td>
                                                        <td><span class=\"get_this-rate\">
                                                                <a rt-popup=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#agentModal1\" class=\"rate-btn";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rate"), "html", null, true);
            echo "\">
                                                                    <span class=\"wide\">
                                                                        <button class=\"btn btn-success rh-button\">
                                                                            Apply Now
                                                                        </button>
                                                                    </span>
                                                                </a>
                                                            </span>
                                                            <a rt-popup=\"\" href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("compare_rates", array("rate" => $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rate"), "term" => $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "term"), "type" => $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rateType"))), "html", null, true);
            echo "\">
                                                                Compare
                                                            </a>
                                                        </td>
                                                    </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                    <br/><br/>";
        // line 118
        if ((twig_length_filter($this->env, (isset($context["target_cities"]) ? $context["target_cities"] : null)) > 0)) {
            // line 119
            echo "                                        <strong>Find Mortgage Rates By City</strong>


                                        <br/>
                                        <ul class=\"listfrate\">";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["target_cities"]) ? $context["target_cities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 125
                echo "                                                <li>
                                                        <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_mortgage_rates", array("target" => $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "urlLink"), "term" => $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "termUrl"), "ratetype" => (isset($context["ratetype"]) ? $context["ratetype"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term"), "html", null, true);
                echo "&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
                echo "</a>
                                                    </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                                        </ul>
<div class=\"clear\"></div>";
        }
        // line 133
        echo "                                </div>
                            </div>
                        </div>
                        <!-- SIDEBAR -->
                    <aside class=\"col-md-3 sidebar\" id=\"sidebar\">
                    
                    <!-- widget car categories -->
                    <div class=\"widget shadow car-categories\">
                        <h4 class=\"widget-title\">Mortgage Categories</h4>
                        <div class=\"widget-content\">
                            <ul>

<li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-percent\"></i> &nbsp; Fixed Mortgage Rates</a>
                                    <ul class=\"children active\">
                                                  <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 149
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/1-year/fixed\">1 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 150
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/2-year/fixed\">2 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 151
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/3-year/fixed\">3 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 152
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/4-year/fixed\">4 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 153
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/5-year/fixed\">5 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 154
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/6-year/fixed\">6 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 155
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/7-year/fixed\">7 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 156
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/8-year/fixed\">8 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 157
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/9-year/fixed\">9 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 158
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/10-year/fixed\">10 Year Fixed Rate</a></li>
                                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 159
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/25-year/fixed\">25 Year Fixed Rate</a></li>
                                                    </li>
                                                
                                          
                                             
                                     </ul>
                                </li>
<li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-percent\"></i> &nbsp; Variable Mortgage Rates</a>
                                    <ul class=\"children active\">
                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 170
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/3-year/variable\">3 Year Variable Rate</a></li>
                                        <li><a href=\"https://www.Ratetrade.ca/best-";
        // line 171
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, strtr((isset($context["target"]) ? $context["target"] : null), " ", "-")), "html", null, true);
        echo "-mortgage-rates/5-year/variable\">5 Year Variable Rate</a></li>

                                    </ul></li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-calculator\"></i> &nbsp; Calculators</a>
                                    <ul class=\"children\">
                                                <li><a href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                                <li><a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("chmc_insurance");
        echo "\">Mortgage Insurance</a></li>
                                                <li><a href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 186
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                     </ul>
                                </li>
                                <li> 
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 196
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 197
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 207
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 208
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 209
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 218
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 219
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 220
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- /widget car categories -->
              
                                 </aside>
                    <!-- /SIDEBAR -->
                </div>
            </div>
        </section>";
        // line 236
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
        <div class=\"modal fade\" id=\"agentModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Contact For Rate <span id=\"rate-r\"></span> %</h4>
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
        // line 279
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 280
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                echo "  
                                                            <option value=\"";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 283
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
        // line 286
        echo "                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"lookingfor\"><i class=\"fa fa-home\"></i> &nbsp;I am Looking For: *</label>
                                                <select name=\"lookingFor\" id=\"lookingFor\"  class=\"form-control required\">
                                                    <option value=\"\">Please Select</option>
                                                    <option value=\"buying\">Buying</option>
                                                    <option value=\"renew-mortgage\">Renew Mortgage</option>
                                                    <option value=\"debt-consolidation\">Debt Consolidation</option>
                                                    <option value=\"refinancing\">Refinancing</option>
                                                </select>
                                            </div>
                                            <div class=\"form-group\">
                                                <br>
                                                <input type=\"hidden\" id=\"rate-request\" value=\"\"/>
                                                <button type=\"button\" class=\"btn btn-primary lead-submit\" >Submit Now</button>
                                            </div>                                
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">

                    </div>
                </div>
            </div>
        </div>
 
        <script>
                                                    \$(document).on(\"click\", \".rate-btn\", function(e) {
                                                        e.preventDefault();
                                                        \$(\"#rate-request\").val(\$(this).attr(\"class\").split(\" \")[1]);
                                                        \$(\"#rate-r\").html(\$(this).attr(\"class\").split(\" \")[1]);
                                                    });
                                                    
                                                     \$(document).ready(function () {
                                                      if(ip2location_country_long() === 'Canada')
                                                        {
                                                        \$(\"#agentLocationName\").val(ip2location_city());
                                                        \$(\"#agentLocation\").find(\"option:contains('\" + ip2location_city() + \"')\").prop(\"selected\", true);
                                                        }
                                                        else
                                                        {
                                                        \$(\"#agentLocationName\").val(\"Brampton\");
                                                        \$(\"#agentLocation\").find(\"option:contains('Brampton')\").prop(\"selected\", true);
                                                        }
                                                    });

                                                    \$('.locations').on('click', function() {

                                                        \$('.location-name-box').toggle(500);
                                                    });
                                                    \$('.level1Btn').on('click', function() {
                                                        \$('.level1 ul').toggle(500);

                                                    });
                                                    \$('.level2Btn').on('click', function() {
                                                        \$('.level2 ul').toggle(500);

                                                    });
                                                    \$('.level3Btn').on('click', function() {
                                                        \$('.level3 ul').toggle(500);

                                                    });

                                                    \$('#agentLocationName').click(function(e) {
                                                        \$('#agentLocation').show(100);
                                                    });
                                                    \$('#agentLocation').blur(function(e) {
                                                        \$(this).hide(100);
                                                    });

                                                    function capitalizeFirstLetter(string) {
                                                        return string.charAt(0).toUpperCase() + string.slice(1);
                                                    }

                                                    \$('#agentLocationName').on('input', function() {
                                                        // Getiing option based on input value and setting it as selected
                                                        \$('#agentLocation option:contains(' + capitalizeFirstLetter(this.value) + ')').eq(0).prop('selected', true);
                                                    });

                                                    function getPop() {

                                                        //document.getElementById('locationName').value = document.getElementById('locationList').text;
                                                        \$('#agentLocationName').val(\$('option:selected', \$('#agentLocation')).text());
                                                        \$('#agentLocation').hide(100);
                                                    }



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
        // line 400
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

                                                    \$(document).on(\"change\", \".required\", function() {
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

                                                    \$(document).on(\"click\", \".lead-submit\", function(e) {

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
                                                                beforeSend: function() {
                                                                    if (currentRequest != null) {
                                                                        currentRequest.abort();
                                                                    }
                                                                },
                                                                success: function(response) {
                                                                    \$(\".lead-submit\").text(\"Submit\");
                                                                    \$(\".required\").removeAttr('style');
                                                                    \$(\"#agentModal1\").modal('hide');
                                                                    alert(\"Query Successful\");
                                                                    window.location.href = '/thank-you';
                                                                },
                                                                error: function(request, error) {
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
        return "MainRatetradeBundle:Default:city-mortgage-rates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 400,  554 => 286,  543 => 283,  537 => 281,  533 => 280,  529 => 279,  484 => 236,  470 => 223,  459 => 220,  457 => 219,  453 => 218,  446 => 212,  435 => 209,  433 => 208,  429 => 207,  421 => 200,  410 => 197,  408 => 196,  404 => 195,  395 => 187,  391 => 186,  387 => 185,  383 => 184,  379 => 183,  375 => 182,  371 => 181,  367 => 180,  363 => 179,  359 => 178,  349 => 171,  345 => 170,  331 => 159,  327 => 158,  323 => 157,  319 => 156,  315 => 155,  311 => 154,  307 => 153,  303 => 152,  299 => 151,  295 => 150,  291 => 149,  273 => 133,  269 => 130,  255 => 126,  252 => 125,  248 => 124,  242 => 119,  240 => 118,  235 => 114,  224 => 108,  213 => 100,  208 => 98,  204 => 97,  198 => 94,  194 => 91,  190 => 90,  169 => 78,  146 => 58,  139 => 54,  127 => 45,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  77 => 30,  65 => 21,  61 => 20,  54 => 16,  50 => 15,  44 => 12,  40 => 11,  36 => 10,  31 => 8,  24 => 4,  19 => 1,);
    }
}

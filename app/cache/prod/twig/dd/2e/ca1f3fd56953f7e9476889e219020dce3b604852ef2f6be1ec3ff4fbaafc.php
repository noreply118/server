<?php

/* MainRatetradeBundle:Default:mortgage-rates.html.twig */
class __TwigTemplate_dd2eca1f3fd56953f7e9476889e219020dce3b604852ef2f6be1ec3ff4fbaafc extends Twig_Template
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
        <title>Find Your Suitable";
        // line 4
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "target"), "method"), "html", null, true);
        echo " Mortgage Rate in Canada</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=content-width, initial-scale=1\">
        <meta name=\"robots\" content=\"index, follow\">
        <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">  
        <meta name=\"geo.region\" content=\"CA\" />
        <meta name=\"title\" content=\"Find Your Suitable";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "target"), "method"), "html", null, true);
        echo " Mortgage Rate in Canada\">
        <meta name=\"description\" content=\"View 6-Month to 10 years";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "target"), "method"), "html", null, true);
        echo " mortgage rates over time, Our Canadian comparison charts list current rates are updated regularly throughout the day.
\"> 
        <meta property=\"og:type\" content=\"article\" />
        <meta name=\"og:title\" content=\"Find Your Suitable";
        // line 14
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo " Mortgage Rate in Canada\">
        <meta name=\"og:description\" content=\"View 6-Month to 10 years";
        // line 15
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "target"), "method"), "html", null, true);
        echo " mortgage rates over time, Our Canadian comparison charts list current rates are updated regularly throughout the day.
\">
        <meta property=\"og:site_name\" content=\"Rate Trade\" />
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\" />
        <meta name=\"twitter:card\" content=\"summary\" />
        <meta name=\"twitter:description\" content=\"View 6-Month to 10 years";
        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "target"), "method"), "html", null, true);
        echo " mortgage rates over time, Our Canadian comparison charts list current rates are updated regularly throughout the day.
\">
        <meta name=\"twitter:title\" content=\"Find Your Suitable";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "target"), "method"), "html", null, true);
        echo " Mortgage Rate in Canada\">
        <meta name=\"twitter:site\" content=\"@ratetrade\" />
        <meta name=\"twitter:creator\" content=\"@ratetrade\" /> 
      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"favicon.ico\" sizes=\"114x114\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"144x144\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\"/>
      
        <script language=\"JavaScript\" 
                src=\"https://www.iplocationtools.com/iplocationtools.js?key=7b71786a7773756d6a207270\">
        </script>";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
    <!-- /HEADER -->
    <!-- CONTENT AREA -->
    <div class=\"content-area\">

        <!-- BREADCRUMBS -->
        <section class=\"page-section breadcrumbs text-right\">
            <div class=\"container\">
                <div class=\"page-header\">
                             <h1 class=\"entrytitle\">Best";
        // line 57
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo " Mortgage Rates</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li class=\"active\">Best";
        // line 61
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
        echo " Mortgage Rates</li>
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
 <div class=\"searcharea\">

                <div class=\"search-box\">";
        // line 86
        echo "                    <div class=\"form-group findhead\"><strong>Find Your Suitable Rate!</strong></div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"control-label\">Rate Type</label>
                        <select name=\"ratetype\" class=\"form-control\">
                           <option value=\"fixed\">Fixed</option>
                           <option value=\"variable\">Variable</option>
                        </select>
                    </div>

                    <div class=\"form-group\" style=\"display:none\">
                        <label for=\"inputYear\" class=\"control-label\">Select Year</label>
                        <select name=\"Year\" class=\"form-control\">";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terms"]) ? $context["terms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 99
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "termUrl"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "term"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                        </select>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputYear\" class=\"control-label\">Select Location</label>
                        <select name=\"locationList\" id=\"locationList\" class=\"form-control\" onClick=\"getSelected()\" >";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 108
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "urlLink"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                        </select>
                    </div>

                    <div class=\"form-group smbb\">
                        <button type=\"button\" class=\"btn btn-danger btn-lg get-rates\">Get Rate Now</button>
                    </div>";
        // line 117
        echo "                </div>
            </div>
        
        <div class=\"clear\"></div>
      
                                    <p>
                                        At our website, you can search and compare the lowest interest rates being offered by the most competitive brokers, lenders and banks in Canada. Our Canadian comparison charts list current rates and are updated regularly throughout the day.
                                    </p>
                                    <!-- Div Box -->   
                                    <div class=\"best-rate-box\">
                                        <table align=\"left\" cellspacing=\"0\" cellpadding=\"0\" class=\"table-rates fixed\">
                                            <tbody>
                                                <tr>
                                                    <th scope=\"col\">Rate</th>
                                                    <th scope=\"col\" align=\"center\">Term</th>
                                                    <th scope=\"col\" align=\"center\">Type</th>
                                                    <th scope=\"col\" align=\"center\">&nbsp;</th>
                                                </tr>";
        // line 136
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) ? $context["rates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 137
            echo "                                                    <tr>
                                                        <td>
                                                            <span class=\"rt-rate\">";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rate"), "html", null, true);
            echo "<sup>%</sup>
                                                            </span>
                                                        </td>  
                                                        <td class=\"terms\">";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "term"), "html", null, true);
            echo "</td>
                                                        <td class=\"type\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["r"]) ? $context["r"] : null), "rateType"), "html", null, true);
            echo "</td>
                                                        <td><span class=\"get_this-rate\">
                                                                <a rt-popup=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#agentModal1\" class=\"rate-btn";
            // line 146
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
            // line 154
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
        // line 160
        echo "                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=\"fvdiv\">
                                        <strong>Fixed Mortgage Rates vs. Variable Mortgage Rates</strong>
                                        <p>While searching for mortgage, the first and foremost decision one needs to make is to select between fixed and variable rate mortgages.
                                            When you choose for fixed rate mortgage, then payment you make each month will stay constant for the term of your mortgage. With a variable rate mortgage, the mortgage rate will change with prime lending rate as set by your lender
                                            When you choose for fixed rate mortgage, you are \"locked in\" to a given rate and protected from rate fluctuations. These mortgages are preferable when borrowers are risk averse and/or they have purchased property at the high end of their affordability range. Variable mortgage rates change as per market conditions at anytime; however they have been proven less expensive over time. These are based on Bank of Canada prime rate less a discount.
                                            Your income, lifestyle and risk tolerance are important factors to be considered for determining which mortgage product suits you the best.</p>
                                    </div>

                                   <div style=\"display:none;\"> <h2 class=\"chrate chrate1\">Choose Mortgage Rates By Province</h2>
                                    <br/>";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["province"]) ? $context["province"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 175
            echo "                                        <table border=\"0\"class=\"listfrate\">
                                            <tr>
                                                <th rowspan=\"2\"><a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_ratetypes", array("target" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urlLink"), "ratetype" => (isset($context["ratetype"]) ? $context["ratetype"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "province"), "html", null, true);
            echo "</a></th>";
            // line 178
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["terms"]) ? $context["terms"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["t"]) {
                // line 179
                echo "                                                    <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_mortgage_rates", array("target" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urlLink"), "term" => $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "termUrl"), "ratetype" => (isset($context["ratetype"]) ? $context["ratetype"] : null))), "html", null, true);
                echo "\">";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["t"]) ? $context["t"] : null), "term"), "html", null, true);
                echo "&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["ratetype"]) ? $context["ratetype"] : null)), "html", null, true);
                echo "
                                                        </a></td>";
                // line 182
                if (((isset($context["key"]) ? $context["key"] : null) == "4")) {
                    // line 183
                    echo "                                                    </tr><tr>";
                }
                // line 185
                if (((isset($context["key"]) ? $context["key"] : null) == "9")) {
                    // line 186
                    echo "                                                    </tr>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                                        </table>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                </div>




 <strong class=\"chrate chrate1\">Choose Mortgage Rates By Province</strong>
                                    <br/> <ul class=\"listfrate\">";
        // line 198
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["province"]) ? $context["province"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 199
            echo "                                       
                                            <li><a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_ratetypes", array("target" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "urlLink"), "ratetype" => (isset($context["ratetype"]) ? $context["ratetype"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "province"), "html", null, true);
            echo " Mortgage Rates</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo " </ul><div class=\"clear\"></div>
                                




                            </div></div></article>
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
                                    <a href=\"#\"><i class=\"fa fa-calculator\"></i> &nbsp; Calculators</a>
                                    <ul class=\"children active\">
                                                <li><a href=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 225
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 227
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                                <li><a href=\"";
        // line 228
        echo $this->env->getExtension('routing')->getPath("chmc_insurance");
        echo "\">Mortgage Insurance</a></li>
                                                <li><a href=\"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 230
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 231
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 232
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                     </ul>
                                </li>
                                <li> 
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 241
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 242
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 243
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
        // line 246
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 253
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 254
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 255
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
        // line 258
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 264
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 265
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 266
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
        // line 269
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
        // line 282
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
        // line 325
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 326
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                echo "  
                                                            <option value=\"";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 329
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
        // line 332
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
                                                    \$(document).on(\"click\", \".rate-btn\", function (e) {
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

                                                    \$('.locations').on('click', function () {

                                                        \$('.location-name-box').toggle(500);
                                                    });
                                                    \$('.level1Btn').on('click', function () {
                                                        \$('.level1 ul').toggle(500);

                                                    });
                                                    \$('.level2Btn').on('click', function () {
                                                        \$('.level2 ul').toggle(500);

                                                    });
                                                    \$('.level3Btn').on('click', function () {
                                                        \$('.level3 ul').toggle(500);

                                                    });

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
        // line 446
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




  \$(document).on(\"click\", \".get-rates\", function (e) {

                                var ratetype = \$(\"select[name=ratetype]\").find(\"option:selected\").val();
                                var locurl = \$(\"#locationList\").find(\"option:selected\").val();

                                if (ratetype == 'variable')
                                {
                                    if (\$(\"#locationName\").val() != '') {
                                        if (typeof locurl != 'undefined')
                                        {
                                           window.location.href = '/' + locurl + '/variable';
                                        }
                                        else
                                        {
                                            window.location.href = '";
        // line 479
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "variable"));
        echo "';
                                        }
                                    }
                                    else {
                                        window.location.href = '";
        // line 483
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "variable"));
        echo "';
                                    }
                                }
                                else
                                {
                                    if (\$(\"#locationName\").val() != '') {
                                        if (typeof locurl != 'undefined')
                                        {
                                           window.location.href = '/' + locurl + '/fixed';
                                        }
                                        else {
                                            window.location.href = '";
        // line 494
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "fixed"));
        echo "';
                                        }
                                    }
                                    else {
                                        window.location.href = '";
        // line 498
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "fixed"));
        echo "';
                                    }
                                }
                            });


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
        // line 520
        echo $this->env->getExtension('routing')->getPath("email_subscribe");
        echo "',
                                                                type: \"post\",
                                                                async: true,
                                                                data: {'email': \$(\"#exampleInputName2\").val(),
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
        return "MainRatetradeBundle:Default:mortgage-rates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  802 => 520,  777 => 498,  770 => 494,  756 => 483,  749 => 479,  713 => 446,  597 => 332,  586 => 329,  580 => 327,  576 => 326,  572 => 325,  527 => 282,  513 => 269,  502 => 266,  500 => 265,  496 => 264,  489 => 258,  478 => 255,  476 => 254,  472 => 253,  464 => 246,  453 => 243,  451 => 242,  447 => 241,  438 => 233,  434 => 232,  430 => 231,  426 => 230,  422 => 229,  418 => 228,  414 => 227,  410 => 226,  406 => 225,  402 => 224,  380 => 204,  371 => 200,  368 => 199,  364 => 198,  356 => 191,  350 => 189,  343 => 186,  341 => 185,  338 => 183,  336 => 182,  330 => 180,  326 => 179,  322 => 178,  317 => 177,  313 => 175,  309 => 174,  294 => 160,  283 => 154,  272 => 146,  267 => 144,  263 => 143,  257 => 140,  253 => 137,  249 => 136,  230 => 117,  223 => 110,  213 => 108,  209 => 107,  202 => 101,  192 => 99,  188 => 98,  175 => 86,  151 => 61,  144 => 57,  132 => 48,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  81 => 31,  68 => 22,  62 => 20,  53 => 15,  49 => 14,  42 => 11,  37 => 10,  32 => 8,  24 => 4,  19 => 1,);
    }
}

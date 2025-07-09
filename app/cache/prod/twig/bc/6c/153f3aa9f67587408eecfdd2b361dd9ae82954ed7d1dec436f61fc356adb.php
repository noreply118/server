<?php

/* MainRatetradeBundle:Default:penalty.html.twig */
class __TwigTemplate_bc6c153f3aa9f67587408eecfdd2b361dd9ae82954ed7d1dec436f61fc356adb extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"widht=content-width, initial-scale=1\">
        <meta name=\"robots\" content=\"index, follow\">
        <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">  
        <meta name=\"geo.region\" content=\"CA\" >
        <meta name=\"title\" content=\"";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"description\" content=\"";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"> 
        <meta name=\"keywords\" content=\"";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mkeywords"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"> 
        <meta property=\"og:type\" content=\"article\" >
        <meta name=\"og:title\" content=\"";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"og:description\" content=\"";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta property=\"og:site_name\" content=\"Rate Trade\" >
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\" >
        <meta name=\"twitter:card\" content=\"summary\" >
        <meta name=\"twitter:description\" content=\"";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:title\" content=\"";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "33")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:site\" content=\"@ratetrade\" >
        <meta name=\"twitter:creator\" content=\"@ratetrade\" >
           <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" sizes=\"114x114\">
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
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">
\t    <script src=\"/./bundles/assets/plugins/modernizr.custom.js\"></script>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/emicalculator.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/jquery-ui.css\">";
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
                             <h1 class=\"entrytitle\">Mortgage Refinance Penalty Calculator Canada</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li>Calculator</li>
                                <li class=\"active\">Refinance Penalty Calculator</li>
                </ul>
            </div>
        </section>";
        // line 63
        echo "<!-- PAGE WITH SIDEBAR -->
        <div class=\"page-section with-sidebar\">
            <div class=\"container\">
                <div class=\"row\">
                   

                    <!-- CONTENT -->
                    <div class=\"col-md-9 content\" id=\"content\">

                        <!-- Blog posts -->
                        <div class=\"post-wrap\">
                            <div class=\"post-media\">


                            <div class=\"content-boxes framecontent\">
 \t   
\t\t\t\t\t\t<form><div class=\"pboxheading\">MORTGAGE REFINANCE PENALTY</div>
                                <div class=\"pbox\">
                                    <div class=\"lamount\">
                                        <label for=\"loanamount\" class=\"orange\"><strong>Remaining Balance on Mortgage (\$)</strong> </label>
                                        <span></span></div><div class=\"datafeild\">
                                        <input id=\"loanamount\" name=\"loanamount\" value=\"\" type=\"text\" >
                        <span class=\"prc-addon\">\$</span>
                                    <div id=\"loanamountslider\"></div>
                                    <div id=\"loanamountsteps\" class=\"steps\">
                                        <span class=\"tick\" style=\"left: 0%;\">|<br><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 16.67%;\">|<br><span class=\"marker\">\$500,000</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 33.34%;\">|<br><span class=\"marker\">\$1M</span></span>
                                    <span class=\"tick\" style=\"left:  50%;\">|<br><span class=\"marker\">\$1.5M</span></span>
                                    <span class=\"tick\" style=\"left: 66.67%;\">|<br><span class=\"marker\">\$2M</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 83.34%;\">|<br><span class=\"marker\">\$2.5M</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br><span class=\"marker\">\$3</span></span>
                                    </div>
                                 </div>
                            </div>
                           
                            <div class=\"refdetail1\">
                             <div class=\"pbox\"><div class=\"lamount\">
                            <label class=\"orange\">
                                <strong>Mortgage Start Date</strong>
                            </label></div>
                            <div class=\"datafeild\">
                            <div class=\"fields\">";
        // line 106
        $context["current_month"] = $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "m"), "method");
        // line 107
        $context["curren_data"] = $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "d"), "method");
        // line 108
        echo "                               <select id=\"date\" style=\"width:30%;\">";
        // line 109
        $context["currentDate"] = twig_date_format_filter($this->env, "now");
        // line 110
        $context["totalDays"] = twig_date_format_filter($this->env, (isset($context["currentDate"]) ? $context["currentDate"] : null), "t");
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalDays"]) ? $context["totalDays"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 113
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["day"]) ? $context["day"] : null) == (isset($context["curren_data"]) ? $context["curren_data"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                                </select>
                                &nbsp;
                                <select id=\"month\" style=\"width:30%;\">
                                    <option value=\"1\"";
        // line 118
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "01")) {
            echo " selected";
        }
        echo ">January</option>
                                    <option value=\"2\"";
        // line 119
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "02")) {
            echo " selected";
        }
        echo ">February</option>
                                    <option value=\"3\"";
        // line 120
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "03")) {
            echo " selected";
        }
        echo ">March</option>
                                    <option value=\"4\"";
        // line 121
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "04")) {
            echo " selected";
        }
        echo ">April</option>
                                    <option value=\"5\"";
        // line 122
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "05")) {
            echo " selected";
        }
        echo ">May</option>
                                    <option value=\"6\"";
        // line 123
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "06")) {
            echo " selected";
        }
        echo ">June</option>
                                    <option value=\"7\"";
        // line 124
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "07")) {
            echo " selected";
        }
        echo ">July</option>
                                    <option value=\"8\"";
        // line 125
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "08")) {
            echo " selected";
        }
        echo ">August</option>
                                    <option value=\"9\"";
        // line 126
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "09")) {
            echo " selected";
        }
        echo ">September</option>
                                    <option value=\"10\"";
        // line 127
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "10")) {
            echo " selected";
        }
        echo ">October</option>
                                    <option value=\"11\"";
        // line 128
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "11")) {
            echo " selected";
        }
        echo ">November</option>
                                    <option value=\"12\"";
        // line 129
        if (((isset($context["current_month"]) ? $context["current_month"] : null) == "12")) {
            echo " selected";
        }
        echo ">December</option>
                                </select>
                                &nbsp;
                                <select id=\"year\" style=\"width:30%;\">";
        // line 133
        $context["current_year"] = $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "Y"), "method");
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2000, (isset($context["current_year"]) ? $context["current_year"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 135
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "\"";
            if (((isset($context["year"]) ? $context["year"] : null) == (isset($context["current_year"]) ? $context["current_year"] : null))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                </select>
                            </div></div></div>
                        
                            <div class=\"pbox\">
                              <div class=\"lamount\">
                            <label class=\"orange\">
                                <strong>Mortgage Original Term</strong>
                            </label></div><div class=\"datafeild\">
                            <div class=\"fields\">
                                <select id=\"mort-term\">
                                    <option>Select Term</option>
                                    <option>1</option>
                                    <option selected>3</option>
                                    <option>5</option>
                                    <option>10</option>
                                </select></div></div></div>
                     
                               <div class=\"pbox\">
                               <div class=\"lamount\">
                            <label class=\"orange\">
                                <strong>Type of Existing Mortgage</strong>
                            </label></div><div class=\"datafeild\">
                            <div class=\"fields\" style=\"margin-top: 18px;\">
                                <input type=\"radio\" name=\"mort-type\" class=\"mort-type\" value=\"variable\" checked=\"checked\"> Variable
                                &nbsp;&nbsp;<input type=\"radio\" name=\"mort-type\" class=\"mort-type\" value=\"fixed\" > Fixed   
                            </div>
</div></div>
</div>
                         
                            <div class=\"pbox\">
                             <div class=\"sep lint\">
                                    <label for=\"loaninterest\" class=\"orange\"><strong>Existing Mortgage Rate (%)</strong> </label>
                                    <span></span></div><div class=\"datafeild\">
                                    <input id=\"loaninterest\" name=\"loaninterest\" value=\"2.99\" type=\"text\" >
                        <span class=\"prc-addon\">%</span>
                                <div id=\"loaninterestslider\"></div>
                                <div  class=\"steps\">
                                    <span class=\"tick\" style=\"left: 0%;\">|<br><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 16.67%;\">|<br><span class=\"marker\">1.75</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 33.34%;\">|<br><span class=\"marker\">3.5</span></span>
                                    <span class=\"tick\" style=\"left: 50%;\">|<br><span class=\"marker\">5</span></span>
                                    <span class=\"tick\" style=\"left: 66.67%;\">|<br><span class=\"marker\">6.75</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 83.34%;\">|<br><span class=\"marker\">8.5</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br><span class=\"marker\">10</span></span>
                                </div></div></div>
                                                          <div class=\"pbox\">
                               <div class=\"sep lint\">
                                    <label for=\"newloaninterest\" class=\"orange\"><strong>New Mortgage Rate (%)</strong> </label>
                                    <span></span></div><div class=\"datafeild\">
                                    <input id=\"newloaninterest\" name=\"newloaninterest\" value=\"1.99\" type=\"text\" >
                        <span class=\"prc-addon\">%</span>
                                <div id=\"newloaninterestslider\"></div>
                                <div  class=\"steps\">
                                    <span class=\"tick\" style=\"left: 0%;\">|<br><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 16.67%;\">|<br><span class=\"marker\">1.75</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 33.34%;\">|<br><span class=\"marker\">3.5</span></span>
                                    <span class=\"tick\" style=\"left: 50%;\">|<br><span class=\"marker\">5</span></span>
                                    <span class=\"tick\" style=\"left: 66.67%;\">|<br><span class=\"marker\">6.75</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 83.34%;\">|<br><span class=\"marker\">8.5</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br><span class=\"marker\">10</span></span>
                                </div></div></div>
                             <div class=\"refdetail1\">
                            <div class=\"pbox\">
                               <div class=\"lamount\">
                            <label class=\"orange\">
                                <strong>Province</strong>
                            </label></div><div class=\"datafeild\">
                            <div class=\"fields\">
                            <select id=\"province\" name=\"province\" >
\t\t                <option value=\"AL\">Alberta</option>
\t\t                <option value=\"BC\">British Columbia</option>
                                <option value=\"MA\">Manitoba</option>
                                <option value=\"NB\">New Brunswick</option>
                                <option value=\"NE\">Newfoundland</option>
\t\t\t\t<option value=\"NS\">Nova Scotia</option>
                                <option value=\"NT\">Northwest Territories</option>
\t\t\t\t<option value=\"NU\">Nunavut</option>
                                <option value=\"ON\" selected=\"selected\">Ontario</option>
                                <option value=\"PE\">Prince Edward Island</option>
                                <option value=\"QU\">Quebec</option>
\t\t\t\t<option value=\"SK\">Saskatchewan</option>
\t\t\t\t<option value=\"YU\">Yukon</option>\t\t\t\t
\t\t\t    </select>    
                            </div></div></div>
                         
                            <div class=\"pbox\">
                               <div class=\"lamount\">
                            <label class=\"orange\">
                                <strong>Mortgage Provider</strong>
                            </label></div><div class=\"datafeild\">
                            <div class=\"fields\">
                                <select id=\"provider\" name=\"provider\" >
\t\t                <option value=\"hsbc\">HSBC</option>
                                <option value=\"rbc\">RBC</option>
                                <option value=\"bmo\">BMO</option>
\t\t\t    </select>
                            </div></div></div></div>                              
                                </div></div></form>
            <div class=\"box-12\" style=\"padding-bottom: 35px; text-align: center;\">
                    <a href=\"#\" class=\"an-button ref-penalty\" style=\"min-width: 30%\">Submit</a>
                </div>
                 <div class=\"box-7 resultam1\">
                    <strong class=\"orange\">Provider Dishcharge Fee</strong>
                    <input id=\"discharge-fee\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\">
                </div>
                <div class=\"box-7 resultam1\">
                    <strong class=\"orange\">Mortgage Penalty</strong>
                    <input id=\"mortgage-penalty\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\">
                </div>
                <div class=\"mortapb\" style=\"margin-top: 35px;\">  
                                        <a href=\"";
        // line 247
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\" class=\"an-button\">Calculate New Mortgage</a>
                                        &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
                                        <a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mortgage_rates", array("target" => "best", "ratetype" => "fixed")), "html", null, true);
        echo "\" class=\"an-button\">Best Available Rates</a>
                                    </div>
            </div>   
        </div>   
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
                                    <a href=\"#\"><i class=\"fa fa-calculator\"></i> &nbsp; Calculators</a>
                                    <ul class=\"children active\">
                                                <li><a href=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 269
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 270
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 271
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                               
                                                <li><a href=\"";
        // line 273
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 274
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 275
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 276
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 277
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                     </ul>
                                </li>
                                <li> 
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 285
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 286
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 287
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
        // line 290
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 297
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 298
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 299
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
        // line 302
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 308
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 309
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 310
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
        // line 313
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
        </div>";
        // line 328
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "



        <script  src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.tabs.min.js"), "html", null, true);
        echo "\"></script>

        <script  src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.loadmask.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/globalize.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/penalty.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
     
      
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:penalty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 340,  680 => 339,  676 => 338,  672 => 337,  668 => 336,  663 => 334,  659 => 333,  655 => 332,  648 => 328,  632 => 313,  621 => 310,  619 => 309,  615 => 308,  608 => 302,  597 => 299,  595 => 298,  591 => 297,  583 => 290,  572 => 287,  570 => 286,  566 => 285,  557 => 277,  553 => 276,  549 => 275,  545 => 274,  541 => 273,  536 => 271,  532 => 270,  528 => 269,  524 => 268,  502 => 249,  497 => 247,  385 => 137,  371 => 135,  367 => 134,  365 => 133,  357 => 129,  351 => 128,  345 => 127,  339 => 126,  333 => 125,  327 => 124,  321 => 123,  315 => 122,  309 => 121,  303 => 120,  297 => 119,  291 => 118,  286 => 115,  272 => 113,  268 => 112,  266 => 110,  264 => 109,  262 => 108,  260 => 107,  258 => 106,  214 => 63,  194 => 44,  188 => 39,  184 => 38,  180 => 37,  176 => 36,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  127 => 20,  114 => 19,  98 => 15,  85 => 14,  71 => 12,  58 => 11,  45 => 10,  40 => 8,  24 => 4,  19 => 1,);
    }
}

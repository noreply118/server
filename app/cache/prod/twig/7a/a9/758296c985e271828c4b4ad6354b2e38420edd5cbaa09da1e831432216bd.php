<?php

/* MainRatetradeBundle:Default:mortgage-refinance.html.twig */
class __TwigTemplate_7aa9758296c985e271828c4b4ad6354b2e38420edd5cbaa09da1e831432216bd extends Twig_Template
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
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
        <meta name=\"geo.region\" content=\"CA\">
        <meta name=\"title\" content=\"";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mkeywords"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta property=\"og:type\" content=\"article\">
        <meta name=\"og:title\" content=\"";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta property=\"og:site_name\" content=\"Rate Trade\">
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\">
        <meta name=\"twitter:card\" content=\"summary\">
        <meta name=\"twitter:description\" content=\"";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "31")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:site\" content=\"@ratetrade\">
        <meta name=\"twitter:creator\" content=\"@ratetrade\" >
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">";
        // line 28
        echo "    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"144x144\">
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/jquery-ui.css\">  

<style>.mortapb a { padding:10px }</style>";
        // line 46
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
    <!-- /HEADER -->
 <!-- CONTENT AREA -->
    <div class=\"content-area\">

        <!-- BREADCRUMBS -->
<section class=\"page-section breadcrumbs text-right\">
    <div class=\"container\">
        <div class=\"page-header\">
            <h1 class=\"entrytitle\">Mortgage Refinance Calculator in Canada</h1>
        </div>
        <ul class=\"breadcrumb\">
            <li>Home</li>
            <li>Calculator</li>
            <li class=\"active\">Mortgage Refinance Calculator</li>
        </ul>
    </div>
</section>";
        // line 66
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
                            <form>
                                <div class=\"entry-content\">
                                    <div id=\"emicalcalulatorinnerform\" style=\"padding: 0px 0px 10px;\">
                                        <div class=\"morhead\">Mortgage Refinance Calculator</div>
                                        <div class=\"pbox\">
                                            <div class=\"lamount\">
                                                <label for=\"loanamount\" class=\"orange\"><strong>Current Property Value (\$)</strong> </label>
                                                <span></span>
                                            </div>";
        // line 85
        $context["propertyValue"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "query"), "get", array(0 => "property"), "method");
        // line 86
        echo "
                                            <div class=\"datafeild\">
                                                <input id=\"loanamount\" name=\"loanamount\" class=\"loanamount\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["propertyValue"]) ? $context["propertyValue"] : null), "html", null, true);
        echo "\" type=\"text\" >
                                                <span class=\"prc-addon\">\$</span>
                                                <div id=\"loanamountslider\"></div>
                                                <div id=\"loanamountsteps\" class=\"steps\">
                                                    <span class=\"tick\" style=\"left: 0%;\">
                                                        |<br >
                                                        <span class=\"marker\">0</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 16.67%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$500,000</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 33.34%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$1M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 50%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$1.5M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 66.67%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$2M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 83.34%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$2.5M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 100%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$3</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"pbox\">
                                            <div class=\"lamount\">
                                                <label for=\"leftamount\" class=\"orange\"><strong>Remaining Balance on Mortgage (\$)</strong> </label>
                                                <span></span>
                                            </div>
                                            <div class=\"datafeild\">
                                                <input id=\"leftamount\" name=\"leftamount\" value=\"\" type=\"text\" >
                                                <span class=\"prc-addon\">\$</span>
                                                <div id=\"leftamountslider\"></div>
                                                <div id=\"leftamountsteps\" class=\"steps\">
                                                    <span class=\"tick\" style=\"left: 0%;\">
                                                        |<br >
                                                        <span class=\"marker\">0</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 16.67%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$500,000</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 33.34%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$1M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 50%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$1.5M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 66.67%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$2M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 83.34%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$2.5M</span>
                                                    </span>
                                                    <span class=\"tick\" style=\"left: 100%;\">
                                                        |<br >
                                                        <span class=\"marker\">\$3</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div style=\"text-align: center; padding: 10px;\">
                                            <strong><u>Available Equity</u></strong>
                                            <table style=\"text-align: center; width: 100%;\">
                                                <tr>
                                                    <td><label id=\"loan-amount\">0</label></td>
                                                    <td>X</td>
                                                    <td><label>80%</label></td>
                                                    <td>-</td>
                                                    <td><label id=\"left-amount\">0</label></td>
                                                    <td>&nbsp;</td>
                                                    <td>=</td>
                                                    <td>&nbsp;</td>
                                                    <td><label id=\"equity\">0</label></td>
                                                </tr>
                                                <tr>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(Property Value)</td>
                                                    <td>&nbsp;</td>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(Loan value ratio)</td>
                                                    <td>&nbsp;</td>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(Current Mortgage)</td>
                                                    <td>&nbsp;</td>
                                                    <td>=</td>
                                                    <td>&nbsp;</td>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(Equity Available)</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class=\"pbox1\">
                                            <div class=\"pbox pboxnew\">
                                                <div class=\"lamount\">
                                                    <label for=\"equityamount\" class=\"orange\" style=\"display: inline-table;\"><strong>How much Equity want to access? (\$)</strong> </label>
                                                    <span></span>
                                                </div>
                                                <div class=\"datafeild\">
                                                    <input id=\"equityamount\" name=\"equityamount\" value=\"15,000\" type=\"text\" disabled=\"disabled\" >
                                                    <span class=\"prc-addon\">\$</span>
                                                    <div id=\"equityamountslider\"></div>
                                                    <div id=\"equityamountsteps\" class=\"steps\">
                                                        <span class=\"tick\" style=\"left: 0%;\">
                                                            |<br >
                                                            <span class=\"marker\">0</span>
                                                        </span>
                                                        <span class=\"tick\" style=\"left: 100%;\">
                                                            |<br >
                                                            <span class=\"marker\">Max Equity</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"clear\"></div>
                                        <div style=\"text-align: center; padding: 10px;\">
                                            <strong><u>New Mortgage Amount</u></strong>
                                            <table style=\"text-align: center; width: 100%;\">
                                                <tr>
                                                    <td><label id=\"curmort\">0</label></td>
                                                    <td>+</td>
                                                    <td><label id=\"add-equity\">0</label></td>
                                                    <td>&nbsp;</td>
                                                    <td>=</td>
                                                    <td>&nbsp;</td>
                                                    <td><label id=\"new-mort\">0</label></td>
                                                </tr>
                                                <tr>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(Current Mortgage)</td>
                                                    <td>&nbsp;</td>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(Additional Equity)</td>
                                                    <td>&nbsp;</td>
                                                    <td>=</td>
                                                    <td>&nbsp;</td>
                                                    <td style=\"font-size: 15px; padding-top: 10px;\">(New Mortgage)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class=\"clear\"></div>
                            <div class=\"mortapb\" style=\"margin-top: 35px;\">
                                <a href=\"#\" class=\"an-button\" data-toggle=\"modal\" data-target=\"#agentModal1\">Apply Now</a>";
        // line 245
        echo "                                <a href=\"";
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
        // line 263
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                    <li><a href=\"";
        // line 264
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                    <li><a href=\"";
        // line 265
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                    <li><a href=\"";
        // line 266
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>

                                    <li><a href=\"";
        // line 268
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                    <li><a href=\"";
        // line 269
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                    <li><a href=\"";
        // line 270
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                    <li><a href=\"";
        // line 271
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                    <li><a href=\"";
        // line 272
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                </ul>
                            </li>
                            <li>
                                <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                <ul class=\"children\">";
        // line 279
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 280
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "                                </ul>
                            </li>
                            <li>
                                <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                <ul class=\"children\">";
        // line 288
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 289
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                                </ul>
                            </li>
                            <li>
                                <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                <ul class=\"children\">";
        // line 297
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 298
                echo "                                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                                </ul>
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
        // line 312
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
        <script  src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.tabs.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.loadmask.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"/bundles/acmedemo/js/globalize.min.js\"></script>
        <script  src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/refinancemort_ratetrade.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script  src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/exporting.js"), "html", null, true);
        echo "\"></script> 

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
                                        <input type=\"text\" class=\"form-control required\" name=\"urName\" id=\"urName\" placeholder=\"Enter Name\" >
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"phoneNumber\"><i class=\"fa fa-mobile\"></i> &nbsp; Phone Number: *</label>
                                        <input type=\"text\" class=\"form-control required\" name=\"phoneNumber\" id=\"phonenUmber\" placeholder=\"Enter Phone Number\" >
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"besttime\"><i class=\"fa fa-clock-o\"></i> &nbsp;Best Time to Call: *</label>
                                        <select name=\"bestTime\" id=\"bestTime\" class=\"form-control required\">
                                            <option value=\"anytime\">Any Time</option>
                                            <option value=\"morning\">Morning</option>
                                            <option value=\"afternoon\">Afternoon</option>
                                            <option value=\"evening\">Evening</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"forEmail\"><i class=\"fa fa-envelope\"></i> &nbsp;Email Address: *</label>
                                        <input type=\"text\" class=\"form-control\" name=\"emailId\" id=\"EmailId\" placeholder=\"Enter Email Address\" >
                                    </div>
                                </div>

                                <div class=\"col-xs-12 col-sm-6\">
                                    <div class=\"form-group\">
                                        <label for=\"agentLocation\"><i class=\"fa fa-map-marker\"></i> &nbsp;Location: *</label>
                                        <input type=\"text\" name=\"agentLocationName\" id=\"agentLocationName\" class=\"form-control\" value=\"\" placeholder=\"Seach City\" >
                                        <select name=\"agentLocation\" id=\"agentLocation\" class=\"form-control required\" onClick=\"getPop()\" size=\"5\" style=\"display: none;\">";
        // line 366
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                // line 367
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 369
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 371
        echo "                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"lookingfor\"><i class=\"fa fa-home\"></i> &nbsp;I am Looking For: *</label>
                                        <select name=\"lookingFor\" id=\"lookingFor\" class=\"form-control required\">
                                            <option value=\"\">Please Select</option>
                                            <option value=\"buying\">Buying</option>
                                            <option value=\"renew-mortgage\">Renew Mortgage</option>
                                            <option value=\"debt-consolidation\">Debt Consolidation</option>
                                            <option value=\"refinancing\" selected>Refinancing</option>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <br >
                                        <input type=\"hidden\" id=\"rate-request\" value=\"\" >
                                        <button type=\"button\" class=\"btn btn-primary lead-submit\">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\"></div>
        </div>
    </div>
</div>
 <script>
    \$('#locationName').click(function(e) {
        \$('.loclist').show(100);
    });
    \$('.loclist').blur(function(e) {
        \$(this).hide(100);
    });
    \$('#fixedBtn').click(function(e) {
        if (\$(this).hasClass('active-btn'))
        {
            e.preventDefault();

        }
        else
        {
            \$(this).addClass('active-btn');
            \$('#variableBtn').removeClass('active-btn');
            \$('#variaTab').hide(100);
            \$('#fixedTab').show(100);

        }
    });
    \$('#variableBtn').click(function(e) {
        if (\$(this).hasClass('active-btn'))
        {
            e.preventDefault();
        }
        else
        {
            \$(this).addClass('active-btn');
            \$('#fixedBtn').removeClass('active-btn');
            \$('#fixedTab').hide(100);
            \$('#variaTab').show(100);
        }
    });

    function getSelected() {

        document.getElementById('locationName').value = document.getElementById('locationList').value;

        \$('#locationList').hide(100);
    }

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
        // line 485
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
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:mortgage-refinance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  763 => 485,  647 => 371,  636 => 369,  629 => 367,  624 => 366,  579 => 323,  575 => 322,  571 => 321,  567 => 320,  563 => 319,  559 => 318,  554 => 316,  550 => 315,  546 => 314,  542 => 313,  538 => 312,  526 => 300,  515 => 298,  510 => 297,  503 => 291,  492 => 289,  487 => 288,  480 => 282,  469 => 280,  464 => 279,  455 => 272,  451 => 271,  447 => 270,  443 => 269,  439 => 268,  434 => 266,  430 => 265,  426 => 264,  422 => 263,  400 => 245,  242 => 88,  238 => 86,  236 => 85,  216 => 66,  196 => 46,  188 => 39,  184 => 38,  180 => 37,  176 => 36,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  145 => 28,  127 => 20,  114 => 19,  98 => 15,  85 => 14,  71 => 12,  58 => 11,  45 => 10,  40 => 8,  24 => 4,  19 => 1,);
    }
}

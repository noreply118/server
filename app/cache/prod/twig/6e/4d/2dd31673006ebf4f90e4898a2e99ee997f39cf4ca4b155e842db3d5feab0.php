<?php

/* MainRatetradeBundle:Default:payment-analyzer.html.twig */
class __TwigTemplate_6e4d2dd31673006ebf4f90e4898a2e99ee997f39cf4ca4b155e842db3d5feab0 extends Twig_Template
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "26")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:site\" content=\"@ratetrade\">
        <meta name=\"twitter:creator\" content=\"@ratetrade\"> 
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/jquery-ui.css\">";
        // line 45
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
    <!-- /HEADER -->
 <!-- CONTENT AREA -->
<div class=\"content-area\">
    <section class=\"page-section breadcrumbs text-right\">
        <div class=\"container\">
            <div class=\"page-header\">
                <h1 class=\"entrytitle\">Mortgage Payment Analyzer Calculator Canada</h1>
            </div>
            <ul class=\"breadcrumb\">
                <li>Home</li>
                <li>Calculator</li>
                <li class=\"active\">Payment Analyzer Calculator</li>
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
                    <article class=\"post-wrap\">
                        <div class=\"post-media\">
                            <div class=\"content-boxes framecontent\">
                                <form>
                                    <div class=\"pboxheading\">PAYMENT ANALYZER CALCULATOR</div>
                                    <div class=\"pbox\">
                                        <div class=\"sep lint\">
                                            <label for=\"loanamount\" class=\"orange\"><strong>Mortgage Amount (\$)</strong> </label>
                                            <span></span>
                                        </div>
                                        <div class=\"datafeild\">
                                            <label class=\"property-error errorc\" style=\"color: #993a00;\"></label>
                                            <input id=\"loanamount\" name=\"loanamount\" value=\"\" type=\"text\">
                                            <span class=\"prc-addon\">\$</span>
                                            <div id=\"loanamountslider\"></div>
                                            <div id=\"loanamountsteps\" class=\"steps\">
                                                <span class=\"tick\" style=\"left: 0%;\">
                                                    |<br>
                                                    <span class=\"marker\">0</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 16.67%;\">
                                                    |<br>
                                                    <span class=\"marker\">\$500,000</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 33.34%;\">
                                                    |<br>
                                                    <span class=\"marker\">\$1M</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 50%;\">
                                                    |<br>
                                                    <span class=\"marker\">\$1.5M</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 66.67%;\">
                                                    |<br>
                                                    <span class=\"marker\">\$2M</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 83.34%;\">
                                                    |<br>
                                                    <span class=\"marker\">\$2.5M</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 100%;\">
                                                    |<br>
                                                    <span class=\"marker\">\$3</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"pbox\">
                                        <div class=\"sep lint\">
                                            <label for=\"loanterm\" class=\"orange\"><strong class=\"orange\">Ammortization Period (Yr)</strong> </label>
                                            <span></span>
                                        </div>
                                        <div class=\"datafeild\">
                                            <label class=\"ammort-error errorc\" style=\"color: #993a00;\"></label>
                                            <input id=\"loanterm\" name=\"loanterm\" value=\"\" type=\"text\">
                                            <span class=\"prc-addon\">Yr</span>
                                            <div id=\"loantermslider\"></div>
                                            <div class=\"steps\">
                                                <span class=\"tick\" style=\"left: 0%;\">
                                                    |<br>
                                                    <span class=\"marker\">0</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 19.67%;\">
                                                    |<br>
                                                    <span class=\"marker\">5</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 39.8%;\">
                                                    |<br>
                                                    <span class=\"marker\">10</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 59.8%;\">
                                                    |<br>
                                                    <span class=\"marker\">15</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 79.67%;\">
                                                    |<br>
                                                    <span class=\"marker\">20</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 100%;\">
                                                    |<br>
                                                    <span class=\"marker\">25</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"pbox pboxnew\">
                                        <div class=\"sep lint\">
                                            <label for=\"mortrate\" class=\"orange\"><strong class=\"orange\">Mortgage Rate (%)</strong> </label>
                                            <span></span>
                                        </div>
                                        <div class=\"datafeild\">
                                            <label class=\"mortrate-error errorc\" style=\"color: #993a00;\"></label>
                                            <input id=\"mortrate\" name=\"mortrate\" value=\"\" type=\"text\">
                                            <span class=\"prc-addon\">%</span>
                                            <div id=\"mortrateslider\"></div>
                                            <div class=\"steps\">
                                                <span class=\"tick\" style=\"left: 0%;\">
                                                    |<br>
                                                    <span class=\"marker\">0</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 16.67%;\">
                                                    |<br>
                                                    <span class=\"marker\">1.75</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 33.34%;\">
                                                    |<br>
                                                    <span class=\"marker\">3.5</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 50%;\">
                                                    |<br>
                                                    <span class=\"marker\">5</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 66.67%;\">
                                                    |<br>
                                                    <span class=\"marker\">6.75</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 83.34%;\">
                                                    |<br>
                                                    <span class=\"marker\">8.5</span>
                                                </span>
                                                <span class=\"tick\" style=\"left: 100%;\">
                                                    |<br>
                                                    <span class=\"marker\">10</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class=\"box-12\" style=\"padding-bottom: 35px; text-align: center;\">
                                    <a href=\"#\" class=\"an-button payment-ana\" style=\"min-width: 30%;\">Submit</a>
                                </div>
                                <div class=\"box-full payresult\">
                                    <table id=\"ana-result\">
                                        <tr class=\"aprow\">
                                            <td><strong style=\"color: rgb(127, 0, 135);\">&nbsp;</strong></td>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Monthly</span></td>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Semi Monthly</span></td>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Bi Weekly</span></td>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Accelerated Bi Weekly</span></td>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Weekly</span></td>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Accelerated Weekly</span></td>
                                        </tr>
                                        <tr class=\"aprow2\">
                                            <td><strong style=\"color: rgb(127, 0, 135);\">Payment</strong></td>
                                            <td><span class=\"emi-monthly\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"emi-semi_monthly\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"emi-bi_weekly\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"emi-acc_bi_weekly\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"emi-weekly\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"emi-acc_weekly\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr class=\"aprow2\">
                                            <td><strong style=\"color: rgb(127, 0, 135);\">Ammortization</strong></td>
                                            <td><span class=\"monthly-ammort\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"semi_monthly-ammort\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"bi_weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"acc_bi_weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                            <td><span class=\"acc_weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class=\"box-full payresult1\" style=\"display: none;\">
                                    <table id=\"ana-result1\">
                                        <tr>
                                            <th coslspan=\"2\"><strong style=\"color: rgb(127, 0, 135);\">Payment</strong></th>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Monthly</span>
                                            <br>
                                            <span class=\"emi-monthly\" style=\"font-size: 15px;\"></span></td>
                                          
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Semi Monthly</span>
                                           <br><span class=\"emi-semi_monthly\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Bi Weekly</span>
                                            <br><span class=\"emi-bi_weekly\" style=\"font-size: 15px;\"></span></td>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Accelerated Bi Weekly</span>
                                            <br><span class=\"emi-acc_bi_weekly\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Weekly</span>
                                            <br><span class=\"emi-weekly\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Accelerated Weekly</span>
                                            <br><span class=\"emi-acc_weekly\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <th colspan=\"2\"><strong style=\"color: rgb(127, 0, 135);\">Ammortization</strong></th>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Monthly</span>
                                            <br><span class=\"monthly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Semi Monthly</span>
                                            <br><span class=\"semi_monthly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Bi Weekly</span>
                                            <br><span class=\"bi_weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Accelerated Bi Weekly</span>
                                            <br><span class=\"acc_bi_weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Weekly</span>
                                            <br><span class=\"weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style=\"color: rgb(35, 98, 2);\">Accelerated Weekly</span>
                                            <br><span class=\"acc_weekly-ammort\" style=\"font-size: 15px;\"></span></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class=\"mortapb\">
                                    <a href=\"#\" class=\"an-button\" data-toggle=\"modal\" data-target=\"#agentModal1\">Apply Now</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mortgage_rates", array("target" => "best", "ratetype" => "fixed")), "html", null, true);
        echo "\" class=\"an-button\">Best Available Rates</a>
                                </div>
                            </div>
                        </div>
                    </article>
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
        // line 312
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                        <li><a href=\"";
        // line 313
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                        <li><a href=\"";
        // line 314
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                        <li><a href=\"";
        // line 315
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>

                                        <li><a href=\"";
        // line 317
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                        <li><a href=\"";
        // line 318
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                        <li><a href=\"";
        // line 319
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                        <li><a href=\"";
        // line 320
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                        <li><a href=\"";
        // line 321
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 328
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 329
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 337
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 338
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 346
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 347
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dynmaicurl", array("urlparam" => $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "pageUrl"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "category"), "html", null, true);
                echo "</a></li>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
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
        // line 361
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
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
                                            <input type=\"text\" class=\"form-control required\" name=\"phoneNumber\" id=\"phonenUmber\" placeholder=\"Enter Phone Number\">
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
                                            <input type=\"text\" class=\"form-control\" name=\"emailId\" id=\"EmailId\" placeholder=\"Enter Email Address\">
                                        </div>
                                    </div>

                                    <div class=\"col-xs-12 col-sm-6\">
                                        <div class=\"form-group\">
                                            <label for=\"agentLocation\"><i class=\"fa fa-map-marker\"></i> &nbsp;Location: *</label>
                                            <input type=\"text\" name=\"agentLocationName\" id=\"agentLocationName\" class=\"form-control\" value=\"\" placeholder=\"Seach City\">
                                            <select name=\"agentLocation\" id=\"agentLocation\" class=\"form-control required\" onClick=\"getPop()\" size=\"5\" style=\"display: none;\">";
        // line 403
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                // line 404
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 406
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"lookingfor\"><i class=\"fa fa-home\"></i> &nbsp;I am Looking For: *</label>
                                            <select name=\"lookingFor\" id=\"lookingFor\" class=\"form-control required\">
                                                <option value=\"\">Please Select</option>
                                                <option value=\"buying\" selected>Buying</option>
                                                <option value=\"renew-mortgage\">Renew Mortgage</option>
                                                <option value=\"debt-consolidation\">Debt Consolidation</option>
                                                <option value=\"refinancing\">Refinancing</option>
                                            </select>
                                        </div>
                                        <div class=\"form-group\">
                                            <br>
                                            <input type=\"hidden\" id=\"rate-request\" >
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
</div>
   
       <script  src=\"/bundles/acmedemo/js/jquery.ui.widget.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.ui.accordion.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.ui.tabs.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.loadmask.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/globalize.min.js\"></script>
<script  src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/analyser_ratetrade.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/highcharts.js"), "html", null, true);
        echo "\"></script>
<script  src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/exporting.js"), "html", null, true);
        echo "\"></script>
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
        // line 490
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 491
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                echo "  
                                                            <option value=\"";
                // line 492
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 494
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
        // line 497
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
        // line 545
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
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:payment-analyzer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 545,  772 => 497,  761 => 494,  755 => 492,  751 => 491,  747 => 490,  701 => 446,  697 => 445,  693 => 444,  689 => 443,  685 => 442,  649 => 408,  638 => 406,  631 => 404,  626 => 403,  582 => 361,  570 => 349,  559 => 347,  554 => 346,  547 => 340,  536 => 338,  531 => 337,  524 => 331,  513 => 329,  508 => 328,  499 => 321,  495 => 320,  491 => 319,  487 => 318,  483 => 317,  478 => 315,  474 => 314,  470 => 313,  466 => 312,  445 => 294,  212 => 63,  194 => 45,  188 => 39,  184 => 38,  180 => 37,  176 => 36,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  145 => 28,  127 => 20,  114 => 19,  98 => 15,  85 => 14,  71 => 12,  58 => 11,  45 => 10,  40 => 8,  24 => 4,  19 => 1,);
    }
}

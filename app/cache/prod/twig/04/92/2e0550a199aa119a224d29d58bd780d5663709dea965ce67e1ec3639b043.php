<?php

/* MainRatetradeBundle:Default:homepage.html.twig */
class __TwigTemplate_04922e0550a199aa119a224d29d58bd780d5663709dea965ce67e1ec3639b043 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"geo.region\" content=\"CA\">
    <title>";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "ptitle"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "mdescription"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\" >
    <meta name=\"keywords\" content=\"Current Mortgage Rates Canada, Best Mortgage Rates Canada 5 Years Fixed, Mortgage Rates Canada 2024, Scotiabank Mortgage Rates, Mortgage Rates Ontario, Rbc Mortgage Rates, Td Mortgage Rates, Cibc Mortgage Rates.\">
    <meta name=\"robots\" content=\"index, follow\">
    <meta name=\"title\" content=\"";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "ptitle"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">  
    <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">";
        // line 16
        echo "    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"144x144\">
    <meta property=\"og:type\" content=\"article\">
    <meta name=\"twitter:card\" content=\"summary\">
    <meta property=\"og:site_name\" content=\"Rate Trade\">
    <meta property=\"og:title\" content=\"";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "ptitle"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
    <meta property=\"og:description\" content=\"";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "mdescription"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
    <meta name=\"twitter:title\" content=\"";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "ptitle"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
    <meta name=\"twitter:description\" content=\"";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termds"]) ? $context["termds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["td"]) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["td"]) ? $context["td"] : null), "mdescription"), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['td'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
    <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\">
    <meta name=\"twitter:site\" content=\"@ratetrade\">
    <meta name=\"twitter:creator\" content=\"@ratetrade\">   
    <link rel=\"canonical\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\"> 
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" >
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/ico/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"https://www.ratetrade.ca\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\" >
    <script defer src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\" ></script>";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
    <!-- /HEADER -->
    <!-- CONTENT AREA -->
    <div class=\"content-area\">
        <!-- PAGE -->";
        // line 382
        echo "        <!-- /PAGE -->
        <!-- PAGE -->
        <section class=\"page-section ratesec\">
            <div class=\"container\">
                
                <h1 class=\"section-title wow fadeInUp\" data-wow-offset=\"70\" data-wow-delay=\"100ms\">
                    <small>Today's Best Rates</small>
                    <span>Select Best Offers for You</span>
                </h1>
                <div class=\"tabs wow fadeInUp\" data-wow-offset=\"70\" data-wow-delay=\"300ms\">
                    <ul id=\"tabs\" class=\"nav\">
                        <li class=\"active\"><h2><a href=\"#tab-1\" data-toggle=\"tab\">Fixed Mortgage Rates</a></h2></li>
                        <li class=\"\"><h2><a href=\"#tab-3\" data-toggle=\"tab\">Variable Mortgage Rates</a></h2></li>
                    </ul>
                </div>
                <div class=\"tab-content wow fadeInUp\" data-wow-offset=\"70\" data-wow-delay=\"500ms\">
                    <!-- tab 1 -->
                    <div class=\"tab-pane active fade in\" id=\"tab-1\">
                        <div class=\"swiper swiper--offers-best\">
                            <div class=\"swiper-container\" style=\"height: 325px !important;\">
                                <div class=\"swiper-wrapper\" >
                                    <!-- Slides -->
                                    <!-- Slides -->
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px;font-weight:600\"><img src=\"https://www.ratetrade.ca/bundles/assets/img/logo.png?format=webg\" class=\"mediaimage\" alt=\"Ratetrade\">-- Ratetrade --</p>
                                                <a class=\"media-link\">
                                                 6.39<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">1 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=6.39&amp;term=1+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=6.39\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px;font-weight:600\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/canadian-lender.webp?format=webg\" class=\"mediaimage\" alt=\"Alterna Savings\">-- Alterna Savings --</p>
                                                <a class=\"media-link\">
                                                 5.53<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">2 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=5.53&amp;term=2+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=5.53\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- Slides -->
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/Alterna-Savings.png?format=webg\" class=\"mediaimage\" alt=\"Alterna Savings\">--Alterna Savings --</p>
                                                <a class=\"media-link\">
                                                 4.83<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">3 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=4.83&amp;term=3+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=4.83\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- Slides -->
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/canadian-lender.webp?format=webg\" class=\"mediaimage\" alt=\"Canadian Lender\">-- Canadian Lender --</p>
                                                <a class=\"media-link\">
                                                4.83<sup>%</sup>
                                                    
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">4 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=4.83&amp;term=4+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=4.83\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- Slides -->
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/equitable-bank.png?format=webg\" class=\"mediaimage\" alt=\"Equitable\">-- Equitable Bank --</p>
                                                <a class=\"media-link\">
                                                4.64<sup>%</sup>
                                                    
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">5 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=4.64&amp;term=5+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=4.64\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>";
        // line 517
        echo "                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/bank-of-montreal.png?format=webg\" class=\"mediaimage\" alt=\"Bank of Montreal\">-- Bank of Montreal --</p>
                                                <a class=\"media-link\">
                                                 5.54<sup>%</sup>
                                                    
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">6 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=5.54&amp;term=6+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=5.54\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>";
        // line 540
        echo "                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/canadian-lender.webp?format=webg\" class=\"mediaimage\" alt=\"mediaimage\">-- Canadian Lender --</p>
                                                <a class=\"media-link\">
                                                 4.93<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">7 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=4.93&amp;term=7+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=4.93\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>";
        // line 606
        echo "                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/bank-of-montreal.png?format=webg\" class=\"mediaimage\" alt=\"Bank of Montreal\">-- Bank of Montreal --</p>
                                                <a class=\"media-link\">
                                                 5.73<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">10 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=5.73&amp;term=10+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=5.73\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>";
        // line 628
        echo "                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/rbc-royal-bank.webp?format=webg\" class=\"mediaimage\" alt=\"RBC Royal Bank\">-- RBC Royal Bank --</p>
                                                <a class=\"media-link\">
                                                 7.48<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">25 Years &nbsp;Fixed</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=7.48&amp;term=25+years&amp;type=Fixed\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=7.48\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-button-next\"><i class=\"fa fa-angle-right\"></i></div>
                            <div class=\"swiper-button-prev\"><i class=\"fa fa-angle-left\"></i></div>
                        </div>
                    </div>
                    <!-- tab 3 -->
                    <div class=\"tab-pane fade\" id=\"tab-3\">
                        <div class=\"swiper swiper--offers-economic\">
                            <div class=\"swiper-container\">
                                <div class=\"swiper-wrapper\">
                                    <!-- Slides -->
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                            <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/ICICI-Bank-Canada.png?format=webg\" class=\"mediaimage\" alt=\"ICICI Bank\">-- ICICI Bank --</p>
                                                <a class=\"media-link\">
                                                 6.04<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">3 YR VARIABLE</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=6.04&amp;term=3+Year&amp;type=Variable\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=6.04\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <div class=\"thumbnail no-border no-padding thumbnail-car-card\">
                                           <div class=\"media\"><p class=\"d-none\" style=\"display:none;color:#fff;text-align:center;font-size:14px\"><img src=\"https://www.ratetrade.ca/symfonyratetrade/web/bundles/assets/php/bank-logo/canadian-lender.webp?format=webg\" class=\"mediaimage\" alt=\"Canadian Lender\">-- Canadian Lender --</p>
                                                <a class=\"media-link\">
                                                 4.63<sup>%</sup>
                                                </a>
                                            </div>
                                            <div class=\"caption text-center\">
                                                 <div class=\"caption-text\">5 YR VARIABLE</div>
                                                <div class=\"buttons\">
                                                    <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates?rate=4.63&amp;term=5+Year&amp;type=Variable\">Compare</a>
                                                </div>
                                                <table class=\"table\">
                                                    <tr>
                                                        <td><i class=\"fa fa-crosshairs\"></i> ADD WISHLIST</td>
                                                        <td><a href=\"https://www.ratetrade.ca/apply-now?rate=4.63\"><i class=\"fa fa-share\"></i> inquire</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class=\"swiper-button-next\"><i class=\"fa fa-angle-right\"></i></div>
                            <div class=\"swiper-button-prev\"><i class=\"fa fa-angle-left\"></i></div>
                        </div>
                    </div>
                    <div class=\"buttons\">
                        <a class=\"btn btn-theme ripple-effect\" href=\"./compare-mortgage-rates\" style=\"margin: 5% 0% 0% 45%;\">Compare all</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
    <!-- PAGE -->
        <section class=\"page-section dark\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 wow fadeInLeft\" data-wow-offset=\"200\" data-wow-delay=\"100ms\">
                        <h3 class=\"section-title text-left\">
                            <small>What Do You Know About Us</small>
                            <span>Why Choose Us?</span>
                        </h3>
                        <p>Ratetrade.ca is your one-stop shop for doing a quick search and easy comparison of prevailing <b>mortgage rates in Canada</b> to make smart financial decisions. We share knowledge, information, expert advice and easy to use <b>mortgage comparison tools</b> to find you the ideal mortgage rate. When you apply for a mortgage using our portal, we represent you to several reputed lenders and banks in Canada to assure you can compare from the best mortgage options available in the market. </p>
                        <ul class=\"list-icons\">
                            <li><i class=\"fa fa-check-circle\"></i>Resources</li>
                            <li><i class=\"fa fa-check-circle\"></i>Comparison Tools</li>
                            <li><i class=\"fa fa-check-circle\"></i>Find the lowest mortgage rates in Canada</li>
                        </ul>
                    </div>
                    <div class=\"col-md-6 wow fadeInRight\" data-wow-offset=\"200\" data-wow-delay=\"300ms\">
                        <div class=\"owl-carousel img-carousel\">
                            <div class=\"item\"><a href=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/img/preview/slider/slide-775x500x1.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/img/preview/slider/slide-775x500x1.jpg?format=webg"), "html", null, true);
        echo "\" alt=\"Ratetrade Mortgage Rates in Canada\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 737
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/img/preview/slider/slide-775x500x1.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/img/preview/slider/slide-775x500x1.jpg?format=webg"), "html", null, true);
        echo "\" alt=\"Ratetrade Mortgage Rates in Canada\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/img/preview/slider/slide-775x500x1.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/img/preview/slider/slide-775x500x1.jpg?format=webg"), "html", null, true);
        echo "\" alt=\"Ratetrade Mortgage Rates in Canada\"></a></div>
                            <div class=\"item\"><a href=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/img/preview/slider/slide-775x500x1.jpg"), "html", null, true);
        echo "\" data-gal=\"prettyPhoto\"><img class=\"img-responsive\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/assets/img/preview/slider/slide-775x500x1.jpg?format=webg"), "html", null, true);
        echo "\" alt=\"Ratetrade Mortgage Rates in Canada\"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
         <!-- PAGE -->
        <section class=\"page-section blogp\">
            <div class=\"container\">
                <h3 class=\"section-title wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"100ms\">
                    <span>Recent Blog Posts</span>
                </h3>
                <div class=\"row\">
                    <div id=\"responsecontainer\"></div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
        <!-- PAGE -->
        <section class=\"page-section testimonials\">
            <h6 style=\"display:none\">Ratetrade</h6>
            <div class=\"container wow fadeInUp\" data-wow-offset=\"70\" data-wow-delay=\"500ms\">
                <div class=\"testimonials-carousel\">
                    <div class=\"owl-carousel\" id=\"testimonials\">
                        <div class=\"testimonial\">
                            <div class=\"media\">        
                                <div class=\"media-body\">
                                    <div class=\"testimonial-text\">Have not enough words to extend my gratitude for the help that my family and I got from this site. Wish you all the best for all your efforts in providing people with the best of the rates. And promise you to refer all those who I know if they are looking for the best insurance and mortgage plan. Thank you so much for all your hard work in putting the things together.</div>
                                    <div class=\"testimonial-name\">Samuel <span class=\"testimonial-position\"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"testimonial\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"testimonial-text\">Mortgage renewal doesn't seem to be that easy the way you people have made. I was thinking it is going to be a tough game, but you people have kept it easy. Thanks very much for all your efforts.</div>
                                    <div class=\"testimonial-name\">Victor <span class=\"testimonial-position\"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
        <!-- PAGE -->
        <section class=\"page-section\">
            <div class=\"container\">
                <h3 class=\"section-title wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"100ms\">
                    <small>See What People Ask to Us</small>
                    <span>FAQS</span>
                </h3>
                <div class=\"row\">
                    <div class=\"col-md-6 wow fadeInLeft\" data-wow-offset=\"200\" data-wow-delay=\"200ms\">
                        <!-- FAQ -->
                        <div class=\"panel-group accordion\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                            <!-- faq1 -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"heading1\">
                                    <h4 class=\"panel-title\">
                                        <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\" aria-expanded=\"true\" aria-controls=\"collapse1\">
                                            <span class=\"dot\"></span> How Much Can You Afford for a New Home?
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapse1\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading1\">
                                    <div class=\"panel-body\">
                                        Are you financially ready to buy a home? While hunting for a home in Canada, a rule of thumb often followed is that one can afford to spend three times of his/her gross household income. 
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                            <!-- faq2 -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"heading2\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse2\" aria-expanded=\"false\" aria-controls=\"collapse2\">
                                            <span class=\"dot\"></span> What is Mortgage Default Insurance?
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapse2\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading2\">
                                    <div class=\"panel-body\">
                                       Mortgage default insurance, popularly known as CMHC insurance in Canada is mandatory on high ratio mortgages, that is, mortgages with a down payment of 20 percent or less.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq2 -->
                            <!-- faq3 -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"heading3\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse3\" aria-expanded=\"false\" aria-controls=\"collapse3\">
                                            <span class=\"dot\"></span> Why use RRSP for Buying your First Home?
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapse3\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading3\">
                                    <div class=\"panel-body\">
                                        RRSP enables first time home buyer to use his existing sources to make down payment. It may also allow the buyer to accumulate 20% as down payment, so he doesn't need to pay for mortgage default insurance premiums in future. 
                                    </div>
                                </div>
                            </div>
                            <!-- /faq3 -->
                        </div>
                        <!-- /FAQ -->
                    </div>
                    <div class=\"col-md-6 wow fadeInRight\" data-wow-offset=\"200\" data-wow-delay=\"200ms\">
                        <!-- FAQ -->
                        <div class=\"panel-group accordion\" id=\"accordion2\" role=\"tablist\" aria-multiselectable=\"true\">
                            <!-- faq1 -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"heading21\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse21\" aria-expanded=\"false\" aria-controls=\"collapse21\">
                                            <span class=\"dot\"></span> How Credit Score is Built?
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapse21\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading21\">
                                    <div class=\"panel-body\">
                                        A credit score built by a credit report prepared by credit reporting agencies in Canada. These are the private agencies engaged in collecting, storing and sharing information about how you use credit. 
                                    </div>
                                </div>
                            </div>
                            <!-- /faq1 -->
                            <!-- faq2 -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"heading22\">
                                    <h4 class=\"panel-title\">
                                        <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse22\" aria-expanded=\"true\" aria-controls=\"collapse22\">
                                            <span class=\"dot\"></span> How Much Will it Cost to Refinance?
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapse22\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"heading22\">
                                    <div class=\"panel-body\">
                                        Refinancing is often chosen an alternative by borrowers to either get a lower interest rate or access the equity out of their home. It is essential to know the cost of refinancing to take a calculated decision for refinancing.
                                    </div>
                                </div>
                            </div>
                            <!-- /faq2 -->
                            <!-- faq3 -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\" role=\"tab\" id=\"heading23\">
                                    <h4 class=\"panel-title\">
                                        <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse23\" aria-expanded=\"false\" aria-controls=\"collapse23\">
                                            <span class=\"dot\"></span> How to Calculate Debt Service Ratios?
                                        </a>
                                    </h4>
                                </div>
                                <div id=\"collapse23\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading23\">
                                    <div class=\"panel-body\">
                                      Gross debt service ratio and total debt service ratio are two essential figures considered by a lender to decide whether he should grant you a loan or not. 
                                    </div>
                                </div>
                            </div>
                            <!-- /faq3 -->
                        </div>
                        <!-- /FAQ -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
        <!-- PAGE -->
        <section class=\"page-section image homesc\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"100ms\">
                        <div class=\"thumbnail thumbnail-counto no-border no-padding\">
                            <div class=\"caption\">
                                <div class=\"caption-icon\"><i class=\"fa fa-heart\"></i></div>
                                <div class=\"caption-number\">5657</div>
                                <h4 class=\"caption-title\">Happy costumers</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"200ms\">
                        <div class=\"thumbnail thumbnail-counto no-border no-padding\">
                            <div class=\"caption\">
                                <div class=\"caption-icon\"><i class=\"fa fa-home\"></i></div>
                                <div class=\"caption-number\">657</div>
                                <h4 class=\"caption-title\">Mortgage Solution</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"300ms\">
                        <div class=\"thumbnail thumbnail-counto no-border no-padding\">
                            <div class=\"caption\">
                                <div class=\"caption-icon\"><i class=\"fa fa-flag\"></i></div>
                                <div class=\"caption-number\">1.255.657</div>
                                <h4 class=\"caption-title\">Technical Support</h4>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"400ms\">
                        <div class=\"thumbnail thumbnail-counto no-border no-padding\">
                            <div class=\"caption\">
                                <div class=\"caption-icon\"><i class=\"fa fa-comments-o\"></i></div>
                                <div class=\"caption-number\">1255</div>
                                <h4 class=\"caption-title\">Call Center Solutions</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->
        <!-- PAGE -->
        <section class=\"page-section image subscribe\">
            <div class=\"container\">
                <h3 class=\"section-title wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"100ms\">
                    <small>Stay On Top of Your Finances</small>
                    <span>Subscribe</span>
                </h3>
                <div class=\"row wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"200ms\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <p class=\"text-center\">Sign up to subscribe to our newsletter, receive alerts when rates change or schedule a reminder prior to the renewal of your insurance policy and/or mortgage. </p>
                        <!-- Subscribe form -->
                              <form id=\"MysubscribeForm\" class=\"form-subscribe\">
                                <div class=\"form-group\">
                                    <label for=\"formSubscribeEmail\"  class=\"sr-only\">Enter your email here</label>
                                    <input type=\"text\" class=\"form-control\"  id=\"formSubscribeEmail\" name=\"email\" placeholder=\"Enter your email here\" title=\"Email is required\" required>
                                </div>
                                <div id=\"formresponse\" class=\"formresponse\"></div>
                                <button type=\"submit\" name=\"submit\" class=\"btn btn-submit btn-theme ripple-effect btn-theme-dark subsc\" >Subscribe</button>
                            </form>
                        <!-- Subscribe form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /PAGE -->
        <!-- PAGE -->
        <section class=\"page-section contact dark\">
            <div class=\"container\">
                <!-- Get in touch -->
                <h3 class=\"section-title wow fadeInDown\" data-wow-offset=\"200\" data-wow-delay=\"100ms\">
                    <small>Feel Free to Say Hello!</small>
                    <span>Get in Touch With Us</span>
                </h3>
                <div class=\"row\">
                    <div class=\"col-md-6 wow fadeInLeft\" data-wow-offset=\"200\" data-wow-delay=\"200ms\">
                        <!-- Contact form -->
                         <form name=\"contact-form\" method=\"post\"  class=\"contact-form\" id=\"contact-form\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"outer required\">
                                        <div class=\"form-group af-inner has-icon\">
                                            <label class=\"sr-only\" for=\"name\">Name</label>
                                            <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" value=\"\" size=\"30\" data-toggle=\"tooltip\" title=\"Name is required\" class=\"form-control placeholder\">
                                            <span class=\"form-control-icon\"><i class=\"fa fa-user\"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"outer required\">
                                        <div class=\"form-group af-inner has-icon\">
                                            <label class=\"sr-only\" for=\"email\">Email</label>
                                            <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email\" value=\"\" size=\"30\" data-toggle=\"tooltip\" title=\"Email is required\" class=\"form-control placeholder\">
                                            <span class=\"form-control-icon\"><i class=\"fa fa-envelope\"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                            <div class=\"col-md-6\">
                            <div class=\"outer required\">
                                <div class=\"form-group af-inner has-icon\">
                                    <label class=\"sr-only\" for=\"phone\">Phone Number</label>
                                    <input type=\"tel\" name=\"phone\" id=\"phone\" placeholder=\"Contact Number\" value=\"\" size=\"30\" data-toggle=\"tooltip\" title=\"Contact Number is required\" class=\"form-control placeholder\">
                                    <span class=\"form-control-icon\"><i class=\"fa fa-phone\"></i></span>
                                </div>
                            </div>
                            </div>
                            <div class=\"col-md-6\">
                            <div class=\"outer required\">
                                <div class=\"form-group af-inner has-icon\">
                                    <label class=\"sr-only\" for=\"subject\">Subject</label>
                                    <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" value=\"\" size=\"30\" data-toggle=\"tooltip\" title=\"Subject is required\" class=\"form-control placeholder\">
                                    <span class=\"form-control-icon\"><i class=\"fa fa-bars\"></i></span>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class=\"form-group af-inner has-icon\">
                                <label class=\"sr-only\" for=\"input-message\">Message</label>
                                <textarea name=\"message\" id=\"input-message\" placeholder=\"Message\" rows=\"4\" cols=\"50\" data-toggle=\"tooltip\" title=\"Message is required\" class=\"form-control placeholder\"></textarea>
                                <span class=\"form-control-icon\"><i class=\"fa fa-bars\"></i></span>
                            </div>
                            <div class=\"outer required\">
                                <div class=\"form-group af-inner\">
                                    <input type=\"submit\" name=\"submit\" class=\"form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark\" id=\"submit_btn\" value=\"Send message\">
                                </div>
                            </div>
                        </form>
                        <!-- /Contact form -->
                    </div>
                    <div class=\"col-md-6 wow fadeInRight\" data-wow-offset=\"200\" data-wow-delay=\"200ms\">
                        <p>We are one of the best financial comparison platforms in Canada. We are on a mission to provide the best mortgage rate by making a virtual comparison between different rates offered by various lenders and top mortgage brokers of Canada.</p>
                        <ul class=\"media-list contact-list\">
                             <li class=\"media\">
                                <div class=\"media-left\"><i class=\"fa fa-home\"></i></div>
                                <div class=\"media-body\">Address: 2960 Drew Rd. Unit# 139, Mississauga </div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-left\"><i class=\"fa fa\"></i></div>
                                <div class=\"media-body\">ON L4T 0A5</div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-left\"><i class=\"fa fa-phone\"></i></div>
                                <div class=\"media-body\" onclick=\"location.href='tel:+19056760008'\">Support Phone: (905) 676 0008</div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-left\"><i class=\"fa fa-envelope\"></i></div>
                                <div class=\"media-body\">E mails: <span onclick=\"location.href='mailto:contact@ratetrade.ca'\">contact@ratetrade.ca</span>, <span onclick=\"location.href='mailto:info@ratetrade.ca'\">info@ratetrade.ca</span></div>
                            </li>
                            <li class=\"media\">
                                <div class=\"media-left\"><i class=\"fa fa-map-marker\"></i></div>
                                <div class=\"media-body\"><a href=\"https://maps.app.goo.gl/jBTR6ccJxL7HKZ637\" target=\"_blank\">View on The Map</a></div>
                            </li>
                        </ul>
                        <div id=\"contact\"></div>
                    </div>
                      <hr>
                        <p><b>Disclaimer :</b> Rates not guaranteed. My change based on your employment and credit history.</p>
                        <hr>
                </div>
                <!-- /Get in touch -->
            </div>
        </section>
        <!-- /PAGE -->
    </div>
    <!-- /CONTENT AREA -->
    <!-- FOOTER -->";
        // line 1097
        echo "    <!-- /FOOTER -->
 <footer class=\"footer\">
        <div class=\"footer-widgets\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3\">
                        <div class=\"widget\">
                            <h4 class=\"widget-title\">About Us</h4>
                            <p>We share knowledge, information, expert advice and easy to use mortgage comparison tools to find you the ideal mortgage rate. </p>
                            <ul><li class=\"media\" onclick=\"location.href='tel:+19056760008'\">(905) 676 0008</li></ul>
                            <ul class=\"social-icons\">
                                <li><a href=\"https://www.facebook.com/ratetrade/\" class=\"facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                <li><a href=\"https://x.com/ratetrade//\" class=\"twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"https://www.instagram.com/ratetrade\" class=\"instagram\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>
                                <li><a href=\"https://in.pinterest.com/ratetradepro/\" class=\"pinterest\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>
                            </ul>

                        </div>
                    </div>
                   
                    <div class=\"col-md-3\">
                        <div class=\"widget widget-categories\">
                            <h4 class=\"widget-title\">Resources</h4>
                            <ul>
                               
                                <li><a href=\"https://www.ratetrade.ca/buying-home-canada\">Buying Home in Canada</a></li>
                                <li><a href=\"https://www.ratetrade.ca/renewing-guide\">Renewing Your Mortgage</a></li>
                                <li><a href=\"https://www.ratetrade.ca/mortgage-refinancing-guide\">Mortgage Refinancing Guide</a></li>
                                <li><a href=\"https://www.ratetrade.ca/mortgage-information-center\">Mortgage Information Center</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"widget widget-categories\">
                            <h4 class=\"widget-title\">Community</h4>
                            <ul>
                                <li><a href=\"https://www.ratetrade.ca/mortgage-broker-signup\">Affiliated Partners</a></li>
                                <li><a href=\"https://www.ratetrade.ca/mortgage-broker-login\">Affiliate Login</a></li>
                                <li><a href=\"https://www.ratetrade.ca/blog\">Blog</a></li>
                                <li><a href=\"https://www.ratetrade.ca/contact-us\">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"widget\">
                            <h4 class=\"widget-title\">News Letter</h4>
                            <p>Sign up to subscribe to our newsletter, receive alerts when rates change or schedule a reminder</p>
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"Enter Your Mail\">
                                </div>
                                <div class=\"form-group\">
                                    <button class=\"btn btn-theme btn-theme-transparent\">Subscribe</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                    <br><br>
                          
                </div>
                 <hr >
                        <p><b>Disclaimer :</b> Rates not guaranteed. My change based on your employment and credit history.</p>
                        <hr >
            </div>
        </div>
        <div class=\"footer-meta\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-sm-12\">
                        <p class=\"btn-row text-center\">
                            <a href=\"https://www.facebook.com/ratetrade/\" class=\"btn btn-theme btn-icon-left facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i>FACEBOOK</a>
                            <a href=\"https://x.com/ratetrade/\" class=\"btn btn-theme btn-icon-left twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i>TWITTER</a>
                            <a href=\"https://instagram.com/ratetrade\" class=\"btn btn-theme btn-icon-left ripple-effect instagram wow fadeInDown\" data-wow-offset=\"20\" data-wow-delay=\"200ms\" target=\"_blank\"><i class=\"fa fa-instagram\" ></i>INSTAGRAM</a>
                            <a href=\"https://in.pinterest.com/ratetradepro/\" class=\"btn btn-theme btn-icon-left pinterest\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i>PINTEREST</a>
                            <a href=\"https://g.page/r/CWJrgIvZTNOvEBM/review\" class=\"btn btn-theme btn-icon-left google\"  target=\"_blank\"><i class=\"fa fa-google\"></i>GOOGLE</a>
                            <a href=\"https://www.linkedin.com/company/ratetrade\" class=\"btn btn-theme btn-icon-left ripple-effect linkedin wow fadeInDown\" data-wow-offset=\"20\" data-wow-delay=\"400ms\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i>LINKEDIN</a>
                        </p>
                       
                        <div class=\"copyright\">© 2025 Ratetrade.ca | All right reserved</div>
                       </div>

                </div>
            </div>
        </div>
    </footer>

    <div id=\"to-top\" class=\"to-top\"><i class=\"fa fa-angle-up\"></i></div>
<!-- /WRAPPER -->
<!-- JS Global -->
<script defer  src=\"";
        // line 1190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/superfish/js/superfish.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/jquery.sticky.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/jquery.smoothscroll.min.js"), "html", null, true);
        echo "\"></script>
<!--<script defer src=\"";
        // line 1199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>-->
<!--<script defer  src=\"";
        // line 1200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/wow/wow.min.js"), "html", null, true);
        echo "\"></script>-->
<script>
    // WOW - animated content
    //new WOW().init();
</script>
<script>
function validateEmail(email)
{
//  * This function validates whether an email address is in a valid format. *
//  * It uses a regular expression to check if the email address matches a specific pattern.  *
    var re = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
    return re.test(email);
}
// Click event for 'Get Rates' button
\$(document).on(\"click\", \".get-rates\", function(e)
{
    var ratetype = \$(\"select[name=ratetype]\").find(\"option:selected\").val();
    // Check Varible
    if (ratetype == 'variable')
    {
        // Redirect to variable mortgage rates page
        window.location.href = '";
        // line 1221
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "variable"));
        echo "';
    }
    else
    {
        // Redirect to variable mortgage rates page
        window.location.href = '";
        // line 1226
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "fixed"));
        echo "';
    }
});
// Click event for 'Enquiry' button
\$(document).on(\"click\", \"#equiryBtn\", function(e)
{
    // Redirect to variable Contact Us page
    window.location.href = '";
        // line 1233
        echo $this->env->getExtension('routing')->getPath("contact_us");
        echo "';
});
// Function to capitalize first letter of a string
function capitalizeFirstLetter(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}
// Input event for 'locationName' input field
\$('#locationName').on('input', function()
{
    // Getiing option based on input value
    \$('#locationList option:contains(' + capitalizeFirstLetter(this.value) + ')').eq(0).prop('selected', true);
});

// Click event for 'locationName' input field
\$('#locationName').click(function(e)
{
    \$('.loclist').show(100);
});
// Blur event for location list
\$('.loclist').blur(function(e)
{
    \$(this).hide(100);
});
// Click  event for 'fixedBtn' Button
\$('#fixedBtn').click(function(e)
{
    if (\$(this).hasClass('active-btn'))
    {
        // Do nothing if it's already active
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
// Click event for 'variableBtn' Button
\$('#variableBtn').click(function(e)
{
    if (\$(this).hasClass('active-btn'))
    {
        // Do nothing if it's already active 
        e.preventDefault();
    }
    else
    {
        // Add class
        \$(this).addClass('active-btn');
        // Remove class
        \$('#fixedBtn').removeClass('active-btn');
        \$('#fixedTab').hide(100);
        \$('#variaTab').show(100);
    }
});
// Call Function 'Get Selected'
function getSelected()
{
    //document.getElementById('locationName').value = document.getElementById('locationList').text;
    \$('#locationName').val(\$('option:selected', \$('#locationList')).text());
    \$('#locationList').hide(100);
}
// Fixed
// Variable
const yearValues={  Fixed: ['1 year','2 year','3 year','4 year','5 year','6 year','7 year','8 year','9 year','10 year','25 year'],Variable : ['3 year','5 year'] };
function showYears() {
        const rateType = document.getElementById(\"rate-type\").value;
        const yearSelect = document.getElementById(\"year\");
        // alert(rateType);

        yearSelect.innerHTML = '<option value=\"\">Select a year</option>';

        if (rateType) {
          yearValues[rateType].forEach(year => {
            const option = document.createElement(\"option\");
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
          });
        }
}
</script>
<script defer  src=\"";
        // line 1318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/js/swiper.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/datetimepicker/js/moment-with-locales.min.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script defer src=\"";
        // line 1322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/js/theme-ajax-mail.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/js/theme.js"), "html", null, true);
        echo "\"></script>
<script defer src=\"";
        // line 1324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/js/ajax-jquery.js"), "html", null, true);
        echo "\"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script defer src=\"";
        // line 1327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<!--<![endif]-->
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1137 => 1327,  1131 => 1324,  1127 => 1323,  1123 => 1322,  1118 => 1320,  1114 => 1319,  1110 => 1318,  1022 => 1233,  1012 => 1226,  1004 => 1221,  980 => 1200,  976 => 1199,  972 => 1198,  968 => 1197,  964 => 1196,  960 => 1195,  956 => 1194,  952 => 1193,  948 => 1192,  944 => 1191,  940 => 1190,  845 => 1097,  503 => 739,  497 => 738,  491 => 737,  485 => 736,  375 => 628,  353 => 606,  331 => 540,  308 => 517,  173 => 382,  166 => 41,  163 => 40,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  143 => 35,  139 => 34,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  117 => 27,  103 => 23,  92 => 22,  81 => 21,  70 => 20,  64 => 16,  51 => 11,  38 => 8,  27 => 7,  19 => 1,);
    }
}

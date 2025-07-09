<?php

/* MainRatetradeBundle:Default:land-transfer-tax.html.twig */
class __TwigTemplate_435e48df4e73227b24c1748723298b57eff40597f08ee4d48b75892416c8b342 extends Twig_Template
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "30")) {
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
\t<script src=\"/./bundles/assets/plugins/modernizr.custom.js\"></script>
\t<link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/emicalculator.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/jquery-ui.css\">";
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
                             <h1 class=\"entrytitle\">Land Transfer Tax Calculator in Canada</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li>Calculator</li>
                                <li class=\"active\">Land Transfer Tax</li>
                </ul>
            </div>
        </section>";
        // line 64
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
                         \t\t\t   
            <form>
<div class=\"pboxheading\">LAND TRANSFER TAX CALCULATE</div>
                        <div class=\"pbox pboxnew\">
                        <div class=\"lamount\">
                            <label for=\"loanamount\" class=\"orange\"><strong>Property Value (\$)</strong> </label>
                            <span></span>
                        </div> <div class=\"datafeild\">
         <label class=\"property-error errorc\" style=\"color: #993A00;\"></label>
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
                <div class=\"pbox\">
                  <div class=\"lamount\" style=\"padding-right: 34px;\">
                    <label class=\"orange\">
                    <strong>Province</strong>
                    </label>
                  </div>
                <div class=\"datafeild\">
                <div class=\"fields\">
                    <select id=\"province\" name=\"province\" >
                        <option value=\"AL\">Alberta</option>
                        <option value=\"BC\">British Columbia</option>
                        <option value=\"MA\">Manitoba</option>
                        <option value=\"NB\">New Brunswick</option>
                        <option value=\"NE\">Newfoundland</option>
                        <option value=\"NS\">Nova Scotia</option>
                        <option value=\"NT\">Northwest Territories</option>
                        <option value=\"NU\">Nunavut</option>
                        <option value=\"ON\" selected=\"selected\">Ontario</option>
                        <option value=\"PE\">Prince Edward Island</option>
                        <option value=\"QU\">Quebec</option>
                        <option value=\"SK\">Saskatchewan</option>
                        <option value=\"YU\">Yukon</option>\t\t\t\t
                    </select>
                </div></div></div>
                <div class=\"pbox\">
                  <div class=\"lamount\" style=\"padding-right: 34px;\">
                <label class=\"orange\">
                    <strong>City</strong>
                </label>
                  </div><div class=\"datafeild\">
                <div class=\"fields\">
                    <select id=\"city\" name=\"city\" >

                    </select>
                </div></div></div>
                <div style=\"clear:both\"></div>
                <div class=\"firstt\">
                    <input type=\"checkbox\" id=\"first-time\" >&nbsp;&nbsp;I am a first time home buyer
                </div>
            </form>
        
        <div class=\"box-12\" style=\"padding-top: 20px; padding-bottom: 20px; text-align: center;\">
            <a href=\"#\" class=\"an-button land-tax\" style=\"min-width: 30%\">Submit</a>
        </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Provincial</strong>
        <input id=\"pro\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\">
    </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Municipal</strong>
        <input id=\"mum\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\">
    </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Rebate</strong>
        <input id=\"reb\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\"> 
    </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Land Transfer Tax</strong>
        <input id=\"tot\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\">
    </div>
</div></div>
\t\t\t   
\t\t\t\t\t\t   
\t\t\t\t<div class=\"clear\"></div>\t\t   
\t\t\t\t\t\t   
\t\t\t\t\t\t   
\t\t\t\t\t\t   
                         <div class=\"mortapb\">
                            <a href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mortgage_rates", array("target" => "best", "ratetype" => "fixed")), "html", null, true);
        echo "\" class=\"an-button\">Best Available Rates</a>
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
        // line 189
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 190
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 191
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                               
                                                <li><a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                     </ul>
                                </li>
                                <li> 
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 206
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 207
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 208
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
        // line 211
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 218
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 219
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
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
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 229
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 230
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 231
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
        // line 234
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
        // line 249
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
      

<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.tabs.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.loadmask.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/globalize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/lttcal.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.datepicker.min.js"), "html", null, true);
        echo "\"></script>
   
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:land-transfer-tax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 262,  504 => 261,  500 => 260,  496 => 259,  492 => 258,  487 => 256,  482 => 254,  478 => 253,  474 => 252,  468 => 249,  452 => 234,  441 => 231,  439 => 230,  435 => 229,  428 => 223,  417 => 220,  415 => 219,  411 => 218,  403 => 211,  392 => 208,  390 => 207,  386 => 206,  377 => 198,  373 => 197,  369 => 196,  365 => 195,  361 => 194,  356 => 192,  352 => 191,  348 => 190,  344 => 189,  322 => 170,  214 => 64,  194 => 45,  189 => 40,  184 => 38,  180 => 37,  176 => 36,  172 => 35,  168 => 34,  164 => 33,  160 => 32,  156 => 31,  152 => 30,  148 => 29,  127 => 20,  114 => 19,  98 => 15,  85 => 14,  71 => 12,  58 => 11,  45 => 10,  40 => 8,  24 => 4,  19 => 1,);
    }
}

<?php

/* MainRatetradeBundle:Default:cmhc-insurance.html.twig */
class __TwigTemplate_dd95eb0a478d7e793d0ab97a05025566aef445bc5a318d78bb7ef25fe5485a39 extends Twig_Template
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
        <title>RateTrade | cmhc Mortgage Insurance Calculator Canada | Calculate</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"widht=content-width, initial-scale=1\">
        <meta name=\"robots\" content=\"index, follow\">
        <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">  
        <meta name=\"geo.region\" content=\"CA\" />
        <meta name=\"title\" content=\"RateTrade | cmhc Mortgage Insurance Calculator Canada | Calculate\">
        <meta name=\"description\" content=\"RateTrade cmhc Insurance Calculator Canada. Find out the monthly payments on a mortgage and also compare different mortgage rates in Canada.\"> 
         <meta name=\"keywords\" content=\"mortgage calculator, cmhc mortgage affordability calculator, mortgage loan insurance calculator, what does cmhc insurance cover, mortgage calculator Canada, cibc mortgage calculator, cmhc insurance refund, rbc mortgage calculator\">
        <meta property=\"og:type\" content=\"article\" />
        <meta name=\"og:title\" content=\"RateTrade | cmhc Mortgage Insurance Calculator Canada | Calculate\">
        <meta name=\"og:description\" content=\"RateTrade cmhc Insurance Calculator Canada. Find out the monthly payments on a mortgage and also compare different mortgage rates in Canada.\">
        <meta property=\"og:site_name\" content=\"Rate Trade\" />
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\" />
        <meta name=\"twitter:card\" content=\"summary\" />
        <meta name=\"twitter:description\" content=\"RateTrade cmhc Insurance Calculator Canada. Find out the monthly payments on a mortgage and also compare different mortgage rates in Canada.\">
        <meta name=\"twitter:title\" content=\"RateTrade | cmhc Mortgage Insurance Calculator Canada | Calculate\">
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
    <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\"/>
\t    <script src=\"/./bundles/assets/plugins/modernizr.custom.js\"></script>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/emicalculator.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/jquery-ui.css\">";
        // line 46
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "    <!-- /HEADER -->
 <!-- CONTENT AREA -->
    <div class=\"content-area\">

        <!-- BREADCRUMBS -->
        <section class=\"page-section breadcrumbs text-right\">
            <div class=\"container\">
                <div class=\"page-header\">
                             <h1 class=\"entrytitle\">CMHC Mortgage Insurance Calculator Canada</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li>Calculator</li>
                                <li class=\"active\">Mortgage Insurance Calculator</li>
                </ul>
            </div>
        </section>
<!-- /BREADCRUMBS --
        <!-- PAGE WITH SIDEBAR -->
        <section class=\"page-section with-sidebar\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    <!-- CONTENT -->
                    <div class=\"col-md-9 content\" id=\"content\">

                        <!-- Blog posts -->
                        <article class=\"post-wrap\">
                            <div class=\"post-media\">


                            <div class=\"content-boxes framecontent\">
                                
\t\t\t\t\t\t\t\t
\t\t\t\t<form>
  <div class=\"pboxheading\">CALCULATE MORTGAGE INSURANCE</div>
                        <div class=\"pbox\">
                            <div class=\"sep lint\">
                                <label for=\"loanamount\" class=\"orange\"><strong>Property Value (\$)</strong> </label>
                                <span></span>
                            </div>
                            <div class=\"datafeild\">
                                <label class=\"property-error errorc\" style=\"color: #993A00;\"></label>
                                <input id=\"loanamount\" name=\"loanamount\" value=\"\" type=\"text\" />
                                <span class=\"prc-addon\">\$</span>
                                <div id=\"loanamountslider\"></div>
                                <div id=\"loanamountsteps\" class=\"steps\">
                                    <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 16.67%;\">|<br/><span class=\"marker\">\$500,000</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 33.34%;\">|<br/><span class=\"marker\">\$1M</span></span>
                                    <span class=\"tick\" style=\"left:  50%;\">|<br/><span class=\"marker\">\$1.5M</span></span>
                                    <span class=\"tick\" style=\"left: 66.67%;\">|<br/><span class=\"marker\">\$2M</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 83.34%;\">|<br/><span class=\"marker\">\$2.5M</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">\$3</span></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"pbox\">
                            <div class=\"sep lint\">
                                <label for=\"loaninterest\" class=\"orange\"><strong>Down Payment (%)</strong> </label>
                                <span></span></div>
                            <div class=\"datafeild\">
                                <label class=\"down-error errorc\" style=\"color: #993A00;display: none;\"> </label>
                                <input id=\"loaninterest\" name=\"loaninterest\" value=\"\" type=\"text\" />
                                <span class=\"prc-addon\">%</span>
                                <div id=\"down1\">
                                    <div id=\"loaninterestslider\"></div>
                                    <div id=\"loanintereststeps\" class=\"steps\">
                                        <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">5</span></span>
                                        <span class=\"tick\" style=\"left: 25%;\">|<br/><span class=\"marker\">8.75</span></span>
                                        <span class=\"tick\" style=\"left: 50%;\">|<br/><span class=\"marker\">12.5</span></span>\t\t\t\t            
                                        <span class=\"tick\" style=\"left: 75%;\">|<br/><span class=\"marker\">16.25</span></span>
                                        <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">20</span></span>
                                    </div>
                                </div>
                                <div id=\"down2\" style=\"display:none;\">
                                    <div id=\"loaninterestslider2\"></div>
                                    <div id=\"loanintereststeps\" class=\"steps\">
                                        <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">20</span></span>
                                        <span class=\"tick\" style=\"left: 25%;\">|<br/><span class=\"marker\">25</span></span>
                                        <span class=\"tick\" style=\"left: 50%;\">|<br/><span class=\"marker\">30</span></span>\t\t\t\t            
                                        <span class=\"tick\" style=\"left: 75%;\">|<br/><span class=\"marker\">35</span></span>
                                        <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">40</span></span>
                                    </div>
                                </div>
                            </div></div>
                  
            </form>
          </div>
                </div>
    <div class=\"box-7 resultrate\">
        <strong style=\"color: rgb(127, 0, 135);\">CMHC / GE / CG</strong><br/>
        <input id=\"chmc-ins\" value=\"\" type=\"text\" disabled=\"disabled\" style=\" border-radius: 7px;
               color: rgb(0, 0, 0);
               font-weight: bold;
               padding: 9px;
               text-align: center;
               width: 29%;\"/> 
    </div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
                                <div class=\"clear\"></div>
<div class=\"calinfo\">
<p><strong>CMHC Mortgage Insurance Calculator</strong>
  CMHC or Canada Mortgage And Housing  Corporation Insurance is commonly known as Mortgage Default Insurance. This  insurance is mandatory in all the provinces of Canada in case you need to make  the down payments between 5% and 19.99%.</p>
<p><strong>The Main Aim Of This Insurance</strong>
The main goal of this insurance is  to protect the lenders if the borrower cannot make the regular payments or stop  making the payment of the loan and becomes a defaulted on the mortgage loan.  The lender can claim the insurance to cover their loss.</p>
<p>It is true that as a home buyer  this insurance can cost you 2.80% to 4% of your total mortgage amount, but it  can bring scopes to you as a Canadian to access the real estate market in this  country, which is otherwise, may not be an easy matter for you.</p>
<p><strong>Points You Must Know About Mortgage Insurance</strong></p>
  <ul>
  <li>Without this insurance, the mortgage rates will be higher, because the  risk of default can be increased in such cases.</li>
  <li>Lenders prefer to offer lowers mortgage rates to the borrowers when they  know that their loan is secured because of that insurance.</li>
  <li>The borrowers can also afford to have mortgage loans because the rates  are decreased with the help of the insurance.</li></ul>


<p><strong>How To Be Qualified For This Insurance</strong>
There are some primary requirements  that you have to fulfill to become eligible for this insurance.</p>
 
<ul>
  <li>The maximum amortization period for the insured  property is 25 years.</li>
  <li>The insurance is not applicable if you are buying a  home which costs more than \$1 million.</li>
  <li>If you are purchasing the home with the price between  \$500,000 and, \$999,999 then you need to make a higher down payment.</li>
</ul>
<p><strong>Where To Get The Insurance</strong>
  Apart from CMHC there are two other  entities in Canada who can offer you this insurance. They are Genworth  Financial and Canada Guaranty. </p>
</div>

                                <div class=\"mortapb\" style=\"margin-top: 35px;\">
                                    <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mortgage_rates", array("target" => "best", "ratetype" => "fixed")), "html", null, true);
        echo "\" class=\"an-button\">Best Available Rates</a>
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
        // line 195
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 198
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                                <li><a href=\"";
        // line 199
        echo $this->env->getExtension('routing')->getPath("chmc_insurance");
        echo "\">Mortgage Insurance</a></li>
                                                <li><a href=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 201
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 203
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 204
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                     </ul>
                                </li>
                                <li> 
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 212
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 213
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 214
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
        // line 217
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 224
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 225
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 226
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
        // line 229
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 235
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 236
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 237
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
        // line 240
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
        // line 254
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "


<script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.tabs.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.loadmask.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/globalize.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/chmccal_ratetrade.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.datepicker.min.js"), "html", null, true);
        echo "\"></script>

       
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:cmhc-insurance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 267,  415 => 266,  411 => 265,  407 => 264,  403 => 263,  398 => 261,  393 => 259,  389 => 258,  385 => 257,  379 => 254,  364 => 240,  353 => 237,  351 => 236,  347 => 235,  340 => 229,  329 => 226,  327 => 225,  323 => 224,  315 => 217,  304 => 214,  302 => 213,  298 => 212,  289 => 204,  285 => 203,  281 => 202,  277 => 201,  273 => 200,  269 => 199,  265 => 198,  261 => 197,  257 => 196,  253 => 195,  231 => 176,  98 => 46,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 34,  68 => 33,  64 => 32,  60 => 31,  56 => 30,  52 => 29,  28 => 8,  19 => 1,);
    }
}

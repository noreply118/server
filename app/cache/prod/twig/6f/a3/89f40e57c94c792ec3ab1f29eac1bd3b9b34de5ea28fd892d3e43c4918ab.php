<?php

/* MainRatetradeBundle:Default:mortgage-payment.html.twig */
class __TwigTemplate_6fa389f40e57c94c792ec3ab1f29eac1bd3b9b34de5ea28fd892d3e43c4918ab extends Twig_Template
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"> 
        <meta name=\"keywords\" content=\"Mortgage Payment Calculator Canada, Simple Mortgage Calculator, Mortgage Payment Calculator Ontario, Mortgage Calculator, Mortgage Payment Calculator Scotiabank, Mortgage Payment Calculator Ratetrade, Mortgage Calculator Alberta, Simple Mortgage Calculator Canada\">
        
        <meta property=\"og:type\" content=\"article\">
        <meta name=\"og:title\" content=\"";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"og:description\" content=\"";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
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
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:title\" content=\"";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "25")) {
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
    <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
    <link href=\"favicon.ico\" rel=\"shortcut icon\" sizes=\"114x114\">
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
\t    <script src=\"/./bundles/assets/plugins/modernizr.custom.js\"></script>
\t  <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/emicalculator.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/./bundles/acmedemo/css/jquery-ui.css\">  
<style>
.pbox{
   height:197px!important;
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
                             <h1 class=\"entrytitle\">Best Mortgage Payment Calculator in Canada</h1>
</div>
                <ul class=\"breadcrumb\"> 
                                <li>Home</li>
                                <li>Calculator</li>
                                <li class=\"active\">Mortgage Payment Calculator</li>
                </ul>
            </div>
        </section>";
        // line 69
        echo "<!-- PAGE WITH SIDEBAR -->
        <div class=\"page-section with-sidebar\">
            <div class=\"container\">
                <div class=\"row\">
                   
                    <!-- CONTENT -->
                    <div class=\"col-md-9 content\" id=\"content\">

                      <article class=\"post-wrap\">
    <div class=\"post-media\">
        <div class=\"content-boxes framecontent\">
            <div class=\"calinfo\">
                <p>
                    Rate Trade brings you the most reliable <b>mortgage payment calculator Canada</b>. To buy your dream home, you need to get more than just a feel of the future liability that you are going to face; you must have an exact
                    idea about the monthly payments on a mortgage. Our <b>mortgage calculator</b> not only follows an efficient mortgage payments estimation procedure, it also lets you find out the Total Mortgage Payment, CMHC Insurance as
                    well as Land Transfer Tax, all in one place. And the best thing about all this is that the tools are absolutely free!
                </p>

                <h2><strong>Why Do I Need A Mortgage Calculator?</strong></h2>
                <p>
                    It is quite difficult to find your dream home, but the problem does not end once you actually find it. It is important to have an estimate about how much you will have to pay in terms of mortgage payments to actually
                    acquire the house. This is where <b>mortgage calculator </b>comes into the picture.
                </p>
                <p>
                    You can not only find out the monthly payments on a mortgage, but also compare different <a href=\"https://www.ratetrade.ca/bank-mortgage-rates\"><b>mortgage rates in Canada</b></a>. This calculator lets you make sure that
                    repayments on mortgage do not become impossible for you by providing you with the best possible mortgage rates suited for you.
                </p>
                <p>You can also find out the periodic payment required in case you opt for semi-monthly, bi-weekly or weekly payments.</p>
                <p><strong>How Do I Use the Mortgage Calculator?</strong></p>
                <p>
                    Our website provides a very simple and user-friendly interface to estimate the <b>monthly payments on a mortgage</b>. All you need to do is enter few figures, like the property value, down payment, the required
                    amortization period, the applicable mortgage rate, and our <b>mortgage calculator</b> will do the rest. You will be provided with the monthly payment required along with the entire amortization schedule of your mortgage.
                </p>
                <p>You can also find out the periodic payment required in case you opt for semi-monthly, bi-weekly or weekly payments.</p>
                <h3><strong>What Other Calculators Can I Use?</strong></h3>
                <p>
                    Apart from the ordinary mortgage calculator, we also have a range of other useful calculator like <a href=\"https://www.ratetrade.ca/mortgage-affordability\"><b>Mortgage Affordability</b></a><b>, </b>
                    <a href=\"https://www.ratetrade.ca/cmhc-insurance-calculator\"><b>Mortgage Insurance</b></a><b>, </b><a href=\"https://www.ratetrade.ca/land-transfer-tax\"><b>Land Transfer Tax</b></a><b>, </b>
                    <a href=\"https://www.ratetrade.ca/mortgage-refinance-calculator\"><b>Refinance Calculator</b></a><b>, </b>and <a href=\"https://www.ratetrade.ca/mortgage-refinance-penalty\"><b>Refinance Penalty</b></a>, among several
                    others.
                </p>
                <p>You can have a look at our different <b>Mortgage Calculators</b> to get a better understanding.</p>
            </div>
            <form>
                <div class=\"pboxheading\">MORTGAGE PAYMENT CALCULATOR</div>
                <div class=\"pbox\">
                    <div class=\"sep lint\">
                        <label for=\"loanamount\" class=\"orange\"><strong> Property Value (\$)</strong> </label>
                        <span></span>
                    </div>
                    <div class=\"datafeild\">
                        <label class=\"property-error errorc\" style=\"color: #993a00;\"></label>
                        <input id=\"loanamount\" name=\"loanamount\" value=\"\" type=\"text\" >
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
                        <label for=\"loaninterest\" class=\"orange\"><strong> Down Payment (%)</strong> </label>
                        <span></span>
                    </div>
                    <div class=\"datafeild\">
                        <label class=\"down-error errorc\" style=\"color: rgb(153, 58, 0);\"></label>
                        <input id=\"loaninterest\" name=\"loaninterest\" value=\"\" type=\"text\" >
                        <span class=\"prc-addon\">%</span>

                        <div id=\"loaninterestslider\"></div>
                        <div  class=\"steps\">
                            <span class=\"tick\" style=\"left: 0%;\">
                                |<br>
                                <span class=\"marker\">5</span>
                            </span>
                            <span class=\"tick\" style=\"left: 16.67%;\">
                                |<br>
                                <span class=\"marker\">10</span>
                            </span>
                            <span class=\"tick\" style=\"left: 33.34%;\">
                                |<br>
                                <span class=\"marker\">15</span>
                            </span>
                            <span class=\"tick\" style=\"left: 50%;\">
                                |<br>
                                <span class=\"marker\">20</span>
                            </span>
                            <span class=\"tick\" style=\"left: 66.67%;\">
                                |<br>
                                <span class=\"marker\">25</span>
                            </span>
                            <span class=\"tick\" style=\"left: 83.34%;\">
                                |<br>
                                <span class=\"marker\">30</span>
                            </span>
                            <span class=\"tick\" style=\"left: 100%;\">
                                |<br>
                                <span class=\"marker\">35</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"pbox\">
                    <div class=\"sep lint\">
                        <label for=\"loanterm\" class=\"orange\"><strong class=\"orange\"> Amortization Period (Yr)</strong> </label>
                        <span></span>
                    </div>
                    <div class=\"datafeild\">
                        <label class=\"ammort-error errorc\" style=\"color: #993a00;\"></label>
                        <input id=\"loanterm\" name=\"loanterm\" value=\"\" type=\"text\" >
                        <span class=\"prc-addon\">Yr</span>

                        <div id=\"loantermslider\"></div>
                        <div  class=\"steps\">
                            <span class=\"tick\" style=\"left: 0%;\">
                                |<br>
                                <span class=\"marker\">0</span>
                            </span>
                            <span class=\"tick\" style=\"left: 14.28%;\">
                                |<br>
                                <span class=\"marker\">5</span>
                            </span>
                            <span class=\"tick\" style=\"left: 28.56%;\">
                                |<br>
                                <span class=\"marker\">10</span>
                            </span>
                            <span class=\"tick\" style=\"left: 42.84%;\">
                                |<br>
                                <span class=\"marker\">15</span>
                            </span>
                            <span class=\"tick\" style=\"left: 57%;\">
                                |<br>
                                <span class=\"marker\">20</span>
                            </span>
                            <span class=\"tick\" style=\"left: 71.4%;\">
                                |<br>
                                <span class=\"marker\">25</span>
                            </span>
                            <span class=\"tick\" style=\"left: 85.68%;\">
                                |<br>
                                <span class=\"marker\">30</span>
                            </span>
                            <span class=\"tick\" style=\"left: 100%;\">
                                |<br>
                                <span class=\"marker\">35</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"pbox\">
                    <div class=\"sep lint\">
                        <label for=\"mortrate\" class=\"orange\"><strong class=\"orange\"> Mortgage Rate (%)</strong> </label>
                        <span></span>
                    </div>
                    <div class=\"datafeild\">
                        <label class=\"rate-error errorc\" style=\"color: #993a00;\"></label>
                        <input id=\"mortrate\" name=\"mortrate\" value=\"\" type=\"text\" >
                        <span class=\"prc-addon\">%</span>

                        <div id=\"mortrateslider\"></div>
                        <div  class=\"steps\">
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
            <div class=\"box-full ratech\">
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"monthly\" type=\"radio\" checked=\"checked\" ><br>
                    <span style=\"color: rgb(35, 98, 2);\">Monthly</span>
                </div>
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"semi_monthly\" type=\"radio\" ><br>
                    <span style=\"color: rgb(35, 98, 2);\">Semi Monthly</span>
                </div>
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"bi_weekly\" type=\"radio\" ><br>
                    <span style=\"color: rgb(35, 98, 2);\">Bi Weekly</span>
                </div>
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"weekly\" type=\"radio\" ><br>
                    <span style=\"color: rgb(35, 98, 2);\">Weekly</span>
                </div>
            </div>
            <div class=\"box-full ratech\">
                <div class=\"box-12\" style=\"padding-bottom: 18px; text-align: center;\">
                    <a href=\"#\" class=\"an-button cal-submit\" style=\"min-width: 30%;\">Submit</a>
                </div>
            </div>
            <div class=\"box resultam\">
                <strong class=\"orange\">Down Payment</strong>
                <input id=\"down-payment\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"width: 70%; text-align: center; color: rgb(35, 98, 2);\" >
            </div>
            <div class=\"box resultam\">
                <strong class=\"orange\">CHMC / GE / CG</strong>
                <input id=\"chmc-ins\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"width: 70%; text-align: center; color: rgb(35, 98, 2);\" >
            </div>
            <div class=\"box resultam\">
                <strong class=\"orange\">Required Mortgage</strong>
                <input id=\"mort-reqd\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"width: 70%; text-align: center; color: rgb(35, 98, 2);\" >
            </div>
            <div class=\"box-full resultbarhead\">
                <strong style=\"color: rgb(7, 40, 49); padding-top: 15px;\"><i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i> Mortgage Payment <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></strong>
                <span class=\"emi-data result\" style=\"font-size: 22px;\"></span>
            </div>
            <div class=\"sch\">
                <h2 style=\"text-align:center\" ><u>Amortization schedule</u></h2>
                <div id=\"container\" style=\"float: left; position: relative; width: 100%; text-align: center; padding: 5px; height: 200px;\"></div>
                <div id=\"emipaymenttable\" style=\"float: left; position: relative; width: 100%; text-align: center; padding: 11px 5px 5px;\"></div>
            </div>

            <div class=\"calinfo\">
                <p><strong>Should I Renew My Mortgage or Should I Go for Refinance?</strong></p>
                <p>
                    This is a big decision that every home buyer has to make several times during the mortgage period. In Canada, a mortgage is typically arranged to be paid off in monthly installments so that the entire amount of mortgage
                    can be fully paid off within any time between 25 and 30 years or by the choice of individual taking mortgage.However, you cannot take loan extending to that many years. Because of this, you have to face the question of
                    whether to go for <b>renewal or refinance </b>of the mortgage loan.
                </p>
                <p>
                    To simplify the concept, suppose you have taken a \$200,000 mortgage on your house, which has to be paid off in 30 years based on the amortization schedule. However, it may be so that the term of the mortgage is a mere 5
                    years, at the end of which the lender has the right to demand full payment in case mortgage is not renewed. Then you will have the option of either renewing the mortgage or catching hold of another lender.
                </p>
                <p>
                    For some of us, it may seem that mortgage renewal appears to be better option, since we do not have to handle the hassles of looking for a different lender and getting a fresh loan approved. However, you must make it a
                    point to find out the existing rates. Why would you continue paying at higher rates, if the rate of interest has gone down in the meantime?
                </p>
                <p>Whenever you face the <b>Renewal or Refinance</b> problem, all you have to do is use our Refinance Calculator. You can also find out the Maximum Mortgage Refinance Value.</p>
                <p><strong>What is Land Transfer Tax?</strong></p>
                <p>
                    Land Transfer Tax is a tax which is imposed on the acquisition or purchase of any residential or commercial property. It is necessarily a provincial tax which is imposed whenever a property changes hands. If you are
                    <b>a first time home buyer</b>, you may be eligible for obtaining a refund.
                </p>
                <p><strong>What is CMHC Insurance?</strong></p>
                <p>
                    <b>CMHC Insurance</b> is basically a mortgage default insurance, which is imposed to protect lenders from possible future payment defaults on the part of the borrower. In Canada, it is mandatory for you to pay
                    <b>CMHC Insurance</b> if your down payment lies anywhere between the minimum rate of 5% and up to 19.99%.
                </p>
            </div>

            <div class=\"mortapb\">
                <a href=\"#\" class=\"an-button\" data-toggle=\"modal\" data-target=\"#agentModal1\">Apply Now</a>
                &nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;
                <a href=\"";
        // line 367
        echo $this->env->getExtension('routing')->getPath("mortgage_rates", array("ratetype" => "fixed"));
        echo "\" class=\"an-button\">Best Available Rates</a>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</article>


 </div>


 <!-- SIDEBAR -->
                    <aside class=\"col-md-3 sidebar\" id=\"sidebar\">
                    
                    <!-- widget car categories -->
                    <div class=\"widget shadow car-categories\">
<a href=\"https://www.ratetrade.ca/home-buying-process\"><img src=\"/bundles/assets/img/side-pic1.jpg\" alt=\"Ratetrade.ca : Best Mortgage Payment Calculator in Canada\"></a>
                        <h4 class=\"widget-title\">Mortgage Categories</h4>
                        <div class=\"widget-content\">
                            <ul>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-calculator\"></i> &nbsp; Calculators</a>
                                    <ul class=\"children active\">
                                                <li><a href=\"";
        // line 391
        echo $this->env->getExtension('routing')->getPath("mortgage_payment");
        echo "\">Mortgage Payment</a></li>
                                                <li><a href=\"";
        // line 392
        echo $this->env->getExtension('routing')->getPath("payment_analyzer");
        echo "\">Payment Analyzer</a></li>
                                                <li><a href=\"";
        // line 393
        echo $this->env->getExtension('routing')->getPath("income_cal");
        echo "\">Income Calculator</a></li>
                                                <li><a href=\"";
        // line 394
        echo $this->env->getExtension('routing')->getPath("affordability_cal");
        echo "\">Mortgage Affordability</a></li>
                                              
                                                <li><a href=\"";
        // line 396
        echo $this->env->getExtension('routing')->getPath("land_transfer_tax");
        echo "\">Land Transfer Tax</a></li>
                                                <li><a href=\"";
        // line 397
        echo $this->env->getExtension('routing')->getPath("refinance-calculator");
        echo "\">Refinance Calculator</a></li>
                                                <li><a href=\"";
        // line 398
        echo $this->env->getExtension('routing')->getPath("equity_refinance");
        echo "\">Refinance Equity</a></li>
                                                <li><a href=\"";
        // line 399
        echo $this->env->getExtension('routing')->getPath("refinance_penalty");
        echo "\">Refinance Penalty</a></li>
                                                <li><a href=\"";
        // line 400
        echo $this->env->getExtension('routing')->getPath("debt-consolidation-calculator");
        echo "\">Debt Consolidation</a></li>
                                     </ul>
                                </li>
                                <li> 
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Home Buying Process</a>
                                    <ul class=\"children\">";
        // line 408
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 409
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "6")) {
                // line 410
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
        // line 413
        echo "                                                       
                                </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Renewing Mortgage</a>
                                    <ul class=\"children\">";
        // line 420
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 421
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "18")) {
                // line 422
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
        // line 425
        echo "                                    </ul>
                                </li>
                                <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Refinancing Guide</a>
                                    <ul class=\"children\">";
        // line 431
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 432
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "1")) {
                // line 433
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
        // line 436
        echo "                                    </ul>
                                </li>
  <li>
                                    <span class=\"arrow\"><i class=\"fa fa-angle-down\"></i></span>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> &nbsp; Mortgage Information</a>
                                    <ul class=\"children\">";
        // line 442
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 443
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "parentCategory") == "47")) {
                // line 444
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
        // line 447
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
        // line 466
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "

    <script  src=\"/bundles/acmedemo/js/jquery.ui.widget.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.ui.accordion.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.ui.tabs.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.loadmask.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/globalize.min.js\"></script>
       <script  src=\"/bundles/acmedemo/js/emical_ratetrade.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.ui.mouse.min.js\"></script>
    <script  src=\"/bundles/acmedemo/js/jquery.ui.slider.min.js\"></script>
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>";
        // line 479
        echo "    <script  src=\"/bundles/acmedemo/js/exporting.js\"></script> 
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
        // line 523
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 524
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl") == "brampton")) {
                echo "  
                                                            <option value=\"";
                // line 525
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "cityUrl"), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "city"), "html", null, true);
                echo "</option>";
            } else {
                // line 527
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
        // line 530
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
                    </div>
                    </div>
                    </div>
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
        // line 578
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
        return "MainRatetradeBundle:Default:mortgage-payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 578,  770 => 530,  759 => 527,  753 => 525,  749 => 524,  745 => 523,  700 => 479,  687 => 466,  667 => 447,  656 => 444,  654 => 443,  650 => 442,  643 => 436,  632 => 433,  630 => 432,  626 => 431,  619 => 425,  608 => 422,  606 => 421,  602 => 420,  594 => 413,  583 => 410,  581 => 409,  577 => 408,  568 => 400,  564 => 399,  560 => 398,  556 => 397,  552 => 396,  547 => 394,  543 => 393,  539 => 392,  535 => 391,  508 => 367,  208 => 69,  188 => 50,  178 => 41,  173 => 39,  169 => 38,  165 => 37,  161 => 36,  157 => 35,  153 => 34,  149 => 33,  145 => 32,  141 => 31,  137 => 30,  116 => 21,  103 => 20,  87 => 16,  74 => 15,  58 => 11,  45 => 10,  40 => 8,  24 => 4,  19 => 1,);
    }
}

<?php

/* AcmeDemoBundle:Demo:mortgage-payment-ratetrade.html.twig */
class __TwigTemplate_4d8607e3a66edd6aef84f14ffda8ccd1437b10c0d1416fd4db06a5c9c172ab2e extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/css/common.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/css/products.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/css/add-product.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/css/admin-manager.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/css/emicalculator.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/acmedemo/css/jquery-ui.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
    <style type=\"text/css\">
        \${demo.css}
    </style>
        <div class=\"left-details newdatain\" style=\"width:100%!important;\">
            <div class=\"right-inner\">
                <div class=\"inner\">
                    <form class=\"imageform\">
                        <div class=\"entry-content\">
                            <div id=\"emicalcalulatorinnerform\" style=\"padding: 0px 0px 10px;\">
                             <div class=\"pbox\">
                                <div class=\"sep lint\">
                                    <label for=\"loanamount\" class=\"orange\"><strong> Property Value (\$)</strong> </label>
                                  <span></span></div>
                                    <div class=\"datafeild\">
                                    <label class=\"property-error errorc\" style=\"color: #993A00;\"></label>
                                    <input id=\"loanamount\" name=\"loanamount\" value=\"\" type=\"text\" />
                                     <span class=\"prc-addon\">\$</span>
                              
                                <div id=\"loanamountslider\"></div>
                                <div id=\"loanamountsteps\" class=\"steps\">
                               <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 25%;\">|<br/><span class=\"marker\">\$250,000</span></span>
                                    <span class=\"tick\" style=\"left: 50%;\">|<br/><span class=\"marker\">\$500,000</span></span>
                                    <span class=\"tick\" style=\"left: 75%;\">|<br/><span class=\"marker\">\$750,000</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">\$1M</span></span>
                                 </div> </div>
                           </div>
                           <div class=\"pbox\">
                                <div class=\"sep lint\">
                                    <label for=\"loaninterest\" class=\"orange\"><strong> Down Payment (%)</strong> </label>
                                    <span></span></div>
                                    <div class=\"datafeild\">
                                    <label class=\"down-error errorc\" style=\"color: rgb(153, 58, 0);\"></label>
                                    <input id=\"loaninterest\" name=\"loaninterest\" value=\"\" type=\"text\" form=\"percent\" />
                                      <span class=\"prc-addon\">%</span>
                                                                  
                            <div id=\"loaninterestslider\"></div>
                            <div id=\"loanintereststeps\" class=\"steps\">
                                    <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">5</span></span>
                                    <span class=\"tick\" style=\"left: 16.67%;\">|<br/><span class=\"marker\">7.5</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 33.34%;\">|<br/><span class=\"marker\">10</span></span>
                                    <span class=\"tick\" style=\"left:  50%;\">|<br/><span class=\"marker\">12.5</span></span>
                                    <span class=\"tick\" style=\"left: 66.67%;\">|<br/><span class=\"marker\">15</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 83.34%;\">|<br/><span class=\"marker\">17.5</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">20</span></span>
                           </div></div>
                                </div>
                                     <div class=\"pbox\">
                                <div class=\"sep lint\">
                                    <label for=\"loanterm\" class=\"orange\"><strong class=\"orange\"> Amortization Period (Yr)</strong> </label>
                                    <span></span></div>
                                    <div class=\"datafeild\">
                                    <label class=\"ammort-error errorc\" style=\"color: #993A00;\"></label>
                                    <input id=\"loanterm\" name=\"loanterm\" value=\"\" type=\"text\" />
                                    <span class=\"prc-addon\">Yr</span>
                                
                                <div id=\"loantermslider\"></div>
                                <div id=\"loanintereststeps\" class=\"steps\">
                                    <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 19.67%;\">|<br/><span class=\"marker\">5</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 39.8%;\">|<br/><span class=\"marker\">10</span></span>
                                    <span class=\"tick\" style=\"left: 59.8%;\">|<br/><span class=\"marker\">15</span></span>
                                    <span class=\"tick\" style=\"left: 79.67%;\">|<br/><span class=\"marker\">20</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">25</span></span>
                                </div>
  </div></div>
                                     <div class=\"pbox\">
                                <div class=\"sep lint\">
                                    <label for=\"mortrate\" class=\"orange\"><strong class=\"orange\"> Mortgage Rate (%)</strong> </label>
                                    <span></span></div>
                                    <div class=\"datafeild\">
                                    <label class=\"rate-error errorc\" style=\"color: #993A00;\"></label>
                                    <input id=\"mortrate\" name=\"mortrate\" value=\"\" type=\"text\" />
                                     <span class=\"prc-addon\">%</span>
                                
                                <div id=\"mortrateslider\"></div>
                                <div id=\"loanintereststeps\" class=\"steps\">
                                    <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">0</span></span>
                                    <span class=\"tick\" style=\"left: 16.67%;\">|<br/><span class=\"marker\">1.75</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 33.34%;\">|<br/><span class=\"marker\">3.5</span></span>
                                    <span class=\"tick\" style=\"left: 50%;\">|<br/><span class=\"marker\">5</span></span>
                                    <span class=\"tick\" style=\"left: 66.67%;\">|<br/><span class=\"marker\">6.75</span></span>\t\t\t\t            
                                    <span class=\"tick\" style=\"left: 83.34%;\">|<br/><span class=\"marker\">8.5</span></span>
                                    <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">10</span></span>
                                </div></div>
                                </div>   </div>
                            </div>
                    </form>
                </div>
            </div>
  
        <div class=\"left-details \" >
           <div class=\"box resultam\">
                <strong class=\"orange\">Down Payment</strong>
                <input id=\"down-payment\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"width:70%;text-align:center;color:rgb(35, 98, 2);\"/>
            </div>
            <div class=\"box resultam\">
                <strong class=\"orange\">CHMC / GE / CG</strong>
                <input id=\"chmc-ins\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"width:70%;text-align:center;color:rgb(35, 98, 2);\"/> 
            </div>
            <div class=\"box resultam\">
                <strong class=\"orange\">Required Mortgage</strong>
                <input id=\"mort-reqd\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"width:70%;text-align:center;color:rgb(35, 98, 2);\"/>
            </div>
            <div class=\"box-full ratech\">
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"monthly\" type=\"radio\" checked=\"checked\" /><br/><span style=\"color: rgb(35, 98, 2);\">Monthly</span>
                </div>
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"semi_monthly\" type=\"radio\"/><br/><span style=\"color: rgb(35, 98, 2);\">Semi Monthly</span>
                </div>
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"bi_weekly\" type=\"radio\"/><br/><span style=\"color: rgb(35, 98, 2);\">Bi Weekly</span> 
                </div>
                <div class=\"box-4\">
                    <input class=\"payment-freq\" name=\"installment\" value=\"weekly\" type=\"radio\"/><br/><span style=\"color: rgb(35, 98, 2);\">Weekly</span>
                </div> 
            </div>
            <div class=\"box-full resultbarhead\">
                <strong style=\"color:rgb(127, 0, 135);\"><i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i> Mortgage Payment <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i></strong>
                <span class=\"emi-data result\" style=\"font-size: 22px;\"></span> 
            </div>
            <div class=\"sch\"> <h2 align=\"center\"><u>Amortization schedule</u></h2>
            <div id=\"container\" style=\"float: left;
position: relative;
width: 100%;
text-align: center;
padding: 5px;height: 200px;\"></div>
           
            <div id=\"emipaymenttable\" style=\"float: left;
position: relative;
width: 100%;
text-align: center;
padding: 11px 5px 5px;\"></div>  
            </div>
        </div>
    <script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery_ss.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.tabs.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/superfish.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.loadmask.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/globalize.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/emical_ratetrade.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.datepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/highcharts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/exporting.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:mortgage-payment-ratetrade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 159,  237 => 158,  233 => 157,  229 => 156,  225 => 155,  221 => 154,  217 => 153,  213 => 152,  209 => 151,  205 => 150,  201 => 149,  197 => 148,  193 => 147,  189 => 146,  49 => 9,  45 => 8,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}

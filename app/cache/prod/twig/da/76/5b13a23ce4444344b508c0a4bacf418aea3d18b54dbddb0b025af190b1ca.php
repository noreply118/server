<?php

/* AcmeDemoBundle:Demo:land-transfer-tax-golden.html.twig */
class __TwigTemplate_da765b13a23ce4444344b508c0a4bacf418aea3d18b54dbddb0b025af190b1ca extends Twig_Template
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
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
<div class=\"left-details newdatain\">
    <div class=\"right-inner\">
        <div class=\"inner\">
            <form class=\"imageform\">
                <div class=\"entry-content framecontent\">
                    <div id=\"emicalcalulatorinnerform\" style=\"padding: 0px 0px 10px;\">
                        <div class=\"pbox pboxnew\">
                        <div class=\"lamount\">
                            <label for=\"loanamount\" class=\"orange\"><strong>Property Value (\$)</strong> </label>
                            <span></span>
                        </div> <div class=\"datafeild\">
                            <input id=\"loanamount\" name=\"loanamount\" value=\"\" type=\"text\" />
                        <div id=\"loanamountslider\"></div>
                        <div id=\"loanamountsteps\" class=\"steps\">
                            <span class=\"tick\" style=\"left: 0%;\">|<br/><span class=\"marker\">0</span></span>
                            <span class=\"tick\" style=\"left: 25%;\">|<br/><span class=\"marker\">\$500,000</span></span>
                            <span class=\"tick\" style=\"left: 50%;\">|<br/><span class=\"marker\">\$1M</span></span>
                            <span class=\"tick\" style=\"left: 75%;\">|<br/><span class=\"marker\">\$1.5M</span></span>
                            <span class=\"tick\" style=\"left: 100%;\">|<br/><span class=\"marker\">\$2M</span></span>
                        </div>
                        </div>
                        </div>
<div style=\"clear:both\"></div>
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
                <div class=\"firstt\" style=\"color:rgb(35, 98, 2);\">
                    I am a first time home buyer&nbsp;<input type=\"checkbox\" id=\"first-time\" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class=\"left-details\" style=\"margin-top: -10px\">
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Provincial</strong>
        <input id=\"pro\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\"/>
    </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Municipal</strong>
        <input id=\"mum\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\"/>
    </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Rebate</strong>
        <input id=\"reb\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\"/> 
    </div>
    <div class=\"box-4 landresult\">
        <strong class=\"orange\">Land Transfer Tax</strong>
        <input id=\"tot\" value=\"\" type=\"text\" disabled=\"disabled\" style=\"text-align:center;color:rgb(35, 98, 2);\"/>
    </div>

</div>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery_ss.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.widget.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.accordion.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.tabs.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/superfish.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.loadmask.min.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/globalize.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/lttcal.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.mouse.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.slider.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.ui.datepicker.min.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:land-transfer-tax-golden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 105,  171 => 104,  167 => 103,  163 => 102,  159 => 101,  154 => 99,  149 => 97,  145 => 96,  141 => 95,  137 => 94,  133 => 93,  129 => 92,  40 => 6,  36 => 5,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}

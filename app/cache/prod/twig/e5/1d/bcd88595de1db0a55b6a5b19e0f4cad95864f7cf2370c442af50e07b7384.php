<?php

/* MainRatetradeBundle:Default:contact-us.html.twig */
class __TwigTemplate_e51dbcd88595de1db0a55b6a5b19e0f4cad95864f7cf2370c442af50e07b7384 extends Twig_Template
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
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
        <meta name=\"geo.region\" content=\"CA\" />
        <meta name=\"title\" content=\"";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
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
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"> 
        <meta property=\"og:type\" content=\"article\" />
        <meta name=\"og:title\" content=\"";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"og:description\" content=\"";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta property=\"og:site_name\" content=\"Rate Trade\" />
        <meta property=\"article:publisher\" content=\"https://www.facebook.com/ratetrade/\" />
        <meta name=\"twitter:card\" content=\"summary\" />
        <meta name=\"twitter:description\" content=\"";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "mdescription"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:title\" content=\"";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["educationall"]) ? $context["educationall"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if (($this->getAttribute((isset($context["a"]) ? $context["a"] : null), "id") == "36")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : null), "ptitle"), "html", null, true);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
        <meta name=\"twitter:site\" content=\"@ratetrade\" />
        <meta name=\"twitter:creator\" content=\"@ratetrade\" /> 
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"favicon.ico\" rel=\"shortcut icon\" type=\"image/png\">
        <link href=\"favicon.ico\" rel=\"apple-touch-icon\">
        <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"72x72\">
        <link href=\"favicon.ico\" sizes=\"114x114\">
        <link href=\"favicon.ico\" rel=\"apple-touch-icon\" sizes=\"144x144\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/owl-carousel2/assets/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/swiper/css/swiper.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/css/theme-red-1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"theme-config-link\">
        <link rel=\"alternate\" hrefLang=\"x-default\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "uri"), "html", null, true);
        echo "\"/>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bundles/assets/plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Header"));
        echo "
        <!-- /HEADER -->
        <!-- CONTENT AREA -->
        <div class=\"content-area\">
            <!-- BREADCRUMBS -->
            <section class=\"page-section breadcrumbs text-right\">
                <div class=\"container\">
                    <div class=\"page-header\">
                        <h1 class=\"entrytitle\">Contact Us</h1>
                    </div>
                    <ul class=\"breadcrumb\">
                        <li>Home</li>
                        <li class=\"active\">Contact Us</li>
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
                                        <p><strong>Contact Us</strong></p>
                                        <div class=\"content-boxes\">
                                            <div id=\"contact_form\">
                                                <form name=\"contact-form\" method=\"post\" action=\"\" class=\"contact-form1\" id=\"contact-form\">
                                                    <div class=\"form-group bform\">
                                                        <label for=\"name\">Name: </label>
                                                        <input type=\"text\" class=\"form-control required\" name=\"name\" id=\"name\" placeholder=\"Name\">
                                                    </div>
                                                    <div class=\"form-group bform\">
                                                        <label for=\"email\">Email address:</label>
                                                        <input type=\"text\" class=\"form-control required\" name=\"email\" id=\"email\" placeholder=\"email\">
                                                    </div>
                                                    <div class=\"form-group bform\">
                                                        <label for=\"phone\">Phone Number </label>
                                                        <input type=\"tel\" class=\"form-control required\" id=\"phone\" placeholder=\"Phone Number\" name=\"phone\">
                                                    </div>
                                                    <div class=\"form-group bform\">
                                                        <label for=\"subject\">Subject</label>
                                                        <input type=\"text\" class=\"form-control required\" id=\"subject\" placeholder=\"Subject.........\" name=\"subject\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"input-message\">Query:</label>
                                                        <textarea name=\"message\" id=\"input-message\" placeholder=\"Enter Your Query\" class=\"form-control required\"></textarea>
                                                    </div>
                                                    <input type=\"submit\" name=\"submit\" class=\"form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark subsc\" id=\"submit_btn\" value=\"Submit\" />
                                                    <div id=\"success\" style=\"text-align: center;\"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- SIDEBAR -->
                                <aside class=\"col-md-3 sidebar\">
                                    <div class=\"address\"> 
                                    <address>
                                        <strong>Email:</strong><br/>
                                        <a class=\"email\" href=\"mailto:contact@ratetrade.ca\">contact@ratetrade.ca</a><br/>
                                        <a class=\"email\" href=\"mailto:contact@ratetrade.ca\">info@ratetrade.ca</a><br/>
                                    </address>
                                  <address>
                                        <strong>Support Phone:</strong><br/>
                                        <a  class=\"phone\"href=\"tel:+19056760008\">(905) 676 0008</a><br/><br/>
                                    </address>
                                  <address>
                                        <strong> Address::</strong><br/>
                                        2960 Drew Rd. Unit# 139, Mississauga ON L4T 0A5
                                    </address>
                                    <address style=\"display:none\">
                                        <strong>ratetrade Address::</strong><br/>
                                        2960 Drew Rd. Unit# 139, Mississauga ON L4T 0A5
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>";
        // line 123
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MainRatetradeBundle:Default:Footer"));
        echo "
 <script>
 //         \$(document).on(\"click\", \".subsc\", function (e) {
 //             e.preventDefault();
 //             var formData = {
 //                 fname: \$(\"#fname\").val(),
 //                 email: \$(\"#lname\").val(),
 //                 phone: \$(\"#phonen\").val(),
 //                 message: \$(\"#email\").val(),
 //                 location: \$(\"#message\").val(),
             
 //             };
 //             \$.ajax({
 //                 url: '";
        // line 136
        echo $this->env->getExtension('routing')->getPath("contact_us_update");
        echo "',
 //                 type: \"post\",
 //                 async: true,
 //                 data: formData,
 //                 success: function (response) {
            
 //                 },
 //                 error: function (request, error) {
 //                     alert('No data found');
 //                 }
 //             });
     
 // });

        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainRatetradeBundle:Default:contact-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 136,  267 => 123,  182 => 40,  179 => 39,  175 => 38,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  151 => 32,  147 => 31,  143 => 30,  139 => 29,  135 => 28,  114 => 19,  101 => 18,  85 => 14,  72 => 13,  58 => 11,  45 => 10,  40 => 8,  24 => 4,  19 => 1,);
    }
}

<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_b4056ec5a38a383e32b104b220fb57bc8773b1b923cf39d8f5ab2e2d87c5b3a9 extends Twig_Template
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
<html>
<head>
    <meta name=\"googlebot\" content=\"noindex, follow\">
    <meta name=\"YahooSeeker\" content=\"noindex, follow\">
    <meta name=\"msnbot\" content=\"noindex, follow\">
    <meta name='robots' content='noindex, follow' />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>An Error Occurred:";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
</head>
<body>
    <h1>Oops! An Error Occurred</h1>
    <h2>The server returned a \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  29 => 9,  19 => 1,);
    }
}

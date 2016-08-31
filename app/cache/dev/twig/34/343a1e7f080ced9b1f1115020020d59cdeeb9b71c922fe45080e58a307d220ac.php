<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4b43dfefc8d9d684e4f492a46bf9f85a8db271b724cff4f5eb94303248abf231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40d421e95afa8020732b10dc8bb2f60a1b2d490b4b6af02db2d73d717d3db3c = $this->env->getExtension("native_profiler");
        $__internal_d40d421e95afa8020732b10dc8bb2f60a1b2d490b4b6af02db2d73d717d3db3c->enter($__internal_d40d421e95afa8020732b10dc8bb2f60a1b2d490b4b6af02db2d73d717d3db3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40d421e95afa8020732b10dc8bb2f60a1b2d490b4b6af02db2d73d717d3db3c->leave($__internal_d40d421e95afa8020732b10dc8bb2f60a1b2d490b4b6af02db2d73d717d3db3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e32f922f463f1bc587b5998556d6014b8a6e859d46cdcaebead11ea5b48fa69b = $this->env->getExtension("native_profiler");
        $__internal_e32f922f463f1bc587b5998556d6014b8a6e859d46cdcaebead11ea5b48fa69b->enter($__internal_e32f922f463f1bc587b5998556d6014b8a6e859d46cdcaebead11ea5b48fa69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e32f922f463f1bc587b5998556d6014b8a6e859d46cdcaebead11ea5b48fa69b->leave($__internal_e32f922f463f1bc587b5998556d6014b8a6e859d46cdcaebead11ea5b48fa69b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11916f4485bfa0f2978a46f4b5d4e38549f9b4dd7f7ed416abe6cb34d97c7e38 = $this->env->getExtension("native_profiler");
        $__internal_11916f4485bfa0f2978a46f4b5d4e38549f9b4dd7f7ed416abe6cb34d97c7e38->enter($__internal_11916f4485bfa0f2978a46f4b5d4e38549f9b4dd7f7ed416abe6cb34d97c7e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11916f4485bfa0f2978a46f4b5d4e38549f9b4dd7f7ed416abe6cb34d97c7e38->leave($__internal_11916f4485bfa0f2978a46f4b5d4e38549f9b4dd7f7ed416abe6cb34d97c7e38_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_702c5aa7afb90deb6c565e2e23adaabcbcedf2325393d30affdce3872acaf422 = $this->env->getExtension("native_profiler");
        $__internal_702c5aa7afb90deb6c565e2e23adaabcbcedf2325393d30affdce3872acaf422->enter($__internal_702c5aa7afb90deb6c565e2e23adaabcbcedf2325393d30affdce3872acaf422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_702c5aa7afb90deb6c565e2e23adaabcbcedf2325393d30affdce3872acaf422->leave($__internal_702c5aa7afb90deb6c565e2e23adaabcbcedf2325393d30affdce3872acaf422_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

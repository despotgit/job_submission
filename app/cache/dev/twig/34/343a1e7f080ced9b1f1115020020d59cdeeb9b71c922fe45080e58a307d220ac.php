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
        $__internal_09e2669218f468a0bf363ea43b009ed33c3d47c3d7bc032156d8a44eaa39556f = $this->env->getExtension("native_profiler");
        $__internal_09e2669218f468a0bf363ea43b009ed33c3d47c3d7bc032156d8a44eaa39556f->enter($__internal_09e2669218f468a0bf363ea43b009ed33c3d47c3d7bc032156d8a44eaa39556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e2669218f468a0bf363ea43b009ed33c3d47c3d7bc032156d8a44eaa39556f->leave($__internal_09e2669218f468a0bf363ea43b009ed33c3d47c3d7bc032156d8a44eaa39556f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_182192116a8a398786c6e3d35e71f46921a7f5033d927deaff4b9bf9a31108f5 = $this->env->getExtension("native_profiler");
        $__internal_182192116a8a398786c6e3d35e71f46921a7f5033d927deaff4b9bf9a31108f5->enter($__internal_182192116a8a398786c6e3d35e71f46921a7f5033d927deaff4b9bf9a31108f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_182192116a8a398786c6e3d35e71f46921a7f5033d927deaff4b9bf9a31108f5->leave($__internal_182192116a8a398786c6e3d35e71f46921a7f5033d927deaff4b9bf9a31108f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c6461fd4a2ab1a170192a200723cc344ac553efd4a88cab6dc23fadd1cfb785 = $this->env->getExtension("native_profiler");
        $__internal_7c6461fd4a2ab1a170192a200723cc344ac553efd4a88cab6dc23fadd1cfb785->enter($__internal_7c6461fd4a2ab1a170192a200723cc344ac553efd4a88cab6dc23fadd1cfb785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c6461fd4a2ab1a170192a200723cc344ac553efd4a88cab6dc23fadd1cfb785->leave($__internal_7c6461fd4a2ab1a170192a200723cc344ac553efd4a88cab6dc23fadd1cfb785_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6ddcbb309116a2306743c6ecb316ec5a1e2baa485c66cdb344149c281d03d5e = $this->env->getExtension("native_profiler");
        $__internal_c6ddcbb309116a2306743c6ecb316ec5a1e2baa485c66cdb344149c281d03d5e->enter($__internal_c6ddcbb309116a2306743c6ecb316ec5a1e2baa485c66cdb344149c281d03d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6ddcbb309116a2306743c6ecb316ec5a1e2baa485c66cdb344149c281d03d5e->leave($__internal_c6ddcbb309116a2306743c6ecb316ec5a1e2baa485c66cdb344149c281d03d5e_prof);

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

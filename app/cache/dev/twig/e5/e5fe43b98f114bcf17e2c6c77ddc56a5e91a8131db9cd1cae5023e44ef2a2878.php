<?php

/* default/new.html.twig */
class __TwigTemplate_a35d3a6737cb3679e83135409aea66adc5c2a8c5fbc78e3136cfc4fcee62072d extends Twig_Template
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
        $__internal_8f58a9da9ec11937a08764f5671adf46d90fe5a62a3791cedce8dc7fe099d425 = $this->env->getExtension("native_profiler");
        $__internal_8f58a9da9ec11937a08764f5671adf46d90fe5a62a3791cedce8dc7fe099d425->enter($__internal_8f58a9da9ec11937a08764f5671adf46d90fe5a62a3791cedce8dc7fe099d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new.html.twig"));

        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_8f58a9da9ec11937a08764f5671adf46d90fe5a62a3791cedce8dc7fe099d425->leave($__internal_8f58a9da9ec11937a08764f5671adf46d90fe5a62a3791cedce8dc7fe099d425_prof);

    }

    public function getTemplateName()
    {
        return "default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/

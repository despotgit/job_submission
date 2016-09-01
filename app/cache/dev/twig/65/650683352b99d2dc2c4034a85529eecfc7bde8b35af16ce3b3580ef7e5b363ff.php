<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c643c44e7145311c5a88561e41f785d3aa627b2ad3b009e04aad1224b159169b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_261292ad73a2c51314142f09afc026eb796378b9926ad91536ef30f1b250bf2d = $this->env->getExtension("native_profiler");
        $__internal_261292ad73a2c51314142f09afc026eb796378b9926ad91536ef30f1b250bf2d->enter($__internal_261292ad73a2c51314142f09afc026eb796378b9926ad91536ef30f1b250bf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261292ad73a2c51314142f09afc026eb796378b9926ad91536ef30f1b250bf2d->leave($__internal_261292ad73a2c51314142f09afc026eb796378b9926ad91536ef30f1b250bf2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a7cb958cb3353bdca0380dffcad0b657ca2616cecb01bef677005683e46900c = $this->env->getExtension("native_profiler");
        $__internal_4a7cb958cb3353bdca0380dffcad0b657ca2616cecb01bef677005683e46900c->enter($__internal_4a7cb958cb3353bdca0380dffcad0b657ca2616cecb01bef677005683e46900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a7cb958cb3353bdca0380dffcad0b657ca2616cecb01bef677005683e46900c->leave($__internal_4a7cb958cb3353bdca0380dffcad0b657ca2616cecb01bef677005683e46900c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb00edb9be8c40a5769e9553468fa2921f767ff9a5818d828b7f91f9381bdfe7 = $this->env->getExtension("native_profiler");
        $__internal_bb00edb9be8c40a5769e9553468fa2921f767ff9a5818d828b7f91f9381bdfe7->enter($__internal_bb00edb9be8c40a5769e9553468fa2921f767ff9a5818d828b7f91f9381bdfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb00edb9be8c40a5769e9553468fa2921f767ff9a5818d828b7f91f9381bdfe7->leave($__internal_bb00edb9be8c40a5769e9553468fa2921f767ff9a5818d828b7f91f9381bdfe7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2a04bc6fe261c9ffeccd5a55f26cdbef932d5abd1de01985d6fcb3d07821926 = $this->env->getExtension("native_profiler");
        $__internal_d2a04bc6fe261c9ffeccd5a55f26cdbef932d5abd1de01985d6fcb3d07821926->enter($__internal_d2a04bc6fe261c9ffeccd5a55f26cdbef932d5abd1de01985d6fcb3d07821926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2a04bc6fe261c9ffeccd5a55f26cdbef932d5abd1de01985d6fcb3d07821926->leave($__internal_d2a04bc6fe261c9ffeccd5a55f26cdbef932d5abd1de01985d6fcb3d07821926_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

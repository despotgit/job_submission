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
        $__internal_cb8271a93a725658dd669c55fe724293fc71821579ab082c9cd95487a397c508 = $this->env->getExtension("native_profiler");
        $__internal_cb8271a93a725658dd669c55fe724293fc71821579ab082c9cd95487a397c508->enter($__internal_cb8271a93a725658dd669c55fe724293fc71821579ab082c9cd95487a397c508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb8271a93a725658dd669c55fe724293fc71821579ab082c9cd95487a397c508->leave($__internal_cb8271a93a725658dd669c55fe724293fc71821579ab082c9cd95487a397c508_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_678d7855ca91e385ddf0ae142383d351601d93c02736681aae7216b2e4ced65a = $this->env->getExtension("native_profiler");
        $__internal_678d7855ca91e385ddf0ae142383d351601d93c02736681aae7216b2e4ced65a->enter($__internal_678d7855ca91e385ddf0ae142383d351601d93c02736681aae7216b2e4ced65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_678d7855ca91e385ddf0ae142383d351601d93c02736681aae7216b2e4ced65a->leave($__internal_678d7855ca91e385ddf0ae142383d351601d93c02736681aae7216b2e4ced65a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd1f4a4d211c3d64ce6c06f7531c232d077810f839234b54606d5dcaa86ff5d8 = $this->env->getExtension("native_profiler");
        $__internal_fd1f4a4d211c3d64ce6c06f7531c232d077810f839234b54606d5dcaa86ff5d8->enter($__internal_fd1f4a4d211c3d64ce6c06f7531c232d077810f839234b54606d5dcaa86ff5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd1f4a4d211c3d64ce6c06f7531c232d077810f839234b54606d5dcaa86ff5d8->leave($__internal_fd1f4a4d211c3d64ce6c06f7531c232d077810f839234b54606d5dcaa86ff5d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_968320eab11c68871bfb11d73687910cd90f88e60a260b80b1dd4863703397de = $this->env->getExtension("native_profiler");
        $__internal_968320eab11c68871bfb11d73687910cd90f88e60a260b80b1dd4863703397de->enter($__internal_968320eab11c68871bfb11d73687910cd90f88e60a260b80b1dd4863703397de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_968320eab11c68871bfb11d73687910cd90f88e60a260b80b1dd4863703397de->leave($__internal_968320eab11c68871bfb11d73687910cd90f88e60a260b80b1dd4863703397de_prof);

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

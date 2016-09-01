<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_452fc23ddfd4505addab6ea132b662c1a47966c38c01cd93bbf6963165db2531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1b65c64c7dca5644536760489ff87c9b96f7901d795be836a93f1a66f4942add = $this->env->getExtension("native_profiler");
        $__internal_1b65c64c7dca5644536760489ff87c9b96f7901d795be836a93f1a66f4942add->enter($__internal_1b65c64c7dca5644536760489ff87c9b96f7901d795be836a93f1a66f4942add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b65c64c7dca5644536760489ff87c9b96f7901d795be836a93f1a66f4942add->leave($__internal_1b65c64c7dca5644536760489ff87c9b96f7901d795be836a93f1a66f4942add_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62d7523f3f980f1ac2098c33b87a9ef9b6cac8c1f6cf941c0d0a0505f786b468 = $this->env->getExtension("native_profiler");
        $__internal_62d7523f3f980f1ac2098c33b87a9ef9b6cac8c1f6cf941c0d0a0505f786b468->enter($__internal_62d7523f3f980f1ac2098c33b87a9ef9b6cac8c1f6cf941c0d0a0505f786b468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_62d7523f3f980f1ac2098c33b87a9ef9b6cac8c1f6cf941c0d0a0505f786b468->leave($__internal_62d7523f3f980f1ac2098c33b87a9ef9b6cac8c1f6cf941c0d0a0505f786b468_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fed05cd296d67e47f859473307d10ec4133e2cf55ce9c04b23e1751842a34c6a = $this->env->getExtension("native_profiler");
        $__internal_fed05cd296d67e47f859473307d10ec4133e2cf55ce9c04b23e1751842a34c6a->enter($__internal_fed05cd296d67e47f859473307d10ec4133e2cf55ce9c04b23e1751842a34c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fed05cd296d67e47f859473307d10ec4133e2cf55ce9c04b23e1751842a34c6a->leave($__internal_fed05cd296d67e47f859473307d10ec4133e2cf55ce9c04b23e1751842a34c6a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6228ef0f84107dc5cc24009c544fbdf411b5cdc411cd48596db6b06c4a05a23 = $this->env->getExtension("native_profiler");
        $__internal_a6228ef0f84107dc5cc24009c544fbdf411b5cdc411cd48596db6b06c4a05a23->enter($__internal_a6228ef0f84107dc5cc24009c544fbdf411b5cdc411cd48596db6b06c4a05a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a6228ef0f84107dc5cc24009c544fbdf411b5cdc411cd48596db6b06c4a05a23->leave($__internal_a6228ef0f84107dc5cc24009c544fbdf411b5cdc411cd48596db6b06c4a05a23_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

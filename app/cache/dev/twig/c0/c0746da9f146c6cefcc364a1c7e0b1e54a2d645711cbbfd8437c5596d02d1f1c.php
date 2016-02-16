<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0657f432d0ef3791659c29fafd04b254a308d77fd90b8ff902ff2d39250aa57 extends Twig_Template
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
        $__internal_d97ccd2a171bcf71eb601c58b26b1f01a0049d06f3581cb107afa981f3cc3277 = $this->env->getExtension("native_profiler");
        $__internal_d97ccd2a171bcf71eb601c58b26b1f01a0049d06f3581cb107afa981f3cc3277->enter($__internal_d97ccd2a171bcf71eb601c58b26b1f01a0049d06f3581cb107afa981f3cc3277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d97ccd2a171bcf71eb601c58b26b1f01a0049d06f3581cb107afa981f3cc3277->leave($__internal_d97ccd2a171bcf71eb601c58b26b1f01a0049d06f3581cb107afa981f3cc3277_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d02e13375c63a80784335121002fd2ce801d0a59dbf0445cdcc904a5b7ca5c9 = $this->env->getExtension("native_profiler");
        $__internal_9d02e13375c63a80784335121002fd2ce801d0a59dbf0445cdcc904a5b7ca5c9->enter($__internal_9d02e13375c63a80784335121002fd2ce801d0a59dbf0445cdcc904a5b7ca5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9d02e13375c63a80784335121002fd2ce801d0a59dbf0445cdcc904a5b7ca5c9->leave($__internal_9d02e13375c63a80784335121002fd2ce801d0a59dbf0445cdcc904a5b7ca5c9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75f8d9f7223af3ed435d4eb51430eccd430e879df6c15d76405b1b0c169b3523 = $this->env->getExtension("native_profiler");
        $__internal_75f8d9f7223af3ed435d4eb51430eccd430e879df6c15d76405b1b0c169b3523->enter($__internal_75f8d9f7223af3ed435d4eb51430eccd430e879df6c15d76405b1b0c169b3523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_75f8d9f7223af3ed435d4eb51430eccd430e879df6c15d76405b1b0c169b3523->leave($__internal_75f8d9f7223af3ed435d4eb51430eccd430e879df6c15d76405b1b0c169b3523_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0469417c76fb8f3b9a22b59e38e5acae7bf23ee04793d0a84c6871406b141021 = $this->env->getExtension("native_profiler");
        $__internal_0469417c76fb8f3b9a22b59e38e5acae7bf23ee04793d0a84c6871406b141021->enter($__internal_0469417c76fb8f3b9a22b59e38e5acae7bf23ee04793d0a84c6871406b141021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0469417c76fb8f3b9a22b59e38e5acae7bf23ee04793d0a84c6871406b141021->leave($__internal_0469417c76fb8f3b9a22b59e38e5acae7bf23ee04793d0a84c6871406b141021_prof);

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

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a108c061842fea96b2012c0ffdf5a523837f6dbea9d543bf353d8ed1540a024 extends Twig_Template
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
        $__internal_8979051debecf4e41d50b23e0fe4d6f0feaa0c159368359ed48cb38aede4dcfe = $this->env->getExtension("native_profiler");
        $__internal_8979051debecf4e41d50b23e0fe4d6f0feaa0c159368359ed48cb38aede4dcfe->enter($__internal_8979051debecf4e41d50b23e0fe4d6f0feaa0c159368359ed48cb38aede4dcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8979051debecf4e41d50b23e0fe4d6f0feaa0c159368359ed48cb38aede4dcfe->leave($__internal_8979051debecf4e41d50b23e0fe4d6f0feaa0c159368359ed48cb38aede4dcfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1476924fa66c8262a6fdd7e001a2d916c3846bce0a0d7069d91f99c46dac509 = $this->env->getExtension("native_profiler");
        $__internal_c1476924fa66c8262a6fdd7e001a2d916c3846bce0a0d7069d91f99c46dac509->enter($__internal_c1476924fa66c8262a6fdd7e001a2d916c3846bce0a0d7069d91f99c46dac509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1476924fa66c8262a6fdd7e001a2d916c3846bce0a0d7069d91f99c46dac509->leave($__internal_c1476924fa66c8262a6fdd7e001a2d916c3846bce0a0d7069d91f99c46dac509_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37ba7d2714581ce077c70d42e7f3465145492d3bc453b32c633f3d8188d43464 = $this->env->getExtension("native_profiler");
        $__internal_37ba7d2714581ce077c70d42e7f3465145492d3bc453b32c633f3d8188d43464->enter($__internal_37ba7d2714581ce077c70d42e7f3465145492d3bc453b32c633f3d8188d43464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37ba7d2714581ce077c70d42e7f3465145492d3bc453b32c633f3d8188d43464->leave($__internal_37ba7d2714581ce077c70d42e7f3465145492d3bc453b32c633f3d8188d43464_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd236f0c257d1f80cf057ace77d71f96e07c56b519550b2d2ffb5c832b8cf7f2 = $this->env->getExtension("native_profiler");
        $__internal_cd236f0c257d1f80cf057ace77d71f96e07c56b519550b2d2ffb5c832b8cf7f2->enter($__internal_cd236f0c257d1f80cf057ace77d71f96e07c56b519550b2d2ffb5c832b8cf7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd236f0c257d1f80cf057ace77d71f96e07c56b519550b2d2ffb5c832b8cf7f2->leave($__internal_cd236f0c257d1f80cf057ace77d71f96e07c56b519550b2d2ffb5c832b8cf7f2_prof);

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

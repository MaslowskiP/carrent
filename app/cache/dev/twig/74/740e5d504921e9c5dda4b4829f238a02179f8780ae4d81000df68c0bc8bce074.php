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
        $__internal_2c9d9e1f5ef4ac2d0d70d5985e83ab59fbb274c5a71fa3ab28389aba4f636f23 = $this->env->getExtension("native_profiler");
        $__internal_2c9d9e1f5ef4ac2d0d70d5985e83ab59fbb274c5a71fa3ab28389aba4f636f23->enter($__internal_2c9d9e1f5ef4ac2d0d70d5985e83ab59fbb274c5a71fa3ab28389aba4f636f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9d9e1f5ef4ac2d0d70d5985e83ab59fbb274c5a71fa3ab28389aba4f636f23->leave($__internal_2c9d9e1f5ef4ac2d0d70d5985e83ab59fbb274c5a71fa3ab28389aba4f636f23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19a7b10d28ea0920e125a93b37755a4e3438d2a8ebc489b200e3db4d2fd3c6ca = $this->env->getExtension("native_profiler");
        $__internal_19a7b10d28ea0920e125a93b37755a4e3438d2a8ebc489b200e3db4d2fd3c6ca->enter($__internal_19a7b10d28ea0920e125a93b37755a4e3438d2a8ebc489b200e3db4d2fd3c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19a7b10d28ea0920e125a93b37755a4e3438d2a8ebc489b200e3db4d2fd3c6ca->leave($__internal_19a7b10d28ea0920e125a93b37755a4e3438d2a8ebc489b200e3db4d2fd3c6ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_add4d8307b28942da1f2c8039c941ffc312a9b8a0f71f2446800650fb8037704 = $this->env->getExtension("native_profiler");
        $__internal_add4d8307b28942da1f2c8039c941ffc312a9b8a0f71f2446800650fb8037704->enter($__internal_add4d8307b28942da1f2c8039c941ffc312a9b8a0f71f2446800650fb8037704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_add4d8307b28942da1f2c8039c941ffc312a9b8a0f71f2446800650fb8037704->leave($__internal_add4d8307b28942da1f2c8039c941ffc312a9b8a0f71f2446800650fb8037704_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ea72dd8947ee2696390192b87055544902e0df2d3a356e332fa3166b5d45020 = $this->env->getExtension("native_profiler");
        $__internal_8ea72dd8947ee2696390192b87055544902e0df2d3a356e332fa3166b5d45020->enter($__internal_8ea72dd8947ee2696390192b87055544902e0df2d3a356e332fa3166b5d45020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ea72dd8947ee2696390192b87055544902e0df2d3a356e332fa3166b5d45020->leave($__internal_8ea72dd8947ee2696390192b87055544902e0df2d3a356e332fa3166b5d45020_prof);

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

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
        $__internal_93d10007b923bc114e5d2e1da6f2cc5942176409983000f8ca445803c7f79359 = $this->env->getExtension("native_profiler");
        $__internal_93d10007b923bc114e5d2e1da6f2cc5942176409983000f8ca445803c7f79359->enter($__internal_93d10007b923bc114e5d2e1da6f2cc5942176409983000f8ca445803c7f79359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93d10007b923bc114e5d2e1da6f2cc5942176409983000f8ca445803c7f79359->leave($__internal_93d10007b923bc114e5d2e1da6f2cc5942176409983000f8ca445803c7f79359_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39bf37d75d399dca155f18488d019cf012ed09845b63bd2fb291944467bb53ad = $this->env->getExtension("native_profiler");
        $__internal_39bf37d75d399dca155f18488d019cf012ed09845b63bd2fb291944467bb53ad->enter($__internal_39bf37d75d399dca155f18488d019cf012ed09845b63bd2fb291944467bb53ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39bf37d75d399dca155f18488d019cf012ed09845b63bd2fb291944467bb53ad->leave($__internal_39bf37d75d399dca155f18488d019cf012ed09845b63bd2fb291944467bb53ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb0e8370f439244604613d17c41e4c2b9952884ece260bc8ae50f094c9e64024 = $this->env->getExtension("native_profiler");
        $__internal_bb0e8370f439244604613d17c41e4c2b9952884ece260bc8ae50f094c9e64024->enter($__internal_bb0e8370f439244604613d17c41e4c2b9952884ece260bc8ae50f094c9e64024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb0e8370f439244604613d17c41e4c2b9952884ece260bc8ae50f094c9e64024->leave($__internal_bb0e8370f439244604613d17c41e4c2b9952884ece260bc8ae50f094c9e64024_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cad2495fc260f2cdc4a12f2a3fcfb2933a91def8dc5495e78bc13c0072b6cfff = $this->env->getExtension("native_profiler");
        $__internal_cad2495fc260f2cdc4a12f2a3fcfb2933a91def8dc5495e78bc13c0072b6cfff->enter($__internal_cad2495fc260f2cdc4a12f2a3fcfb2933a91def8dc5495e78bc13c0072b6cfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cad2495fc260f2cdc4a12f2a3fcfb2933a91def8dc5495e78bc13c0072b6cfff->leave($__internal_cad2495fc260f2cdc4a12f2a3fcfb2933a91def8dc5495e78bc13c0072b6cfff_prof);

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

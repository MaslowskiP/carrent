<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a68328a94291fa9f3ccd421e822a7da834c60e2c9af097c608993f2bcd18861e extends Twig_Template
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
        $__internal_1554eb5a4b2c42a6dcd9c0580b44fcafcf674e907b4ba2f194204ba317cd4c2f = $this->env->getExtension("native_profiler");
        $__internal_1554eb5a4b2c42a6dcd9c0580b44fcafcf674e907b4ba2f194204ba317cd4c2f->enter($__internal_1554eb5a4b2c42a6dcd9c0580b44fcafcf674e907b4ba2f194204ba317cd4c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1554eb5a4b2c42a6dcd9c0580b44fcafcf674e907b4ba2f194204ba317cd4c2f->leave($__internal_1554eb5a4b2c42a6dcd9c0580b44fcafcf674e907b4ba2f194204ba317cd4c2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fc93e635c6ab91eecb194ce50b7622d37d59d12c800bf597875062bb17b879f = $this->env->getExtension("native_profiler");
        $__internal_3fc93e635c6ab91eecb194ce50b7622d37d59d12c800bf597875062bb17b879f->enter($__internal_3fc93e635c6ab91eecb194ce50b7622d37d59d12c800bf597875062bb17b879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3fc93e635c6ab91eecb194ce50b7622d37d59d12c800bf597875062bb17b879f->leave($__internal_3fc93e635c6ab91eecb194ce50b7622d37d59d12c800bf597875062bb17b879f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69bfdec8ee5687bfb9a592a18ab7dac8d6a51a158137cf163b0c9eb85e887e0b = $this->env->getExtension("native_profiler");
        $__internal_69bfdec8ee5687bfb9a592a18ab7dac8d6a51a158137cf163b0c9eb85e887e0b->enter($__internal_69bfdec8ee5687bfb9a592a18ab7dac8d6a51a158137cf163b0c9eb85e887e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69bfdec8ee5687bfb9a592a18ab7dac8d6a51a158137cf163b0c9eb85e887e0b->leave($__internal_69bfdec8ee5687bfb9a592a18ab7dac8d6a51a158137cf163b0c9eb85e887e0b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0fc707872b823118f4429289664699b3003117881b88af57d440495dc3c8a2 = $this->env->getExtension("native_profiler");
        $__internal_df0fc707872b823118f4429289664699b3003117881b88af57d440495dc3c8a2->enter($__internal_df0fc707872b823118f4429289664699b3003117881b88af57d440495dc3c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_df0fc707872b823118f4429289664699b3003117881b88af57d440495dc3c8a2->leave($__internal_df0fc707872b823118f4429289664699b3003117881b88af57d440495dc3c8a2_prof);

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

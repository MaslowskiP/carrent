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
        $__internal_3f07cb05c6c1e37ec909bb7b3f62c9603fef2a656bbdeeb2d21867a23813acac = $this->env->getExtension("native_profiler");
        $__internal_3f07cb05c6c1e37ec909bb7b3f62c9603fef2a656bbdeeb2d21867a23813acac->enter($__internal_3f07cb05c6c1e37ec909bb7b3f62c9603fef2a656bbdeeb2d21867a23813acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f07cb05c6c1e37ec909bb7b3f62c9603fef2a656bbdeeb2d21867a23813acac->leave($__internal_3f07cb05c6c1e37ec909bb7b3f62c9603fef2a656bbdeeb2d21867a23813acac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c054344e3afc595434421040d7af1a1a18438ce793a73928de96787ae6bf816 = $this->env->getExtension("native_profiler");
        $__internal_8c054344e3afc595434421040d7af1a1a18438ce793a73928de96787ae6bf816->enter($__internal_8c054344e3afc595434421040d7af1a1a18438ce793a73928de96787ae6bf816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8c054344e3afc595434421040d7af1a1a18438ce793a73928de96787ae6bf816->leave($__internal_8c054344e3afc595434421040d7af1a1a18438ce793a73928de96787ae6bf816_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b21e5a4de034e01d20a4a1c304ac5c59a228392b91ecc7692c0d7a8cfaa1adf0 = $this->env->getExtension("native_profiler");
        $__internal_b21e5a4de034e01d20a4a1c304ac5c59a228392b91ecc7692c0d7a8cfaa1adf0->enter($__internal_b21e5a4de034e01d20a4a1c304ac5c59a228392b91ecc7692c0d7a8cfaa1adf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b21e5a4de034e01d20a4a1c304ac5c59a228392b91ecc7692c0d7a8cfaa1adf0->leave($__internal_b21e5a4de034e01d20a4a1c304ac5c59a228392b91ecc7692c0d7a8cfaa1adf0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6055b18c55e2ea92f289d5a601235676f60afc54e8e17b9bd217981d4392529a = $this->env->getExtension("native_profiler");
        $__internal_6055b18c55e2ea92f289d5a601235676f60afc54e8e17b9bd217981d4392529a->enter($__internal_6055b18c55e2ea92f289d5a601235676f60afc54e8e17b9bd217981d4392529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6055b18c55e2ea92f289d5a601235676f60afc54e8e17b9bd217981d4392529a->leave($__internal_6055b18c55e2ea92f289d5a601235676f60afc54e8e17b9bd217981d4392529a_prof);

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

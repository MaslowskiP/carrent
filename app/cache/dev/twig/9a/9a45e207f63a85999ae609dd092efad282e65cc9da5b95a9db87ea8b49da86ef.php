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
        $__internal_18d21a9ffdc2f5ba47f8dc45a579db8e67ec81bf9df98bbe5ccdc0125757978f = $this->env->getExtension("native_profiler");
        $__internal_18d21a9ffdc2f5ba47f8dc45a579db8e67ec81bf9df98bbe5ccdc0125757978f->enter($__internal_18d21a9ffdc2f5ba47f8dc45a579db8e67ec81bf9df98bbe5ccdc0125757978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d21a9ffdc2f5ba47f8dc45a579db8e67ec81bf9df98bbe5ccdc0125757978f->leave($__internal_18d21a9ffdc2f5ba47f8dc45a579db8e67ec81bf9df98bbe5ccdc0125757978f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0212dcfb57a07f919250bd4927b2f84ebeb8a31912300b12621560b8aee6c491 = $this->env->getExtension("native_profiler");
        $__internal_0212dcfb57a07f919250bd4927b2f84ebeb8a31912300b12621560b8aee6c491->enter($__internal_0212dcfb57a07f919250bd4927b2f84ebeb8a31912300b12621560b8aee6c491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0212dcfb57a07f919250bd4927b2f84ebeb8a31912300b12621560b8aee6c491->leave($__internal_0212dcfb57a07f919250bd4927b2f84ebeb8a31912300b12621560b8aee6c491_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_879aa75b90f779b6be3abd7df00562b57d1e847102591b447f05ae01ef294e0d = $this->env->getExtension("native_profiler");
        $__internal_879aa75b90f779b6be3abd7df00562b57d1e847102591b447f05ae01ef294e0d->enter($__internal_879aa75b90f779b6be3abd7df00562b57d1e847102591b447f05ae01ef294e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_879aa75b90f779b6be3abd7df00562b57d1e847102591b447f05ae01ef294e0d->leave($__internal_879aa75b90f779b6be3abd7df00562b57d1e847102591b447f05ae01ef294e0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_575fca5e54684faea409fff04e83b447c4ccd7db7c941035a5d9b626a1f24092 = $this->env->getExtension("native_profiler");
        $__internal_575fca5e54684faea409fff04e83b447c4ccd7db7c941035a5d9b626a1f24092->enter($__internal_575fca5e54684faea409fff04e83b447c4ccd7db7c941035a5d9b626a1f24092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_575fca5e54684faea409fff04e83b447c4ccd7db7c941035a5d9b626a1f24092->leave($__internal_575fca5e54684faea409fff04e83b447c4ccd7db7c941035a5d9b626a1f24092_prof);

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

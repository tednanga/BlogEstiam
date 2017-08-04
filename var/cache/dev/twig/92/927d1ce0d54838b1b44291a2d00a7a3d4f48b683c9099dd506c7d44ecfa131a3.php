<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_670393d1e77fb3aacd3bfd08f90413a24b66b6cd3eb892c238c98f6108a00684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_143c27fb11bf5ff11a23886f9a97c0a4ccd0bc365a84588dd778d6cae5b43c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143c27fb11bf5ff11a23886f9a97c0a4ccd0bc365a84588dd778d6cae5b43c73->enter($__internal_143c27fb11bf5ff11a23886f9a97c0a4ccd0bc365a84588dd778d6cae5b43c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $__internal_42ac813eff4851ead667c1b7083046c73dee649b7740dc87e44663adbf5f002e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ac813eff4851ead667c1b7083046c73dee649b7740dc87e44663adbf5f002e->enter($__internal_42ac813eff4851ead667c1b7083046c73dee649b7740dc87e44663adbf5f002e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143c27fb11bf5ff11a23886f9a97c0a4ccd0bc365a84588dd778d6cae5b43c73->leave($__internal_143c27fb11bf5ff11a23886f9a97c0a4ccd0bc365a84588dd778d6cae5b43c73_prof);

        
        $__internal_42ac813eff4851ead667c1b7083046c73dee649b7740dc87e44663adbf5f002e->leave($__internal_42ac813eff4851ead667c1b7083046c73dee649b7740dc87e44663adbf5f002e_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d8b5c69a057de1f718833b8239b212a778c2956f2c1b7a57802e312e6fc13cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b5c69a057de1f718833b8239b212a778c2956f2c1b7a57802e312e6fc13cd6->enter($__internal_d8b5c69a057de1f718833b8239b212a778c2956f2c1b7a57802e312e6fc13cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_b8479c968e101973de95bbbf70c69bdd38797bf8f23578a8dbca2d78ceeae9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8479c968e101973de95bbbf70c69bdd38797bf8f23578a8dbca2d78ceeae9ff->enter($__internal_b8479c968e101973de95bbbf70c69bdd38797bf8f23578a8dbca2d78ceeae9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Sidebar content
";
        
        $__internal_b8479c968e101973de95bbbf70c69bdd38797bf8f23578a8dbca2d78ceeae9ff->leave($__internal_b8479c968e101973de95bbbf70c69bdd38797bf8f23578a8dbca2d78ceeae9ff_prof);

        
        $__internal_d8b5c69a057de1f718833b8239b212a778c2956f2c1b7a57802e312e6fc13cd6->leave($__internal_d8b5c69a057de1f718833b8239b212a778c2956f2c1b7a57802e312e6fc13cd6_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
    Sidebar content
{% endblock %}", "BlogBundle::layout.html.twig", "/home/telnanga/Blog/src/BlogBundle/Resources/views/layout.html.twig");
    }
}

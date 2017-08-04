<?php

/* BlogBundle:Page:index.html.twig */
class __TwigTemplate_c50f719f195d12940108b7bbb35b27e0943388e45bd1f2ee55cd852c1de671bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3910f162f509c38a284d2e99123731af5b9157826e731c25877cfd8ca84e7152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3910f162f509c38a284d2e99123731af5b9157826e731c25877cfd8ca84e7152->enter($__internal_3910f162f509c38a284d2e99123731af5b9157826e731c25877cfd8ca84e7152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:index.html.twig"));

        $__internal_a108dca13ac678439a84ec7588683a3d43e444bd932bcf9eba1287fd3cb51346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a108dca13ac678439a84ec7588683a3d43e444bd932bcf9eba1287fd3cb51346->enter($__internal_a108dca13ac678439a84ec7588683a3d43e444bd932bcf9eba1287fd3cb51346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3910f162f509c38a284d2e99123731af5b9157826e731c25877cfd8ca84e7152->leave($__internal_3910f162f509c38a284d2e99123731af5b9157826e731c25877cfd8ca84e7152_prof);

        
        $__internal_a108dca13ac678439a84ec7588683a3d43e444bd932bcf9eba1287fd3cb51346->leave($__internal_a108dca13ac678439a84ec7588683a3d43e444bd932bcf9eba1287fd3cb51346_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f627206fc4779cb53429c1987d7002fcc018134e6735d1bbbc11a9fec5e4db8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f627206fc4779cb53429c1987d7002fcc018134e6735d1bbbc11a9fec5e4db8c->enter($__internal_f627206fc4779cb53429c1987d7002fcc018134e6735d1bbbc11a9fec5e4db8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75d900557a39486a1f92a75fd4a8b00be6624746126f54242a59e38af12d5eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d900557a39486a1f92a75fd4a8b00be6624746126f54242a59e38af12d5eff->enter($__internal_75d900557a39486a1f92a75fd4a8b00be6624746126f54242a59e38af12d5eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_75d900557a39486a1f92a75fd4a8b00be6624746126f54242a59e38af12d5eff->leave($__internal_75d900557a39486a1f92a75fd4a8b00be6624746126f54242a59e38af12d5eff_prof);

        
        $__internal_f627206fc4779cb53429c1987d7002fcc018134e6735d1bbbc11a9fec5e4db8c->leave($__internal_f627206fc4779cb53429c1987d7002fcc018134e6735d1bbbc11a9fec5e4db8c_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:index.html.twig";
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
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BlogBundle::layout.html.twig' %}

{% block body %}
    Blog homepage
{% endblock %}", "BlogBundle:Page:index.html.twig", "/home/telnanga/Blog/src/BlogBundle/Resources/views/Page/index.html.twig");
    }
}

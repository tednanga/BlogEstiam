<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
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
        $__internal_9190a10a166036acb80bc50e7177a70b780c21dc8b81857186d57cd2e867cb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9190a10a166036acb80bc50e7177a70b780c21dc8b81857186d57cd2e867cb75->enter($__internal_9190a10a166036acb80bc50e7177a70b780c21dc8b81857186d57cd2e867cb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f20bc382ec019ef9032c640176f0c9914529413b05e586077c1eb52a45b2c746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20bc382ec019ef9032c640176f0c9914529413b05e586077c1eb52a45b2c746->enter($__internal_f20bc382ec019ef9032c640176f0c9914529413b05e586077c1eb52a45b2c746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9190a10a166036acb80bc50e7177a70b780c21dc8b81857186d57cd2e867cb75->leave($__internal_9190a10a166036acb80bc50e7177a70b780c21dc8b81857186d57cd2e867cb75_prof);

        
        $__internal_f20bc382ec019ef9032c640176f0c9914529413b05e586077c1eb52a45b2c746->leave($__internal_f20bc382ec019ef9032c640176f0c9914529413b05e586077c1eb52a45b2c746_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc25cc05f26570def0a25aeafed61bc4f45b60824d5b2efa0c097880256c9bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc25cc05f26570def0a25aeafed61bc4f45b60824d5b2efa0c097880256c9bdf->enter($__internal_dc25cc05f26570def0a25aeafed61bc4f45b60824d5b2efa0c097880256c9bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_129267051109d2c1a17d44505aa9ec0bf8cd368a7a26cf06f71a96a9008359f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129267051109d2c1a17d44505aa9ec0bf8cd368a7a26cf06f71a96a9008359f4->enter($__internal_129267051109d2c1a17d44505aa9ec0bf8cd368a7a26cf06f71a96a9008359f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_129267051109d2c1a17d44505aa9ec0bf8cd368a7a26cf06f71a96a9008359f4->leave($__internal_129267051109d2c1a17d44505aa9ec0bf8cd368a7a26cf06f71a96a9008359f4_prof);

        
        $__internal_dc25cc05f26570def0a25aeafed61bc4f45b60824d5b2efa0c097880256c9bdf->leave($__internal_dc25cc05f26570def0a25aeafed61bc4f45b60824d5b2efa0c097880256c9bdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ceab43defb4235a8174d27954c7bf7376e980a965f26512e4d9893a14351503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ceab43defb4235a8174d27954c7bf7376e980a965f26512e4d9893a14351503->enter($__internal_3ceab43defb4235a8174d27954c7bf7376e980a965f26512e4d9893a14351503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a765af6010d88cf29ef6e99126cf69edbcfaba8d2ea2c53b9b11cc4a56701f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a765af6010d88cf29ef6e99126cf69edbcfaba8d2ea2c53b9b11cc4a56701f40->enter($__internal_a765af6010d88cf29ef6e99126cf69edbcfaba8d2ea2c53b9b11cc4a56701f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a765af6010d88cf29ef6e99126cf69edbcfaba8d2ea2c53b9b11cc4a56701f40->leave($__internal_a765af6010d88cf29ef6e99126cf69edbcfaba8d2ea2c53b9b11cc4a56701f40_prof);

        
        $__internal_3ceab43defb4235a8174d27954c7bf7376e980a965f26512e4d9893a14351503->leave($__internal_3ceab43defb4235a8174d27954c7bf7376e980a965f26512e4d9893a14351503_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_683f61e6f6169d459393ab489461986558cce193cb19b7f17c99d4e2324d23f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683f61e6f6169d459393ab489461986558cce193cb19b7f17c99d4e2324d23f7->enter($__internal_683f61e6f6169d459393ab489461986558cce193cb19b7f17c99d4e2324d23f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_16093a4c47751355c9308ca437a33ff7d14ee6a2ace60fa017b2277f974060b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16093a4c47751355c9308ca437a33ff7d14ee6a2ace60fa017b2277f974060b7->enter($__internal_16093a4c47751355c9308ca437a33ff7d14ee6a2ace60fa017b2277f974060b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16093a4c47751355c9308ca437a33ff7d14ee6a2ace60fa017b2277f974060b7->leave($__internal_16093a4c47751355c9308ca437a33ff7d14ee6a2ace60fa017b2277f974060b7_prof);

        
        $__internal_683f61e6f6169d459393ab489461986558cce193cb19b7f17c99d4e2324d23f7->leave($__internal_683f61e6f6169d459393ab489461986558cce193cb19b7f17c99d4e2324d23f7_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/telnanga/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

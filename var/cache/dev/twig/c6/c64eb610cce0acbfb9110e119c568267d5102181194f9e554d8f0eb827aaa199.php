<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
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
        $__internal_0d1c3a617f9eeac57921f04c6ee337ec046b580d79e179d2651e13f28b5242a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1c3a617f9eeac57921f04c6ee337ec046b580d79e179d2651e13f28b5242a8->enter($__internal_0d1c3a617f9eeac57921f04c6ee337ec046b580d79e179d2651e13f28b5242a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_acf49677a0ed8f6230f900c7c383bb2cebb259abf49977e1c0a26128bfe567b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf49677a0ed8f6230f900c7c383bb2cebb259abf49977e1c0a26128bfe567b1->enter($__internal_acf49677a0ed8f6230f900c7c383bb2cebb259abf49977e1c0a26128bfe567b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1c3a617f9eeac57921f04c6ee337ec046b580d79e179d2651e13f28b5242a8->leave($__internal_0d1c3a617f9eeac57921f04c6ee337ec046b580d79e179d2651e13f28b5242a8_prof);

        
        $__internal_acf49677a0ed8f6230f900c7c383bb2cebb259abf49977e1c0a26128bfe567b1->leave($__internal_acf49677a0ed8f6230f900c7c383bb2cebb259abf49977e1c0a26128bfe567b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e4f324b11d7571347e5c9bff5a667996f2e7a97aa5a7eff9c4fe2a6aedc1af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4f324b11d7571347e5c9bff5a667996f2e7a97aa5a7eff9c4fe2a6aedc1af6->enter($__internal_7e4f324b11d7571347e5c9bff5a667996f2e7a97aa5a7eff9c4fe2a6aedc1af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38d1537336cff5996dd3657b2cac28638040fa17cf9032f25e4e47958a853ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d1537336cff5996dd3657b2cac28638040fa17cf9032f25e4e47958a853ccf->enter($__internal_38d1537336cff5996dd3657b2cac28638040fa17cf9032f25e4e47958a853ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_38d1537336cff5996dd3657b2cac28638040fa17cf9032f25e4e47958a853ccf->leave($__internal_38d1537336cff5996dd3657b2cac28638040fa17cf9032f25e4e47958a853ccf_prof);

        
        $__internal_7e4f324b11d7571347e5c9bff5a667996f2e7a97aa5a7eff9c4fe2a6aedc1af6->leave($__internal_7e4f324b11d7571347e5c9bff5a667996f2e7a97aa5a7eff9c4fe2a6aedc1af6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f086c73dc5210d6b67034b1456ed545953043b93ab26b0b27c8496042d40f889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f086c73dc5210d6b67034b1456ed545953043b93ab26b0b27c8496042d40f889->enter($__internal_f086c73dc5210d6b67034b1456ed545953043b93ab26b0b27c8496042d40f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ebff0dfbe3a421bd3717d880a8c9f4fc30d2d04adcae359e07042ea9c889d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebff0dfbe3a421bd3717d880a8c9f4fc30d2d04adcae359e07042ea9c889d6d->enter($__internal_7ebff0dfbe3a421bd3717d880a8c9f4fc30d2d04adcae359e07042ea9c889d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7ebff0dfbe3a421bd3717d880a8c9f4fc30d2d04adcae359e07042ea9c889d6d->leave($__internal_7ebff0dfbe3a421bd3717d880a8c9f4fc30d2d04adcae359e07042ea9c889d6d_prof);

        
        $__internal_f086c73dc5210d6b67034b1456ed545953043b93ab26b0b27c8496042d40f889->leave($__internal_f086c73dc5210d6b67034b1456ed545953043b93ab26b0b27c8496042d40f889_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e4c61a67ec6aa54b382be45b09aef8fdba78e6817b085ceffa5fb84a9f25491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4c61a67ec6aa54b382be45b09aef8fdba78e6817b085ceffa5fb84a9f25491->enter($__internal_2e4c61a67ec6aa54b382be45b09aef8fdba78e6817b085ceffa5fb84a9f25491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ef2f424d21f9b10b2e8a155ab5f21fc11a6aa51d8ca5cd80eface52dbde41f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef2f424d21f9b10b2e8a155ab5f21fc11a6aa51d8ca5cd80eface52dbde41f7->enter($__internal_2ef2f424d21f9b10b2e8a155ab5f21fc11a6aa51d8ca5cd80eface52dbde41f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2ef2f424d21f9b10b2e8a155ab5f21fc11a6aa51d8ca5cd80eface52dbde41f7->leave($__internal_2ef2f424d21f9b10b2e8a155ab5f21fc11a6aa51d8ca5cd80eface52dbde41f7_prof);

        
        $__internal_2e4c61a67ec6aa54b382be45b09aef8fdba78e6817b085ceffa5fb84a9f25491->leave($__internal_2e4c61a67ec6aa54b382be45b09aef8fdba78e6817b085ceffa5fb84a9f25491_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/telnanga/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_babbf1c3c246b089e017a5830ed9b3631372a22bc583910cdb7a76a08d764de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babbf1c3c246b089e017a5830ed9b3631372a22bc583910cdb7a76a08d764de3->enter($__internal_babbf1c3c246b089e017a5830ed9b3631372a22bc583910cdb7a76a08d764de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5464e17c1b464ce27c30bc8be5c787e0b10bef85599072862f723312e034f52e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5464e17c1b464ce27c30bc8be5c787e0b10bef85599072862f723312e034f52e->enter($__internal_5464e17c1b464ce27c30bc8be5c787e0b10bef85599072862f723312e034f52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_babbf1c3c246b089e017a5830ed9b3631372a22bc583910cdb7a76a08d764de3->leave($__internal_babbf1c3c246b089e017a5830ed9b3631372a22bc583910cdb7a76a08d764de3_prof);

        
        $__internal_5464e17c1b464ce27c30bc8be5c787e0b10bef85599072862f723312e034f52e->leave($__internal_5464e17c1b464ce27c30bc8be5c787e0b10bef85599072862f723312e034f52e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_470d7c77b876a50c3b068340e8c2f1344e09f4a043eb76f5e7cdd7d25f1acf2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470d7c77b876a50c3b068340e8c2f1344e09f4a043eb76f5e7cdd7d25f1acf2f->enter($__internal_470d7c77b876a50c3b068340e8c2f1344e09f4a043eb76f5e7cdd7d25f1acf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa470fb6975caed726a08a10d4838db5da572b7e1605e75100268bc9c65de3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa470fb6975caed726a08a10d4838db5da572b7e1605e75100268bc9c65de3dc->enter($__internal_fa470fb6975caed726a08a10d4838db5da572b7e1605e75100268bc9c65de3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fa470fb6975caed726a08a10d4838db5da572b7e1605e75100268bc9c65de3dc->leave($__internal_fa470fb6975caed726a08a10d4838db5da572b7e1605e75100268bc9c65de3dc_prof);

        
        $__internal_470d7c77b876a50c3b068340e8c2f1344e09f4a043eb76f5e7cdd7d25f1acf2f->leave($__internal_470d7c77b876a50c3b068340e8c2f1344e09f4a043eb76f5e7cdd7d25f1acf2f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcfe7f9c2a643f92c93fd2c6039086f3bb53e04ba769fbedfe864af4a819ee29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfe7f9c2a643f92c93fd2c6039086f3bb53e04ba769fbedfe864af4a819ee29->enter($__internal_bcfe7f9c2a643f92c93fd2c6039086f3bb53e04ba769fbedfe864af4a819ee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76eb25e7eb89274623a077ec30d1888ef43803d87c7604f7e457ea1b778d3019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76eb25e7eb89274623a077ec30d1888ef43803d87c7604f7e457ea1b778d3019->enter($__internal_76eb25e7eb89274623a077ec30d1888ef43803d87c7604f7e457ea1b778d3019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_76eb25e7eb89274623a077ec30d1888ef43803d87c7604f7e457ea1b778d3019->leave($__internal_76eb25e7eb89274623a077ec30d1888ef43803d87c7604f7e457ea1b778d3019_prof);

        
        $__internal_bcfe7f9c2a643f92c93fd2c6039086f3bb53e04ba769fbedfe864af4a819ee29->leave($__internal_bcfe7f9c2a643f92c93fd2c6039086f3bb53e04ba769fbedfe864af4a819ee29_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b66cfa760e456cce04c0e949f175ae6dc0a8a66277bb971afce70b3e02e949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b66cfa760e456cce04c0e949f175ae6dc0a8a66277bb971afce70b3e02e949->enter($__internal_b0b66cfa760e456cce04c0e949f175ae6dc0a8a66277bb971afce70b3e02e949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5d6830118e4f37e58492cb29ed7e9a4a8f26e2f9acce950fae3d829dbfb1516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d6830118e4f37e58492cb29ed7e9a4a8f26e2f9acce950fae3d829dbfb1516->enter($__internal_a5d6830118e4f37e58492cb29ed7e9a4a8f26e2f9acce950fae3d829dbfb1516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a5d6830118e4f37e58492cb29ed7e9a4a8f26e2f9acce950fae3d829dbfb1516->leave($__internal_a5d6830118e4f37e58492cb29ed7e9a4a8f26e2f9acce950fae3d829dbfb1516_prof);

        
        $__internal_b0b66cfa760e456cce04c0e949f175ae6dc0a8a66277bb971afce70b3e02e949->leave($__internal_b0b66cfa760e456cce04c0e949f175ae6dc0a8a66277bb971afce70b3e02e949_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/telnanga/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

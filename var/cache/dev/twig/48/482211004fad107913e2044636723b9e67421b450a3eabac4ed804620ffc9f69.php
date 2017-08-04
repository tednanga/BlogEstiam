<?php

/* ::base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2a34f6e784fa069f443e761dc645e3bb66fad5d460c5e38d1e4d40b9f771d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a34f6e784fa069f443e761dc645e3bb66fad5d460c5e38d1e4d40b9f771d3a->enter($__internal_a2a34f6e784fa069f443e761dc645e3bb66fad5d460c5e38d1e4d40b9f771d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fcd46c58e9c0229fce6c972b66e06bda22f229ba537ea237039dfbeacace0d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd46c58e9c0229fce6c972b66e06bda22f229ba537ea237039dfbeacace0d36->enter($__internal_fcd46c58e9c0229fce6c972b66e06bda22f229ba537ea237039dfbeacace0d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "        </div>


            <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
            <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
    </header>

    <section class=\"main-col\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    </section>
    <aside class=\"sidebar\">
        ";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "    </div>
</section>

";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "</body>
</html>";
        
        $__internal_a2a34f6e784fa069f443e761dc645e3bb66fad5d460c5e38d1e4d40b9f771d3a->leave($__internal_a2a34f6e784fa069f443e761dc645e3bb66fad5d460c5e38d1e4d40b9f771d3a_prof);

        
        $__internal_fcd46c58e9c0229fce6c972b66e06bda22f229ba537ea237039dfbeacace0d36->leave($__internal_fcd46c58e9c0229fce6c972b66e06bda22f229ba537ea237039dfbeacace0d36_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_398aebc672cb9888eb22450c3fb2e3ed0f47cc7fd3a6f3e0a69fc91621360413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398aebc672cb9888eb22450c3fb2e3ed0f47cc7fd3a6f3e0a69fc91621360413->enter($__internal_398aebc672cb9888eb22450c3fb2e3ed0f47cc7fd3a6f3e0a69fc91621360413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a1df67519e9043a0d0a9b549295e72524a8dcd5fbc119ea14c376a91bdd7dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1df67519e9043a0d0a9b549295e72524a8dcd5fbc119ea14c376a91bdd7dc2->enter($__internal_1a1df67519e9043a0d0a9b549295e72524a8dcd5fbc119ea14c376a91bdd7dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_1a1df67519e9043a0d0a9b549295e72524a8dcd5fbc119ea14c376a91bdd7dc2->leave($__internal_1a1df67519e9043a0d0a9b549295e72524a8dcd5fbc119ea14c376a91bdd7dc2_prof);

        
        $__internal_398aebc672cb9888eb22450c3fb2e3ed0f47cc7fd3a6f3e0a69fc91621360413->leave($__internal_398aebc672cb9888eb22450c3fb2e3ed0f47cc7fd3a6f3e0a69fc91621360413_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afe8aba67d4f11b15a1a680adbdfd7b365ffc1dfcdb0da13f6516bb477f0bee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afe8aba67d4f11b15a1a680adbdfd7b365ffc1dfcdb0da13f6516bb477f0bee1->enter($__internal_afe8aba67d4f11b15a1a680adbdfd7b365ffc1dfcdb0da13f6516bb477f0bee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ffd6bd94bbcd22566a5536b8ec13e086b843d3043699d223b698bf4ac4efaf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd6bd94bbcd22566a5536b8ec13e086b843d3043699d223b698bf4ac4efaf00->enter($__internal_ffd6bd94bbcd22566a5536b8ec13e086b843d3043699d223b698bf4ac4efaf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_ffd6bd94bbcd22566a5536b8ec13e086b843d3043699d223b698bf4ac4efaf00->leave($__internal_ffd6bd94bbcd22566a5536b8ec13e086b843d3043699d223b698bf4ac4efaf00_prof);

        
        $__internal_afe8aba67d4f11b15a1a680adbdfd7b365ffc1dfcdb0da13f6516bb477f0bee1->leave($__internal_afe8aba67d4f11b15a1a680adbdfd7b365ffc1dfcdb0da13f6516bb477f0bee1_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bd152afebec862dd75cdcd47f84ac579f8bf7ad77a7ecf2cf4ebc70248d6d614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd152afebec862dd75cdcd47f84ac579f8bf7ad77a7ecf2cf4ebc70248d6d614->enter($__internal_bd152afebec862dd75cdcd47f84ac579f8bf7ad77a7ecf2cf4ebc70248d6d614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_1cfddf1f9ee11b5413dd4f90d9fd2b2bfb7e87cf47352e917c9b30d77ab84e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfddf1f9ee11b5413dd4f90d9fd2b2bfb7e87cf47352e917c9b30d77ab84e9e->enter($__internal_1cfddf1f9ee11b5413dd4f90d9fd2b2bfb7e87cf47352e917c9b30d77ab84e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </nav>
            ";
        
        $__internal_1cfddf1f9ee11b5413dd4f90d9fd2b2bfb7e87cf47352e917c9b30d77ab84e9e->leave($__internal_1cfddf1f9ee11b5413dd4f90d9fd2b2bfb7e87cf47352e917c9b30d77ab84e9e_prof);

        
        $__internal_bd152afebec862dd75cdcd47f84ac579f8bf7ad77a7ecf2cf4ebc70248d6d614->leave($__internal_bd152afebec862dd75cdcd47f84ac579f8bf7ad77a7ecf2cf4ebc70248d6d614_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_36d999c43c410305952d94d5f99b7bc1724fa3d061d175ee42d2e5cca8ef0dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d999c43c410305952d94d5f99b7bc1724fa3d061d175ee42d2e5cca8ef0dc5->enter($__internal_36d999c43c410305952d94d5f99b7bc1724fa3d061d175ee42d2e5cca8ef0dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_36108151295c9e536edc7807456f28324965426cb0c75eed477c4e47f1a501df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36108151295c9e536edc7807456f28324965426cb0c75eed477c4e47f1a501df->enter($__internal_36108151295c9e536edc7807456f28324965426cb0c75eed477c4e47f1a501df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Blog</a>";
        
        $__internal_36108151295c9e536edc7807456f28324965426cb0c75eed477c4e47f1a501df->leave($__internal_36108151295c9e536edc7807456f28324965426cb0c75eed477c4e47f1a501df_prof);

        
        $__internal_36d999c43c410305952d94d5f99b7bc1724fa3d061d175ee42d2e5cca8ef0dc5->leave($__internal_36d999c43c410305952d94d5f99b7bc1724fa3d061d175ee42d2e5cca8ef0dc5_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_bf0ededa02076dcf6b7885610aee2ea9c4a6de6494978ee7dd53c622e2e22822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0ededa02076dcf6b7885610aee2ea9c4a6de6494978ee7dd53c622e2e22822->enter($__internal_bf0ededa02076dcf6b7885610aee2ea9c4a6de6494978ee7dd53c622e2e22822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_067155fb8daa2e912f2dbc8d9906e50cc148a1f9a66c67591d85a2baabc4975f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067155fb8daa2e912f2dbc8d9906e50cc148a1f9a66c67591d85a2baabc4975f->enter($__internal_067155fb8daa2e912f2dbc8d9906e50cc148a1f9a66c67591d85a2baabc4975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony3</a>";
        
        $__internal_067155fb8daa2e912f2dbc8d9906e50cc148a1f9a66c67591d85a2baabc4975f->leave($__internal_067155fb8daa2e912f2dbc8d9906e50cc148a1f9a66c67591d85a2baabc4975f_prof);

        
        $__internal_bf0ededa02076dcf6b7885610aee2ea9c4a6de6494978ee7dd53c622e2e22822->leave($__internal_bf0ededa02076dcf6b7885610aee2ea9c4a6de6494978ee7dd53c622e2e22822_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6ed4eac0a1ff1e44ac84d92681fe2025921f9c1a4eae01cdaee3db1c80d361a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ed4eac0a1ff1e44ac84d92681fe2025921f9c1a4eae01cdaee3db1c80d361a->enter($__internal_a6ed4eac0a1ff1e44ac84d92681fe2025921f9c1a4eae01cdaee3db1c80d361a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7308625e063e309f44039b66040ba10f6af35e4e9bfc441533ed2e9b93580233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7308625e063e309f44039b66040ba10f6af35e4e9bfc441533ed2e9b93580233->enter($__internal_7308625e063e309f44039b66040ba10f6af35e4e9bfc441533ed2e9b93580233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7308625e063e309f44039b66040ba10f6af35e4e9bfc441533ed2e9b93580233->leave($__internal_7308625e063e309f44039b66040ba10f6af35e4e9bfc441533ed2e9b93580233_prof);

        
        $__internal_a6ed4eac0a1ff1e44ac84d92681fe2025921f9c1a4eae01cdaee3db1c80d361a->leave($__internal_a6ed4eac0a1ff1e44ac84d92681fe2025921f9c1a4eae01cdaee3db1c80d361a_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ad76eb7a3344dd40e557c3ce4c15cbd63df169d8034b673d66e6e8df946737ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad76eb7a3344dd40e557c3ce4c15cbd63df169d8034b673d66e6e8df946737ef->enter($__internal_ad76eb7a3344dd40e557c3ce4c15cbd63df169d8034b673d66e6e8df946737ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_435ac78ff59440bf4bcd1e83678e20879df39ab4ecb8ed7d894aa3dedb786d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435ac78ff59440bf4bcd1e83678e20879df39ab4ecb8ed7d894aa3dedb786d16->enter($__internal_435ac78ff59440bf4bcd1e83678e20879df39ab4ecb8ed7d894aa3dedb786d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_435ac78ff59440bf4bcd1e83678e20879df39ab4ecb8ed7d894aa3dedb786d16->leave($__internal_435ac78ff59440bf4bcd1e83678e20879df39ab4ecb8ed7d894aa3dedb786d16_prof);

        
        $__internal_ad76eb7a3344dd40e557c3ce4c15cbd63df169d8034b673d66e6e8df946737ef->leave($__internal_ad76eb7a3344dd40e557c3ce4c15cbd63df169d8034b673d66e6e8df946737ef_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e99fa6d907ce8d88e20db3f0444bc2897a8c2cde573584f35374250adff04f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99fa6d907ce8d88e20db3f0444bc2897a8c2cde573584f35374250adff04f7b->enter($__internal_e99fa6d907ce8d88e20db3f0444bc2897a8c2cde573584f35374250adff04f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f01e8766a8eb3a992ed8d3a47a52f9c99bbf78a188f7d2254438b3fa8a5c2684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01e8766a8eb3a992ed8d3a47a52f9c99bbf78a188f7d2254438b3fa8a5c2684->enter($__internal_f01e8766a8eb3a992ed8d3a47a52f9c99bbf78a188f7d2254438b3fa8a5c2684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 47
        echo "            Symfony3 blog tutorial - created by Teld
        ";
        
        $__internal_f01e8766a8eb3a992ed8d3a47a52f9c99bbf78a188f7d2254438b3fa8a5c2684->leave($__internal_f01e8766a8eb3a992ed8d3a47a52f9c99bbf78a188f7d2254438b3fa8a5c2684_prof);

        
        $__internal_e99fa6d907ce8d88e20db3f0444bc2897a8c2cde573584f35374250adff04f7b->leave($__internal_e99fa6d907ce8d88e20db3f0444bc2897a8c2cde573584f35374250adff04f7b_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84607ec36f0dd352c45929d9416f9ef1190ae502ddc5298dc37ea778b843fedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84607ec36f0dd352c45929d9416f9ef1190ae502ddc5298dc37ea778b843fedf->enter($__internal_84607ec36f0dd352c45929d9416f9ef1190ae502ddc5298dc37ea778b843fedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bc6a7b9d7b350119f7be33a2793e8ae5798075440a663ba4fd3fb4beed43f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc6a7b9d7b350119f7be33a2793e8ae5798075440a663ba4fd3fb4beed43f7e->enter($__internal_3bc6a7b9d7b350119f7be33a2793e8ae5798075440a663ba4fd3fb4beed43f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3bc6a7b9d7b350119f7be33a2793e8ae5798075440a663ba4fd3fb4beed43f7e->leave($__internal_3bc6a7b9d7b350119f7be33a2793e8ae5798075440a663ba4fd3fb4beed43f7e_prof);

        
        $__internal_84607ec36f0dd352c45929d9416f9ef1190ae502ddc5298dc37ea778b843fedf->leave($__internal_84607ec36f0dd352c45929d9416f9ef1190ae502ddc5298dc37ea778b843fedf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 52,  260 => 47,  251 => 46,  234 => 42,  217 => 39,  199 => 35,  181 => 34,  164 => 23,  155 => 22,  143 => 13,  139 => 11,  130 => 10,  112 => 6,  101 => 53,  99 => 52,  94 => 49,  92 => 46,  87 => 43,  85 => 42,  81 => 40,  79 => 39,  72 => 35,  68 => 34,  63 => 31,  61 => 22,  50 => 15,  48 => 10,  41 => 6,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
    <title>{% block title %}Blog{% endblock %} - Blog</title>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    {% block stylesheets %}
        <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
        <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<section id=\"wrapper\">
    <header id=\"header\">
        <div class=\"top\">
            {% block navigation %}
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </nav>
            {% endblock %}
        </div>


            <h2>{% block blog_title %}<a href=\"#\">Blog</a>{% endblock %}</h2>
            <h3>{% block blog_tagline %}<a href=\"#\">creating a blog in Symfony3</a>{% endblock %}</h3>
    </header>

    <section class=\"main-col\">
        {% block body %}{% endblock %}
    </section>
    <aside class=\"sidebar\">
        {% block sidebar %}{% endblock %}
    </aside>

    <div id=\"footer\">
        {% block footer %}
            Symfony3 blog tutorial - created by Teld
        {% endblock %}
    </div>
</section>

{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "/home/telnanga/Blog/app/Resources/views/base.html.twig");
    }
}

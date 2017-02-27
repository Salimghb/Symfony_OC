<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_819f484c5744b5bd92b4ddb6a3b327392dcfbb41d55475fcd3d409aa4431b6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819f484c5744b5bd92b4ddb6a3b327392dcfbb41d55475fcd3d409aa4431b6e0->enter($__internal_819f484c5744b5bd92b4ddb6a3b327392dcfbb41d55475fcd3d409aa4431b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fed90e5e028020012a718c96db476a46cbd1ac56a83e981fd670027732c1760b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed90e5e028020012a718c96db476a46cbd1ac56a83e981fd670027732c1760b->enter($__internal_fed90e5e028020012a718c96db476a46cbd1ac56a83e981fd670027732c1760b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_819f484c5744b5bd92b4ddb6a3b327392dcfbb41d55475fcd3d409aa4431b6e0->leave($__internal_819f484c5744b5bd92b4ddb6a3b327392dcfbb41d55475fcd3d409aa4431b6e0_prof);

        
        $__internal_fed90e5e028020012a718c96db476a46cbd1ac56a83e981fd670027732c1760b->leave($__internal_fed90e5e028020012a718c96db476a46cbd1ac56a83e981fd670027732c1760b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c89691c6b009ed847c021b6015f7efced100f9a37f3b96903126c788ee4dd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c89691c6b009ed847c021b6015f7efced100f9a37f3b96903126c788ee4dd29->enter($__internal_9c89691c6b009ed847c021b6015f7efced100f9a37f3b96903126c788ee4dd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f582da4d5f6a15b6604745318e10c9c3f5c15634b705d54521e6d2dd69991b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f582da4d5f6a15b6604745318e10c9c3f5c15634b705d54521e6d2dd69991b9->enter($__internal_1f582da4d5f6a15b6604745318e10c9c3f5c15634b705d54521e6d2dd69991b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f582da4d5f6a15b6604745318e10c9c3f5c15634b705d54521e6d2dd69991b9->leave($__internal_1f582da4d5f6a15b6604745318e10c9c3f5c15634b705d54521e6d2dd69991b9_prof);

        
        $__internal_9c89691c6b009ed847c021b6015f7efced100f9a37f3b96903126c788ee4dd29->leave($__internal_9c89691c6b009ed847c021b6015f7efced100f9a37f3b96903126c788ee4dd29_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cb204c78194d4bad76f03b23e9c98f36880a846abf9c0e22ad1f11dc3845973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb204c78194d4bad76f03b23e9c98f36880a846abf9c0e22ad1f11dc3845973->enter($__internal_0cb204c78194d4bad76f03b23e9c98f36880a846abf9c0e22ad1f11dc3845973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_08494361e66b8f8629d16b137b63b7b2a4fb5419ebd1d6b45ce2996aa9f1608a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08494361e66b8f8629d16b137b63b7b2a4fb5419ebd1d6b45ce2996aa9f1608a->enter($__internal_08494361e66b8f8629d16b137b63b7b2a4fb5419ebd1d6b45ce2996aa9f1608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08494361e66b8f8629d16b137b63b7b2a4fb5419ebd1d6b45ce2996aa9f1608a->leave($__internal_08494361e66b8f8629d16b137b63b7b2a4fb5419ebd1d6b45ce2996aa9f1608a_prof);

        
        $__internal_0cb204c78194d4bad76f03b23e9c98f36880a846abf9c0e22ad1f11dc3845973->leave($__internal_0cb204c78194d4bad76f03b23e9c98f36880a846abf9c0e22ad1f11dc3845973_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c8c009476934bc95d40b16f8a67794cdc0cbc9fcd44d88278e9dd49ea49f897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8c009476934bc95d40b16f8a67794cdc0cbc9fcd44d88278e9dd49ea49f897->enter($__internal_7c8c009476934bc95d40b16f8a67794cdc0cbc9fcd44d88278e9dd49ea49f897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ae5da30a12775c2ad2dcb7ac7fe526bae2621d5bd502708ae90099303e073b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae5da30a12775c2ad2dcb7ac7fe526bae2621d5bd502708ae90099303e073b7->enter($__internal_6ae5da30a12775c2ad2dcb7ac7fe526bae2621d5bd502708ae90099303e073b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6ae5da30a12775c2ad2dcb7ac7fe526bae2621d5bd502708ae90099303e073b7->leave($__internal_6ae5da30a12775c2ad2dcb7ac7fe526bae2621d5bd502708ae90099303e073b7_prof);

        
        $__internal_7c8c009476934bc95d40b16f8a67794cdc0cbc9fcd44d88278e9dd49ea49f897->leave($__internal_7c8c009476934bc95d40b16f8a67794cdc0cbc9fcd44d88278e9dd49ea49f897_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e8374767a3f378170396c7a63002b4e7046fad72a86d1c13d29e543bd67a8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8374767a3f378170396c7a63002b4e7046fad72a86d1c13d29e543bd67a8a1->enter($__internal_4e8374767a3f378170396c7a63002b4e7046fad72a86d1c13d29e543bd67a8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6fcf40a48f7133a2320b150da009c83895e0f5bcf1a4c9a88365e0095d570d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcf40a48f7133a2320b150da009c83895e0f5bcf1a4c9a88365e0095d570d05->enter($__internal_6fcf40a48f7133a2320b150da009c83895e0f5bcf1a4c9a88365e0095d570d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6fcf40a48f7133a2320b150da009c83895e0f5bcf1a4c9a88365e0095d570d05->leave($__internal_6fcf40a48f7133a2320b150da009c83895e0f5bcf1a4c9a88365e0095d570d05_prof);

        
        $__internal_4e8374767a3f378170396c7a63002b4e7046fad72a86d1c13d29e543bd67a8a1->leave($__internal_4e8374767a3f378170396c7a63002b4e7046fad72a86d1c13d29e543bd67a8a1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_3ea59ae5df692ebf5ad296f987e9a2f56f8e14ea50d3bb5fece9bed50b91a10a extends Twig_Template
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
        $__internal_583347f6efb785c962d3f5221f04773d50d79aacf598754094967ab4f14a18e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583347f6efb785c962d3f5221f04773d50d79aacf598754094967ab4f14a18e7->enter($__internal_583347f6efb785c962d3f5221f04773d50d79aacf598754094967ab4f14a18e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_055c16c33336415b953717a14cdede3acb3b1b198a10ec6977b0c8b37d0cd91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055c16c33336415b953717a14cdede3acb3b1b198a10ec6977b0c8b37d0cd91c->enter($__internal_055c16c33336415b953717a14cdede3acb3b1b198a10ec6977b0c8b37d0cd91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_583347f6efb785c962d3f5221f04773d50d79aacf598754094967ab4f14a18e7->leave($__internal_583347f6efb785c962d3f5221f04773d50d79aacf598754094967ab4f14a18e7_prof);

        
        $__internal_055c16c33336415b953717a14cdede3acb3b1b198a10ec6977b0c8b37d0cd91c->leave($__internal_055c16c33336415b953717a14cdede3acb3b1b198a10ec6977b0c8b37d0cd91c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d8ed1593643d17d6eea7b0500eaa773d4e34b66edd20afbb84ec3469e47c2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8ed1593643d17d6eea7b0500eaa773d4e34b66edd20afbb84ec3469e47c2e1->enter($__internal_0d8ed1593643d17d6eea7b0500eaa773d4e34b66edd20afbb84ec3469e47c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5384f2830b2126bd001f9c7104c39d0d8d95ec515bf5b1ebd8b58613b8ada043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5384f2830b2126bd001f9c7104c39d0d8d95ec515bf5b1ebd8b58613b8ada043->enter($__internal_5384f2830b2126bd001f9c7104c39d0d8d95ec515bf5b1ebd8b58613b8ada043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5384f2830b2126bd001f9c7104c39d0d8d95ec515bf5b1ebd8b58613b8ada043->leave($__internal_5384f2830b2126bd001f9c7104c39d0d8d95ec515bf5b1ebd8b58613b8ada043_prof);

        
        $__internal_0d8ed1593643d17d6eea7b0500eaa773d4e34b66edd20afbb84ec3469e47c2e1->leave($__internal_0d8ed1593643d17d6eea7b0500eaa773d4e34b66edd20afbb84ec3469e47c2e1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53b91ce2620b67f4000b3ba269c68b966d4a32f8a3b37e8405179292a12f150a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b91ce2620b67f4000b3ba269c68b966d4a32f8a3b37e8405179292a12f150a->enter($__internal_53b91ce2620b67f4000b3ba269c68b966d4a32f8a3b37e8405179292a12f150a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8fa850b50bc77f587f515eaf7a3730ffc5c703c626b8dc10dc42c5100580a912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa850b50bc77f587f515eaf7a3730ffc5c703c626b8dc10dc42c5100580a912->enter($__internal_8fa850b50bc77f587f515eaf7a3730ffc5c703c626b8dc10dc42c5100580a912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8fa850b50bc77f587f515eaf7a3730ffc5c703c626b8dc10dc42c5100580a912->leave($__internal_8fa850b50bc77f587f515eaf7a3730ffc5c703c626b8dc10dc42c5100580a912_prof);

        
        $__internal_53b91ce2620b67f4000b3ba269c68b966d4a32f8a3b37e8405179292a12f150a->leave($__internal_53b91ce2620b67f4000b3ba269c68b966d4a32f8a3b37e8405179292a12f150a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc13b580f356db0e19debe036a11236b294d3223e88ac883639b7fcd485c63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dc13b580f356db0e19debe036a11236b294d3223e88ac883639b7fcd485c63f->enter($__internal_2dc13b580f356db0e19debe036a11236b294d3223e88ac883639b7fcd485c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ff4e50d5aa7c1342bfa199d4a7fa28de5e91988af39a9be974258bbb9ed1ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff4e50d5aa7c1342bfa199d4a7fa28de5e91988af39a9be974258bbb9ed1ac8->enter($__internal_0ff4e50d5aa7c1342bfa199d4a7fa28de5e91988af39a9be974258bbb9ed1ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ff4e50d5aa7c1342bfa199d4a7fa28de5e91988af39a9be974258bbb9ed1ac8->leave($__internal_0ff4e50d5aa7c1342bfa199d4a7fa28de5e91988af39a9be974258bbb9ed1ac8_prof);

        
        $__internal_2dc13b580f356db0e19debe036a11236b294d3223e88ac883639b7fcd485c63f->leave($__internal_2dc13b580f356db0e19debe036a11236b294d3223e88ac883639b7fcd485c63f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f20c25b1f71deb69e515e9cfb8cfd08a7bfc2575c6abfdf1c019f233f6554ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20c25b1f71deb69e515e9cfb8cfd08a7bfc2575c6abfdf1c019f233f6554ca0->enter($__internal_f20c25b1f71deb69e515e9cfb8cfd08a7bfc2575c6abfdf1c019f233f6554ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69e84d9e09d80e4640fb7703e7eb833ea258da1a6adb968a51ec96fb3328b407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e84d9e09d80e4640fb7703e7eb833ea258da1a6adb968a51ec96fb3328b407->enter($__internal_69e84d9e09d80e4640fb7703e7eb833ea258da1a6adb968a51ec96fb3328b407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69e84d9e09d80e4640fb7703e7eb833ea258da1a6adb968a51ec96fb3328b407->leave($__internal_69e84d9e09d80e4640fb7703e7eb833ea258da1a6adb968a51ec96fb3328b407_prof);

        
        $__internal_f20c25b1f71deb69e515e9cfb8cfd08a7bfc2575c6abfdf1c019f233f6554ca0->leave($__internal_f20c25b1f71deb69e515e9cfb8cfd08a7bfc2575c6abfdf1c019f233f6554ca0_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_ed09e91221e1903b758c8fbb8b59b88df09b36d7c04c298a80abd6a5c4662489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed09e91221e1903b758c8fbb8b59b88df09b36d7c04c298a80abd6a5c4662489->enter($__internal_ed09e91221e1903b758c8fbb8b59b88df09b36d7c04c298a80abd6a5c4662489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_927e522eb8c9bfbdc3a6365db0bbcd3d239a851ccf89b3aa7c357b616ecb8312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927e522eb8c9bfbdc3a6365db0bbcd3d239a851ccf89b3aa7c357b616ecb8312->enter($__internal_927e522eb8c9bfbdc3a6365db0bbcd3d239a851ccf89b3aa7c357b616ecb8312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed09e91221e1903b758c8fbb8b59b88df09b36d7c04c298a80abd6a5c4662489->leave($__internal_ed09e91221e1903b758c8fbb8b59b88df09b36d7c04c298a80abd6a5c4662489_prof);

        
        $__internal_927e522eb8c9bfbdc3a6365db0bbcd3d239a851ccf89b3aa7c357b616ecb8312->leave($__internal_927e522eb8c9bfbdc3a6365db0bbcd3d239a851ccf89b3aa7c357b616ecb8312_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bf37f2bd99e09f3c7eef96a74ca8d8207f6277bf19b78bbc1f127b925377aa35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf37f2bd99e09f3c7eef96a74ca8d8207f6277bf19b78bbc1f127b925377aa35->enter($__internal_bf37f2bd99e09f3c7eef96a74ca8d8207f6277bf19b78bbc1f127b925377aa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_15fbf36038ff8821511a7de98e9daaff22633aac58a7883ff6d7b5449d6e3f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fbf36038ff8821511a7de98e9daaff22633aac58a7883ff6d7b5449d6e3f5c->enter($__internal_15fbf36038ff8821511a7de98e9daaff22633aac58a7883ff6d7b5449d6e3f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15fbf36038ff8821511a7de98e9daaff22633aac58a7883ff6d7b5449d6e3f5c->leave($__internal_15fbf36038ff8821511a7de98e9daaff22633aac58a7883ff6d7b5449d6e3f5c_prof);

        
        $__internal_bf37f2bd99e09f3c7eef96a74ca8d8207f6277bf19b78bbc1f127b925377aa35->leave($__internal_bf37f2bd99e09f3c7eef96a74ca8d8207f6277bf19b78bbc1f127b925377aa35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25cb2b6305d0d049357fc377da18e98e258690ef5948a54f6b903c6ab5ea1697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cb2b6305d0d049357fc377da18e98e258690ef5948a54f6b903c6ab5ea1697->enter($__internal_25cb2b6305d0d049357fc377da18e98e258690ef5948a54f6b903c6ab5ea1697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f112cf69ff39b40be7d68e0cb65e6ebca752c2886e635e02b4c2b4655ec5d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f112cf69ff39b40be7d68e0cb65e6ebca752c2886e635e02b4c2b4655ec5d79->enter($__internal_6f112cf69ff39b40be7d68e0cb65e6ebca752c2886e635e02b4c2b4655ec5d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f112cf69ff39b40be7d68e0cb65e6ebca752c2886e635e02b4c2b4655ec5d79->leave($__internal_6f112cf69ff39b40be7d68e0cb65e6ebca752c2886e635e02b4c2b4655ec5d79_prof);

        
        $__internal_25cb2b6305d0d049357fc377da18e98e258690ef5948a54f6b903c6ab5ea1697->leave($__internal_25cb2b6305d0d049357fc377da18e98e258690ef5948a54f6b903c6ab5ea1697_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa6a87f4603e660a2915149a1ce6fa843e4e3429b4ea7114b8a41ec37097942a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6a87f4603e660a2915149a1ce6fa843e4e3429b4ea7114b8a41ec37097942a->enter($__internal_aa6a87f4603e660a2915149a1ce6fa843e4e3429b4ea7114b8a41ec37097942a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_182626419cd53a35b3386d13d4232aed2cd6ca0012f895b28c0d68f06889fa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182626419cd53a35b3386d13d4232aed2cd6ca0012f895b28c0d68f06889fa1a->enter($__internal_182626419cd53a35b3386d13d4232aed2cd6ca0012f895b28c0d68f06889fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_182626419cd53a35b3386d13d4232aed2cd6ca0012f895b28c0d68f06889fa1a->leave($__internal_182626419cd53a35b3386d13d4232aed2cd6ca0012f895b28c0d68f06889fa1a_prof);

        
        $__internal_aa6a87f4603e660a2915149a1ce6fa843e4e3429b4ea7114b8a41ec37097942a->leave($__internal_aa6a87f4603e660a2915149a1ce6fa843e4e3429b4ea7114b8a41ec37097942a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

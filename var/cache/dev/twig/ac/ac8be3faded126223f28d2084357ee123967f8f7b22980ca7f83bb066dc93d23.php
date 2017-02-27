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
        $__internal_9f5eb7096d43785bab138c67a57352085b2f5644a2f228dd74c01e2446f90508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5eb7096d43785bab138c67a57352085b2f5644a2f228dd74c01e2446f90508->enter($__internal_9f5eb7096d43785bab138c67a57352085b2f5644a2f228dd74c01e2446f90508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1183ee54e3df31ad8ca237b8634efe0e908e1f76c2f3e65be76d7573c1fd5129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1183ee54e3df31ad8ca237b8634efe0e908e1f76c2f3e65be76d7573c1fd5129->enter($__internal_1183ee54e3df31ad8ca237b8634efe0e908e1f76c2f3e65be76d7573c1fd5129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5eb7096d43785bab138c67a57352085b2f5644a2f228dd74c01e2446f90508->leave($__internal_9f5eb7096d43785bab138c67a57352085b2f5644a2f228dd74c01e2446f90508_prof);

        
        $__internal_1183ee54e3df31ad8ca237b8634efe0e908e1f76c2f3e65be76d7573c1fd5129->leave($__internal_1183ee54e3df31ad8ca237b8634efe0e908e1f76c2f3e65be76d7573c1fd5129_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4fff40606873cb76eecb563b5e34fd3532beafca108c34471e52d49fc51a1340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fff40606873cb76eecb563b5e34fd3532beafca108c34471e52d49fc51a1340->enter($__internal_4fff40606873cb76eecb563b5e34fd3532beafca108c34471e52d49fc51a1340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_33e4a13903f6b3d327eeecaf5c846b511dae1b28c600f65f9159583cdd4f39fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e4a13903f6b3d327eeecaf5c846b511dae1b28c600f65f9159583cdd4f39fb->enter($__internal_33e4a13903f6b3d327eeecaf5c846b511dae1b28c600f65f9159583cdd4f39fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33e4a13903f6b3d327eeecaf5c846b511dae1b28c600f65f9159583cdd4f39fb->leave($__internal_33e4a13903f6b3d327eeecaf5c846b511dae1b28c600f65f9159583cdd4f39fb_prof);

        
        $__internal_4fff40606873cb76eecb563b5e34fd3532beafca108c34471e52d49fc51a1340->leave($__internal_4fff40606873cb76eecb563b5e34fd3532beafca108c34471e52d49fc51a1340_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1c307c568192c474e39dae05321573ca4dff03b6592084e36b9e2c3d68fc547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c307c568192c474e39dae05321573ca4dff03b6592084e36b9e2c3d68fc547->enter($__internal_f1c307c568192c474e39dae05321573ca4dff03b6592084e36b9e2c3d68fc547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0582449d6ffb0829f1e3499df5872a99937f0a40cc50cc053439a579db554ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0582449d6ffb0829f1e3499df5872a99937f0a40cc50cc053439a579db554ee3->enter($__internal_0582449d6ffb0829f1e3499df5872a99937f0a40cc50cc053439a579db554ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0582449d6ffb0829f1e3499df5872a99937f0a40cc50cc053439a579db554ee3->leave($__internal_0582449d6ffb0829f1e3499df5872a99937f0a40cc50cc053439a579db554ee3_prof);

        
        $__internal_f1c307c568192c474e39dae05321573ca4dff03b6592084e36b9e2c3d68fc547->leave($__internal_f1c307c568192c474e39dae05321573ca4dff03b6592084e36b9e2c3d68fc547_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9111d9513bd495165230485a5e6c5e5928393d5af7e33a7f9e6cc0219550de51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9111d9513bd495165230485a5e6c5e5928393d5af7e33a7f9e6cc0219550de51->enter($__internal_9111d9513bd495165230485a5e6c5e5928393d5af7e33a7f9e6cc0219550de51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fb8ca87a16bb068763e10d767872c8b1b85259e913c9d8de546dc9f42e524a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb8ca87a16bb068763e10d767872c8b1b85259e913c9d8de546dc9f42e524a2->enter($__internal_6fb8ca87a16bb068763e10d767872c8b1b85259e913c9d8de546dc9f42e524a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6fb8ca87a16bb068763e10d767872c8b1b85259e913c9d8de546dc9f42e524a2->leave($__internal_6fb8ca87a16bb068763e10d767872c8b1b85259e913c9d8de546dc9f42e524a2_prof);

        
        $__internal_9111d9513bd495165230485a5e6c5e5928393d5af7e33a7f9e6cc0219550de51->leave($__internal_9111d9513bd495165230485a5e6c5e5928393d5af7e33a7f9e6cc0219550de51_prof);

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

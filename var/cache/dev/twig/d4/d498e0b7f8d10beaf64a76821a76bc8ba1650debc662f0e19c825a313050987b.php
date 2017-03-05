<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
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
        $__internal_15f867d4aa45347e001c771a0b3aef6cc660c53d4af17ca061d63dccc864d5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f867d4aa45347e001c771a0b3aef6cc660c53d4af17ca061d63dccc864d5b0->enter($__internal_15f867d4aa45347e001c771a0b3aef6cc660c53d4af17ca061d63dccc864d5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_37966a49767b726f8b36e8f25d5a7dc2fd951f409be33207bf343b500df71c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37966a49767b726f8b36e8f25d5a7dc2fd951f409be33207bf343b500df71c7d->enter($__internal_37966a49767b726f8b36e8f25d5a7dc2fd951f409be33207bf343b500df71c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f867d4aa45347e001c771a0b3aef6cc660c53d4af17ca061d63dccc864d5b0->leave($__internal_15f867d4aa45347e001c771a0b3aef6cc660c53d4af17ca061d63dccc864d5b0_prof);

        
        $__internal_37966a49767b726f8b36e8f25d5a7dc2fd951f409be33207bf343b500df71c7d->leave($__internal_37966a49767b726f8b36e8f25d5a7dc2fd951f409be33207bf343b500df71c7d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8308ad385bbbd42a2b3ca6f399b9a2a574104b6c3f46830b1f85950fa678f292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8308ad385bbbd42a2b3ca6f399b9a2a574104b6c3f46830b1f85950fa678f292->enter($__internal_8308ad385bbbd42a2b3ca6f399b9a2a574104b6c3f46830b1f85950fa678f292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d90610d86b94e4dc5f6fb895936f646dd7adb1bedf76284eb38c351b59ca5de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90610d86b94e4dc5f6fb895936f646dd7adb1bedf76284eb38c351b59ca5de8->enter($__internal_d90610d86b94e4dc5f6fb895936f646dd7adb1bedf76284eb38c351b59ca5de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d90610d86b94e4dc5f6fb895936f646dd7adb1bedf76284eb38c351b59ca5de8->leave($__internal_d90610d86b94e4dc5f6fb895936f646dd7adb1bedf76284eb38c351b59ca5de8_prof);

        
        $__internal_8308ad385bbbd42a2b3ca6f399b9a2a574104b6c3f46830b1f85950fa678f292->leave($__internal_8308ad385bbbd42a2b3ca6f399b9a2a574104b6c3f46830b1f85950fa678f292_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c441a68e737a08e3717681316f061151c4a1cbbc46988ad936506da8d4ef357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c441a68e737a08e3717681316f061151c4a1cbbc46988ad936506da8d4ef357->enter($__internal_3c441a68e737a08e3717681316f061151c4a1cbbc46988ad936506da8d4ef357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37d5261497d7d5e211d8f645c830f527b8bd4d4d859405a8b857e1f0f27cbd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d5261497d7d5e211d8f645c830f527b8bd4d4d859405a8b857e1f0f27cbd67->enter($__internal_37d5261497d7d5e211d8f645c830f527b8bd4d4d859405a8b857e1f0f27cbd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37d5261497d7d5e211d8f645c830f527b8bd4d4d859405a8b857e1f0f27cbd67->leave($__internal_37d5261497d7d5e211d8f645c830f527b8bd4d4d859405a8b857e1f0f27cbd67_prof);

        
        $__internal_3c441a68e737a08e3717681316f061151c4a1cbbc46988ad936506da8d4ef357->leave($__internal_3c441a68e737a08e3717681316f061151c4a1cbbc46988ad936506da8d4ef357_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7b850974cbf25e0576694b60e5aa248d82b988ff980fbbf4dae14bfef131547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b850974cbf25e0576694b60e5aa248d82b988ff980fbbf4dae14bfef131547->enter($__internal_b7b850974cbf25e0576694b60e5aa248d82b988ff980fbbf4dae14bfef131547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3a7eb34ba21efa4db92ebf98ec841b507271b85f058f67b7385e2ca42adcd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a7eb34ba21efa4db92ebf98ec841b507271b85f058f67b7385e2ca42adcd91->enter($__internal_c3a7eb34ba21efa4db92ebf98ec841b507271b85f058f67b7385e2ca42adcd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3a7eb34ba21efa4db92ebf98ec841b507271b85f058f67b7385e2ca42adcd91->leave($__internal_c3a7eb34ba21efa4db92ebf98ec841b507271b85f058f67b7385e2ca42adcd91_prof);

        
        $__internal_b7b850974cbf25e0576694b60e5aa248d82b988ff980fbbf4dae14bfef131547->leave($__internal_b7b850974cbf25e0576694b60e5aa248d82b988ff980fbbf4dae14bfef131547_prof);

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

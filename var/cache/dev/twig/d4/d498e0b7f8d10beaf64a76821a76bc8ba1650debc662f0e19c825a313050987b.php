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
        $__internal_dc14c66a717d4410b330cb6e93e2804f6da44f31d32aee3a268247d0f30e4c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc14c66a717d4410b330cb6e93e2804f6da44f31d32aee3a268247d0f30e4c17->enter($__internal_dc14c66a717d4410b330cb6e93e2804f6da44f31d32aee3a268247d0f30e4c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8e838ab2e4b85f9a4184e03d504e982f5459076233d8e4770f679719e69bf67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e838ab2e4b85f9a4184e03d504e982f5459076233d8e4770f679719e69bf67c->enter($__internal_8e838ab2e4b85f9a4184e03d504e982f5459076233d8e4770f679719e69bf67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc14c66a717d4410b330cb6e93e2804f6da44f31d32aee3a268247d0f30e4c17->leave($__internal_dc14c66a717d4410b330cb6e93e2804f6da44f31d32aee3a268247d0f30e4c17_prof);

        
        $__internal_8e838ab2e4b85f9a4184e03d504e982f5459076233d8e4770f679719e69bf67c->leave($__internal_8e838ab2e4b85f9a4184e03d504e982f5459076233d8e4770f679719e69bf67c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55c9f1d78d5935dddf94dc1079d2fcfbc98d9d330aa2b3f9f1c8486480557eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c9f1d78d5935dddf94dc1079d2fcfbc98d9d330aa2b3f9f1c8486480557eee->enter($__internal_55c9f1d78d5935dddf94dc1079d2fcfbc98d9d330aa2b3f9f1c8486480557eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b85afc7235b4795e05f67a2a969b19f386c9deec725191b3894b93d616d8fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b85afc7235b4795e05f67a2a969b19f386c9deec725191b3894b93d616d8fae->enter($__internal_0b85afc7235b4795e05f67a2a969b19f386c9deec725191b3894b93d616d8fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b85afc7235b4795e05f67a2a969b19f386c9deec725191b3894b93d616d8fae->leave($__internal_0b85afc7235b4795e05f67a2a969b19f386c9deec725191b3894b93d616d8fae_prof);

        
        $__internal_55c9f1d78d5935dddf94dc1079d2fcfbc98d9d330aa2b3f9f1c8486480557eee->leave($__internal_55c9f1d78d5935dddf94dc1079d2fcfbc98d9d330aa2b3f9f1c8486480557eee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ae518a2b11012a1d96496ed3c3fc9e7c2bc1871ea28712d2be218d490558f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae518a2b11012a1d96496ed3c3fc9e7c2bc1871ea28712d2be218d490558f48->enter($__internal_8ae518a2b11012a1d96496ed3c3fc9e7c2bc1871ea28712d2be218d490558f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6670ddf6a46269276a1a044b3c58ccc7ed823ad41a904388aead4af409c66a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6670ddf6a46269276a1a044b3c58ccc7ed823ad41a904388aead4af409c66a84->enter($__internal_6670ddf6a46269276a1a044b3c58ccc7ed823ad41a904388aead4af409c66a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6670ddf6a46269276a1a044b3c58ccc7ed823ad41a904388aead4af409c66a84->leave($__internal_6670ddf6a46269276a1a044b3c58ccc7ed823ad41a904388aead4af409c66a84_prof);

        
        $__internal_8ae518a2b11012a1d96496ed3c3fc9e7c2bc1871ea28712d2be218d490558f48->leave($__internal_8ae518a2b11012a1d96496ed3c3fc9e7c2bc1871ea28712d2be218d490558f48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65a8d90c302a9fdf8704b5d0cbed22eb9b7c3465925b6180b3eb3205249d6c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65a8d90c302a9fdf8704b5d0cbed22eb9b7c3465925b6180b3eb3205249d6c0e->enter($__internal_65a8d90c302a9fdf8704b5d0cbed22eb9b7c3465925b6180b3eb3205249d6c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_472729361c3dfd7b4d022758d64bd41ed7759136acfa08f382d3f026094fb828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472729361c3dfd7b4d022758d64bd41ed7759136acfa08f382d3f026094fb828->enter($__internal_472729361c3dfd7b4d022758d64bd41ed7759136acfa08f382d3f026094fb828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_472729361c3dfd7b4d022758d64bd41ed7759136acfa08f382d3f026094fb828->leave($__internal_472729361c3dfd7b4d022758d64bd41ed7759136acfa08f382d3f026094fb828_prof);

        
        $__internal_65a8d90c302a9fdf8704b5d0cbed22eb9b7c3465925b6180b3eb3205249d6c0e->leave($__internal_65a8d90c302a9fdf8704b5d0cbed22eb9b7c3465925b6180b3eb3205249d6c0e_prof);

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

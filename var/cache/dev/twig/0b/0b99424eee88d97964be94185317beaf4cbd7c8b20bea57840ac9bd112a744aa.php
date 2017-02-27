<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3d247cff8d10cfae73e1c8094ec0ea72bbb8afeb337d15de4177ed93e4e1b4e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b83b9dfbef619f254b38270c3f965a03b1dd3d3a256cce9becdebfb7f8947dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83b9dfbef619f254b38270c3f965a03b1dd3d3a256cce9becdebfb7f8947dde->enter($__internal_b83b9dfbef619f254b38270c3f965a03b1dd3d3a256cce9becdebfb7f8947dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7e336faa1f4f8d393533c79d3f3ad1c9b41df0048dc053cc4388608132a184ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e336faa1f4f8d393533c79d3f3ad1c9b41df0048dc053cc4388608132a184ed->enter($__internal_7e336faa1f4f8d393533c79d3f3ad1c9b41df0048dc053cc4388608132a184ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b83b9dfbef619f254b38270c3f965a03b1dd3d3a256cce9becdebfb7f8947dde->leave($__internal_b83b9dfbef619f254b38270c3f965a03b1dd3d3a256cce9becdebfb7f8947dde_prof);

        
        $__internal_7e336faa1f4f8d393533c79d3f3ad1c9b41df0048dc053cc4388608132a184ed->leave($__internal_7e336faa1f4f8d393533c79d3f3ad1c9b41df0048dc053cc4388608132a184ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9020aba7f3c08fe836f97c9d1787de0cf9260922c61f2e205bc8f9a6d513a953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9020aba7f3c08fe836f97c9d1787de0cf9260922c61f2e205bc8f9a6d513a953->enter($__internal_9020aba7f3c08fe836f97c9d1787de0cf9260922c61f2e205bc8f9a6d513a953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c612e45f068087fdda7450325ae92c9cd7356623b14e853c9ea922989284dc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c612e45f068087fdda7450325ae92c9cd7356623b14e853c9ea922989284dc4d->enter($__internal_c612e45f068087fdda7450325ae92c9cd7356623b14e853c9ea922989284dc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c612e45f068087fdda7450325ae92c9cd7356623b14e853c9ea922989284dc4d->leave($__internal_c612e45f068087fdda7450325ae92c9cd7356623b14e853c9ea922989284dc4d_prof);

        
        $__internal_9020aba7f3c08fe836f97c9d1787de0cf9260922c61f2e205bc8f9a6d513a953->leave($__internal_9020aba7f3c08fe836f97c9d1787de0cf9260922c61f2e205bc8f9a6d513a953_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffa59c676c19cd51fdb6a6e6a501a1a4b8ca048f98efd6b8068a1a25ac1fcb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa59c676c19cd51fdb6a6e6a501a1a4b8ca048f98efd6b8068a1a25ac1fcb99->enter($__internal_ffa59c676c19cd51fdb6a6e6a501a1a4b8ca048f98efd6b8068a1a25ac1fcb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed2066381a7e1686ef5b101b62b2dea4d83ef48483551bf357f375d309813d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2066381a7e1686ef5b101b62b2dea4d83ef48483551bf357f375d309813d33->enter($__internal_ed2066381a7e1686ef5b101b62b2dea4d83ef48483551bf357f375d309813d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed2066381a7e1686ef5b101b62b2dea4d83ef48483551bf357f375d309813d33->leave($__internal_ed2066381a7e1686ef5b101b62b2dea4d83ef48483551bf357f375d309813d33_prof);

        
        $__internal_ffa59c676c19cd51fdb6a6e6a501a1a4b8ca048f98efd6b8068a1a25ac1fcb99->leave($__internal_ffa59c676c19cd51fdb6a6e6a501a1a4b8ca048f98efd6b8068a1a25ac1fcb99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f75ccefeafdfdcbb95962402b2511be585a8d76e2b0b8ea48f31135f36fc47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f75ccefeafdfdcbb95962402b2511be585a8d76e2b0b8ea48f31135f36fc47b->enter($__internal_5f75ccefeafdfdcbb95962402b2511be585a8d76e2b0b8ea48f31135f36fc47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d2adb6751b6a38ca8cc8ed9fe4ac80c60f3fdb405b06a4d1ff220efc9198781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2adb6751b6a38ca8cc8ed9fe4ac80c60f3fdb405b06a4d1ff220efc9198781->enter($__internal_5d2adb6751b6a38ca8cc8ed9fe4ac80c60f3fdb405b06a4d1ff220efc9198781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d2adb6751b6a38ca8cc8ed9fe4ac80c60f3fdb405b06a4d1ff220efc9198781->leave($__internal_5d2adb6751b6a38ca8cc8ed9fe4ac80c60f3fdb405b06a4d1ff220efc9198781_prof);

        
        $__internal_5f75ccefeafdfdcbb95962402b2511be585a8d76e2b0b8ea48f31135f36fc47b->leave($__internal_5f75ccefeafdfdcbb95962402b2511be585a8d76e2b0b8ea48f31135f36fc47b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

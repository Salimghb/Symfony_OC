<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f552dfa054d78a62a39392f1febcdc0bce099ec6395a39f2054e0be026bf40de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_193ad7ef4f17a7664bc80dc61c45c39fea4bc4a645bd197c4380bc258504084a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193ad7ef4f17a7664bc80dc61c45c39fea4bc4a645bd197c4380bc258504084a->enter($__internal_193ad7ef4f17a7664bc80dc61c45c39fea4bc4a645bd197c4380bc258504084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_319db6654fd50fd9d182e42e5d9419d201470d9974013f7e9ecaa4326f9347ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319db6654fd50fd9d182e42e5d9419d201470d9974013f7e9ecaa4326f9347ed->enter($__internal_319db6654fd50fd9d182e42e5d9419d201470d9974013f7e9ecaa4326f9347ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193ad7ef4f17a7664bc80dc61c45c39fea4bc4a645bd197c4380bc258504084a->leave($__internal_193ad7ef4f17a7664bc80dc61c45c39fea4bc4a645bd197c4380bc258504084a_prof);

        
        $__internal_319db6654fd50fd9d182e42e5d9419d201470d9974013f7e9ecaa4326f9347ed->leave($__internal_319db6654fd50fd9d182e42e5d9419d201470d9974013f7e9ecaa4326f9347ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dacc8e96866aca3d6c1956b03ed2b62fa0841050e9de30edbe95eb6baed1aec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacc8e96866aca3d6c1956b03ed2b62fa0841050e9de30edbe95eb6baed1aec3->enter($__internal_dacc8e96866aca3d6c1956b03ed2b62fa0841050e9de30edbe95eb6baed1aec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76e0f0f80010759e1564d76e534361c0efa2f39fa524a63389e7829d2c82eee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e0f0f80010759e1564d76e534361c0efa2f39fa524a63389e7829d2c82eee1->enter($__internal_76e0f0f80010759e1564d76e534361c0efa2f39fa524a63389e7829d2c82eee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_76e0f0f80010759e1564d76e534361c0efa2f39fa524a63389e7829d2c82eee1->leave($__internal_76e0f0f80010759e1564d76e534361c0efa2f39fa524a63389e7829d2c82eee1_prof);

        
        $__internal_dacc8e96866aca3d6c1956b03ed2b62fa0841050e9de30edbe95eb6baed1aec3->leave($__internal_dacc8e96866aca3d6c1956b03ed2b62fa0841050e9de30edbe95eb6baed1aec3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68139c76c36d6bb73c861747f2bb7b2d08df32fca9b5eb710191feff90153585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68139c76c36d6bb73c861747f2bb7b2d08df32fca9b5eb710191feff90153585->enter($__internal_68139c76c36d6bb73c861747f2bb7b2d08df32fca9b5eb710191feff90153585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4459bc9d409946600e50840225e31c4b02c1739f6982f3c0a24c528ccd81115b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4459bc9d409946600e50840225e31c4b02c1739f6982f3c0a24c528ccd81115b->enter($__internal_4459bc9d409946600e50840225e31c4b02c1739f6982f3c0a24c528ccd81115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4459bc9d409946600e50840225e31c4b02c1739f6982f3c0a24c528ccd81115b->leave($__internal_4459bc9d409946600e50840225e31c4b02c1739f6982f3c0a24c528ccd81115b_prof);

        
        $__internal_68139c76c36d6bb73c861747f2bb7b2d08df32fca9b5eb710191feff90153585->leave($__internal_68139c76c36d6bb73c861747f2bb7b2d08df32fca9b5eb710191feff90153585_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32e4c78f03666a734c68ebfb7ff3851c095601dd0b9c6a5760c4063470ddd194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e4c78f03666a734c68ebfb7ff3851c095601dd0b9c6a5760c4063470ddd194->enter($__internal_32e4c78f03666a734c68ebfb7ff3851c095601dd0b9c6a5760c4063470ddd194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c42f26b9a6411156121fec89f50fbf75ec13782f191259ae6dbf0e8368e92c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c42f26b9a6411156121fec89f50fbf75ec13782f191259ae6dbf0e8368e92c0->enter($__internal_4c42f26b9a6411156121fec89f50fbf75ec13782f191259ae6dbf0e8368e92c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4c42f26b9a6411156121fec89f50fbf75ec13782f191259ae6dbf0e8368e92c0->leave($__internal_4c42f26b9a6411156121fec89f50fbf75ec13782f191259ae6dbf0e8368e92c0_prof);

        
        $__internal_32e4c78f03666a734c68ebfb7ff3851c095601dd0b9c6a5760c4063470ddd194->leave($__internal_32e4c78f03666a734c68ebfb7ff3851c095601dd0b9c6a5760c4063470ddd194_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

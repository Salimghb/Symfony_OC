<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b61b6d4b2311c6a1b78b3f98bdff4cbcf7218a103aabcdd7a573ad5b5daaf7e8 extends Twig_Template
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
        $__internal_adf540a1ed9ce037b477d6eeb16f34a8ed40465f42d5528f0a7afddc525c33c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf540a1ed9ce037b477d6eeb16f34a8ed40465f42d5528f0a7afddc525c33c2->enter($__internal_adf540a1ed9ce037b477d6eeb16f34a8ed40465f42d5528f0a7afddc525c33c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_98d2449194842258b7ab520d6cbc5583c0f728646dccf5c41651c3aa1e72a578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d2449194842258b7ab520d6cbc5583c0f728646dccf5c41651c3aa1e72a578->enter($__internal_98d2449194842258b7ab520d6cbc5583c0f728646dccf5c41651c3aa1e72a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf540a1ed9ce037b477d6eeb16f34a8ed40465f42d5528f0a7afddc525c33c2->leave($__internal_adf540a1ed9ce037b477d6eeb16f34a8ed40465f42d5528f0a7afddc525c33c2_prof);

        
        $__internal_98d2449194842258b7ab520d6cbc5583c0f728646dccf5c41651c3aa1e72a578->leave($__internal_98d2449194842258b7ab520d6cbc5583c0f728646dccf5c41651c3aa1e72a578_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fef5433208e06aa63f5f49fcbe24933ff208a2634f09716034e9561f5fcd1be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef5433208e06aa63f5f49fcbe24933ff208a2634f09716034e9561f5fcd1be4->enter($__internal_fef5433208e06aa63f5f49fcbe24933ff208a2634f09716034e9561f5fcd1be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35970cacc5d63c57904abfb0748efff244eb9e2f6097e0486a4141098046e1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35970cacc5d63c57904abfb0748efff244eb9e2f6097e0486a4141098046e1bf->enter($__internal_35970cacc5d63c57904abfb0748efff244eb9e2f6097e0486a4141098046e1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_35970cacc5d63c57904abfb0748efff244eb9e2f6097e0486a4141098046e1bf->leave($__internal_35970cacc5d63c57904abfb0748efff244eb9e2f6097e0486a4141098046e1bf_prof);

        
        $__internal_fef5433208e06aa63f5f49fcbe24933ff208a2634f09716034e9561f5fcd1be4->leave($__internal_fef5433208e06aa63f5f49fcbe24933ff208a2634f09716034e9561f5fcd1be4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c79135cf9fbf6853310dfba79e965654ac7df76042eeb81a00ada355377005c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79135cf9fbf6853310dfba79e965654ac7df76042eeb81a00ada355377005c7->enter($__internal_c79135cf9fbf6853310dfba79e965654ac7df76042eeb81a00ada355377005c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a4ed13e4df566453dba98ec7bfcf167b7d7864e898a97dcde47112446bb4f3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ed13e4df566453dba98ec7bfcf167b7d7864e898a97dcde47112446bb4f3d8->enter($__internal_a4ed13e4df566453dba98ec7bfcf167b7d7864e898a97dcde47112446bb4f3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a4ed13e4df566453dba98ec7bfcf167b7d7864e898a97dcde47112446bb4f3d8->leave($__internal_a4ed13e4df566453dba98ec7bfcf167b7d7864e898a97dcde47112446bb4f3d8_prof);

        
        $__internal_c79135cf9fbf6853310dfba79e965654ac7df76042eeb81a00ada355377005c7->leave($__internal_c79135cf9fbf6853310dfba79e965654ac7df76042eeb81a00ada355377005c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7815c60062ed4d27cd0b15c14a628d731976b85c4f3f524dad7205aea79a2804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7815c60062ed4d27cd0b15c14a628d731976b85c4f3f524dad7205aea79a2804->enter($__internal_7815c60062ed4d27cd0b15c14a628d731976b85c4f3f524dad7205aea79a2804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60dce8f5ba80a14ddbc46671f4446fb1eca289e1b769f3202d5f993824e7a6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dce8f5ba80a14ddbc46671f4446fb1eca289e1b769f3202d5f993824e7a6a2->enter($__internal_60dce8f5ba80a14ddbc46671f4446fb1eca289e1b769f3202d5f993824e7a6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_60dce8f5ba80a14ddbc46671f4446fb1eca289e1b769f3202d5f993824e7a6a2->leave($__internal_60dce8f5ba80a14ddbc46671f4446fb1eca289e1b769f3202d5f993824e7a6a2_prof);

        
        $__internal_7815c60062ed4d27cd0b15c14a628d731976b85c4f3f524dad7205aea79a2804->leave($__internal_7815c60062ed4d27cd0b15c14a628d731976b85c4f3f524dad7205aea79a2804_prof);

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

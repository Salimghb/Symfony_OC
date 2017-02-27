<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_a01eddeb7ddd08fc6491698cd5feef7972f23456c829e91895cb89d8dcc8c616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01eddeb7ddd08fc6491698cd5feef7972f23456c829e91895cb89d8dcc8c616->enter($__internal_a01eddeb7ddd08fc6491698cd5feef7972f23456c829e91895cb89d8dcc8c616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d04883bc7bfa0687205273d609c4aea34a0f33252fa7e5ba61b6a96bbbdc47fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04883bc7bfa0687205273d609c4aea34a0f33252fa7e5ba61b6a96bbbdc47fa->enter($__internal_d04883bc7bfa0687205273d609c4aea34a0f33252fa7e5ba61b6a96bbbdc47fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01eddeb7ddd08fc6491698cd5feef7972f23456c829e91895cb89d8dcc8c616->leave($__internal_a01eddeb7ddd08fc6491698cd5feef7972f23456c829e91895cb89d8dcc8c616_prof);

        
        $__internal_d04883bc7bfa0687205273d609c4aea34a0f33252fa7e5ba61b6a96bbbdc47fa->leave($__internal_d04883bc7bfa0687205273d609c4aea34a0f33252fa7e5ba61b6a96bbbdc47fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cce9f561718f700bb298c396e07dfe261739244a82ea21a0edf2bd1d175fc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cce9f561718f700bb298c396e07dfe261739244a82ea21a0edf2bd1d175fc8f->enter($__internal_5cce9f561718f700bb298c396e07dfe261739244a82ea21a0edf2bd1d175fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_689a835abcdedbdf46ffca4fdb99d363f00f528db8611cd454b81c8d4b3cc437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689a835abcdedbdf46ffca4fdb99d363f00f528db8611cd454b81c8d4b3cc437->enter($__internal_689a835abcdedbdf46ffca4fdb99d363f00f528db8611cd454b81c8d4b3cc437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_689a835abcdedbdf46ffca4fdb99d363f00f528db8611cd454b81c8d4b3cc437->leave($__internal_689a835abcdedbdf46ffca4fdb99d363f00f528db8611cd454b81c8d4b3cc437_prof);

        
        $__internal_5cce9f561718f700bb298c396e07dfe261739244a82ea21a0edf2bd1d175fc8f->leave($__internal_5cce9f561718f700bb298c396e07dfe261739244a82ea21a0edf2bd1d175fc8f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6219dfe3520bc990ad8565db4c9a81194e90513427dbff0decc616fd69f1d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6219dfe3520bc990ad8565db4c9a81194e90513427dbff0decc616fd69f1d4a->enter($__internal_e6219dfe3520bc990ad8565db4c9a81194e90513427dbff0decc616fd69f1d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_21c93cf2b3f9ced2998ad9c1252c32235ad7dbf8b59b150e0568951f9496ea0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c93cf2b3f9ced2998ad9c1252c32235ad7dbf8b59b150e0568951f9496ea0e->enter($__internal_21c93cf2b3f9ced2998ad9c1252c32235ad7dbf8b59b150e0568951f9496ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_21c93cf2b3f9ced2998ad9c1252c32235ad7dbf8b59b150e0568951f9496ea0e->leave($__internal_21c93cf2b3f9ced2998ad9c1252c32235ad7dbf8b59b150e0568951f9496ea0e_prof);

        
        $__internal_e6219dfe3520bc990ad8565db4c9a81194e90513427dbff0decc616fd69f1d4a->leave($__internal_e6219dfe3520bc990ad8565db4c9a81194e90513427dbff0decc616fd69f1d4a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_914edf2e73190bf4a6e5e3c09ff363fa0a8fea3b7a8858fd5c51d0eaf1a20dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914edf2e73190bf4a6e5e3c09ff363fa0a8fea3b7a8858fd5c51d0eaf1a20dd2->enter($__internal_914edf2e73190bf4a6e5e3c09ff363fa0a8fea3b7a8858fd5c51d0eaf1a20dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2cb33334debf3b87b9626e7dde2793ce7c58b73cdf3dfc9aebd147679da0f216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb33334debf3b87b9626e7dde2793ce7c58b73cdf3dfc9aebd147679da0f216->enter($__internal_2cb33334debf3b87b9626e7dde2793ce7c58b73cdf3dfc9aebd147679da0f216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2cb33334debf3b87b9626e7dde2793ce7c58b73cdf3dfc9aebd147679da0f216->leave($__internal_2cb33334debf3b87b9626e7dde2793ce7c58b73cdf3dfc9aebd147679da0f216_prof);

        
        $__internal_914edf2e73190bf4a6e5e3c09ff363fa0a8fea3b7a8858fd5c51d0eaf1a20dd2->leave($__internal_914edf2e73190bf4a6e5e3c09ff363fa0a8fea3b7a8858fd5c51d0eaf1a20dd2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

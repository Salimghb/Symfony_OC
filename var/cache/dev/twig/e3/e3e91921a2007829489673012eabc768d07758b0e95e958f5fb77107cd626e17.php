<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
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
        $__internal_f25903159bb963c7b8d08ad16bb99a9696cfee21021e86e46c75230172454d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25903159bb963c7b8d08ad16bb99a9696cfee21021e86e46c75230172454d95->enter($__internal_f25903159bb963c7b8d08ad16bb99a9696cfee21021e86e46c75230172454d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4d18cbf9619e909536937f684e5e6212b42b536627bf48c77cb30aa1bbf02d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d18cbf9619e909536937f684e5e6212b42b536627bf48c77cb30aa1bbf02d10->enter($__internal_4d18cbf9619e909536937f684e5e6212b42b536627bf48c77cb30aa1bbf02d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25903159bb963c7b8d08ad16bb99a9696cfee21021e86e46c75230172454d95->leave($__internal_f25903159bb963c7b8d08ad16bb99a9696cfee21021e86e46c75230172454d95_prof);

        
        $__internal_4d18cbf9619e909536937f684e5e6212b42b536627bf48c77cb30aa1bbf02d10->leave($__internal_4d18cbf9619e909536937f684e5e6212b42b536627bf48c77cb30aa1bbf02d10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af08c637a17b307991b8158639e6788c5d2bee75ee5fdea0a90b19e68f3cdc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af08c637a17b307991b8158639e6788c5d2bee75ee5fdea0a90b19e68f3cdc98->enter($__internal_af08c637a17b307991b8158639e6788c5d2bee75ee5fdea0a90b19e68f3cdc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40dae354f1ba501d6fd36e6c8b39e42d224801a2ccb2fc135452d087636b3317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dae354f1ba501d6fd36e6c8b39e42d224801a2ccb2fc135452d087636b3317->enter($__internal_40dae354f1ba501d6fd36e6c8b39e42d224801a2ccb2fc135452d087636b3317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_40dae354f1ba501d6fd36e6c8b39e42d224801a2ccb2fc135452d087636b3317->leave($__internal_40dae354f1ba501d6fd36e6c8b39e42d224801a2ccb2fc135452d087636b3317_prof);

        
        $__internal_af08c637a17b307991b8158639e6788c5d2bee75ee5fdea0a90b19e68f3cdc98->leave($__internal_af08c637a17b307991b8158639e6788c5d2bee75ee5fdea0a90b19e68f3cdc98_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f76aabe43ce67bdb025387031e89f857b182e07b201ab0ce1591aebb3e87d106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76aabe43ce67bdb025387031e89f857b182e07b201ab0ce1591aebb3e87d106->enter($__internal_f76aabe43ce67bdb025387031e89f857b182e07b201ab0ce1591aebb3e87d106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9507d4f483d757b11c1b0b1f26ffc8ca0c70ea93e69667f088fc613d0c68389c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9507d4f483d757b11c1b0b1f26ffc8ca0c70ea93e69667f088fc613d0c68389c->enter($__internal_9507d4f483d757b11c1b0b1f26ffc8ca0c70ea93e69667f088fc613d0c68389c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9507d4f483d757b11c1b0b1f26ffc8ca0c70ea93e69667f088fc613d0c68389c->leave($__internal_9507d4f483d757b11c1b0b1f26ffc8ca0c70ea93e69667f088fc613d0c68389c_prof);

        
        $__internal_f76aabe43ce67bdb025387031e89f857b182e07b201ab0ce1591aebb3e87d106->leave($__internal_f76aabe43ce67bdb025387031e89f857b182e07b201ab0ce1591aebb3e87d106_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6b70b8307ef0cf43dbdb45638af28f28e8206065f45f991308fdb0e0c887e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b70b8307ef0cf43dbdb45638af28f28e8206065f45f991308fdb0e0c887e25->enter($__internal_f6b70b8307ef0cf43dbdb45638af28f28e8206065f45f991308fdb0e0c887e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f938d4fbf4bd6b83a741190d7e05bd33b965d0016518d56f22751b32eab9d951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f938d4fbf4bd6b83a741190d7e05bd33b965d0016518d56f22751b32eab9d951->enter($__internal_f938d4fbf4bd6b83a741190d7e05bd33b965d0016518d56f22751b32eab9d951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f938d4fbf4bd6b83a741190d7e05bd33b965d0016518d56f22751b32eab9d951->leave($__internal_f938d4fbf4bd6b83a741190d7e05bd33b965d0016518d56f22751b32eab9d951_prof);

        
        $__internal_f6b70b8307ef0cf43dbdb45638af28f28e8206065f45f991308fdb0e0c887e25->leave($__internal_f6b70b8307ef0cf43dbdb45638af28f28e8206065f45f991308fdb0e0c887e25_prof);

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

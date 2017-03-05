<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd9b472061677e100d0f0a19ab190dc4b4a04a6db43ba963cd690561170a9900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7660c2924a9c5333353a1efa53cbd87de03d8e53ccd27cad550151a8e85579d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7660c2924a9c5333353a1efa53cbd87de03d8e53ccd27cad550151a8e85579d0->enter($__internal_7660c2924a9c5333353a1efa53cbd87de03d8e53ccd27cad550151a8e85579d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7e755f1a966c8df918a0a10af70b848f16b14caad41110a151f7e8818980cc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e755f1a966c8df918a0a10af70b848f16b14caad41110a151f7e8818980cc3c->enter($__internal_7e755f1a966c8df918a0a10af70b848f16b14caad41110a151f7e8818980cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7660c2924a9c5333353a1efa53cbd87de03d8e53ccd27cad550151a8e85579d0->leave($__internal_7660c2924a9c5333353a1efa53cbd87de03d8e53ccd27cad550151a8e85579d0_prof);

        
        $__internal_7e755f1a966c8df918a0a10af70b848f16b14caad41110a151f7e8818980cc3c->leave($__internal_7e755f1a966c8df918a0a10af70b848f16b14caad41110a151f7e8818980cc3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8cbbe6ecfb446f7045eccf00ee1d02b730664cd38d214adf186bfca9895e59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cbbe6ecfb446f7045eccf00ee1d02b730664cd38d214adf186bfca9895e59a->enter($__internal_f8cbbe6ecfb446f7045eccf00ee1d02b730664cd38d214adf186bfca9895e59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3acd4929914db4f68acce5f8803c9f8264dd455512519152a6d576319faf4f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3acd4929914db4f68acce5f8803c9f8264dd455512519152a6d576319faf4f1d->enter($__internal_3acd4929914db4f68acce5f8803c9f8264dd455512519152a6d576319faf4f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3acd4929914db4f68acce5f8803c9f8264dd455512519152a6d576319faf4f1d->leave($__internal_3acd4929914db4f68acce5f8803c9f8264dd455512519152a6d576319faf4f1d_prof);

        
        $__internal_f8cbbe6ecfb446f7045eccf00ee1d02b730664cd38d214adf186bfca9895e59a->leave($__internal_f8cbbe6ecfb446f7045eccf00ee1d02b730664cd38d214adf186bfca9895e59a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57e69838db0ee318eaed3aadefb2d4b05d5052d0db255750a5717eaf42b9b044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e69838db0ee318eaed3aadefb2d4b05d5052d0db255750a5717eaf42b9b044->enter($__internal_57e69838db0ee318eaed3aadefb2d4b05d5052d0db255750a5717eaf42b9b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4069447460d53923b13cce8a1d67c522effed4375fc769291a77fb146c39d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4069447460d53923b13cce8a1d67c522effed4375fc769291a77fb146c39d25->enter($__internal_f4069447460d53923b13cce8a1d67c522effed4375fc769291a77fb146c39d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f4069447460d53923b13cce8a1d67c522effed4375fc769291a77fb146c39d25->leave($__internal_f4069447460d53923b13cce8a1d67c522effed4375fc769291a77fb146c39d25_prof);

        
        $__internal_57e69838db0ee318eaed3aadefb2d4b05d5052d0db255750a5717eaf42b9b044->leave($__internal_57e69838db0ee318eaed3aadefb2d4b05d5052d0db255750a5717eaf42b9b044_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

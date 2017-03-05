<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4608bcd2202585fa37dd642637690eb23dee451f9fed291243964f6a8eff6c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4608bcd2202585fa37dd642637690eb23dee451f9fed291243964f6a8eff6c37->enter($__internal_4608bcd2202585fa37dd642637690eb23dee451f9fed291243964f6a8eff6c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_464b40204451ac23387ebaadc1c7f2044e47e3cf65b29a9f2edb448dd10fe20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464b40204451ac23387ebaadc1c7f2044e47e3cf65b29a9f2edb448dd10fe20f->enter($__internal_464b40204451ac23387ebaadc1c7f2044e47e3cf65b29a9f2edb448dd10fe20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4608bcd2202585fa37dd642637690eb23dee451f9fed291243964f6a8eff6c37->leave($__internal_4608bcd2202585fa37dd642637690eb23dee451f9fed291243964f6a8eff6c37_prof);

        
        $__internal_464b40204451ac23387ebaadc1c7f2044e47e3cf65b29a9f2edb448dd10fe20f->leave($__internal_464b40204451ac23387ebaadc1c7f2044e47e3cf65b29a9f2edb448dd10fe20f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2134b205202f968ad22c45f3a3220d787db9e1ee8b7126a6411dc4c2c4444d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2134b205202f968ad22c45f3a3220d787db9e1ee8b7126a6411dc4c2c4444d39->enter($__internal_2134b205202f968ad22c45f3a3220d787db9e1ee8b7126a6411dc4c2c4444d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3d78e23c36fdd28bfa4e6c916078598d79b0306cbc9b5af22672166565a5db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d78e23c36fdd28bfa4e6c916078598d79b0306cbc9b5af22672166565a5db3->enter($__internal_f3d78e23c36fdd28bfa4e6c916078598d79b0306cbc9b5af22672166565a5db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3d78e23c36fdd28bfa4e6c916078598d79b0306cbc9b5af22672166565a5db3->leave($__internal_f3d78e23c36fdd28bfa4e6c916078598d79b0306cbc9b5af22672166565a5db3_prof);

        
        $__internal_2134b205202f968ad22c45f3a3220d787db9e1ee8b7126a6411dc4c2c4444d39->leave($__internal_2134b205202f968ad22c45f3a3220d787db9e1ee8b7126a6411dc4c2c4444d39_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7bab05b666470a60bb0a1f66b941b5a738a043965927d400d6e77857c2fcde4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bab05b666470a60bb0a1f66b941b5a738a043965927d400d6e77857c2fcde4b->enter($__internal_7bab05b666470a60bb0a1f66b941b5a738a043965927d400d6e77857c2fcde4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_980a4b63881c7de88830e9751943e80ef380ec5162616635c80c6ec7ec2c7044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980a4b63881c7de88830e9751943e80ef380ec5162616635c80c6ec7ec2c7044->enter($__internal_980a4b63881c7de88830e9751943e80ef380ec5162616635c80c6ec7ec2c7044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_980a4b63881c7de88830e9751943e80ef380ec5162616635c80c6ec7ec2c7044->leave($__internal_980a4b63881c7de88830e9751943e80ef380ec5162616635c80c6ec7ec2c7044_prof);

        
        $__internal_7bab05b666470a60bb0a1f66b941b5a738a043965927d400d6e77857c2fcde4b->leave($__internal_7bab05b666470a60bb0a1f66b941b5a738a043965927d400d6e77857c2fcde4b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_714780cf6d54fa9275076be72f2a6ab6f6adf14302e61a73e9e34102b6771ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714780cf6d54fa9275076be72f2a6ab6f6adf14302e61a73e9e34102b6771ba5->enter($__internal_714780cf6d54fa9275076be72f2a6ab6f6adf14302e61a73e9e34102b6771ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22e282f97c17aa0c3993b932c07ece597358f54f12dc6165d6c11f4adaaae964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22e282f97c17aa0c3993b932c07ece597358f54f12dc6165d6c11f4adaaae964->enter($__internal_22e282f97c17aa0c3993b932c07ece597358f54f12dc6165d6c11f4adaaae964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22e282f97c17aa0c3993b932c07ece597358f54f12dc6165d6c11f4adaaae964->leave($__internal_22e282f97c17aa0c3993b932c07ece597358f54f12dc6165d6c11f4adaaae964_prof);

        
        $__internal_714780cf6d54fa9275076be72f2a6ab6f6adf14302e61a73e9e34102b6771ba5->leave($__internal_714780cf6d54fa9275076be72f2a6ab6f6adf14302e61a73e9e34102b6771ba5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ed79e0b162b552cee8cd2967bf7bc49a9c2ccbd7b3187a449fb9fe79a227cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed79e0b162b552cee8cd2967bf7bc49a9c2ccbd7b3187a449fb9fe79a227cfa->enter($__internal_1ed79e0b162b552cee8cd2967bf7bc49a9c2ccbd7b3187a449fb9fe79a227cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe4dd9d7e211949e1e67dfa24c7d80bed2ffb794cf35c39054297a1f83f1aa82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4dd9d7e211949e1e67dfa24c7d80bed2ffb794cf35c39054297a1f83f1aa82->enter($__internal_fe4dd9d7e211949e1e67dfa24c7d80bed2ffb794cf35c39054297a1f83f1aa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe4dd9d7e211949e1e67dfa24c7d80bed2ffb794cf35c39054297a1f83f1aa82->leave($__internal_fe4dd9d7e211949e1e67dfa24c7d80bed2ffb794cf35c39054297a1f83f1aa82_prof);

        
        $__internal_1ed79e0b162b552cee8cd2967bf7bc49a9c2ccbd7b3187a449fb9fe79a227cfa->leave($__internal_1ed79e0b162b552cee8cd2967bf7bc49a9c2ccbd7b3187a449fb9fe79a227cfa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}

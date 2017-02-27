<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_deaf84387804f983f536b2148d97baa1f821895251e92db3f06215e7a1a3d1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d18b159f7120739f0bcc3356b5c32594067f3c16fad34001afebf61e229e69ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18b159f7120739f0bcc3356b5c32594067f3c16fad34001afebf61e229e69ea->enter($__internal_d18b159f7120739f0bcc3356b5c32594067f3c16fad34001afebf61e229e69ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_96d893cea69a42d8e2afc239dcd81e95cea54546e51491835e855640a2099da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d893cea69a42d8e2afc239dcd81e95cea54546e51491835e855640a2099da3->enter($__internal_96d893cea69a42d8e2afc239dcd81e95cea54546e51491835e855640a2099da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d18b159f7120739f0bcc3356b5c32594067f3c16fad34001afebf61e229e69ea->leave($__internal_d18b159f7120739f0bcc3356b5c32594067f3c16fad34001afebf61e229e69ea_prof);

        
        $__internal_96d893cea69a42d8e2afc239dcd81e95cea54546e51491835e855640a2099da3->leave($__internal_96d893cea69a42d8e2afc239dcd81e95cea54546e51491835e855640a2099da3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b5864a8d3812a09639f1b9db312c8c9b8dbae6206339b43cf649cf9de83e431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5864a8d3812a09639f1b9db312c8c9b8dbae6206339b43cf649cf9de83e431->enter($__internal_1b5864a8d3812a09639f1b9db312c8c9b8dbae6206339b43cf649cf9de83e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e54b7d32a6b3e2b3e06754a96179ee8997ca9dd729f89d443ab3bf55d296d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e54b7d32a6b3e2b3e06754a96179ee8997ca9dd729f89d443ab3bf55d296d87->enter($__internal_3e54b7d32a6b3e2b3e06754a96179ee8997ca9dd729f89d443ab3bf55d296d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e54b7d32a6b3e2b3e06754a96179ee8997ca9dd729f89d443ab3bf55d296d87->leave($__internal_3e54b7d32a6b3e2b3e06754a96179ee8997ca9dd729f89d443ab3bf55d296d87_prof);

        
        $__internal_1b5864a8d3812a09639f1b9db312c8c9b8dbae6206339b43cf649cf9de83e431->leave($__internal_1b5864a8d3812a09639f1b9db312c8c9b8dbae6206339b43cf649cf9de83e431_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

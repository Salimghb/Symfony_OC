<?php

/* ::base.html.twig */
class __TwigTemplate_ed670b1aee3e66b8ce31e5932f55a332c35f0ac82419849f8f18b38bb46e527f extends Twig_Template
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
        $__internal_f82c7a8f0bd19011379047ca495b2fa69fd734f969c13696543ff974645e8a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82c7a8f0bd19011379047ca495b2fa69fd734f969c13696543ff974645e8a86->enter($__internal_f82c7a8f0bd19011379047ca495b2fa69fd734f969c13696543ff974645e8a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_632b803bf576f6d2a624712566e198741f94c419156ff70f5f62c98259945125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632b803bf576f6d2a624712566e198741f94c419156ff70f5f62c98259945125->enter($__internal_632b803bf576f6d2a624712566e198741f94c419156ff70f5f62c98259945125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f82c7a8f0bd19011379047ca495b2fa69fd734f969c13696543ff974645e8a86->leave($__internal_f82c7a8f0bd19011379047ca495b2fa69fd734f969c13696543ff974645e8a86_prof);

        
        $__internal_632b803bf576f6d2a624712566e198741f94c419156ff70f5f62c98259945125->leave($__internal_632b803bf576f6d2a624712566e198741f94c419156ff70f5f62c98259945125_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99607ad53eaf52aae2aa12faff456019a28beddb70e280c1c0c14b5be73f9652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99607ad53eaf52aae2aa12faff456019a28beddb70e280c1c0c14b5be73f9652->enter($__internal_99607ad53eaf52aae2aa12faff456019a28beddb70e280c1c0c14b5be73f9652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05f0bf1f5cf0fce584b7525ad45213c8b571bd0ead1ed2aefd5074188faeaa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f0bf1f5cf0fce584b7525ad45213c8b571bd0ead1ed2aefd5074188faeaa78->enter($__internal_05f0bf1f5cf0fce584b7525ad45213c8b571bd0ead1ed2aefd5074188faeaa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_05f0bf1f5cf0fce584b7525ad45213c8b571bd0ead1ed2aefd5074188faeaa78->leave($__internal_05f0bf1f5cf0fce584b7525ad45213c8b571bd0ead1ed2aefd5074188faeaa78_prof);

        
        $__internal_99607ad53eaf52aae2aa12faff456019a28beddb70e280c1c0c14b5be73f9652->leave($__internal_99607ad53eaf52aae2aa12faff456019a28beddb70e280c1c0c14b5be73f9652_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88ac7fb2b02feb0f92792a1ae3b51dccb3725b1ab9dce1013022e0925d855754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ac7fb2b02feb0f92792a1ae3b51dccb3725b1ab9dce1013022e0925d855754->enter($__internal_88ac7fb2b02feb0f92792a1ae3b51dccb3725b1ab9dce1013022e0925d855754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9de360dd95df761f5ad6b0e832257bfc08e8554689310e2411c86a614e8620eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de360dd95df761f5ad6b0e832257bfc08e8554689310e2411c86a614e8620eb->enter($__internal_9de360dd95df761f5ad6b0e832257bfc08e8554689310e2411c86a614e8620eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9de360dd95df761f5ad6b0e832257bfc08e8554689310e2411c86a614e8620eb->leave($__internal_9de360dd95df761f5ad6b0e832257bfc08e8554689310e2411c86a614e8620eb_prof);

        
        $__internal_88ac7fb2b02feb0f92792a1ae3b51dccb3725b1ab9dce1013022e0925d855754->leave($__internal_88ac7fb2b02feb0f92792a1ae3b51dccb3725b1ab9dce1013022e0925d855754_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c0c6e96c8cca0bfd3a87b35a6d1b1203c146228ed83d21f407e8754386da204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0c6e96c8cca0bfd3a87b35a6d1b1203c146228ed83d21f407e8754386da204->enter($__internal_9c0c6e96c8cca0bfd3a87b35a6d1b1203c146228ed83d21f407e8754386da204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d860a50551b15d421268c20557eda11e6d1146a6d7fce9030f243eef95963fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d860a50551b15d421268c20557eda11e6d1146a6d7fce9030f243eef95963fec->enter($__internal_d860a50551b15d421268c20557eda11e6d1146a6d7fce9030f243eef95963fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d860a50551b15d421268c20557eda11e6d1146a6d7fce9030f243eef95963fec->leave($__internal_d860a50551b15d421268c20557eda11e6d1146a6d7fce9030f243eef95963fec_prof);

        
        $__internal_9c0c6e96c8cca0bfd3a87b35a6d1b1203c146228ed83d21f407e8754386da204->leave($__internal_9c0c6e96c8cca0bfd3a87b35a6d1b1203c146228ed83d21f407e8754386da204_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbe9a7e4cccd59013fa6e8e1451e8cb9d8846af3df2ecef2cdb42fc8c7964411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe9a7e4cccd59013fa6e8e1451e8cb9d8846af3df2ecef2cdb42fc8c7964411->enter($__internal_fbe9a7e4cccd59013fa6e8e1451e8cb9d8846af3df2ecef2cdb42fc8c7964411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66548d0ed90f4e2ee6b0ec2ddb6f0e0766a008d9f20c16f41f13db8ee1edd3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66548d0ed90f4e2ee6b0ec2ddb6f0e0766a008d9f20c16f41f13db8ee1edd3e3->enter($__internal_66548d0ed90f4e2ee6b0ec2ddb6f0e0766a008d9f20c16f41f13db8ee1edd3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_66548d0ed90f4e2ee6b0ec2ddb6f0e0766a008d9f20c16f41f13db8ee1edd3e3->leave($__internal_66548d0ed90f4e2ee6b0ec2ddb6f0e0766a008d9f20c16f41f13db8ee1edd3e3_prof);

        
        $__internal_fbe9a7e4cccd59013fa6e8e1451e8cb9d8846af3df2ecef2cdb42fc8c7964411->leave($__internal_fbe9a7e4cccd59013fa6e8e1451e8cb9d8846af3df2ecef2cdb42fc8c7964411_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}

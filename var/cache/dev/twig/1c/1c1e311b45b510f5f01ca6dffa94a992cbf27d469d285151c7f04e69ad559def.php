<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_633e562032fc2c207cb7b9d09c6a739a81d66b6c442451a74eeb29393ef2e537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6669cc7d487fcc759599e8b590419d74c80429f8c2ae95abef7d3ab2931a76ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6669cc7d487fcc759599e8b590419d74c80429f8c2ae95abef7d3ab2931a76ca->enter($__internal_6669cc7d487fcc759599e8b590419d74c80429f8c2ae95abef7d3ab2931a76ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bcbd17c0c5f4b804cf10840593a3eaadc1974e7f3b63d4f5261605f4338c0873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbd17c0c5f4b804cf10840593a3eaadc1974e7f3b63d4f5261605f4338c0873->enter($__internal_bcbd17c0c5f4b804cf10840593a3eaadc1974e7f3b63d4f5261605f4338c0873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6669cc7d487fcc759599e8b590419d74c80429f8c2ae95abef7d3ab2931a76ca->leave($__internal_6669cc7d487fcc759599e8b590419d74c80429f8c2ae95abef7d3ab2931a76ca_prof);

        
        $__internal_bcbd17c0c5f4b804cf10840593a3eaadc1974e7f3b63d4f5261605f4338c0873->leave($__internal_bcbd17c0c5f4b804cf10840593a3eaadc1974e7f3b63d4f5261605f4338c0873_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e6a617f70ceb20ccf700a800676314ea2830de0d56a1bd622841f731eda41c61 extends Twig_Template
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
        $__internal_b85a4112382dbdc6177b758ec5d1ed3bbedd3e0207cbd615dd57092a4bcbf952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85a4112382dbdc6177b758ec5d1ed3bbedd3e0207cbd615dd57092a4bcbf952->enter($__internal_b85a4112382dbdc6177b758ec5d1ed3bbedd3e0207cbd615dd57092a4bcbf952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_047204cb6badac934c6108a3c324ecc7e6f3e131f104c6c063d3f39da1e59e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047204cb6badac934c6108a3c324ecc7e6f3e131f104c6c063d3f39da1e59e9d->enter($__internal_047204cb6badac934c6108a3c324ecc7e6f3e131f104c6c063d3f39da1e59e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b85a4112382dbdc6177b758ec5d1ed3bbedd3e0207cbd615dd57092a4bcbf952->leave($__internal_b85a4112382dbdc6177b758ec5d1ed3bbedd3e0207cbd615dd57092a4bcbf952_prof);

        
        $__internal_047204cb6badac934c6108a3c324ecc7e6f3e131f104c6c063d3f39da1e59e9d->leave($__internal_047204cb6badac934c6108a3c324ecc7e6f3e131f104c6c063d3f39da1e59e9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

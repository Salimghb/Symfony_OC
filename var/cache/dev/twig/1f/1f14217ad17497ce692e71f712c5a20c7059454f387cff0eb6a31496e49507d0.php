<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f3defe0f75614e153998bf8fb316ac33a171f8ae713cd81fba113152e65f9515 extends Twig_Template
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
        $__internal_307d74c59c2a380e89011c71c09695168d04bcdb2b1a8e4e36866184ebde9d9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307d74c59c2a380e89011c71c09695168d04bcdb2b1a8e4e36866184ebde9d9b->enter($__internal_307d74c59c2a380e89011c71c09695168d04bcdb2b1a8e4e36866184ebde9d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_92305fb3a982557121d1ce1f34f447a56c535ba960f70d421e9b33032d04fdc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92305fb3a982557121d1ce1f34f447a56c535ba960f70d421e9b33032d04fdc4->enter($__internal_92305fb3a982557121d1ce1f34f447a56c535ba960f70d421e9b33032d04fdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_307d74c59c2a380e89011c71c09695168d04bcdb2b1a8e4e36866184ebde9d9b->leave($__internal_307d74c59c2a380e89011c71c09695168d04bcdb2b1a8e4e36866184ebde9d9b_prof);

        
        $__internal_92305fb3a982557121d1ce1f34f447a56c535ba960f70d421e9b33032d04fdc4->leave($__internal_92305fb3a982557121d1ce1f34f447a56c535ba960f70d421e9b33032d04fdc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}

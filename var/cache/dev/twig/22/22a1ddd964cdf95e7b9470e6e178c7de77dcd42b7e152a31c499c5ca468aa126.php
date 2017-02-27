<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_438f95d2b8c6ae583edf5be0a0d7ac7aa708a2d782ceefea0f61bfe756daeb06 extends Twig_Template
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
        $__internal_fd070928cca6de5b55166a977dd0a435926b82a61f847376544b02c11c512ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd070928cca6de5b55166a977dd0a435926b82a61f847376544b02c11c512ea4->enter($__internal_fd070928cca6de5b55166a977dd0a435926b82a61f847376544b02c11c512ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d59a4df3adf716d8c25f75293e8844b826dd05cc8ad5c07e2bbfc5282fdd4a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59a4df3adf716d8c25f75293e8844b826dd05cc8ad5c07e2bbfc5282fdd4a2b->enter($__internal_d59a4df3adf716d8c25f75293e8844b826dd05cc8ad5c07e2bbfc5282fdd4a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fd070928cca6de5b55166a977dd0a435926b82a61f847376544b02c11c512ea4->leave($__internal_fd070928cca6de5b55166a977dd0a435926b82a61f847376544b02c11c512ea4_prof);

        
        $__internal_d59a4df3adf716d8c25f75293e8844b826dd05cc8ad5c07e2bbfc5282fdd4a2b->leave($__internal_d59a4df3adf716d8c25f75293e8844b826dd05cc8ad5c07e2bbfc5282fdd4a2b_prof);

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

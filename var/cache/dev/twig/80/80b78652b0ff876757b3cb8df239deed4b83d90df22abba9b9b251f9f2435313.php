<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a78a6ff1855a11fa56b9aa6f9e619d5d8d1b705a194d0b65fc2ec565b651ab79 extends Twig_Template
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
        $__internal_0d3e7163d3d7efd016251633c99bcfd054b7182d24e5103cd5a63936bf5eb8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3e7163d3d7efd016251633c99bcfd054b7182d24e5103cd5a63936bf5eb8fd->enter($__internal_0d3e7163d3d7efd016251633c99bcfd054b7182d24e5103cd5a63936bf5eb8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_421621281e80e80eca8c1b4f64d9fbb30dd5467d8065a907b1005cf4d42cb080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421621281e80e80eca8c1b4f64d9fbb30dd5467d8065a907b1005cf4d42cb080->enter($__internal_421621281e80e80eca8c1b4f64d9fbb30dd5467d8065a907b1005cf4d42cb080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0d3e7163d3d7efd016251633c99bcfd054b7182d24e5103cd5a63936bf5eb8fd->leave($__internal_0d3e7163d3d7efd016251633c99bcfd054b7182d24e5103cd5a63936bf5eb8fd_prof);

        
        $__internal_421621281e80e80eca8c1b4f64d9fbb30dd5467d8065a907b1005cf4d42cb080->leave($__internal_421621281e80e80eca8c1b4f64d9fbb30dd5467d8065a907b1005cf4d42cb080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

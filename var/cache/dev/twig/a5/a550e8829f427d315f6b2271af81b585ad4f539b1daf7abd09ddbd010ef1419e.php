<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7da94c75a485bd5d8225de6e30d7d8888732ffc8123f20fbe3f06471ca4eb03e extends Twig_Template
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
        $__internal_e38c145a86fcceffcdd1a10f8a7b5448975d4abfe6bc4dc58915d9941e046513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38c145a86fcceffcdd1a10f8a7b5448975d4abfe6bc4dc58915d9941e046513->enter($__internal_e38c145a86fcceffcdd1a10f8a7b5448975d4abfe6bc4dc58915d9941e046513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_88255c7cd7a37f7bbb42eafb4d76db67f6864b75f603b9370dddf4d9436d7825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88255c7cd7a37f7bbb42eafb4d76db67f6864b75f603b9370dddf4d9436d7825->enter($__internal_88255c7cd7a37f7bbb42eafb4d76db67f6864b75f603b9370dddf4d9436d7825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e38c145a86fcceffcdd1a10f8a7b5448975d4abfe6bc4dc58915d9941e046513->leave($__internal_e38c145a86fcceffcdd1a10f8a7b5448975d4abfe6bc4dc58915d9941e046513_prof);

        
        $__internal_88255c7cd7a37f7bbb42eafb4d76db67f6864b75f603b9370dddf4d9436d7825->leave($__internal_88255c7cd7a37f7bbb42eafb4d76db67f6864b75f603b9370dddf4d9436d7825_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

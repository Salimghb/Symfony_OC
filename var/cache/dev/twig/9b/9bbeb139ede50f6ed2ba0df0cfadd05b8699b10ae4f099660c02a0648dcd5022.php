<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ad13a00d8b12ccedd00ccd8c4d4f5b342773afabd7cc6654b67bf5571f4d9139 extends Twig_Template
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
        $__internal_c8eabdca069208b97a3f79b8ad7fd25801fcd97656b7155d38ecbf81e1bb4671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8eabdca069208b97a3f79b8ad7fd25801fcd97656b7155d38ecbf81e1bb4671->enter($__internal_c8eabdca069208b97a3f79b8ad7fd25801fcd97656b7155d38ecbf81e1bb4671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_228c9e8918527a6b366fb48eae37511f3bc24c3ca855de00c8c599d95dfdc597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228c9e8918527a6b366fb48eae37511f3bc24c3ca855de00c8c599d95dfdc597->enter($__internal_228c9e8918527a6b366fb48eae37511f3bc24c3ca855de00c8c599d95dfdc597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c8eabdca069208b97a3f79b8ad7fd25801fcd97656b7155d38ecbf81e1bb4671->leave($__internal_c8eabdca069208b97a3f79b8ad7fd25801fcd97656b7155d38ecbf81e1bb4671_prof);

        
        $__internal_228c9e8918527a6b366fb48eae37511f3bc24c3ca855de00c8c599d95dfdc597->leave($__internal_228c9e8918527a6b366fb48eae37511f3bc24c3ca855de00c8c599d95dfdc597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

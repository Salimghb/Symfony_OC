<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_52c211261b9d74c9ab9e1c4da2b79c44d543246778aed5e79ba360f413151da7 extends Twig_Template
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
        $__internal_2dbe71cdb4d68ddc9bbd4b63c9c1c1fc9a3c6b70ee1270c6500e6638994edfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dbe71cdb4d68ddc9bbd4b63c9c1c1fc9a3c6b70ee1270c6500e6638994edfc5->enter($__internal_2dbe71cdb4d68ddc9bbd4b63c9c1c1fc9a3c6b70ee1270c6500e6638994edfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b930b8500fb08481ddc1abbe7844bb812bd95847d2ea4262542eb65b93ff2377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b930b8500fb08481ddc1abbe7844bb812bd95847d2ea4262542eb65b93ff2377->enter($__internal_b930b8500fb08481ddc1abbe7844bb812bd95847d2ea4262542eb65b93ff2377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2dbe71cdb4d68ddc9bbd4b63c9c1c1fc9a3c6b70ee1270c6500e6638994edfc5->leave($__internal_2dbe71cdb4d68ddc9bbd4b63c9c1c1fc9a3c6b70ee1270c6500e6638994edfc5_prof);

        
        $__internal_b930b8500fb08481ddc1abbe7844bb812bd95847d2ea4262542eb65b93ff2377->leave($__internal_b930b8500fb08481ddc1abbe7844bb812bd95847d2ea4262542eb65b93ff2377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

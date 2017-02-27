<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_1aee3d308f7f6ca7d8482ed2c462a9db0ff7fe9a9cecf0c98a137ce5d5e8db7f extends Twig_Template
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
        $__internal_b3aa67c7f71978c44d98233b265a2af0d952a783df19cfaf4cc8679aa39b3f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aa67c7f71978c44d98233b265a2af0d952a783df19cfaf4cc8679aa39b3f28->enter($__internal_b3aa67c7f71978c44d98233b265a2af0d952a783df19cfaf4cc8679aa39b3f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_98a052f40e685bf2086cd5c1ec974715eb17e3532a5d19afb24d4eef3e65ff70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a052f40e685bf2086cd5c1ec974715eb17e3532a5d19afb24d4eef3e65ff70->enter($__internal_98a052f40e685bf2086cd5c1ec974715eb17e3532a5d19afb24d4eef3e65ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b3aa67c7f71978c44d98233b265a2af0d952a783df19cfaf4cc8679aa39b3f28->leave($__internal_b3aa67c7f71978c44d98233b265a2af0d952a783df19cfaf4cc8679aa39b3f28_prof);

        
        $__internal_98a052f40e685bf2086cd5c1ec974715eb17e3532a5d19afb24d4eef3e65ff70->leave($__internal_98a052f40e685bf2086cd5c1ec974715eb17e3532a5d19afb24d4eef3e65ff70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

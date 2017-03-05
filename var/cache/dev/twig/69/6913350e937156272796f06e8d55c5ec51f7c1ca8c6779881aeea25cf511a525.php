<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0081d48ac35342391a640c6ebbcf9ec7a68cca53c228369e3c98ff621deb31f6 extends Twig_Template
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
        $__internal_402ed6bd7f1d2855008c1352868ecf244ac40afd8f62fd1294f2255b3cd83de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402ed6bd7f1d2855008c1352868ecf244ac40afd8f62fd1294f2255b3cd83de1->enter($__internal_402ed6bd7f1d2855008c1352868ecf244ac40afd8f62fd1294f2255b3cd83de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_85c24893919ac4a5cefffcbda5194d452067816607633c2c63cd7f3df32cd02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c24893919ac4a5cefffcbda5194d452067816607633c2c63cd7f3df32cd02b->enter($__internal_85c24893919ac4a5cefffcbda5194d452067816607633c2c63cd7f3df32cd02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_402ed6bd7f1d2855008c1352868ecf244ac40afd8f62fd1294f2255b3cd83de1->leave($__internal_402ed6bd7f1d2855008c1352868ecf244ac40afd8f62fd1294f2255b3cd83de1_prof);

        
        $__internal_85c24893919ac4a5cefffcbda5194d452067816607633c2c63cd7f3df32cd02b->leave($__internal_85c24893919ac4a5cefffcbda5194d452067816607633c2c63cd7f3df32cd02b_prof);

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

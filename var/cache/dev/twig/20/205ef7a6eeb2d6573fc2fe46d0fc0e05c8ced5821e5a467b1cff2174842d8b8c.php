<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d89ef3ec34c16496f7f832d05f67fe2ae563e290bb80f5c2a450f71a057abc88 extends Twig_Template
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
        $__internal_00e239f9b3bbd588c93371410deb5fdb461f33db86e1d7cc50c5fe006e367506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e239f9b3bbd588c93371410deb5fdb461f33db86e1d7cc50c5fe006e367506->enter($__internal_00e239f9b3bbd588c93371410deb5fdb461f33db86e1d7cc50c5fe006e367506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_305d9af2a8bbd57a1cb1e234f914e5f0a4a0ffeafdd549794ed4de4f7642686b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305d9af2a8bbd57a1cb1e234f914e5f0a4a0ffeafdd549794ed4de4f7642686b->enter($__internal_305d9af2a8bbd57a1cb1e234f914e5f0a4a0ffeafdd549794ed4de4f7642686b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_00e239f9b3bbd588c93371410deb5fdb461f33db86e1d7cc50c5fe006e367506->leave($__internal_00e239f9b3bbd588c93371410deb5fdb461f33db86e1d7cc50c5fe006e367506_prof);

        
        $__internal_305d9af2a8bbd57a1cb1e234f914e5f0a4a0ffeafdd549794ed4de4f7642686b->leave($__internal_305d9af2a8bbd57a1cb1e234f914e5f0a4a0ffeafdd549794ed4de4f7642686b_prof);

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

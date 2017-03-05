<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6933c1a269f5ebb2ab91156c4fdd38c99aa769be7bbda253785f2c5d18f25 extends Twig_Template
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
        $__internal_38b58ed0ac48dad93eb41a2f0ea8aacf7f891bab42d5345fc91fd0cbbb6131d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b58ed0ac48dad93eb41a2f0ea8aacf7f891bab42d5345fc91fd0cbbb6131d9->enter($__internal_38b58ed0ac48dad93eb41a2f0ea8aacf7f891bab42d5345fc91fd0cbbb6131d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3408e38f19d0b1677ebacce0e9f37add9a715bdcff5affe2af2693a33d82da41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3408e38f19d0b1677ebacce0e9f37add9a715bdcff5affe2af2693a33d82da41->enter($__internal_3408e38f19d0b1677ebacce0e9f37add9a715bdcff5affe2af2693a33d82da41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_38b58ed0ac48dad93eb41a2f0ea8aacf7f891bab42d5345fc91fd0cbbb6131d9->leave($__internal_38b58ed0ac48dad93eb41a2f0ea8aacf7f891bab42d5345fc91fd0cbbb6131d9_prof);

        
        $__internal_3408e38f19d0b1677ebacce0e9f37add9a715bdcff5affe2af2693a33d82da41->leave($__internal_3408e38f19d0b1677ebacce0e9f37add9a715bdcff5affe2af2693a33d82da41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

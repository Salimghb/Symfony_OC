<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ec4b762bc2a9d67212dd4ea5414bd39190d7d6ba1020ba6e208064e3816b8c0d extends Twig_Template
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
        $__internal_f1d431d0ece36897bf1eb5fd78581dce7a147684f2caefb74a4cd53dd302aea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d431d0ece36897bf1eb5fd78581dce7a147684f2caefb74a4cd53dd302aea3->enter($__internal_f1d431d0ece36897bf1eb5fd78581dce7a147684f2caefb74a4cd53dd302aea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2ee425a1047f6639c854170d5de9f686677574ef4e8a94c46fcb959ec22bf182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee425a1047f6639c854170d5de9f686677574ef4e8a94c46fcb959ec22bf182->enter($__internal_2ee425a1047f6639c854170d5de9f686677574ef4e8a94c46fcb959ec22bf182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f1d431d0ece36897bf1eb5fd78581dce7a147684f2caefb74a4cd53dd302aea3->leave($__internal_f1d431d0ece36897bf1eb5fd78581dce7a147684f2caefb74a4cd53dd302aea3_prof);

        
        $__internal_2ee425a1047f6639c854170d5de9f686677574ef4e8a94c46fcb959ec22bf182->leave($__internal_2ee425a1047f6639c854170d5de9f686677574ef4e8a94c46fcb959ec22bf182_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

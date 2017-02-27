<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bb589a6dd291b61b795e1b32ab4fa249a6e33604ea936d84ea7ccdf0b2a6ec59 extends Twig_Template
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
        $__internal_007474033c3b2ae5098087c620ad322b709d61e071b7fd09b76d5a71d72871a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007474033c3b2ae5098087c620ad322b709d61e071b7fd09b76d5a71d72871a2->enter($__internal_007474033c3b2ae5098087c620ad322b709d61e071b7fd09b76d5a71d72871a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_149f05ac7f3b7d4dbe0c57559c3e9efdb0ae2b07e12a9db0ec906f0816878c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149f05ac7f3b7d4dbe0c57559c3e9efdb0ae2b07e12a9db0ec906f0816878c36->enter($__internal_149f05ac7f3b7d4dbe0c57559c3e9efdb0ae2b07e12a9db0ec906f0816878c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_007474033c3b2ae5098087c620ad322b709d61e071b7fd09b76d5a71d72871a2->leave($__internal_007474033c3b2ae5098087c620ad322b709d61e071b7fd09b76d5a71d72871a2_prof);

        
        $__internal_149f05ac7f3b7d4dbe0c57559c3e9efdb0ae2b07e12a9db0ec906f0816878c36->leave($__internal_149f05ac7f3b7d4dbe0c57559c3e9efdb0ae2b07e12a9db0ec906f0816878c36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}

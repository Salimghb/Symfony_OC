<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ba4ae6009d75e433a538813d37b22ae62c1aadf7f2453b7ba4419ab24c13d67f extends Twig_Template
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
        $__internal_2ab99b80917ca30d2f6842b1841cdcd50b3dd744ad0b16d420afb4ace7c67a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab99b80917ca30d2f6842b1841cdcd50b3dd744ad0b16d420afb4ace7c67a4a->enter($__internal_2ab99b80917ca30d2f6842b1841cdcd50b3dd744ad0b16d420afb4ace7c67a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4d1ae6e788e86b412abc8535e6d3bcc20117e96c71acd9ded5ddd6e433d8b5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1ae6e788e86b412abc8535e6d3bcc20117e96c71acd9ded5ddd6e433d8b5cd->enter($__internal_4d1ae6e788e86b412abc8535e6d3bcc20117e96c71acd9ded5ddd6e433d8b5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2ab99b80917ca30d2f6842b1841cdcd50b3dd744ad0b16d420afb4ace7c67a4a->leave($__internal_2ab99b80917ca30d2f6842b1841cdcd50b3dd744ad0b16d420afb4ace7c67a4a_prof);

        
        $__internal_4d1ae6e788e86b412abc8535e6d3bcc20117e96c71acd9ded5ddd6e433d8b5cd->leave($__internal_4d1ae6e788e86b412abc8535e6d3bcc20117e96c71acd9ded5ddd6e433d8b5cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be57f233c54389e1836607f61faebcba2d171166accb0c8483001d6060fec269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_663730aa31ff0193f9bd8d3959637e6babecd4cb9a05961dd2efbde5bb1fc7fe = $this->env->getExtension("native_profiler");
        $__internal_663730aa31ff0193f9bd8d3959637e6babecd4cb9a05961dd2efbde5bb1fc7fe->enter($__internal_663730aa31ff0193f9bd8d3959637e6babecd4cb9a05961dd2efbde5bb1fc7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_663730aa31ff0193f9bd8d3959637e6babecd4cb9a05961dd2efbde5bb1fc7fe->leave($__internal_663730aa31ff0193f9bd8d3959637e6babecd4cb9a05961dd2efbde5bb1fc7fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8b29b1546bcee4914cc5ad0b67c7192661a0912216cda94ac1162fb0dbdea97 = $this->env->getExtension("native_profiler");
        $__internal_c8b29b1546bcee4914cc5ad0b67c7192661a0912216cda94ac1162fb0dbdea97->enter($__internal_c8b29b1546bcee4914cc5ad0b67c7192661a0912216cda94ac1162fb0dbdea97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8b29b1546bcee4914cc5ad0b67c7192661a0912216cda94ac1162fb0dbdea97->leave($__internal_c8b29b1546bcee4914cc5ad0b67c7192661a0912216cda94ac1162fb0dbdea97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eabefedb4988c8f96ec0275ed92a8e9e592932fd2ff52f0f1d45639c1c66112b = $this->env->getExtension("native_profiler");
        $__internal_eabefedb4988c8f96ec0275ed92a8e9e592932fd2ff52f0f1d45639c1c66112b->enter($__internal_eabefedb4988c8f96ec0275ed92a8e9e592932fd2ff52f0f1d45639c1c66112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eabefedb4988c8f96ec0275ed92a8e9e592932fd2ff52f0f1d45639c1c66112b->leave($__internal_eabefedb4988c8f96ec0275ed92a8e9e592932fd2ff52f0f1d45639c1c66112b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6478ae263d5cd7ac0b9a39a515ba332f98296092f27c89e9614d0851920150fc = $this->env->getExtension("native_profiler");
        $__internal_6478ae263d5cd7ac0b9a39a515ba332f98296092f27c89e9614d0851920150fc->enter($__internal_6478ae263d5cd7ac0b9a39a515ba332f98296092f27c89e9614d0851920150fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6478ae263d5cd7ac0b9a39a515ba332f98296092f27c89e9614d0851920150fc->leave($__internal_6478ae263d5cd7ac0b9a39a515ba332f98296092f27c89e9614d0851920150fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

<?php

/* MopaBootstrapBundle::base_lessjs.html.twig */
class __TwigTemplate_95094c1f347097f04c73c63da7c7f08d80e6693aa0e292df30b3772248376169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MopaBootstrapBundle::base.html.twig");

        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_style($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet/less\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("web/less/frontend.less"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_head_script($context, array $blocks = array())
    {
        // line 9
        echo "<script src=\"http://lesscss.googlecode.com/files/less-1.3.0.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_lessjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 187,  391 => 165,  388 => 163,  373 => 149,  370 => 148,  367 => 147,  358 => 138,  356 => 136,  346 => 132,  343 => 131,  333 => 127,  329 => 135,  326 => 134,  321 => 130,  318 => 127,  315 => 126,  303 => 118,  284 => 112,  281 => 111,  277 => 109,  274 => 108,  260 => 106,  255 => 102,  237 => 44,  216 => 21,  211 => 119,  206 => 110,  200 => 94,  197 => 90,  194 => 88,  186 => 85,  174 => 81,  165 => 78,  153 => 74,  150 => 73,  129 => 65,  126 => 63,  77 => 38,  70 => 36,  53 => 15,  408 => 121,  404 => 103,  401 => 102,  399 => 98,  396 => 185,  390 => 95,  385 => 158,  382 => 91,  376 => 89,  371 => 83,  363 => 78,  353 => 135,  349 => 80,  347 => 77,  344 => 76,  336 => 128,  334 => 75,  331 => 74,  328 => 73,  324 => 131,  317 => 67,  313 => 65,  310 => 123,  307 => 122,  295 => 59,  292 => 58,  289 => 116,  279 => 54,  276 => 53,  263 => 52,  259 => 96,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 25,  231 => 56,  228 => 55,  225 => 53,  222 => 52,  212 => 48,  202 => 51,  188 => 86,  180 => 83,  167 => 32,  161 => 29,  152 => 20,  127 => 14,  104 => 31,  97 => 25,  113 => 43,  81 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 82,  365 => 145,  362 => 110,  360 => 77,  355 => 85,  341 => 75,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 72,  229 => 73,  220 => 70,  214 => 69,  177 => 82,  169 => 60,  140 => 55,  132 => 66,  128 => 49,  107 => 32,  61 => 13,  273 => 96,  269 => 94,  254 => 94,  243 => 96,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 23,  221 => 77,  219 => 22,  217 => 75,  208 => 68,  204 => 97,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  119 => 42,  102 => 52,  71 => 19,  67 => 43,  63 => 26,  59 => 38,  38 => 3,  94 => 28,  89 => 20,  85 => 41,  75 => 17,  68 => 14,  56 => 17,  87 => 25,  21 => 2,  26 => 6,  93 => 44,  88 => 9,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 47,  183 => 40,  171 => 80,  166 => 71,  163 => 30,  158 => 28,  156 => 75,  151 => 63,  142 => 59,  138 => 68,  136 => 56,  121 => 46,  117 => 60,  105 => 55,  91 => 10,  62 => 39,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 46,  69 => 45,  47 => 2,  40 => 8,  37 => 10,  22 => 1,  246 => 97,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 61,  115 => 34,  111 => 33,  108 => 56,  101 => 34,  98 => 33,  96 => 31,  83 => 6,  74 => 125,  66 => 32,  55 => 15,  52 => 5,  50 => 14,  43 => 8,  41 => 4,  35 => 5,  32 => 5,  29 => 4,  209 => 111,  203 => 96,  199 => 50,  193 => 46,  189 => 71,  187 => 84,  182 => 66,  176 => 35,  173 => 34,  168 => 79,  164 => 59,  162 => 77,  154 => 24,  149 => 51,  147 => 71,  144 => 49,  141 => 69,  133 => 55,  130 => 41,  125 => 13,  122 => 12,  116 => 41,  112 => 57,  109 => 34,  106 => 36,  103 => 32,  99 => 48,  95 => 12,  92 => 5,  86 => 44,  82 => 22,  80 => 5,  73 => 37,  64 => 42,  60 => 21,  57 => 9,  54 => 8,  51 => 14,  48 => 13,  45 => 1,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
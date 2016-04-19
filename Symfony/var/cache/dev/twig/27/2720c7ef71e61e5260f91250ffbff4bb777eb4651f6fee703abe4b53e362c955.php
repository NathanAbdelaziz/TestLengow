<?php

/* APYDataGridBundle::blocks.html.twig */
class __TwigTemplate_32ef15f37ecb285c7a5ed55e425f91074aaabad5c6fde38b54ea1bd8b1291c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'grid' => array($this, 'block_grid'),
            'grid_no_data' => array($this, 'block_grid_no_data'),
            'grid_no_result' => array($this, 'block_grid_no_result'),
            'grid_titles' => array($this, 'block_grid_titles'),
            'grid_filters' => array($this, 'block_grid_filters'),
            'grid_search' => array($this, 'block_grid_search'),
            'grid_rows' => array($this, 'block_grid_rows'),
            'grid_pager' => array($this, 'block_grid_pager'),
            'grid_pager_totalcount' => array($this, 'block_grid_pager_totalcount'),
            'grid_pager_selectpage' => array($this, 'block_grid_pager_selectpage'),
            'grid_pager_results_perpage' => array($this, 'block_grid_pager_results_perpage'),
            'grid_actions' => array($this, 'block_grid_actions'),
            'grid_exports' => array($this, 'block_grid_exports'),
            'grid_tweaks' => array($this, 'block_grid_tweaks'),
            'grid_column_actions_cell' => array($this, 'block_grid_column_actions_cell'),
            'grid_column_massaction_cell' => array($this, 'block_grid_column_massaction_cell'),
            'grid_column_boolean_cell' => array($this, 'block_grid_column_boolean_cell'),
            'grid_column_type_boolean_cell' => array($this, 'block_grid_column_type_boolean_cell'),
            'grid_column_rank_cell' => array($this, 'block_grid_column_rank_cell'),
            'grid_column_type_rank_cell' => array($this, 'block_grid_column_type_rank_cell'),
            'grid_column_array_cell' => array($this, 'block_grid_column_array_cell'),
            'grid_column_type_array_cell' => array($this, 'block_grid_column_type_array_cell'),
            'grid_column_join_cell' => array($this, 'block_grid_column_join_cell'),
            'grid_column_type_join_cell' => array($this, 'block_grid_column_type_join_cell'),
            'grid_column_cell' => array($this, 'block_grid_column_cell'),
            'grid_column_operator' => array($this, 'block_grid_column_operator'),
            'grid_column_filter_type_input' => array($this, 'block_grid_column_filter_type_input'),
            'grid_column_filter_type_select' => array($this, 'block_grid_column_filter_type_select'),
            'grid_column_filter_type_massaction' => array($this, 'block_grid_column_filter_type_massaction'),
            'grid_column_filter_type_actions' => array($this, 'block_grid_column_filter_type_actions'),
            'grid_scripts' => array($this, 'block_grid_scripts'),
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_reset' => array($this, 'block_grid_scripts_reset'),
            'grid_scripts_previous_page' => array($this, 'block_grid_scripts_previous_page'),
            'grid_scripts_next_page' => array($this, 'block_grid_scripts_next_page'),
            'grid_scripts_enter_page' => array($this, 'block_grid_scripts_enter_page'),
            'grid_scripts_results_per_page' => array($this, 'block_grid_scripts_results_per_page'),
            'grid_scripts_mark_visible' => array($this, 'block_grid_scripts_mark_visible'),
            'grid_scripts_mark_all' => array($this, 'block_grid_scripts_mark_all'),
            'grid_scripts_switch_operator' => array($this, 'block_grid_scripts_switch_operator'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8898c329fd074540cb5852ff0443058b8792535542a66bc2404249a2090d393e = $this->env->getExtension("native_profiler");
        $__internal_8898c329fd074540cb5852ff0443058b8792535542a66bc2404249a2090d393e->enter($__internal_8898c329fd074540cb5852ff0443058b8792535542a66bc2404249a2090d393e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APYDataGridBundle::blocks.html.twig"));

        // line 2
        $this->displayBlock('grid', $context, $blocks);
        // line 43
        $this->displayBlock('grid_no_data', $context, $blocks);
        // line 45
        $this->displayBlock('grid_no_result', $context, $blocks);
        // line 59
        $this->displayBlock('grid_titles', $context, $blocks);
        // line 94
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 104
        $this->displayBlock('grid_search', $context, $blocks);
        // line 124
        $this->displayBlock('grid_rows', $context, $blocks);
        // line 144
        $this->displayBlock('grid_pager', $context, $blocks);
        // line 156
        $this->displayBlock('grid_pager_totalcount', $context, $blocks);
        // line 160
        $this->displayBlock('grid_pager_selectpage', $context, $blocks);
        // line 169
        $this->displayBlock('grid_pager_results_perpage', $context, $blocks);
        // line 178
        $this->displayBlock('grid_actions', $context, $blocks);
        // line 203
        $this->displayBlock('grid_exports', $context, $blocks);
        // line 218
        $this->displayBlock('grid_tweaks', $context, $blocks);
        // line 233
        $this->displayBlock('grid_column_actions_cell', $context, $blocks);
        // line 242
        $this->displayBlock('grid_column_massaction_cell', $context, $blocks);
        // line 246
        $this->displayBlock('grid_column_boolean_cell', $context, $blocks);
        // line 249
        $this->displayBlock('grid_column_type_boolean_cell', $context, $blocks);
        // line 253
        $this->displayBlock('grid_column_rank_cell', $context, $blocks);
        // line 256
        $this->displayBlock('grid_column_type_rank_cell', $context, $blocks);
        // line 260
        $this->displayBlock('grid_column_array_cell', $context, $blocks);
        // line 269
        $this->displayBlock('grid_column_type_array_cell', $context, $blocks);
        // line 273
        $this->displayBlock('grid_column_join_cell', $context, $blocks);
        // line 280
        $this->displayBlock('grid_column_type_join_cell', $context, $blocks);
        // line 284
        $this->displayBlock('grid_column_cell', $context, $blocks);
        // line 297
        $this->displayBlock('grid_column_operator', $context, $blocks);
        // line 309
        $this->displayBlock('grid_column_filter_type_input', $context, $blocks);
        // line 326
        $this->displayBlock('grid_column_filter_type_select', $context, $blocks);
        // line 370
        $this->displayBlock('grid_column_filter_type_massaction', $context, $blocks);
        // line 374
        $this->displayBlock('grid_column_filter_type_actions', $context, $blocks);
        // line 377
        echo "


";
        // line 381
        $this->displayBlock('grid_scripts', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('grid_scripts_goto', $context, $blocks);
        // line 405
        echo "
";
        // line 406
        $this->displayBlock('grid_scripts_reset', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('grid_scripts_previous_page', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('grid_scripts_next_page', $context, $blocks);
        // line 432
        echo "
";
        // line 433
        $this->displayBlock('grid_scripts_enter_page', $context, $blocks);
        // line 449
        echo "
";
        // line 450
        $this->displayBlock('grid_scripts_results_per_page', $context, $blocks);
        // line 458
        echo "
";
        // line 459
        $this->displayBlock('grid_scripts_mark_visible', $context, $blocks);
        // line 488
        echo "
";
        // line 489
        $this->displayBlock('grid_scripts_mark_all', $context, $blocks);
        // line 513
        echo "
";
        // line 514
        $this->displayBlock('grid_scripts_switch_operator', $context, $blocks);
        // line 545
        echo "
";
        // line 546
        $this->displayBlock('grid_scripts_submit_form', $context, $blocks);
        // line 562
        echo "
";
        // line 563
        $this->displayBlock('grid_scripts_ajax', $context, $blocks);
        
        $__internal_8898c329fd074540cb5852ff0443058b8792535542a66bc2404249a2090d393e->leave($__internal_8898c329fd074540cb5852ff0443058b8792535542a66bc2404249a2090d393e_prof);

    }

    // line 2
    public function block_grid($context, array $blocks = array())
    {
        $__internal_e753184b99e32044b3d74382184eb391074965ece64ca9bdba421af2300ef5d9 = $this->env->getExtension("native_profiler");
        $__internal_e753184b99e32044b3d74382184eb391074965ece64ca9bdba421af2300ef5d9->enter($__internal_e753184b99e32044b3d74382184eb391074965ece64ca9bdba421af2300ef5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid"));

        // line 3
        echo "<div class=\"grid\">
";
        // line 4
        if (((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()) > 0) || $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFiltered", array())) || ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "noDataMessage", array()) === false))) {
            // line 5
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
        <div class=\"grid_header\">
        ";
            // line 7
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "massActions", array())) > 0)) {
                // line 8
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("actions", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 10
            echo "        </div>
        <div class=\"grid_body\">
        <table>
        ";
            // line 13
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isTitleSectionVisible", array())) {
                // line 14
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("titles", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 16
            echo "        ";
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
                // line 17
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("filters", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 19
            echo "        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("rows", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
        </table>
        </div>
        <div class=\"grid_footer\">
        ";
            // line 23
            if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isPagerSectionVisible", array())) {
                // line 24
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGridPager((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 26
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "exports", array())) > 0)) {
                // line 27
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("exports", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 29
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "tweaks", array())) > 0)) {
                // line 30
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("tweaks", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 32
            echo "        </div>
        ";
            // line 33
            if ((isset($context["withjs"]) ? $context["withjs"] : $this->getContext($context, "withjs"))) {
                // line 34
                echo "            ";
                echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                echo "
        ";
            }
            // line 36
            echo "    </form>
";
        } else {
            // line 38
            echo "    ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("no_data", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
";
        }
        // line 40
        echo "</div>
";
        
        $__internal_e753184b99e32044b3d74382184eb391074965ece64ca9bdba421af2300ef5d9->leave($__internal_e753184b99e32044b3d74382184eb391074965ece64ca9bdba421af2300ef5d9_prof);

    }

    // line 43
    public function block_grid_no_data($context, array $blocks = array())
    {
        $__internal_4012b3f38be781f2a67e27e0b2f462c6a9721a39d2375f35133f74e5c9d1b2fe = $this->env->getExtension("native_profiler");
        $__internal_4012b3f38be781f2a67e27e0b2f462c6a9721a39d2375f35133f74e5c9d1b2fe->enter($__internal_4012b3f38be781f2a67e27e0b2f462c6a9721a39d2375f35133f74e5c9d1b2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_no_data"));

        echo "<p class=\"no_data\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noDataMessage", array()), "No data")) : ("No data")));
        echo "</p>";
        
        $__internal_4012b3f38be781f2a67e27e0b2f462c6a9721a39d2375f35133f74e5c9d1b2fe->leave($__internal_4012b3f38be781f2a67e27e0b2f462c6a9721a39d2375f35133f74e5c9d1b2fe_prof);

    }

    // line 45
    public function block_grid_no_result($context, array $blocks = array())
    {
        $__internal_08afb2ae7559010b1a8e8d28f68d5e546ceca0ef0f3a1bab039d1ff0fb6bc845 = $this->env->getExtension("native_profiler");
        $__internal_08afb2ae7559010b1a8e8d28f68d5e546ceca0ef0f3a1bab039d1ff0fb6bc845->enter($__internal_08afb2ae7559010b1a8e8d28f68d5e546ceca0ef0f3a1bab039d1ff0fb6bc845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_no_result"));

        // line 46
        ob_start();
        // line 47
        $context["nbColumns"] = 0;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 49
            echo "    ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 50
                echo "        ";
                $context["nbColumns"] = ((isset($context["nbColumns"]) ? $context["nbColumns"] : $this->getContext($context, "nbColumns")) + 1);
                // line 51
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<tr class=\"grid-row-cells\">
    <td class=\"last-column last-row\" colspan=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["nbColumns"]) ? $context["nbColumns"] : $this->getContext($context, "nbColumns")), "html", null, true);
        echo "\" style=\"text-align: center;\">";
        echo $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["grid"]) ? $context["grid"] : null), "noResultMessage", array()), "No result")) : ("No result")));
        echo "</td>
</tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_08afb2ae7559010b1a8e8d28f68d5e546ceca0ef0f3a1bab039d1ff0fb6bc845->leave($__internal_08afb2ae7559010b1a8e8d28f68d5e546ceca0ef0f3a1bab039d1ff0fb6bc845_prof);

    }

    // line 59
    public function block_grid_titles($context, array $blocks = array())
    {
        $__internal_5ac5d3a544d50abfccbcd4f5d6d4203ca4195b464425fbd755168a8c4497cc69 = $this->env->getExtension("native_profiler");
        $__internal_5ac5d3a544d50abfccbcd4f5d6d4203ca4195b464425fbd755168a8c4497cc69->enter($__internal_5ac5d3a544d50abfccbcd4f5d6d4203ca4195b464425fbd755168a8c4497cc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_titles"));

        // line 60
        echo "    <tr class=\"grid-row-titles\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 62
            echo "        ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 63
                echo "            <th class=\"";
                if (($this->getAttribute($context["column"], "align", array()) != "left")) {
                    echo "align-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "align", array()), "html", null, true);
                }
                if ($this->getAttribute($context["column"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " last-column";
                }
                echo "\"";
                if (($this->getAttribute($context["column"], "size", array()) >  -1)) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "size", array()), "html", null, true);
                    echo "px;\"";
                }
                echo ">";
                // line 64
                ob_start();
                // line 65
                echo "            ";
                if (($this->getAttribute($context["column"], "type", array()) == "massaction")) {
                    // line 66
                    echo "                <input type=\"checkbox\" class=\"grid-mass-selector\" onclick=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                    echo "_markVisible(this.checked);\"/>
            ";
                } else {
                    // line 67
                    echo " 
                ";
                    // line 68
                    if (($this->getAttribute($context["column"], "usePrefixTitle", array()) == true)) {
                        // line 69
                        echo "                    ";
                        $context["columnTitle"] = (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array())) . "__abbr");
                        // line 70
                        echo "                    ";
                        if (($this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))) == (isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle")))) {
                            // line 71
                            echo "                        ";
                            $context["columnTitle"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array()));
                            // line 72
                            echo "                    ";
                        }
                        // line 73
                        echo "                ";
                    } else {
                        // line 74
                        echo "                    ";
                        $context["columnTitle"] = $this->getAttribute($context["column"], "title", array());
                        // line 75
                        echo "                ";
                    }
                    // line 76
                    echo "                ";
                    if ($this->getAttribute($context["column"], "sortable", array())) {
                        // line 77
                        echo "                    <a class=\"order\" href=\"";
                        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("order", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), $context["column"]);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order by"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                        echo "</a>
                    ";
                        // line 78
                        if (($this->getAttribute($context["column"], "order", array()) == "asc")) {
                            // line 79
                            echo "                        <div class=\"sort_up\"></div>
                    ";
                        } elseif (($this->getAttribute(                        // line 80
$context["column"], "order", array()) == "desc")) {
                            // line 81
                            echo "                        <div class=\"sort_down\"></div>
                    ";
                        }
                        // line 83
                        echo "                ";
                    } else {
                        // line 84
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                        echo "
                ";
                    }
                    // line 86
                    echo "            ";
                }
                // line 87
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 88
                echo "</th>
        ";
            }
            // line 90
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </tr>
";
        
        $__internal_5ac5d3a544d50abfccbcd4f5d6d4203ca4195b464425fbd755168a8c4497cc69->leave($__internal_5ac5d3a544d50abfccbcd4f5d6d4203ca4195b464425fbd755168a8c4497cc69_prof);

    }

    // line 94
    public function block_grid_filters($context, array $blocks = array())
    {
        $__internal_9589099b81bcfad644023f524772b7209a8e3eea4e6235f637970f304a0c3978 = $this->env->getExtension("native_profiler");
        $__internal_9589099b81bcfad644023f524772b7209a8e3eea4e6235f637970f304a0c3978->enter($__internal_9589099b81bcfad644023f524772b7209a8e3eea4e6235f637970f304a0c3978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_filters"));

        // line 95
        echo "    <tr class=\"grid-row-filters\">
    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 97
            echo "        ";
            if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                // line 98
                echo "        <th class=\"";
                if ($this->getAttribute($context["column"], "class", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                }
                if ($this->getAttribute($context["loop"], "last", array())) {
                    echo " last-column";
                }
                echo "\"";
                if (($this->getAttribute($context["column"], "size", array()) >  -1)) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "size", array()), "html", null, true);
                    echo "px;\"";
                }
                echo ">";
                if ($this->getAttribute($context["column"], "filterable", array())) {
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter($context["column"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                }
                echo "</th>
        ";
            }
            // line 100
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    </tr>
";
        
        $__internal_9589099b81bcfad644023f524772b7209a8e3eea4e6235f637970f304a0c3978->leave($__internal_9589099b81bcfad644023f524772b7209a8e3eea4e6235f637970f304a0c3978_prof);

    }

    // line 104
    public function block_grid_search($context, array $blocks = array())
    {
        $__internal_b68605d8980897e069382695371c0733401deeebe6f5685186ba7811f42b3208 = $this->env->getExtension("native_profiler");
        $__internal_b68605d8980897e069382695371c0733401deeebe6f5685186ba7811f42b3208->enter($__internal_b68605d8980897e069382695371c0733401deeebe6f5685186ba7811f42b3208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_search"));

        // line 105
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
            // line 106
            echo "    <div class=\"grid-search\">
        <form id=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_search\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
        ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 109
                echo "            ";
                if (($this->getAttribute($context["column"], "isFilterable", array()) && !twig_in_filter($this->getAttribute($context["column"], "type", array()), array(0 => "actions", 1 => "massaction")))) {
                    // line 110
                    echo "                ";
                    if (($this->getAttribute($context["column"], "usePrefixTitle", array()) == true)) {
                        // line 111
                        echo "                    ";
                        $context["columnTitle"] = ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "prefixTitle", array()) . $this->getAttribute($context["column"], "title", array()));
                        // line 112
                        echo "                ";
                    } else {
                        // line 113
                        echo "                    ";
                        $context["columnTitle"] = $this->getAttribute($context["column"], "title", array());
                        // line 114
                        echo "                ";
                    }
                    // line 115
                    echo "                <div class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                    echo "\"><label>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["columnTitle"]) ? $context["columnTitle"] : $this->getContext($context, "columnTitle"))), "html", null, true);
                    echo "</label>";
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridFilter($context["column"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), false);
                    echo "</div>
            ";
                }
                // line 117
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "            <div class=\"grid-search-action\"><input type=\"submit\" class=\"grid-search-submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
            echo "\"/><input type=\"button\" class=\"grid-search-reset\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
            echo "\" onclick=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_reset();\"/></div>
        </form>
    </div>
";
        }
        
        $__internal_b68605d8980897e069382695371c0733401deeebe6f5685186ba7811f42b3208->leave($__internal_b68605d8980897e069382695371c0733401deeebe6f5685186ba7811f42b3208_prof);

    }

    // line 124
    public function block_grid_rows($context, array $blocks = array())
    {
        $__internal_090f28defac5069e605773e3261f1a61678879d58c4e1ca52f048b0685d915d1 = $this->env->getExtension("native_profiler");
        $__internal_090f28defac5069e605773e3261f1a61678879d58c4e1ca52f048b0685d915d1->enter($__internal_090f28defac5069e605773e3261f1a61678879d58c4e1ca52f048b0685d915d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_rows"));

        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "rows", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 126
            echo "    ";
            $context["last_row"] = $this->getAttribute($context["loop"], "last", array());
            // line 127
            echo "    ";
            ob_start();
            // line 128
            echo "        ";
            ob_start();
            // line 129
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "columns", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 130
                echo "                ";
                if ($this->getAttribute($context["column"], "visible", array(0 => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isReadyForExport", array())), "method")) {
                    // line 131
                    echo "                    <td class=\"grid-column-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "renderBlockId", array()), "html", null, true);
                    if ($this->getAttribute($context["column"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "class", array()), "html", null, true);
                    }
                    if (($this->getAttribute($context["column"], "align", array()) != "left")) {
                        echo " align-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "align", array()), "html", null, true);
                    }
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        echo " last-column";
                    }
                    if ((isset($context["last_row"]) ? $context["last_row"] : $this->getContext($context, "last_row"))) {
                        echo " last-row";
                    }
                    echo "\">";
                    echo $this->env->getExtension('datagrid_twig_extension')->getGridCell($context["column"], $context["row"], (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
                    echo "</td>
                ";
                }
                // line 133
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        ";
            $context["gridColumns"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 135
            echo "        <tr";
            if (($this->getAttribute($context["row"], "color", array()) != "")) {
                echo " style=\"background-color:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "color", array()), "html", null, true);
                echo ";\"";
            }
            echo " class=\"grid-row-cells ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            if (($this->getAttribute($context["row"], "class", array()) != "")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "class", array()), "html", null, true);
            }
            echo "\">
        ";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["gridColumns"]) ? $context["gridColumns"] : $this->getContext($context, "gridColumns")), "html", null, true);
            echo "
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 138
            echo "    </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 140
            echo "        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("no_result", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_090f28defac5069e605773e3261f1a61678879d58c4e1ca52f048b0685d915d1->leave($__internal_090f28defac5069e605773e3261f1a61678879d58c4e1ca52f048b0685d915d1_prof);

    }

    // line 144
    public function block_grid_pager($context, array $blocks = array())
    {
        $__internal_0d2abaa136fec9ff5315064740d3b5bac4099d5d267fcc4128630d4a07f495cc = $this->env->getExtension("native_profiler");
        $__internal_0d2abaa136fec9ff5315064740d3b5bac4099d5d267fcc4128630d4a07f495cc->enter($__internal_0d2abaa136fec9ff5315064740d3b5bac4099d5d267fcc4128630d4a07f495cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager"));

        // line 145
        echo "    ";
        if ((isset($context["pagerfanta"]) ? $context["pagerfanta"] : $this->getContext($context, "pagerfanta"))) {
            // line 146
            echo "        ";
            echo $this->env->getExtension('datagrid_twig_extension')->getPagerfanta((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
    ";
        } else {
            // line 148
            echo "        <div class=\"pager\" style=\"float:left\">
            ";
            // line 149
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_totalcount", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
            ";
            // line 150
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_selectpage", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
            ";
            // line 151
            echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("pager_results_perpage", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
            echo "
        </div>
    ";
        }
        
        $__internal_0d2abaa136fec9ff5315064740d3b5bac4099d5d267fcc4128630d4a07f495cc->leave($__internal_0d2abaa136fec9ff5315064740d3b5bac4099d5d267fcc4128630d4a07f495cc_prof);

    }

    // line 156
    public function block_grid_pager_totalcount($context, array $blocks = array())
    {
        $__internal_9053d9c79e81e6b0261a6d89880158343e280a04228d7344eda704b745aedb42 = $this->env->getExtension("native_profiler");
        $__internal_9053d9c79e81e6b0261a6d89880158343e280a04228d7344eda704b745aedb42->enter($__internal_9053d9c79e81e6b0261a6d89880158343e280a04228d7344eda704b745aedb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_totalcount"));

        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("%count% Results, ", $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()), array("%count%" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()))), "html", null, true);
        echo "
";
        
        $__internal_9053d9c79e81e6b0261a6d89880158343e280a04228d7344eda704b745aedb42->leave($__internal_9053d9c79e81e6b0261a6d89880158343e280a04228d7344eda704b745aedb42_prof);

    }

    // line 160
    public function block_grid_pager_selectpage($context, array $blocks = array())
    {
        $__internal_04671985cafbda72dbc1c2d3ea5f9a561b542047b7a7f010afc067004f8597e7 = $this->env->getExtension("native_profiler");
        $__internal_04671985cafbda72dbc1c2d3ea5f9a561b542047b7a7f010afc067004f8597e7->enter($__internal_04671985cafbda72dbc1c2d3ea5f9a561b542047b7a7f010afc067004f8597e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_selectpage"));

        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Page"), "html", null, true);
        echo "
";
        // line 162
        ob_start();
        // line 163
        echo "<input type=\"button\" class=\"prev\" ";
        if (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) <= 0)) {
            echo "disabled=\"disabled\"";
        }
        echo " value=\"<\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_previousPage();\"/>
<input type=\"text\" class=\"current\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) + 1), "html", null, true);
        echo "\" size=\"2\" onkeypress=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_enterPage(event, parseInt(this.value)-1);\"/>
<input type=\"button\" value=\">\" class=\"next\" ";
        // line 165
        if (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) >= ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pageCount", array()) - 1))) {
            echo "disabled=\"disabled\"";
        }
        echo " onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_nextPage();\"/> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of %count%", array("%count%" => $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "pageCount", array()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04671985cafbda72dbc1c2d3ea5f9a561b542047b7a7f010afc067004f8597e7->leave($__internal_04671985cafbda72dbc1c2d3ea5f9a561b542047b7a7f010afc067004f8597e7_prof);

    }

    // line 169
    public function block_grid_pager_results_perpage($context, array $blocks = array())
    {
        $__internal_697795ae8216b69ce6cef3f4236a1c40cbb4768b3296197c13e8017282dca960 = $this->env->getExtension("native_profiler");
        $__internal_697795ae8216b69ce6cef3f4236a1c40cbb4768b3296197c13e8017282dca960->enter($__internal_697795ae8216b69ce6cef3f4236a1c40cbb4768b3296197c13e8017282dca960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_results_perpage"));

        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(", Display"), "html", null, true);
        echo "
<select onchange=\"return ";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_resultsPerPage(this.value);\">
";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "limits", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 173
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "limit", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "</select> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Items per page"), "html", null, true);
        echo "
";
        
        $__internal_697795ae8216b69ce6cef3f4236a1c40cbb4768b3296197c13e8017282dca960->leave($__internal_697795ae8216b69ce6cef3f4236a1c40cbb4768b3296197c13e8017282dca960_prof);

    }

    // line 178
    public function block_grid_actions($context, array $blocks = array())
    {
        $__internal_e53c42e37c8eb8edef4112ce2227bba3fb89edc16d3f1a4da9e526dd35f0c105 = $this->env->getExtension("native_profiler");
        $__internal_e53c42e37c8eb8edef4112ce2227bba3fb89edc16d3f1a4da9e526dd35f0c105->enter($__internal_e53c42e37c8eb8edef4112ce2227bba3fb89edc16d3f1a4da9e526dd35f0c105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_actions"));

        // line 179
        echo "<div class=\"mass-actions\">
    <span class=\"grid_massactions_helper\">
        <a href=\"#\" onclick=\"return ";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markVisible(true);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markVisible(false);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deselect visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markAll(true);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select all"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markAll(false);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deselect all"), "html", null, true);
        echo "</a>
        <span class=\"mass-actions-selected\" id=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_selected\"></span>
    </span>
    ";
        // line 187
        ob_start();
        // line 188
        echo "    <div style=\"float:right;\" class=\"grid_massactions\">
        ";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Action"), "html", null, true);
        echo "
        <input type=\"hidden\" id=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED"), "html", null, true);
        echo "]\" value=\"0\"/>
        <select name=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "massActions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["massAction"]) {
            // line 194
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["massAction"], "title", array())), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['massAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "        </select>
        <input type=\"submit\"  value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submit Action"), "html", null, true);
        echo "\"/>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 200
        echo "</div>
";
        
        $__internal_e53c42e37c8eb8edef4112ce2227bba3fb89edc16d3f1a4da9e526dd35f0c105->leave($__internal_e53c42e37c8eb8edef4112ce2227bba3fb89edc16d3f1a4da9e526dd35f0c105_prof);

    }

    // line 203
    public function block_grid_exports($context, array $blocks = array())
    {
        $__internal_8c57aab8d482dda596898ad7cc40b240a817d8d1697958e0e8cb367971f57dfd = $this->env->getExtension("native_profiler");
        $__internal_8c57aab8d482dda596898ad7cc40b240a817d8d1697958e0e8cb367971f57dfd->enter($__internal_8c57aab8d482dda596898ad7cc40b240a817d8d1697958e0e8cb367971f57dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_exports"));

        // line 204
        echo "<div class=\"exports\" style=\"float:right\">
    ";
        // line 205
        ob_start();
        // line 206
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "
            <select name=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "exports", array()));
        foreach ($context['_seq'] as $context["key"] => $context["export"]) {
            // line 210
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["export"], "title", array())), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['export'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "        </select>
        <input type=\"submit\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Export"), "html", null, true);
        echo "\"/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 215
        echo "</div>
";
        
        $__internal_8c57aab8d482dda596898ad7cc40b240a817d8d1697958e0e8cb367971f57dfd->leave($__internal_8c57aab8d482dda596898ad7cc40b240a817d8d1697958e0e8cb367971f57dfd_prof);

    }

    // line 218
    public function block_grid_tweaks($context, array $blocks = array())
    {
        $__internal_5d44e83a630c97542592a7bfaee71fdb134b011e966c4bdeaba4e860e53bdc2f = $this->env->getExtension("native_profiler");
        $__internal_5d44e83a630c97542592a7bfaee71fdb134b011e966c4bdeaba4e860e53bdc2f->enter($__internal_5d44e83a630c97542592a7bfaee71fdb134b011e966c4bdeaba4e860e53bdc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_tweaks"));

        // line 219
        echo "<div class=\"tweaks\" style=\"float:right\">
    ";
        // line 220
        ob_start();
        // line 221
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tweaks"), "html", null, true);
        echo "
            <select name=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_TWEAK"), "html", null, true);
        echo "]\">
            <option value=\"\"></option>
            ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "tweaks", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tweak"]) {
            // line 225
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["tweak"], "title", array())), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tweak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "        </select>
        <input type=\"submit\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tweak"), "html", null, true);
        echo "\"/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 230
        echo "</div>
";
        
        $__internal_5d44e83a630c97542592a7bfaee71fdb134b011e966c4bdeaba4e860e53bdc2f->leave($__internal_5d44e83a630c97542592a7bfaee71fdb134b011e966c4bdeaba4e860e53bdc2f_prof);

    }

    // line 233
    public function block_grid_column_actions_cell($context, array $blocks = array())
    {
        $__internal_5dbbb408c00169fb6b889d8606a48ca59628c6504c7babf753f6169db77365aa = $this->env->getExtension("native_profiler");
        $__internal_5dbbb408c00169fb6b889d8606a48ca59628c6504c7babf753f6169db77365aa->enter($__internal_5dbbb408c00169fb6b889d8606a48ca59628c6504c7babf753f6169db77365aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_actions_cell"));

        // line 234
        echo "    ";
        $context["actions"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "getActionsToRender", array(0 => (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row"))), "method");
        // line 235
        echo "    <ul class=\"grid-row-actions\">
    ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 237
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($context["action"], "route", array()), $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "routeParameters", array(0 => (isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 1 => $context["action"]), "method"), false), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "target", array()), "html", null, true);
            echo "\"";
            if ($this->getAttribute($context["action"], "confirm", array())) {
                echo " onclick=\"return confirm('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "confirmMessage", array()), "html", null, true);
                echo "')\"";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "attributes", array()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["action"], "title", array())), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "    </ul>
";
        
        $__internal_5dbbb408c00169fb6b889d8606a48ca59628c6504c7babf753f6169db77365aa->leave($__internal_5dbbb408c00169fb6b889d8606a48ca59628c6504c7babf753f6169db77365aa_prof);

    }

    // line 242
    public function block_grid_column_massaction_cell($context, array $blocks = array())
    {
        $__internal_31354df2df687aea5068c53e080e1a34ec7e6897ca8500aed1438c3dcf777b03 = $this->env->getExtension("native_profiler");
        $__internal_31354df2df687aea5068c53e080e1a34ec7e6897ca8500aed1438c3dcf777b03->enter($__internal_31354df2df687aea5068c53e080e1a34ec7e6897ca8500aed1438c3dcf777b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_massaction_cell"));

        // line 243
        echo "    <input type=\"checkbox\" class=\"action\" value=\"1\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "primaryFieldValue", array()), "html", null, true);
        echo "]\"/>
";
        
        $__internal_31354df2df687aea5068c53e080e1a34ec7e6897ca8500aed1438c3dcf777b03->leave($__internal_31354df2df687aea5068c53e080e1a34ec7e6897ca8500aed1438c3dcf777b03_prof);

    }

    // line 246
    public function block_grid_column_boolean_cell($context, array $blocks = array())
    {
        $__internal_d7f2a9a35f423fb0f7392041959c521bbf616f2d68d2f1b57ba947c3740e06d5 = $this->env->getExtension("native_profiler");
        $__internal_d7f2a9a35f423fb0f7392041959c521bbf616f2d68d2f1b57ba947c3740e06d5->enter($__internal_d7f2a9a35f423fb0f7392041959c521bbf616f2d68d2f1b57ba947c3740e06d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_boolean_cell"));

        // line 247
        echo "    <span class=\"grid_boolean_";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        $this->displayBlock("grid_column_cell", $context, $blocks);
        echo "</span>
";
        
        $__internal_d7f2a9a35f423fb0f7392041959c521bbf616f2d68d2f1b57ba947c3740e06d5->leave($__internal_d7f2a9a35f423fb0f7392041959c521bbf616f2d68d2f1b57ba947c3740e06d5_prof);

    }

    // line 249
    public function block_grid_column_type_boolean_cell($context, array $blocks = array())
    {
        $__internal_7105ca9e16cbd634f5d18c20435b3e9b9b27778d2c2924fd5fbb60098f8da78f = $this->env->getExtension("native_profiler");
        $__internal_7105ca9e16cbd634f5d18c20435b3e9b9b27778d2c2924fd5fbb60098f8da78f->enter($__internal_7105ca9e16cbd634f5d18c20435b3e9b9b27778d2c2924fd5fbb60098f8da78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_boolean_cell"));

        // line 250
        echo "\t";
        $this->displayBlock("grid_column_boolean_cell", $context, $blocks);
        echo "
";
        
        $__internal_7105ca9e16cbd634f5d18c20435b3e9b9b27778d2c2924fd5fbb60098f8da78f->leave($__internal_7105ca9e16cbd634f5d18c20435b3e9b9b27778d2c2924fd5fbb60098f8da78f_prof);

    }

    // line 253
    public function block_grid_column_rank_cell($context, array $blocks = array())
    {
        $__internal_9968881ebe12934796c96a4e50aff13b0968d2022c864d3cc5782cf33050237c = $this->env->getExtension("native_profiler");
        $__internal_9968881ebe12934796c96a4e50aff13b0968d2022c864d3cc5782cf33050237c->enter($__internal_9968881ebe12934796c96a4e50aff13b0968d2022c864d3cc5782cf33050237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_rank_cell"));

        // line 254
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) * $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "limit", array())) + (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "
";
        
        $__internal_9968881ebe12934796c96a4e50aff13b0968d2022c864d3cc5782cf33050237c->leave($__internal_9968881ebe12934796c96a4e50aff13b0968d2022c864d3cc5782cf33050237c_prof);

    }

    // line 256
    public function block_grid_column_type_rank_cell($context, array $blocks = array())
    {
        $__internal_efd6c4628a236f42c07ddb45856307131e26a99e7fce91760003ea22b89e882f = $this->env->getExtension("native_profiler");
        $__internal_efd6c4628a236f42c07ddb45856307131e26a99e7fce91760003ea22b89e882f->enter($__internal_efd6c4628a236f42c07ddb45856307131e26a99e7fce91760003ea22b89e882f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_rank_cell"));

        // line 257
        echo "\t";
        $this->displayBlock("grid_column_rank_cell", $context, $blocks);
        echo "
";
        
        $__internal_efd6c4628a236f42c07ddb45856307131e26a99e7fce91760003ea22b89e882f->leave($__internal_efd6c4628a236f42c07ddb45856307131e26a99e7fce91760003ea22b89e882f_prof);

    }

    // line 260
    public function block_grid_column_array_cell($context, array $blocks = array())
    {
        $__internal_e74e7aa91c8e0659ffee54d987b5280d44608c43879f0f179ff0b5ab947538ca = $this->env->getExtension("native_profiler");
        $__internal_e74e7aa91c8e0659ffee54d987b5280d44608c43879f0f179ff0b5ab947538ca->enter($__internal_e74e7aa91c8e0659ffee54d987b5280d44608c43879f0f179ff0b5ab947538ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_array_cell"));

        // line 261
        $context["sourceValues"] = $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "field", array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array())), "method");
        // line 262
        $context["values"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 264
            $context["value"] = $context["index"];
            // line 265
            echo "    ";
            $context["sourceValue"] = $this->getAttribute((isset($context["sourceValues"]) ? $context["sourceValues"] : $this->getContext($context, "sourceValues")), $context["key"], array(), "array");
            // line 266
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "separator", array());
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e74e7aa91c8e0659ffee54d987b5280d44608c43879f0f179ff0b5ab947538ca->leave($__internal_e74e7aa91c8e0659ffee54d987b5280d44608c43879f0f179ff0b5ab947538ca_prof);

    }

    // line 269
    public function block_grid_column_type_array_cell($context, array $blocks = array())
    {
        $__internal_a04c806caf9d2f161ac890bf8d35f659f0494939787d9a761d7727c2991dc3cb = $this->env->getExtension("native_profiler");
        $__internal_a04c806caf9d2f161ac890bf8d35f659f0494939787d9a761d7727c2991dc3cb->enter($__internal_a04c806caf9d2f161ac890bf8d35f659f0494939787d9a761d7727c2991dc3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_array_cell"));

        // line 270
        echo "\t";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
";
        
        $__internal_a04c806caf9d2f161ac890bf8d35f659f0494939787d9a761d7727c2991dc3cb->leave($__internal_a04c806caf9d2f161ac890bf8d35f659f0494939787d9a761d7727c2991dc3cb_prof);

    }

    // line 273
    public function block_grid_column_join_cell($context, array $blocks = array())
    {
        $__internal_3d19be5016e81ea6d992b0ac118209695be378a945aa664d444123b1a036d71b = $this->env->getExtension("native_profiler");
        $__internal_3d19be5016e81ea6d992b0ac118209695be378a945aa664d444123b1a036d71b->enter($__internal_3d19be5016e81ea6d992b0ac118209695be378a945aa664d444123b1a036d71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_join_cell"));

        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "joinColumns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 275
            $context["value"] = $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "field", array(0 => $context["index"]), "method");
            // line 276
            echo "    ";
            $context["sourceValue"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            // line 277
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "separator", array());
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3d19be5016e81ea6d992b0ac118209695be378a945aa664d444123b1a036d71b->leave($__internal_3d19be5016e81ea6d992b0ac118209695be378a945aa664d444123b1a036d71b_prof);

    }

    // line 280
    public function block_grid_column_type_join_cell($context, array $blocks = array())
    {
        $__internal_30d561857566752c5c8fd5159cd2720f95675c0e379b050ab81f62b3b6183934 = $this->env->getExtension("native_profiler");
        $__internal_30d561857566752c5c8fd5159cd2720f95675c0e379b050ab81f62b3b6183934->enter($__internal_30d561857566752c5c8fd5159cd2720f95675c0e379b050ab81f62b3b6183934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_join_cell"));

        // line 281
        echo "\t";
        $this->displayBlock("grid_column_join_cell", $context, $blocks);
        echo "
";
        
        $__internal_30d561857566752c5c8fd5159cd2720f95675c0e379b050ab81f62b3b6183934->leave($__internal_30d561857566752c5c8fd5159cd2720f95675c0e379b050ab81f62b3b6183934_prof);

    }

    // line 284
    public function block_grid_column_cell($context, array $blocks = array())
    {
        $__internal_a3b9316717c4532a13eeb4b589fb7be5af0d09008ae7e70f786d083ece12c3bb = $this->env->getExtension("native_profiler");
        $__internal_a3b9316717c4532a13eeb4b589fb7be5af0d09008ae7e70f786d083ece12c3bb->enter($__internal_a3b9316717c4532a13eeb4b589fb7be5af0d09008ae7e70f786d083ece12c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_cell"));

        // line 285
        ob_start();
        // line 286
        if (($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "filterable", array()) && $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "searchOnClick", array()))) {
            // line 287
            echo "    ";
            $context["sourceValue"] = ((array_key_exists("sourceValue", $context)) ? ((isset($context["sourceValue"]) ? $context["sourceValue"] : $this->getContext($context, "sourceValue"))) : ($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "field", array(0 => $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array())), "method")));
            // line 288
            echo "    <a href=\"?";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][from]=";
            echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["sourceValue"]) ? $context["sourceValue"] : $this->getContext($context, "sourceValue"))), "html", null, true);
            echo "\" class=\"searchOnClick\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } elseif (($this->getAttribute(        // line 289
(isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "safe", array()) === false)) {
            // line 290
            echo "    ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
";
        } else {
            // line 292
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "safe", array()));
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a3b9316717c4532a13eeb4b589fb7be5af0d09008ae7e70f786d083ece12c3bb->leave($__internal_a3b9316717c4532a13eeb4b589fb7be5af0d09008ae7e70f786d083ece12c3bb_prof);

    }

    // line 297
    public function block_grid_column_operator($context, array $blocks = array())
    {
        $__internal_771648d6df766d24e5007740df8e1e1fb507c944c76bcb457aaf660da5f20fc5 = $this->env->getExtension("native_profiler");
        $__internal_771648d6df766d24e5007740df8e1e1fb507c944c76bcb457aaf660da5f20fc5->enter($__internal_771648d6df766d24e5007740df8e1e1fb507c944c76bcb457aaf660da5f20fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_operator"));

        // line 298
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "operatorsVisible", array())) {
            // line 299
            echo "<span class=\"grid-filter-operator\">
    <select name=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][operator]\" onchange=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_switchOperator(this, '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__'";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === false)) {
                echo ", false";
            }
            echo ");\">
    ";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "operators", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
                // line 302
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["operator"], "html", null, true);
                echo "\"";
                if (((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == $context["operator"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["operator"]), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "    </select>
</span>
";
        }
        
        $__internal_771648d6df766d24e5007740df8e1e1fb507c944c76bcb457aaf660da5f20fc5->leave($__internal_771648d6df766d24e5007740df8e1e1fb507c944c76bcb457aaf660da5f20fc5_prof);

    }

    // line 309
    public function block_grid_column_filter_type_input($context, array $blocks = array())
    {
        $__internal_51a75e544f0989fb79422ec2d23bc384a092889c6b07152ca4f5436f2024364d = $this->env->getExtension("native_profiler");
        $__internal_51a75e544f0989fb79422ec2d23bc384a092889c6b07152ca4f5436f2024364d->enter($__internal_51a75e544f0989fb79422ec2d23bc384a092889c6b07152ca4f5436f2024364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_input"));

        // line 310
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 311
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 312
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 313
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 314
        $context["op"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "operator", array())) : ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultOperator", array())));
        // line 315
        $context["from"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "from", array())) : (null));
        // line 316
        $context["to"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "to", array())) : (null));
        // line 317
        echo "<span class=\"grid-filter-input\">
    ";
        // line 318
        echo $this->env->getExtension('datagrid_twig_extension')->getGridColumnOperator((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), (isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), (isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")));
        echo "
    <span class=\"grid-filter-input-query\">
        <input type=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "html", null, true);
        echo "\" class=\"grid-filter-input-query-from\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "][from]\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "__query__from\" ";
        if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator"))))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
        echo " />
        <input type=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "html", null, true);
        echo "\" class=\"grid-filter-input-query-to\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "][to]\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
        echo "__query__to\" ";
        if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator"))))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
        echo " />
    </span>
</span>
";
        
        $__internal_51a75e544f0989fb79422ec2d23bc384a092889c6b07152ca4f5436f2024364d->leave($__internal_51a75e544f0989fb79422ec2d23bc384a092889c6b07152ca4f5436f2024364d_prof);

    }

    // line 326
    public function block_grid_column_filter_type_select($context, array $blocks = array())
    {
        $__internal_587aa1889d11cde6282b2d4e24f87791c40675ae490a4a2874a0b6d6ffb0f869 = $this->env->getExtension("native_profiler");
        $__internal_587aa1889d11cde6282b2d4e24f87791c40675ae490a4a2874a0b6d6ffb0f869->enter($__internal_587aa1889d11cde6282b2d4e24f87791c40675ae490a4a2874a0b6d6ffb0f869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_select"));

        // line 327
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 328
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 329
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 330
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 331
        $context["op"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "operator", array())) : ($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "defaultOperator", array())));
        // line 332
        $context["from"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "from", array())) : (null));
        // line 333
        $context["to"] = (($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "data", array()), "to", array())) : (null));
        // line 334
        $context["multiple"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "selectMulti", array());
        // line 335
        $context["expanded"] = $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "selectExpanded", array());
        // line 336
        echo "<span class=\"grid-filter-select\">
    ";
        // line 337
        echo $this->env->getExtension('datagrid_twig_extension')->getGridColumnOperator((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), (isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")), (isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")));
        echo "
    <span class=\"grid-filter-select-query\">
    ";
        // line 339
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 340
            echo "        <span class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__from\" ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator"))))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
        ";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 342
                echo "            <span><input type=\"";
                if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
                echo "][from][]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</label></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "        </span>
        <span class=\"grid-filter-select-query-to\" id=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__to\" ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator"))))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
        ";
            // line 346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 347
                echo "            <span><input type=\"";
                if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
                echo "][to]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (( !(null === (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to"))) && ((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) == $context["key"]))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</label></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "        </span>
        ";
            // line 350
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 351
            echo "    ";
        } else {
            // line 352
            echo "        <select";
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][from][]\" class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__from\" ";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator"))))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
            <option value=\"\">&nbsp;</option>
            ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 355
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (twig_in_filter($context["key"], (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "        </select>
        <select name=\"";
            // line 358
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "][to]\" class=\"grid-filter-select-query-to\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "id", array()), "html", null, true);
            echo "__query__to\" ";
            if (((isset($context["submitOnChange"]) ? $context["submitOnChange"] : $this->getContext($context, "submitOnChange")) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator"))) || ((isset($context["op"]) ? $context["op"] : $this->getContext($context, "op")) == (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator"))))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
            <option value=\"\">&nbsp;</option>
            ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["column"]) ? $context["column"] : $this->getContext($context, "column")), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 361
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (( !(null === (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to"))) && ((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) == $context["key"]))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 363
            echo "        </select>
        ";
            // line 364
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 365
            echo "    ";
        }
        // line 366
        echo "    </span>
</span>
";
        
        $__internal_587aa1889d11cde6282b2d4e24f87791c40675ae490a4a2874a0b6d6ffb0f869->leave($__internal_587aa1889d11cde6282b2d4e24f87791c40675ae490a4a2874a0b6d6ffb0f869_prof);

    }

    // line 370
    public function block_grid_column_filter_type_massaction($context, array $blocks = array())
    {
        $__internal_c9ff506e7a3e37a176b53315e6b0e29a5cbbef592fd1420891e8faf2538f1848 = $this->env->getExtension("native_profiler");
        $__internal_c9ff506e7a3e37a176b53315e6b0e29a5cbbef592fd1420891e8faf2538f1848->enter($__internal_c9ff506e7a3e37a176b53315e6b0e29a5cbbef592fd1420891e8faf2538f1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_massaction"));

        // line 371
        echo "    <input type=\"button\" class=\"grid-search-reset\" value=\"R\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "\" onclick=\"return ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_reset();\"/>
";
        
        $__internal_c9ff506e7a3e37a176b53315e6b0e29a5cbbef592fd1420891e8faf2538f1848->leave($__internal_c9ff506e7a3e37a176b53315e6b0e29a5cbbef592fd1420891e8faf2538f1848_prof);

    }

    // line 374
    public function block_grid_column_filter_type_actions($context, array $blocks = array())
    {
        $__internal_2998f6821645dcfca6090354876f389f684a39d4966d1b6efa1144cea737ede4 = $this->env->getExtension("native_profiler");
        $__internal_2998f6821645dcfca6090354876f389f684a39d4966d1b6efa1144cea737ede4->enter($__internal_2998f6821645dcfca6090354876f389f684a39d4966d1b6efa1144cea737ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_actions"));

        // line 375
        echo "    <a class=\"grid-reset\" href=\"";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("reset", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "</a>
";
        
        $__internal_2998f6821645dcfca6090354876f389f684a39d4966d1b6efa1144cea737ede4->leave($__internal_2998f6821645dcfca6090354876f389f684a39d4966d1b6efa1144cea737ede4_prof);

    }

    // line 381
    public function block_grid_scripts($context, array $blocks = array())
    {
        $__internal_c009d43809d9ae4252e040f7ff6f29eae9d57f3554f4a3728dac7023511d5a71 = $this->env->getExtension("native_profiler");
        $__internal_c009d43809d9ae4252e040f7ff6f29eae9d57f3554f4a3728dac7023511d5a71->enter($__internal_c009d43809d9ae4252e040f7ff6f29eae9d57f3554f4a3728dac7023511d5a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts"));

        // line 382
        echo "<script type=\"text/javascript\">
";
        // line 383
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_goto", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 384
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_reset", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 385
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_previous_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 386
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_next_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 387
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_enter_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 388
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_results_per_page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 389
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_mark_visible", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 390
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_mark_all", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 391
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_switch_operator", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 392
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_submit_form", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
        // line 393
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid_("scripts_ajax", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
</script>
";
        
        $__internal_c009d43809d9ae4252e040f7ff6f29eae9d57f3554f4a3728dac7023511d5a71->leave($__internal_c009d43809d9ae4252e040f7ff6f29eae9d57f3554f4a3728dac7023511d5a71_prof);

    }

    // line 397
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        $__internal_155c4b9f5c20a84c206075f25b9a1eef39aab746c6542993b845ee99bad7e9c1 = $this->env->getExtension("native_profiler");
        $__internal_155c4b9f5c20a84c206075f25b9a1eef39aab746c6542993b845ee99bad7e9c1->enter($__internal_155c4b9f5c20a84c206075f25b9a1eef39aab746c6542993b845ee99bad7e9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_goto"));

        // line 398
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto(url)
{
    window.location.href = url;

    return false;
}
";
        
        $__internal_155c4b9f5c20a84c206075f25b9a1eef39aab746c6542993b845ee99bad7e9c1->leave($__internal_155c4b9f5c20a84c206075f25b9a1eef39aab746c6542993b845ee99bad7e9c1_prof);

    }

    // line 406
    public function block_grid_scripts_reset($context, array $blocks = array())
    {
        $__internal_7ace3c180efd40f2e866fb43675bf420cb6fd77af4f88370d19fff92803e2e99 = $this->env->getExtension("native_profiler");
        $__internal_7ace3c180efd40f2e866fb43675bf420cb6fd77af4f88370d19fff92803e2e99->enter($__internal_7ace3c180efd40f2e866fb43675bf420cb6fd77af4f88370d19fff92803e2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_reset"));

        // line 407
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_reset()
{
    ";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("reset", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "');

    return false;
}
";
        
        $__internal_7ace3c180efd40f2e866fb43675bf420cb6fd77af4f88370d19fff92803e2e99->leave($__internal_7ace3c180efd40f2e866fb43675bf420cb6fd77af4f88370d19fff92803e2e99_prof);

    }

    // line 415
    public function block_grid_scripts_previous_page($context, array $blocks = array())
    {
        $__internal_47406e0266ee58d2529450b54174253d49b437d74af48638bfd35a5bd3b9dc78 = $this->env->getExtension("native_profiler");
        $__internal_47406e0266ee58d2529450b54174253d49b437d74af48638bfd35a5bd3b9dc78->enter($__internal_47406e0266ee58d2529450b54174253d49b437d74af48638bfd35a5bd3b9dc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_previous_page"));

        // line 416
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_previousPage()
{
    ";
        // line 418
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) - 1));
        echo "');

    return false;
}
";
        
        $__internal_47406e0266ee58d2529450b54174253d49b437d74af48638bfd35a5bd3b9dc78->leave($__internal_47406e0266ee58d2529450b54174253d49b437d74af48638bfd35a5bd3b9dc78_prof);

    }

    // line 424
    public function block_grid_scripts_next_page($context, array $blocks = array())
    {
        $__internal_d4054f808b5af7eecd433e6739f8f5a7382a3189cde241d107167ebef543f278 = $this->env->getExtension("native_profiler");
        $__internal_d4054f808b5af7eecd433e6739f8f5a7382a3189cde241d107167ebef543f278->enter($__internal_d4054f808b5af7eecd433e6739f8f5a7382a3189cde241d107167ebef543f278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_next_page"));

        // line 425
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_nextPage()
{
    ";
        // line 427
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "page", array()) + 1));
        echo "');

    return false;
}
";
        
        $__internal_d4054f808b5af7eecd433e6739f8f5a7382a3189cde241d107167ebef543f278->leave($__internal_d4054f808b5af7eecd433e6739f8f5a7382a3189cde241d107167ebef543f278_prof);

    }

    // line 433
    public function block_grid_scripts_enter_page($context, array $blocks = array())
    {
        $__internal_1d267f7252ec0b1f37bdfd2bcec8f97409bb5d1219a23c7ceaebe7f87ece29b2 = $this->env->getExtension("native_profiler");
        $__internal_1d267f7252ec0b1f37bdfd2bcec8f97409bb5d1219a23c7ceaebe7f87ece29b2->enter($__internal_1d267f7252ec0b1f37bdfd2bcec8f97409bb5d1219a23c7ceaebe7f87ece29b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_enter_page"));

        // line 434
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_enterPage(event, page)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (key == 13) {
        ";
        // line 443
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("page", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "' + page);

        return false;
    }
}
";
        
        $__internal_1d267f7252ec0b1f37bdfd2bcec8f97409bb5d1219a23c7ceaebe7f87ece29b2->leave($__internal_1d267f7252ec0b1f37bdfd2bcec8f97409bb5d1219a23c7ceaebe7f87ece29b2_prof);

    }

    // line 450
    public function block_grid_scripts_results_per_page($context, array $blocks = array())
    {
        $__internal_59a343da6ec364bf19fdb48e71d68ea36cac56d513f0a6f29bf692990a78018c = $this->env->getExtension("native_profiler");
        $__internal_59a343da6ec364bf19fdb48e71d68ea36cac56d513f0a6f29bf692990a78018c->enter($__internal_59a343da6ec364bf19fdb48e71d68ea36cac56d513f0a6f29bf692990a78018c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_results_per_page"));

        // line 451
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_resultsPerPage(limit)
{
    ";
        // line 453
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->env->getExtension('datagrid_twig_extension')->getGridUrl("limit", (isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "' + limit);

    return true;
}
";
        
        $__internal_59a343da6ec364bf19fdb48e71d68ea36cac56d513f0a6f29bf692990a78018c->leave($__internal_59a343da6ec364bf19fdb48e71d68ea36cac56d513f0a6f29bf692990a78018c_prof);

    }

    // line 459
    public function block_grid_scripts_mark_visible($context, array $blocks = array())
    {
        $__internal_23164cd2f773c510af7cbf68122aaf79751d78b6eaa9dd242d572445e334d91a = $this->env->getExtension("native_profiler");
        $__internal_23164cd2f773c510af7cbf68122aaf79751d78b6eaa9dd242d572445e334d91a->enter($__internal_23164cd2f773c510af7cbf68122aaf79751d78b6eaa9dd242d572445e334d91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_mark_visible"));

        // line 460
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markVisible(select)
{
    var form = document.getElementById('";
        // line 462
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "');

    var counter = 0;

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;

            if (form.elements[i].checked){
               counter++;
            }
        }
    }

    ";
        // line 476
        if ($this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "isFilterSectionVisible", array())) {
            // line 477
            echo "    counter--;
    ";
        }
        // line 479
        echo "
    var selected = document.getElementById('";
        // line 480
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_selected');
    selected.innerHTML = counter > 0 ? '";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', counter) : '';

    document.getElementById('";
        // line 483
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';

    return false;
}
";
        
        $__internal_23164cd2f773c510af7cbf68122aaf79751d78b6eaa9dd242d572445e334d91a->leave($__internal_23164cd2f773c510af7cbf68122aaf79751d78b6eaa9dd242d572445e334d91a_prof);

    }

    // line 489
    public function block_grid_scripts_mark_all($context, array $blocks = array())
    {
        $__internal_fb07e65bdbdc062753c2e3865d1bd9af1ea02313477b24bfad5ddff83e21d8e5 = $this->env->getExtension("native_profiler");
        $__internal_fb07e65bdbdc062753c2e3865d1bd9af1ea02313477b24bfad5ddff83e21d8e5->enter($__internal_fb07e65bdbdc062753c2e3865d1bd9af1ea02313477b24bfad5ddff83e21d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_mark_all"));

        // line 490
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_markAll(select)
{
    var form = document.getElementById('";
        // line 492
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "');

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;
        }
    }

    var selected = document.getElementById('";
        // line 500
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_selected');

    if (select) {
        document.getElementById('";
        // line 503
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '1';
        selected.innerHTML = '";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', '";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "totalCount", array()), "html", null, true);
        echo "');
    } else {
        document.getElementById('";
        // line 506
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';
        selected.innerHTML = '';
    }

    return false;
}
";
        
        $__internal_fb07e65bdbdc062753c2e3865d1bd9af1ea02313477b24bfad5ddff83e21d8e5->leave($__internal_fb07e65bdbdc062753c2e3865d1bd9af1ea02313477b24bfad5ddff83e21d8e5_prof);

    }

    // line 514
    public function block_grid_scripts_switch_operator($context, array $blocks = array())
    {
        $__internal_08dd8323911e82b40b69dd02f5d33e40a67d99d5264635eb557b27540391fe38 = $this->env->getExtension("native_profiler");
        $__internal_08dd8323911e82b40b69dd02f5d33e40a67d99d5264635eb557b27540391fe38->enter($__internal_08dd8323911e82b40b69dd02f5d33e40a67d99d5264635eb557b27540391fe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_switch_operator"));

        // line 515
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 516
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 517
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 518
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 519
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_switchOperator(elt, query_, submitOnChange)
{
\tsubmitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;
    var inputFrom = document.getElementById(query_+'from');
    var inputTo = document.getElementById(query_+'to');
    if ((elt.options[elt.selectedIndex].value == '";
        // line 524
        echo twig_escape_filter($this->env, (isset($context["btwOperator"]) ? $context["btwOperator"] : $this->getContext($context, "btwOperator")), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["btweOperator"]) ? $context["btweOperator"] : $this->getContext($context, "btweOperator")), "html", null, true);
        echo "')) {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = '';
        inputTo.disabled=false;
    } else if ((elt.options[elt.selectedIndex].value == '";
        // line 529
        echo twig_escape_filter($this->env, (isset($context["isNullOperator"]) ? $context["isNullOperator"] : $this->getContext($context, "isNullOperator")), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["isNotNullOperator"]) ? $context["isNotNullOperator"] : $this->getContext($context, "isNotNullOperator")), "html", null, true);
        echo "')) {
        inputFrom.style.display = 'none';
        inputFrom.disabled=true;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
        if (submitOnChange) {
            elt.form.submit();
        }
    } else {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
    }
}
";
        
        $__internal_08dd8323911e82b40b69dd02f5d33e40a67d99d5264635eb557b27540391fe38->leave($__internal_08dd8323911e82b40b69dd02f5d33e40a67d99d5264635eb557b27540391fe38_prof);

    }

    // line 546
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        $__internal_09c9f8c9252aac1637a484835d15a7c9f2917930e725761ad1a42b6b28bf2e7d = $this->env->getExtension("native_profiler");
        $__internal_09c9f8c9252aac1637a484835d15a7c9f2917930e725761ad1a42b6b28bf2e7d->enter($__internal_09c9f8c9252aac1637a484835d15a7c9f2917930e725761ad1a42b6b28bf2e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_submit_form"));

        // line 547
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash", array()), "html", null, true);
        echo "_submitForm(event, form)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (event.type != 'keypress' || key == 13) {
        form.submit();
    }

    return true;
}
";
        
        $__internal_09c9f8c9252aac1637a484835d15a7c9f2917930e725761ad1a42b6b28bf2e7d->leave($__internal_09c9f8c9252aac1637a484835d15a7c9f2917930e725761ad1a42b6b28bf2e7d_prof);

    }

    // line 563
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
        $__internal_9512c64d10c5191cae7949bdd15b24bf448dba90dbaa1c0181f3a95ad5792a58 = $this->env->getExtension("native_profiler");
        $__internal_9512c64d10c5191cae7949bdd15b24bf448dba90dbaa1c0181f3a95ad5792a58->enter($__internal_9512c64d10c5191cae7949bdd15b24bf448dba90dbaa1c0181f3a95ad5792a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_ajax"));

        
        $__internal_9512c64d10c5191cae7949bdd15b24bf448dba90dbaa1c0181f3a95ad5792a58->leave($__internal_9512c64d10c5191cae7949bdd15b24bf448dba90dbaa1c0181f3a95ad5792a58_prof);

    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2310 => 563,  2287 => 547,  2281 => 546,  2256 => 529,  2246 => 524,  2237 => 519,  2235 => 518,  2233 => 517,  2231 => 516,  2229 => 515,  2223 => 514,  2209 => 506,  2202 => 504,  2198 => 503,  2192 => 500,  2181 => 492,  2175 => 490,  2169 => 489,  2157 => 483,  2152 => 481,  2148 => 480,  2145 => 479,  2141 => 477,  2139 => 476,  2122 => 462,  2116 => 460,  2110 => 459,  2096 => 453,  2090 => 451,  2084 => 450,  2069 => 443,  2056 => 434,  2050 => 433,  2036 => 427,  2030 => 425,  2024 => 424,  2010 => 418,  2004 => 416,  1998 => 415,  1984 => 409,  1978 => 407,  1972 => 406,  1957 => 398,  1951 => 397,  1941 => 393,  1937 => 392,  1933 => 391,  1929 => 390,  1925 => 389,  1921 => 388,  1917 => 387,  1913 => 386,  1909 => 385,  1905 => 384,  1901 => 383,  1898 => 382,  1892 => 381,  1880 => 375,  1874 => 374,  1862 => 371,  1856 => 370,  1847 => 366,  1844 => 365,  1838 => 364,  1835 => 363,  1820 => 361,  1816 => 360,  1797 => 358,  1794 => 357,  1779 => 355,  1775 => 354,  1751 => 352,  1748 => 351,  1742 => 350,  1739 => 349,  1708 => 347,  1704 => 346,  1696 => 345,  1693 => 344,  1662 => 342,  1658 => 341,  1649 => 340,  1647 => 339,  1642 => 337,  1639 => 336,  1637 => 335,  1635 => 334,  1633 => 333,  1631 => 332,  1629 => 331,  1627 => 330,  1625 => 329,  1623 => 328,  1621 => 327,  1615 => 326,  1586 => 321,  1564 => 320,  1559 => 318,  1556 => 317,  1554 => 316,  1552 => 315,  1550 => 314,  1548 => 313,  1546 => 312,  1544 => 311,  1542 => 310,  1536 => 309,  1526 => 304,  1511 => 302,  1507 => 301,  1491 => 300,  1488 => 299,  1486 => 298,  1480 => 297,  1468 => 292,  1462 => 290,  1460 => 289,  1449 => 288,  1446 => 287,  1444 => 286,  1442 => 285,  1436 => 284,  1426 => 281,  1420 => 280,  1399 => 277,  1396 => 276,  1394 => 275,  1377 => 274,  1371 => 273,  1361 => 270,  1355 => 269,  1334 => 266,  1331 => 265,  1329 => 264,  1312 => 263,  1310 => 262,  1308 => 261,  1302 => 260,  1292 => 257,  1286 => 256,  1277 => 254,  1271 => 253,  1261 => 250,  1255 => 249,  1241 => 247,  1235 => 246,  1221 => 243,  1215 => 242,  1207 => 239,  1176 => 237,  1172 => 236,  1169 => 235,  1166 => 234,  1160 => 233,  1152 => 230,  1147 => 228,  1144 => 227,  1133 => 225,  1129 => 224,  1122 => 222,  1117 => 221,  1115 => 220,  1112 => 219,  1106 => 218,  1098 => 215,  1093 => 213,  1090 => 212,  1079 => 210,  1075 => 209,  1068 => 207,  1063 => 206,  1061 => 205,  1058 => 204,  1052 => 203,  1044 => 200,  1038 => 197,  1035 => 196,  1024 => 194,  1020 => 193,  1013 => 191,  1005 => 190,  1001 => 189,  998 => 188,  996 => 187,  991 => 185,  985 => 184,  979 => 183,  973 => 182,  967 => 181,  963 => 179,  957 => 178,  947 => 175,  932 => 173,  928 => 172,  924 => 171,  920 => 170,  914 => 169,  898 => 165,  892 => 164,  883 => 163,  881 => 162,  877 => 161,  871 => 160,  862 => 157,  856 => 156,  845 => 151,  841 => 150,  837 => 149,  834 => 148,  828 => 146,  825 => 145,  819 => 144,  805 => 140,  791 => 138,  786 => 136,  771 => 135,  768 => 134,  754 => 133,  732 => 131,  729 => 130,  711 => 129,  708 => 128,  705 => 127,  702 => 126,  683 => 125,  677 => 124,  660 => 118,  646 => 117,  636 => 115,  633 => 114,  630 => 113,  627 => 112,  624 => 111,  621 => 110,  618 => 109,  601 => 108,  595 => 107,  592 => 106,  590 => 105,  584 => 104,  576 => 101,  562 => 100,  541 => 98,  538 => 97,  521 => 96,  518 => 95,  512 => 94,  504 => 91,  490 => 90,  486 => 88,  483 => 87,  480 => 86,  474 => 84,  471 => 83,  467 => 81,  465 => 80,  462 => 79,  460 => 78,  449 => 77,  446 => 76,  443 => 75,  440 => 74,  437 => 73,  434 => 72,  431 => 71,  428 => 70,  425 => 69,  423 => 68,  420 => 67,  414 => 66,  411 => 65,  409 => 64,  389 => 63,  386 => 62,  369 => 61,  366 => 60,  360 => 59,  347 => 54,  344 => 53,  337 => 51,  334 => 50,  331 => 49,  327 => 48,  325 => 47,  323 => 46,  317 => 45,  303 => 43,  295 => 40,  289 => 38,  285 => 36,  279 => 34,  277 => 33,  274 => 32,  268 => 30,  265 => 29,  259 => 27,  256 => 26,  250 => 24,  248 => 23,  240 => 19,  234 => 17,  231 => 16,  225 => 14,  223 => 13,  218 => 10,  212 => 8,  210 => 7,  202 => 5,  200 => 4,  197 => 3,  191 => 2,  184 => 563,  181 => 562,  179 => 546,  176 => 545,  174 => 514,  171 => 513,  169 => 489,  166 => 488,  164 => 459,  161 => 458,  159 => 450,  156 => 449,  154 => 433,  151 => 432,  149 => 424,  146 => 423,  144 => 415,  141 => 414,  139 => 406,  136 => 405,  134 => 397,  131 => 396,  129 => 381,  124 => 377,  122 => 374,  120 => 370,  118 => 326,  116 => 309,  114 => 297,  112 => 284,  110 => 280,  108 => 273,  106 => 269,  104 => 260,  102 => 256,  100 => 253,  98 => 249,  96 => 246,  94 => 242,  92 => 233,  90 => 218,  88 => 203,  86 => 178,  84 => 169,  82 => 160,  80 => 156,  78 => 144,  76 => 124,  74 => 104,  72 => 94,  70 => 59,  68 => 45,  66 => 43,  64 => 2,);
    }
}
/* {# ------------------------------------------------------ grid ------------------------------------------------------ #}*/
/* {% block grid %}*/
/* <div class="grid">*/
/* {% if grid.totalCount > 0 or grid.isFiltered or grid.noDataMessage is sameas(false) %}*/
/*     <form id="{{ grid.hash }}" action="{{ grid.routeUrl }}" method="post">*/
/*         <div class="grid_header">*/
/*         {% if grid.massActions|length > 0 %}*/
/*             {{ grid_actions(grid) }}*/
/*         {% endif %}*/
/*         </div>*/
/*         <div class="grid_body">*/
/*         <table>*/
/*         {% if grid.isTitleSectionVisible %}*/
/*             {{ grid_titles(grid) }}*/
/*         {% endif %}*/
/*         {% if grid.isFilterSectionVisible %}*/
/*             {{ grid_filters(grid) }}*/
/*         {% endif %}*/
/*         {{ grid_rows(grid) }}*/
/*         </table>*/
/*         </div>*/
/*         <div class="grid_footer">*/
/*         {% if grid.isPagerSectionVisible %}*/
/*             {{ grid_pager(grid) }}*/
/*         {% endif %}*/
/*         {% if grid.exports|length > 0 %}*/
/*             {{ grid_exports(grid) }}*/
/*         {% endif %}*/
/*         {% if grid.tweaks|length > 0 %}*/
/*             {{ grid_tweaks(grid) }}*/
/*         {% endif %}*/
/*         </div>*/
/*         {% if withjs %}*/
/*             {{ grid_scripts(grid) }}*/
/*         {% endif %}*/
/*     </form>*/
/* {% else %}*/
/*     {{ grid_no_data(grid) }}*/
/* {% endif %}*/
/* </div>*/
/* {% endblock grid %}*/
/* {# --------------------------------------------------- grid_no_data ------------------------------------------------- #}*/
/* {% block grid_no_data %}<p class="no_data">{{ grid.noDataMessage|default('No data')|trans|raw }}</p>{% endblock grid_no_data %}*/
/* {# --------------------------------------------------- grid_no_result ------------------------------------------------- #}*/
/* {% block grid_no_result %}*/
/* {% spaceless %}*/
/* {% set nbColumns = 0 %}*/
/* {% for column in grid.columns %}*/
/*     {% if column.visible(grid.isReadyForExport) %}*/
/*         {% set nbColumns = nbColumns + 1 %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* <tr class="grid-row-cells">*/
/*     <td class="last-column last-row" colspan="{{ nbColumns }}" style="text-align: center;">{{ grid.noResultMessage|default('No result')|trans|raw }}</td>*/
/* </tr>*/
/* {% endspaceless %}*/
/* {% endblock grid_no_result %}*/
/* {# --------------------------------------------------- grid_titles -------------------------------------------------- #}*/
/* {% block grid_titles %}*/
/*     <tr class="grid-row-titles">*/
/*     {% for column in grid.columns %}*/
/*         {% if column.visible(grid.isReadyForExport) %}*/
/*             <th class="{% if column.align != 'left'%}align-{{ column.align }}{% endif %}{% if column.class %} {{ column.class }}{% endif %}{% if loop.last %} last-column{% endif %}"{% if(column.size > -1) %} style="width:{{ column.size }}px;"{% endif %}>*/
/*             {%- spaceless %}*/
/*             {% if column.type == 'massaction' %}*/
/*                 <input type="checkbox" class="grid-mass-selector" onclick="{{ grid.hash }}_markVisible(this.checked);"/>*/
/*             {% else %} */
/*                 {% if column.usePrefixTitle == true %}*/
/*                     {% set columnTitle = grid.prefixTitle ~ column.title ~ '__abbr' %}*/
/*                     {% if columnTitle|trans == columnTitle %}*/
/*                         {% set columnTitle = grid.prefixTitle ~ column.title %}*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {% set columnTitle = column.title %}*/
/*                 {% endif %}*/
/*                 {% if (column.sortable) %}*/
/*                     <a class="order" href="{{ grid_url('order', grid, column) }}" title="{{ 'Order by'|trans }} {{ columnTitle|trans }}">{{ columnTitle|trans }}</a>*/
/*                     {% if column.order == 'asc' %}*/
/*                         <div class="sort_up"></div>*/
/*                     {% elseif column.order == 'desc' %}*/
/*                         <div class="sort_down"></div>*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {{ columnTitle|trans }}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% endspaceless -%}*/
/*             </th>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </tr>*/
/* {% endblock grid_titles %}*/
/* {# -------------------------------------------------- grid_filters -------------------------------------------------- #}*/
/* {% block grid_filters %}*/
/*     <tr class="grid-row-filters">*/
/*     {% for column in grid.columns %}*/
/*         {% if column.visible(grid.isReadyForExport) %}*/
/*         <th class="{% if column.class %}{{ column.class }}{% endif %}{% if loop.last %} last-column{% endif %}"{% if(column.size > -1) %} style="width:{{ column.size }}px;"{% endif %}>{% if column.filterable %}{{ grid_filter(column, grid)|raw }}{% endif %}</th>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </tr>*/
/* {% endblock grid_filters %}*/
/* {# -------------------------------------------------- grid_search -------------------------------------------------- #}*/
/* {% block grid_search %}*/
/* {% if grid.isFilterSectionVisible %}*/
/*     <div class="grid-search">*/
/*         <form id="{{ grid.hash }}_search" action="{{ grid.routeUrl }}" method="post">*/
/*         {% for column in grid.columns %}*/
/*             {% if column.isFilterable and column.type not in ['actions', 'massaction'] %}*/
/*                 {% if column.usePrefixTitle == true %}*/
/*                     {% set columnTitle = grid.prefixTitle ~ column.title %}*/
/*                 {% else %}*/
/*                     {% set columnTitle = column.title %}*/
/*                 {% endif %}*/
/*                 <div class="{{ cycle(['odd', 'even'], loop.index) }}"><label>{{ columnTitle|trans }}</label>{{ grid_filter(column, grid, false)|raw }}</div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*             <div class="grid-search-action"><input type="submit" class="grid-search-submit" value="{{ 'Search'|trans }}"/><input type="button" class="grid-search-reset" value="{{ 'Reset'|trans }}" onclick="return {{ grid.hash }}_reset();"/></div>*/
/*         </form>*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock grid_search %}*/
/* {# ---------------------------------------------------- grid_rows --------------------------------------------------- #}*/
/* {% block grid_rows %}*/
/*     {% for row in grid.rows %}*/
/*     {% set last_row = loop.last %}*/
/*     {% spaceless %}*/
/*         {% set gridColumns %}*/
/*             {% for column in grid.columns %}*/
/*                 {% if column.visible(grid.isReadyForExport) %}*/
/*                     <td class="grid-column-{{ column.renderBlockId }}{% if column.class %} {{ column.class }}{% endif %}{% if column.align != 'left'%} align-{{ column.align }}{% endif %}{% if loop.last %} last-column{% endif %}{% if last_row %} last-row{% endif %}">{{ grid_cell(column, row, grid)|raw }}</td>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endset %}*/
/*         <tr{% if row.color != '' %} style="background-color:{{ row.color }};"{% endif %} class="grid-row-cells {{ cycle(['odd', 'even'], loop.index) }}{% if row.class != '' %} {{ row.class }}{% endif %}">*/
/*         {{ gridColumns }}*/
/*     {% endspaceless %}*/
/*     </tr>*/
/*     {% else %}*/
/*         {{ grid_no_result(grid) }}*/
/*     {% endfor %}*/
/* {% endblock grid_rows %}*/
/* {# ---------------------------------------------------- grid_pager -------------------------------------------------- #}*/
/* {% block grid_pager %}*/
/*     {% if pagerfanta %}*/
/*         {{ grid_pagerfanta(grid) }}*/
/*     {% else %}*/
/*         <div class="pager" style="float:left">*/
/*             {{ grid_pager_totalcount(grid) }}*/
/*             {{ grid_pager_selectpage(grid) }}*/
/*             {{ grid_pager_results_perpage(grid) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock grid_pager %}*/
/* {# ---------------------------------------------------- grid_pager_totalcount -------------------------------------------------- #}*/
/* {% block grid_pager_totalcount %}*/
/* {{ '%count% Results, ' | transchoice(grid.totalCount, {'%count%': grid.totalCount}) }}*/
/* {% endblock grid_pager_totalcount %}*/
/* {# ---------------------------------------------------- grid_pager_selectpage -------------------------------------------------- #}*/
/* {% block grid_pager_selectpage %}*/
/* {{ 'Page'|trans }}*/
/* {% spaceless %}*/
/* <input type="button" class="prev" {% if grid.page <= 0 %}disabled="disabled"{% endif %} value="<" onclick="return {{ grid.hash }}_previousPage();"/>*/
/* <input type="text" class="current" value="{{ grid.page + 1 }}" size="2" onkeypress="return {{ grid.hash }}_enterPage(event, parseInt(this.value)-1);"/>*/
/* <input type="button" value=">" class="next" {% if grid.page >= grid.pageCount-1 %}disabled="disabled"{% endif %} onclick="return {{ grid.hash }}_nextPage();"/> {{ 'of %count%'|trans({ '%count%' : grid.pageCount }) }}*/
/* {% endspaceless %}*/
/* {% endblock grid_pager_selectpage %}*/
/* {# ---------------------------------------------------- grid_pager_results_perpage -------------------------------------------------- #}*/
/* {% block grid_pager_results_perpage %}*/
/* {{ ', Display'|trans }}*/
/* <select onchange="return {{ grid.hash }}_resultsPerPage(this.value);">*/
/* {% for key, value in grid.limits %}*/
/*     <option value="{{ key }}"{% if (key == grid.limit) %} selected="selected"{% endif %}>{{ value }}</option>*/
/* {% endfor %}*/
/* </select> {{ 'Items per page'|trans }}*/
/* {% endblock grid_pager_results_perpage %}*/
/* {# --------------------------------------------------- grid_actions ------------------------------------------------- #}*/
/* {% block grid_actions %}*/
/* <div class="mass-actions">*/
/*     <span class="grid_massactions_helper">*/
/*         <a href="#" onclick="return {{ grid.hash }}_markVisible(true);">{{ 'Select visible'|trans }}</a> |*/
/*         <a href="#" onclick="return {{ grid.hash }}_markVisible(false);">{{ 'Deselect visible'|trans }}</a> |*/
/*         <a href="#" onclick="return {{ grid.hash }}_markAll(true);">{{ 'Select all'|trans }}</a> |*/
/*         <a href="#" onclick="return {{ grid.hash }}_markAll(false);">{{ 'Deselect all'|trans }}</a>*/
/*         <span class="mass-actions-selected" id="{{ grid.hash }}_mass_action_selected"></span>*/
/*     </span>*/
/*     {% spaceless %}*/
/*     <div style="float:right;" class="grid_massactions">*/
/*         {{ 'Action'|trans }}*/
/*         <input type="hidden" id="{{ grid.hash }}_mass_action_all" name="{{ grid.hash }}[{{ constant('APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED') }}]" value="0"/>*/
/*         <select name="{{ grid.hash }}[{{ constant('APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION') }}]">*/
/*             <option value="-1"></option>*/
/*             {% for key, massAction in grid.massActions %}*/
/*             <option value="{{ key }}">{{ massAction.title|trans }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <input type="submit"  value="{{ 'Submit Action'|trans }}"/>*/
/*     </div>*/
/*     {% endspaceless %}*/
/* </div>*/
/* {% endblock grid_actions %}*/
/* {# --------------------------------------------------- grid_exports ------------------------------------------------- #}*/
/* {% block grid_exports %}*/
/* <div class="exports" style="float:right">*/
/*     {% spaceless %}*/
/*         {{ 'Export'|trans }}*/
/*             <select name="{{grid.hash}}[{{ constant('APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT') }}]">*/
/*             <option value="-1"></option>*/
/*             {% for key, export in grid.exports %}*/
/*             <option value="{{key}}">{{ export.title|trans }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <input type="submit" value="{{ 'Export'|trans }}"/>*/
/*     {% endspaceless %}*/
/* </div>*/
/* {% endblock grid_exports %}*/
/* {# --------------------------------------------------- grid_tweaks ------------------------------------------------- #}*/
/* {% block grid_tweaks %}*/
/* <div class="tweaks" style="float:right">*/
/*     {% spaceless %}*/
/*         {{ 'Tweaks'|trans }}*/
/*             <select name="{{grid.hash}}[{{ constant('APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_TWEAK') }}]">*/
/*             <option value=""></option>*/
/*             {% for key, tweak in grid.tweaks %}*/
/*             <option value="{{key}}">{{ tweak.title|trans }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <input type="submit" value="{{ 'Tweak'|trans }}"/>*/
/*     {% endspaceless %}*/
/* </div>*/
/* {% endblock grid_tweaks %}*/
/* {# ------------------------------------------------ grid_column_actions_cell --------------------------------------------- #}*/
/* {% block grid_column_actions_cell %}*/
/*     {% set actions = column.getActionsToRender(row) %}*/
/*     <ul class="grid-row-actions">*/
/*     {% for action in actions %}*/
/*         <li><a href="{{ url(action.route, column.routeParameters(row, action), false) }}" target="{{ action.target }}"{% if action.confirm %} onclick="return confirm('{{ action.confirmMessage }}')"{% endif %}{% for name, value in action.attributes %} {{ name }}="{{ value }}" {% endfor %}>{{ action.title|trans }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* {% endblock grid_column_actions_cell %}*/
/* {# ------------------------------------------------ grid_column_massaction_cell --------------------------------------------- #}*/
/* {% block grid_column_massaction_cell %}*/
/*     <input type="checkbox" class="action" value="1" name="{{ grid.hash }}[{{ column.id }}][{{ row.primaryFieldValue }}]"/>*/
/* {% endblock grid_column_massaction_cell %}*/
/* {# ------------------------------------------------ grid_column_type_boolean_cell --------------------------------------------- #}*/
/* {% block grid_column_boolean_cell %}*/
/*     <span class="grid_boolean_{{ value }}" title="{{ value }}">{{ block('grid_column_cell') }}</span>*/
/* {% endblock grid_column_boolean_cell %}*/
/* {% block grid_column_type_boolean_cell %}*/
/* 	{{ block('grid_column_boolean_cell') }}*/
/* {% endblock grid_column_type_boolean_cell %}*/
/* {# ------------------------------------------------ grid_column_type_rank_cell --------------------------------------------- #}*/
/* {% block grid_column_rank_cell %}*/
/* {{ grid.page * grid.limit + value }}*/
/* {% endblock grid_column_rank_cell %}*/
/* {% block grid_column_type_rank_cell %}*/
/* 	{{ block('grid_column_rank_cell') }}*/
/* {% endblock grid_column_type_rank_cell %}*/
/* {# ------------------------------------------------ grid_column_type_array_columns --------------------------------------------- #}*/
/* {% block grid_column_array_cell %}*/
/* {% set sourceValues = row.field(column.id) %}*/
/* {% set values = value %}*/
/* {% for key, index in values -%}*/
/*     {% set value = index %}*/
/*     {% set sourceValue = sourceValues[key] %}*/
/*     {{ block('grid_column_cell') | raw }}{{ column.separator | raw }}*/
/* {%- endfor %}*/
/* {% endblock grid_column_array_cell %}*/
/* {% block grid_column_type_array_cell %}*/
/* 	{{ block('grid_column_array_cell') }}*/
/* {% endblock grid_column_type_array_cell %}*/
/* {# ------------------------------------------------ grid_column_type_join_cell --------------------------------------------- #}*/
/* {% block grid_column_join_cell %}*/
/* {% for key, index in column.joinColumns -%}*/
/*     {% set value = row.field(index) %}*/
/*     {% set sourceValue = value %}*/
/*     {{ block('grid_column_cell') | raw }}{{ column.separator | raw }}*/
/* {%- endfor %}*/
/* {% endblock grid_column_join_cell %}*/
/* {% block grid_column_type_join_cell %}*/
/* 	{{ block('grid_column_join_cell') }}*/
/* {% endblock grid_column_type_join_cell %}*/
/* {# ------------------------------------------- grid_column_cell ---------------------------------------- #}*/
/* {% block grid_column_cell %}*/
/* {%- spaceless %}*/
/* {% if column.filterable and column.searchOnClick %}*/
/*     {% set sourceValue = sourceValue is defined ? sourceValue : row.field(column.id) %}*/
/*     <a href="?{{ grid.hash }}[{{ column.id }}][from]={{ sourceValue | url_encode() }}" class="searchOnClick">{{ value }}</a>*/
/* {% elseif column.safe is sameas(false) %}*/
/*     {{ value|raw }}*/
/* {% else %}*/
/*     {{ value|escape(column.safe)|raw }}*/
/* {% endif %}*/
/* {% endspaceless -%}*/
/* {% endblock grid_column_cell %}*/
/* {# -------------------------------------------- grid_column_operator --------------------------------------- #}*/
/* {% block grid_column_operator %}*/
/* {% if column.operatorsVisible %}*/
/* <span class="grid-filter-operator">*/
/*     <select name="{{ grid.hash }}[{{ column.id }}][operator]" onchange="{{ grid.hash }}_switchOperator(this, '{{ grid.hash }}__{{ column.id }}__query__'{% if submitOnChange is sameas(false) %}, false{% endif%});">*/
/*     {% for operator in column.operators %}*/
/*         <option value="{{ operator }}"{% if op == operator %} selected="selected"{% endif %}>{{ operator |trans }}</option>*/
/*     {% endfor %}*/
/*     </select>*/
/* </span>*/
/* {% endif %}*/
/* {% endblock grid_column_operator %}*/
/* {# -------------------------------------------- grid_column_filter_type_input --------------------------------------- #}*/
/* {% block grid_column_filter_type_input %}*/
/* {% set btwOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW') %}*/
/* {% set btweOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE') %}*/
/* {% set isNullOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL') %}*/
/* {% set isNotNullOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL') %}*/
/* {% set op = column.data.operator is defined ? column.data.operator : column.defaultOperator %}*/
/* {% set from = column.data.from is defined ? column.data.from : null %}*/
/* {% set to = column.data.to is defined ? column.data.to : null %}*/
/* <span class="grid-filter-input">*/
/*     {{ grid_column_operator(column, grid, op, submitOnChange) }}*/
/*     <span class="grid-filter-input-query">*/
/*         <input type="{{ column.inputType }}" value="{{ from }}" class="grid-filter-input-query-from" name="{{ grid.hash }}[{{ column.id }}][from]" id="{{ grid.hash }}__{{ column.id }}__query__from" {% if submitOnChange is sameas(true) %}onkeypress="return {{ grid.hash }}_submitForm(event, this.form);"{% endif%} {{ ( op == isNullOperator or op == isNotNullOperator ) ? 'style="display: none;" disabled="disabled"' : '' }} />*/
/*         <input type="{{ column.inputType }}" value="{{ to }}" class="grid-filter-input-query-to" name="{{ grid.hash }}[{{ column.id }}][to]" id="{{ grid.hash }}__{{ column.id }}__query__to" {% if submitOnChange is sameas(true) %}onkeypress="return {{ grid.hash }}_submitForm(event, this.form);"{% endif%} {{ ( op == btwOperator or op == btweOperator ) ? '': 'style="display: none;" disabled="disabled"' }} />*/
/*     </span>*/
/* </span>*/
/* {% endblock grid_column_filter_type_input %}*/
/* {# -------------------------------------------- grid_column_filter_type_select --------------------------------------- #}*/
/* {% block grid_column_filter_type_select %}*/
/* {% set btwOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW') %}*/
/* {% set btweOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE') %}*/
/* {% set isNullOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL') %}*/
/* {% set isNotNullOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL') %}*/
/* {% set op = column.data.operator is defined ? column.data.operator : column.defaultOperator %}*/
/* {% set from = column.data.from is defined ? column.data.from : null %}*/
/* {% set to = column.data.to is defined ? column.data.to : null %}*/
/* {% set multiple = column.selectMulti %}*/
/* {% set expanded = column.selectExpanded %}*/
/* <span class="grid-filter-select">*/
/*     {{ grid_column_operator(column, grid, op, submitOnChange) }}*/
/*     <span class="grid-filter-select-query">*/
/*     {% if expanded %}*/
/*         <span class="grid-filter-select-query-from" id="{{ grid.hash }}__{{ column.id }}__query__from" {{ ( op == isNullOperator or op == isNotNullOperator ) ? 'style="display: none;" disabled="disabled"' : '' }}>*/
/*         {% for key, value in column.values %}*/
/*             <span><input type="{% if multiple %}checkbox{% else %}radio{% endif %}" name="{{ grid.hash }}[{{ column.id }}][from][]" value="{{ key }}" {% if key in from %} checked="checked"{% endif %} {% if submitOnChange is sameas(true) %}onclick="return {{ grid.hash }}_submitForm(event, this.form);"{% endif%}/><label>{{ value }}</label></span>*/
/*         {% endfor %}*/
/*         </span>*/
/*         <span class="grid-filter-select-query-to" id="{{ grid.hash }}__{{ column.id }}__query__to" {{ ( op == btwOperator or op == btweOperator ) ? '': 'style="display: none;" disabled="disabled"' }}>*/
/*         {% for key, value in column.values %}*/
/*             <span><input type="{% if multiple %}checkbox{% else %}radio{% endif %}" name="{{ grid.hash }}[{{ column.id }}][to]" value="{{ key }}" {% if not to is null and to == key %} checked="checked"{% endif %} {% if submitOnChange is sameas(true) %}onclick="return {{ grid.hash }}_submitForm(event, this.form);"{% endif%}/><label>{{ value }}</label></span>*/
/*         {% endfor %}*/
/*         </span>*/
/*         {% if multiple %}<input type="submit" value="{{ 'Go'|trans }}" />{% endif %}*/
/*     {% else %}*/
/*         <select{% if multiple %} multiple="multiple"{% endif %} name="{{ grid.hash }}[{{ column.id }}][from][]" class="grid-filter-select-query-from" id="{{ grid.hash }}__{{ column.id }}__query__from" {% if submitOnChange is sameas(true) %}onchange="return {{ grid.hash }}_submitForm(event, this.form);"{% endif%} {{ ( op == isNullOperator or op == isNotNullOperator ) ? 'style="display: none;" disabled="disabled"' : '' }}>*/
/*             <option value="">&nbsp;</option>*/
/*             {% for key, value in column.values %}*/
/*                 <option value="{{ key }}"{% if key in from %} selected="selected"{% endif %}>{{ value }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         <select name="{{ grid.hash }}[{{ column.id }}][to]" class="grid-filter-select-query-to" id="{{ grid.hash }}__{{ column.id }}__query__to" {% if submitOnChange is sameas(true) %}onchange="return {{ grid.hash }}_submitForm(event, this.form);"{% endif%} {{ ( op == btwOperator or op == btweOperator ) ? '': 'style="display: none;" disabled="disabled"' }}>*/
/*             <option value="">&nbsp;</option>*/
/*             {% for key, value in column.values %}*/
/*                 <option value="{{ key }}"{% if not to is null and to == key %} selected="selected"{% endif %}>{{ value }}</option>*/
/*             {% endfor %}*/
/*         </select>*/
/*         {% if multiple %}<input type="submit" value="{{ 'Go'|trans }}" />{% endif %}*/
/*     {% endif %}*/
/*     </span>*/
/* </span>*/
/* {% endblock grid_column_filter_type_select %}*/
/* {# -------------------------------------------- grid_column_filter_type_massaction --------------------------------------- #}*/
/* {% block grid_column_filter_type_massaction %}*/
/*     <input type="button" class="grid-search-reset" value="R" title="{{ 'Reset'|trans }}" onclick="return {{ grid.hash }}_reset();"/>*/
/* {% endblock grid_column_filter_type_massaction %}*/
/* {# -------------------------------------------- grid_column_filter_type_massaction_filter --------------------------------------- #}*/
/* {% block grid_column_filter_type_actions %}*/
/*     <a class="grid-reset" href="{{ grid_url('reset', grid) }}">{{ 'Reset'|trans }}</a>*/
/* {% endblock grid_column_filter_type_actions %}*/
/* */
/* */
/* */
/* {# --------------------------------------------------- grid_scripts -------------------------------------------------- #}*/
/* {% block grid_scripts %}*/
/* <script type="text/javascript">*/
/* {{ grid_scripts_goto(grid) }}*/
/* {{ grid_scripts_reset(grid) }}*/
/* {{ grid_scripts_previous_page(grid) }}*/
/* {{ grid_scripts_next_page(grid) }}*/
/* {{ grid_scripts_enter_page(grid) }}*/
/* {{ grid_scripts_results_per_page(grid) }}*/
/* {{ grid_scripts_mark_visible(grid) }}*/
/* {{ grid_scripts_mark_all(grid) }}*/
/* {{ grid_scripts_switch_operator(grid) }}*/
/* {{ grid_scripts_submit_form(grid) }}*/
/* {{ grid_scripts_ajax(grid) }}*/
/* </script>*/
/* {% endblock grid_scripts %}*/
/* */
/* {% block grid_scripts_goto %}*/
/* function {{ grid.hash }}_goto(url)*/
/* {*/
/*     window.location.href = url;*/
/* */
/*     return false;*/
/* }*/
/* {% endblock grid_scripts_goto %}*/
/* */
/* {% block grid_scripts_reset %}*/
/* function {{ grid.hash }}_reset()*/
/* {*/
/*     {{ grid.hash }}_goto('{{ grid_url('reset', grid) }}');*/
/* */
/*     return false;*/
/* }*/
/* {% endblock grid_scripts_reset %}*/
/* */
/* {% block grid_scripts_previous_page %}*/
/* function {{ grid.hash }}_previousPage()*/
/* {*/
/*     {{ grid.hash }}_goto('{{ grid_url('page', grid, grid.page - 1) }}');*/
/* */
/*     return false;*/
/* }*/
/* {% endblock grid_scripts_previous_page %}*/
/* */
/* {% block grid_scripts_next_page %}*/
/* function {{ grid.hash }}_nextPage()*/
/* {*/
/*     {{ grid.hash }}_goto('{{ grid_url('page', grid, grid.page + 1) }}');*/
/* */
/*     return false;*/
/* }*/
/* {% endblock grid_scripts_next_page %}*/
/* */
/* {% block grid_scripts_enter_page %}*/
/* function {{ grid.hash }}_enterPage(event, page)*/
/* {*/
/*     key = event.which;*/
/* */
/*     if (window.event) {*/
/*         key = window.event.keyCode; //IE*/
/*     }*/
/* */
/*     if (key == 13) {*/
/*         {{ grid.hash }}_goto('{{ grid_url('page', grid) }}' + page);*/
/* */
/*         return false;*/
/*     }*/
/* }*/
/* {% endblock grid_scripts_enter_page %}*/
/* */
/* {% block grid_scripts_results_per_page %}*/
/* function {{ grid.hash }}_resultsPerPage(limit)*/
/* {*/
/*     {{ grid.hash }}_goto('{{ grid_url('limit', grid) }}' + limit);*/
/* */
/*     return true;*/
/* }*/
/* {% endblock grid_scripts_results_per_page %}*/
/* */
/* {% block grid_scripts_mark_visible %}*/
/* function {{ grid.hash }}_markVisible(select)*/
/* {*/
/*     var form = document.getElementById('{{ grid.hash }}');*/
/* */
/*     var counter = 0;*/
/* */
/*     for (var i=0; i < form.elements.length; i++ ) {*/
/*         if (form.elements[i].type == 'checkbox') {*/
/*             form.elements[i].checked = select;*/
/* */
/*             if (form.elements[i].checked){*/
/*                counter++;*/
/*             }*/
/*         }*/
/*     }*/
/* */
/*     {% if grid.isFilterSectionVisible %}*/
/*     counter--;*/
/*     {% endif %}*/
/* */
/*     var selected = document.getElementById('{{ grid.hash }}_mass_action_selected');*/
/*     selected.innerHTML = counter > 0 ? '{{ 'Selected _s_ rows'|trans }}'.replace('_s_', counter) : '';*/
/* */
/*     document.getElementById('{{ grid.hash }}_mass_action_all').value = '0';*/
/* */
/*     return false;*/
/* }*/
/* {% endblock grid_scripts_mark_visible %}*/
/* */
/* {% block grid_scripts_mark_all %}*/
/* function {{ grid.hash }}_markAll(select)*/
/* {*/
/*     var form = document.getElementById('{{ grid.hash }}');*/
/* */
/*     for (var i=0; i < form.elements.length; i++ ) {*/
/*         if (form.elements[i].type == 'checkbox') {*/
/*             form.elements[i].checked = select;*/
/*         }*/
/*     }*/
/* */
/*     var selected = document.getElementById('{{ grid.hash }}_mass_action_selected');*/
/* */
/*     if (select) {*/
/*         document.getElementById('{{ grid.hash }}_mass_action_all').value = '1';*/
/*         selected.innerHTML = '{{ 'Selected _s_ rows'|trans }}'.replace('_s_', '{{ grid.totalCount }}');*/
/*     } else {*/
/*         document.getElementById('{{ grid.hash }}_mass_action_all').value = '0';*/
/*         selected.innerHTML = '';*/
/*     }*/
/* */
/*     return false;*/
/* }*/
/* {% endblock grid_scripts_mark_all %}*/
/* */
/* {% block grid_scripts_switch_operator %}*/
/* {% set btwOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW') %}*/
/* {% set btweOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE') %}*/
/* {% set isNullOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL') %}*/
/* {% set isNotNullOperator = constant('APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL') %}*/
/* function {{ grid.hash }}_switchOperator(elt, query_, submitOnChange)*/
/* {*/
/* 	submitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;*/
/*     var inputFrom = document.getElementById(query_+'from');*/
/*     var inputTo = document.getElementById(query_+'to');*/
/*     if ((elt.options[elt.selectedIndex].value == '{{ btwOperator }}') || (elt.options[elt.selectedIndex].value == '{{ btweOperator }}')) {*/
/*         inputFrom.style.display = '';*/
/*         inputFrom.disabled=false;*/
/*         inputTo.style.display = '';*/
/*         inputTo.disabled=false;*/
/*     } else if ((elt.options[elt.selectedIndex].value == '{{ isNullOperator }}') || (elt.options[elt.selectedIndex].value == '{{ isNotNullOperator }}')) {*/
/*         inputFrom.style.display = 'none';*/
/*         inputFrom.disabled=true;*/
/*         inputTo.style.display = 'none';*/
/*         inputTo.disabled=true;*/
/*         if (submitOnChange) {*/
/*             elt.form.submit();*/
/*         }*/
/*     } else {*/
/*         inputFrom.style.display = '';*/
/*         inputFrom.disabled=false;*/
/*         inputTo.style.display = 'none';*/
/*         inputTo.disabled=true;*/
/*     }*/
/* }*/
/* {% endblock grid_scripts_switch_operator %}*/
/* */
/* {% block grid_scripts_submit_form %}*/
/* function {{ grid.hash }}_submitForm(event, form)*/
/* {*/
/*     key = event.which;*/
/* */
/*     if (window.event) {*/
/*         key = window.event.keyCode; //IE*/
/*     }*/
/* */
/*     if (event.type != 'keypress' || key == 13) {*/
/*         form.submit();*/
/*     }*/
/* */
/*     return true;*/
/* }*/
/* {% endblock grid_scripts_submit_form %}*/
/* */
/* {% block grid_scripts_ajax %}*/
/* {% endblock grid_scripts_ajax %}*/
/* */

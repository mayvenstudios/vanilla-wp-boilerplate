<?php

namespace Core;

abstract class Taxonomy {

    /**
     * Taxonomy name
     *
     * @var string
     */
    protected $name;

    /**
     * The plural, singular, and slug names
     *
     * @var array
     */
    protected $names = [];

    /**
     * Associated post types
     *
     * @var array
     */
    protected $postTypes = [];

    /**
     * The name of the custom meta box to use on the post editing screen for this
     *   taxonomy. Three custom meta boxes are provided:
     *     'radio' for a meta box with radio inputs,
     *     'simple' for a meta box with a simplified list of checkboxes, and
     *     'dropdown' for a meta box with a dropdown menu.
     *   You can also pass the name of a callback function, eg my_super_meta_box(),
     *   or boolean false to remove the metabox. Default null, meaning the standard meta box is used.
     *
     * @var null|string
     */
    protected $metaBox;

    /**
     * Whether to always show checked terms at the top of the meta box. This allows you
     *   to override WordPress' default behaviour if necessary. Default false if you're
     *   using a custom meta box (see the $meta_box argument), default true otherwise.
     *
     * @var boolean
     */
    protected $checkedOnTop = false;

    /**
     * Whether to show this taxonomy on the 'At a Glance' section of the admin dashboard.
     *
     * @var bool
     */
    protected $showInAtAGlance = false;

    /**
     * Associative array of admin screen columns to show for this taxonomy.
     *
     * @see Extended_Taxonomy_Admin::cols() method for more information.
     * @var array
     */
    protected $adminColumns = [];

    /**
     * All this does currently is disable hierarchy in the taxonomy's rewrite rules.
     *
     * @var bool
     */
    protected $hierarchy = false;

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function names()
    {
        return $this->names;
    }

    /**
     * @return array associated Core\PostType
     */
    public function postTypes()
    {
        return collect($this->postTypes)->map(function ($className) {
            return (new $className)->name();
        })->toArray();
    }

    /**
     * Arguments for register_extended_taxonomy function
     * @return array
     */
    public function args()
    {
        return [
            'meta_box' => $this->metaBox,
            'checked_on_top' => $this->checkedOnTop,
            'dashboard_glance' => $this->showInAtAGlance,
            'admin_cols' => $this->adminColumns,
            'allow_hierarchy' => $this->hierarchy
        ];
    }
}

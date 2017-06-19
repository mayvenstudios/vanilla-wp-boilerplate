<?php

namespace Core;

abstract class PostType {

    /**
     * @var string Post Type name
     */
    protected $name;

    /**
     * The singular name, plural name, and slug are generated from the post type name.
     * These can be overridden with the $names array
     *
     * @var array overrides
     */
    protected $names = [];

    /**
     * Associative array of admin screen columns to show for this post type.
     *
     * @var array
     */
    protected $adminColumns = [];

    /**
     * Associative array of admin screen filters to show for this post type.
     *
     * @var array
     */
    protected $adminFilters = [];

    /**
     * Associative array of query vars to override on this post type's archive.
     *
     * @var array
     */
    protected $archive = [];

    /**
     * Whether to show this post type on the 'At a Glance'
     * section of the admin dashboard.
     *
     * @var bool
     */
    protected $showInAtAGlance = true;

    /**
     * Placeholder text which appears in the title field for this post type.
     *
     * @var string
     */
    protected $titlePlaceholder = 'Enter title here';

    /**
     * Text which replaces the 'Featured Image' phrase for this post type.
     *
     * @var string
     */
    protected $featuredImageTitle = 'Featured Image';

    /**
     * Whether to show Quick Edit links for this post type. Default true.
     *
     * @var bool
     */
    protected $quickEditEnabled = true;

    /**
     * Whether to include this post type in the site's main feed. Default false.
     *
     * @var bool
     */
    protected $showInFeed = true;

    /**
     * Associative array of query vars and their parameters for front end filtering.
     *
     * @var array
     */
    protected $siteFilters = [];

    /**
     * Associative array of query vars and their parameters for front end sorting.
     *
     * @var array
     */
    protected $siteSortables = [];

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
     * @return array
     */
    public function args()
    {
        return [
            'admin_cols' => $this->adminColumns,
            'admin_filters' => $this->adminFilters,
            'archive' => $this->archive,
            'dashboard_glance' => $this->showInAtAGlance,
            'enter_title_here' => $this->titlePlaceholder,
            'featured_image' => $this->featuredImageTitle,
            'quick_edit' => $this->quickEditEnabled,
            'show_in_feed' => $this->showInFeed,
            'site_filters' => $this->siteFilters,
            'site_sortables' => $this->siteSortables
        ];
    }
}
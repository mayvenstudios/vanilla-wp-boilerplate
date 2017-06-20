<?php

namespace App\Commands;

use Core\Command;

class SyncACF extends Command {

    /**
     * Command name.
     * The command will be available as `wp {name}`
     *
     * @var string
     */
    protected $name = 'acf-sync';

    /**
     * Command description
     * The description to be shown in `wp help`
     *
     * @var string
     */
    protected $description = 'Sync changes in acf .json files with database';

    /**
     * Command handler
     *
     * @param $args array Command arguments
     * @param $named array Command named arguments
     *
     * @return mixed
     */
    public function handle($args, $named)
    {
        $groups = acf_get_field_groups();
        if (!$groups) {
            $this->log('Info. ACF groups not found. Nothing to sync.');
            return;
        }

        $sync = [];
        foreach ($groups as $group) {
            $local = acf_maybe_get($group, 'local', false);
            $modified = acf_maybe_get($group, 'modified', 0);
            $private = acf_maybe_get($group, 'private', false);

            // ignore DB / PHP / private field groups
            if ($local !== 'json' || $private) {
                // do nothing
            } elseif (!$group['ID']) {
                $sync[$group['key'] ] = $group;
            } elseif ($modified && $modified > get_post_modified_time('U', true, $group['ID'], true)) {
                $sync[$group['key']] = $group;
            }
        }

        $syncCount = count($sync);

        if (!$syncCount) {
            $this->log('Info. ACF groups are up to date. Nothing to sync.');
            return;
        }

        $this->log("Info. $syncCount not synced ACF groups found");


        // disable filters to ensure ACF loads raw data from DB
        acf_disable_filters();
        acf_enable_filter('local');

        // disable JSON
        // - this prevents a new JSON file being created and causing a 'change' to theme files - solves git annoyance
        acf_update_setting('json', false);

        foreach ($sync as $key => $group) {
            // append fields
            if (acf_have_local_fields($key)) {
                acf_get_local_fields($key);
            }
            // import
            acf_import_field_group($group);
        }

        $this->log("Info. ACF groups synced");
    }
}
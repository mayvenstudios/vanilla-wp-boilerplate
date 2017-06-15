<?php

class ACF_Command extends WP_CLI_Command
{
    /**
     * Sync ACF groups which were changed extenally (e.g. by another developer)
     */
    public function sync()
    {
        // reference acf_admin_field_groups::sync()

        $groups = acf_get_field_groups();

        if (!$groups) {
            WP_CLI::log('Info. ACF groups not found. Nothing to sync.');
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
            WP_CLI::log('Info. ACF groups are up to date. Nothing to sync.');
            return;
        }

        WP_CLI::log("Info. $syncCount unsynced ACF groups found");


        // disable filters to ensure ACF loads raw data from DB
        acf_disable_filters();
        acf_enable_filter('local');

        // disable JSON
        // - this prevents a new JSON file being created and causing a 'change' to theme files - solves git annoyance
        acf_update_setting('json', false);

        foreach ($sync as $key => $group) {
            // append fields
            if (acf_have_local_fields($key)) {
                $this->sync[$key]['fields'] = acf_get_local_fields($key);
            }

            // import
            acf_import_field_group($group);
        }

        WP_CLI::log("Info. ACF groups synced");
    }
}
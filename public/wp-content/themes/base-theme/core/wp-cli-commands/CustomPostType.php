<?php

class CustomPostType_Command extends WP_CLI_Command
{
    /**
     * Sync ACF groups which were changed extenally (e.g. by another developer)
     */
    public function flushRewrites()
    {
        flush_rewrite_rules();
    }
}
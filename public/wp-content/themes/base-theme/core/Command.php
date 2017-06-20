<?php
namespace Core;

use WP_CLI;

/**
 * Class Command
 * Wrapper on top of the wp-cli tool
 *
 * @see http://wp-cli.org/
 *
 * @package Core
 */
abstract class Command {

    /**
     * Command name.
     * The command will be available as `wp {name}`
     *
     * @var string
     */
    protected $name;

    /**
     * Command description
     * The description to be shown in `wp help`
     *
     * @var string
     */
    protected $description = '';

    /**
     * Log info into the console
     *
     * @param string $string
     */
    protected function log($string = '')
    {
        WP_CLI::log($string);
    }

    /**
     * Register the command
     */
    public function register()
    {
        WP_CLI::add_command($this->name, [$this, 'handle'], ['shortdesc' => $this->description]);
    }

    /**
     * Command handler
     *
     * @param $args array Command arguments
     * @param $named array Command named arguments
     *
     * @return mixed
     */
    abstract public function handle($args, $named);
}

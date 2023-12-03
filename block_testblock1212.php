<?php
/**
 * Version details.
 *
 * @package    block_testblock1212
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_testblock1212 extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_testblock1212');
    }

/**
 * @return stdClass|null
 */
function get_content() {
    if ($this->content === null) {
        $this->content = new stdClass;
        $this->content->text = 'this is my kingdom';
        $this->content->footer = 'this is a footer';
    }

    return $this->content;
}

}

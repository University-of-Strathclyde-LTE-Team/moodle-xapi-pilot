<?php namespace XREmitter\Events;

class ModuleViewed extends Viewed {
    /**
     * Reads data for an event.
     * @param [String => Mixed] $opts
     * @return [String => Mixed]
     * @override Event
     */
    public function read(array $opts) {

        echo("<script>console.log( 'Debug 1: ".$opts['course_ext']->shortname."' );</script>");

        echo $output;

        return array_merge_recursive(parent::read($opts), [
            'object' => $this->readModule($opts)
        ]);
    }
}

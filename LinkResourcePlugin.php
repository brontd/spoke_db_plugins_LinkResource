<?php
/**
 * linkResource
 * 
 * @copyright Copyright 2018 Eric C. Weig 
 * @license http://opensource.org/licenses/MIT MIT
 */

/**
 * The LinkResource plugin.
 * 
 * @package Omeka\Plugins\LinkResource
 */
class LinkResourcePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array(
        'linkResource' => array('Display', 'Item', 'Links', 'Linked Resource'),
        'projlinkResource' => array('Display', 'Collection', 'Links', 'Linked Resource'),
    );

    public function linkResource($text, $args) {
        return $this->_linkField($text, $args);
    }
    
    public function projlinkResource($text, $args) {
        return $this->_projlinkField($text, $args);
    }
    
    
    public function _linkField($text, $args) {
        $find = "|";
        $pos = strpos($text, $find);
        if ($pos != false) {
        $parts = explode("|", $text);
        $spacer = "&nbsp;&nbsp;";
        return "<span class=\"reslinks\">$parts[0]:&nbsp;&nbsp;<a href=\"" . $parts[1] . "\" target=\"_blank\">$parts[1]</a></span>";
} else {
    return $text;
}
    }
    
    public function _projlinkField($text, $args) {
        $find = "|";
        $pos = strpos($text, $find);
                if ($pos != false) {
        $parts = explode("|", $text);
        $spacer = "&nbsp;&nbsp;";
        return "<span class=\"reslinks\">$parts[0]:&nbsp;&nbsp;<a href=\"" . $parts[1] . "\" target=\"_blank\">$parts[1]</a></span>";
}else {
    return $text;
}
    }
    
}

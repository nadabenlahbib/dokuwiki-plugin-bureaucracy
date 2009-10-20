<?php
require_once DOKU_PLUGIN . 'bureaucracy/fields/textbox.php';
class syntax_plugin_bureaucracy_field_email extends syntax_plugin_bureaucracy_field_textbox {

    function handle_post($value) {
        if (!parent::handle_post($value)) {
            return false;
        }

        if(!mail_isvalid($value)){
            msg(sprintf($this->getLang('e_email'),hsc($this->opt['label'])),-1);
            return false;
        }
        return true;
    }
}
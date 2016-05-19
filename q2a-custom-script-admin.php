<?php

class q2a_custom_script_admin {

    function admin_form() {
        $saved=false;

        if (qa_clicked('q2a_custom_script_save_button')) {
            qa_opt('q2a_custom_script_value', qa_post_text('q2a_custom_script_form'));
            $saved=true;
        }

        return array(
            'ok' => $saved ? 'Google Analytics settings saved.' : null,

            'fields' => array(
                array(
                    'label' => 'Enter Scritpt:',
                    'value' => qa_opt('q2a_custom_script_value'),
                    'tags' => 'NAME="q2a_custom_script_form"',
                    'type' => 'textarea',
                    'rows' => 10
                ),
            ),

            'buttons' => array(
                array(
                    'label' => 'Save Changes',
                    'tags' => 'NAME="q2a_custom_script_save_button"'
                ),
            ),

        );


    }
}

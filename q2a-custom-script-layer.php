<?php
class qa_html_theme_layer extends qa_html_theme_base {

  function head_script() {// insert Javascript into the <head>

    $script = qa_opt('q2a_custom_script_value');

    if (!empty($script)) {
        $this->content['script'][]= $script;
    }
    qa_html_theme_base::head_script();
  }
};

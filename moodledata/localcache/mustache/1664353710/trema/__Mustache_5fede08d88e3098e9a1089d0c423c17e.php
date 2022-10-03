<?php

class __Mustache_5fede08d88e3098e9a1089d0c423c17e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<style>
';
        $buffer .= $indent . 'body{
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '  background-image:url([[pix:theme|frontpage/overlay]]);
';
        $buffer .= $indent . '  background-size: cover;
';
        $buffer .= $indent . '  background-position: fixed;
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .loader {
';
        $buffer .= $indent . '  position: relative;
';
        $buffer .= $indent . '  top: 0;
';
        $buffer .= $indent . '  left: 0;
';
        $buffer .= $indent . '  width: 100vw;
';
        $buffer .= $indent . '  height: 100vh;
';
        $buffer .= $indent . '  display: flex;
';
        $buffer .= $indent . '  align-items: center;
';
        $buffer .= $indent . '  justify-content: center;
';
        $buffer .= $indent . '  background: #333333;
';
        $buffer .= $indent . '  transition: opacity 0.75s, visibility 0.75s;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.loader--hidden {
';
        $buffer .= $indent . '  opacity: 0;
';
        $buffer .= $indent . '  visibility: hidden;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '.loader::after {
';
        $buffer .= $indent . '  content: "";
';
        $buffer .= $indent . '  width: 75px;
';
        $buffer .= $indent . '  height: 75px;
';
        $buffer .= $indent . '  border: 15px solid #dddddd;
';
        $buffer .= $indent . '  border-top-color: #009578;
';
        $buffer .= $indent . '  border-radius: 50%;
';
        $buffer .= $indent . '  animation: loading 0.75s ease infinite;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '@keyframes loading {
';
        $buffer .= $indent . '  from {
';
        $buffer .= $indent . '    transform: rotate(0turn);
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '  to {
';
        $buffer .= $indent . '    transform: rotate(1turn);
';
        $buffer .= $indent . '  }
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</style>
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . '    window.addEventListener("load", () => {
';
        $buffer .= $indent . '    const loader = document.querySelector(".loader");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   loader.classList.add("loader--hidden");
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '   loader.addEventListener("transitionend", () => {
';
        $buffer .= $indent . '    document.body.removeChild(loader);
';
        $buffer .= $indent . '       });
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</script>
';
        $buffer .= $indent . '<div class="loader"></div>';

        return $buffer;
    }
}

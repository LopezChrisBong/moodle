<?php

class __Mustache_7428d01f8a7a825b11ecbfd4bb09736e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="page-wrapper">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        if ($partial = $this->mustache->loadPartial('theme_trema/navbar_login')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div id="page" class="mt-0 pt-0 container-fluid ';
        $value = $context->findDot('output.login_lang_menu');
        $buffer .= $this->section13da1740a126924245469a4ce12a9171($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="page-content" class="row">
';
        $buffer .= $indent . '            <div id="region-main-box" class="col-12">
';
        $buffer .= $indent . '                <section id="region-main" class="col-12">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </section>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row justify-content-md-center" style="background-color: rgb(255, 255, 255); padding: 20px;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="col-xl-3 col-md-3 col-sm-3 " id="institutes"  class="form-group" style="text-align: center; ">
';
        $buffer .= $indent . '        <i  class="fa fa-5x fa-laptop" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <br>
';
        $buffer .= $indent . '        <p>Institute Of Computing</p> 
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="col-xl-3 col-md-3 col-sm-3 " id="institutes" class="form-group" style="text-align: center;  ">
';
        $buffer .= $indent . '        <i  class="fa fa-5x fa-book" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <br>
';
        $buffer .= $indent . '        <p>Institute Of Teacher Education</p> 
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-xl-3 col-md-3 col-sm-3 " id="institutes" class="form-group" style="text-align: center; ">
';
        $buffer .= $indent . '        <i  class="fa fa-5x fa-bank" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <br>
';
        $buffer .= $indent . '        <p>Institute Of Leadership  Entrepreneurship<br> And Good Governance</p> 
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-xl-3 col-md-3 col-sm-3 " id="institutes" class="form-group" style="text-align: center; ">
';
        $buffer .= $indent . '        <i  class="fa fa-5x fa-flask" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <br>
';
        $buffer .= $indent . '        <p>Institute Of Aquatic And Applied <br> Sciences</p> 
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="row justify-content-md-center" style="background-color:#35632E; padding: 40px; ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="col-xl-4 col-md-4 col-sm-4" id="footer-login" >
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <img style="width: 100px; height: 100px;" src="';
        $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" alt="';
        $value = $this->resolveValue($context->find('sitename'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <br>
';
        $buffer .= $indent . '        <h6 id="footer-text"> <b>Davao del Norte State College</b> <br>
';
        $buffer .= $indent . '        Brgy. New Visayas, Panabo City<br>
';
        $buffer .= $indent . '        Davao del Norte, Philippines, 8105<br>
';
        $buffer .= $indent . '        +63 084-645-3064<br>
';
        $buffer .= $indent . '        info@dnsc.edu.ph</h6><br>
';
        $buffer .= $indent . '      
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '        <a href="https://www.facebook.com/davnorstatecollege/"><span><svg xmlns="http://www.w3.org/2000/svg" width="1.33em" height="1em" data-name="Ebene 1" viewBox="0 0 1024 1024"><path fill="#1877f2" d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z"/><path fill="#fff" d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z"/></svg></span></a>
';
        $buffer .= $indent . '        <a href="https://twitter.com/wearednsc"><span><svg xmlns="http://www.w3.org/2000/svg" width="1.33em" height="1em" viewBox="0 0 28.87 28.87"><g data-name="Layer 2"><g data-name="Layer 1"><rect width="28.87" height="28.87" fill="#00c7ff" rx="6.48" ry="6.48"/><path fill="#fff" fill-rule="evenodd" d="M11.74 18.11a3.29 3.29 0 0 1-3.05-2.28 3.26 3.26 0 0 0 1.41 0A3.28 3.28 0 0 1 8 14.26a3.18 3.18 0 0 1-.48-1.75 3.24 3.24 0 0 0 1.46.4 3.3 3.3 0 0 1-1.35-2A3.25 3.25 0 0 1 8 8.54 9.39 9.39 0 0 0 14.76 12c0-.13 0-.24-.05-.36a3.28 3.28 0 0 1 5.58-2.74.17.17 0 0 0 .17.05 6.6 6.6 0 0 0 1.91-.73A3.36 3.36 0 0 1 21 10a6.3 6.3 0 0 0 1.83-.49l-.33.49a6.44 6.44 0 0 1-1.19 1.13.11.11 0 0 0-.05.1 9.09 9.09 0 0 1-.06 1.46 9.66 9.66 0 0 1-.85 2.92 9.44 9.44 0 0 1-1.77 2.59 8.77 8.77 0 0 1-4.51 2.51 9.79 9.79 0 0 1-1.83.22A9.27 9.27 0 0 1 7 19.52l-.08-.05a6.64 6.64 0 0 0 3.26-.47 6.53 6.53 0 0 0 1.56-.89z"/></g></g></svg></span></a>
';
        $buffer .= $indent . '        <a href=""><span><svg xmlns="http://www.w3.org/2000/svg" width="1.33em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 193"><path fill="#4285F4" d="M58.182 192.05V93.14L27.507 65.077L0 49.504v125.091c0 9.658 7.825 17.455 17.455 17.455h40.727Z"/><path fill="#34A853" d="M197.818 192.05h40.727c9.659 0 17.455-7.826 17.455-17.455V49.505l-31.156 17.837l-27.026 25.798v98.91Z"/><path fill="#EA4335" d="m58.182 93.14l-4.174-38.647l4.174-36.989L128 69.868l69.818-52.364l4.669 34.992l-4.669 40.644L128 145.504z"/><path fill="#FBBC04" d="M197.818 17.504V93.14L256 49.504V26.231c0-21.585-24.64-33.89-41.89-20.945l-16.292 12.218Z"/><path fill="#C5221F" d="m0 49.504l26.759 20.07L58.182 93.14V17.504L41.89 5.286C24.61-7.66 0 4.646 0 26.23v23.273Z"/></svg></span></a>
';
        $buffer .= $indent . '        <a href="https://www.youtube.com/channel/UCF7u4t8j_6GKBZD1hoYxU3w"><span><svg xmlns="http://www.w3.org/2000/svg" width="1.33em" height="1em" viewBox="5.368 13.434 53.9 37.855"><path fill="#FFF" d="M41.272 31.81c-4.942-2.641-9.674-5.069-14.511-7.604v15.165c5.09-2.767 10.455-5.301 14.532-7.561h-.021z"/><path fill="#E8E0E0" d="M41.272 31.81c-4.942-2.641-14.511-7.604-14.511-7.604l12.758 8.575c.001 0-2.324 1.289 1.753-.971z"/><path fill="#CD201F" d="M27.691 51.242c-10.265-.189-13.771-.359-15.926-.803-1.458-.295-2.725-.95-3.654-1.9-.718-.719-1.289-1.816-1.732-3.338-.38-1.268-.528-2.323-.739-4.9-.323-5.816-.4-10.571 0-15.884.33-2.934.49-6.417 2.682-8.449 1.035-.951 2.239-1.563 3.591-1.816 2.112-.401 11.11-.718 20.425-.718 9.294 0 18.312.317 20.426.718 1.689.317 3.273 1.267 4.203 2.492 2 3.146 2.035 7.058 2.238 10.118.084 1.458.084 9.737 0 11.195-.316 4.836-.57 6.547-1.288 8.321-.444 1.12-.823 1.711-1.479 2.366a7.085 7.085 0 0 1-3.76 1.922c-8.883.668-16.426.813-24.987.676zM41.294 31.81c-4.942-2.641-9.674-5.09-14.511-7.625v15.166c5.09-2.767 10.456-5.302 14.532-7.562l-.021.021z"/></svg></span></a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="col-xl-4 col-md-4 col-sm-4 d-none d-sm-block" id="footer-login" >
';
        $buffer .= $indent . '        <h6 id="footer-text">You are not Logged in: <a style="color: white;"href=""> <br> Home</a></h6>
';
        $buffer .= $indent . '        <br><br><br><br><br><br><br>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <h6 > <a id="footer-text" href="https://download.moodle.org/mobile?version=2018051701&lang=en&iosappid=633359593&androidappid=com.moodle.moodlemobile">Get Mobile App</a>  </h6>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->sectionDeb8f2e0a57079005d574c60d88c0d61($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section13da1740a126924245469a4ce12a9171(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-navbar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-navbar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc8ded778e237ad6aca9dc11701f140b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	require([\'theme_trema/particles\'], function() {
        console.log(window.particlesJS(\'page-wrapper\', {{{particlesconfig}}}));
	    window.particlesJS(\'page-wrapper\', {{{particlesconfig}}});
	});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '	require([\'theme_trema/particles\'], function() {
';
                $buffer .= $indent . '        console.log(window.particlesJS(\'page-wrapper\', ';
                $value = $this->resolveValue($context->find('particlesconfig'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '));
';
                $buffer .= $indent . '	    window.particlesJS(\'page-wrapper\', ';
                $value = $this->resolveValue($context->find('particlesconfig'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');
';
                $buffer .= $indent . '	});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDeb8f2e0a57079005d574c60d88c0d61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);

{{#particlesconfig}}
	require([\'theme_trema/particles\'], function() {
        console.log(window.particlesJS(\'page-wrapper\', {{{particlesconfig}}}));
	    window.particlesJS(\'page-wrapper\', {{{particlesconfig}}});
	});
{{/particlesconfig}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda($result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . '
';
                $value = $context->find('particlesconfig');
                $buffer .= $this->sectionAc8ded778e237ad6aca9dc11701f140b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

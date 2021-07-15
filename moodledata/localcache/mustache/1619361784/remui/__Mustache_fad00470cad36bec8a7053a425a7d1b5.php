<?php

class __Mustache_fad00470cad36bec8a7053a425a7d1b5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="fixed-top navbar navbar-light ';
        // 'navbarinverse' section
        $value = $context->find('navbarinverse');
        $buffer .= $this->section8632390d07d8293550e143a1bc183c06($context, $indent, $value);
        $buffer .= '  navbar-expand moodle-has-zindex p-0 greedy" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1880a930791c830b67e23ff34b5a4123($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="navbar-brand navbar-brand-center p-0 m-0 h-100">
';
        // 'output.should_display_logo' section
        $value = $context->findDot('output.should_display_logo');
        $buffer .= $this->section5f61359daf24fe849f13a58a2e69bfb0($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="navbar-options d-flex h-100">
';
        $buffer .= $indent . '        <div data-region="drawer-toggle" class="d-inline-block m-0 h-100">
';
        $buffer .= $indent . '            <button aria-expanded="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'false';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left  bg-transparent h-100"
';
        $buffer .= $indent . '            data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section66b0946d0e0a1df850d6bb3bea0fce2f($context, $indent, $value);
        $buffer .= '<span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="nav-item" id="toggleFullscreen" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB9bd8f3b5663d613ef0e88e005b204af($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <a class="nav-link icon m-0 px-3 h-auto" data-toggle="fullscreen" href="#" role="button" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB9bd8f3b5663d613ef0e88e005b204af($context, $indent, $value);
        $buffer .= '" >
';
        $buffer .= $indent . '                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="expand" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-expand fa-w-14 fa-3x"><path fill="currentColor" d="M0 180V56c0-13.3 10.7-24 24-24h124c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H64v84c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12zM288 44v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12V56c0-13.3-10.7-24-24-24H300c-6.6 0-12 5.4-12 12zm148 276h-40c-6.6 0-12 5.4-12 12v84h-84c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24V332c0-6.6-5.4-12-12-12zM160 468v-40c0-6.6-5.4-12-12-12H64v-84c0-6.6-5.4-12-12-12H12c-6.6 0-12 5.4-12 12v124c0 13.3 10.7 24 24 24h124c6.6 0 12-5.4 12-12z" class=""></path></svg>
';
        $buffer .= $indent . '                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="compress" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-compress fa-w-14 fa-3x"><path fill="currentColor" d="M436 192H312c-13.3 0-24-10.7-24-24V44c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v84h84c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-276-24V44c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v84H12c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24zm0 300V344c0-13.3-10.7-24-24-24H12c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-84h84c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12H312c-13.3 0-24 10.7-24 24v124c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12z" class=""></path></svg>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        // 'hasrecent' section
        $value = $context->find('hasrecent');
        $buffer .= $this->section2a80d23f49441eddd9ee11521b821097($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="navbar-nav h-100 wdm-custom-menus links">
';
        // 'hasrecent' section
        $value = $context->find('hasrecent');
        $buffer .= $this->section549b6306930e44d2f16d9114705fe2e0($context, $indent, $value);
        $buffer .= $indent . '            <!-- custom_menu -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            <!-- page_heading_menu -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- collapsible menu -->
';
        $buffer .= $indent . '        <button class="menu-toggle"><span><i class="fa fa-ellipsis-h" aria-hidden="true"></i></span></button>
';
        $buffer .= $indent . '        <ul class=\'hidden-links hidden\'></ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <!-- login menu toggler on mobile -->
';
        $buffer .= $indent . '        <button type="button" class="navbar-toggler">
';
        $buffer .= $indent . '            <i class="icon fa fa-ellipsis-v" aria-hidden="true"></i>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <ul class="nav navbar-nav ml-auto mr-2 h-100 right-menu justify-content-end">
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- navbar_plugin_output : \'message\', \'notifications\' and \'chat sidebar\' toggles -->
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <!-- user_menu -->
';
        $buffer .= $indent . '            <li class="nav-item d-flex align-items-center">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '            </li>
';
        // 'cansignup' section
        $value = $context->find('cansignup');
        $buffer .= $this->sectionFf6c159d0722045d4a1e835174c2a87c($context, $indent, $value);
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '        <!-- search_box -->
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '</nav>
';
        $value = $this->resolveValue($context->findDot('output.show_license_notice'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section8632390d07d8293550e143a1bc183c06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nav-inverse';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nav-inverse';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1880a930791c830b67e23ff34b5a4123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemenubar, admin';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemenubar, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f4e933b562b47b9d1636f8e1cefa5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'brandlogo, theme_remui';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'brandlogo, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa3229971a02cbf04b1b4dc2fd0ff1b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'brandname, theme_remui';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'brandname, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f61359daf24fe849f13a58a2e69bfb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="header-logo text-white align-items-center justify-content-center h-100 text-decoration-none" href="{{{ config.wwwroot }}}" aria-label="{{#str}}brandlogo, theme_remui{{/str}}">
                <img src="{{ logominiurl }}" class="navbar-brand-logo mini">
                <img src="{{ logourl }}" class="navbar-brand-logo">
            </a>
            <a class="header-sitename text-white align-items-center justify-content-center h-100 text-decoration-none" href="{{{ config.wwwroot }}}" aria-label="{{ sitename }} - {{#str}}brandname, theme_remui{{/str}}">
                <span class="navbar-brand-logo mini"><i class="fa fa-{{siteicon}}"></i></span>
                <span class="navbar-brand-logo font-weight-bold">
                    <i class="fa fa-{{siteicon}}"></i>&nbsp;
                    {{{ sitename }}}
                </span>
            </a>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="header-logo text-white align-items-center justify-content-center h-100 text-decoration-none" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f4e933b562b47b9d1636f8e1cefa5c($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logominiurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="navbar-brand-logo mini">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="navbar-brand-logo">
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <a class="header-sitename text-white align-items-center justify-content-center h-100 text-decoration-none" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '" aria-label="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' - ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAa3229971a02cbf04b1b4dc2fd0ff1b7($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <span class="navbar-brand-logo mini"><i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i></span>
';
                $buffer .= $indent . '                <span class="navbar-brand-logo font-weight-bold">
';
                $buffer .= $indent . '                    <i class="fa fa-';
                $value = $this->resolveValue($context->find('siteicon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></i>&nbsp;
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66b0946d0e0a1df850d6bb3bea0fce2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/menubars';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/menubars';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9bd8f3b5663d613ef0e88e005b204af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglefullscreen, theme_remui';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'togglefullscreen, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83532a037ec5679d598d98c072b0d516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'recent, theme_remui';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'recent, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF80a87500327aca50384fbce294247e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="dropdown-item" role="menuitem" href="{{{ config.wwwroot }}}/course/view.php?id={{{id}}}">{{{fullname}}}</a>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="dropdown-item" role="menuitem" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a80d23f49441eddd9ee11521b821097(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="nav-item dropdown outer d-none" id="recentCourses">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="true" role="button">{{#str}}recent, theme_remui{{/str}}</a>
                <div class="dropdown-menu" role="menu">
                    {{#recentcourses}}
                    <a class="dropdown-item" role="menuitem" href="{{{ config.wwwroot }}}/course/view.php?id={{{id}}}">{{{fullname}}}</a>
                    {{/recentcourses}}
                </div>
            </div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="nav-item dropdown outer d-none" id="recentCourses">
';
                $buffer .= $indent . '                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up" aria-expanded="true" role="button">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section83532a037ec5679d598d98c072b0d516($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                <div class="dropdown-menu" role="menu">
';
                // 'recentcourses' section
                $value = $context->find('recentcourses');
                $buffer .= $this->sectionF80a87500327aca50384fbce294247e0($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section816dc65dd570787faa6931e2ce3a6e17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a class="dropdown-item" role="menuitem" href="{{{ config.wwwroot }}}/course/view.php?id={{{id}}}">{{{fullname}}}</a>
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= $value;
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section549b6306930e44d2f16d9114705fe2e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="dropdown nav-item" id="recentCoursesInner" >
                    <a class="dropdown-toggle nav-link" id="drop-down-{{uniqid}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Recent Courses" aria-label="Recent Course" aria-controls="drop-down-menu-{{uniqid}}">
                        {{#str}}recent, theme_remui{{/str}}
                    </a>
                    <div class="dropdown-menu" role="menu" id="drop-down-menu-{{uniqid}}" aria-labelledby="drop-down-{{uniqid}}">
                        {{#recentcourses}}
                        <a class="dropdown-item" role="menuitem" href="{{{ config.wwwroot }}}/course/view.php?id={{{id}}}">{{{fullname}}}</a>
                        {{/recentcourses}}
                    </div>
                </li>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="dropdown nav-item" id="recentCoursesInner" >
';
                $buffer .= $indent . '                    <a class="dropdown-toggle nav-link" id="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title="Recent Courses" aria-label="Recent Course" aria-controls="drop-down-menu-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section83532a037ec5679d598d98c072b0d516($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    <div class="dropdown-menu" role="menu" id="drop-down-menu-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'recentcourses' section
                $value = $context->find('recentcourses');
                $buffer .= $this->section816dc65dd570787faa6931e2ce3a6e17($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47f819a53e4575a4e7767be1939ab3bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startsignup';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'startsignup';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf6c159d0722045d4a1e835174c2a87c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="nav-item d-flex align-items-center">
                <a href="{{signupurl}}" class="nav-link"><i class="icon fa fa-user-plus"></i> {{#str}}startsignup{{/str}}</a>
            </li>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="nav-item d-flex align-items-center">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="nav-link"><i class="icon fa fa-user-plus"></i> ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section47f819a53e4575a4e7767be1939ab3bf($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

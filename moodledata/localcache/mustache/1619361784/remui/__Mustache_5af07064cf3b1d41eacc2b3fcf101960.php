<?php

class __Mustache_5af07064cf3b1d41eacc2b3fcf101960 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<section data-region="blocks-column" class="d-print-none page-aside" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        // 'initrightsidebar' section
        $value = $context->find('initrightsidebar');
        $buffer .= $this->section4437c99cfc0182fe1e5b826860e109f0($context, $indent, $value);
        $buffer .= $indent . '</section>
';

        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
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
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55929a8501822de4d9ef1f82d6913642(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="unread-count-sidebarbutton font-size-10 count-container animation-shake position-absolute" style="top: 0px;left: -5px;">{{unreadrequestcount}}</span>
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
                
                $buffer .= $indent . '                <span class="unread-count-sidebarbutton font-size-10 count-container animation-shake position-absolute" style="top: 0px;left: -5px;">';
                $value = $this->resolveValue($context->find('unreadrequestcount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ae4b3440846568ec79954f7fc9b4ea0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unpinsidebar, theme_remui';
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
                
                $buffer .= 'unpinsidebar, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c672f2910424e69ca04ee06a3ca5c53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}unpinsidebar, theme_remui{{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0ae4b3440846568ec79954f7fc9b4ea0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c94a430a4fc5676a9997c23bcab7f08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pinsidebar, theme_remui';
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
                
                $buffer .= 'pinsidebar, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section912f23216d5a286cced7bd426a411ad2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="nav-item text-center">
                <a class="nav-link active show py-3" data-toggle="tab" href="#sidebar-blocks" role="tab" aria-label="Post Side Blocks" aria-selected="true">
                <i class="icon fa fa-th-large" aria-hidden="true"></i>
                </a>
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
                
                $buffer .= $indent . '            <li class="nav-item text-center">
';
                $buffer .= $indent . '                <a class="nav-link active show py-3" data-toggle="tab" href="#sidebar-blocks" role="tab" aria-label="Post Side Blocks" aria-selected="true">
';
                $buffer .= $indent . '                <i class="icon fa fa-th-large" aria-hidden="true"></i>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section625c7e1bbbd5e24b00bfd715a783550c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{^messagetoggle}}
                        aria-selected="false"
                    {{/messagetoggle}}
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
                
                // 'messagetoggle' inverted section
                $value = $context->find('messagetoggle');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        aria-selected="false"
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08fe769975cb72de0644995dd3b55892(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    aria-selected="false"
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
                
                $buffer .= $indent . '                    aria-selected="false"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1c53482e32bf74d15976d668957db61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="nav-item text-center">
                <a class="nav-link py-3 {{^hasblocks}}{{^messagetoggle}}active show{{/messagetoggle}}{{/hasblocks}}" data-toggle="tab" href="#sidebar-settings" role="tab" 
                {{^hasblocks}}
                    {{^messagetoggle}}
                        aria-selected="true"
                    {{/messagetoggle}}
                {{/hasblocks}}
                {{#hasblocks}}
                    {{^messagetoggle}}
                        aria-selected="false"
                    {{/messagetoggle}}
                {{/hasblocks}}
                {{^hasblocks}}
                    {{#messagetoggle}}
                    aria-selected="false"
                    {{/messagetoggle}}
                {{/hasblocks}}

                aria-label="Theme Color Customization"

                >
                <i class="icon fa fa-paint-brush" aria-hidden="true"></i>
                </a>
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
                
                $buffer .= $indent . '            <li class="nav-item text-center">
';
                $buffer .= $indent . '                <a class="nav-link py-3 ';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    // 'messagetoggle' inverted section
                    $value = $context->find('messagetoggle');
                    if (empty($value)) {
                        
                        $buffer .= 'active show';
                    }
                }
                $buffer .= '" data-toggle="tab" href="#sidebar-settings" role="tab" 
';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    // 'messagetoggle' inverted section
                    $value = $context->find('messagetoggle');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                        aria-selected="true"
';
                    }
                }
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section625c7e1bbbd5e24b00bfd715a783550c($context, $indent, $value);
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    // 'messagetoggle' section
                    $value = $context->find('messagetoggle');
                    $buffer .= $this->section08fe769975cb72de0644995dd3b55892($context, $indent, $value);
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                aria-label="Theme Color Customization"
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                >
';
                $buffer .= $indent . '                <i class="icon fa fa-paint-brush" aria-hidden="true"></i>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc2ca66bb33b3c3233f65a673da1eb08(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane fade p-0 active show" id="sidebar-blocks">
                {{{ sidepreblocks }}}
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
                
                $buffer .= $indent . '            <div class="tab-pane fade p-0 active show" id="sidebar-blocks">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7baa287cffccde20a70b82432517b5ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane fade p-0 {{^hasblocks}}active show{{/hasblocks}}" id="sidebar-message">
                {{{ messagedrawer }}}
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
                
                $buffer .= $indent . '            <div class="tab-pane fade p-0 ';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    $buffer .= 'active show';
                }
                $buffer .= '" id="sidebar-message">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('messagedrawer'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section501620456d4e32a4b335eaafb24966fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' customizer-migrate-notice, theme_remui ';
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
                
                $buffer .= ' customizer-migrate-notice, theme_remui ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB25d8337481096747a1cbf463fd7e30d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'customizer, theme_remui';
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
                
                $buffer .= 'customizer, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section841f74125d26731b0e533b88457dee62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane fade p-0 {{^hasblocks}}{{^messagetoggle}}active show{{/messagetoggle}}{{/hasblocks}}" id="sidebar-settings">
                <div class="p-3 text-center customizer-migrate-notice">
                    {{#str}} customizer-migrate-notice, theme_remui {{/str}}
                    <br>
                    <a class="text-center btn btn-primary text-white customizer-turn-editing-on">{{#str}}customizer, theme_remui{{/str}}</a>
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
                
                $buffer .= $indent . '            <div class="tab-pane fade p-0 ';
                // 'hasblocks' inverted section
                $value = $context->find('hasblocks');
                if (empty($value)) {
                    
                    // 'messagetoggle' inverted section
                    $value = $context->find('messagetoggle');
                    if (empty($value)) {
                        
                        $buffer .= 'active show';
                    }
                }
                $buffer .= '" id="sidebar-settings">
';
                $buffer .= $indent . '                <div class="p-3 text-center customizer-migrate-notice">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section501620456d4e32a4b335eaafb24966fb($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <br>
';
                $buffer .= $indent . '                    <a class="text-center btn btn-primary text-white customizer-turn-editing-on">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB25d8337481096747a1cbf463fd7e30d($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4437c99cfc0182fe1e5b826860e109f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="page-aside-switch d-flex align-items-center justify-content-center">
        <i class="fa fa-angle-left icon m-0 d-flex align-items-center justify-content-center" aria-hidden="true">
            {{#unreadrequestcount}}
                <span class="unread-count-sidebarbutton font-size-10 count-container animation-shake position-absolute" style="top: 0px;left: -5px;">{{unreadrequestcount}}</span>
            {{/unreadrequestcount}}
        </i>
        {{^disablesidebarpinning}}<i class="fa fa-thumb-tack icon m-0 d-none align-items-center justify-content-center" title="{{#pinaside}}{{#str}}unpinsidebar, theme_remui{{/str}}{{/pinaside}}{{^pinaside}}{{#str}}pinsidebar, theme_remui{{/str}}{{/pinaside}}" aria-hidden="true"></i>{{/disablesidebarpinning}}
    </div>
    <ul class="site-sidebar-nav nav nav-tabs nav-tabs-line" role="tablist">
        {{#hasblocks}}
            <li class="nav-item text-center">
                <a class="nav-link active show py-3" data-toggle="tab" href="#sidebar-blocks" role="tab" aria-label="Post Side Blocks" aria-selected="true">
                <i class="icon fa fa-th-large" aria-hidden="true"></i>
                </a>
            </li>
        {{/hasblocks}}
        {{{ messagetoggle }}}
        {{#usercanmanage}}
            <li class="nav-item text-center">
                <a class="nav-link py-3 {{^hasblocks}}{{^messagetoggle}}active show{{/messagetoggle}}{{/hasblocks}}" data-toggle="tab" href="#sidebar-settings" role="tab" 
                {{^hasblocks}}
                    {{^messagetoggle}}
                        aria-selected="true"
                    {{/messagetoggle}}
                {{/hasblocks}}
                {{#hasblocks}}
                    {{^messagetoggle}}
                        aria-selected="false"
                    {{/messagetoggle}}
                {{/hasblocks}}
                {{^hasblocks}}
                    {{#messagetoggle}}
                    aria-selected="false"
                    {{/messagetoggle}}
                {{/hasblocks}}

                aria-label="Theme Color Customization"

                >
                <i class="icon fa fa-paint-brush" aria-hidden="true"></i>
                </a>
            </li>
        {{/usercanmanage}}
    </ul>
    <div class="site-sidebar-tab-content tab-content">
        {{#hasblocks}}
            <div class="tab-pane fade p-0 active show" id="sidebar-blocks">
                {{{ sidepreblocks }}}
            </div>
        {{/hasblocks}}
        {{#messagedrawer}}
            <div class="tab-pane fade p-0 {{^hasblocks}}active show{{/hasblocks}}" id="sidebar-message">
                {{{ messagedrawer }}}
            </div>
        {{/messagedrawer}}
        {{#usercanmanage}}
            <div class="tab-pane fade p-0 {{^hasblocks}}{{^messagetoggle}}active show{{/messagetoggle}}{{/hasblocks}}" id="sidebar-settings">
                <div class="p-3 text-center customizer-migrate-notice">
                    {{#str}} customizer-migrate-notice, theme_remui {{/str}}
                    <br>
                    <a class="text-center btn btn-primary text-white customizer-turn-editing-on">{{#str}}customizer, theme_remui{{/str}}</a>
                </div>
            </div>
        {{/usercanmanage}}
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
                
                $buffer .= $indent . '    <div class="page-aside-switch d-flex align-items-center justify-content-center">
';
                $buffer .= $indent . '        <i class="fa fa-angle-left icon m-0 d-flex align-items-center justify-content-center" aria-hidden="true">
';
                // 'unreadrequestcount' section
                $value = $context->find('unreadrequestcount');
                $buffer .= $this->section55929a8501822de4d9ef1f82d6913642($context, $indent, $value);
                $buffer .= $indent . '        </i>
';
                $buffer .= $indent . '        ';
                // 'disablesidebarpinning' inverted section
                $value = $context->find('disablesidebarpinning');
                if (empty($value)) {
                    
                    $buffer .= '<i class="fa fa-thumb-tack icon m-0 d-none align-items-center justify-content-center" title="';
                    // 'pinaside' section
                    $value = $context->find('pinaside');
                    $buffer .= $this->section6c672f2910424e69ca04ee06a3ca5c53($context, $indent, $value);
                    // 'pinaside' inverted section
                    $value = $context->find('pinaside');
                    if (empty($value)) {
                        
                        // 'str' section
                        $value = $context->find('str');
                        $buffer .= $this->section2c94a430a4fc5676a9997c23bcab7f08($context, $indent, $value);
                    }
                    $buffer .= '" aria-hidden="true"></i>';
                }
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <ul class="site-sidebar-nav nav nav-tabs nav-tabs-line" role="tablist">
';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->section912f23216d5a286cced7bd426a411ad2($context, $indent, $value);
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('messagetoggle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'usercanmanage' section
                $value = $context->find('usercanmanage');
                $buffer .= $this->sectionE1c53482e32bf74d15976d668957db61($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $buffer .= $indent . '    <div class="site-sidebar-tab-content tab-content">
';
                // 'hasblocks' section
                $value = $context->find('hasblocks');
                $buffer .= $this->sectionFc2ca66bb33b3c3233f65a673da1eb08($context, $indent, $value);
                // 'messagedrawer' section
                $value = $context->find('messagedrawer');
                $buffer .= $this->section7baa287cffccde20a70b82432517b5ea($context, $indent, $value);
                // 'usercanmanage' section
                $value = $context->find('usercanmanage');
                $buffer .= $this->section841f74125d26731b0e533b88457dee62($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

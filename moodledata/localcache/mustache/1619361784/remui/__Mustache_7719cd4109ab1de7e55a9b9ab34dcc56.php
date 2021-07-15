<?php

class __Mustache_7719cd4109ab1de7e55a9b9ab34dcc56 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex ';
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="false" tabindex="-1">
';
        $buffer .= $indent . '    <div id="nav-drawer-container">
';
        // 'isactivitypage' section
        $value = $context->find('isactivitypage');
        $buffer .= $this->sectionB967f9361ffa4c4b726735c0f4373ce7($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isactivitypage' inverted section
        $value = $context->find('isactivitypage');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('theme_remui/flat_navigation')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="site-menubar-footer d-flex align-items-center" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section73665a948de2998bbdfffb99976a1863($context, $indent, $value);
        $buffer .= '" role="group">
';
        // 'navfootermenu' section
        $value = $context->find('navfootermenu');
        $buffer .= $this->section390992d45e56d27ce2f068feb442b69d($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB967f9361ffa4c4b726735c0f4373ce7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> theme_remui/activity_navigation }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_remui/activity_navigation')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73665a948de2998bbdfffb99976a1863(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'drawerfootermenu, theme_remui';
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
                
                $buffer .= 'drawerfootermenu, theme_remui';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section390992d45e56d27ce2f068feb442b69d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{ url }}}" class="w-100 align-items-center d-flex justify-content-center" data-placement="top" data-toggle="tooltip" aria-label="{{title}}" title="{{title}}" role="button">
                <span class="fa {{ iconclass }}" aria-hidden="true"></span>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="w-100 align-items-center d-flex justify-content-center" data-placement="top" data-toggle="tooltip" aria-label="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="button">
';
                $buffer .= $indent . '                <span class="fa ';
                $value = $this->resolveValue($context->find('iconclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" aria-hidden="true"></span>
';
                $buffer .= $indent . '            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

<?php

class __Mustache_d7a9e8620cd2f5ac1d42a0e3879f3272 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'mergemessagingsidebar' inverted section
        $value = $context->find('mergemessagingsidebar');
        if (empty($value)) {
            
            $buffer .= $indent . '<li class="popover-region nav-item text-center m-0">
';
            $buffer .= $indent . '    <a id="message-drawer-toggle-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" class="nav-link popover-region-toggle p-3" href="#sidebar-message" role="button" title="Toggle messaging drawer" aria-label="Toggle messaging drawer" data-placement="top" data-toggle="tooltip" data-original-title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionB69af701c3da068c4b63a9d598702913($context, $indent, $value);
            $buffer .= '">
';
        }
        $buffer .= $indent . '
';
        // 'mergemessagingsidebar' section
        $value = $context->find('mergemessagingsidebar');
        $buffer .= $this->section3f651dad2470b97d7f1aed11f0dc810b($context, $indent, $value);
        $buffer .= $indent . '        <i class="icon fa fa-comment" aria-hidden="true"></i>
';
        $buffer .= $indent . '        <span class="wdm-msg-count font-size-10 badge badge-danger up animation-shake ';
        // 'unreadcount' inverted section
        $value = $context->find('unreadcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '" data-region="count-container">';
        $value = $this->resolveValue($context->find('unreadcount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</li>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionE10894e1d199b8d98cd9097196b8b1a7($context, $indent, $value);

        return $buffer;
    }

    private function sectionB69af701c3da068c4b63a9d598702913(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglemessagemenu, message ';
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
                
                $buffer .= ' togglemessagemenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f651dad2470b97d7f1aed11f0dc810b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{! this is for sidebar tab}}
<li class="popover-region nav-item collapsed text-center m-0">
    <a id="message-drawer-toggle-{{uniqid}}" title="Messaging drawer" aria-label="Messaging drawer" class="nav-link popover-region-toggle p-3" data-toggle="tab" href="#sidebar-message" role="tab" aria-selected="false" data-placement="top" data-toggle="tooltip" data-original-title="{{#str}} togglemessagemenu, message {{/str}}">
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
                
                $buffer .= $indent . '<li class="popover-region nav-item collapsed text-center m-0">
';
                $buffer .= $indent . '    <a id="message-drawer-toggle-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="Messaging drawer" aria-label="Messaging drawer" class="nav-link popover-region-toggle p-3" data-toggle="tab" href="#sidebar-message" role="tab" aria-selected="false" data-placement="top" data-toggle="tooltip" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB69af701c3da068c4b63a9d598702913($context, $indent, $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE10894e1d199b8d98cd9097196b8b1a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'core_message/message_popover\'
],
function(
    $,
    Popover
) {
    var toggle = $(\'#message-drawer-toggle-{{uniqid}}\');
    Popover.init(toggle);
});
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
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_message/message_popover\'
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Popover
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var toggle = $(\'#message-drawer-toggle-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    Popover.init(toggle);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

<?php

class __Mustache_ac0a0d90291367a9ae3478a45e78fda9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_remui/common_start')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<section id="region-main" ';
        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionA8b30bc710534302fe5cc09141cbd5c7($context, $indent, $value);
        $buffer .= ' aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="card card-body">
';
        // 'hasregionmainsettingsmenu' section
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionA50e155453f858c6079de05dce02b047($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.main_content'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </div> 
';
        $buffer .= $indent . '</section>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_remui/common_end')) {
            $buffer .= $partial->renderInternal($context);
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section76df3891fea5ca7096b2ed240aa7eeca($context, $indent, $value);

        return $buffer;
    }

    private function sectionA8b30bc710534302fe5cc09141cbd5c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="has-blocks mb-3"';
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
                
                $buffer .= 'class="has-blocks mb-3"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
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
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA50e155453f858c6079de05dce02b047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="region_main_settings_menu_proxy"></div>
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
                
                $buffer .= $indent . '            <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76df3891fea5ca7096b2ed240aa7eeca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/loader\', \'theme_remui/jquery-floatingscroll\'], function () {
  Breakpoints();
  jQuery(".path-grade-report-grader #region-main>.card").floatingScroll();
  // Grade table scrolling problem issue
    jQuery(document).ready(function () {
        jQuery(\'#page-grade-report-grader-index div.card.card-body\').scroll(function() {
            var scrollPercentage = this.scrollLeft;
            if (scrollPercentage == 0) {
                scrollPercentage = 1;
            } else {
                scrollPercentage = parseInt(scrollPercentage) - 25;
            }

            jQuery(\'#page-grade-report-grader-index div.floater.sideonly\').each(function() {
                if (!jQuery(this).hasClass(\'floating\')) {
                    jQuery(this).addClass(\'floating\');
                    jQuery(this).css(\'margin\',\'0\');
                }
                if (scrollPercentage == 1) {
                    jQuery(this).removeClass(\'floating\');
                }
                jQuery(this).css({left : scrollPercentage+"px",  position:\'absolute\'});
            });
        });
    });
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
                
                $buffer .= $indent . 'require([\'theme_remui/loader\', \'theme_remui/jquery-floatingscroll\'], function () {
';
                $buffer .= $indent . '  Breakpoints();
';
                $buffer .= $indent . '  jQuery(".path-grade-report-grader #region-main>.card").floatingScroll();
';
                $buffer .= $indent . '  // Grade table scrolling problem issue
';
                $buffer .= $indent . '    jQuery(document).ready(function () {
';
                $buffer .= $indent . '        jQuery(\'#page-grade-report-grader-index div.card.card-body\').scroll(function() {
';
                $buffer .= $indent . '            var scrollPercentage = this.scrollLeft;
';
                $buffer .= $indent . '            if (scrollPercentage == 0) {
';
                $buffer .= $indent . '                scrollPercentage = 1;
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                scrollPercentage = parseInt(scrollPercentage) - 25;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            jQuery(\'#page-grade-report-grader-index div.floater.sideonly\').each(function() {
';
                $buffer .= $indent . '                if (!jQuery(this).hasClass(\'floating\')) {
';
                $buffer .= $indent . '                    jQuery(this).addClass(\'floating\');
';
                $buffer .= $indent . '                    jQuery(this).css(\'margin\',\'0\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                if (scrollPercentage == 1) {
';
                $buffer .= $indent . '                    jQuery(this).removeClass(\'floating\');
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '                jQuery(this).css({left : scrollPercentage+"px",  position:\'absolute\'});
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

<?php

class __Mustache_52cd20d262167b927b524e428509f52f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'cannotview' inverted section
        $value = $context->find('cannotview');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class=\'course-progress-settings d-none ';
            // 'alwaysload' section
            $value = $context->find('alwaysload');
            $buffer .= $this->section64879cc4956ded67a6998c4318702124($context, $indent, $value);
            $buffer .= '\'>
';
            $buffer .= $indent . '    <button class="btn btn-primary" id="load-progress" title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section154d2a9dd2e801e02c3f78bc968d7cc3($context, $indent, $value);
            $buffer .= '">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section8bdb57ff4785106a736b8ce44fbe9006($context, $indent, $value);
            $buffer .= '</button>
';
            $buffer .= $indent . '    <div class="form-check d-inline-block" title="';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section6165f24a4748267ce6f40e450ff9b77b($context, $indent, $value);
            $buffer .= '">
';
            $buffer .= $indent . '        <input type="checkbox" class="form-check-input" id="always-load-progress" ';
            // 'alwaysload' section
            $value = $context->find('alwaysload');
            $buffer .= $this->section7749362ecb5f8c27fe0f43d5e969d66c($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '        <label class="form-check-label" for="always-load-progress">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionEacd4f1d2ec17f9f47f4e07bd66e96b5($context, $indent, $value);
            $buffer .= '</label>
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '<div class="block-processing">
';
            $buffer .= $indent . '    <div class="block-processing-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '<div class="course-progress-block" id="course-progress-';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '    <table id="DataTables_Teacher" class="dataTable">
';
            $buffer .= $indent . '        <thead>
';
            $buffer .= $indent . '            <tr role="row">
';
            $buffer .= $indent . '            <th>#</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionD75223b84ca302f0c530113fb878b26c($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section07a6f33d2c721bd97ec4468e5d394b19($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th>';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionC57302775d5ec6b2422c95a847d08c49($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            <th style="width: 100px;">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section58626568f26cbfa0d1710c712564a20c($context, $indent, $value);
            $buffer .= '</th>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '        </thead>
';
            $buffer .= $indent . '        <tbody>
';
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            if ($partial = $this->mustache->loadPartial('block_remuiblck/placeholder-course-progress')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
            $buffer .= $indent . '        </tbody>
';
            $buffer .= $indent . '    </table>
';
            $buffer .= $indent . '    <div class="student_progress_ele">
';
            $buffer .= $indent . '    </div>
';
            $buffer .= $indent . '</div>
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '
';
            // 'js' section
            $value = $context->find('js');
            $buffer .= $this->section6361bd09db3045d7d1b5664fcdce9f79($context, $indent, $value);
        }

        return $buffer;
    }

    private function section64879cc4956ded67a6998c4318702124(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' always-loading ';
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
                
                $buffer .= ' always-loading ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section154d2a9dd2e801e02c3f78bc968d7cc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadcourseprogressdesc, block_remuiblck ';
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
                
                $buffer .= ' loadcourseprogressdesc, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bdb57ff4785106a736b8ce44fbe9006(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadcourseprogress, block_remuiblck ';
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
                
                $buffer .= ' loadcourseprogress, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6165f24a4748267ce6f40e450ff9b77b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' alwaysloaddesc, block_remuiblck ';
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
                
                $buffer .= ' alwaysloaddesc, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7749362ecb5f8c27fe0f43d5e969d66c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checked ';
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
                
                $buffer .= ' checked ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEacd4f1d2ec17f9f47f4e07bd66e96b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' alwaysload, block_remuiblck ';
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
                
                $buffer .= ' alwaysload, block_remuiblck ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD75223b84ca302f0c530113fb878b26c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'course, moodle';
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
                
                $buffer .= 'course, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07a6f33d2c721bd97ec4468e5d394b19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'startdate, block_remuiblck';
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
                
                $buffer .= 'startdate, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC57302775d5ec6b2422c95a847d08c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enrolledstudents, block_remuiblck';
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
                
                $buffer .= 'enrolledstudents, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58626568f26cbfa0d1710c712564a20c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'progress, block_remuiblck';
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
                
                $buffer .= 'progress, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6361bd09db3045d7d1b5664fcdce9f79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_remui/babel-external-helpers\'], function (babelHelpers) {
    window.babelHelpers = babelHelpers;
    require([\'block_remuiblck/course_progress\'], function(courseprogress) {
      courseprogress.init(\'[data-block="remuiblck"] #courseprogress\', {{{alwaysloadwarning}}});
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
                
                $buffer .= $indent . 'require([\'theme_remui/babel-external-helpers\'], function (babelHelpers) {
';
                $buffer .= $indent . '    window.babelHelpers = babelHelpers;
';
                $buffer .= $indent . '    require([\'block_remuiblck/course_progress\'], function(courseprogress) {
';
                $buffer .= $indent . '      courseprogress.init(\'[data-block="remuiblck"] #courseprogress\', ';
                $value = $this->resolveValue($context->find('alwaysloadwarning'), $context);
                $buffer .= $value;
                $buffer .= ');
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

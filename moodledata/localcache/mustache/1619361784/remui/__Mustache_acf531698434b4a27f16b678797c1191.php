<?php

class __Mustache_acf531698434b4a27f16b678797c1191 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="quiz_stats">
';
        // 'has_courses_for_quiz' section
        $value = $context->find('has_courses_for_quiz');
        $buffer .= $this->section6a74c5f599f95de62da1c14f2b45e5d7($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section7ebf2fa67a628c93defc6c4637557b93($context, $indent, $value);

        return $buffer;
    }

    private function section0241b501db9c67521621eca47b8d21c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option data-courseid="{{ courseid }}">{{{ shortname }}}</option>
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
                
                $buffer .= $indent . '            <option data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= $value;
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4de4bef14aba03691826d87c1cbd3eb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option data-courseid="{{ courseid }}" data-quizid="{{ quizid }}">{{{ quizname }}}</option>
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
                
                $buffer .= $indent . '                <option data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-quizid="';
                $value = $this->resolveValue($context->find('quizid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('quizname'), $context);
                $buffer .= $value;
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdd2f8149d7c1eb0d0f6838d9c94954c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'problemwhileloadingdata, block_remuiblck';
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
                
                $buffer .= 'problemwhileloadingdata, block_remuiblck';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a74c5f599f95de62da1c14f2b45e5d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <select id="quiz-course-list" class="form-control mb-30">
          {{# courses_for_quiz}}
            <option data-courseid="{{ courseid }}">{{{ shortname }}}</option>
         {{/ courses_for_quiz}}
       </select>

            <select id="quiz-list" class="form-control mb-30">
                {{# quizzes_in_first_course}}
                <option data-courseid="{{ courseid }}" data-quizid="{{ quizid }}">{{{ quizname }}}</option>
                {{/ quizzes_in_first_course}}
            </select>

            <div id="quiz-chart-area"  class="chart">
                <canvas id="barChart"></canvas>
            </div>
            <div class="quiz-stats-error alert alert-danger" style="display:none">
              {{#str}}problemwhileloadingdata, block_remuiblck{{/str}}
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
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <select id="quiz-course-list" class="form-control mb-30">
';
                // 'courses_for_quiz' section
                $value = $context->find('courses_for_quiz');
                $buffer .= $this->section0241b501db9c67521621eca47b8d21c0($context, $indent, $value);
                $buffer .= $indent . '       </select>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <select id="quiz-list" class="form-control mb-30">
';
                // 'quizzes_in_first_course' section
                $value = $context->find('quizzes_in_first_course');
                $buffer .= $this->section4de4bef14aba03691826d87c1cbd3eb9($context, $indent, $value);
                $buffer .= $indent . '            </select>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div id="quiz-chart-area"  class="chart">
';
                $buffer .= $indent . '                <canvas id="barChart"></canvas>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="quiz-stats-error alert alert-danger" style="display:none">
';
                $buffer .= $indent . '              ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionBdd2f8149d7c1eb0d0f6838d9c94954c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ebf2fa67a628c93defc6c4637557b93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'block_remuiblck/quizstats\'], function(quizstats) {
    quizstats.init(\'#quiz_stats\');
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
                
                $buffer .= $indent . 'require([\'block_remuiblck/quizstats\'], function(quizstats) {
';
                $buffer .= $indent . '    quizstats.init(\'#quiz_stats\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

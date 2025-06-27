<?php

return (new PhpCsFixer\Config())
    ->setRules([
      '@PSR12' => true,
      'array_indentation' => true,
      'blank_line_after_opening_tag' => true,
      'indentation_type' => true,
      'semicolon_after_instruction' => true,
      'braces_position' => [
        'classes_opening_brace' => 'same_line',
        'functions_opening_brace' => 'same_line',
        'anonymous_functions_opening_brace' => 'same_line',
      ],
    ])
    ->setIndent('  ') // 2 spaces
    ->setLineEnding("\n");

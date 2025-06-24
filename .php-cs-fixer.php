<?php

return (new PhpCsFixer\Config())
    ->setRules([
      '@PSR12' => true,
      'array_indentation' => true,
      'blank_line_after_opening_tag' => true,
      'indentation_type' => true,
      'semicolon_after_instruction' => true,
      'no_extra_blank_lines' => true,
      'no_trailing_comma_in_singleline' => true,
      'trailing_comma_in_multiline' => true,
    ])
    ->setIndent('  ') // 2 spaces
    ->setLineEnding("\n");

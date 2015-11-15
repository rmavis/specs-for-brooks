<?php

$opts = [
         'title' => 'Curriculum vitae',

         'nav' => [
                   'order' => 5,
                   'url' => '/cv'
                   ],

         'body_wrap' => [
                         'class' => 'carapace',
                         ],
];


$body = [ ];



$body = <<<HTML

<h1 class="page-head">Brooks Cashbaugh C.V.</h1>

<div class="text-block">
  <p>Scheme and Common Lisp are the two principal dialects of the computer programming language Lisp. Unlike Common Lisp, however, Scheme follows a minimalist design philosophy that specifies a small standard core accompanied by powerful tools for language extension.</p>

  <p>Scheme was created during the 1970s at the MIT AI Lab and released by its developers, Guy L. Steele and Gerald Jay Sussman, via a series of memos now known as the Lambda Papers. It was the first dialect of Lisp to choose lexical scope and the first to require implementations to perform tail-call optimization, giving stronger support for functional programming and associated techniques such as recursive algorithms. It was also one of the first programming languages to support first-class continuations. It had a significant influence on the effort that led to the development of Common Lisp.</p>

  <p>The Scheme language is standardized in the official IEEE standard[2] and a de facto standard called the Revisedn Report on the Algorithmic Language Scheme (RnRS). The most widely implemented standard is R5RS (1998);[3] a new standard, R6RS,[4] was ratified in 2007.[5] Scheme has a diverse user base due to its compactness and elegance, but its minimalist philosophy has also caused wide divergence between practical implementations, so much that the Scheme Steering Committee calls it "the world's most unportable programming language" and "a family of dialects" rather than a single language.[6]</p>
</div>

HTML;

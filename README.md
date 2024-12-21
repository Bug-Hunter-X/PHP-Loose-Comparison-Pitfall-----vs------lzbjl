# PHP Loose Comparison Pitfall

This repository demonstrates a common, yet subtle, error in PHP: the misuse of loose comparison (`==`) instead of strict comparison (`===`).  Loose comparison performs type coercion, leading to unexpected results when comparing values of different types.

The `bug.php` file shows the incorrect use of loose comparison.  The `bugSolution.php` file demonstrates the correct use of strict comparison to avoid the error.

This is a critical point for developers to be aware of to prevent unexpected behavior and improve the robustness of their code.
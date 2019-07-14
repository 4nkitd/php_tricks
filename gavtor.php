<?php

$comment_author_email = '4nkitd@gmail.com';

$gravatar_link = 'http://www.gravatar.com/avatar/' . md5($comment_author_email) . '?s=32';
echo '<img src="' . $gravatar_link . '" />';

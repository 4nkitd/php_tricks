<?php

list($width, $height, $type, $attr) = getimagesize("https://secure.gravatar.com/avatar/8081b26e05bb4354f7d65ffc34cbbd67?s=80&d=retro&r=pg");

echo "Image width " . $width;
echo "Image height " . $height;
echo "Image type " . $type;
echo "Attribute " . $attr;

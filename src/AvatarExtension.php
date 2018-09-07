<?php

namespace olivers\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

use YoHang88\LetterAvatar\LetterAvatar;

/**
 * This Twig extension generates user avatar using name initials letter inside Twig templates.
 * Based on https://github.com/yohang88/letter-avatar
 */
class AvatarExtension extends AbstractExtension
{

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('avatar', [$this, 'generateAvatar']),
        ];
    }

    // Circle Shape, Size 64px, Shape's value can be circle or square
    public function generateAvatar($userCompleteName, $shape = 'circle', $size)
    {
        return new LetterAvatar($userCompleteName, $shape, $size);
    }
}

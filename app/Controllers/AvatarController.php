<?php

namespace app\Controllers;

use app\Models\User;
use app\Traits\AvatarTrait;

class AvatarController
{
    use AvatarTrait;
    public $errors = [];

    public static function getUserAvatar() : string
    {
        $dir = base_path('avatars/');
        $path = $dir . 'default.png'; // path to default avatar image
        $user_avatar = AvatarTrait::makeAvatarName(); // path to default avatar image
        $extensions = ['.png', 'jpg']; // avatar extensions
        $avatars = scandir($dir);


        if (self::findAvatar($avatars, $user_avatar, $extensions)) {
            $user = new User;
            $db_user_avatar = $user->getUserAvatarById([':id' => $_SESSION['user_id']]);
            if ($db_user_avatar !== false) {
                $path = $dir . $db_user_avatar;
            }
        }
        return $path;
    }

    private function findAvatar($avatars, $user_avatars, $extensions = []) : bool
    {
        foreach ($extensions as $extension) {
            foreach ($avatars as $avatar) {
                if ($avatar === $user_avatars . $extension) {
                        // File found
                        return true;
                }
            }
        }
        // File not found
        return false;
    }
}

<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\activerecord\tests\data;

/**
 * Class Profile.
 *
 * @property int $id
 * @property string $description
 */
class Profile extends ActiveRecord
{
    public static function tableName()
    {
        return 'profile';
    }
}

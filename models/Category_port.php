<?php

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord{

	public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'category_port';
	}

	public function getProducts(){
		return $this->hasMany(Product::className(),['category_id' => 'id']);
	}
}
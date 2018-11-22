<?php namespace Electrica\BannerEasy\Models;

use Model;

/**
 * BannerEasy Model
 */
class BannerEasy extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'electrica_bannereasy_banner_easies';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    public $attachMany = [];

    public $rules = [
        'name' => 'required'
    ];

    public function getCategoryOptions(){

        // Вытаскиваем все категории

        $categories = BannerEasyCategory::all();

        $output = [];
        foreach ($categories->toArray() as $category){
            $output[$category['id']] = $category['name'];
        }

        return $output;
    }
}

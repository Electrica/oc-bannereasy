<?php namespace Electrica\BannerEasy\Models;

use Model;

/**
 * BannerEasyCategory Model
 */
class BannerEasyCategory extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'electrica_bannereasy_banner_easy_categories';

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
    public $attachOne = [];
    public $attachMany = [];
}

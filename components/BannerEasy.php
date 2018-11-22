<?php namespace Electrica\BannerEasy\Components;

use Cms\Classes\ComponentBase;
use Cms\Helpers\File;
use Illuminate\Support\Facades\Lang;
use Electrica\BannerEasy\Models\BannerEasy as BannerModel;

class BannerEasy extends ComponentBase
{

    public $banners;
    public function componentDetails()
    {
        return [
            'name'        => 'electrica.bannereasy::lang.app.name',
            'description' => 'electrica.bannereasy::lang.app.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'positions' => [
                'title' => 'electrica.bannereasy::lang.properties.position',
                'description' => 'electrica.bannereasy::lang.properties.position_description',
                'default' => 0,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
            'limit' => [
                'title' => 'electrica.bannereasy::lang.properties.limit',
                'description' => 'electrica.bannereasy::lang.properties.limit_description',
                'default' => 10,
                'type' => 'string',
                'validationPattern' => '^[0-9]+$'
            ],
        ];
    }

    public function onRun()
    {
        // Запускаем выдачу фото

        $this->banners = $this->getBanner();
    }

    public function getBanner(){

        // Выбираем только в указанных сроках

        $time = date('Y-m-d H:i:s', time());

        $banners = BannerModel::where(
            array(
                'active' => 1,
                'category' => $this->property('positions')
            )
        )
            ->where('date_from', '<=', $time)
            ->where('date_to', '>=', $time)
            ->limit($this->property('limit'))
            ->get();

        return $banners;
    }
}

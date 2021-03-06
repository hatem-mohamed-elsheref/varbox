<?php

namespace Varbox\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Varbox\Options\UrlOptions;
use Varbox\Tests\Controllers\UrlController;
use Varbox\Traits\HasUrl;

class MenuPost extends Model
{
    use HasUrl;

    /**
     * The database table.
     *
     * @var string
     */
    protected $table = 'menu_posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Get the options for the UrlOptions trait.
     *
     * @return UrlOptions
     */
    public function getUrlOptions() : UrlOptions
    {
        return UrlOptions::instance()
            ->routeUrlTo(UrlController::class, 'show')
            ->generateUrlSlugFrom('name')
            ->saveUrlSlugTo('slug');
    }
}

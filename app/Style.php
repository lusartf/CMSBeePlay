<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable = [
        'backgroundColor', 'navBarColor', 'iconNavBarColor', 'footerColor', 'textFooterColor','textCategoryColor','navBarLogo', 'footerLogo','loginLogo', 'slideItem', 
    ];
}

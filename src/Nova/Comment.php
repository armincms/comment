<?php

namespace Armincms\Comment\Nova;


use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text; 
use Laravel\Nova\Fields\Markdown; 
use Laravel\Nova\Fields\Boolean;  
use Laravel\Nova\Http\Requests\NovaRequest; 

class Comment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'Armincms\Comment\Comment';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'comment';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'comment'
    ];  

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),  

            Markdown::make(__("Comment"), 'comment')->required(),
        ];
    }  
}

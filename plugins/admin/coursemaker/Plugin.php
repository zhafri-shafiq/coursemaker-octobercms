<?php namespace Admin\Coursemaker;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function pluginDetails()
    {
    	return [
    	'name' => 'Course Maker',
    	'description' => 'Manage course for student',
    	'author' => 'admin',
    	'icon' => 'icon-leaf'
    	];
    }

    public function registerNavigation()
    {
        return [
            'coursemaker' => [
                'label' => 'CourseMAKER',
                'url' => Backend::url('admin/coursemaker/courses'),
                'icon' => 'icon-trophy',
                'permissions' => ['admin.*'],
                'order' => 100,
            ]
        ];
    }
}

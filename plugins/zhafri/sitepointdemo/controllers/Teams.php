<?php namespace Zhafri\SitepointDemo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Teams Back-end Controller
 */
class Teams extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $requiredPermissions = ['zhafri.sitepointdemo.manage_teams'];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Zhafri.SitepointDemo', 'sitepointdemo', 'teams');
    }

    public function create_onSave()
    {
        $inputs = post('Team');

        //simpan team
        $teamModel = new \Zhafri\SitepointDemo\Models\Team;
        $teamModel->name = $inputs['name'];
        $teamModel->save();

        //update users team_id
        \Backend\Models\User::whereIn('id', $inputs['users'])->update(['team_id' => $teamModel->id]);

        \Flash::success("Team saved successfully, tahniah!");

        return $this->makeRedirect('update', $teamModel);
    }

    public function update_onSave($recordId, $context = null)
    {
        $inputs = post('Team');

        //update team
        // $teamModel = \Zhafri\SitepointDemo\Models\Team::findOrFail($recordId);
        // $teamModel->name = $inputs['name'];
        // $teamModel->save();

        // \Backend\Models\User::where('team_id', $teamModel->id)->update(['team_id' => 0]);

        // //update users team_id
        // \Backend\Models\User::whereIn('id', $inputs['users'])->update(['team_id' => $teamModel->id]);

        // \Flash::success("Team updated successfully");

        \Backend\Models\User::where('team_id', $recordId)->update(['team_id' => 0]);

        //update users team_id
        \Backend\Models\User::whereIn('id', $inputs['users'])->update(['team_id' => $recordId]);

        $this->asExtension('FormController')->update_onSave($recordId, $context);
    }

    // public function update_onDelete($recordId)
    // {
    //     $teamModel = \Zhafri\SitepointDemo\Models\Team::findOrFail($recordId);
    //     \Backend\Models\User::where('team_id', $teamModel->id)->update(['team_id' => 0]);

    //     $teamModel->delete();
    //     \Flash::success("Team deleted successfully");

    //     return $this->makeRedirect('delete', $teamModel);
    // }

    public function formAfterDelete($model)
    {
        \Backend\Models\User::where('team_id', $model->id)->update(['team_id' => 0]);
    }

    public function formExtendFields($form)
    {
        if($form->getContext() === 'update')
        {
            $team = $form->model;
            $userField = $form->getField('users');
            $userField->value = $team->users->lists('id');
        }
    }

    // public function update()
    // {
    //     if(!$this->user->hasPermission(['zhafri.sitepointdemo_update_teams']))
    //     {
    //         //redirect Unauthorized 401
    //     }
    // }
}
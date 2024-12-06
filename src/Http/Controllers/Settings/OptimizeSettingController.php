<?php

namespace Tec\Optimize\Http\Controllers\Settings;

use Tec\Base\Http\Responses\BaseHttpResponse;
use Tec\Optimize\Forms\Settings\OptimizeSettingForm;
use Tec\Optimize\Http\Requests\OptimizeSettingRequest;
use Tec\Setting\Http\Controllers\SettingController;

class OptimizeSettingController extends SettingController
{
    public function edit()
    {
        $this->pageTitle(trans('packages/optimize::optimize.settings.title'));

        return OptimizeSettingForm::create()->renderForm();
    }

    public function update(OptimizeSettingRequest $request): BaseHttpResponse
    {
        return $this->performUpdate($request->validated());
    }
}

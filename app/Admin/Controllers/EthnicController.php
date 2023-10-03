<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Ethnic;

class EthnicController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ethnic';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ethnic());

        $grid->column('id', __('Id'));
        $grid->column('ethnic name', __('Ethnic name'));
        $grid->column('population', __('Population'));
        $grid->column('language', __('Language'));
        $grid->column('christianity', __('Christianity'));
        $grid->column('description', __('Description'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Ethnic::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('ethnic name', __('Ethnic name'));
        $show->field('population', __('Population'));
        $show->field('language', __('Language'));
        $show->field('christianity', __('Christianity'));
        $show->field('description', __('Description'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Ethnic());

        $form->text('ethnic name', __('Ethnic name'));
        $form->number('population', __('Population'));
        $form->text('language', __('Language'));
        $form->decimal('christianity', __('Christianity'));
        $form->text('description', __('Description'));

        return $form;
    }
}

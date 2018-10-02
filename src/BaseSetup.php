<?php
namespace Nemesis;

/**
 * Class BaseSetup
 *
 * This is for helpers only
 */
class BaseSetup
{
    /**
     * Lists out all of the available Gravity forms
     *
     * Requires Gravity forms to be installed to work
     *
     * @return array
     */
    public static function list_gravity_forms()
    {
        $forms = \GFAPI::get_forms();
        $results = [];

        foreach ($forms as $form) {
            $results[$form['id']] = $form['title'];
        }

        return $results;
    }
}
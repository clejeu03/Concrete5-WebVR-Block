<?php

namespace Application\Block\LaserGlazer;

use Concrete\Core\Block\BlockController;
use Core;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController
{

    protected $btTable = "btLaserGlazer";
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "240";
    protected $btDefaultSet = 'basic';

    public function getBlockTypeName()
    {
        return t('Laser Glazer');
    }

    public function validate($data)
    {
        $e = Core::make('error');
        if (!$data['field1']) {
            $e->add(t('You must put something in the field 1 box.'));
        }
        return $e;
    }

    public function getBlockTypeDescription()
    {
        return t('A simple webvr test');
    }

    public function save($data)
    {
        $data['booleanfield'] = intval($data['booleanfield']);
        parent::save($data);
    }
}

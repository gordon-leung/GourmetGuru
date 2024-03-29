<?php

class Group extends AppModel {

    var $name = 'Group';
    var $actsAs = array('Acl' => array('type' => 'requester'));

    function parentNode() {
        return null;
    }

    var $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Group name cannot be empty'
            )
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasMany = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'group_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}

?>

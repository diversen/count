<?php

namespace modules\count;

use diversen\db\rb;

class module {
    
    public function increment ($table, $column, $id) {
        
        $bean = \R::findOne($table,' id = ? ',array($id));
        if (!$bean) {
            
            return;
        }
        \R::begin();
        $bean->{$column}++;
        \R::store($bean);
        \R::commit();
    }
}

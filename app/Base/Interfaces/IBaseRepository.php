<?php

namespace Base\Interfaces;

interface IBaseRepository {    
    public function create($data);
    public function update($id, $data);
    public function delete ($id);
}
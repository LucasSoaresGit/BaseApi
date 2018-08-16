<?php
namespace Base\Repositories;

class BaseRepository implements IBaseRepository {

    public $model = null;
 
    public function create($data) {		
        $model = new $this->model;
		
		$model->fill($data);	
		
		$result = false;

		try {
			$result = $model->save();	
		} catch (\Illuminate\Database\QueryException $ex) {			
			\Log::info($ex->errorInfo);
			return $ex->errorInfo[2];
		}		

		if($result) {
			$id = \DB::getPdo()->lastInsertId();				
			$lastCreated = $model->where('id', $id)->first();

            return $lastCreated;            
		}

		return $result;
    };

    public function update($id, $data) {
        $model = new $this->model;

		$result = false;
		
		try {
			$result = $model->where('id', $id)->update($data);						
		} catch (\Illuminate\Database\QueryException $ex) {			
			\Log::info(['error update' => $ex->errorInfo]);
			return $ex->errorInfo[2];
		}		
		
		if(!$result && $result != 0) {				
			return false;			
		}		
		
		$atualizado = $model->where('id', $id)->get();			

        return $atualizado[0];            
    };

    public function delete ($id) {
        $model = new $this->model;

		return $model->where('id', $id)->delete();
    };

}
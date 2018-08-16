<?php

namespace Src\Extractor\Repositories;

use Base\Repositories\BaseRepository;
use Src\Extractor\Models\Extractor;

class ExtractorRepository extends BaseRepository {    
    
	public function __construct ()	{
		$this->model = new Extractor;
	}
}
<?php
declare(strict_types = 1);

namespace App\Repositories\GameRepository;

Interface GameRepositoryInterface
{
	
	public function getAllGames();
	
	public function getGame(int $id);
	
	public function create(array $data);
	
	public function update(int $id, array $data);
	
	public function delete(int $id);
	
}




<?php
declare(strict_types = 1);

namespace App\Services\GameService;
use App\Services\GameService\GameServiceInterface;
use App\Repositories\GameRepository\GameRepositoryInterface;


class GameService implements GameServiceInterface
{
	private $gameRepositoryInterface;

	public function __construct(GameRepositoryInterface $gameRepositoryInterface)
	{
		return $this->gameRepositoryInterface = $gameRepositoryInterface;
	}

	public function getAllGames()
	{
		return $this->gameRepositoryInterface->getAllGames();
	}
	
	public function getGame(int $id)
	{
		return $this->gameRepositoryInterface->getGame($id);
	}
	
	public function create(array $data)
	{
		return $this->gameRepositoryInterface->create($data);
	}
	
	public function update(int $id, array $data)
	{
		return $this->gameRepositoryInterface->update($id, $data);
	}
	
	public function delete(int $id)
	{
		return $this->gameRepositoryInterface->delete($id);
	}

}
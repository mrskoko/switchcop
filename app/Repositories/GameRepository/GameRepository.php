<?php
declare(strict_types = 1);

namespace App\Repositories\GameRepository;
use App\Repositories\GameRepository\GameRepositoryInterface;
use App\Models\Game;


class GameRepository implements GameRepositoryInterface
{
	private $model;

	public function __construct(Game $model)
	{
		$this->model = $model;
	}

	public function getAllGames()
	{
		return $this->model->all();
	}

	public function getGame(int $id)
	{
		return $this->model->find($id);
	}

	public function create(array $data)
	{
		return $this->model->create($data);
	}

	public function update(int $id, array $data)
	{

		$game = $this->model->findOrFail($id);
		$game->fill($data)->save();
		return redirect()->back();
	}

	public function delete(int $id)
	{
		$this->model->find($id)->delete();
		return true;
	}

}
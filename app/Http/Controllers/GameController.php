<?php
declare(strict_types = 1);

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\GameService\GameServiceInterface;

class GameController extends Controller
{

	private $gameServiceInterface;

	public function __construct(GameServiceInterface $gameServiceInterface)
	{
		$this->gameServiceInterface = $gameServiceInterface;
	}

	public function getAllGames()
	{

		$allGames = $this->gameServiceInterface->getAllGames();
	    //return response()->json($allGames);
		return view('games', compact('allGames'));
	}

	public function getGame(int $id)
	{
		$game = $this->gameServiceInterface->getGame($id);
		//return response()->json($game);
		return view('gameSingle', compact('game'));
	}
	
	public function create(Request $request)
	{
		$this->gameServiceInterface->create($request->all());
		return redirect('/games');
	}
	
	public function update(Request $request)
	{
		$this->gameServiceInterface->update((int)$request->id, $request->all());
		return redirect('/games');
	}
	
	public function delete(int $id)
	{
		$this->gameServiceInterface->delete($id);
		return redirect('/games');
	}	

    public function index()
    {
    	return view('welcome');
    }

    public function addGame()
    {
    	return view('gamesAdd');
    }

}

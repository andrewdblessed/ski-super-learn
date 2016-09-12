<?php

namespace Skilearn\Http\Controllers;
use Auth;
use Skilearn\Models\User;
use Skilearn\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{



	public function postTodos(Request $request)
	{
	$this->validate($request, [
		'title' => 'required|max:170',
		'date' => 'max:11',
		'time' => 'max:7',

	]);
	Auth::user()->todos()->create([
		'todo_title' => $request->input('title'),
		'todo_date' => $request->input('date'),
		'todo_time' => $request->input('time'),
	]);
	return redirect()->route('dashboard.todo')->with('signupsuccess', 'New Task Added.');

			 }

			 public function deleteTodos(Request $request)
			 {
			 $this->validate($request, [
			 	'title' => 'required|max:170',
			 	'date' => 'max:11',
			 	'time' => 'max:7',

			 ]);
			 Auth::user()->todos()->delete([
			 	'todo_title' => $request->input('title'),
			 	'todo_date' => $request->input('date'),
			 	'todo_time' => $request->input('time'),
			 ]);
			 return redirect()->route('dashboard.todo')->with('signupsuccess', 'New Task Added.');

			 		 }

			 public function viewTodo()
			 {
			 		$title ='Todo';
					$skiSearch = true;
					$skiSearch_placehold = "Search Ainotes and notes";


			 		if (Auth::check()) {
			 				$todo_call = Todo::where(function($query)
			 						{
			 							return $query->where('user_id', Auth::user()->id);
			 						})
			 						->orderBy('created_at', 'desc')
			 						->paginate(10);

			 		return view ('dashboard.todo')
			 		->with('title', $title)
					->with('skiSearch', $skiSearch)
					->with('skiSearch_placehold',   $skiSearch_placehold)
			 		->with('todo_call', $todo_call);

			 				}
			 }

			 public function ajaxTodo()
			 {
					$title ='Todo';

					if (Auth::check()) {
							$todo_call = Todo::where(function($query)
									{
										return $query->where('user_id', Auth::user()->id);
									})
									->orderBy('created_at', 'desc')
									->paginate(10);

					return view ('dashboard.todos.todoload')
					->with('title', $title)
					->with('todo_call', $todo_call);

							}
			 }

	}

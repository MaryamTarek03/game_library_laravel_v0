<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    public function create()
    {
        return view('games.create');
    }

    public function edit(Game $game)
    {
        return view('games.edit', ['game' => $game]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'release_date' => 'required|date',
            'poster_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'epic_link' => 'nullable|url',
            'steam_link' => 'nullable|url',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        // Create a new game instance
        $game = new Game();
        $game->title = $validatedData['title'];
        $game->description = $validatedData['description'];
        $game->price = $validatedData['price'];
        $game->release_date = $validatedData['release_date'];
        $game->epic_link = $validatedData['epic_link'] ?? null;
        $game->steam_link = $validatedData['steam_link'] ?? null;
        $game->rating = $validatedData['rating'];

        // Handle file uploads for images
        if ($request->hasFile('poster_image')) {
            $posterPath = $request->file('poster_image')->store('posters', 'public');
            $game->poster_image = $posterPath;
        }

        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')->store('covers', 'public');
            $game->cover_image = $coverPath;
        }

        try {
            $game->save();
            return redirect()->route('games.index')->with('success', 'Game created successfully!');
        } catch (\Exception $e) {
            // Log the error or display the message if something goes wrong
            \Log::error('Error creating game: ' . $e->getMessage());
            return back()->with('error', 'Failed to create the game.');
        }
    }

    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }

    public function update(Request $request, Game $game)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'release_date' => 'required|date',
            'poster_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'epic_link' => 'nullable|url',
            'steam_link' => 'nullable|url',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        // Update the game instance
        $game->title = $validatedData['title'];
        $game->description = $validatedData['description'];
        $game->price = $validatedData['price'];
        $game->release_date = $validatedData['release_date'];
        $game->epic_link = $validatedData['epic_link'] ?? null;
        $game->steam_link = $validatedData['steam_link'] ?? null;
        $game->rating = $validatedData['rating'];

        // Handle file uploads for images
        if ($request->hasFile('poster_image')) {
            $posterPath = $request->file('poster_image')->store('posters', 'public');
            $game->poster_image = $posterPath;
        }

        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')->store('covers', 'public');
            $game->cover_image = $coverPath;
        }

        try {
            $game->save();
            return redirect()->route('games.index')->with('success', 'Game updated successfully!');
        } catch (\Exception $e) {
            // Log the error or display the message if something goes wrong
            \Log::error('Error updating game: ' . $e->getMessage());
            return back()->with('error', 'Failed to update the game.');
        }
    }

    public function destroy(Game $game)
    {
        try {
            $game->delete();
            return redirect()->route('games.index')->with('success', 'Game deleted successfully!');
        } catch (\Exception $e) {
            \Log::error('Error deleting game: ' . $e->getMessage());
            return back()->with('error', 'Failed to delete the game.');
        }
    }
}

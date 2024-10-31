<?php

namespace App\Controllers;

use App\Models\Metal;

class MetalController
{
    // Function to display all metal songs
    public function index()
    {
        $songs = Metal::getAll();
        return view('metal/index', ['songs' => $songs]);
    }

    // Function to show the create form
    public function create()
    {
        return view('metal/create');
    }

    // Function to store a new metal song
    public function store($data)
    {
        $data['SonActius'] = isset($data['SonActius']) ? 1 : 0;
        Metal::create($data);
        header('location: /metal');
        exit;
    }

    // Function to show the edit form
    public function edit($idCanso)
    {
        if ($idCanso === null) {
            header('location: /metal');
            exit;
        }

        $song = Metal::find($idCanso);
        if (!$song) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        return view('metal/edit', ['song' => $song]);
    }

    // Function to update an existing metal song
    public function update($idCanso, $data)
    {
        // Convert 'SonActius' to an integer
        $data['SonActius'] = isset($data['SonActius']) ? 1 : 0;
        Metal::update($idCanso, $data);
        header('location: /metal');
        exit;
    }

    // Function to show the delete confirmation page
    public function delete($idCanso)
    {
        if ($idCanso === null) {
            header('location: /metal');
            exit;
        }

        $song = Metal::find($idCanso);
        return view('metal/delete', ['song' => $song]);
    }

    // Function to delete a metal song
    public function destroy($idCanso)
    {
        Metal::delete($idCanso);
        header('location: /metal');
        exit;
    }
}